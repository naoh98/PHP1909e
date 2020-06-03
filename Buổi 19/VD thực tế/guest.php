<?php
class Guest{
    public $name;
    public $age;
    public $join_created;

    public function viewArticle(){
        echo "<br>Xem bài viết";
    }
    public function postComment(){
        echo "<br>Đăng bình luận";
    }
}