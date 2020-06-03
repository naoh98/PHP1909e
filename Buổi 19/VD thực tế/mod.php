<?php
class Mod extends Guest{
    public $approve_comment;
    public $manage_acc;

    public function Approve_comment(){
        echo "<br>Duyệt bình luận";
    }
    public function Manage_acc(){
        echo "<br>Quản lý tài khoản";
    }
}