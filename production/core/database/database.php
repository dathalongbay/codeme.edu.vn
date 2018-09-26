<?php
class Database {

    public static $connection = null;

    /**
     * $db = new Database();
     * Database constructor.
     */
    public function __construct()
    {
        /**
         * Lan chay thu 2
         */
        if(self::$connection){
            return self::$connection;
        }

        $this->connect();

    }

    public function connect() {

        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        self::$connection = new mysqli($servername, $username, $password);

        // Check connection
        if (self::$connection->connect_error) {
            die("Connection failed: " . self::$connection->connect_error);
        }
    }

    public function disconnect() {
        self::$connection->close();
    }

}