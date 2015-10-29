<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
//echo "Welcome,".$_SESSION['username']. "!<br/> ";
//echo "<a href='logout'>Clock here</a> to logout.";
if(!session_is_registered("username")){
    header("location:../home.php");
}
 else {
    echo "Hi! Mr. $nbsp <b>" . $_SESSION['username'] . "</b> $nbsp  You are successfully logged in <br/> ";
    echo '<a href="logout.php">Log_Out</a>'."<br/>";
    //echo "<a href='changepassword.php'>Changepassword</a>";
    //header("location:something.php");
    echo '<a href="../upload.php">Upload</a>'."<br/>";
   
}
?>