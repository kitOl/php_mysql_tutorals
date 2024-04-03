<?php
// conditional statements
// == breake & continue

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
];

$productSearch = 'gold coin';
foreach ($products as $product) {
    if ($product['name'] === $productSearch) {
        echo $product['name'] . ' - ' . $product['price'], "\n";
        break;
    }

    if ($product['price'] > 15) {
        continue;
    }
}
echo "stop searching\n";

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