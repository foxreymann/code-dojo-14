<?php

function sums($number) {
	$fibonacciTranslationTable =  createFibonacciTranslationTable();

	$matching = array();
	foreach($fibonacciTranslationTable as $key => $value) {
		if($value == $number) {
			$matching[] = $key;	
		} 
	}

	return $matching;

}

function createFibonacciTranslationTable() {
	$fibonacciNumbers = array(1,2,3,5,8,13);
	$fibonacciTranslationTable = array('0' => 0,'1' => 1);

	for($i = 1; $i < 6; $i++) {
		foreach($fibonacciTranslationTable as $key => $xx) {
			$fibonacciTranslationTable[$key.'0'] = 0;
			$fibonacciTranslationTable[$key.'1'] = 0;
		}	
	}

	foreach($fibonacciTranslationTable as $key => $value) {
		$sum = 0;
		$key = str_pad($key, 6, "0", STR_PAD_LEFT);
		$chars = str_split($key);			
		$sum += $chars[0] * 13; 
		$sum += $chars[1] * 8; 
		$sum += $chars[2] * 5; 
		$sum += $chars[3] * 3; 
		$sum += $chars[4] * 2; 
		$sum += $chars[5] * 1;
		$fibonacciTranslationTable[$key] = $sum; 
	}

	return $fibonacciTranslationTable;
}
