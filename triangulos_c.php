<?php
function tipo($a,$b,$c,$d,$e,$f) {
	$r='rectangulo';
	$s='escaleno';
		if ($a>90 || $b>90 || $c>90) {
			$r='obtusangulo';
			}
		if ($a<90 and $b<90 and $c<90) {
			$r='acutangulo';
		}
		if ($d==$e || $d==$f) {
			$s='isosceles';
		}
		if ($e==$f and $d==$f) {
			$s='equilatero';
		}
		return [
		$r,
		$s];
	}
list ($m, $n)=tipo(45,45,90,45,45,90);
echo $m."<br>";
echo $n;
?>