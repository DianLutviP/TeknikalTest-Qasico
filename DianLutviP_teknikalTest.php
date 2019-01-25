<?php 

function solution($N) {
	$output = [];
	if($N <= 10000) {
		for($i =0; $i < $N; $i++) {
			$bil = round($N / 2);
			
			if($i <= $bil) {
				for($j=0; $j < $bil; $j++) {
					$output[] = $j-$bil;
				}
			} else {
				$bilx = $N - $bil;
				for($k=0; $k < $bilx; $k++) {
					$output[] = $k;
				}
			}
		}		
	}

	return $output;
}

?>
