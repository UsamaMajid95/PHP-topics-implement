<?php

interface Person{
    function fullname($fname,$lname);
      
}

interface Person2{
    function getAge($age); 
}
class Student implements Person,Person2{
    #بواسطه كلمه انبلمنت تتم الوراثه
    function fullname($fname,$lname){
        return sprintf("fullname:%s",$fname.' '.$lname);
    }
    
    function getAge($age){
        return sprintf("Age:%d",$age);
    }
}

$s1 = new Student;
echo $s1->fullname('osama','majid');
echo'<br>';
echo $s1->getAge(31);


?>