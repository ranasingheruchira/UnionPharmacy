<!DOCTYPE html>
<html>

<head>
	<title>Pharmacy | Catagaries</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/product.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/cart-very-special.css">
</head>

<body> 

	<?php
		
		include_once 'header.php';
	?>

	<!--HEADER END-->
	
	<section id="main-sec">
	
	<img class="dress-img-1" src="images/product-dress/main.png"></img>
	<div class="sub-nav">
	<a class="s-nav" href="product-dress.php">Medicine and Hygiene Products</a> 

	</div><hr>
	<div id="wrap">
	<div id="columns" class="columns_4">
	
	<h2>Medicine Products</h2><br>
	
	 <?php
	 
		include 'includes/config.php';
		
		$sql = "SELECT * FROM product WHERE product_type='Medicine and Helthcare';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$rowNew = $row['img_location'];
				$pid = $row['product_id'];
				$price = $row["price"]; 
    ?>
	
	<figure>
	<img src="uploads/<?php echo $rowNew;?>">
	<figcaption><?php echo $row['product_name'];?></figcaption>
	<figcaption>Price : LKR <?php echo $price;?></figcaption>
    <a class="button" href="view-product.php?id=<?php echo $row['product_id'];?>">View</a>
	</figure>
	
	<?php } } ?>
	
	<h2>Hygiene Products</h2><br>
	
	<?php
		
		$sql = "SELECT * FROM product WHERE product_type='Hygiene and liquid';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$rowNew = $row['img_location'];
				$pid = $row['product_id'];
    ?>
	
	<figure>
	<img src="uploads/<?php echo $rowNew;?>">
	<figcaption><?php echo $row['product_name'];?></figcaption>
    <a class="button" href="view-product.php?id=<?php echo $row['product_id'];?>">View</a>
	</figure>
	
	<?php } } ?>


	<h2>Skin Care and Cosmatics</h2><br>
	
	<?php
		
		$sql = "SELECT * FROM product WHERE product_type='Skin Care and Cosmatics';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$rowNew = $row['img_location'];
				$pid = $row['product_id'];
    ?>
	
	<figure>
	<img src="uploads/<?php echo $rowNew;?>">
	<figcaption><?php echo $row['product_name'];?></figcaption>
    <a class="button" href="view-product.php?id=<?php echo $row['product_id'];?>">View</a>
	</figure>
	
	<?php } } ?>
    
	</div>
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