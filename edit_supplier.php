
<?php
include_once ('header.php');

$sid = $_GET['sid'];

//first connect database
$link = mysqli_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($link, 'acc');

//select information from database
$sql    = "SELECT * FROM Supplier WHERE sid = '$sid'";

$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
</head>
<body>
	<form action="update_supplier.php" method="POST">
		<label for="id">Suppiler ID</label>
		<input type="hidden" name="sid" value="<?php echo $row['sid'] ?>">
		<input type="text" name="sname" value="<?php echo $row['sname'] ?>">
		<label>Email</label>
		<input type="text" name="semail" value="<?php echo $row['semail'] ?>">
		<label>Bank Name</label>
		<input type="text" name="bankname" value="<?php echo $row['bankname'] ?>">
		<label>account</label>
		<input type="text" name="account" value="<?php echo $row['account'] ?>">
		<label>Address</label>
		<input type="text" name="address" value="<?php echo $row['address'] ?>">
		<label>Phone</label>
		<input type="text" name="phone" value="<?php echo $row['phone'] ?>">

		<input type="submit" value="Update">
	</form>
</body>
</html>