<!DOCTYPE>
<HTML>
<BODY>
<form method="post" action="f2.php">
<b> Име:</b><input type="text" name="first_name">
<br>
<b> Фамилия: </b><input type="text" name="last_name">
<br>
<b> Пол: </b> 
<input type="radio" name="gender" value="Мъж"> Мъж <input type="radio" name="gender" value="Жена" checked> Жена
<br>
<b> Образование: </b>
<br>
<input type="checkbox" name="prof1" value="Средно"> Средно <input type="checkbox" name="prof3" value="Професионален бакалавър"> Професионален бакалавър
<br>
<input type="checkbox" name="prof2" value="Бакалавър"> Бакалавър <input type="checkbox" name="prof4" value="Магистър"> Магистър
<br>
<select name="city">
<option value="Не избра град"> Избери град </option>
<option value="Шумен"> Шумен </option>
<option value="Пловдив"> Пловдив </option>
<option value="Варна"> Варна </option>
<option value="Бургас"> Бургас </option>
<option value="София"> София </option>
</select> <br>
<b> Nickname </b> <input type="text" name="nickname">
<br>
<b> Парола </b> <input type="password" name="pass">
<br>
<input type="submit" name="submit" value="Изпрати">
<input type="reset" name="delete" value="Изчисти">
</form>
</BODY>
</HTML>