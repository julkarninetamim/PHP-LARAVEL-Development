<?php
$string = "Quick brown Brown Fox fox jumps over the lazy dog";
$replacedString = str_replace('brown'/*what we want to change*/, 'red'/*By what we want change*/, $string/*from Where*/);
/*It don't change
 the parent string
value*/
echo $replacedString . "\n";
$replacedString = str_ireplace('brown', 'red'/*By what we want change*/, $string/*from Where*/, $count);
/*Case insensitive & // what we
It don't change          want to change
 the parent string
value*/
echo $replacedString . "\n";

echo $count;

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
//We can also replace with array
$string = str_ireplace(array('brown', 'fox'), array('red', 'cat'), $string, $count);
echo $string . "\n";
echo $count . "\n";
echo PHP_EOL;
echo PHP_EOL;
//We can also replace multiple word with single word
$string = "Quick brown Brown Fox fox jumps over the lazy dog";
$strings = str_ireplace(array('brown', 'fox', 'over'), 'word', $string, $count);
echo $strings . "\n";
echo $count . "\n";