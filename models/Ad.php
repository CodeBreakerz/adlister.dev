<?php 
require_once 'BaseModel.php';

class Ad extends Model
{
	protected static $table = 'items';

	public function save ()
	{
		if(isset($this->attributes)){
			if(isset($this->attributes['id'])) {
				$this->update();
			} else {
				$this->insert();
			}
		}
	}

	public function update ()
	{
		self::dbConnect();
		$query = 'UPDATE items 
					SET item_name = :item_name, 
					item_type = :item_type,
					date_listed = :date_listed,
					price = :price,
					description = :description,
					item_number = :item_number
					WHERE id = :id';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':item_name', $this->attributes['item_name'], PDO::PARAM_STR);
		$stmt->bindValue(':item_type', $this->attributes['item_type'], PDO::PARAM_STR);
		$stmt->bindValue(':date_listed', $this->attributes['date_listed'], PDO::PARAM_STR);
		$stmt->bindValue(':price', $this->attributes['price'], PDO::PARAM_STR);
		$stmt->bindValue(':description', $this->attributes['description'], PDO::PARAM_STR);
		$stmt->bindValue(':item_number', $this->attributes['item_number'], PDO::PARAM_STR);
		$stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
		$stmt->execute();
	}

	public function insert ()
	{
		self::dbConnect();
		$query = 'INSERT INTO items (item_name, item_type, date_listed, price, description, item_number) 
					VALUES (:item_name, :item_type, :date_listed, :price, :description, :item_number)';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':item_name', $this->attributes['item_name'], PDO::PARAM_STR);
		$stmt->bindValue(':item_type', $this->attributes['item_type'], PDO::PARAM_STR);
		$stmt->bindValue(':date_listed', $this->attributes['date_listed'], PDO::PARAM_STR);
		$stmt->bindValue(':price', $this->attributes['price'], PDO::PARAM_STR);
		$stmt->bindValue(':description', $this->attributes['description'], PDO::PARAM_STR);
		$stmt->bindValue(':item_number', $this->attributes['item_number'], PDO::PARAM_STR);
		$stmt->execute();
	}

	public function delete ()
	{
		self::dbConnect();
		$query = 'DELETE * FROM items WHERE id = :id';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
	}

	public static function find ($id)
	{
		self::dbConnect();
		$query = 'SELECT * FROM items WHERE id = :id';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;
        if ($result) {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
	}

	public static function all ()
	{
		// Start by connecting to the DB
		self::dbConnect();

		// Get all rows
		$stmt = self::$dbc->query('SELECT * FROM items');
		
		// Assign all results to a variable
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$instance = null;
        if ($result) {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
	}

	public static function paginate ($limit, $offset) {
		self::dbConnect();

		
		$stmt = self::$dbc->prepare("SELECT * FROM items LIMIT :limit OFFSET :offset ");
		$stmt->bindvalue(':limit', $limit, PDO::PARAM_INT);
		$stmt->bindvalue(':offset', $offset, PDO::PARAM_INT);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$instance = null;
        if ($result) {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
	}


	public static function count () {
		self::dbConnect();

		$count = self::$dbc->query('SELECT count(*) FROM items')->fetchColumn();
		return $count;
	}

}	

?>