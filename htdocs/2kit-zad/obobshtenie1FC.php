<?php
include("oboshtenie1head.php");
	if(!isset($_POST['sub']))
	{
		header('location:obobshtenie1form.php');
	}
	else
	{
		$name=$_POST['ime'];
		$lname=$_POST['lastime'];
		$spec=$_POST['spec'];
		$kurs=$_POST['kurs'];
		
		$data=$name ."\t". $lname ."\t". $spec ."\t". $kurs ."\n";
		
		if (!file_exists("studenti.txt"))
		{
			$f=fopen("studenti.txt","w");
		}
		else
		{
			$f=fopen("studenti.txt","a");
			fwrite($f,$data);
			fclose($f);
			echo '<b> Въвеждането на информацията е успешна</b>';
			
			foreach($_SERVER as $key=>$value)
			{
				echo $key . "-->" . $value . '<br>';
			}
		}
	}
include("obobshtenie1foot.php");
?>