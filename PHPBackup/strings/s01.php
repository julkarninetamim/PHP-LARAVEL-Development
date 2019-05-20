<?php
$name= "Rakib";
$string = "my name is $name\n\t New Data\n";
echo $string;

$heredoc = <<<aa
dtaa
new line
more text {$name}  fsda
aa;
echo $heredoc;
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$nowdoc = <<<'EOT'
dtaa
new line
more text {$name}  fsda
EOT;
echo $nowdoc;
