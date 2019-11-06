<?php

$a = [
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
];

	for($i=0;$i<12;$i++)
		echo $a[$i]."<br>";
		echo '<div style="
		float:left;
		margin:20px;
		">';
	foreach($a as $mes)
		echo $mes."<br>";

function mes($n){
	$a = [
		'Enero',
		'Febrero',
		'Marzo',
		'Abril',
		'Mayo',
		'Junio',
		'Julio',
		'Agosto',
		'Septiembre',
		'Octubre',
		'Noviembre',
		'Diciembre',
	];
	return $a[$n-1];
}
echo '<div style="
		float:left;
		margin:20px;
		">';
echo mes(1)."<br>";
echo mes(6)."<br>";
echo mes(10)."<br>";
echo mes(8)."<br>";