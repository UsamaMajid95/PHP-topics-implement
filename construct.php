<?php

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

    function __tostring(){
        return $this->fname .' '.$this->lname.' '.$this->age .' '.$this->address;
        #هاي داله تحول كل صفات الى سترنج بحيث تكدر تطبعها بواسطه ايكو
    }
    
    function __destruct(){
        echo 'Good bye';
    }
    #يشتغل عكس الكونستراكت من ينحذف الاوبجكت من ذاكره تشتغل الداله
}

$p1 = new Person('cristino','ronaldo',38,'portugal');

echo $p1.'<br>';
echo'------------'.'<br>';
echo '<pre>';
var_dump($p1);
echo '<pre/>';
echo '<hr>';

unset($p1);
#معناها احذف الاوبجيكت من الذاكره
?>