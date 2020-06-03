<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Demo3Controller extends Controller
{
    //
    public function index(){
        echo "<br>".  __METHOD__;

        $data = [];
        $students = [
          ["id" =>1, "name"=>"Hoan Nguyen","age"=>22],
          ["id" =>2, "name"=>"Trung Ruoi","age"=>23],
          ["id" =>3, "name"=>"Quang Anh","age"=>20],
        ];

        $data["students"] = $students;
        $data["welcome"] = "hello";
        return view("demo3.index",$data);
    }

    public function create(){
        echo "<br>".  __METHOD__;

        return view("demo3.create");
    }
}
