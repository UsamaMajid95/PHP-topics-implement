<?php

abstract class Person {
    protected $fname;
    protected $lname;

    function __construct($fname,$lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }

    function __tostring(){
        return $this->fname .' '.$this->lname;
        #هاي داله تحول كل صفات الى سترنج بحيث تكدر تطبعها بواسطه ايكو
    }

    abstract function getsalary();
//     abstract function getage();
}

class employee extends Person{

    private $salary ; 

    function __construct($fname,$lname,$salary){
        parent::__construct($fname,$lname);
        $this->salary = $salary;
    }
    function getsalary(){}
    function __tostring(){
        return sprintf("full name :%s , salary %0.2f",parent::__tostring(),$this->salary);
    }

   #%sمعناه سترنج 
    #printf ,sprintf يخليك تتحكم بشكل الطباعه بالفورمات
    #%fمعناها فلوت اعداد عشريه و 0.2 يعني اطبع بس مرتبتبن وره الفارزه
    #$dمعناها عداد انتجر
}
$em1 = new employee('osama','majid',1500);
echo $em1;  
?>