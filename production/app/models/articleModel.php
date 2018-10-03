<?php
class articleModel extends Database {

    /*
     * Biến này đã chứa kết nối đến CSDL
     */
    public $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = self::$connection;
    }

    public function getRows() {

        $data = array();
        $sql = "SELECT * FROM article";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }

    public function store() {

        $sql = "INSERT INTO article (title, article_content, status)
VALUES ('Test', 'Test', 1)";

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }



}