<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location: login.php");
	exit();
}
include"db.php";

if(!empty($_POST))
{
	$query="UPDATE discount
		   SET Name = '".$_POST['Name']."',
		   discount = '".$_POST['discount']."',
		   price = '".$_POST['price']."'
		   WHERE CatalogID='".$_GET['CatalogID']."'";
	if($result=mysqli_query($link,$query))
					$message="Промоцията е обновена успешно";
				else
					$message="Грешка при обновяването";
	
	$_GET['Name']=$_POST['Name'];
}

if (isset($_GET["CatalogID"]))
{
	$query="SELECT * FROM discount WHERE CatalogID='".$_GET['CatalogID']."'";
	$result=mysqli_query($link,$query);
	$data=mysqli_fetch_assoc($result);
}
?>
<html>
<head>
	<title>Обновяване на промоцията</title>
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
	<h2> Обновяване на промоцията</h2>
	<?php if(isset($message)) echo$message; ?>
	<form method="POST" action="edit_promociq.php?CatalogID=<?php echo$_GET['CatalogID'];?>">
	<table border="1" class="table1">
	<tr>
		<td>Име на камъка</td>
		<td><input type="text" name="Name" value="<?php echo $data['Name'];?>"/></td>
	</tr>
	<tr>
		<td>намаление(лв.)</td>
		<td><input type="text" name="discount" value="<?php echo $data['discount'];?>"/></td>
	</tr>
	<tr>
		<td>Цена след намаление(лв.)</td>
		<td><input type="text" name="price" value="<?php echo $data['price'];?>"/></td>
	</tr>
	<tr>
		<td colspan='10' align='center'><input type="submit" value="Редактирай"/></td>
	</tr>
	</table>
	</form>
	</center>
	</div>
</div>
</body>
</html>


