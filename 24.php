<?php 

	/*
	
	24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.

	*/


	$userNumber = 442158755745; // 4 times
	$searchNumber = 5;

	echo countSameNumber($searchNumber, $userNumber);

	function countSameNumber($needFind, $source){

		$source = (string) $source;
		$findTimes = 0;

		for ($i=0, $len = strlen($source); $i < $len; $i++) { 
			if($source[$i] == $needFind) $findTimes++;
		}
		return $findTimes;
	}


?>
