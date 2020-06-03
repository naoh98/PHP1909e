<?php
namespace MVC\Model;

class Database{
    const server = "localhost";
    const user = "root";
    const pass = "";
    const db = "demo_mvc";

    public $connection;

    public function __construct()
    {
        if (!$this->connection){
            $this->connection = mysqli_connect(self::server,self::user,self::pass,self::db);
        }
    }
}