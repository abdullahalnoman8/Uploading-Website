
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>E Book</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/table.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <?php
        /* include('LIB.php');
        
         $query = 'SELECT `bk_name` ,`writters` from `ebook` WHERE `e_id` >=1 ';
         $find_link ='SELECT `link` from ebook WHERE `e_id` >=1';
         $header=array('Book Name','Writters','Download');
         $title_text='All Books';

         $myoutput=ebook_view('root','','site_mine',$title_text,$header,$query);
         echo $myoutput;*/
        $con = mysql_connect("localhost", "root");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }

        mysql_select_db("site_mine", $con);

        $sql = "SELECT * FROM ebook";
        $result = mysql_query($sql);
        echo "<div id='table_div'>"; 
        echo "<h2 align='center' id='h2'>All E Book</h2>";
        echo '<table border="3" align="center"  id="table">';
        echo "<tr class='tr'><th>Book Name</th><th>Writters</th><th>Download</th></tr>";

        while ($row = mysql_fetch_array($result)) {
            $link = $row['link'];
            $bk_name = $row['bk_name'];
            $writters = $row['writters'];
            echo "<tr class='tr'><td class='td'>" . $bk_name . "</td><td class='td'>" . $writters . "</td> <td class='link'><a href='$link'> Click</a> </td></tr>";
        }

        echo "</table>";
        echo "</div>";

        mysql_close($con);
        ?>
    </body>
</html>
