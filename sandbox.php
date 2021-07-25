<?php

// $quotes = readfile("readme.txt");
// echo $quotes;

$file = 'readme.txt';

if (file_exists($file)) {

    // read file
    echo readfile($file) . '<br />';

    // copy file
    copy($file, 'quotes.txt');

    // absolute path
    echo realpath($file) . '<br />';

    // file size
    echo filesize($file) . '<br />';

    // rename the file
    rename($file, 'test.txt');
} else {
    echo 'file does not exist';
}

// make directory
mkdir('quotes');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Similique repellat vero deleniti laudantium reprehenderit
    distinctio nemo quaerat, provident, nam voluptatum necessitatibus
    sequi praesentium officia ullam saepe explicabo asperiores quisquam
    ab!
</body>

</html>