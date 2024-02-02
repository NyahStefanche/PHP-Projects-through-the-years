<?php
if (isset($_FILES['image']))
{
	$errors=array();
	$file_name=$_FILES['image']['name'];
	$file_size=$_FILES['image']['size'];
	$file_tmp=$_FILES['image']['tmp'];
	$file_type=$_FILES['image']['type'];
	$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
	
	$expensions=array("jpeg","jpg","png","gif","bmp"); //Пише се extensions (ама го написах така заради госпожата
	
	if(in_array($file_ext,$expensions)===false)
	{
		$errors[]='Разширението не е разшерено, моля,изберете файл от тип картинки ';
	}
	
	if($file_size>2097152)
	{
		$errors[]='Размерът на файла трябва да е до 2 MB.';
	}
	
	if(empty($errors)==true)
	{
		move_uploaded_file($file_tmp,"image/".$file_name);
		echo "Success";
	} 
	else
	{
		print_r($errors);
	}
}

echo "Файлът е прикачен!";
?>