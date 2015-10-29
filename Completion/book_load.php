<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$load = htmlentities($_POST['submit']);
$bk_name = htmlentities($_POST['bk_name']);
$writters = htmlentities($_POST['writters']);
$link = htmlentities($_POST['link']);
if (isset($load)) {
    if (!empty($load)) {
        if ($bk_name != " " && $writters != "" && $link != "") {

            //echo "Ok";
            $con = mysql_connect("localhost", "root"); //create and establish the database connection
            if (!$con) { // check if connnection is established or not.
                die('Could not connect: ' . mysql_error());
            }

            mysql_select_db("site_mine", $con); //select a database with the connection
//$sql="INSERT INTO student(first_name,last_name,email,password)VALUES ('$first_name','$last_name','$email',md5('$pwd'))"; //create a sql command
            $sql = "INSERT INTO ebook(bk_name,writters,link) VALUES('$bk_name','$writters','$link')";
            mysql_query($sql); // exert the sql command with the mysql_query() function
            mysql_close($con);  // closed database connection
        } else {
            echo "Fill all the blanks properly.";
        }
    }
}

?>
<form action="book_load.php" method="POST" enctype="multipart/form-data">
    <table border="5" align="center">
        <tr>
            <th colspan="2"> E Book</th>
        </tr>
        <tr>
            <td>Book_Name:</td>
            <td><input type="text" name="bk_name"/></td>
        </tr>
        <tr>
            <td>Writters</td>
            <td><input type="text" name="writters"/></td>
        </tr>
        <tr>
            <td>Link:</td>
            <td><input type="text" name="link"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit" /></td>
        </tr>
    </table>
</form>