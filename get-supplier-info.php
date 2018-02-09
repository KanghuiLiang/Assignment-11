<?php

include_once("config.php");

if(!empty($_POST["supplier"])){

  $supplier = $_POST['supplier'];

  $sql = "SELECT * from suppliers where supplier = '$supplier'";
  $retval = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($retval);
  echo $row['shipping_addr'];

}

mysqli_close($link);


?>