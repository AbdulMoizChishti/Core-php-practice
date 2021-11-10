
<?php
require_once "config.php";

if (isset($_REQUEST["submit"])){

  $name=$_REQUEST["fname"];
  $fathername=$_REQUEST["lname"];

    $ins="INSERT INTO php (fname, lname) VALUES ('$name','$fathername')";
    $query1=mysqli_query($connection,$ins);

    if($query1)
    {
      echo "Contact Records Inserted";
    }
}


?>



<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="sendmsg.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" ><br><br>
  <input type="submit" name="submit" value="submit">
</form> 


</body>
</html>