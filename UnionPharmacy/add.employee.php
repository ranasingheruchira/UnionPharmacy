<!DOCTYPE html>
<html>

<head>
	<title>Add Employee</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/user.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body> 

	<!--Header start-->
	<?php
		
		include_once 'header.php';
	?>

	<!--Header end-->
	
	<!--sidebar content-->
	
	<section id="main-sec">
	
		<div class="left-nav">
		<ul>
		<li><a href="admin.customer.php">Customers</a></li>
		<li><a  href="admin.employee.php">Employees</a></li>
		<li><a href="admin.product.php">Products</a></li>
		<li><a href="admin.corders.php">Orders</a></li>
		<li><a href="additems.php">Add Products</a></li>
		<li><a href="update.delete.php">Update/Delete Products</a></li>
        <li><a class="active" href="add.employee.php">Add Employees</a></li>
		<li><a href="admin.messages.php">Messages</a></li>
		<li><a href="user-general.php">General</a></li>
			<li><a href="user-order.php">My Orders</a></li>
		</ul>
		</div>
		
		<!--emloyee insering form-->
		
	<div class="o-container">
	
		<form action="includes/addemployee.php" method="POST" enctype="multipart/form-data">
			<input type="text" placeholder="First Name" name="fname" class="pname" required>
            <input type="text" placeholder="Last Name" name="lname" class="pname" required>
            <input type="text" placeholder="Address" name="address" class="pname" required>
            <input type="text" placeholder="E-mail" name="email" class="pname" required>
            <input type="text" placeholder="Contact Number" name="cno" class="pname" required>
            <input type="text" placeholder="Employee Duty" name="duty" class="pname" required>

			<button name="submit" type="submit" class="add">Add</button>
          
		</form>
	
	</div>
	</section>
	
	<!--footer start-->
	
	<?php
	
		include_once 'footer.php';
	?>
	
	<!--footer end-->
</body>


</html>