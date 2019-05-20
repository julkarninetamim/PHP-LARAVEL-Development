<?php
/*echo ord('A')."\n";
echo ord('a')."\n";
echo chr('65')."\n";
echo chr('97')."\n";*/
echo PHP_EOL;
echo PHP_EOL;
$length=0;
for ($i='a';$i<='z';$i++){
    $length++;
    if ($length>26){
        break;
    }
    echo ord($i)." ";
}
echo PHP_EOL;
echo $length;
echo PHP_EOL;
foreach (range('A','Z') as $ascii){
    echo ord($ascii[0])." ";
}
