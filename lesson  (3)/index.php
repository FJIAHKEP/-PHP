<?php
	echo "<h1> Задание 1 </h1>";
	$i = 0;
	while ($i < 100) {
		if ($i % 3 == 0) {
			echo $i,"<br>";
		}
		$i++;
	}
?>

<?php
	echo "<h1> Задание 2 </h1>";
	$x = 0;
	do {
		if ($x == 0) {
			echo "<div> $x -  это ноль. </div><br>";
		} else if ($x % 2 == 0) {
			echo "<div> $x - четное число. </div><br>";
		} else {
			echo "<div> $x - нечетное число. </div><br>";
		}
		$x++;
	} while ($x <= 10)
?>

<?php
	echo "<h1> Задание 3 </h1>";
	
	$regions = [
		'Московская область' => [
			'Балашиха',
			'Подольск',
			'Химки',
			'Королёв',
		],
		'Ленинградская область' => [
			'Гатчина',
			'Выборг',
			'Всеволожск',
		],
		'Рязанская область' => [
			'Рязань',
			'Касимов',
			'Скопин',
		]
	];
	
	foreach ($regions as $region => $cities) {
		echo "<br>$region:<br>";
		foreach ($cities as $city) {
			echo "$city,";
		}
	}

?>

<?php
	echo "<h1> Задание 4 </h1>";
	
	function translit ($word) {
		
		$alphabet = [
			'а' => 'a',
			'б' => 'b',
			'в' => 'v',
			'г' => 'g',
			'д' => 'd',
			'е' => 'e',
			'ё' => 'e',
			'ж' => 'zh',
			'з' => 'z',
			'и' => 'i',
			'й' => 'j',
			'к' => 'k',
			'л' => 'l',
			'м' => 'm',
			'н' => 'n',
			'о' => 'o',
			'п' => 'p',
			'р' => 'r',
			'с' => 's',
			'т' => 't',
			'у' => 'u',
			'ф' => 'f',
			'х' => 'h',
			'ц' => 'c',
			'ч' => 'ch',
			'ш' => 'sh',
			'щ' => 'sch',
			'ь' => '\'',
			'ы' => 'y',
			'ъ' => '\`',
			'э' => 'e',
			'ю' => 'yu',
			'я' => 'ya',
		];
		echo $word." - ". strtr($word, $alphabet)."<br>";
	}
	
	translit('привет');
	translit('как дела?');
	translit('что делаешь?');
	translit('Москва');
	translit('щавель');
?>

<?php
	echo "<h1> Задание 5 </h1>";
	
	function spaceDelete ($word) {
		$symbol = [" " => "_"];
		echo $word." - ". strtr($word, $symbol)."<br>";
	}
	
	spaceDelete('привет как дела что делаешь?');
?>

<?php
	echo "<h1> Задание 6 </h1>";
	
	$menu = [
		'<a href="#">home</a><br>',
		'<a href="#">man</a><br>',
		'<a href="#">women</a><br>',
		'<a href="#">kids</a><br>',
		'<a href="#">accoseriese</a><br>',
		'<a href="#">featured</a><br>',
		'<a href="#">hot deals</a><br>',
	];
	echo "<ul>";
	foreach ($menu as $li) {
		echo $li;
	}
	echo "</ul>";
?>

<?php
	echo "<h1> Задание 7 </h1>";
	
	for ($m = 0; $m <= 9; var_dump($m++)) { };
?>

<?php
	echo "<h1> Задание 8 </h1>";
?>

<?php
	echo "<h1> Задание 9 </h1>";
	
	function fullTranslite ($word) {
		
		$alphabet = [
			" " => "_",
			'а' => 'a',
			'б' => 'b',
			'в' => 'v',
			'г' => 'g',
			'д' => 'd',
			'е' => 'e',
			'ё' => 'e',
			'ж' => 'zh',
			'з' => 'z',
			'и' => 'i',
			'й' => 'j',
			'к' => 'k',
			'л' => 'l',
			'м' => 'm',
			'н' => 'n',
			'о' => 'o',
			'п' => 'p',
			'р' => 'r',
			'с' => 's',
			'т' => 't',
			'у' => 'u',
			'ф' => 'f',
			'х' => 'h',
			'ц' => 'c',
			'ч' => 'ch',
			'ш' => 'sh',
			'щ' => 'sch',
			'ь' => '\'',
			'ы' => 'y',
			'ъ' => '\`',
			'э' => 'e',
			'ю' => 'yu',
			'я' => 'ya',
		];
		
		echo $word." - ". strtr($word, $alphabet)."<br>";
	}
	
	fullTranslite('привет как дела что делаешь?');
?>
