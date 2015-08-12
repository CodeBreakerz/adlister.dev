<?php

define ('DB_HOST', '127.0.0.1');
define ('DB_NAME', 'auction_house_db');
define ('DB_USER', 'Arthus');
define ('DB_PASS', '');

class Model {

    protected static $dbc;
    protected static $table;

    public $attributes = array();

    /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /*
     * Connect to the DB
     */
    protected static function dbConnect()
    {

        if (!self::$dbc)
        {
            // Connect to database
            
            self::$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

            self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
    }

    /*
     * Get a value from attributes based on name
     */
    public function __get($name)
    {
        // Return the value from attributes with a matching $name, if it exists
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        return null;
    }

    

    /*
     * Set a new attribute for the object
     */
    public function __set($name, $value)
    {
        // Store name/value pair in attributes array
        $this->attributes[$name] = $value;

    }

    /*
     * Persist the object to the database
     */
    public function save()
    {
        
    }

    /*
     * Find a record based on an id
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();
        
        $instance = null;
        
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }

        return $instance;
    }

    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();
    }

}

