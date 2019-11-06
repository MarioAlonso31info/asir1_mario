<?php

function calcula($a,$b){
	$r=null;
	$r=$r. ($a+$b)."<br>";
	$r=$r. ($a-$b)."<br>";
	$r=$r. ($a*$b)."<br>";
	$r=$r. ($a/$b)."<br>";
	return $r;
}

echo calcula(3,2).calcula(8,4);