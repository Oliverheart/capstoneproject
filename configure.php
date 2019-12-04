<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Darren');
define('DB_PASSWORD', 'Cheese1984');
define('DB_NAME', "finalproject");

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
