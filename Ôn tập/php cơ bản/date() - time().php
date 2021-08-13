<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
$mktime = mktime(14,00,00,5,15,1998);
$d = date("H:i:s m/d/Y");
$t = time();
$t1=strtotime($d);
$t2=date("H:i:s m/d/Y", $mktime);
echo $t2;
echo "</br>";



