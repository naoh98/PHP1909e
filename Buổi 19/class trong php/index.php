<?php
class Car {
    //khai báo thuộc tính bên trong class
    public $name;

    public $model;

    public $price;

    public $year;

    public $manufacture;

    /*
     Khai báo các phương thức bên trong class
     Phương thức ( method )
     chỉ ra hành động cụ thể của 1 đối tượng
     */
    public function start(){
        echo "<br>Khởi động xe";
    }

    public function drive(){
        echo "<br>Lái xe";
    }

    public function stop(){
        echo "<br>Dừng xe";
    }
}
    // khởi tạo đối tượng từ class bằng từ khóa new
    // Muốn truy cập đến thuộc tính $tên_đối_tương->tên_thuộc tính
    // Chú ý tên thuộc tính sẽ không $
    $mazda = new Car();
    $mazda->name = "Mazda CX5";
    $mazda->model = "CX5";
    $mazda->price = 1000000000;
    $mazda->year = 2019;
    $mazda->manufacture = "Mazda";

    echo "<pre>";
    print_r($mazda);
    echo "</pre>";

    //gọi đến 1 phương thức trong class
    $mazda->start();
    $mazda->drive();
    $mazda->stop();
