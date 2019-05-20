<?php
$string = "Quick brown fox fox Fox jump over the lazy dog";
echo $string[12];
echo PHP_EOL;
echo strpos($string/*haystack*/,"f")."\n";// haystack
echo stripos /*case insensitive*/($string/*haystack*/,"f")."\n";// haystack
echo stripos /*case insensitive*/($string/*haystack*/,"o",14/*Form Where you Want to search*/)."\n";// haystack
$offset= strpos($string,"Quick");

if ($offset !== false /*this is boolean false*/){
    echo "Word is Found";
}else{
    echo "Word is not Found";
}
// in PHP 0 means false so that the above answer is false

echo PHP_EOL;
$offset= strrpos/*search reversely*/($string,"fox");
echo $offset."\n";
$offset= strripos/*search reversely*/($string,"fox");
echo $offset."\n";
