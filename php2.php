<html>
<head>
<title>learningphp</title>    

<body>
    <h1>hello22</h1>
</body>
</html>

<?php

// echo("OSAMA 20");
// echo("<br>");
// $num1 = 7 ;
// echo $num1;
// echo("<br>");
// $num2 = 3 ; 
// $result = $num1+ $num2 ;
// $result2 = $num1- $num2 ;
// $result3 = $num1* $num2 ;
// $result4 = $num1/ $num2 ;

// echo $result;
// echo("<br>");

// echo $result2;
// echo("<br>");

// echo $result3;
// echo("<br>");

// echo $result4;

// $x = $num1;
// $num1 = $num2;
// $num2= $x;
// echo $num1;
// echo("<br>");
// echo $num2;

// $web = ['html','css','js'];
// $web = array('html'=> 'frontennd',
//              'php' => 'backend');
// // $web[]='jdd';
// echo $web['html'];
// $web['css']='front';
// echo $web['css'];

// echo $_POST["p1"]+ $_POST["p2"];
// echo("<br>");
// echo $_POST['program3']- $_POST['program4'];



// while ($y<=10){

//     echo $y;
//     echo '<br/>';
//     $y++;
// }
// for ($y = 5;$y <=20;$y++){
//     echo $y;
//     echo '<br/>';
// }

// $y = 5;
// do{
//     echo $y;
//     echo'<br/>';
//     $y++;
// }while($y<=10);    

// function sumresu($web){
    
//     $result = 0;
//     foreach ($web as $teach){
//        $result+= $teach ;    
//     }

//     return $result;
// }

// function arrmax($x,$y){
//      $curentid = 0;
//      $z = [];
//      foreach($x as $numbers){
//         if ($numbers == $y){
//             $z[]= $curentid ;  
//         }$curentid++;
//      }return $z;
//     return "this element doesnt exist ";
// }
// $web = [100,20,20,10,20];
// $len =arrmax($web,5);
// if ( count($len) > 0)
//     echo "done00";
// else 
//     echo "no" ;

// $web = [100,20,20,10,20];
// echo (in_array(5,$web));

// include'function.php';
// var_dump(delitem([100,20,20,330]));

// $somevar = 103;
// printsomvar();

// $somevar = "osama";
// switch($somevar){
//     case "ahmed" :
//         echo"number is one";
//         break;
//     case "ibra" : 
//         echo"number is Two";  
//         break;
//     case "osama" :
//         echo"number is osama";
//         break;   
//     default :
//         echo" Game over ";       
// }

// $fname = ['one','two','three'];
// $strarry = implode(' ',$fname);
// echo $strarry;

// $fname = 'hello world';
// $re = stristr($fname,'Hello');
// var_dump($re);

// $ft = fopen('data.txt','r');
// var_dump(fread($ft,filesize('data.txt')));
// fclose($ft);

// $ft = fopen('data-2.txt','w');
// fwrite($ft,'i still remeber you');
// fclose($ft)

if ($_POST['p1']=='google'){
    header('Location:http://google.com');
}
elseif ($_POST['p1']=='data'){
    header('Location:data.txt');
}
else
{
    echo 'this page dont work';
}
?>