<?php
$host = 'localhost';
$username = 'ninja';
$password = '123456';
$db_name = 'ninja_pizza';

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
    echo "Connection error: " . mysqli_connect_errno();
}

$sql = "SELECT title, ingredients, id FROM pizzas";
$result = mysqli_query($conn, $sql);
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

print_r($pizzas);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<?php include('templates/footer.php'); ?>

</html>