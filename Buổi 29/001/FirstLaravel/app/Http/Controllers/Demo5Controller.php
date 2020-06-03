<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Demo5Controller extends Controller
{
    //
    public function homepage(){
        return view("demo5.subview.trangchu");
    }
    public function contact(){
        return view("demo5.subview.lienhe");
    }
    public function product(){
        return view("demo5.subview.sanpham");
    }
}
