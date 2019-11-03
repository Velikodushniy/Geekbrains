<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>

	<h1>Сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/photo2.png">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i>Василий Алибабаевич</i>.<br>Я совсем недавно начал программировать, однако уже написал свой первый сайт. Сам в шоке если честно.</p>

			<p>В этом мне помог, как мог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал. <br>
			А так же воспользоваться при жуткой необходимости Генератором паролей!
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Vasily Alibabaevich
<div>


</body>
</html>