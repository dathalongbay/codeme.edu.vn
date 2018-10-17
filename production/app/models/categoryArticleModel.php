<?php
class categoryArticleModel extends Database {

    /*
     * Biến này đã chứa kết nối đến CSDL
     */
    public $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = self::$connection;
    }

    public function getListCategories() {

        $data = $this->getRows();
        $result = array();
        $this->recursiveCategory($data, 0, 1, $result);
        return $result;
    }

    function recursiveCategory($source, $parent_id, $level, &$result) {
        if (!empty($source)) {
            foreach($source as $key => $category) {
                if ($category['parent_id'] == $parent_id) {
                    $category['level'] = $level;
                    $result[] = $category;
                    unset($source[$key]);
                    $this->recursiveCategory($source, $category['id'], $level+1,$result );
                }
            }
        }
    }

    public function getRows() {

        $data = array();
        $sql = "SELECT * FROM category_article";
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
        $sql = "SELECT * FROM category_article WHERE id=" . $id;
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



        if ($data['id'] > 0) {
            // Trường hợp edit
            $sql = "UPDATE category_article SET category_name='". $data['category_name'] ."',category_intro='".$data['category_intro']."',category_desc='".$data['category_desc']."',created=".$data['created'].",parent_id=".$data['parent_id'].",level=".$data['level']."  WHERE id=".$data['id'];
        } else {
            // Trường hợp thêm mới
            $sql = "INSERT INTO category_article (category_name, category_intro, category_desc, created, parent_id, level)
VALUES ('". $data['category_name'] ."', '".$data['category_intro']."', '".$data['category_desc']."', ".$data['created'].", ".$data['parent_id'].", ".$data['level'].")";

        }

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }


    public function delete($id) {

        $sql = "DELETE FROM category_article WHERE id=".$id;

        if ($this->conn->query($sql) === TRUE) {
            echo "Delete record successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }

    }



}