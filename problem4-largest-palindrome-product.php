<?php


/*
A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
Find the largest palindrome made from the product of two 3-digit numbers.

XXX x XXX = Answer

First 3 digit number is 100
Last 3 digit number is 999

1 x 1 	2 x 1
1 x 2 	2 x 2
1 x 3 	2 x 3
1 x 4 	2 x 4
1 x 5 	2 x 5

*/



function isPalindrone($value){
	$palindrome = strrev($value);
	if($value == $palindrome){
		return true;
	} else {
		return false;
	}
}


$start = 100;
$end = 1000;
$palindromeArray = array();


$x = $start;
while($x < $end){
	$y = $start;
	while($y < $end){
		$product = $x * $y;

		if(isPalindrone($product)){
			echo $x . " x " . $y . " = " . $product . " -- is palindrome \n";
			$palindromeArray[] = $product;
		} 
		$y++;	
	}
	$x++;
}


echo max($palindromeArray) . "\n";


