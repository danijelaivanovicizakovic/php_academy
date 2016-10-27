<?php
header('Content-Type:text/plain');//postavljamo tekstualni file tako da nam rade enteri 
/*$a=[1,'two','three',4];
foreach ($a as $key=>$value)
{
    var_dump($value);
}*/
$list=[
    '<a> - anchor',
    '<p> - paragraph',
    '<ul> - unoredered list',
    '<table> - table'
];
echo "Tag list: \n";
foreach ($list as $value){
    echo ("$value\n");
}
echo "Tag list:\n";
foreach ($list as $value){
    $explodedValues=explode(' - ', $value);
    //echo ($explodedValues[0]."\t".$explodedValues[1]."\n"); isto kao dolje
    echo ($explodedValues[0]."\t\t".$explodedValues[1].PHP_EOL);
}

