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
    echo "<a href='changepassword.php'>Changepassword</a>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>IT|Soft_Solution</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="main">
            <div class="header">
                <div class="header_resize">
                    <div class="logo">
                        <h1><a href="home.html">Soft <span> Solution</span></a></h1>
                    </div>
                    <div class="menu_nav">
                        <ul>
                            <li class="active"><a href="home.php"><span>Home</span></a></li>
                            <li><a href="it_training.php"><span>IT Training</span></a></li>
                            <li><a href="#"><span>About Me</span></a></li>
                            <li><a href="tutorial.php"><span>Tutorial</span></a></li>
                            <li><a href="contact.php"><span>Contact</span></a></li>
                        </ul>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                    <div class="header_img"><img src="../images/main_img.png" alt="" width="271" height="234" />
                        <h2>Objective </h2>
                        <p><strong>This is my private site. </strong><br />
                            This site is for solving soft problem and making new software. </p>
                        <div class="clr"></div>
                    </div>
                </div>
            </div>
            <div class="clr"></div>
            <div class="content">
                <div class="content_resize">
                    <div class="mainbar">

                        <div class="article">
                            <h2><span>Aliquam Risus</span> Justo</h2>
                            <div class="clr"></div>
                            <p>Posted on 18. Sep, 2015 by Sara in Filed under templates, internet, with Comments 18</p>
                            <img src="../images/img_2.jpg" width="613" height="193" alt="" />
                            <div class="clr"></div>
                            <p>Pellentesque posuere enim et ipsum dignissim convallis. Proin quis molestie mauris. Nunc eget quam at nulla tempus tincidunt quis a mi. Aliquam ornare turpis non tellus molestie imperdiet. Phasellus sit amet neque vitae purus venenatis hendrerit. Phasellus non mi ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse potenti. Aenean vel varius sapien. Etiam leo quam, sodales vel ullamcorper ut, viverra a risus.</p>
                            <p>Maecenas dignissim mauris in arcu congue tincidunt. Vestibulum elit nunc, accumsan vitae faucibus vel, scelerisque a quam. Aenean at metus id elit bibendum faucibus. Curabitur ultrices ante nec neque consectetur a aliquet libero lobortis. Ut nibh sem, pellentesque in dictum eu, convallis blandit erat. Cras vehicula tellus nec purus sagittis id scelerisque risus congue. Quisque sed semper massa. Donec id lacus mauris, vitae pretium risus. Fusce sed tempor erat. </p>
                            <p><a href="#">Read more </a></p>     
                        </div>   

                    </div> 
                    <div class="sidebar">
                        <div class="search">
                            <form id="form" name="form" method="post" action="#">
                                <span>
                                    <input name="q" type="text" class="keywords" id="textfield" maxlength="50" value="Search..." />
                                    <input name="b" type="image" src="../images/search.gif" class="button" />
                                </span>
                            </form>
                        </div>
                        <div class="gadget">
                            <h2>Sidebar Menu</h2>
                            <div class="clr"></div>
                            <ul class="sb_menu">
                                <li><a href="home.php">Home</a></li>
                                <li><a href="photo.php">Photo</a></li>
                                <li><a href="software.php">Software</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Archives</a></li>
                                <li><a href="logout.php">Logout</a></li>
                                <li><a href="changepassword.php">Change password</a></li>
                            </ul>
                        </div>
                        <div class="gadget">
                            <h2>Wise Words</h2>
                            <div class="clr"></div>
                            <p> <img src="../images/test_1.gif" alt="" width="19" height="20" /> <em>We can let circumstances rule us, or we can take charge and rule our lives from within </em>.<img src="../images/test_2.gif" alt="" width="19" height="20" /></p>
                            <p style="float:right;"><strong>Earl Nightingale</strong></p>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>   
            </div>
            <div class="fbg">
                <div class="fbg_resize">
                    <div class="col c1">
                        <h2><span>Image Gallery</span></h2>
                        <a href="#"><img src="../images/gallery_1.jpg" width="58" height="58" alt=""/></a> <a href="#"><img src="../images/gallery_2.jpg" width="58" height="58" alt=""/></a> <a href="#"><img src="../images/gallery_3.jpg" width="58" height="58" alt=""/></a> <a href="#"><img src="../images/gallery_4.jpg" width="58" height="58" alt=""/></a> <a href="#"><img src="../images/gallery_5.jpg" width="58" height="58" alt=""/></a> <a href="#"><img src="../images/gallery_6.jpg" width="58" height="58" alt=""/></a>
                    </div>
                    <div class="col c2">
                        <h2><span>Contact</span></h2>
                        <p>Mail:<a href="#">opucse8@gmail.com</a> <br />Mobile :01917821640
                        </p>
                    </div>
                    <div class="clr"></div>

                </div>
                <div class="footer">
                    <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>. All right reserve.</p>
                    <p class="rf">Designed by <a href="#">Gazi_opu</a></p>
                    <div class="clr"></div>
                </div>
            </div>
        </div>

    </body>
</html>
