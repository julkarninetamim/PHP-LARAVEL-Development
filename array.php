//                               Types of Array
//-------------------------------------------------------------------
// 1.Indexed Array|| 2.Associative Array|| 3.Multidimentional Array
//-------------------------------------------------------------------

//                             1.Indexed Array
//-------------------------------------------------------------------

// this types of array have default index key


$indexedArray= array('apple','banana','mango','orange');

print_r($indexedArray);

//The output Will be :
/*
          Array(
          [0] => apple
          [1] => banana
          [2] => mango
          [3] => orange
             ) */
//-------------------------------------------------------------------

//                       2.Associative Array
//-------------------------------------------------------------------

//This types of array have dedicated key

$associativeArray= array(
'a' =>'Argentina',
'b' =>'Brazil',
'c' =>'China',
'd' =>'Denmark'
);

print_r($associativeArray);

//The Output will be:
/*           Array(
              [a] => Argentina
              [b] => Brazil
              [c] => China
              [d] => Denmark )  */

//----------------------------------------------------------------------
//                          3.Multidimentional Array
//----------------------------------------------------------------------


$multidimentionalArray= [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,4444],
    [11111,22222,33333,[66,77,88,99]]


];
print_r($sample2);
// output will be:
   /*               Array( 
                       [0] => Array (
                              [0] => 1
                              [1] => 2
                              [2] => 3
                              [3] => 4 )
                       [1] => Array (
                              [0] => 11
                              [1] => 22
                              [2] => 33
                              [3] => 44 )
                       [2] => Array (
                              [0] => 111
                              [1] => 222
                              [2] => 333
                              [3] => 444
                          )
                      [3] => Array (
                              [0] => 1111
                              [1] => 2222
                              [2] => 3333
                              [3] => 4444 )
                      [4] => Array (
                              [0] => 11111
                              [1] => 22222
                              [2] => 33333
                              [3] => Array (
                                      [0] => 66
                                      [1] => 77
                                      [2] => 88
                                      [3] => 99 )
                                      )
                        )                      */
            


// If we wanto to access the value 99 , we have to write code:

   echo $sample2[4][3][3];

//The output will be:  99














 
