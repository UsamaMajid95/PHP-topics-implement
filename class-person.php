<?php
class Person{
    private $fname;
    private $lname;
    public $age = 20;
    private $address;

    function personinfo(){
        $result = $this->fname.' '.$this->lname.','.$this->age.','.$this->address;
        return $result;
    }
    
    function getfname(){
        return $this->fname ;
    }

     function getlname(){
        return $this->lname;
    }

    function getage(){
        return $this->age;
    }

     function getaddress(){
        return $this->address;
    }

     function setfname($fname){
         $this->fname = $fname; 
    }

     function setlname($lname){
        $this->lname = $lname; 
   }


   function setage($age){
    $this->age = $age; 
}

    function setaddress($address){
    $this->address = $address; 
}


}

// $p1 = new Person();

// echo '<pre>';
// var_dump($p1);
// echo '</pre>';

// echo '_______________________________';

// $p1 = new Person();

// $p1->setfname('osama');
// $p1->setlname('majid');

// $p1->setaddress('minsk');
// echo '<pre>';
// var_dump($p1);
// echo '</pre>';


// echo '_______________________________';
// echo'<br/>';
// $p1->getage();
// var_dump($p1->getage());


class Car {


    private $property;


    function __get($pName){
        if(array_v($pName,$property)){
            return $this->property[$pName];
        }
    }

    function __set($pName,$pValue){
        $this->property[$pName] = $pValue;
    }
}

$car1 = new Car();
$car1->namecar = 'bmw';
$car1->colorcar = 'black';

echo '<pre>';
var_dump($car1);
echo'<pre/>';



?>