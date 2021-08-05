<?php include('C:\xampp\htdocs\Mini Project\home page\backend\home.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Kitchen</title>
    <link rel="stylesheet" href=<?php echo links::css;?>>
    <link rel="icon" type="image/png" sizes="16x16" href=<?php echo assets::icon;?>>
    
</head>

<body>
    <?php include_once('C:\xampp\htdocs\Mini Project\navbar\frontend\navbar.php'); ?>
    
    <div class="slideshow-container" style="
    background: linear-gradient(rgba(255,255,255,.4), rgba(255,255,255,.4)), url(<?php echo assets::foodbg;?>);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 150%;">
        <div class="mySlides">
            <q>Happiness is a combination of Pizza and Pasta</q>
            <p class="author">- Italian at heart</p>
        </div>
        <div class="mySlides">
        <q>You only live once... Lick the bowl!</q>
        <p class="author">- Casual Foodie</p>
        </div>            
        <div class="mySlides">
          <q>The belly rules the mind</q>
          <p class="author">- My mind</p>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    <?php include_once('C:\xampp\htdocs\Mini Project\footer\frontend\footer.php'); ?> 
</body>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
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
</html>
