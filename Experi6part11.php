<html>
<h2> Write a script to store the roll no, name, age, address, phone no of students into the file called studentdetails.txt</h2>

<body bgcolor="green">
<form action="" method=post name="f1">
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
<td> <input type="text" name="age"></td></tr>
<tr><td>Enter address: 
</td>
<td><input type="text" name="add"></td></tr>
<tr><td>Enter phone number: 
</td>
<td><input type="text" name="phone"></td></tr>
<tr><td><input type="submit" name="s1" value="TO SUBMIT">
</form>
<form action ="" method="POST" name="f2">
 <input type="submit" name="s2" value="TO SEARCH address BANGALORE">
</td></tr></table></form>
</body>
</html>
<?php
$fp=fopen("studentdetails.txt", 'r') or die("Unable to open file!");
$find = fgets($fp, 100);
$x="/mumbai/";
echo "Find - mumbai<br>";
if(preg_match($x, $find))
{
	echo "<br> Found! ";
	echo $find."<br>";
}
else{
	echo "not found!";
}
fclose($fp);
?>
<?php
$searchthis = "Bangalore";
$matches = array();

$handle = fopen("studentdetails.txt", "r");
if ($handle)
{
    while (!feof($handle))
    {
        $buffer = fgets($handle);
        if(strpos($buffer, $searchthis) !== FALSE)
            $matches[] = $buffer;
    }
    fclose($handle);
}
//show results:
foreach($matches as $val)
{
	echo $val."<br>";
}
//print_r($matches);
?>