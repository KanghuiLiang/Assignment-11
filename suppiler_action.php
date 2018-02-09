<?php

$sid = $_POST['sid'];
$sname= $_POST['sname'];
$semail = $_POST['semail'];
$bankname = $_POST['bankname'];
$account = $_POST['account'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$pid = $_POST['pid'];
$pname = $_POST['pname'];
$price = $_POST['price'];

$conn = mysqli_connect('localhost','root','');
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully<br>';

for ($i=0; $i < count($pid); $i++) { 
	// How to insert your things into DB
$sql = "INSERT INTO Supplier".
      "(sid,sname, semail, bankname, account, address, phone, pid, pname, price)".
      "VALUES ('$sid', '$sname', '$semail', '$bankname', '$account', '$address', '$phone', 'pid[$i]', 'pname[$i]','$price[$i]')";
      
   mysqli_select_db($conn,'acc');
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysqli_error());
   }
}


   
echo "Entered data successfully\n";

mysqli_close($conn);



?>