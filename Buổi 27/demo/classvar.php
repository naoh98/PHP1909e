<?php

class Student{
    public function info(){
        echo "<br>" .__METHOD__;
    }
}

class Teacher{
    public function info(){
        echo "<br>" .__METHOD__;
    }
}

class School{
    public function info(){
        echo "<br>" .__METHOD__;
    }
}

//Cách 1

$student1 = new Student();
$student1->info();

$Teacher1 = new Teacher();

$School1 = new School();

//Cách 2
$student2 = "Student";
$hoan = new $student2();
$method2 = "info";
$hoan->$method2();
