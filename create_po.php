<?php

include_once("config.php");

$supplier = $_POST['supplier'];
$shipping =  $_POST['shipping'];
$date =  $_POST['purchasedate'];
$prodouct =  $_POST['product'];
$desc =  $_POST['desc'];
$qty = $_POST['qty'];
$cost =  $_POST['cost'];

//insert stuff

for ($i=0; $i < count($product); $i++) { 
	// How to insert your things into DB
$sql = "INSERT INTO purchase_orders ".
      "(Supplier,ShippingAddr, PurchaseOrderDate, Products, Description, QTY, UnitCost)".
      "VALUES ('$supplier', '$shipping', '$purchaseDate', '$product[$i]', '$desc[$i]', '$qty[$i]', '$cost[$i]')";
      
   mysqli_select_db($link,'acc');
   $retval = mysqli_query( $link, $sql );
 
            
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error());
            }
            
}


echo "Entered data successfully\n";
echo "<a href='po.php'>Return to the PO page</a>";


// close the connection

mysqli_close($link);




?>