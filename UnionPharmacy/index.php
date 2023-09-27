<!DOCTYPE html>
<html>

<head>
	<title>Pharmacy | Home</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/cart-very-special.css">
</head>

<body> 

	<?php
		
		include_once 'header.php';
	?>

	<!--HEADER END-->
	
	<section id="main-sec"  style="background-image: url('images/index/main-1c.jpg');">
	<div class="o-container">
	
	<div class="slideshow-container">
	
	<div class="mySlides fade">
	<h1 class="alpha fade">Union medicare <br>Drug Store</h1>
	<h2 class="beta fade">Your personal prescrptions <br> Delivery on your Hands </h2>
	</div>
	
	<div class="mySlides fade">
	<h1 class="alpha fade">Redefining the role <br>of a pharmacy...</h1>
	<h2 class="beta fade">Sign up now and get Your<br> personal prescrptions &nbsp</h2>
	</div>

	<div class="mySlides fade">
	<h1 class="alpha fade">Getting your medication <br>delivered starts here.</h1>
	<h2 class="beta fade">whole lot simpler!​</h2>
	</div>
	
	</div>
	
	<!--  -->
	</div>
	</section>
	
	<!-- PACKAGES -->
	
	<section>
	
	
	<div class = "o2-container"> 
	
	<h1 class="txt-3">Shop By Categories</h1>
	<h2 class="txt-4">Select Your personal prescrptions<br>with categaries as you wish</h2>
	
			<div class="row catrow">
				<div class="categoriescard" >
				 <img class="card-image" src="images/index/medicine.jpg" alt="">
				<div class="container">
                <h4><b>Medicine  and Helthcare Products</b></h4>
				<a href="product-dress.php" class="w3-button w3-round w3-blue" >View</a>
               </div>
				</div>



				<div class="categoriescard" >
				 <img class="card-image" src="images/index/hygiene.jpg" alt="">
				<div class="container">
                <h4><b>Hygiene and liquid  <br> products</b></h4>
			
				<a href="product-dress.php" class="w3-button w3-round w3-blue " >View</a>
               </div>
				</div>

				<div class="categoriescard" >
				 <img class="card-image" src="images/index/skin care.jpg" alt="">
				<div class="container">
                <h4><b>Skin Care and Cosmatics Product</b></h4>
			
				<a href="product-dress.php" class="w3-button w3-round w3-blue" >View</a>
               </div>
				</div>

			</div>
	</div> 
	</section>
	
	<!--GALLERY-->
	
	

	<div id="myModal1" class="modal">
	<span class="close cursor" onclick="closeModal()">&times;</span>
	<div class="modal-content">

    <div class="mySlides-1">
    <img src="images/index/gallery/1.jpg" style="width:100%">
    </div>

    <div class="mySlides-1">
    <img src="images/index/gallery/2.jpg" style="width:100%">
    </div>

    <div class="mySlides-1">
    <img src="images/index/gallery/3.jpg" style="width:100%">
    </div>
    
    <div class="mySlides-1">
    <img src="images/index/gallery/4.jpg" style="width:100%">
    </div>
	
	<div class="mySlides-1">
    <img src="images/index/gallery/5.jpg" style="width:100%">
    </div>

    <div class="mySlides-1">
    <img src="images/index/gallery/6.jpg" style="width:100%">
    </div>

    <div class="mySlides-1">
    <img src="images/index/gallery/14.jpg" style="width:100%">
    </div>
    
    <div class="mySlides-1">
    <img src="images/index/gallery/8.jpg" style="width:100%">
    </div>
    
    <a class="prev-2" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next-2" onclick="plusSlides(1)">&#10095;</a>

	</div>
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
	

	
	<?php
	
		include_once 'footer.php';
	?>
	
</body>

<script src="myModal.js"></script>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 6000); // Change image every 6 seconds
}

</script>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="script/jquery.rollingslider.js"></script>

<script>
			$('#demo').RollingSlider({
				showArea:"#example",
				prev:"#jprev",
				next:"#jnext",
				moveSpeed:300,
				autoPlay:false
			});
</script>

<script>
function openModal1() {
  document.getElementById('myModal1').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal1').style.display = "none";
}

var slideIndex2 = 1;
showSlides2(slideIndex);

function plusSlides(n) {
  showSlides2(slideIndex2 += n);
}

function currentSlide(n) {
  showSlides2(slideIndex2 = n);
}

function showSlides2(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides-1");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex2 = 1}
  if (n < 1) {slideIndex2 = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex2-1].style.display = "block";
  dots[slideIndex2-1].className += " active";
  captionText.innerHTML = dots[slideIndex2-1].alt;
}
</script>


</html>