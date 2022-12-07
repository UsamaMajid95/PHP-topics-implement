<?php
#فائده الكلون يسوي نسخه من الاوبجكت اما عن طريق ال = او كلمه كلون
class Person{

    private $fname;
    private $lname;
    public $age ;
    private $address;

    function __construct( $fname,$lname,$age,$address){
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->address = $address;
#فائده الكونستراكت حتى من تاخذ اوبجكن تملي راسا بيانات 

    }

    static function compare($obj1,$obj2){
        return $obj1 == $obj2;
        #المقارنه بين اوبجيكت
    }

}

$p1 = new Person('cristino','ronaldo',38,'portugal');

$p2 = new Person('cristino','ronaldo',22,'portugal');

echo '<pre>';
var_dump($p1);
echo '<pre/>';

echo'<hr>';

echo '<pre>';
var_dump($p2);
echo '<pre/>';

echo'<hr>';

if(Person::compare($p1,$p2)){
    echo 'They are equal';
}
else{
    echo 'They are not equal';
}





?>