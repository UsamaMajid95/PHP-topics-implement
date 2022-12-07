<?php
#فائدته ستاتك متحتاج تسوي اوبجيكت من اكلاس 
class Car {

    static $model = 2020;
    static $type = 'x6';
    static $myarry = ['x6','x5','x4'];
    private $property;


    function __get($pName){
        if(array_v($pName,$property)){
            return $this->property[$pName];
        }
    }

    function __set($pName,$pValue){
        $this->property[$pName] = $pValue;
    }
    
    static function rname(){
        return Car::$model;
        #this تستخم فقط مع الاوبجيكت
        #اي شي بي ستاتك يكتب بهذه الطريقه....لا تحتتاج الى ذس
    }
}

// $car1 = new Car();
// $car1->namecar = 'bmw';
// $car1->colorcar = 'black';

echo Car::$model .'<br/>';
#br حتى تنزل سطر جديد
echo Car::$type;
echo '<pre>';
var_dump(Car::$myarry);
echo '<pre/>';

echo '_____________';
echo Car::rname();
?>