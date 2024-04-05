<?php

$score = 50;

// $val = $score > 40 ? 'high score!' : 'low score :(';
// echo $val;

// echo $score > 40 ? 'high score!' : 'low score :(';
if (isset($_POST['submit'])) {

    setcookie('gender', $_POST['gender'], time() + 86400);

    session_start();

    $_SESSION['name'] = $_POST['name'];

    // echo $_SESSION['name'];
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-MySQL Tutorals - Sandbox</title>
</head>

<body>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name">
        <select name="gender">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <input type="submit" value="submit" name="submit">
    </form>

    <p><?php echo $score > 40 ? 'high score!' : 'low score :('; ?></p>

</body>

</html>