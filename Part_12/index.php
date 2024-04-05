<?php

$file = 'text.txt';

// $handle = fopen($file, 'r');
// $handle = fopen($file, 'r+');
$handle = fopen($file, 'a+');

// echo fread($handle, filesize($file));

// echo fgets($handle), "<br>";
// echo fgets($handle), "<br>";

// echo fgetc($handle), "<br>";
// echo fgetc($handle), "<br>";
// echo fgetc($handle), "<br>";
// echo fgetc($handle), "<br>";

// fwrite($handle, "\nEverything popular is wrong.");

fclose($handle);

if (file_exists('copy.txt')) {
    unlink('copy.txt');
    echo "remove file copy";
} else {
    copy($file, "copy.txt");
    echo "created file copy";
}
