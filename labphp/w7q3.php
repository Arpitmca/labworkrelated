<?php 

$file=fopen("three.txt", "w");
$a = readline('Enter your name: '); 
fwrite($file, $a);
fwrite($file, "\n");
$b = readline('Enter Your department: '); 
fwrite($file, $b);
fwrite($file, "\n");
$c=readline('Enter your city: ');
fwrite($file, $c);
fclose($file);
$myfile = fopen("three.txt", "r") or die("Unable to open file!");
echo "\n";
echo fread($myfile,filesize("three.txt"));
fclose($myfile);
?> 
