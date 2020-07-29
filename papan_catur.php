<?php

function papan_catur($angka) {
	echo("$angka");
}

// TEST CASES
echo papan_catur(4) 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8)
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/