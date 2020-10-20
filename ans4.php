<?php

$a0=[77,5,5,22,13,55,97,4,796,1,0,9];

function order($arg){
    $len=count($arg);
    //該層迴圈控制 先求出陣列數值個數
    for($i=1;$i<$len;$i++){ 
        //該層迴圈用來控制每輪 冒出一個數 需要比較的次數
        for($k=0;$k<$len-$i;$k++){
            if($arg[$k] > $arg[$k+1]) //當前數 > 下一個數
            {
                //大小數值交換
                $tmp=$arg[$k+1];
                $arg[$k+1]=$arg[$k];
                $arg[$k]=$tmp;
            }
        }
    }
    return $arg;
}

$b=order($a0); //將a0陣列帶入已寫好的函式

echo "<pre>";
    print_r($b);
echo "</pre>";


?>