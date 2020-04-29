<html>
  <head>
    <title>Syllabus</title>
	    <center>
	<h3> Create Syllabus of any course of Innovative Learning Center using File handling.</h3>
 
  </head>
  <body bgcolor="green">

    <form method="post">
      Course Code:<input type="text" name="ccode"><br>
      Course Name:<input type="text" name="cname"><br>
      Subject:<textarea name="subject_1"></textarea><br>
      Subject:<textarea name="subject_2"></textarea><br>
      Subject:<textarea name="subject_3"></textarea><br>
     <input type="submit" name="submit">
    </form>
  </center>
    <?php
    if(isset($_POST["submit"])){
      $ccode = $_POST["ccode"];
      $cname = $_POST["cname"];
      $subject_1 = $_POST["subject_1"];
      $subject_2 = $_POST["subject_2"];
      $subject_3 = $_POST["subject_3"];
      $result = "<table border=2>
                <tr>
                  <th colspan=2>Course Code</th>
                  <th colspan=2>Course Name</th>
                  
                </tr>
                <tr>
                  <td colspan=2>$ccode</td>
                  <td colspan=2>$cname</td>
                  
                </tr>
                <tr>
                    <th>Subject1
                      <td colspan=2>$subject_1</td>
                    </th>
                </tr>
                <tr>
                    <th>Subject2
                      <td colspan=2>$subject_2</td>
                    </th>
                </tr>
                <tr>
                    <th>Subject3
                      <td colspan=2>$subject_3</td>
                    </th>
                </tr>
                </table>";
      $TagCode = '<body>'.$result.'</body>';
      $newContent = $TagCode;
      $myfile = fopen("syllabus.html", "a+");
      fwrite($myfile, $newContent);
      fclose($myfile);
    }
	show_source("Exper4part5.php");
     ?>
  </body>
</html>