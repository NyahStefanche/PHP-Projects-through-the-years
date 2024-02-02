<!DOCTYPE html>
<HTML>
<BODY>
<h1> добро утро! </h1>
<p>
<?php
echo "Здравйте 2КИТ!"; //Echo - за извеждане на текст/променлива
echo "<br>"; 
$txt="Това е пробен документ!<br>"; //$ - за въвеждане на променливи
$txt1="Нова проба!";
echo "<br>"; 
ECHO $txt1." ".$txt; // . - Играе ролята на +/конкатинация
echo "<br>"; 
echo $txt." разработен от нас.";
$x=5;
$y=6;
echo "<br>"; 
echo $x."+".$y."=".$x+$y;
//Function nameFunction(параметри){Тяло на функция}
//за да извикаме функция NameFunction();
function myTest()
{
	$x=19;
	global $y;
	echo "<br>"; 
	echo "Променливата x е вътрешна за функцията: $x"; //Дава грешка ако x не е деклариранa или напрвена глобална
	echo "<br>"; 
	$y=$y+$x; //Става и с += както при c++
}
echo "<br>"; 
echo "Променливата x e външна за функцията: $x";
myTest();
echo $y;
echo "<br>"; 
function myTest1()
{
	static $k=0;
	echo $k;
	$k++;
}
myTest1();
echo "<br>"; 
myTest1();
echo "<br>"; 
myTest1();
echo "<br>"; 
$p=5698;
var_dump($p);
echo "<br>"; 
$l=3.14;
var_dump($l);
echo "<br>"; 
$t=true;
var_dump($t);
echo "<br>";
$cars=array("Audi","BMW","Ford","Opel","VW");//Array - Масив
var_dump($cars);
echo "<br>"; 
/*class Car //Class - За класове, Това трябва да работи но ни връща грешка без причина.
{
	function Car()
	{
		$this->model="VW";
	}
}
$h=new Car();
echo $h->model;
echo "<br>";*/
$ime = "Иван";
$familiq = "Петров";
echo "Потребителят е ".$ime." ".$familiq;
echo "<br>";
?>
</p>
</BODY>
</HTML>