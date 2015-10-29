<?php
$submit = $_POST['submit'];
//Form data
$fullname = strip_tags($_POST['fulname']);
$username = strtolower(strip_tags($_POST['username']));
//$gender=$_POST['g'];
//$marital=$_POST['marital'];
//$nationality=$_POST['nationality'];
//$mobile=$_POST['mobile'];
$email = $_POST['email'];
$password = strip_tags($_POST['password']);
$retypepassword = strip_tags($_POST['retypepassword']);
$date = date('Y-m-d');
if ($submit) {
    //open database.
    $connect = mysql_connect("localhost", "root", "");
    mysql_select_db("site_mine");
    $namecheck = mysql_query("SELECT username FROM users WHERE username= '$username'");
    $count = mysql_num_rows($namecheck);
    //echo "$count";
    // die();
    if ($count != 0) {
        die("Username already taken !!!");
    }
    // echo "$fullname/$username/$password/$retypepassword";
    //Check for existance.
    if ($fullname && $username && $password && $retypepassword) {

        if ($password == $retypepassword) {
            //Check character length and username.
            if (strlen($username) > 25 || strlen($fullname) > 25) {
                echo "Length of user and fullname are too long.";
            } else {
                //Check password
                if (strlen($password) > 25 || strlen($password) < 6) {
                    echo "Password must be between 6 and 25 Characters.";
                } else {
                    // Register the user.
                    // encrypted password
                    $password = md5($password);
                    $retypepassword = md5($retypepassword);
                    //  echo "success.";


                    $queryreg = mysql_query(" 
                  INSERT INTO users VALUES ('','$fullname','$username','$password','$date')
                        
");
                  
                    echo "You have been registered.!!!!";
 //die("You have been registered.!!");
                    
                }
            }
        } else {
            die("Your password doesn't match.!");
        }
    } else {
        echo "Please fill in all Fields.!!";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>IT|Soft_Solution</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
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
                    <div class="header_img"><img src="images/main_img.png" alt="" width="271" height="234" />
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
                            <form action="register.php" method="post" name="reg" id="reg" class="select" >
                                <table cellpadding="5" border="0"  align="center" class="table">

                                    <a href="#" name="personal" /> </a>
                                    <tr>
                                        <td colspan="4"><span class="blue">Personal Information :</span></td>
                                    </tr>

                                    <tr>
                                        <td><label for="firstname" />Full Name:</label></td>
                                        <td><input type="text" name="fulname" id="fulname" size="20" class="input" value="<?php echo "$fullname"; ?>"  /></td>
                                    </tr>
                                    <tr>     
                                        <td><label for="lastname" />User Name:</label></td>
                                        <td><input type="text" name="username" id="username" size="20" class="input" value="<?php echo "$username"; ?>"  /> </td>
                                    </tr>
                                    <!--    
                                     <tr>
                                         <td>Date of Birth:</td>
                                         <td name="birth">
                                             <SELECT name="day" id="day" class="select" >
                                                 <option value="day" selected>day</option>
                                                 <option value="01" >01</option>
                                                 <option value="02" >02</option>
                                                 <option value="03" >03</option>
                                                 <option value="04" >04</option>
                                                 <option value="05" >05</option>
                                                 <option value="06" >06</option>
                                                 <option value="07" >07</option>
                                                 <option value="08" >08</option>
                                                 <option value="09" >09</option>
                                                 <option value="10" >10</option>
                                                 <option value="11" >11</option>
                                                 <option value="12" >12</option>
                                                 <option value="13" >13</option>
                                                 <option value="14" >14</option>
                                                 <option value="15" >15</option>
                                                 <option value="16" >16</option>
                                                 <option value="17" >17</option>
                                                 <option value="18" >18</option>
                                                 <option value="19" >19</option>
                                                 <option value="20" >20</option>
                                                 <option value="21" >21</option>
                                                 <option value="22" >22</option>
                                                 <option value="23" >23</option>
                                                 <option value="24" >24</option>
                                                 <option value="25" >25</option>
                                                 <option value="26" >26</option>
                                                 <option value="27" >27</option>
                                                 <option value="28" >28</option>
                                                 <option value="29" >29</option>
                                                 <option value="30" >30</option>
                                                 <option value="31" >31</option>
                                             </SELECT>
                                             <SELECT name="month" id="month" class="select" >
                                                 <option value="mon" selected>mon</option>
                                                 <option value="1" >Jan</option>
                                                 <option value="2" >Feb</option>
                                                 <option value="3" >Mar</option>
                                                 <option value="4" >Apr</option>
                                                 <option value="5" >May</option>
                                                 <option value="6" >Jun</option>
                                                 <option value="7" >Jul</option>
                                                 <option value="8" >Aug</option>
                                                 <option value="9" >Sep</option>
                                                 <option value="10" >Oct</option>
                                                 <option value="11" >Nov</option>
                                                 <option value="12" >Dec</option>
                                             </SELECT>
                             
                                             <SELECT name="year" id="year" class="select" >
                                                 <option value='-1' Selected>year</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option><option value='1950'>1950</option><option value='1949'>1949</option><option value='1948'>1948</option><option value='1947'>1947</option><option value='1946'>1946</option><option value='1945'>1945</option><option value='1944'>1944</option><option value='1943'>1943</option><option value='1942'>1942</option><option value='1941'>1941</option><option value='1940'>1940</option><option value='1939'>1939</option><option value='1938'>1938</option><option value='1937'>1937</option><option value='1936'>1936</option>
                                             </SELECT>
                                         </td>
                                    -->
                                  <!-- <td>Gender:</td>
                            
                                   <td>
                            
                            
                                       <input type="radio" name="g" value="male" />Male  
                                       <input type="radio" name="g" value="female" />Female    
                                   </td>
                               </tr>
                               <tr>
                                   <td>Marital Status: </td> 
                                   <td>
                                       <select name="marital" id="marital" class="select" />
                               <option value="" selected />Select </option>
                               <option value="married" /> Married </option>
                               <option value="unmarried" />Unmarried </option>
                               </tr><tr>        
                               </select>
                               </td>
                               <td>Nationality:</td>
                               <td>
                                   <input type="text" name="nationality" id="nationality" class="input" size="20" /></input>
                               </td>
                               </tr>
                                    <!--
                                    <tr> 
                                        <td>Address:</td>
                                        <td colspan="3">
                                            <input type="text" name="address" id="address" class="input" size="73" /></input>
                                        </td>
                                    </tr> --> <!--
                                    <tr> 
                                        <td>Mobile:</td>
                                        <td>
                                            <input type="text" name="mobile" id="mobile" class="input" size="20" /></input>
                                        </td>
                                    <!--
                                     <td>Land Line:</td>
                                     <td>
                                         <input type="text" name="landline" id="landline" class="input" size="20" /></input>
                                     </td> 
                                 </tr>
                            
                                 <tr>
                                     <td>E-mail Address:</td>
                                     <td>
                                         <input type="email" name="email" id="email" size="20" class="input" />
                                     </td>  
                                 </tr>
                                  
                                 <tr>
                                     <td>&nbsp;</td>
                                     <td colspan="3">
                                         <input type="checkbox" name="news" id="news" /> I want to get updates and newsletter in this email address. </input>
                                     </td>
                                 </tr> -->
                                  <!--  <tr>
                                        <td>E-mail Address:</td>
                                        <td>
                                            <input type="email" name="email" id="email" size="20" class="input" />
                                        </td>  
                                    </tr> -->
                                    <tr>
                                        <td>Password:</td>
                                        <td>
                                            <input type="password" name="password" id="password" size="20" class="input" />
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Retype Password:</td>
                                        <td>
                                            <input type="password" name="retypepassword" id="retypepassword" size="20" class="input" />
                                        </td>  
                                    </tr>

                                    <tr>
                                        <td colspan="4" align="center" >
                                            <input type="submit" value="Submit"  name="submit"    class="register"/>
                                        </td>
                                    </tr> 
                                </table>
                            </form>
                        </div>   

                    </div> 
                    <div class="sidebar">
                        <div class="search">
                            <form id="form" name="form" method="post" action="#">
                                <span>
                                    <input name="q" type="text" class="keywords" id="textfield" maxlength="50" value="Search..." />
                                    <input name="b" type="image" src="images/search.gif" class="button" />
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
                                <li><a href="usr_reg.php">Register</a></li>
                            </ul>
                        </div>
                        <div class="gadget">
                            <h2>Wise Words</h2>
                            <div class="clr"></div>
                            <p> <img src="images/test_1.gif" alt="" width="19" height="20" /> <em>We can let circumstances rule us, or we can take charge and rule our lives from within </em>.<img src="images/test_2.gif" alt="" width="19" height="20" /></p>
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
                        <a href="#"><img src="images/gallery_1.jpg" width="58" height="58" alt=""/></a> <a href="#"><img src="images/gallery_2.jpg" width="58" height="58" alt=""/></a> <a href="#"><img src="images/gallery_3.jpg" width="58" height="58" alt=""/></a> <a href="#"><img src="images/gallery_4.jpg" width="58" height="58" alt=""/></a> <a href="#"><img src="images/gallery_5.jpg" width="58" height="58" alt=""/></a> <a href="#"><img src="images/gallery_6.jpg" width="58" height="58" alt=""/></a>
                    </div>
                    <div class="col c2">
                        <h2><span>Contact</span></h2>
                        <p>Mail:<a href="#">opucse8@gmail.com</a> <br />Mobile :01917821640
                        </p>
                    </div>
                    <div class="clr"></div>

                </div>
                <div class="footer">
                    <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
                    <p class="rf">Designed by <a href="#">Gazi_opu</a></p>
                    <div class="clr"></div>
                </div>
            </div>
        </div>

    </body>
</html>
