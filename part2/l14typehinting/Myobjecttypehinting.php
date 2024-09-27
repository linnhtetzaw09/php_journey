<?php 

class Boy{

    public $name = "Lin Htet Zaw";

    public function friend(){
        return "My friend name is $this->name";
    }

}

function showresult(Boy $val){
    echo $val->friend();
}

echo "This is Myobjecttypehinting  <br/>";

$obj1 = new Boy();
showresult($obj1);

showresult(new boy());

echo "<hr/>";

class Brand{
    
    public function getjpbrand(){
        return "Toyota Brand <br/>";
    }

    public function getchinabrand(){
        return "Jetour Brand <br/>";
    }
}

class Car{

    public function getbrand(Brand $val){
        return $val;
    }

    public function getjpn(Brand $val){
        return $val->getjpbrand();
    }

    public function getchina(Brand $val){
        return $val->getchinabrand();
    }

}

$objbrand = new Brand;
$objcar = new Car;

echo $objcar->getbrand($objbrand)->getjpbrand();
echo $objcar->getbrand($objbrand)->getchinabrand();

echo $objcar->getjpn($objbrand);
echo $objcar->getchina($objbrand);

echo "<hr/>";



?>