<?php
echo " Write a script to copy content of one file into another."."<br/>";
$a=$_REQUEST['roll'];
$b=$_REQUEST['name'];
$c=$_REQUEST['age'];
$d=$_REQUEST['add'];
$e=$_REQUEST['phone'];
$f="\r\n";
$g=";";
$fp=fopen("source.txt", 'a') or die("Unable to open file!");
fwrite($fp, $a);
fwrite($fp, $g);
fwrite($fp, $b);
fwrite($fp, $g);
fwrite($fp, $c);
fwrite($fp, $g);
fwrite($fp, $d);
fwrite($fp, $g);
fwrite($fp, $e);
fwrite($fp, $f);


echo copy("source.txt","target.txt");
fclose($fp);

$fp=fopen("source.txt", 'r') or die("Unable to open file!");
while(!feof($fp))
{
	echo fgets($fp)."<br>";
}

echo copy("source.txt","target.txt");

fclose($fp);

?>