<?php
include_once "../abstract/dongvat.php";
include_once "../interface/an.php";
include_once "../interface/keu.php";
include_once "../interface/sinhsan.php";

class cho extends dongvat implements an, keu, sinhsan{
    public function tenloai(){
        echo "Tôi là chó";
    }

    public function dacdiem(){
       echo "Tôi trông nhà rất giỏi";
    }

    public function  thucan(){
        echo "Tôi thích gặm xương";
    }

    public function tiengkeu(){
        echo "Gâu gâu";
    }

    public function cachsinhsan(){
        echo "1 ... 2 ... 3";
    }
    public function thongtin()
    {
        parent::thongtin();
    }
}