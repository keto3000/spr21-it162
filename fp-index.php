<?php include "includes/header.php";?>

<!-- +++++++ w3c slideshow gallery+++++++++ -->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/fp-home/belfair-pano750x450.jpg" style="width:100%" alt="Lakeside view of Belfair, WA">
  <div class="text">Beautiful Belfair</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/fp-home/shelton-pano750x450.jpg" style="width:100%" alt="main street in downtown Shelton, WA">
  <div class="text">Welcome to Shelton</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/fp-home/gig-harbor-pano750x450.jpg" style="width:100%" alt="Pnoramic view of Gig Harbor, WA with Mt Rainier in background">
  <div class="text">Gig Harbor Grand View!</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<!-- ++++++++++w3c SLIDESHOW SCRIPT++++++++++ -->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<!-- END w3c  SLIDESHOW SCRIPT+++++++++++++ -->

    <div id="mission">
        <h3>Our Mission</h3>
    <p> Posuere duis parturient laoreet. Sed nulla congue mauris congue auctor rhoncus posuere eget. A nullam iaculis nascetur aliquet massa a condimentum suscipit dignissim id! Orci id vehicula ac hendrerit convallis integer erat viverra eget sit lectus.</p>
    </div>
    
<?php include "includes/footer.php";?>