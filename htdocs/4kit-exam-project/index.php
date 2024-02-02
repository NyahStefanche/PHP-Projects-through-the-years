<?php
session_start();
?>

<!DOCTYPE html>
<html lang="bg">
<head>
  <title>Начало</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

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
.auto-style1 {
	font-size: x-large;
}
.auto-style2 {
	font-size: large;
}
.auto-style3 {
	font-size: medium;
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



<table style="width: 57%" align="center">
	<tr>
		<td class="auto-style2" style="width: 359px">
		<img alt="" height="268" src="Images/logo.png" width="368">&nbsp;</td>
		<td class="auto-style2"><img src="Images/Logo2.png"></td>
	</tr>
</table>
<p class="auto-style3">Здравейте в сайта на <strong>Crystal Gems, </strong>
фирмата предлага търговия със скъпоценни камъни,</p>
	<p class="auto-style3"><strong>Скъпоценният камък</strong> е минерал,скала или вкаменен 
материал,който след изрязване ,фасетиране и/или полиране се използва<br>в 
бижутерията или за колекциониране.Някои скъпоценни камъни като кехлибара,гагата 
и амолита са с ограничен произход.<br>Някои минерали са прекалено меки и 
крехки,за да се използват в бижутерията, например родохрозита,но са ценен 
колекционерски материал.Единицата за тегло на скъпоценните камъни се нарича 
карат.</p>
	<span class="auto-style3">
<p class="auto-style3">В бижутерията се използват както естествени камъни,така и 
синтетични такива.Синтитетичните имат по-равномерно оцветяване и са значително 
по-евтини.</p></br>
	</span><span class="auto-style1"><span class="auto-style3">Успех в колекционирането!</span></span>
<p class="auto-style3">&nbsp;</p>
</div>  
</body>
</html> 