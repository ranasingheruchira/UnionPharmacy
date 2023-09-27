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
    <th>Customer ID</th>
    <th>Email</th>
	<th>User Name</th>
    <th>First Name</th>
	<th>Last Name</th>
	<th>Address</th>
	<th>Contact No</th>
	<th>Delete</th>
  </tr>
    <?php
		$sql = "SELECT * FROM customers WHERE actype ='Customer';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
    ?>
   <tr>
    <td><?php echo $row['customer_id'];?></td> 
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['user_name'];?></td>
	<td><?php echo $row['first_name'];?></td>
	<td><?php echo $row['last_name'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['contact_no'];?></td>
	<td><a  class="add x" href="includes/delete_customer.php?id=<?php echo $row['customer_id']; ?>">Delete</a></td>
  </tr>
  
  <?php } }
  
  if(isset($_POST['delete'])) {
		
	$pid = $_POST['customer_id'];
	
	$sql = "DELETE FROM customers WHERE customer_id='$pid'";
						
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