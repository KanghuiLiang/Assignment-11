<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php

//1. make a connection
$link = mysqli_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}

//2. get the information

mysqli_select_db('Saranyu');

$sql    = 'SELECT * FROM purchase_orders';
$result = mysqli_query($sql, $link);

echo "<table>";

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['product']."</td>";
	echo "<td>".$row['price']."</td>";
	echo "<td><a href='edit_po.php?pid=".$row['pid']."'><i class='fa fa-pencil' aria-hidden='true'></i></a></td>";
	echo "<td><a href='delete_po.php?pid=".$row['pid']."'>Delete</a></td>";
	echo "</tr>";

}

echo "</table>";

//list the information


//close the connection


?>