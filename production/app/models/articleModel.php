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

    public function getRow($id) {
        $data = null;
        $sql = "SELECT * FROM article WHERE id=" . $id;
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function store($data) {



        echo '<pre>';
        print_r($data);
        echo '</pre>';

        if ($data['id'] > 0) {
            // Trường hợp edit
            $sql = "UPDATE article SET title='". $data['title'] ."',article_content='".$data['article_content']."',status=".$data['status']." WHERE id=".$data['id'];
        } else {
            // Trường hợp thêm mới
            $sql = "INSERT INTO article (title, article_content, status)
VALUES ('". $data['title'] ."', '".$data['article_content']."', ".$data['status'].")";

        }

        echo $sql; die;

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }



}