<?php

$name= "Sphinx PHP";

//comparison booleans 
// echo true;
// echo 'gypsy' < 'titan';
// echo 'gypsy' > 'Gypsy';
// echo 'gypsy' == 'Gypsy';


//loose vs strict equal comparison
//loose comparison does not take the data type into consideration
//echo 14 == '14'; //returns true
//echo 14 === '14';

//echo true == '1';
//echo false == '';

//conditional statements

// $price = 90;

// if ($price > 800){
//     echo 'the condition is met';
// }elseif( $price = 90){
//     echo 'else if condition';
// }

// else {
//     echo 'Oops not exist';
// }


$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

// foreach($products as $product){
//     if($product['price'] < 15 && $product['price'] > 2 ){
//         echo $product['name'] . '<br/>';
//     }
// }
// foreach($products as $product){
//     if($product['price'] > 20 || $product['price'] <10  ){
//         echo $product['name'] . '<br/>';
//     }
// }

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
    <h1>
        <?php echo $name; ?>
        
    </h1>
    <div>
        <ul>
            <?php forEach($products as $product){ ?>
                <?php if($product['price'] > 15 ) { ?>
                    <li> <?php echo $product['name']; ?> </li>
                    <?php }?>
                <?php }?>
        </ul>
    </div>
</body>
</html>