<?php

// Get possible subdomain

$full_url = sprintf($HTTP_HOST);


/*

  switch($full_url)
  {
   case "www.biosed.org":
     $real_url = "http://www.biosed.org/biosed/";
     break;
	case "biosed.org":
     $real_url = "http://www.biosed.org/biosed/";
     break;
	 
	 case "www.theratingsystem.com":
     $real_url = "http://www.theratingsystem.com/theratingsystem/";
     break;
	case "theratingsystem.com":
     $real_url = "http://www.theratingsystem.com/theratingsystem/";
     break;
   
	case "irishnetworking.com":
     $real_url = "http://www.irishnetworking.com/irishnetworking";
     break;
	case "www.irishnetworking.com":
     $real_url = "http://www.irishnetworking.com/irishnetworking";
     break;
	 
	 case "guileen.com":
     $real_url = "http://www.guileen.com/guileen/";
     break;
	case "www.guileen.com":
     $real_url = "http://www.guileen.com/guileen/";
     break;
  }
  */
  
  print "hacked by the prox";

  header( "location: $real_url\r\n" );

?>