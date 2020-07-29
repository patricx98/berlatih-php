<?php
function ubah_huruf($string){
	$panjang = strlen($string);  //panjang karakter
    for($i = 0; $i < $panjang; $i++){
    	echo(chr((ord($string[$i])+1)));
    }
    echo("<br>");
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>