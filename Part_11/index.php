<?php

$file = 'text.txt';
$new_file = 'file_copy.txt';

$quotes = @readfile($file);
echo $quotes;

//=======

if (file_exists($file)) {

    echo readfile($file) . "<br>";

    $res = copy($file, $new_file);
    var_dump($res);
    echo $res . "<br>";

    echo "real path to file: " . realpath($file) . "<br>";

    echo "file size: " . filesize($file) . "<br>";

    $res = rename($new_file, 'test.txt');
    echo "rename file result:<br>";
    var_dump($res);
} else {
    echo "file does not exist";
}

$res = mkdir('quotes');
echo "created new dir result:<br>";
var_dump($res);
