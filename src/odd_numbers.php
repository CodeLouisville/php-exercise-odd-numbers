<?php
function odd_numbers($array){
	$result = [];
	if (is_array($array) && (!empty($array))){  //whether the input is an array
		foreach ($array as $item){
			if (is_array($item)&& (!empty($array))){
				foreach ($item as $individul){
					if (test_odd($individul)){
						array_push($result, $individul);
					}				
				}
			}			
		}
		asort ($result); //sort the result array
		$result = array_unique($result);
		sort($result);
		return $result;
	}
}




function test_odd($number){
	if (!is_int($number)){ //whether the type of a variable is integer
		exit;
	}
	if($number % 2 == 1){ //wether the number is odd
		return TRUE;		
	}else{
		return FALSE;		
	}
	
}


/*
$test = array('A','B','C');
odd_numbers($test);

$test = 12;
var_dump(test_odd($test));
*/	
$test = [[3, 2, 1], [1, 3]];
var_dump(odd_numbers($test));

?>