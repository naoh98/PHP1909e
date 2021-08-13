<?php
function fibonacci($n){
    if ($n>=0){
        if ($n==0||$n==1){
            return $n;
        }else{
            return fibonacci($n-1)+fibonacci($n-2);
        }
    }
}
for($i=0;$i<14;$i++){
    echo " ".fibonacci($i);
}