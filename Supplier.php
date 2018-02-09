<?php

include_once ('config.php');
include_once ('header.php');
?>

<div class="container">
<div class="jumbotron mt-4">
	<h4>Supplier Page</h4>
	<hr class="my-4">
	<h5>Supplier list</h5>
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">Supplier ID</th>
	      <th scope="col">Supplier Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Bank Name</th>
	      <th scope="col">account</th>
	      <th scope="col">address</th>
	      <th scope="col">Phone</th>
	      
	      <th scope="col">Edit</th>
	       <th scope="col">Delete</th>
	      
	    </tr>
	  </thead>
	  <tbody>
	  <?php 
			$sql = 'SELECT * from Supplier order by sid ASC';
			$retval = mysqli_query($link, $sql);
			while($row = mysqli_fetch_array($retval)) {
				echo "<tr>";
				$sid = $row["sid"];
				$sname = $row["sname"];
				$semail = $row["semail"];
				$bankname = $row["bankname"];
				$account = $row["account"];
				$address = $row["address"];
				$phone = $row ["phone"];

				echo "<td>{$sid}</td>";
		  		echo "<td>{$sname}</td>";
		  		echo "<td>{$semail}</td>";
		  		echo "<td>{$bankname}</td>";
		  		echo "<td>{$account}</td>";
		  		echo "<td>{$address}</td>";
		  		echo "<td>{$phone}</td>";
		  		echo "<td><a href='edit_supplier.php'><i id='edit' sid='$sid' sname='$sname' semail='$semail' bankname= '$bankname' account = '$account' address='$address' phone='$phone' class=' edit_suppiler fa fa-pencil fa-1x'></i></a></td>";
		  		echo "<td><a href='delete_supplier.php'><i id='delete' class='delete_supplier fa fa-trash' aria-hidden='true'></i> </a></td>";
		  	    echo "</tr>";
			}
			mysqli_close($link);
	  ?>
	  </tbody>
	</table>
</div>

<?php include_once('footer.php'); ?>

<!-- <script src="js/supplierview.js"> -->

</script>





<?php include_once('footer.php'); ?>