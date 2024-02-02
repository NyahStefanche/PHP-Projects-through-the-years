<!DOCTYPE html>
<html>
<body>
<?php
$x=9;
$y=3;
$n="Jon";
$m="David";
echo $x+=$y;
echo "<br>";
echo $n.=$m;
echo "<br>";
echo $x/=$y;
echo "<br>";
echo $x-=$y;
echo "<br>";
echo $x%=$y;

//Символи за низове
//  Символ 					Описание
//    \n				Прекъсване на ред
//    \r				Връщане на карета
//    \t 				Хоризонтален таб
//	  \\			    Наклонена черта
//    \$                Знака $
//    \"                Знака ""

//Низови функции
//   Функция 				Описание
//	 strlen()           Извежда дължината на стринга
//   str_word_count()   Извежда броят на думите в стринга
//   strrev()			Обръща последователността на буквите в стринга (да -> ад)
//   strpos()           Търсене на специфичен текст в даден стринг
//   str_replace()      Замяна на конкретен текст в даден стринг с друг текст
//   ltrim()            Изтрива интервалите в началото на реда
//   rtrim()			Изтрива интервалите в краят на реда
//   strbrk(string,char)Търси в string символа char,ако не го намери връща false, а при намиране връща низа,който започва с търсения символ char.
//   strtoupper(string) Преобразува низа в главни букви
//   strtolower(string) Преобразува низа в малки букви
//   eregi(pattern,subject) Сравнява двата низа независимо от техния регистър,като в низа subject се търси определения низ в pattern
echo "<br>";
echo "Hello 2KIT!";
echo "<br>";
echo strlen("Hello 2KIT!");
echo "<br>";
echo str_word_count("Hello 2KIT!");
echo "<br>";
echo "2KIT";
echo "<br>";
echo strrev("2KIT");
echo "<br>";
echo strpos("Hello 2KIT!","KIT");
echo "<br>";
echo str_replace("2","3","Hello 2KIT!");
echo "<br>";
echo ".    Hello 2KIT!";
echo "<br>";
echo ltrim("     Hello 2KIT!");
echo "<br>";
echo ".    Hello 2KIT!        ";
echo "<br>";
echo rtrim("     Hello 2KIT!        ");
echo "<br>";
echo strtolower("Hello 2KIT!");
echo "<br>";
echo strtoupper("Hello 2KIT!");
echo "<br>";

//Фунция за дата и час
//  Функция 						Описание
//   date(format)		            Формата се записва в литерали (единичните кавички)
//   checkdate(month,day,year)      Проверява датата
//   time()							Извежда времето

//Валидни формати за date()
//  Символ                  Значение
//     a					Извежда "am" или "pm"
//     A					Извежда "АМ" или "PM"
//     h					Извежда часът във формат(01-12)
//     H					Извежда часът във формат(00-23)
//     g					Часовник в 12 часов формат(1-12).
//     G					Часовник в 24 часов формат(0-23).
//     i					Извежда минути (00-59)
//     s					Извежда секудни (00-59)
//     d					Извежда ден от месеца с две цифри (01-31)
//     D					Извежда ден от седмицата (Mon - Sun)
//     l					Извеждане ден от седмицата (Monday - Sunday)
//     F					Извежда месец от годината (January - December)
//     n					Извежда месец от годината (1-12)
//     Y 					Извежда годината с четири цифри(2021) (0-32676)
//     y 					Извежда годината с две цифри (21)
//     S 					Извежда английски редни суфикси (th,nd,st)

echo "Днес е"." ".date('l')." ".date('d')." ".date('F')." ".date('y')." "."Година";//Може да го запиша date('l d F y')
echo "<br>";
echo "Текущото време е ".date('H:i:s A');
//Условни конструкции
//  if(Условие) {Изпълним код;}
//  if(Условие) {Изпълним код за вярно условие,true;} else {Изпълним код за грешно условие,false;}
//  if(Условие 1) {Изпълним код 1 за вярно условие, true;} elseif (Условие 2) {Изпълним код 2 за вярно условие,true;} else {Изпълним код за всички не верни условия,false}
$num=11;
echo "<br>";
if ($num>=10)
{
		echo "Числото е по-голямо или равно на 10. -".$num;
}
echo "<br>";
$t=date('H');
if($t<20)
{
	echo "Добър ден!";
}
echo "<br>";
if($t<20)
{
	echo "Добър ден!";
}
else 
{
	echo "Добър вечер!";
}
echo "<br>";
if($t<=9)
{
	echo "dobro utro!";
}
elseif($t<20)
{
	echo "dobur den!";
}
else 
{
	echo "dobur vecher!";
}
echo "<br>";
$oc=4;
if ($oc==2)
{
	echo "слаб-2";
}
elseif ($oc==3)
{
	echo "Sreden-3";
}
elseif ($oc==4)
{
	echo "Dobur-4";
}
elseif ($oc==5)
{	
	echo "mn.dobur-5";
}
else
{
	echo "otlichen-6";
}
echo "<br>";
?>
</body>
</html>