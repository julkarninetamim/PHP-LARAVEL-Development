<?php
$string= " hello \n";
echo $string;
echo "data";
echo PHP_EOL;
echo PHP_EOL;
$string= " hello \n";
echo "data";
$string =trim($string);//trim form left & right sides everything like as space,tab,new line,0,etc
echo $string;
echo "data";
echo PHP_EOL;
echo PHP_EOL;
$strings= " hello \n";
$string =trim($strings," \n"/* using character list we can trim specific element*/);//trim form left & right sides everything like as space,tab,new line,0,etc
echo $string;
echo "data";
echo PHP_EOL;
echo PHP_EOL;
$strings= " hello \n";
$string =ltrim/*trim from left side*/($strings," \n"/* using character list we can trim specific element*/);//trim form left sides everything like as space,tab,new line,0,etc
echo $string;
echo "data";
echo PHP_EOL;
echo PHP_EOL;
$strings= " hello \n";
$string =rtrim/*trim from right side*/($strings," \n"/* using character list we can trim specific element*/);//trim form right sides everything like as space,tab,new line,0,etc
echo $string;
echo "data";
