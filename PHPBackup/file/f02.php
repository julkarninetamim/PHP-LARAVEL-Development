<?php
$filename="f02.txt";
$existingData= file_get_contents($filename);
//to store previous existing data with 'w'(write) mode,  we use :file_get_contents

$fp= fopen($filename,"w");
//w mode deleted previous existing data
/*fwrite($fp,"Mercury\n");*/
fwrite($fp,$existingData);
fwrite($fp,"Venus\n");
fwrite($fp,"Earth\n");
fclose($fp);

//to store previous existing data in the file we use 'a'(append)mode