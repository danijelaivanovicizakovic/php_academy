<?php
header('Content-Type:text/plain');
$isTrue=true;
if($isTrue==true){
echo "It's true\n";}
if($isTrue==false){
     echo "It's false\n";
}
//var_dump(123=='123abc');
$result=$isTrue ? 'one':'two';//skraćeni način ispistivanja uvjeta zamjenjuje:
/*if ($isTrue){
    $result=$isTrue;
 else {
    $result=false;    
    } 
}*/
/*
var_dump($result);
$result=$isTrue ?: false;//skraćeni način ispistivanja uvjeta
var_dump($result);*/

//za provjeru tipa varijable koristimo is_array(), is_number(), is_null(), is_int()
var_dump(isset($lol));
if(isset($lol)&&$lol==3){
    
}

