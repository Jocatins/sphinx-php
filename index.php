<?php



//functions

function sayHello($name = 'gypsies', $time = 'night'){
    echo "good $time $name";
}
sayHello('titans');

function formatProduct($product){

    //echo " {$product['name']} costs #{$product['price']} to buy <br/> ";
    return " {$product['name']} costs #{$product['price']} to buy <br/> ";
}

// $formatted =  formatProduct(['name' => 'gold-star', 'price' => 40]);
// echo $formatted;

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