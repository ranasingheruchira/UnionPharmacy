<!DOCTYPE html>
<html>

<head>
	<title>Add Customers</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/user2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body> 
	
	<!--Header start-->
	<?php
		
		include_once 'header.php';
	?>

	<!--Header end-->
	
	<section id="main-sec">
		
		<div class="left-nav" >
		<ul>
		<li><a class="active" href="admin.customer.php">Customers</a></li>
		<li><a href="user-general.php">General</a></li>
			<li><a href="user-order.php">My Orders</a></li>
			
		</ul>
		</div>
		
		<div class="o-container">
	
		<?php
		
			include_once 'includes/admin_customer.php';
		?>
	
	
	
		</div>
	</section>
	
	<!--footer start-->
	
	<?php
	
		include_once 'footer.php';
	?>
	<!--footer end-->
	
</body>


</html>