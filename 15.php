<?php 

	/*
	
	15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10.

	*/

	$arr = [];
	$count = 0;
	foreach ($arr as $v) {
		$count++;
	}
	echo $count; 
?>
