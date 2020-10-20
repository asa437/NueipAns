<?php
$a0=[0,1,2,3,4,5,6,7,8,9];
// print_r($a0);

$sumodd = 0;
$sumevent=0;

foreach ($a0 as $key=>$value) {
    if ($value % 2 == 0){
        $sumevent +=$value;
    }else{
        $sumodd +=$value;
    }
}

echo "奇數和" . $sumodd;
echo "<br>";
echo "偶數和" . $sumevent;
echo "<br>";
$minus=$sumodd-$sumevent;
echo "奇數和-偶數和結果" . $minus;

echo "<hr>";
//-----------------------------------------------------------------


foreach ($a0 as $key=>$value) {
    if ($value % 2 == 0){
        $event[] = $value;
    }else{
        $odd[]  =$value;
    }
}

echo '奇數陣列 $odd 為';
print_r($odd);
echo "<br>";
echo '偶數陣列 $event 為';
print_r($event);



?>