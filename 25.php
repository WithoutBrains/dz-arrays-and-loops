<?php 

	/*
	
	25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.

	*/

	$arr = [];
	for ($i=0, $len = rand(0,30); $i < $len; $i++) { 
		$arr[] = rand();
	}

	echo '<pre>';
	print_r($arr);
	echo '</pre>';

	$max = $arr[0];
	$maxIndex = 0;

	$min = $arr[0];
	$minIndex = 0;

	foreach ($arr as $k => $v) {
		if ($v > $max) {
			$max = $v;
			$maxIndex = $k;
		}
		if($v < $min) {
			$min = $v;
			$minIndex = $k;
		}
	}

	echo "Минимальное значение $min с индексом $minIndex<br>";
	echo "Максимальное значение $max с индексом $maxIndex<br>";

	$arr[$minIndex] = $max;
	$arr[$maxIndex] = $min;


	echo '<pre>';
	print_r($arr);
	echo '</pre>';

?>
