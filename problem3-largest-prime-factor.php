<?php

/*
The prime factors of 13195 are 5, 7, 13 and 29.
What is the largest prime factor of the number 600851475143 ?
*/


$number = 600851475143;

function primefactor($num) {
	$sqrt = sqrt($num);
	for ($i = 2; $i <= $sqrt; $i++) {
		if ($num % $i == 0) {
			return array_merge(primefactor($num/$i), array($i));
		}
	}
	return array($num);
}


print_r(primefactor($number));

