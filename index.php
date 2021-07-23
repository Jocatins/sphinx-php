<?php

//VARIABLE SCOPES
 //local Variable

 function myFunc(){
     $price = 12;
     echo $price;
 }

 //myFunc();

 //echo $price; //gives an error because its not within the scope

 function myFuncTwo($age){
     echo $age;
 }
//myFuncTwo(23);


//global variables
 $name = 'Ronald';
// function myName(){
//     global $name;
//     $name = 'Joca';
//     echo "hello $name";
// }
// myName();

function myTitan(&$name){
    $name = 'jocatins';
    echo "hello $name" . '<br/>';
}
myTitan($name);
echo $name;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorials</title>
</head>
<body>
   
   
</body>
</html>