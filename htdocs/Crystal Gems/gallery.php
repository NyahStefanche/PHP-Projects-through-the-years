<!DOCTYPE html>
<html lang="bg">
<head>
  <title>Галерия</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <style>

body {
  font-family: "Lato", sans-serif;
}
.main {
  margin-left: 160px; /* Задава се същата широчина каквато е и на sidenav */
  font-size: 14px; /* Големина на буквите на основния текст/документ */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
  width: 700px;  /*Ш ирочина на галерията */
 }

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -ms-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #ff0000;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* 12 columns side by side */
.column {
  float: left;
  width: 8.33%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
  
  
</head>
<body>

<!-- Начало на меню -->
<?php
include ("menu.php");
?>
<!-- Край на меню -->

<div class="main">

<center>

<h2 style="text-align:center">Галерия</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 12</div>
    <img src="./images/tigursko_oko.jpg" style="width:100%; height:700px">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 12</div>
    <img src="./Images/bql_diamant.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 12</div>
    <img src="./images/bql_topal.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 12</div>
    <img src="./images/bql_topaz.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 12</div>
    <img src="./images/bqla_perla.jpg" style="width:100%; height:700px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 12</div>
    <img src="./images/brown_tourmaline.jpg" style="width:100%; height:700px">
  </div>
    
	<div class="mySlides">
    <div class="numbertext">7 / 12</div>
    <img src="./images/sinu_zelen_akvamarin.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">8 / 12</div>
    <img src="./images/Emerald.jpg" style="width:100%; height:700px">
  </div>

  <div class="mySlides">
    <div class="numbertext">9 / 12</div>
    <img src="./images/hrizoberil.jpeg" style="width:100%; height:700px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">10 / 12</div>
    <img src="./images/kafqv_spinel.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">11 / 12</div>
    <img src="./images/kafqv_topaz.jpg" style="width:100%; height:700px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">12 / 12</div>
    <img src="./images/zelen_spinel.jpg" style="width:100%; height:700px">
  </div>
  
  <a class="prev" onclick="plusSlides(-1)"><</a>
  <a class="next" onclick="plusSlides(1)">></a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

   <div class="row">
    <div class="column">
      <img class="demo cursor" src="./Images/tigursko_oko.jpg" style="width:100%" onclick="currentSlide(1)" alt="Тигърско Око">
    </div>
    <div class="column">
      <img class="demo cursor" src="./images/bql_diamant.jpg" style="width:100%" onclick="currentSlide(2)" alt="Бял Диамант">
    </div>
    <div class="column">
      <img class="demo cursor" src="./images/bql_topal.jpg" style="width:100%" onclick="currentSlide(3)" alt="Бял Топал">
    </div>
    <div class="column">
      <img class="demo cursor" src="./images/bql_topaz.jpg" style="width:100%" onclick="currentSlide(4)" alt="Бял Топаз">
    </div>
    <div class="column">
      <img class="demo cursor" src="./images/bqla_perla.jpg" style="width:100%" onclick="currentSlide(5)" alt="Бяла Перла">
    </div>    
    <div class="column">
      <img class="demo cursor" src="./images/brown_tourmaline.jpg" style="width:100%" onclick="currentSlide(6)" alt="Кафяв Турмалин">
    </div>
	<div class="column">
      <img class="demo cursor" src="./Images/sinu_zelen_akvamarin.jpg" style="width:100%" onclick="currentSlide(7)" alt="Синюзелен Аквамарин">
    </div>
    <div class="column">
      <img class="demo cursor" src="./images/Emerald.jpg" style="width:100%" onclick="currentSlide(8)" alt="Смарагд">
    </div>
    <div class="column">
      <img class="demo cursor" src="./images/hrizoberil.jpeg" style="width:100%" onclick="currentSlide(9)" alt="Александрит">
    </div>
    <div class="column">
      <img class="demo cursor" src="./images/kafqv_spinel.jpg" style="width:100%" onclick="currentSlide(10)" alt="Кафяв Спинел">
    </div>
    <div class="column">
      <img class="demo cursor" src="./images/kafqv_topaz.jpg" style="width:100%" onclick="currentSlide(11)" alt="Кафяв Топаз">
    </div>    
    <div class="column">
      <img class="demo cursor" src="./images/zelen_spinel.jpg" style="width:100%" onclick="currentSlide(12)" alt="Зелен Спинел">
    </div>
  </div>
</div>

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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>

</center>
</div>  
</body>
</html> 