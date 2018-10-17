<?php
	echo "<h1> Задание 1 </h1>";
	$a = rand(-5, 5);
	$b = rand(-5, 5);
	
	echo '$a = ',$a,"<br>";
	echo '$b = ',$b,"<br>";
	
	if ($a >= 0 && $b >= 0) {
		echo 'Разность. $a - $b = ',$a - $b;
	} else if ($a < 0 && $b < 0) {
		echo 'Произведение. $a * $b = ',$a * $b;
	} else {
		echo 'Сумма. $a + $b = ',$a + $b;
	}
?>

<?php
	echo "<h1> Задание 2 </h1>";
	$a = rand(0, 15);
	
	switch ($a) {
		case 1:
			echo 1,' ';
		case 2:
			echo 2,' ';
		case 3:
			echo 3,' ';
		case 4:
			echo 4,' ';
		case 5:
			echo 5,' ';
		case 6:
			echo 6,' ';
		case 7:
			echo 7,' ';
		case 8:
			echo 8,' ';
		case 9:
			echo 9,' ';
		case 10:
			echo 10,' ';
		case 11:
			echo 11,' ';
		case 12:
			echo 12,' ';
		case 13:
			echo 13,' ';
		case 14:
			echo 14,' ';
		case 15:
			echo 15,' ';
	}
	
?>



<?php
	echo "<h1> Задание 3 </h1>";
	
	function plus($num1, $num2) {
		return $num1 + $num2;
	}
	echo 'Функция сложения 2 + 2 = ',plus(2,2),"<br>";

	function minus($num1, $num2) {
		return $num1 - $num2;
	}
	echo 'Функция вычитания 2 - 2 = ',minus(2,2),"<br>";

	function division($num1, $num2) {
		return $num1 / $num2;
	}
	echo 'Функция деления 2 / 2 = ',division(2,2),"<br>";

	function multiplication($num1, $num2) {
		return $num1 * $num2;
	}
	echo 'Функция умножения 2 * 2 = ',multiplication(2,2),"<br>";	
?>

<?php
	echo "<h1> Задание 4 </h1>";
	

	function mathOperation1($arg1, $arg2, $operation) {
		switch ($operation) {
			case "+":
				return "$arg1 $operation $arg2 = ".plus($arg1, $arg2);
			case "-":
				return "$arg1 $operation $arg2 = ".minus($arg1, $arg2);
			case "/":
				return "$arg1 $operation $arg2 = ".division($arg1, $arg2);
			case "*":
				return "$arg1 $operation $arg2 = ".multiplication($arg1, $arg2);
		}
	}
	
	
	echo mathOperation1($a,$b, "+"),"<br>";
	echo mathOperation1($a,$b, "-"),"<br>";
	echo mathOperation1($a,$b, "/"),"<br>";
	echo mathOperation1($a,$b, "*"),"<br>";
?>

<?php
	echo "<h1> Задание 5 </h1>";
	

	echo "<h3> ТОЧНАЯ ДАТА ",date("d.m.Yг")," </h1>";
	
?>