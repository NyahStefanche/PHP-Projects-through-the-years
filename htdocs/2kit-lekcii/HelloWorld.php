<!DOCTYPE html>
<HTML>
<BODY>
<?php
echo 'Hello World!';
$a=5;
$A="Book";
/*if (Условиe)
{
	
}
else
{
	
}*/
$b=array(2,3,5,1,0,6);  //a[0]=2
for ($i=0;$i<6;$i++)
{
	echo $b[$i].'<br>';
}

$c=array('Web'=>6,'MA'=>3,'BD'=>5); //$b['MA']=3
/*foreach ($b as $key=>$value) //Обработка на масив (елемент по елемент)
{
	echo $key.'--->'.$value.'<br>';
}*/
//$_POST=['name'=>'Stan'] //От <input type="text" name="name"> изпозлваме като ключ името на inputa
//$_POST=['predm'=>'Web'] //От <input type="text" name="predm"> изпозлваме като ключ името на inputa
//$_POST=['oc'=>6] //От <input type="text" name="oc"> изпозлваме като ключ името на inputa
//$_POST=['sub'=>'Въведи'] //От <input type="submit" name="sub" value="Въведи"> изпозлваме като ключ името на inputa

/*foreach ($_SERVER as $key=>$value) //Съдържание на супер масива Server(др такива. System,Session)
{
	echo $key.'--->'.$value.'<br>';
}*/
?>
</BODY>
</HTML>