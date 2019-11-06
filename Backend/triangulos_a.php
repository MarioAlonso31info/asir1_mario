<?php
function longitud ($a,$b,$c) {
	$r='escaleno';
		if ($a==$b || $a==$c or $b==$c) 
			$r='isosceles';
		if ($b==$c and $a==$c)
			$r='equilatero';
		
	return $r;
}
echo longitud (1,1,1);
echo longitud (1,2,1)."<br>";
echo longitud (3,2,1)."<br>";
?>