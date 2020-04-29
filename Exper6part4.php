<html>
<head>
<title> Exper6part4 </title>
<h1>Innovative Learning Center </h1>
</head>
<body bgcolor="green">
<form method ="post">
ROLL NO :<input type ="number" name ="rollno"></br>
NAME    :<input type="text" name = "name"></br>
AGE     :<input type="text" name="age"></br>
SUBMIT  :</td><td><input type="submit" name="submit"></br>
</form>

<?php 
  $f="\r\n";
if(isset($_POST["submit"]))
{   

    $rollno=$_POST["rollno"];
    $name=$_POST["name"];
    $age=$_POST["age"];
    $result = "$rollno:$name:$age";
    $myfile = fopen("studentdetailss.txt",'a');
    fwrite($myfile,$result);
	fwrite($myfile,$f);
    echo readfile("studentdetailss.txt");
    fclose($myfile);
}
show_source("Exper6part4.php");
?>
</body>
</html>