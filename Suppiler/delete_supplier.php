<?php include('config.php'); 
$id = $_POST['sid'];
$mysql ="DELETE FROM Supplier WHERE sid = $id";
if($link->query($mysql)){
    echo "1";
}else{
    echo "0";
}
$link->close();
?>