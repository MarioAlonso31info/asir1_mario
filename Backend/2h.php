<?php
function notas($a) {
	$r='Pendiente';
if ($a>=5)
	$r='Aprobado';
if ($a>=7)
	$r='Notable';
if ($a>=8.5)
	$r='Sobresaliente';
	return $r;
}
echo notas(7)."<br>";
echo notas(4)."<br>";
echo notas(9)."<br>";
echo notas(6)."<br>";
echo notas(2)."<br>";
echo notas(1)."<br>";