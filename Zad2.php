<html>
	<head> 
		<meta charset="UTF-8"> 
	</head>
	<body>
		<p> Расчет гипотенузы по длине катетов </p>
		<p><?php echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Right_triangle_with_notations.svg/200px-Right_triangle_with_notations.svg.png'>" 
		?>
		</p>
		<form method="GET">
			<p>Сторона А:
			<input type="text" name="arg1" value="<?php 
				if (isset($_GET['arg1'])){
					echo htmlspecialchars($_GET['arg1']);
				}
			?>">
			</p>
			<p>Сторона В:
			<input type="text" name="arg2" value="<?php 
				if(!empty($_GET['arg2'])) {
					echo htmlspecialchars($_GET['arg2']);
				} 
			?>">
			</p>
			<input type="submit" value="Найти" name="find">
		</form>
		<?php function calc($arg1,$arg2){	
			return (sqrt(intval(intval($_GET['arg1'])*intval($_GET['arg1']))+(intval($_GET['arg1'])*intval($_GET['arg1']))));
		}
		?>
		<?php
			if (isset($_GET[arg1]) && isset($_GET[arg2])){
				if (!is_numeric($_GET[arg1]) || !is_numeric($_GET[arg2])) {
					echo 'Ошибка. Введенные аргументы не являются числовыми';
				} elseif (($_GET[arg1])<0 || ($_GET[arg2])<0) {
					echo 'Ошибка. Введенные аргументы отрицательные'; 				
				} else {
					echo "Результат: "  .number_format((calc($_GET['arg1'], $_GET['arg2'])), 2,',',' ');
				}
			}
		?>
	</body>
</html>