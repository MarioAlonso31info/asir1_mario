<?php

$fiesta=[
'2019-01-01',
'2019-01-02',
'2019-01-03',
'2019-01-04',
'2019-02-28',
'2019-03-01',
'2019-03-04',
'2019-04-18',
'2019-04-19',
'2019-04-22',
'2019-04-23',
'2019-04-24',
'2019-04-25',
'2019-04-26',
'2019-05-01',
'2019-06-28',
'2019-07-01',
'2019-07-02',
'2019-07-03',
'2019-07-04',
'2019-07-05',
'2019-07-06',
'2019-07-07',
'2019-07-08',
'2019-07-09',
'2019-07-10',
'2019-07-11',
'2019-07-12',
'2019-07-13',
'2019-07-14',
'2019-07-15',
'2019-07-16',
'2019-07-17',
'2019-07-18',
'2019-07-19',
'2019-07-20',
'2019-07-21',
'2019-07-22',
'2019-07-23',
'2019-07-24',
'2019-07-25',
'2019-07-26',
'2019-07-27',
'2019-07-28',
'2019-07-29',
'2019-07-30',
'2019-07-31',
'2019-08-01',
'2019-08-02',
'2019-08-03',
'2019-08-04',
'2019-08-05',
'2019-08-06',
'2019-08-07',
'2019-08-08',
'2019-08-09',
'2019-08-10',
'2019-08-11',
'2019-08-12',
'2019-08-13',
'2019-08-14',
'2019-08-15',
'2019-08-16',
'2019-08-17',
'2019-08-18',
'2019-08-19',
'2019-08-20',
'2019-08-21',
'2019-08-22',
'2019-08-23',
'2019-08-24',
'2019-08-25',
'2019-08-26',
'2019-08-27',
'2019-08-28',
'2019-08-29',
'2019-08-30',
'2019-08-31',
'2019-09-01',
'2019-09-02',
'2019-09-03',
'2019-09-04',
'2019-09-05',
'2019-09-06',
'2019-09-07',
'2019-09-08',
'2019-09-09',
'2019-09-10',
'2019-09-11',
'2019-09-12',
'2019-09-13',
'2019-09-14',
'2019-09-15',
'2019-10-28',
'2019-10-29',
'2019-10-30',
'2019-10-31',
'2019-11-01',
'2019-12-06',
'2019-12-09',
'2019-12-23',
'2019-12-24',
'2019-12-25',
'2019-12-26',
'2019-12-27',
'2019-12-30',
'2019-12-31',
];
for($i=1;$i<366;$i++){
	$a=date('Y-m-d',($i-1)*24*60*60+strtotime('2019-01-01'));
	if(
		!in_array($a,$fiesta)
		and
		date('D',strtotime($a))!='Sat'
		and
		date('D',strtotime($a))!='Sun'
	){
		$x[]=[
		'n'=>$i,
		's'=>round($i/7)+1,
		'fecha'=>date('Y-m-d',strtotime('2019-01-01')+($i-1)*24*60*60),
		'D'=>date('D',strtotime('2019-01-01')+($i-1)*24*60*60),
		];
	}
}
foreach($x as $z){
	echo '<tr>'."<br>";
	// día año
	echo '<td>'."<br>";
	echo $z['n'].'º dia del año'."<br>";
	echo '</td>';	
	// día semana
	echo '<td>';
	echo $z['s'].'ª semana del año'."<br>";
	echo '</td>';
	// fecha
	echo '<td>';
	echo $z['fecha']."<br>";
	echo '</td>';	
	// día de la semana
	echo '<td>';
	echo $z['D'];
	echo '</td>';	
	
	echo '</tr>';
}
?>