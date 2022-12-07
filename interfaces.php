<?php

interface Person{
#بهذا الشكل يتم تعريف الانترفيس و يجب ان تكون الفنكشن مالاته بدون محتوى 
    function fullname($fname,$lname);

    function getAge($age);

    
}

class Student implements Person{
    #بواسطه كلمه انبلمنت تتم الوراثه
    function fullname($fname,$lname){
        return sprintf("fullname:%s",$fname.' '.$lname);
    }
    
    function getAge($age){
        return sprintf("Age:%d",$age);
    }
}

$s1 = new Student;
echo $s1->fullname('lucero','lara');
echo'<br>';
echo $s1->getAge(31);


?>