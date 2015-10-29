<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

//echo "$username/$password";
if ($username && $password) {
    $connect = mysql_connect("localhost", "root", "") or die("could not connect");
    mysql_select_db("site_mine") or die("couldn't find db");

    $query = mysql_query("SELECT * FROM `users` WHERE `username`='$username' ");
    $numrows = mysql_num_rows($query);

    if ($numrows != 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $dbusername = $row['username'];
            $dbpassword = $row['password'];
        }
        // Check to see if they match.
        if ($username == $dbusername && md5($password) == $dbpassword) {
            // echo "you are in";
            $_SESSION['username'] = $username;
            //session_register("myusername");
            //session_register("mypassword");
            header("location:success.php");
        } else {
            die("Incorrect Password!!!");
        }
    } else {
        die("This user doesn't exist.!!!!");
    }
} else {
    die("Enter your username and password.!!!!");
}
?>

