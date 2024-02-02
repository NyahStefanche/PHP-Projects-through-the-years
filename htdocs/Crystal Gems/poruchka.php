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
	text-align: center;
}
.auto-style2 {
	text-align: left;
}
.auto-style3 {
	text-align: left;
	font-size: large;
}
.auto-style4 {
	font-size: large;
}
form
{
	margin-right:20%;
	margin-left:20%;
	background-color:#FFF090;
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

<form method="post" action="formulqr1.php">
<fieldset>
<legend> Поръчка </legend>
	<table align="center" class="auto-style4" style="width: 71%">
		<tr>
			<td class="auto-style3" style="width: 430px; height: 21px">Име</td>
			<td class="auto-style3" style="height: 21px; width: 452px"><input type="text" name="first_name"></td>
		</tr>
		<tr>
			<td class="auto-style3" style="width: 430px"> Фамилия </td>
			<td class="auto-style3" style="width: 452px"><input type="text" name="last_name"></td>
		</tr>
		<tr>
			<td class="auto-style3" style="width: 430px"> Емайл </td>
			<td class="auto-style3" style="width: 452px"><input type="text" name="Email"></td>
		</tr>
		<tr>
			<td class="auto-style2" style="width: 430px"> Адрес </td>
			<td class="auto-style3" style="width: 452px"><textarea name="address"></textarea></td>
		</tr>
		<tr>
			<td class="auto-style3" style="width: 430px"> Каталожен № </td>
			<td class="auto-style3" style="width: 452px"><input type="text" name="Catalog_Num"></td>
		</tr>
		<tr>
			<td class="auto-style3" style="width: 430px"> Телефон </td>
			<td class="auto-style3" style="width: 452px"><input type="text" name="phone"></td>
		</tr>
		<tr>
			<td class="auto-style3" style="width: 430px"> Град </td>
			<td class="auto-style3" style="width: 452px"><input list="Cities" name="Cities">
																		<datalist id="Cities">
																		<option value="Шумен">
																		<option value="Перник">
																		<option value="Варна">
																		<option value="София">
																		<option value="Благоевград">
																		<option value="Бургас">
																		<option value="Пловдив">
																		<option value="Русе">
																		</datalist></td></tr>
		<tr>
		<tr>
			<td class="auto-style3" style="width: 430px"> Начин на плащане </td>
			<td class="auto-style3" style="width: 452px"><input type="radio" id="vbroi" name="payment" value="В брой"> В брой
														 <input type="radio" id="creditcard" name="payment" value="Чрез карта"> Чрез карта
														 <input type="radio" id="paypal" name="payment" value="Чрез Paypal"> Чрез Paypal</td>
		</tr>
		<tr>
		</tr>
		<tr>
			<td class="auto-style3" style="width: 430px"> Начин на доставка </td>
			<td class="auto-style3" style="width: 452px"><input type="radio" id="Ekont" name="dostavka" value="До Еконт"> До Еконт
														 <input type="radio" id="Do_adres" name="dostavka" value="До Адрес"> До адрес
														 <input type="radio" id="speedy" name="dostavka" value="До Speedy"> До Speedy</td>
		</tr>
			<td colspan="2"> <input type="submit" name="submit" value="Изпращане на данните"><input type="reset" name="clear" value="Изтриване на данните">
		</tr>
	</table>
</fieldset>
</form>
</div>  
</body>
</html> 