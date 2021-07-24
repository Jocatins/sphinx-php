<?php 


// connect to database
$conn = mysqli_connect('localhost', 'sphinx', '$phinx@007', 'titan-pizza');

//check connection
if (!$conn){
    echo 'Connection unsuccessful'.  mysqli_connect_error();
}

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<?php include('templates/footer.php'); ?>

</html>