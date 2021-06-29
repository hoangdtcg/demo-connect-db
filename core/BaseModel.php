<?php

include_once 'DBConnect.php';
class BaseModel
{
    public $dbConnect;
    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllCustomer()
    {
        $sql = "SELECT * FROM employees";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();
        $arr = $stmt->fetchAll();
//        echo "<pre>";
        return $arr;
    }

    public function deleteCustomer($id)
    {
        $sql = "DELETE FROM `employees` where employeeNumber = $id";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
    }
}