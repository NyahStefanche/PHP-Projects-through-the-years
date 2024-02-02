<!DOCTYPE>
<HTML>
<BODY>
<?php
//Индексирани масиви
//Започва от 0
//$name=array("element1", ......)
$cars=array("Volvo","BMW","VW","Toyota","Audi","Opel","Ford");
echo "Аз харесвам много ".$cars[3];
echo "<br>";
//count($name) - Размера/дължината на масива
echo "Размерността на масива е: ".count($cars);
echo "<br>";
for ($i = 0; $i < count($cars) ; $i++) //Може да заменя $count($cars) с променлива $br = $count($cars)
{
	echo $i+1 ." Кола е ".$cars[$i]."<br>";
}
//sort($name) - Сортирате във възходящ ред
//rsort($name) - Сортиране в низходящ ред
sort($cars);
for ($i=0;$i<count($cars);$i++)
{
	echo $cars[$i]."   ";
}
echo "<br>";
rsort($cars);
for ($i=0;$i<count($cars);$i++)
{
	echo $cars[$i]."   ";
}
echo "<br>";
//Асоциативни масиви
//$ime=array("key1"=>"stoinost1",........)
$stud=array("40002"=>"Stefan","40004"=>"Alper","40005"=>"Daqna","40007"=>"Ismail");
echo "fakulteten nomer 40005 e na ".$stud['40005'];
echo "<br>";
foreach ($stud as $x => $x_value)
{
	echo "fakulteten nomer ".$x." e na ".$x_value."<br>";
}
//Asort($ime) - Сортира асоциативен масив във възходящ ред спрямо стойностите
//Ksort($ime) - Сортира асоциативен масив във възходящ ред спрямо ключовете
//Arsort($ime) - Сортира асоциативен масив в низходящ ред спрямо стойностите
//Krsort($ime) - Сортира асоциативен масив в низходящ ред спрямо ключовете
asort($stud);
foreach ($stud as $x => $x_value)
{
	echo $x." - ".$x_value."     ";
}
echo "<br>";
ksort($stud);
foreach ($stud as $x => $x_value)
{
	echo $x." - ".$x_value."     ";
}
echo "<br>";
arsort($stud);
foreach ($stud as $x => $x_value)
{
	echo $x." - ".$x_value."     ";
}
echo "<br>";
krsort($stud);
foreach ($stud as $x => $x_value)
{
	echo $x." - ".$x_value."     ";
}
echo "<br>";
//Глобални променливи
//$_POST - Глобална променлива която се използва за достъп до информация изпратена от HTML формуляр чрез метода POST.
//(Допълнение към горното) Използва се много за предаване на променливи,като след предаване на данните към сървъра се извършва манипулирането на тези данни както сметне за необходимост
//$_GET - Достъп до информация изпратена от HTML формуляр чрез метода GET.ИЗползва се и за достъп до информация през URL Адрес.
//Разликата между двата метода на изпращане - Изпращането чрез GET през URL и браузъра се обработва чрез URL (Могат да бъдат хакнати)
/*Формуляр - Това е за formulqr.php
Име
Фамилия
Никнейм
Парола
Изпрати,Изчисти*/
?>
</BODY>
</HTML>