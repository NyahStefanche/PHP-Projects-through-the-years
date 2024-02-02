<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location: login.php");
	exit();
}
if(!empty($_POST))
{
	include"db.php";
	$query = "INSERT INTO discount(CatalogID,Name,discount,price)
			  VALUES ('','".$_POST["Name"]."','".$_POST["discount"]."',' ".$_POST["price"]." ')";
				if($result=mysqli_query($link,$query))
					$message="Промоцията е добавена успешно";
				else
					$message="Грешка при добавянето";
}
?>
<html>
<head>
	<title>Добавяне на промоция</title>
	<link href="site.css" rel="stylesheet" type="text/css"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<div id="main">
	<div id="menu">
		<?php include "menu.php"; ?>
	</div>
	<div id="content">
	<center>
	<h2> Добавяне на нов служител</h2>
	<?php if(isset($message)) echo$message; ?>
	<form method="POST" action="add_promociq.php">
	<table border="1">
	<tr>
		<td>Име на камъка</td>
		<td><input type="text" name="Name" /></td>
	</tr>
	<tr>
		<td>Намаление(лв.)</td>
		<td><input type="text" name="discount"/></td>
	</tr>
	<tr>
		<td>Цена след намаление(лв.)</td>
		<td><input type="text" name="price"/></td>
	</tr>
	<tr>
		<td colspan='10' align='center'><input type="submit" value="Добави"/></td>
	</tr>
	</table>
	</form>
	</center>
	</div>
</div>
</body>
</html>



