1. Установить программное обеспечение: веб-сервер, базу данных, интерпретатор, текстовый редактор. Проверить, что все работает правильно.<br>
<?php
	echo "<h1> Задание 1 </h1>";
	echo "<p>Установил PHP 7.2.10</p><br>
		  <p>Установил Apach</p><br>
		  <p>Установил PHPStorm</p>";
?>
<hr> 2. Выполнить примеры из методички и разобраться, как это работает.<br>
<?php
	echo "<h1> Задание 2 </h1>";
	echo "<p> посмотрел , ничего нового там не увидел , все тоже было на уроке </p>";
?>
<hr>3. Объяснить, как работает данный код:<br>
<?php
	echo "<h1> Задание 3 </h1>";
	$a = 5; // integer
    $b = '05'; // string
    echo "$a == '$b' = ",var_dump($a == $b),"<p>// Почему true? php не понимает что строка это строка, и сравнение == проверяет просто значения </p><br>";
	echo var_dump((int)'012345'),"<p>// Почему 12345? Потому что идет Явное Преобразование типа к integer</p><br>";     
    echo var_dump((float)123.0 === (int)123.0),"<p>// Почему false? Первое число Преобразование к float второе к integer , далее идет типизированное сравнение которое проверяет типы данных </p><br>"; 
    echo var_dump((int)0 === (int)'hello, world'),"<p>// Почему true? Явное преобразование обоих значений к integer </p><br>"; 
?>
<hr><br>4. Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.<br>
<?php
	define('DOCTYPE', "<!DOCTYPE html>");
	define('TITLE', "<title> Заголовок страницы </title>");
	$h1AndP = " <h1>КОНТЕНТ СТРАНИЦЫ</h1> <br>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>";
	$year = "<h2>2018</h2>";
	$classBody = "container";
	define('HTML', "<html lang='ru'> <head> ".TITLE." </head><body class='$classBody'> $h1AndP $year </body></html>");
	
	echo HTML;
?>
<hr>
5. *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя.<br>


<?php
	echo "<h1> Задание 5 </h1><br><p><a href='http://qaru.site/questions/10195/how-does-the-bitwise-operator-xor-work'>Подсмотренно</a><br>
	Без стороннего ресурса было нереально сделать, я понял что надо использовать XOR но я не знал каким символом, поначалу пытался писать в коде xor но ничего не работало.</p>";
	
	$a = 1;
	$b = 2;
	
	$a = $a ^ $b;
	$b = $b ^ $a;
	$a = $a ^ $b;
	
	echo $a,$b;
	
?>