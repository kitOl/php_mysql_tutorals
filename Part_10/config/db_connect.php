<?php

$host = 'localhost';
$username = 'ninja';
$password = '123456';
$db_name = 'ninja_pizza';

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
    echo "Connection error: " . mysqli_connect_errno();
}
