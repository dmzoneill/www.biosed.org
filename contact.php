<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Irish Networking - Contact us</title>
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

    <div id="bannerContainer">
      <div id="navcontainer">
        <ul>
          <li><a href="index.html">Information</a></li>
 <li><a href="Login.php">Login</a></li>
          <li><a href="contact.php"
             id="current"
             name="current">Contact us</a></li>
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

    <div id="contentContainer">
      <div id="content">
        <? 
        $email = $_POST["email"];
        $comments = $_POST["comments"];
        $name = $_POST["name"];
        $subject = $_POST["subject"];
        $msg = "Name: " . $name ."  Comments: " . $comments;
        $headers .= "From: $name <$email>";
        if($email)
        {
        $sent = mail("irishnetworking@irishnetworking.com", $subject, $msg, $headers);
        }
        if($sent)
        {
        echo "<strong>Thank you, your email has been sent.</strong>";
        $sent = "";
        $msg = "";
        $subject = "";
        $headers = "";
        $comments = "";
        $name = "";
        }
        elseif ($name || $subject || $comments)
         { 
        echo "<strong>Error, Mail not sent.</strong>" ;
        } 
         else 
         {
        echo "<strong>Fill in the form below to send me an email.</strong>";
         } 
         ?>

        <form action="contact.php"
              method="post">
          <p>Your Name:
          <br />
          <input type="text"
                 name="name"
                 size="40" /></p>

          <p>Your Email:
          <br />
          <input type="text"
                 name="email"
                 size="40" /></p>

          <p>Message Subject:
          <br />
          <input type="text"
                 name="subject"
                 size="40" /></p>

          <p>Message:
          <br />
          <textarea name="comments"
                    rows="8"
                    cols="38">
</textarea></p>

          <p><input type="submit"
                 name="submitButtonName"
                 value="Send Mail" /></p>
        </form>
      </div>
    </div><!-- End Main content -->

    <br style="clear: both;" />

    <div id="footer">
      © 2005 Irish Networking
    </div>
  </div>
</body>
</html>
