<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpass = "";

// connect database
$link = mysqli_connect($dbhost, $dbusername, $dbpass);
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($link, 'acc');


?>