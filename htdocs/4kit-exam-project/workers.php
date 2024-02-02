<?php
session_start();
include"db.php";
if(isset($_GET['pers_id']))
{
	if(!isset($_SESSION['user']))
	{
		header("location: login.php");
		exit();
	}
	$query="DELETE FROM employee
	WHERE pers_id=".$_GET['pers_id'];
	if(mysqli_query($link,$query))
		$message="Служителя е изтрит успешно";
	else
		$message="Грешка при изтриването";
}
?>

<!DOCTYPE html>
<html lang="bg">
<head>
  <title>Служители</title>
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
	<h2> Служители </h2>
	<?php if(isset($message))echo$message;?>
	<table border="1" class="table1">
	<tr>
	<th> Номер на служител</th>
	<th> Име </th>
	<th> Презиме</th>
	<th> Фамилия </th>
	<th> Пол </th>
	<th> Рожден ден </th>
	<th> Град </th>
	<th> Улица </th>
	<th> Телефон </th>
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
	$query="SELECT * FROM employee";
	if($result=mysqli_query($link,$query))
	{
		while($row=mysqli_fetch_assoc($result)){
	?>
<tr>
	<td><?php echo$row['pers_id'];?></td>
	<td><?php echo$row['first'];?></td>
	<td><?php echo$row['father'];?></td>
	<td><?php echo$row['last'];?></td>
	<td><?php echo$row['sex'];?></td>
	<td><?php echo$row['b_day'];?></td>
	<td><?php echo$row['city'];?></td>
	<td><?php echo$row['street'];?></td>
	<td><?php echo$row['phone'];?></td>
	<?php
		if(isset($_SESSION['user']))
		{
	?>
	<td><a href="edit_workers.php?pers_id=<?php echo$row['pers_id'];?>"> Редактиране </a>
	<td><a href="workers.php?pers_id=<?php echo$row['pers_id'];?>">Изтриване</a></td>
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
		<tr><td colspan='12' align='center'><a href="add_workers.php">Добавяне на работник</a></td></tr>
	<?php
		}
	?>
	</table>
	</center>
	</div>

</div>  
</body>
</html> 






