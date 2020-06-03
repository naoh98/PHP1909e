<?php
function hello($name){
    echo "<br>Chào" .$name;
}

hello(" Hoàn");

$lambda = function (){
    return " Trung Ruồi";
};
hello($lambda());