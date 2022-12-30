<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    
    <link rel="stylesheet" href="./scss/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
  <!--navbar start -->
<div id="navbar">
<nav>
    <a href="index.php" id="logo"><img src="https://cdn.pixabay.com/photo/2015/06/12/18/44/fox-807315__480.png" alt="" id="logo"></a>
<a href="shop.php" class="link-menu">SHOP</a>
<a href="about.php" class="link-menu">ABOUT</a>
<a href="contact.php" class="link-menu">CONTACT</a>
</nav>
<div id="login">
    <button><a href="./login.php">LOG IN</a></button>
    <button><a href="./register.php">register...</a></button>
</div>
</div>
<!--navbar end-->
<!--title-->
<div id="hero">
FantasY ShoP ! </div>
<!--carousel start-->
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="https://cdn.pixabay.com/photo/2015/05/11/14/51/heart-762564__480.jpg" style="width:100%">
  <div class="text">It's all about love...</div>
</div>

<div class="mySlides fade">
  <img src="https://cdn.pixabay.com/photo/2022/01/24/13/05/hearts-6963368__480.jpg" style="width:100%">
  <div class="text">...sharing some happiness...</div>
</div>

<div class="mySlides fade">
  <img src="https://cdn.pixabay.com/photo/2020/05/04/11/19/smile-5128742__480.jpg" style="width:100%">
  <div class="text">...and laughing !</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<!--carousel end-->
<!--about section start-->
<div id="contact">
  <div class="imgleft">
    <img src="https://cdn.pixabay.com/photo/2022/07/07/10/46/woman-7306978__480.jpg" alt="">
  </div>
  <div class="right">
    <p>Some infos about us <br>
     Our concept</p>
    <a href="about.php">more details</a>
  </div>
</div>
<!--about section start-->
<!--footer start-->
<div id="footer">
  <div class="links">
    <a href="impressum.php">IMPRESSUM</a>
    <a href="jobs.php">JOBS</a>
    <a href="about.php">ABOUT</a>
    <a href="contact.php">CONTACT</a>
  </div>
  <div class="socialmedia">
    <a href=""><img src="https://cdn1.iconfinder.com/data/icons/social-media-rounded-corners/512/Rounded_Facebook_svg-256.png" alt=""></a>
    <a href=""><img src="https://cdn1.iconfinder.com/data/icons/social-media-rounded-corners/512/Rounded_Linkedin2_svg-256.png" alt=""></a>
    <a href=""><img src="https://cdn1.iconfinder.com/data/icons/social-media-rounded-corners/512/Rounded_Instagram_svg-256.png" alt=""></a>
  </div>
  <div class=copyright>
    <p>All right reserved / FantasyShop GmbH © </p>
  </div>
</div>
<!--footer end-->

<!--script for carousel-->
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>