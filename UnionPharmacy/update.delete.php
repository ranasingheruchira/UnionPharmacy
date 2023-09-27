<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheets/user1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body> 
	
	<!--Header start-->
	<?php
		
		include_once 'header.php';
	?>

	<!--Header end-->
	
	<section id="main-sec">
	
		<div class="left-nav">
		<ul>
		<li><a href="admin.customer.php">Customers</a></li>
		<li><a  href="admin.employee.php">Employees</a></li>
		<li><a href="admin.product.php">Products</a></li>
		<li><a href="admin.corders.php">Orders</a></li>
		<li><a href="additems.php">Add Products</a></li>
		<li><a class="active" href="update.delete.php">Update/Delete Products</a></li>
		<li><a href="add.employee.php">Add Employees</a></li>
		<li><a href="admin.messages.php">Messages</a></li>
		<li><a href="user-general.php">General</a></li>
			<li><a href="user-order.php">My Orders</a></li>
		</ul>
		</div>
		
	<div class="o-container">
	
		<form action="includes/update_delete.php" method="POST" enctype="multipart/form-data">
			<input type="number" placeholder="Product ID" name="pid" id="p_id" required>
			<input type="text" placeholder="Product Name" name="pname" class="pname">
			<select name="ptype" class="ptype">
				<option value="Medicine and Helthcare">Medicine and Helthcare</option>
				<option value="Hygiene and liquid">Hygiene and liquid</option>
				<option value="Skin Care and Cosmatics">Skin Care and Cosmatics</option>
				
			</select>
			<input type="number" placeholder="Quantity" name="pquan" class="pquan">
			<input type="number" placeholder="Price" name="pprice" class="pprice">
			<textarea type="text" placeholder="Description" name="des" class="area"></textarea>
			<input type="file" name="file" class="file">
			<button name="update" type="submit" class="add">Update</button>
			<button name="delete" type="submit" class="add x">Delete</button>
		</form>
	
	</div>
	</section>
	
	<!--FOOTER START-->
	
	<?php
	
		include_once 'footer.php';
	?>
	
</body>


</html>