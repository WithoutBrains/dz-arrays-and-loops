<?php 

	/*
	
	19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.

	*/


	$daysOfWeek = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
	$day = $daysOfWeek[date('N')-1];

	foreach ($daysOfWeek as $d) {
		if($d == $day){
			echo "<p><i style= 'font-size: 21px;'>$d</i></p>";
			continue;
		}
		echo "<p>$d</p>";
	}
	


?>
