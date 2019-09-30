<a href="http://192.168.0.96/asir1_adrian/Asir1_i.php">Adrian Villar</a>
<p>Mario</p>
<a href="http://192.168.0.93/asir1_bruno/asir1bruno.php">Bruno Lamadrid</a>
<br>
<br>

<?php
$file = fopen("visitas.txt", "a");
fwrite($file, date('Y-m-d H:i '));
fwrite($file, $_SERVER['REMOTE_ADDR'] . PHP_EOL);
fclose($file);

?>