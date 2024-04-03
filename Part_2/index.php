<?php
// indexed arrays

$peopleOne = ['shaun', 'crystal', 'ryu'];
echo $peopleOne[0], "\n";

$peopleTwo = array('ken', 'chun-li', 'fred');
echo $peopleTwo[1], "\n";

$ages = [20, 30, 40, 50];
print_r($ages);

$ages[1] = 25;
print_r($ages);

$ages[] = 60;
print_r($ages);

array_push($ages, 70);
print_r($ages);

echo count($ages), "\n";

$peopleThree = array_merge($peopleOne, $peopleTwo);
print_r($peopleThree);

// associative arrays (key & value pairs)

$ninjasOne = ['shaum' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
echo $ninjasOne['mario'], "\n";
print_r($ninjasOne);

$ninjasTwo = ['browser' => 'green', 'peach' => 'yellow'];
print_r($ninjasTwo);

$ninjasTwo['toad'] = 'pink';
print_r($ninjasTwo);

$ninjasTwo['peach'] = 'pink';
print_r($ninjasTwo);

echo count($ninjasOne), "\n";

$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
print_r($ninjasThree);

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