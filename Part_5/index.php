<?php
// conditional statements

$price = 20;

if ($price < 10) {
    echo "the conditional is met\n";
} elseif ($price < 20) {
    echo "elsif conditional is met\n";
} else {
    echo "the conditional not met\n";
}

// ======
$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
];

$priceMax = 15;
$priceMin = 2;
$priceEq = 20;
foreach ($products as $product) {
    if (
        $product['price'] < $priceMax
        && $product['price'] > $priceMin
        || $product['price'] === $priceEq
    ) {
        echo $product['name'] . ' - ' . $product['price'], "\n";
    }
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

    <div class="">
        <ul>
            <?php foreach ($products as $product) { ?>
                <?php if ($product['price'] > 15) { ?>
                    <li><?php echo $product['name']; ?></li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>

</body>

</html>