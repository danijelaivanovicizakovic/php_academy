<?php
header('Content-Type:text/plain');
function test()
{
    echo "Test is executed\n";
}
test();

function test2($a, $b=2)
{
    return ($a**$b);
}
$c=test2(5,2);
var_dump($c);

