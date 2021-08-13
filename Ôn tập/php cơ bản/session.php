<?php
session_start();
$_SESSION["login"]="hihi";
$_SESSION["login1"]="haha";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//unset($_SESSION["login1"]);

session_unset();
session_destroy();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";