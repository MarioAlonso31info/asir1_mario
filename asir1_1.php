<p>Mario</p>
<a href="http://192.168.0.93/asir1_bruno">Bruno Lamadrid</a>
<?php
$file = fopen("visitas.txt", "a");
fwrite($file, date('Y-m-d H:i') . PHP_EOL);
fwrite($file, $_SERVER['REMOTE_ADDR'] . PHP_EOL);
fclose($file);

?>