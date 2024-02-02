<!DOCTYPE html>
<html lang="bg">
<head>
  <title>Начало</title>
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
<p class="auto-style3"> Успешна поръчка </p>
<p>
<?php
//$name=$_POST['name'] - Това е за пример
//pred=$_POST['pred'] - Това е за пример
//$oc=$_POST['oc'] - Това е за пример
/*$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['Email'];
$Address=$_POST['address'];
$CatalogNum=$_POST['Catalog_Num'];
$Phone=$_POST['phone'];
$City=$_POST['Cities'];
$Payment=$_POST['payment'];
$Delivery=$_POST['dostavka'];

$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];

if(file_exists("$DOCUMENT_ROOT/../config.php"))
{
	include("$DOCUMENT_ROOT/../config.php");
$sql="insert into poruchki values ('','$first_name','$last_name','$email','$Address','$CatalogNum','$Phone','$City','$Payment','$Delivery')";
//$sql="insert into poruchki values ('','$name','$pred','$oc')"; (name,pred,oc са примерни)
if (mysqli_query($conn,$sql)) //Проверка дали информацията е записана успешно или не
{
		echo "Информацията е записана успешно!";
}
else
{
	echo "Грешка:".$sql."<br>".mysqli_error($conn);
}
}
else echo "Няма връзка с базата от данни!";*/ //За вмъкване на информация в база от данни която господин Железов поиска за домашно да се направи
if(!isset($_POST['submit']))
	{
		header('location:poruchka.php');
	}
	else
	{
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['Email'];
		$Address=$_POST['address'];
		$CatalogNum=$_POST['Catalog_Num'];
		$Phone=$_POST['phone'];
		$City=$_POST['Cities'];
		$Payment=$_POST['payment'];
		$Delivery=$_POST['dostavka'];
		
		$data=$first_name ."\t". $last_name ."\t". $email ."\t". $Address ."\t" . $CatalogNum ."\t". $Phone ."\t". $City ."\t". $Payment ."\t". $Delivery ."\n";
		
		if (!file_exists("poruchki.txt"))
		{
			$f=fopen("poruchki.txt","w");
		}
		else
		{
			$f=fopen("poruchki.txt","a");
			fwrite($f,$data);
			fclose($f);
			echo '<b> Въвеждането на информацията е успешна</b>';
			
			foreach($_SERVER as $key=>$value)
			{
				echo $key . "-->" . $value . '<br>';
			}
		}
	}
?>
</p>
</div>
</body>
</html> 