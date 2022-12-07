<?php
#فائدته ستاتك متحتاج تسوي اوبجيكت من اكلاس 
class Car {
#موضوع الثوابت تستخدم بالتخفيضات 
#الثوابت ممكن تكون سترنج او بولين او انتجر بس مصفوفه لا
    const sale = 10;
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

   static function printInfo(){
       return Car::sale;
   }

}


echo Car::$model .'<br/>';
#br حتى تنزل سطر جديد
echo Car::$type;
echo '<pre>';
var_dump(Car::$myarry);
echo '<pre/>';

echo'______' . '<br>';

echo Car::printInfo();
?>