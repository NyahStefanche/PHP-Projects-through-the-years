<?php
ob_start();
session_start();
?>
<html>
<head>
<title> Firma.com </title>
<link href="css/bootstart.min.css" rel="stylesheet">
<style>
body
{
	padding-top: 40px;
	padding-bottom: 40px;
	background-color: #ADABAB;
}
.form-signin
{
	max-width: 330px;
	padding: 15px;
	margin: 0px;
	color: #017572;
}
.form-signin, form-signin-heading, form-signin, checkbox
{
	margin-bottom: 10px;
}
.form-signin, checkbox
{
	font-weight: normal;
}
.form-signin, form-control
{
	height: auto;
	position: relative;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	padding: 10px;
	font-size: 16px;
}
.form-signin, form-control:focus
{
	z-index: 2;
}
.form-signin input[type="email"]
{
	margin-bottom: -1px;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
	border-color: #017572;
}
.form-singin input[type="password"]
{
	margin-bottom:10px;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	border-color: #017572;
}
h2
{
	text-align:center;
	color: #017572;
}
</style>
</head>
<body>
<h2> Въведете потребителско име и парола </h2>
<div class="container form-signin">
<?php
$msg="";
if(isset($_POST['login'])&&!empty($_POST['username'])&&!empty($_POST['password']))
{
	if($_POST['username']=='user' && $_POST['password']=='1234')
	{
		$_SESSION['valid']=true;
		$_SESSION['timeout']=time();
		$_SESSION['username']='user';
		
		echo "Въведохте валидно потребителско име и парола!";
	}
	else
	{
		$msg="Грешно потребителско име или парола!!!";
	}
}
?>
</div>
<div class="container">
<form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<h4 class="form-signin-heading"><?php echo $msg; ?>  </h4>
<input type="text" class="form-control" name="username" placeholder="username=user" required autofocus>
<br>
<input type="password" class="form-control" name="password" placeholder="password=1234" required>
<br>
<button class="btn btn-1g btn-primary btn-block" type="submit" name="login"> Вход </button>
</form>
Щракнете тук, за да почистите вашата <a href="f6.php" title="Logout"> Сесия.
</div>
</body>
</html>