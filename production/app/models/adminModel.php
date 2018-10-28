<?php
class adminModel extends Database {

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
        $sql = "SELECT * FROM admins";
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
        $sql = "SELECT * FROM admins WHERE id=" . $id;
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

        $data['password'] = md5($data['password']);
        if ($data['id'] > 0) {
            // Trường hợp edit
            $sql = "UPDATE admins SET";
            $sql .= "username ='". $data['username'] ."',";
            $sql .= "password ='". $data['password'] ."',";
            $sql .= "email ='". $data['email'] ."',";
            $sql .= "name ='". $data['name'] ."',";
            $sql .= "address ='". $data['address'] ."',";
            $sql .= "phone ='". $data['phone'] ."',";
            $sql .= "note ='". $data['note'] ."',";
            $sql .= "status ='". $data['status'] ."',";
            $sql .= "avatar ='". $data['avatar'] ."',";
            $sql .= "WHERE id=".$data['id'];
        } else {
            // Trường hợp thêm mới
            $sql = "INSERT INTO admins ";
            $sql .= " (username, password, email, name, address, phone, note, status, avatar) ";
            $sql .= "VALUES ('". $data['username'] ."',";
            $sql .= "'".$data['password']."',";
            $sql .= "'".$data['email']."',";
            $sql .= "'".$data['name']."',";
            $sql .= "'".$data['address']."',";
            $sql .= "'".$data['phone']."',";
            $sql .= "'".$data['note']."',";
            $sql .= "'".$data['status']."',";
            $sql .= "'".$data['avatar']."',";
            $sql .= ")";

        }

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }


    public function delete($id) {

        $sql = "DELETE FROM admins WHERE id=".$id;

        if ($this->conn->query($sql) === TRUE) {
            echo "Delete record successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }

    }


}