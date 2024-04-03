<?php
// functions

function sayHello($name = 'shaun', $time = 'morning') {
    echo "good $time $name\n";
}

sayHello('mario');
sayHello('mario', 'night');
sayHello();

function formatProduct($product) {
    // echo "{$product['name']} costs £{$product['price']} to buy \n";
    return "{$product['name']} costs £{$product['price']} to buy \n";
}

$formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
echo $formatted;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-MySQL Tutorals</title>
</head>

<body>

</body>

</html>