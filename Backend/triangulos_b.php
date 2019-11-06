<?php
function angulo ($a,$b,$c) {
	$r='acutangulo';
		if ($a==90 or $b==90 or $c==90)
			$r='rectangulo';
		if ($a>90 or $b>90 or $c>90)
			$r='obtusangulo';
		
	return $r;
	}
echo angulo (90,30,60)."<br>";
echo angulo (60,60,60)."<br>";
echo angulo (120,40,20)."<br>";