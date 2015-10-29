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

        $sql = "SELECT `link` from ebook WHERE `e_id` >=1";
        $result = mysql_query($sql);
         
       //  echo "<table border='3' align='center'  class='table'>";
       // echo "<tr class='tr'><th>No.</th><th>Book Name</th><th>Writters</th><th>Download</th></tr>";

        while ($row = mysql_fetch_array($result)) {
            $link = $row['link'];
            
            $bk_name = $row['bk_name'];
           $writters = $row['writters'];
           echo "<tr><td>" . $bk_name . "</td><td>" . $writters . "</td> <td><a href='$link'>Click</a></td></tr>";
          }
        //
       // echo "</table>";

        mysql_close($con);
?>
