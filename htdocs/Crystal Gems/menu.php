<!DOCTYPE>
<html>
<head>
<style>
.sidenav {
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

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 18px; /* Тук се задава големина на буквите в менюто*/
  color: #818181; /* Тук се задава цвят на буквите в менюто*/
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1; /* Тук се задава цвят на буквите в менюто, когато с мишката минете върху тях*/
}
</style>
</head>
<body>
<div class="sidenav">
  <a href="index.php" target="_self">Начало</a>
  <a href="za_firmata.php" target="_self">За фирмата</a>
  <a href="Katalog.php" target="_self">Каталог</a>
  <a href="promociq.php" target="_self">Промоция</a>
  <a href="gallery.php" target="_self">Галерия</a>
  <a href="contacts.php" target="_self">Контакти</a>
  <a href="poruchka.php" target="_self"> Поръчка </a>
</div>
</body>
</html>