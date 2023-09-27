<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheets/user2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/cart-very-special.css">
</head>

<body> 

<?php
		
		include_once 'header.php';
?>

	<section id="main-sec">
	
		<div class="left-nav">
		<ul>
		<li><a href="admin.customer.php">Customers</a></li>
		<li><a  href="admin.employee.php">Employees</a></li>
		<li><a href="admin.product.php">Products</a></li>
		<li><a href="admin.corders.php">Orders</a></li>
		<li><a href="additems.php">Add Products</a></li>
		<li><a href="update.delete.php">Update/Delete Products</a></li>
		<li><a href="add.employee.php">Add Employees</a></li>
		<li><a href="admin.messages.php">Messages</a></li>
		<li><a href="user-general.php">General</a></li>
		<li><a class="active"  href="user-order.php">My Orders</a></li>
		</ul>
		</div>
		
			<div class="o-container">
		
				<?php
		
					include_once 'includes/user_order.php';
				?>
	
			</div>
	</section>
	
	<!-- THE MODAL -->
	
	<div id="myModal" class="modal">
	<div class="modal-content">
    <span class="close">&times;</span>
	<div class="container"><div class="row"><div class="col" id="cart"></div></div></div>
	</div>
	</div>
	
	<!--FOOTER START-->
	
	<?php
	
		include_once 'footer.php';
	?>
	
	
</body>
<script src="myModal.js"></script>


</html>