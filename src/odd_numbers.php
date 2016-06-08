<?PHP

function odd_numbers($input){
	if(is_array($input)){
		$output = array();
		foreach($input as $in){
			if((!is_string($in)) & (abs($in) % 2 === 1) ){
				array_push($output, $in);
			}
		}
		sort($output);
		return array_values($output);
	}else{
		return false;
	}
}

 var_dump(odd_numbers(['a', 111]));