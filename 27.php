<?php 

	/*
	
	27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число. 

	Пример результата:
	2033	11696	712	32583	157
	25694	19724	18487	8462	4412
	4673	14450	16748	3505	5299
	16873	21370	22482	28576	26060
	28955	8804	26825	31471	22283

	*/

	$colors = array('red','yellow','blue','gray','maroon','brown','green');
	$rows = 5;
	$cols = 5;

	$html = '<table border=0>';
	for ($i=0; $i < $rows; $i++) { 
		$html .= '<tr>';
		for ($j=0; $j < $cols; $j++) {
			$randomColor = $colors[rand(0, count($colors) - 1)];
			$randNumber = 
			$style = "background-color : $randomColor";
			$html .= "<td style='$style'>";
			$html .= rand();
			$html .= "</td>";
		}
		$html .= '</tr>';
	}
	$html .= '</table>';

	echo $html;


?>
