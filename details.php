<?php

include('config/db_connect.php');

//if isset() is used to detect when the delete button was called
if (isset($_POST['delete'])) {

    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    //sql connection
    $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        echo 'query error: ' . mysqli_error($conn);
    }
}

//check GET request id param
// isset ==> to check if the variable is set
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // make sql used to make a query
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    //get the query result
    $result = mysqli_query($conn, $sql);

    //fetch result in array format
    $pizza = mysqli_fetch_assoc($result);

    //free result from memory
    mysqli_free_result($result);

    //close the db connection
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<div class="container center">
    <?php if ($pizza) : ?>
        <h4><?php echo $pizza['title']; ?></h4>
        <p>Created by <?php echo $pizza['email']; ?></p>
        <p><?php echo date($pizza['createdAt']); ?></p>
        <h5>Ingredients:</h5>
        <p><?php echo $pizza['ingredients']; ?></p>

        <!-- DELETE FORM -->
        <form action="details.php" method="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
            <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
        </form>
    <?php else : ?>
        <h5>No such pizza exists.</h5>
    <?php endif ?>
</div>

<?php include('templates/footer.php'); ?>

</html>