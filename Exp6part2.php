<?php
$fp=fopen("studentdetails.txt", 'r') or die("Unable to open file!");
$fpa=fopen("txtfile1.txt", 'a') or die("Unable to open file!");
copy("studentdetails.txt", "txtfile1.txt");
fclose($fpa);
fclose($fp);
$fpa=fopen("txtfile1.txt", 'r') or die("Unable to open file!");
echo "File content copied!<br>";
while(!feof($fpa))
{
	echo fgets($fpa)."<br>";
}
fclose($fpa);
?>
	