<?php 

	/*
	
	23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.

	*/


	$userNumber = 0343032; // 3+4+3+3+2 = 15

	echo getSumOfNum($userNumber);

	function getSumOfNum($num){

		$num = (string) $num;
		$sum = 0;

		for ($i=0, $len = strlen($num); $i < $len; $i++) { 
			$sum += (int)$num[$i];
		}
		return $sum;
	}


?>
