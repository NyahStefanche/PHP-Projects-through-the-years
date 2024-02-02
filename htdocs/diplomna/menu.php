<!DOCTYPE>
<html>
<head>
<style>
.sidenav 
{
  height: 100%;
  width: 160px; /*Тук се задава широчина на менюто */
  position: fixed;
  z-index: 1;
  top: 0; /*Тук се задава отстоянието от горния край на прозореца*/
  left: 0; /*Тук се задава отстоянието от левия край на прозореца*/
  background-color: #111; /* Тук се задава цвят на фона на менюто*/
  overflow-x: hidden; /* Тук се задава какво ще стане с текста, ако той е по-дълъг и излиза от менюто*/
  padding-top: 20px;
}

.sidenav a 
{
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 18px; /* Тук се задава големина на буквите в менюто*/
  color: #818181; /* Тук се задава цвят на буквите в менюто*/
  display: block;
}

.sidenav a:hover 
{
  color: #f1f1f1; /* Тук се задава цвят на буквите в менюто, когато с мишката минете върху тях*/
}

/* The dropdown container */
.dropdown 
{
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn 
{
  font-size: 18px;
  border: none;
  outline: none;
  color: #818181;
  padding: 6px 8px 6px 16px;
  background-color: #111;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

.sidenav a:hover, .dropbtn:hover 
{
  color: #f1f1f1; /* Тук се задава цвят на буквите в менюто, когато с мишката минете върху тях*/
}

/* Dropdown content (hidden by default) */
.dropdown-content 
{
  display: none;
  position: absolute;
  background-color: #111;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  padding: 8px;
}

/* Links inside the dropdown */
.dropdown-content a 
{
  float: none;
  color: #818181;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover
{
	color: #f1f1f1
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content
{
  display: block;
}

hr
{
	border: 1px solid #818181;
}
</style>
</head>
<body>
<div class="sidenav">
		<?php
		if(isset($_SESSION['user']))
		{
			?>
				<a href="logout.php"><br> Изход </a>
			<?php
		}
	else
		{
			?>
				<a href="login.php"><br> Вход </a>
			<?php
		}
		?>
  <hr>
  <a href="index.php" target="_self">Начало</a>
	</div>
  </div>
</div>
</body>
</html>