<?php 
require_once 'BaseModel.php';

class Character extends Model
{
	protected static $table = 'characters';

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
		$query = 'UPDATE characters 
					SET name = :name, 
					realm = :realm,
					class = :class,
					race = :race,
					character_image = :character_image
					WHERE id = :id';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
		$stmt->bindValue(':realm', $this->attributes['realm'], PDO::PARAM_STR);
		$stmt->bindValue(':class', $this->attributes['class'], PDO::PARAM_STR);
		$stmt->bindValue(':race', $this->attributes['race'], PDO::PARAM_STR);
		$stmt->bindValue(':character_image', $this->attributes['character_image'], PDO::PARAM_STR);
		$stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
		$stmt->execute();
	}

	public function insert ()
	{
		self::dbConnect();
		$query = 'INSERT INTO characters (name, realm, class, race, character_image, item_number) 
					VALUES (:name, :realm, :class, :race, :character_image, :item_number)';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
		$stmt->bindValue(':realm', $this->attributes['realm'], PDO::PARAM_STR);
		$stmt->bindValue(':class', $this->attributes['class'], PDO::PARAM_STR);
		$stmt->bindValue(':race', $this->attributes['race'], PDO::PARAM_STR);
		$stmt->bindValue(':character_image', $this->attributes['character_image'], PDO::PARAM_STR);
		$stmt->execute();
	}

	public function delete ()
	{
		self::dbConnect();
		$query = 'DELETE * FROM characters WHERE id = :id';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
	}

	public static function find ($id)
	{
		self::dbConnect();
		$query = 'SELECT * FROM characters WHERE id = :id';
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
		$stmt = self::$dbc->query('SELECT * FROM characters');
		
		// Assign all results to a variable
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$instance = null;
        if ($result) {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
	}

}	

?>