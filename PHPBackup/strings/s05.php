<?php
$string= "Hello World,World How are you";
$string2 ="Quick Brown fox jump over the lazy dog";
$part= explode(" ",$string);
print_r($part);

$original= join(" ",$part);
echo $original;

echo PHP_EOL;
$withImplode= implode(" ",$part);
echo $withImplode;
echo PHP_EOL;

$part2= str_split($string);
print_r($part2);

$part3= strtok($string," ,");
print_r($part3);

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

while ($part3 !==false){
    echo $part3."\n";//iterator
    $part3= strtok(" ,");
}

echo PHP_EOL;

$part4 = strtok($string2," ");
while ($part4 !== false){
    echo $part4."\n";
    $part4 =strtok(" ,");
}
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$part5= preg_split("/\s|,/",$string);// \s is also
print_r($part5);






