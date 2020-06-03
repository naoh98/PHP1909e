<?php
class student{
    public function demo1(){
        echo "demo 1";
    }
}

class student{
    public function demo2(){
        echo "demo 2";
    }
}

/**
 * Cannot declare class Student, because the name is already in use in
 * khi mà 2 class , 2 function trùng tên nhau
 * bị xung đột bị lỗi
 * => để giải quyết vấn đề trùng tên
 * người ta sử dụng namespace ( không gian tên )
 *
 */
$student1 = new student();