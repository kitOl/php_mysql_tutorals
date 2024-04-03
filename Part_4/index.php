<?php

$ninjas = ['shaun', 'ryu', 'yoshi'];
echo "=> for loop\n";
for ($i = 0; $i < count($ninjas); $i++) {
    echo $ninjas[$i], "\n";
}
echo "=> foreach loop\n";
foreach ($ninjas as $ninja) {
    echo $ninja, "\n";
}

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
];

echo "=> list products\n";
foreach ($products as $product) {
    echo $product['name'] . ' - ' . $product['price'], "\n";
}

echo "=> while loop\n";
$i = 0;
while ($i < count($products)) {
    echo $products[$i]['name'] . ' - ' . $products[$i]['price'], "\n";
    $i++;
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

    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product) { ?>
            <h3><?php echo $product['name'] ?></h3>
            <p>£ <?php echo $product['price'] ?></p> <!-- Alt + 0163 -->

        <?php } ?>
    </ul>

</body>

</html>