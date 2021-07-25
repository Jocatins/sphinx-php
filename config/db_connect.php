<?php 
// connect to database
$conn = mysqli_connect('localhost', 'sphinx', '$phinx@007', 'titan-pizza');

//check connection
if (!$conn) {
    echo 'Connection unsuccessful' .  mysqli_connect_error();
}

?>