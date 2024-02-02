<!DOCTYPE html>
<html>
<body>
<?php
$price=500;
$tax=1.2;
echo "$".sprintf("%01.2f",$price*$tax);
echo "<br>";
$color=array("red","blue","green","orange","purple","black","white","yellow"); //Индексен Масив
$user=array('Fname'=>'Иван','Lname'=>'Петров','Age'=>'25'); //Масив със стойности
echo "Цветът на 5-та позиция е: ".$color[4]."."; //Пишем 4 защото масива почва от 0
echo "<br>";
echo "Потребителят е: ".$user['Fname']." ".$user['Lname']." на ".$user['Age']." Години";
echo "<br>";
//sprintf("%0.2f",$x)
//count(masiv) - броя на елементите на масива
//sizeof(masiv) - броя на елементите на масива
//Sort(masiv) - Сортира масива
//Shuffle (masiv) - Разбърква на случаен принцип
//Array_slice($masiv,offset,length) - Изрязва масива и ги взема
//Array_merge($masiv1,$masiv2) - Събира 2 масива
$v=sizeof($color);
echo "Размерът на масива с ЦВЕТОВЕ е: ".$v;
sort($color);
echo "<br>";
echo "Цветът на 5-та позиция е: ".$color[1].".";
echo "<br>";
//Константи
//Define(name,value, case-insensitive)
//Define("PRICE",500);
Define("PRICE_NEW",500);
define("PRICE",750);
echo "Старата цена е била ".PRICE.", а новата цена на продукта е: ".PRICE_NEW;
echo "<br>";
//Аритметични оператори
//Оператор               Пример          Резултат
//    +                   $x+$y           $x=5; $y=6; echo.$x+$y;.....(11)
//    -                   $x-$y           $x=10; $y=6; echo.$x-$y;.....(4)
//    *                   $x*$y           $x=5; $y=6; echo.$x*$y;.....(30)
//    /                   $x/$y           $x=10; $y=6; echo.$x/$y;.....(1.66)
//    %                   $x%$y           $x=10; $y=6; echo.$x%$y;.....(4)

//Оператори за дефиниране
//Оператор               Пример          Резултат
//   x=y                   x=y              $x=10;echo $x;........(10)
//   x+=y                  x=x+y              $x=10; $x+=100; echo $x;........(110)
//   x-=y                   x=x-y              $x=50; $x-=30; echo $x;........(20)
//   x*=y                   x=x*y              $x=10; $x*=5; echo $x;........(50)
//   x/=y                   x=x/y              $x=50; $x/=5; echo $x;........(10)
//   x%=y                   x=x%y              $x=15; $x%=4; echo $x;........(3)

//Оператори за сравнение
//Оператор               Пример          Резултат
//   ==                    $x==$y          $x=100; $y=100; Var_dump($x==$y);......... (bool (true)) , сравнение по стойност
//   ===                   $x===$y         $x=100; $y="100"; var_dump($x===$y);...... (bool (false)), Сравнение по тип
//   !=                    $x!=$y          $x=100; $y="100"; var_dump($x!=$y);....... (bool (false)), Не равно
//   <>                    $x<>$y          $x=100; $y="100"; var_dump($x<>$y);....... (bool (false)), Различни
//   >                     $x>$y           $x=100; $y=50; var_dump($x>$y);.......(bool (true))
//   <                     $x<$y           $x=100; $y=50; var_dump($x<$y);.......(bool (false))
//   >=                    $x>=$y          $x=100; $y=50; var_dump($x>=$y);.......(bool (true))
//   <=                    $x<=$y          $x=100; $y=50; var_dump($x<=$y);.......(bool (false))

//Оператори за увеличаване/намаляване
//Оператор               Резултат
//   ++$x                  $x=10; echo ++$x;..........(11), Учеличава стойноста и тогава отпечатва
//   $x++                  $x=10; echo $x++;..........(10), Отпечатва стойноста и тогава увеличава
//   --$x                  $x=10; echo --$x;..........(9)
//   $x--                  $x=10; echo $x--;..........(10)

//Логически оператори
//Оператор               Пример          Резултат
//   and                   $x and $y       $x=100; $y=50; if($x==100 and $y==50) {echo "DA";}...........(DA)
//   or                    $x or $y        $x=100; $y=50; if($x==100 or $y==80) {echo "DA";}...........(DA)
//   xor                   $x xor $y       $x=100; $y=50; if($x==100 xor $y==50) {echo "DA";}...........(), истина и истина=лъжа
//   &&                    $x && $y        $x=100; $y=50; if($x==100 && $y==50) {echo "DA";}...........(DA)
//   ||                    $x || $y        $x=100; $y=50; if($x==100 || $y==80) {echo "DA";}...........(DA)
//   !                     $x ! $y         $x=100; if($x!==80) {echo "DA";}...........(DA)
	
//Низови оператори
//Оператор               Пример          Резултат
//   .                     $txt1 . $txt2   $txt1="Vtori"; $txt2="KIT"; echo $txt1.$txt2;.......(VtoriKIT)
//   .=                    $txt1 .= $txt2  $txt1="Vtori"; $txt2="KIT"; $txt1.=$txt2; echo$txt1;........(VtoriKIT), Присвояване на стрингове

//Оператори за масиви
//Оператор      Име         Пример          Резултат
//   +         union       $x+$y           $x=array(10,20,30); $y=array("red","blue"); echo($x+$y);......(10,20,30,red,blue)
//   ==        equality    $x==$y          $x=array(10,20,30); $y=array("red","blue"); var_dump($x==$y);......(bool(false))
//   !=        inequality  $x!=$y          $x=array(10,20,30); $y=array("red","blue"); var_dump($x!=$y);......(bool(true))
//   <>        inequality  $x<>$y          $x=array(10,20,30); $y=array("red","blue"); var_dump($x<>$y);......(bool(true))
//   !==       Non-indentity $x==$y        $x=array(10,20,30); $y=array("red","blue"); var_dump($x!==$y);......(bool(true))

//Оператори за присвояване
//   Оператор             Описание
//   =                    l=d
//   += 				  l=l+d
//   -=					  l=d-l
//   *=					  l=l*d
//   /=					  l=l/d
//   %=					  l=l%d
//   .=					  l=l.d Конкатинация
//                        $x=10; $y=2; $x*=$y; $x става 20

?>
</body>
</html>