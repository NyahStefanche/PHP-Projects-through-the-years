<!DOCTYPE>
<HTML>
<BODY>
Добре Дошъл
<?php
/*echo $_POST["first_name"];
echo " ".$_POST["last_name"];
echo " ".$_POST["nickname"];
echo " ".$_POST["pass"];
echo " ".$_POST["gender"];
echo " ".$_POST["prof"];*/

$name=$_POST['first_name'];
if(empty($name))
{
	echo "<br> Нямате име - Въведете!!!";
}
else 
{
	echo " ".$name;
}
$last_name=$_POST['last_name'];
if(empty($last_name))
{
	echo "<br> Нямате Фамилия - Въведете!!!";
}
else 
{
	echo " ".$last_name;
}
$nickname=$_POST['nickname'];
if(empty($nickname))
{
	echo "<br> Нямате nickname - Въведете!!!";
}
else 
{
	echo " ".$nickname;
}
$pass=$_POST['pass'];
if(empty($pass))
{
	echo "<br> Нямате парола - Въведете!!!";
}
else 
{
	echo " ".$pass;
}
$gender=$_POST['gender'];
if(empty($gender))
{
	echo "<br> Нямате пол - Въведете!!!";
}
else 
{
	echo " ".$gender;
}
$nickname=$_POST['nickname'];
if(empty($nickname))
{
	echo "<br> Нямате nickname - Въведете!!!";
}
else 
{
	echo " ".$nickname;
}
/*$prof=$_POST['prof'];

if(empty($prof))
{
	echo "<br> Нямате професия - Моля отбележете!!!";
}
else 
{
}*/
	if (isset($_POST["prof1"])) echo " Средно";
	if (isset($_POST["prof2"])) echo " Бакалавър";
	if (isset($_POST["prof3"])) echo " Проф.Бакалавър";
	if (isset($_POST["prof4"])) echo " Магистър";
//isset - проверява за checkbox дали е отбелязан
echo " ".$_POST["city"];
?>
<br>
</BODY>
</HTML>