<?php
 $name = 'hello titans ';
 $name2 = 'and gypsies';

 $radius = 25;
 $pi = 3.142;
//  echo 'Hello php, just testing you $name';

// echo "let us escape characters \"here\"";

// echo 'We can also escape characters using single quotes "like this"';

// echo $name[3];

// echo strlen($name2);

// echo strtoupper($name);

// echo str_replace('hello', 'greetings', $name);

//basic operators - * ** - + /

// echo $pi * $radius **2;

// echo floor($pi);

// echo ceil($pi);

//indexed arrays

$rookie = array('Tim', 'Philips');
// echo $rookie[1];

$titanNum = [394, 90, 78, 69];
// print_r($titanNum);
// $titanNum[] = 12;
// print_r($titanNum);

// array_push($titanNum, 890);

// $gypsyNum = array_merge($rookie, $titanNum);
// print_r($gypsyNum);

//associative arrays (key & value pairs)
// $titanOne = ['joca'=>'php', 'nico'=>'java', 'leo'=>'python' ];
// print_r($titanOne);

// $titanTwo = array('joca'=>'php', 'nico'=>'java', 'leo'=>'python', 'owes'=>'db');
// $titanTwo['louis']='angular';

// print_r($titanTwo);

// echo count($titanTwo);

//multi dimensional arrays

$titans = [
    [ 'title'=>'gypsy', 'number'=>56, 'area'=>'player', 'field'=>'coder'],
    [ 'title'=>'gypsy', 'number'=>56, 'area'=>'player', 'field'=>'coder'],
    [ 'title'=>'sphinx','number'=> 56,'area'=> 'player','field'=> 'coder']
];

//print_r($titans[1][2]);
//echo $titans[2]['field'];
// echo count($titans);

$titans[] = ['title'=>'joca', 'number'=>99, 'area'=>'player', 'field'=>'devops'];
//print_r($titans);
$popped = array_pop($titans);
print_r($popped);

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