<link href="css/up.css" rel="stylesheet" type="text/css"/>
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$con = mysql_connect("localhost", "root");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("site_mine", $con);

$sql = "SELECT * FROM software";
$result = mysql_query($sql);

echo "<div id='table_container'>";
echo "<h2 align='center'>Software</h2>";
echo "<table id='table'>";
echo "<tr bgcolor='black'><th>Image</th><th>Software</th><th>Download</th></tr>";

while ($row = mysql_fetch_array($result)) {
    $link = $row['link'];
    $soft_name = $row['soft_name'];
    $images_field = $row['image'];
    $image_show = "./uploads/$images_field";
    echo "<tr class='tr_class'><td class='row'><img src=" . $image_show . " width='180' height='80'></td><td class='row'>" . $soft_name . "</td> <td class='row'><a href='$link'> Click</a> </td></tr>";
}

echo "</table>";
echo "</div>";
mysql_close($con);
?>
