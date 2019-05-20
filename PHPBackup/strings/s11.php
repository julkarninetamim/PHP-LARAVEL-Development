<?php
$name= "Abul Hossain 012345678912 abd@ddsf.com";
$parts= sscanf($name,"%s %s %12d %s");
print_r($parts);

$newArray=sscanf($name,"%s %s %12d %s",$fName,$lName,$mobile,$email);

echo $mobile;
echo PHP_EOL;

$hexColor = "F22F44";
$colors=sscanf($hexColor,"%2x %2x %2x");
print_r($colors);
