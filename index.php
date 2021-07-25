<?php

// connect to database
$conn = mysqli_connect('localhost', 'sphinx', '$phinx@007', 'titan-pizza');

//check connection
if (!$conn) {
    echo 'Connection unsuccessful' .  mysqli_connect_error();
}
//write query to get all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY createdAt';

//make query & get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

//explode function
//print_r(explode(' ', $pizzas[0]['ingredients']));



?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>


<h4 class="center grey-text">Titan Pizzas!</h4>

<div class="container">
  <div class="row">
  <?php foreach ($pizzas as $pizza) : ?>

    <div class="col s6 md3">
      <div class="card z-depth-0">
          <div class="card-content center">
              <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
             <ul>
                 <?php foreach(explode(' ', $pizza['ingredients']) as $ing): ?>
                    <li><?php echo htmlspecialchars($ing)?> </li>
              <?php   endforeach; ?>
             </ul>
          </div>
          <div class="card-action right-align">
              <a class="brand-text" href="#">more info</a>
          </div>
      </div>
    </div>

  <?php endforeach; ?>

  <?php if(count($pizzas) >=3): ?>
    <p>There are 3 more pizzas</p>

    <?php  else :?>
        <p>There are less than 3</p>
        <?php endif; ?>
  </div>
</div>

<?php include('templates/footer.php'); ?>

</html>