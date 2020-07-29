<?php
function pasangan_terbesar($angka){
	$terbesar = 0;
	$panjang = strlen($angka);  //panjang karakter
    $split = str_split($angka); //pecah pecah text
    $text = "";                 //set variable penampung data pembalik
    for ($i = 0; $i < $panjang-1; $i++) {
    	$text = $split[$i].$split[$i+1];      
    	if ($text >= $terbesar){
    		$terbesar = $text;
    	}   
    }
    return($terbesar);
    echo("<br>");
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>