<html>
<head>
<title> PHP Формуляр </title>
</head>
<body>
<?php
$name=$email=$pol=$comment=$website="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=test_input($_POST["name"]);
	$email=test_input($_POST["email"]);
	$pol=test_input($_POST["pol"]);
	$comment=test_input($_POST["comment"]);
	$website=test_input($_POST["website"]);
}

function test_input($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>

<h2> PHP Регистрация чрез абсолютни класове</h2>
<form method="POST" action="f5.php">
<table>
	<tr>
	<td> Име:</td>
	<td><input type="text" name="name"></td>
	</tr>
<tr>
<td>E-mail:</td>
<td><input type="text" name="email"></td>
</tr>
	<tr>
	<td> Пол: </td>
	<td><input type="radio" name="pol" value="male">Мъж<br>
		<input type="radio" name="pol" Value="female"> Жена</td>
	</tr>
<tr>
<td> Дата: </td>
<td><input type="date" name="website"></td>
</tr>
	<tr>
	<td> Информация: </td>
	<td> <textarea name="comment" rows="5" cols="40"></textarea></td>
	</tr>
<tr>
<td><input type="submit" name="submit" value="Изпрати"><br>
<input type="reset" name="reset" value="Изчисти"></td>
</tr>
</table>
</form>

<?php
echo "<h2> Въведените ВИ данни са както следва: </h2>";

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $pol;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;

?>
</body>
</html>