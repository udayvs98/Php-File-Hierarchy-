<html>
<h2> Write a script to copy content of one file into another.</h2>
<body bgcolor="green">
<form action="" method=post>
<table>
<tr>
<td>Enter roll no.:</td>
<td> <input type="number" name="roll"></td>
</tr>
<tr><td>Enter name:
</td>
<td> <input type="text" name="name"></td></tr>
<tr><td>Enter age:
</td>
<td><input type="text" name="phone"></td></tr>
<tr><td><input type="submit">
</td></tr>
</table>
</form>
</body>
</html>
<?php
{
echo " Write a script to copy content of one file into another."."<br/>";
$a=$_Enter['roll'];
$b=$_Enter['name'];
$c=$_Enter['age'];
$f="\r\n";
$g=";";
$fp=fopen("abcd.txt", 'a') or die("Unable to open file!");
fwrite($fp, $a);
fwrite($fp, $g);
fwrite($fp, $b);
fwrite($fp, $g);
fwrite($fp, $c);
fwrite($fp, $g);
echo copy("abcd.txt","pqrd.txt");
fclose($fp);

$fp=fopen("abcd.txt", 'r') or die("Unable to open file!");
while(!feof($fp))
{
	echo fgets($fp)."<br>";
}
echo copy("abcd.txt","pqrd.txt");
fclose($fp);
}
show_source("Exper6part2.php");
?>