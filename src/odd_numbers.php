<?php
	function odd_numbers($ar){
		$oddarr = array();
		foreach ($ar as $v) {
			if($v%2!=0){
				array_push($oddarr, $v);
			}
		}
		sort($oddarr);
		return $oddarr;	
	}
	$arr=odd_numbers(array(3,2,1,9,10,12,11,7));
?>
