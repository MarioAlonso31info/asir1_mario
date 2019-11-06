<?php
function longitud ($a,$b,$c) {
	$r='escaleno';
		if ($a==$b || $a==$c or $b==$c) 
			$r='isosceles';
		if ($b==$c and $a==$c)
			$r='equilatero';
		
	return $r;
}
function angulo ($a,$b,$c) {
	$r='acutangulo';
		if ($a==90 or $b==90 or $c==90)
			$r='rectangulo';
		if ($a>90 or $b>90 or $c>90)
			$r='obtusangulo';
		
	return $r;
	}
$a= [
	'lados'=>[1,1,1],
	'angulo'=>[60,60,60],
	];
$a= [
	'lados'=>[1,1,1.4142],
	'angulo'=>[90,45,45],
	];
	
function c ($a) {
	return longitud(
		$a['lados'][0],
		$a['lados'][1],
		$a['lados'][2]
	).' y '.angulo(
		$a['angulo'][0],
		$a['angulo'][1],
		$a['angulo'][2]
	);
}
echo c($a);