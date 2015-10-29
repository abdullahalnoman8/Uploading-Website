<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("site_mine", $con);

$sql="SELECT * FROM software";
$result = mysql_query($sql);

echo "<table border='2' align='center' style='border-collapse:collapse;'>";
echo "<tr bgcolor='black'><th>No.</th><th>Image</th><th>Software</th><th>Download</th></tr>";

while($row = mysql_fetch_array($result))
  {
  $link         = $row['link'];
  $soft_name    = $row['soft_name'];
  $images_field = $row['image'];
  $image_show= "./uploads/$images_field";
  echo "<tr><td>".$row["soft_id"]."</td><td><img src=". $image_show." width='180' height='80'></td><td>".$soft_name."</td> <td><a href='$link'> Click</a> </td></tr>";

  }
  
 echo "</table>"; 

mysql_close($con);
?>
