<?php
$str ="aaabbccccdeeeeeee";
$count=0;
$res=$check=$html="";
$arr=str_split($str,1);
for ($i=0;$i < count($arr);$i++){
    if ($check==$arr[$i]){
        $count++;
        $res=$check.$count;
    }else{
        if ($count>0){
            $html.=$res;
        }
        $check=$arr[$i];
        $count=1;
        $res=$check.$count;
    }

}
echo $html;