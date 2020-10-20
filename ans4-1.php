<?php
$a0=[77,5,5,22,13,55,97,4,796,1,0,9];
print_r($a0);

echo "<br>";

$m1=min($a0);
// echo $m;

$b=[$m1];
print_r($b);

echo "<br>";


$order=array_keys($a0,$m1);
print_r($order);
foreach($order as $key=>$value){
    $o1=$value;
}
echo $o1;

echo "<br>";

// $a0=array_slice($a0,10);
// print_r($a0);
$a0=array_chuck($a0,10);
print_r($a0);







?>
