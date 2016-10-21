
<?php
header('Content-Type:text/plain');
//komentar
#komentar
/*i ovo je
 * komentar
 */
/*
//Varijable
$ime=42; //numerička varijabla
//ispis varijable
//echo $ime; obični ispis
var_dump($ime);

$n=1;//cjelobrojna
var_dump($n);
$f=2.55;//float var
var_dump($f);
$s='PHP akademija';
var_dump($s);
//konkatonacija
$s="PHP akademija $n";//dvostruki navodnici čitaju i varijablu
// \n i \t rade pod " "!!!
var_dump($s);
*/
/*
//polja
$polje=[1,2,3];
//ranije se koristilo $polje=array(1,2,3);
echo $polje[2];
$polje[2]=4;
$polje[]=5;
$polje[]=6;

var_dump($polje);

$a2=[1, 'two', false];
var_dump($a2);

$a3=[
    'key_1'=>1,
    'key_2'=>'two',
    'key_3'=>[1,2,"tri"]
    ];
$a3[]='lol';//tu nije imao 'key_ " pa je sam počeo brojati od 0 po defaultu
    var_dump($a3);
    var_dump($a3['key_2']);
   */

//Objekti
//StdClass je prazna klasa u php-u
$o1=new StdClass();//kreiranje novog objekta
$o1->x='Just a property';//dodjeljivanje vrijednosti objektu 
var_dump($o1);
$o2=new StdClass();
$o2->x='Just another property';
var_dump($o2);
die();
