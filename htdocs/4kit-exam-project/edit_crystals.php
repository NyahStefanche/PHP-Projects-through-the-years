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
	$query="UPDATE crystals
		   SET Color = '".$_POST['Color']."',
		   Name = '".$_POST['Name']."',
		   Price = '".$_POST['Price']."'
		   WHERE CrystalID='".$_GET['CrystalID']."'";
	if($result=mysqli_query($link,$query))
					$message="Камъка е обновен успешно";
				else
					$message="Грешка при обновяването";
	
	$_GET['Color']=$_POST['Color'];
}

if (isset($_GET["CrystalID"]))
{
	$query="SELECT * FROM crystals WHERE CrystalID='".$_GET['CrystalID']."'";
	$result=mysqli_query($link,$query);
	$data=mysqli_fetch_assoc($result);
}
?>
<html>
<head>
	<title>Обновяване на камъните</title>
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
	<h2> Обновяване на камъните</h2>
	<?php if(isset($message)) echo$message; ?>
	<form method="POST" action="edit_crystals.php?CrystalID=<?php echo$_GET['CrystalID'];?>">
	<table border="1">
	<tr>
		<td>Цвят</td>
		<td><input type="text" name="Color" value="<?php echo $data['Color'];?>"/></td>
	</tr>
	<tr>
		<td>Име</td>
		<td><input type="text" name="Name" value="<?php echo $data['Name'];?>"/></td>
	</tr>
	<tr>
		<td>Цена</td>
		<td><input type="text" name="Price" value="<?php echo $data['Price'];?>"/></td>
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


