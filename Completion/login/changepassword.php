<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$user= $_SESSION['username'];

if($user){
    if($_POST['submit']){
   // Starting change password.
        $oldpassword= md5( $_POST['oldpassword']);
        $newpassword= md5( $_POST['newpassword']);
        $retypepassword= md5($_POST['retypepassword']);
        //Check password against db
        //connect db
        $connect = mysql_connect("localhost", "root", "") or die("could not connect");
        mysql_select_db("site_mine") or die("couldn't find db");
        
        $queryget = mysql_query("SELECT password FROM users WHERE username='$user'") or die("Query didn't work. ") ;
        $row = mysql_fetch_assoc($queryget);
        
       
        $oldpassworddb= $row['password'];
       //check password
        if($oldpassword==$oldpassworddb){
            //check two new password
            if($newpassword==$retypepassword){
                //success
                //echo "success!!";
                $querychange= mysql_query("UPDATE users SET password= '$newpassword' WHERE username='$user' " );
                session_destroy();
                die("Your password has been Changed.<a href='../home.php'>Click here</a>to return main page. ");
            }else{
                die("New password does't match.");
            }
            
        }else{
            die("Old password doesn't match.");
        }
     
        
    }else{
   echo "<form action='changepassword.php' method='post'>
     
         Old Password: <input type='text' name='oldpassword'><p>
         New password: <input type='password' name='newpassword'><br/>
         Retype password: <input type='password' name='retypepassword'><br/><p>
         <input type='submit' name='submit' value='change password'/>
    
</form>
        
";}
    
}else{
    die("You must be logged in to change your password.");
}

?>
