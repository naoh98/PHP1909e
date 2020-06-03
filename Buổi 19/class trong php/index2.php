<?php
class Car {

    public $name;

    public $model;

    public $price;

    public $year;

    public $manufacture;
    /**
     * Phương thức khởi tạo
     * chú ý có 2 shift_ liên tiếp
     * Khái niệm của method khởi tạo
     * Phương thức khởi tạo sẽ được gọi ngay khi sử dụng
     * từ khóa new để tạo 1 đối tượng
     */
    public function __construct($name, $model, $price, $year, $manufacture){
        echo "Tôi là phương thức khởi tạo, tôi được tự động gọi khi sử dụng từ khóa new để khởi tạo đối tượng";
        /**
         * Lấy giá trị từ tham số truyền vào gán cho các thuộc tính
         * Chú ý : bên trong class khi muốn gọi đến chính class đó
         * thì sẽ sử dụng từ khóa $this
         */
        $this->name = $name;
        $this->model = $model;
        $this->price = $price;
        $this->year = $year;
        $this->manufacture = $manufacture;
    }

     //Phương thức in ra các thông tin của xe ô tô
    public function getInfo(){
        echo "<br>Đây là getInfo";
        echo "<br>Tên: " .$this->name;
        echo "<br>Loại: " .$this->model;
        echo "<br>Giá: " .$this->price;
        echo "<br>Năm sản xuất: " .$this->year;
        echo "<br>Nhà sản xuất: " .$this->manufacture;
    }
}
/**
 * Chú ý phương thức khởi tạo sẽ được tự động gọi
 * khi mà khởi tạo đối tượng
 */
$car = new Car("Roll-royce", "Z1000", 2000000000, 2019, "Roll-royce");
// gọi đến phương thức
$car->getInfo();