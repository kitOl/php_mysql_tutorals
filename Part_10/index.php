<?php

include('config/db_connect.php');

$sql = "SELECT title, ingredients, id FROM pizzas ORDER BY created_at";
$result = mysqli_query($conn, $sql);
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
  <style>

  </style>

<?php include('templates/header.php'); ?>

<h4 class="center grey-text">Pizzas!</h4>

<div class="container">
  <div class="row">

    <?php foreach ($pizzas as $pizza) : ?>

      <div class="col s6 md3">
        <div class="card z-depth-0">
          <img src="img/pizza.svg" alt="Pizza" class="pizza">
          <div class="card-content center">
            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
            <ul>
              <?php foreach (explode(',', $pizza['ingredients']) as $ing) : ?>
                <li><?php echo htmlspecialchars($ing); ?></li>
              <?php endforeach; ?>
            </ul>
            <div class="card-action right-align">
              <a href="details.php?id=<?php echo $pizza['id']; ?>" class="brand-text">more info</a>
            </div>
          </div>
        </div>
      </div>

    <?php endforeach; ?>

    <?php if (count($pizzas) >= 2) : ?>
      <p>there are 2 or more pizzas</p>
    <?php else : ?>
      <p>there are less 2 pizzas</p>
    <?php endif; ?>

  </div>
</div>

<?php include('templates/footer.php'); ?>

</html>