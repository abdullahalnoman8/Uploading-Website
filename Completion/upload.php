<?php
$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'] . '<br/>';
$type = $_FILES['file']['type'];
$extension = strtolower(substr($name, strpos($name, '.') + 1));
//echo 'The extesion' . $extension;
$max_size = 1048576;
$tmp_name = $_FILES['file']['tmp_name'];
$softname = htmlentities($_POST['softname']);
$link = htmlentities($_POST['link']);

if (isset($name)) {
    if (!empty($name)) {
        if (($extension == 'jpg' || $extension == 'jpeg') && $type = 'image/jpeg' && $type = 'image/jpg' && $size <= $max_size && $softname != '' && $link != '') {
            $location = 'uploads/';
            if (move_uploaded_file($tmp_name, $location . $name)) {
                //echo 'Uploaded!!';
                $con = mysql_connect("localhost", "root"); //create and establish the database connection
                if (!$con) { // check if connnection is established or not.
                    die('Could not connect: ' . mysql_error());
                }

                mysql_select_db("site_mine", $con); //select a database with the connection
                //$sql="INSERT INTO student(first_name,last_name,email,password)VALUES ('$first_name','$last_name','$email',md5('$pwd'))"; //create a sql command
                $sql = "INSERT INTO software(soft_name,image,link) VALUES('$softname','$name','$link')";
                mysql_query($sql); // exert the sql command with the mysql_query() function
                mysql_close($con);  // closed database connection
                echo "Uploaded Successfully";
            } else {
                echo 'Error Found!!';
            }
        } else {
            echo 'The image must be jpg/jpeg format and 1mb or under1mb.';
        }
    } else {
        echo 'Please Chose a File!! Enter the all field correctly';
    }
}
?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <table border="5" align="center">
        <tr>
            <th colspan="2"> Software</th>
        </tr>
        <tr>
            <td>Image:</td>

            <td> <input type="file" name="file"/>
              <!--   <input type="submit" value="Submit" />--></td>
        </tr>
        <tr>
            <td>Soft_Name:</td>
            <td><input type="text" name="softname"/></td>
        </tr>
        <tr>
            <td>Link:</td>
            <td><input type="text" name="link"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Submit" /></td>
        </tr>
    </table>
</form>