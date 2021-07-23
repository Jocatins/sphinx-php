<?php

$name= "Sphinx PHP";

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

foreach($products as $product){
    if($product['name']=== 'gold coin'){
        break;
    }
    
    if($product['price'] > 15){
        continue;
    }
    echo $product['name'] . '<br/>';
    echo $product['price'] . '<br/>';
}


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
   
</body>
</html>