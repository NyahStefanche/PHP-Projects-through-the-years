<?php
include("oboshtenie1head.php");
?>
<form method="POST" action="obobshtenie1FC.php">
Собствено име:
	<input type="text" name="ime"><br>
Фамилия
	<input type="text" name="lastime"><br>
Специалност
	<select name="spec">
		<option value="ki">Компютърна информатика </option>
		<option value="kit">Компютърни информационни технологии </option>
		<option value="bi">Бизнес Информатика </option>
		<option value="iti">Инфомационни технологии и икономика </option>
		<option value="itim">Информационни технологии, икономика и математика </option>
	</select> </br>
Курс:
	<select name="kurs">
		<option value="1"> Първи </option>
		<option value="2"> Втори </option>
		<option value="3"> Трети </option>
		<option value="4"> Четвърти </option>
	</select></br>
<input type="submit" name="sub" value="Въведи">
<input type="reset" name="clear" value="Изчисти">
</form>
<?php
include("obobshtenie1foot.php")
?>