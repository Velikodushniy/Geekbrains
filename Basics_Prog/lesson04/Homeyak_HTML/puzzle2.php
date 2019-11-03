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

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">
				
				<?php

				if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){
						
						$userAnswer = $_GET["userAnswer1"];
						$score = 0;
						if($userAnswer == "дорога" || $userAnswer == "тропа"){
							$score++;
						}

						$userAnswer = $_GET["userAnswer2"];
						if($userAnswer == "зеркало" || $userAnswer == "зеркальце"){
							$score++;
						}

						$userAnswer = $_GET["userAnswer3"];
						if($userAnswer == "переселенец" || $userAnswer == "длинношеееее"){
							$score++;
						}
					
						echo "Вы угадали " . $score . " загадок.";
				}		
				?>
			

				<form>
					<p>Идет то в гору, то с горы, но остается на месте. Что это?</p>
					<input type="text" name="userAnswer1">

					<p>Оно в комнате, а комната в нем. Что это?</p>
					<input type="text" name="userAnswer2">

					<p>В каком слове 5 'е' и никаких других гласных?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">
				</form>

			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; Vasily Pupkin
<div>


</body>
</html>