<?php

echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['REQUEST_METHOD'] . "<br>";
echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
echo $_SERVER['PHP_SELF'] . "<br>";

if (isset($_POST['submit'])) {

    session_start();

    $_SESSION['name'] = $_POST['name'];

    echo $_SESSION['name'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-MySQL Tutorals</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name">
        <input type="submit" value="submit" name="submit">
    </form>

</body>

</html>