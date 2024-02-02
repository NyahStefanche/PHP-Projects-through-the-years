<!DOCTYPE html>
<html>
<body>
<?php
//Switch (n) {case label1: код за изпълнение; break; case label2: код за изпълнение; break; case label3: код за изпълнение; break; ....... default: код за изпълнение;}
//Quick note : label1,label2,label3 (Използват се за проверка,същото като при "условие" на if)
$x=date('l');
switch($x)
{
	case $x=="Monday":  echo "Първи ден от работната седмица.";
	break;
	case $x=="Tuesday":  echo "Втори ден от работната седмица.";
	break;
	case $x=="Wednesday":  echo "Средата на работната седмица.";
	break;
	case $x=="Thursday": echo "2 Дена до уикенда.";
	break;
	case $x=="Friday": echo "1 Ден до уикенда.";
	break;
	case $x=="Saturday": echo "Уикенда започна.";
	break;
	default: echo "Уикенда свърши.";
}

//while(условието да е вярно){ код за изпълнение;}
//do {код за изпълнение;} while(условието за проверка)
$c="1";
echo "<br>";
while($c<6)
{
	echo "Числото е: ".$c.".<br>";
	$c++;
}
$d=date('G');
while ($d<=19)
{
	echo "Светлата част на деня. <br>";
	$d++;
}
$y=16;
do
{
	echo "Числото е ".$y."<br>";
	$y++;
}while($y<=15);
//for (Инициализация ; условие ; увеличение/намаляване на брояча) {Код на изпълнение;}
for ($x=0; $x<=10; $x++)
{
	echo "Числото е: $x <br>";
}
$cars=array("Audi","Opel","BMW","VW");
for ($i=0; $i<sizeof($cars); $i++)
{
	echo "Моята кола е: $cars[$i] <br>";
}
for ($i=0; $i<sizeof($cars);$i++)
{
	echo "В масивът елемента ".$i+"1"." е колата $cars[$i] <br>";
}
//Foreach($array as $value) {оператор/код за изпълнение;}
//Foreach($array as $key=>$value) {Оператор/код за изпълнение;}
$color=array("red","blue","green","purple","orange","black");
foreach ($color as $value)
{
	echo "$value <br>";
}
foreach ($cars as $value)
{
	echo "$value <br>";
}
$age=array("petyr"=>"25","Ivan"=>"37","Ana"=>"19");
foreach ($age as $key=>$value)
{
	echo "Studenta e na $value <br>";
}
?>
</body>
</html>