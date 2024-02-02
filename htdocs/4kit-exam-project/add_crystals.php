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
	$query = "INSERT INTO crystals(CrystalID,Color,Name,Price)
			  VALUES ('','".$_POST["Color"]."','".$_POST["Name"]."',' ".$_POST["Price"]." ')";
				if($result=mysqli_query($link,$query))
					$message="Камъка е добавен успешно";
				else
					$message="Грешка при добавянето";
}
?>
<html>
<head>
	<title>Добавяне на камък</title>
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
	<h2> Добавяне на нов камък</h2>
	<?php if(isset($message)) echo$message; ?>
	<form method="POST" action="add_crystals.php">
	<table border="1">
	<tr>
		<td>Цвят</td>
		<td><input type="text" name="Color" /></td>
	</tr>
	<tr>
		<td>Име</td>
		<td><input type="text" name="Name"/></td>
	</tr>
	<tr>
		<td>Цена</td>
		<td><input type="text" name="Price"/></td>
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



