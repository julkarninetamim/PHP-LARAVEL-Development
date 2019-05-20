<?php
$string= "leoreorem Ipsum is simply dummy text of the printinggggggggggggggggggggggggggggggggggggggggggggggggggggggg and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ";
//it break the line if any word cross over the 26 word//
//But it cannot break the line if any word over the 26 character
echo wordwrap($string,26/*How many character before break*/);


echo PHP_EOL;
echo PHP_EOL;
echo wordwrap($string,26,","/*how it will break*/,true/*cutting the word*/);
echo PHP_EOL;

echo nl2br(wordwrap($string,26,"\n"/*how it will break*/,true/*cutting the word*/));
