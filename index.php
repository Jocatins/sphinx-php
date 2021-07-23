<?php

$name= "Sphinx PHP";

//loops

$titans = ['sphinx', 'joca', 'calvin'];

// for($i = 0; $i < count($titans); $i++){
//     echo $titans[$i]. '<br/>';
// }
// forEach($titans as $titan){
//     echo $titan . '<br/>';
// }

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

//forEach loop

// forEach($products as $product){
//     echo $product['name']. '-'.$product['price'];
//     echo '<br/>';
// }


//while loop

// $i = 0;
// while($i < count($products)){
//     echo $products[$i]['name'];
//     echo '<br/>';
//     $i++;
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
        <h1>Titans</h1>
        <ul>
            <?php foreach($products as $product){ ?>

                <h2><?php echo $product['name']; ?> </h2>
                <h3> <?php echo $product['price']; ?> </h3>
                <?php }?>
        </ul>
    </div>
</body>
</html>