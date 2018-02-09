<?php

//1. set a connection
$link = mysqli_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';

//2. delete

$sid = $_GET['sid'];

$sql = "DELETE from Supplier WHERE sid='$sid'";

      
mysqli_select_db($link, 'acc');
$retval = mysqli_query( $link, $sql);
   
if(! $retval ) {
  die('Could not delete data: ' . mysqli_error());
}
   
echo "Delete data successfully\n";



//3. close the connection


//4. redirect user to list_po.php


?>