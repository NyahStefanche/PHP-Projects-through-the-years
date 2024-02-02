<html>
<head>
<style>
.error
{
	color: #FF0000;
}
</style>
</head>
<body>
<?php
$nameErr=$emailErr=$polErr=$websiteErr="";
$name=$email=$pol=$website=$comment="";

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["name"]))
	{
		$nameErr="Името е задължително!";
	}
	else
	{
		$name=test_input($_POST["name"]);
	}
	
	if(empty($_POST["email"]))
	{
		$emailErr="Емайла е задължителен!";
	}
	else
	{
		$email=test_input($_POST["email"]);
		if (!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$emailErr="Невалиден емайл формат";
		}
	}
	if(empty($_POST["website"]))
	{
		$websiteErr="Изберете дата";
	}
	else
	{
		$website=test_input($_POST["website"]);
	}
	
	if(empty($_POST["comment"]))
	{
		$comment="";
	}
	else
	{
		$comment=test_input($_POST["comment"]);
	}
	
	if(empty($_POST["pol"]))
	{
		$polErr="Изисква се да изберете пол";
	}
	else
	{
		$pol=test_input($_POST["pol"]);
	}
}

function test_input($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>

<h2> Абсолютна регистрация на класове </h2>
<p><span class="error">* задължително поле.</span></p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<table>
<tr>
<td> Име: </td>
<td><input type="text" name="name"> <span class="error">* <?php echo $nameErr; ?></span> </td>
</tr>
	<tr>
	<td> Е-mail: </td>
	<td><input type="text" name="email"> <span class="error">* <?php echo $emailErr; ?></span> </td>
	</tr>
<tr>
<td> Дата: </td>
<td><input type="date" name="website"> <span class="error">* <?php echo $websiteErr; ?></span> </td>
</tr>
	<tr>
	<td> Информация: </td>
	<td><textarea name="comment" rows="5" cols="40"></textarea></td>
	</tr>
<tr>
<td> Пол: </td>
<td><input type="radio" name="pol" value="female"> Жена
<input type="radio" name="pol" value="male"> Мъж
<span class="error">* <?php echo $polErr; ?></span></td>
</tr>
	<tr>
	<td><input type="submit" name="Submit" value="ИЗПРАТИ"> </td>
	<td><input type="reset" name="reset" value="ИЗЧИСТИ"> </td>
	</tr>
</table>
</form>

<?php
echo "<h2> Въведените Ви проверени данни са както следва: </h2>";
echo $name;
echo "<br>";

echo $email;
echo "<br>";

echo $website;
echo "<br>";

echo $pol;
echo "<br>";

echo $comment;
echo "<br>";
?>
</body>
</html>