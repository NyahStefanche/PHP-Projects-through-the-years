<?php
header("refresh:5");
session_start();
include"db.php";
if(isset($_GET['ID']))
{
	if(!isset($_SESSION['user']))
	{
		header("location: login.php");
		exit();
	}
	$query="DELETE FROM movement
	WHERE ID=".$_GET['ID'];
	if(mysqli_query($link,$query))
		$message="Изтрит успешно";
	else
		$message="Грешка при изтриването";
}
?>

<!DOCTYPE html>
<html lang="bg">
<head>
  <title>Дипломна работа</title>
  <link href="site.css" rel="stylesheet" type="text/css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <style>

body 
{
  font-family: "Lato", sans-serif;
}
.main 
{
  margin-left: 160px; /* Задава се същата широчина каквато е и на sidenav */
  font-size: 20px; /* Големина на буквите на основния текст/документ */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) 
{
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
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



<table style="width: 0%" align="center">
	<tr>
		<td style="width: 359px">
		<img alt="" height="268" src="Images/Arduino.jpg" width="368">&nbsp;</td>
		<td><img src="Images/Light.jpg" height="300" width="300"></td>
	</tr>
</table>
<h1><center> Дипломна работа </center></h1>
<p><center>Здравейте в този сайт може да следите кои светлини са били пуснати и дата/време<center></p>

<center>
	<?php 
	if(isset($message))echo$message;
	if(isset($_SESSION['user']))
		{
	?>
	<table border="1" class="table1">
	<tr>
	<th> Номер</th>
	<th> Етаж </th>
	<th> Време</th>
	<th> Изтриване </th>
	<?php
		}
	?>
	</tr>
<?php
	if(isset($_SESSION['user']))
		{
	$query="SELECT * FROM movement";
	if($result=mysqli_query($link,$query))
	{
		while($row=mysqli_fetch_assoc($result)){
	?>
<tr>
	<td><?php echo$row['ID'];?></td>
	<td><?php echo$row['Floor'];?></td>
	<td align="center"><?php echo$row['Time'];?></td>
	<td><a href="index.php?ID=<?php echo$row['ID'];?>">Изтриване</a></td>
	<?php
	}}}
	?>
</div>
</body>
</html> 