<?php
if($_POST["location"])
{
	$location=$_POST["location"];
	header("Location: $location");
	
	exit();
}
?>
<html>
<body>
<p> Изберете сайт за посещение: </p>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<select name="location">
		<option value="http://www.shu.bg"> Шуменски университет </option>
		<option value="http://www.google.com"> Google </option>
		<option value="http://www.mobile.bg"> Автомобили </option>
		<option value="http://www.ozone.bg"> Книги и забавления </option>
	</select>
	<input type="submit" name="submit" value="ПОСЕТИ">
</form>
</body>
</html>