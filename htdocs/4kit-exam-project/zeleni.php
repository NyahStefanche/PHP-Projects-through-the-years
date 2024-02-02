<?php
session_start();
include"db.php";
if(isset($_GET['CrystalID']))
{
	if(!isset($_SESSION['user']))
	{
		header("location: login.php");
		exit();
	}
	$query="DELETE FROM crystals
	WHERE CrystalID=".$_GET['CrystalID'];
	if(mysqli_query($link,$query))
		$message="Камъка е изтрит успешно";
	else
		$message="Грешка при изтриването";
}
?>

<!DOCTYPE html>
<html lang="bg">
<head>
  <title>Зелени камъни</title>
  <link href="site.css" rel="stylesheet" type="text/css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<!-- Начало на меню -->
<?php include ("menu.php"); ?>
<!-- Край на меню -->

	<div id="main">
	<center>
	<h2> Зелени камъни </h2>
	<?php if(isset($message))echo$message;?>
	<table border="1" class="table1">
	<tr>
	<th> Каталожен номер</th>
	<th> Цвят </th>
	<th> Име</th>
	<th> Цена (лв.) </th>
	<?php
		if(isset($_SESSION['user']))
		{
	?>
	<th> Редактиране </th>
	<th> Изтриване </th>
	<?php
		}
	?>
	</tr>
<?php
	$query="SELECT * FROM crystals
	WHERE Color='Зелен'";
	if($result=mysqli_query($link,$query))
	{
		while($row=mysqli_fetch_assoc($result)){
	?>
<tr>
	<td><?php echo$row['CrystalID'];?></td>
	<td><?php echo$row['Color'];?></td>
	<td><?php echo$row['Name'];?></td>
	<td><?php echo$row['Price'];?></td>
	<?php
		if(isset($_SESSION['user']))
		{
	?>
	<td><a href="edit_crystals.php?CrystalID=<?php echo$row['CrystalID'];?>"> Редактиране </a>
	<td><a href="zeleni.php?CrystalID=<?php echo$row['CrystalID'];?>">Изтриване</a></td>
	<?php
		}
	?>
</tr>
<?php
			}
	}
	else
	{
?>
<tr><td colspan='12' align='center'> Няма записи</td></tr>
<?php
	}
?>
	<?php
		if(isset($_SESSION['user']))
		{
	?>
		<tr><td colspan='12' align='center'><a href="add_crystals.php">Добавяне на камък</a></td></tr>
	<?php
		}
	?>
	</table>
	</center>
	</div>

</div>  
</body>
</html> 


