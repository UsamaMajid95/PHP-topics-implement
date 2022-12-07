<?php

trait FingerTouch{
    function fingertouchfeature(){
        echo 'This has finger touch feature<br>';
    }
    
}

trait Print3D{
    function prinnt3dfeature(){
      echo 'This has 3d print feature<br>';
    }
}

trait Camera{
    function camerafeature(){
       echo 'This has camera feature';
    }
}   

class Phone{
    private $number;
    private $id;

    use FingerTouch;
    use Print3D;
    use Camera;
}

$iphone = new Phone();
echo $iphone->prinnt3dfeature();
echo $iphone->fingertouchfeature();
echo $iphone->camerafeature();

?>