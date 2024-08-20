<?php
$file=fopen("example.txt","w");
fwrite($file,"Hello,this is a sample text.");
fclose($file);

$file=fopen("example.txt","r");
echo fread($file,filesize("example.txt"));
fclose($file);
?>