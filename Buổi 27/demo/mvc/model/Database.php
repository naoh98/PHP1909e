<?php
namespace MVC\Model;

class Database{

    /** THUỘC TÍNH CHỨA KẾT NỐI */
    public $connection;

    /** TẠO RA HẰNG SỐ CHỨA THÔNG SỐ KẾT NỐI CSDL */
    const server = "localhost";
    const user = "root";
    const password = "";
    const db = "mvc_demo";

    public function Connectdb(){
        if (!$this->connection){
            $this->connection = mysqli_connect(self::server,self::user,self::password,self::db);
        }

        if (!$this->connection){
            die("Connection Fail" .mysqli_connect_error());
        }
    }

}