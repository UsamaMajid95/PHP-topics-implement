<?php

class Car{
    public $name='bmw';
    public $model='x6';

    function printinfo(){
        return $this->name.' '.$this->model;
    }
}

class merc extends Car{
    public $year=2010;
}

$m1 = new merc();

var_dump($m1);

echo'<hr>';
echo $m1->printinfo().' '.$m1->year;