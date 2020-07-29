<?php
function tentukan_deret_aritmatika($arr) {
	$deret = 0;
	$deretOld = $arr[1]-$arr[0];
	$panjang = count($arr);
	for ($i = 0; $i < $panjang-1; $i++){
		$deret = $arr[$i+1]-$arr[$i];
		if ($deret == $deretOld){
			$deretOld = $deret;
			$kondisi = "true";
		}
		else{
			$kondisi = "false";
			break;
		}
	}
	return($kondisi."<br>");
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>