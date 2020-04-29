<html>
<head>
<title> file system </title>
</head>
<body>
	<form action="" method="post">
SSN: <input type="text" name="ssn"><br>
Name: <input type="text" name="name"><br>
Age: <input type="text" name="age"><br>
City: <input type="text" name="city"><br>
<input type="submit" name="sub">
</form>
</body>
</html>	
		<?php/^

if (isset($_POST['sub']){ 
$x=$_POST['ssn'].":".$_POST['name'].":"$_POST['age'].":".$_POST['city'];
	if(File_exists("studentdata.txt"))
	{
		 $fh = fopen("studentdata.txt", "a"); 
		fwrite($fh,$x); 
    fclose($fh); 
	}
	else
	{
				 $fh = fopen("studentdata.txt", "w"); 
		fwrite($fh,$x); 
    fclose($fh); 
	}
	/*$txt = "kkk.txt"; 
	c
   $txt=$_POST['ssn'].' : '.$_POST['name'].' : '.$_POST['age'].' : '.$_POST['city']; 
   file_put_contents('kkk.txt',$txt."\n",FILE_APPEND);  
   exit();
}
    fwrite($fh,$txt); 
    fclose($fh); */
    ?>