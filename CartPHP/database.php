<?php

class Database{
    public $mysqlServer = "localhost";
    public $mysqlUsername = "root";
    public $mysqlPassword = "";
    public $mysqlDatabase = "cart_demo";
    public $connection;

    public function __construct() {
        $this->connection = $this->connectDB();
    }

    public function connectDB(){
        $connection = mysqli_connect($this->mysqlServer, $this->mysqlUsername, $this->mysqlPassword, $this->mysqlDatabase);
        return $connection;
    }

    /** PHƯƠNG THỨC CHẠY CÂU TRUY VẤN SQL */
    public  function runQuery($sql){
        $data = [];
        $result = mysqli_query($this->connection, $sql);

        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    }

    /** PHƯƠNG THỨC ĐẾM SỐ BẢN GHI TRONG CÂU LỆNH QUERY */
    public function rowcount($sql){
        $result = mysqli_query($this->connection, $sql);
        $count = mysqli_num_rows($result);
        return $count;
    }
}