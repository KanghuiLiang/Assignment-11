<?php

$product =  $_POST['product'];
$price = $_POST['price'];

//1. setup a connection

$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

//2. insert
$sql = "INSERT INTO purchase_orders ". "(product,price) ". "VALUES('$product','$price')";
      
mysql_select_db('Saranyu');
$retval = mysql_query( $sql, $link );
   
if(! $retval ) {
  die('Could not enter data: ' . mysql_error());
}
   
echo "Entered data successfully\n";

//3. close the connection
mysql_close($link);





?>