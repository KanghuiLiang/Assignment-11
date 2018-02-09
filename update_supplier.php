<?php

include_once ('config.php');


//2. perform the updates

                $sid = $row["sid"];
				$sname = $row["sname"];
				$semail = $row["semail"];
				$bankname = $row["bankname"];
				$account = $row["account"];
				$address = $row["address"];
				$phone = $row ["phone"];

$sql = "UPDATE Supplier SET sid ='$sid', sname ='$sname', semail ='semail', bankname ='bankname', account ='account', address = '$address',
phone = '$phone' WHERE sid='$sid'";
      
mysqli_select_db($link, 'acc');
$retval = mysqli_query($link, $sql);
   
if(! $retval ) {
  die('Could not update data: ' . mysqli_error());
}
   
echo "Update data successfully\n";



//3 close the connection

?>