<?php
$filename="f01.txt";
$fp= fopen($filename,"r");
//Read Mde: r, Write Mode: wr, append Mode: rwa
$line=fgets($fp);//fgets(): it show the character until find the line break
echo $line;
$line=fgets($fp);
echo $line;
$line=fgets($fp);
echo $line;
$line=fgets($fp);
echo $line;
$line=fgets($fp);
echo $line;
$line=fgets($fp,4);//it show (length-1) character
echo $line;
echo PHP_EOL;
echo PHP_EOL;
fclose($fp);//to close the file
$filename="f01.txt";
$fp= fopen($filename,"r");
while ($lines= fgets($fp)){
    echo $lines;
}
echo PHP_EOL;
rewind($fp);// it reread file from the top

echo "=======After rewind========="."\n";
//it start the reading the file from starting
while ($lines= fgets($fp)){
    echo $lines;
}

echo "=========fseek=================\n";
//fseek start the file from specific position
fseek($fp,8);
while ($line=fgets($fp,5)){
    echo $line." ";
}
echo "\n";

fseek($fp,-1,SEEK_END);//it send the file pointer to the last
while ($line=fgets($fp,5)){
    echo $line." ";
}
fclose($fp);

echo "==============file==================";
//it treat the every file element as array data
$filename="f01.txt";
$data=file($filename);
print_r($data);

echo $data[3];
echo "============file_get_contents===============";
//it read the full file as string data
$data=file_get_contents($filename);
echo $data;
echo "===============is_readable===================";
//it check the file permission
if (is_readable($filename)){
    $data=file_get_contents($filename);
    echo $data;
}