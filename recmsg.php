<?php
include_once 'config.php';
$result = mysqli_query($connection,"SELECT * FROM php");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>

    <td>First Name</td>
    <td>Last Name</td>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["fname"]; ?></td><br>
    <td><?php echo $row["lname"]; ?></td><br> 
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>