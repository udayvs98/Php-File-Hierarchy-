<html>
<head> 
<title> Innovative Learning Center </title>
<body>
<h1> Innovative Learning Center </h1>
<form name="form1" method="post" action="index2.php?saving=1">
<textarea name="data" cols="100" rows="10">
Vehicle #: 
RO #: 
Date: 
Tech Assigned: 
Warranty: 
Current Status: 
</textarea>
<br>
<input type="submit" value="Save">
</form>
<?php
//$saving = $_REQUEST['saving'];
//if ($saving == 1) {
$data = $_POST['data'];
$file = "data.txt"; 

$fp = fopen($file101, "a") or die("Couldn't open $file for writing!");
fwrite($fp, $data) or die("Couldn't write values to file!"); 

fclose($fp); 
echo "Saved to $file successfully!";
//}
?>