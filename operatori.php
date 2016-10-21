<?php
header('Content-Type:text/plain');
/*
$n=1;
$f=2.55;

var_dump($n+$f);
$b=true;
var_dump($n+$f+$b);

$n=1;
$n+=10;
var_dump($n);

$n++;
$n--;

$s='PHP akademija';
$s=$s.' u Osijeku';
$s.=' u Osijeku';//dvije prethodne linije su jednake
var_dump($s);
*/
$a=[
    0=>1,
    1=>2,
    'one'=>'a1',
    'two'=>'a2'
    ];
$b=[
    0=>2,
    1=>3,
    'two'=>'b2',
    'three'=>'b3'
    ];
    var_dump($a+$b);//dodaje samo one elemente za koje nema članove u b
    var_dump(array_merge($a,$b));//gazi tj
    var_dump(array_replace($a, $b));//radi replace za stringove a nadodaje brojeve
    
