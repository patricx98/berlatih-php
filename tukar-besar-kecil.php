<?php
function tukar_besar_kecil($string){
	$panjang = strlen($string);  //panjang karakter
    $text = "";                 //set variable penampung data pembalik
    for ($i = 0; $i < $panjang; $i++) {
    	if(preg_match("/[A-Z]/", $string[$i])===0) {
    		$text .= strtoupper($string[$i]);
    	} 
    	else{
    		$text .= strtolower($string[$i]);	
    	}
    }
    return($text."<br>");
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>