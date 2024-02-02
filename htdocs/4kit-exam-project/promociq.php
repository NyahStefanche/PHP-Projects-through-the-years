<?php
session_start();
include"db.php";
if(isset($_GET['CatalogID']))
{
	if(!isset($_SESSION['user']))
	{
		header("location: login.php");
		exit();
	}
	$query="DELETE FROM discount
	WHERE CatalogID=".$_GET['CatalogID'];
	if(mysqli_query($link,$query))
		$message="Промоцията е изтрита успешно";
	else
		$message="Грешка при изтриването";
}
?>

<!DOCTYPE html>
<html lang="bg">
<head>
  <title>Промоция</title>
  <link href="site.css" rel="stylesheet" type="text/css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<!-- Начало на меню -->
<?php
include ("menu.php");
?>
<!-- Край на меню -->
<div id="main">
<?php include "menu.php";?>
	<div id="content">
	<center>
	<h2> Информация за промоциите</h2>
	<?php if(isset($message))echo$message;?>
	<table border="1" class="table1">
		<tr>
			<th> Номер на каталога</th>
			<th> Име на камъка</th>
			<th> Намаление(лв.)</th>
			<th> Цена след намаление(лв.) </th>
			<?php
				if(isset($_SESSION['user']))
				{
			?>
			<th> Редактиране </th>
			<th> Изтриване на промоция</th>
			<?php
				}
			?>
		</tr>
<?php
	$query="SELECT * FROM discount";
	if($result=mysqli_query($link,$query))
	{
		while($row=mysqli_fetch_assoc($result)){
	?>
<tr>
	<td><?php echo$row['CatalogID'];?></td>
	<td><?php echo$row['Name'];?></td>
	<td><?php echo$row['discount'];?></td>
	<td><?php echo$row['price'];?></td>
	<?php
		if(isset($_SESSION['user']))
		{
	?>
	<td><a href="edit_promociq.php?CatalogID=<?php echo$row['CatalogID'];?>"> Редактиране </a>
	<td><a href="promociq.php?CatalogID=<?php echo$row['CatalogID'];?>">Изтриване</a>
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
		<tr><td colspan='10' align='center'>Няма записи</td></tr>
		<?php
			}
		?>
		
		<?php
		if(isset($_SESSION['user']))
			{
		?>
			<tr><td colspan='12' align='center'><a href="add_promociq.php">Добавяне на промоция</a></td></tr>
		<?php
			}
		?>
		</table>
		</center>
		</div>
</div>  
</body>
</html> 



