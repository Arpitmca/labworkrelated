<?php
echo "readfile() : ";
echo readfile("test.txt");
echo "<br>";
?>
<?php
echo "fopen() :";
$myfile = fopen("test.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("test.txt"));
fclose($myfile);
?>
<?php
echo "<br>fwrite()";
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "I am Writing Something\n";
fwrite($myfile, $txt);
$txt = "Some more writing\n";
fwrite($myfile, $txt);
echo readfile("newfile.txt");
fclose($myfile);
?>