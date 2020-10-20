<?php
//設定介面
interface limit{
    public function speed();
}
//設定 基礎class
class Car{
    protected $tire="";
    protected $volume="";
    protected $color="";

    public function __construct($tire,$volume,$color){
        $this->tire=$tire;
        $this->volume=$volume;
        $this->color=$color;
    }

    public function tire(){
        return $this->tire;
    }
    public function volume(){
        return $this->volume;
    }
    public function color(){
        return $this->color;
    }
}

echo "car";
echo "<br>";
$car=new Car(4,'big','red');
echo "輪胎:" . $car->tire();
echo "<br>";
echo "體積:" . $car->volume();
echo "<br>";
echo "顏色:" . $car->color();
echo "<br>";

echo "<hr>";

//使用繼承及介面
class Scooter extends Car implements limit{
    public function speed(){
        echo "run slowly";
    }
}

echo "scooter";
echo "<br>";

$scooter=new Scooter(2,'small','gray');
echo "輪胎:" . $scooter->tire();
echo "<br>";
echo "體積:" . $scooter->volume();
echo "<br>";
echo "顏色:" . $scooter->color();
echo "<br>";
echo  $scooter->speed();
echo "<br>";


?>