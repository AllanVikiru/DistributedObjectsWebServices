<?php
//read data from database
class Student{
  
    // db connection object
    private $conn;
  
    // constructor method for db connection
    public function __construct($db){
        $this->conn = $db;
    }

    //function for fetching all records
    public function fetch_all(){
        try {
            $query = $this->conn->prepare('SELECT * FROM students');
            $query->execute();
        } 
        catch (Exception $e){
            echo "Connection failed: " . $e->getMessage();
        }
        return $query;
    }

    //function for fetching one record
    public function fetch_one(){
        try {
            $query = $this->conn->prepare('SELECT * FROM students WHERE admNo = ?');
            $query->bindParam(1, $this->adm_no, PDO::PARAM_INT);
            $query->execute();
        } 
        catch (Exception $e){
            echo "Connection failed: " . $e->getMessage();
        }
        return $query;
    }

    //function for searching
    public function search($keyword){
        try {
            // select all query
            $query = $this->conn->prepare("SELECT * FROM students  WHERE firstName LIKE ? OR lastName LIKE ? OR dateofBirth LIKE ?  OR school LIKE ? OR course LIKE ? ORDER BY admNo DESC");

            $query->bindParam(1, $keyword);
            $query->bindParam(2, $keyword);
            $query->bindParam(3, $keyword);
            $query->bindParam(4, $keyword);
            $query->bindParam(5, $keyword);
            $query->execute();

        }
        catch (Exception $e){
            echo "Connection failed: " . $e->getMessage();
        }
        return $query;
    }
}
    
