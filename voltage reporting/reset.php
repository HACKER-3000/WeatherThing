<?php
$filename = "data.csv";
$file = fopen($filename,"w");
$content = "unixtime,voltage";
header("Content-Type: text/plain");
fwrite($file, $content);
fclose($file);
print("Data Reset.");
?>