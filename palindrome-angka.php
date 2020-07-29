<?php

function palindrome_angka($angka) {
    do {
        $angka++;
        $panjang = strlen($angka);  //panjang karakter
        $split = str_split($angka); //pecah pecah text
        $text = "";                 //set variable penampung data pembalik
        for ($i = $panjang-1; $i >= 0; $i--) {
            $text .= $split[$i];         
        }
    }while ($text != $angka);
    return($text."<br>");
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>