<?php

function papan_catur($angka) {
	$kondisi = 0;
	for($i = 0; $i < $angka; $i++){
		for($j = 0; $j < $angka; $j++){
			if ($kondisi == 0){
				echo("# ");
			}
			else{
				if($j < $angka-1){
					echo(" #");	
				}
			}
		}
		if($i%2 != 0){
			$kondisi = 0;
		}
		else{
			$kondisi = 1;
		}
		echo("<br>");
	}
	echo("<br>");
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/