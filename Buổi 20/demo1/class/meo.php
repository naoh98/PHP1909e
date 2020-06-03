<?php
include_once "../abstract/dongvat.php";
include_once "../interface/an.php";
include_once "../interface/keu.php";
include_once "../interface/sinhsan.php";

class meo extends dongvat implements an, keu, sinhsan{
    public function tenloai(){
        echo "Tôi là mèo";
    }

    public function dacdiem(){
        echo "Tôi rất giỏi làm nũng";
    }

    public function  thucan(){
        echo "Tôi thích ăn cá";
    }

    public function tiengkeu(){
        echo "Meo meo";
    }

    public function cachsinhsan(){
        echo "4 ... 5 ... 6";
    }

    public function thongtin()
    {
        parent::thongtin();
    }
}