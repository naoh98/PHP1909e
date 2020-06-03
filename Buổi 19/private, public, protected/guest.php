<?php
class Guest{
    public $name;
    public $age;
    public $join_created;
    //số tài khoản ngân hàng
    /**
     * Nhưng thuộc tính hay phương thức có giới hạn quyền truy cập là private
     * thì chỉ có thể truy cập trong chính bản thân class này
     */
    private $bank_account = "0934234902";
    //tình trạng hôn nhân
    //protected chỉ có thể truy cập trong class đó và các class kế thừa
    protected $status = "Single";

    public function viewArticle(){
        echo "<br>Xem bài viết";
    }
    public function postComment(){
        echo "<br>Đăng bình luận";
    }
    public function getBank_account(){
        echo "<br>" .$this->bank_account;
    }

}