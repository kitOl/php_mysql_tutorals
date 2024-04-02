<?php

define('NAME', 'Oleg');

// $name = 'Oleg';
$age = 54;

// $name = 'Mario';

// string concatenation
// $stringOne = "my email is ";
// $stringTwo = 'oleg@ya.ru';
// echo $stringOne . $stringTwo;

// $name = 'mario';
// echo 'Hey, my name is ' . $name;
// echo "Hey, my name is $name";

// echo "the ninja screamed \"whaaaa\"";
// echo 'the ninja screamed "whaaa"';

$name = 'sergio';
echo $name[3], "\n";
echo strlen($name), "\n";
echo strtoupper($name), "\n";
echo strtolower($name), "\n";
echo str_replace('s', 'f', $name), "\n";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-MySQL Tutorals</title>
</head>

<body>

    <h1>User Profile Page</h1>

    <div class=""><?php echo NAME; ?></div>
    <div class=""><?php echo $age; ?></div>

</body>

</html>