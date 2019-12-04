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
function tipo($a,$b,$c,$d,$e,$f) {
	return longitud($a,$b,$c).' y '.angulo($d,$e,$f);
}
echo tipo(70,45,90,90,45,90);
echo '<br>';
echo tipo(1,1,1,60,60,60);
echo '<br>';
echo tipo(60,60,60,90,90,90);
echo '<br>';
echo tipo(1,1,1,60,60,60);
echo '<br>';
echo tipo(60,60,90,30,30,30);
echo '<br>';
echo tipo(1,1,1,60,60,60);
?>