

<?php
//CONFIG AND DATABASE FILES
require("includes/config.php");
require("includes/dbcontroller.php");

//CONNECTING TO DATABASE
/*$pdo = new PDO(
	"mysql:host=$host;dbname=$dbname;charset=$charset", 
	$user, $password, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
	]
);*/
?>

<?php
if (isset($_GET['id'])){
	$id = $_GET['id'];
}
?>

<?php
//VARIABLE DECLARATION
	
	$sql = "SELECT * FROM product WHERE product_id='$id' LIMIT 1;";
	$result = mysqli_query($conn, $sql); 
	$resultCheck = mysqli_num_rows($result);
	
//FETCHING DATA FROM TABLE - producttable
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			$product_name = $row["product_name"];
			$product_type = $row["product_type"];
			$image = $row["img_location"]; 
			$quantity = $row["quantity"];
			$price = $row["price"];
			$des = $row["description"];
		}
		
		$send_to_cart=array("name"=>$product_name, "type"=>$product_type);
	}
?>

<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheets/main.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/cart-very-special.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/view.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="cart.js"></script>

</head>
<body>
	
	<?php
		
		include_once 'header.php';
	?>
	
	<!--HEADER END-->
	
	<section id="main-sec">
	
	<div class="o-container">


	<p class="go-back"><a class="go-back-a" href="product-dress.php">Back to Categories</a> </p>
	<div class="show-case-main">

	<img id="show-case" src="uploads/<?php echo $image;?>"></img> 
	</div>
	
	<div class="show-case-info">
		
		<form method="post" action="#">
		
		<br><br>
		<div class="head-text"><b><?php echo $product_name; ?><b></div>

		
		<div class="quantity-text">QUANTITY:</div>
		<input id="number" type="number" name="value_pass_quantity" min="1" max="10">
		<br>

		<div class="product-price">Price : Rs <?php echo $price; ?></div>
		
		<input type="hidden" name="value_pass_name" value="<?php echo $product_name?>">
		<input type="hidden" name="value_pass_price" value="<?php echo $price?>">
		
		<input type="submit" name="add_to_cart" value="Add to cart">
		</form>
		
		<?php include ("cart.php");?>
	</div>
	
	<!-- PRODUCT DETAILS -->
	
	&nbsp;
	
	</p>
	</div>
	
	<br>
	
	<button class="collapsible">Description & Tips</button>
	<div class="content">
	<p>
	
	<br>
	<?php echo $des; ?>
	<br>
	
	
	&nbsp;
	
	</p>
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

<!--References GITHUB.com-->

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

<script>
//Modal Element
var modal = document.getElementById('myModal');
//Button that open the modal. 
var btn = document.getElementById("log-bag");
//Button that closes the modal. 
var span = document.getElementsByClassName("close")[0];
//Open function
function openthis() {
    modal.style.display = "block";
}
//Close function
span.onclick = function() {
    modal.style.display = "none";
}
//Close function (no button)
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
function error(){
	var message = "Please first login to the website!";
	alert(message);
	window.location.href='loginp.php';
}
</script>

</html>