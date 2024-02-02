<?php
$a[]="AUDI";
$a[]="BMW";
$a[]="Citroen";
$a[]="Dacia";
$a[]="Ferrari";
$a[]="Fiat";
$a[]="Ford";
$a[]="Honda";
$a[]="Hyundai";
$a[]="Infiniti";
$a[]="Jaguar";
$a[]="Jeep";
$a[]="Kia";
$a[]="Lada";
$a[]="Land Rover";
$a[]="Mazda";
$a[]="Mini";
$a[]="Mercedes";
$a[]="Nissan";
$a[]="OPEL";
$a[]="Peugeot";
$a[]="Renault";
$a[]="Seat";
$a[]="Skoda";
$a[]="Subaru";
$a[]="Suzuki";
$a[]="Toyota";
$a[]="VW";
$a[]="Volvo";

$q=$_REQUEST["q"];
$hint="";

if ($q!=="")
{
	$q=strtolower($q);
	$len=strlen($q);
	
	foreach($a as $name)
	{
		if(stristr($q,substr($name,0,$len)))
		{
			if($hint==="")
			{
				$hint=$name;
			}
			else
			{
				$hint.=",$name";
			}
		}
	}
}

echo $hint===""? " Моля, въведете валидно име на марка кола!" : $hint;
?>