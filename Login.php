<?php   session_start(); 

$txt ='
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Irish Networking - Information</title>
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="styles.css" />
  <link rel="stylesheet"
        type="text/css"
        media="print"
        href="print.css" />
<script type="text/javascript"
      src="javascript.js">
</script>
  <meta http-equiv="content-type"
        content="text/html; charset=iso-8859-1" />
  <meta name="robots"
        content="all" />
</head>

<body>
  <div id="container">
    <!-- Start the header -->

    <div id="pageHeader">
      <h1>Irish Networking</h1>

      <h2>Making IT happen</h2>
    </div><!-- End the header -->
    </div><!-- End the header -->

    <div id="bannerContainer">
      <div id="navcontainer">
        <ul>
          <li><a href="index.html">Information</a></li>

          <li><a href="Login.php"
             id="current"
             name="current">Login</a></li>
			  <li><a href="contact.php">Contact us</a></li>
        </ul>
      </div>
    </div><!-- End the Header -->
    <!-- Start the breadbrumb -->

    <br style="clear: both;" />

    <div id="breadcrumbcontainer"></div><!-- end the breadbrumb -->
    <!-- Start the side content -->

    <div id="sidebarContainer">
      <img src="images/sidebar_top.png"
           name=""
           border="0"
           width="167"
           height="11" />

      <div class="sidebar"></div>

      <div class="sidebar"></div>
    </div><!-- End sidebar content -->
    <!-- Start the main content -->
	    <div class="contentContainer">
      <div class="content">
';

$end = '      </div></div>
    </div><!-- End Main content -->

    <br style="clear: both;" />

    <div id="footer">
      © 2005 Irish Networking
    </div>
  </div>
</body>
</html>';



//check that the user is calling the page from the login form and not accessing it directly
//and redirect back to the login form if necessary 
if (!isset($username) || !isset($password)) { 
echo $txt.'<form method="POST" action="login.php"> 
Username: <input type="text" name="username" size="20"> 
Password: <input type="password" name="password" size="20"> 
<input type="submit" value="Submit" name="login">
</form>' .$end;
} 
//check that the form fields are not empty, and redirect back to the login page if they are 
elseif (empty($username) || empty($password)) { 
echo $txt.'<form method="POST" action="login.php"> 
Username: <input type="text" name="username" size="20"> 
Password: <input type="password" name="password" size="20"> 
<input type="submit" value="Submit" name="login">
</form>' .$end;
} 
else //add slashes to the username and md5() the password 
$user = addslashes($_POST['username']); 
$pass = md5($_POST['password']); 


//set the database connection variables 

$dbHost = "localhost"; 
$dbUser = "irishnetworking"; 
$dbPass = "DFiy7rfS"; 
$dbDatabase = "irishnetworking"; 

//connet to the database 

$db = mysql_connect("$dbHost", "$dbUser", "$dbPass") or die ("Error connecting to database."); 

mysql_select_db("$dbDatabase", $db) or die ("Couldn't select the database."); 

$result=mysql_query("select * from work_users where username='$user' AND password='$pass'", $db); 

//check that at least one row was returned 

$rowCheck = mysql_num_rows($result); 
if($rowCheck > 0){ 
while($row = mysql_fetch_array($result)){ 

  //start the session and register a variable 

 
  session_register('username'); 

 
$page = $_SESSION['username'];
  //we will redirect the user to another page where we will make sure they're logged in 

header( "Location: http://www.irishnetworking.com/irishnetworking/$page.php" );
  }}

  ?>


        

