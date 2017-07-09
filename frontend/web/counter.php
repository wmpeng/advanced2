<?php
/* counter */
//opens countlog.txt to read the number of hits
$datei = fopen("counterlog.txt","rb");
$count = fgets($datei,1000);
fclose($datei);
$count = $count + 1 ;
echo "本站有" .$count. "次访问";
$datei = fopen("counterlog.txt","w");
fwrite($datei, $count);
fclose($datei);
?>