<?php
function notas($a) {

if($a>5)
	$r='Apto';
else
	$r='No Apto';
	return $r;
}
echo notas(7)."<br>";
echo notas(4)."<br>";