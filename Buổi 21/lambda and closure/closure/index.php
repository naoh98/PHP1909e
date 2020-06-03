<?php
function hello($name){
    echo "<br>Chào" .$name;
}

$phienban = " phiên bản 7";
$phienban1 = ", phiên bản 5";

$php = function () use ($phienban, $phienban1){
    return "PHP" .$phienban.$phienban1;
};

hello($php());