<?php
$d = date("H:i:s m/d/Y");
echo "</br>".$d;
$d1 = strtotime($d);
echo "</br>".$d1;
$d2 = date("H:i:s m/d/Y", $d1);
echo "</br>".$d2;