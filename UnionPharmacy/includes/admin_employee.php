<?php

	include_once 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheets/admin_product.css">
</head>

<body>
<table id="customers">
  <tr>
    <th>Employee ID</th>
    <th>First Name</th>
	<th>Last Name</th>
    <th>Address</th>
	<th>Email</th>
	<th>Contact No</th>
	<th>Duty</th>
	<th>Update</th>
	<th>Delete</th>
  </tr>
    <?php
		$sql = "SELECT * FROM employee ;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
    ?>
   <tr>
    <td><?php echo $row['empid'];?></td> 
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['lname'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['contact_no'];?></td>
	<td><?php echo $row['duty'];?></td>
	<td><a  class="add x" href="includes/emp_update.php?id=<?php echo $row['empid']; ?>">Update</a></td>
	<td><a  class="add x" href="includes/delete_employee.php?id=<?php echo $row['empid']; ?>">Delete</a></td>
  </tr>
  
  <?php } }
  
  if(isset($_POST['delete'])) {
		
	$empid = $_POST['empid'];
	
	$sql = "DELETE FROM employee WHERE empid='$empid'";
						
	if ( $conn->query($sql) === TRUE ) {
						
		$message = "Successfully deleted!";
		echo "<script type='text/javascript'>alert('$message');
			   window.location.href='../admin.customer.php';</script>";
	}else {
							
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	
}
 
 ?>
</table>

</body>
</html>