<?php
//To Print Code in PHP(with echo)

echo "Introduction to PHP";

 //Data type: String,Integer

$name= "Julkarnine Tamim";

echo $name;

//Data Type: Integer;

$number1=10;
$number2=20;

echo $number1+$number2;


// Variable >> variable data assign

define('Age',20);

echo Age;

define('country','Bangladesh');
echo country;

//Constant >> constant data assign

define('Age1',20);
echo Age1;

//Difference betweenn signle('') and double("") cotesion




/*With single quote there is no expanding of the variables and we 
cannot use the escape sequence for special characters 
 like (\n,\t,etc)neither.check:*/

    echo 'hi \n how are you.' ;
    //Output: hi \n how are you
    $var = 'Bob' ;
    echo '$var' ;
    //Output: $var


//However, we can escape the ' and / sign by using /'

    echo 'How/'re doing?'
    //Output: How're doing?
     
     /*With double quote the variables can be expanded and we can use 
     the escape sequence for special characters like \n,\r,\t,etc.*/

    echo "hi \n how are you.";
    //Output: hi
    //            how are you.
    $var = 'Bob';
    echo "$var";
    //Output: Bob

//Function in PHP

function addNumbers(int $a, int $b) {
    return $a + $b;//its returns the value out of the function
}
echo addNumbers(5, "5 days"); 
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10


//PHP Default Argument Value
declare(strict_types=1);
function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
/*
OUTOUT IS:
The height is : 350
The height is : 50
The height is : 135
The height is : 80 

*/
//strlen(); function in PHP( use to calculate the length of String
echo strlen("Bnagladesh");//it
//OUTPUT is : 9

// strtoupper(); function in PHP (use to convert the string from lowercase to uppercase)
echo strtupper("hello");
//OUTPUT is: HELLO

// strtolwer(); function in PHP(use to convert the string from uppercase to lowercase)
echo strtolwer("HELLO");
//OUTPUT is: hello
//str_replace('e', 'a', '$variable'); function in PHP( use to replace the latter or word from specific word or sentence;

echo str_replace("I","We","I love Bangladesh!");
//Output is: We love Bangladesh
