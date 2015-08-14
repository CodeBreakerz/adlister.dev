<?php 

require_once 'BaseModel.php';

class User extends Model
{
	protected static $table = 'users';

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

		$password = $this->attributes['password'];
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		$query = 'UPDATE users 
					SET first_name = :first_name, 
					last_name = :last_name,
					username = :username,
					password = :password,
					email = :email,
					address = :address,
					address_line_2 = :address_line_2,
					city = :city,
					state = :state,
					zip_code = :zip_code,
					phone = :phone
					WHERE id = :id';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':first_name', $this->attributes['first_name'], PDO::PARAM_STR);
		$stmt->bindValue(':last_name', $this->attributes['last_name'], PDO::PARAM_STR);
		$stmt->bindValue(':username', $this->attributes['username'], PDO::PARAM_STR);
		$stmt->bindValue(':password', $this->hashedPassword, PDO::PARAM_STR);
		$stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
		$stmt->bindValue(':address', $this->attributes['address'], PDO::PARAM_STR);
		$stmt->bindValue(':address_line_2', $this->attributes['address_line_2'], PDO::PARAM_STR);
		$stmt->bindValue(':city', $this->attributes['city'], PDO::PARAM_STR);
		$stmt->bindValue(':state', $this->attributes['state'], PDO::PARAM_STR);
		$stmt->bindValue(':zip_code', $this->attributes['zip_code'], PDO::PARAM_STR);
		$stmt->bindValue(':phone', $this->attributes['phone'], PDO::PARAM_STR);
		$stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
		$stmt->execute();
	}

	public function insert ()
	{
		self::dbConnect();

		$password = $this->attributes['password'];
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		$query = 'INSERT INTO users (first_name, last_name, username, password, email, address, address_line_2, city, state, zip_code, phone) 
					VALUES (:first_name, :last_name, :username, :password, :email, :address, :address_line_2, :city, :state, :zip_code, :phone)';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':first_name', $this->attributes['first_name'], PDO::PARAM_STR);
		$stmt->bindValue(':last_name', $this->attributes['last_name'], PDO::PARAM_STR);
		$stmt->bindValue(':username', $this->attributes['username'], PDO::PARAM_STR);
		$stmt->bindValue(':password', $this->$hashedPassword, PDO::PARAM_STR);
		$stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
		$stmt->bindValue(':address', $this->attributes['address'], PDO::PARAM_STR);
		$stmt->bindValue(':address_line_2', $this->attributes['address_line_2'], PDO::PARAM_STR);
		$stmt->bindValue(':city', $this->attributes['city'], PDO::PARAM_STR);
		$stmt->bindValue(':state', $this->attributes['state'], PDO::PARAM_STR);
		$stmt->bindValue(':zip_code', $this->attributes['zip_code'], PDO::PARAM_STR);
		$stmt->bindValue(':phone', $this->attributes['phone'], PDO::PARAM_STR);
		$stmt->execute();
	}

	public function delete ()
	{
		self::dbConnect();
		$query = 'DELETE * FROM users WHERE id = :id';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
	}

	public static function find ($id)
	{
		self::dbConnect();
		$query = 'SELECT * FROM users WHERE id = :id';
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
		$stmt = self::$dbc->query('SELECT * FROM users');
		
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