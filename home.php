<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta name="keywords" content="bios BIOS Bios biosed Biosed BIOSED biosed.org Biosed.org BIOSED.ORG Biosed BIOS bios">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>biosed dot org</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="859"  border="1" class="tables">
  <tr class="tables">
    <td width="148" height="147" align="left" valign="top" nowrap class="tables"><img name="biosed_MENU" src="biosed_MENU.jpg" width="250" height="143" border="0" usemap="#m_biosed_MENU" alt="">
      <map name="m_biosed_MENU">
        <area shape="rect" coords="65,125,153,137" href="about.php" alt="" >
        <area shape="rect" coords="94,99,169,114" href="links.php" alt="" >
        <area shape="rect" coords="105,78,250,89" href="projects.php" alt="" >
        <area shape="rect" coords="108,49,193,62" href="http://www.biosed.org/forum/portal.php" alt="" >
        <area shape="rect" coords="98,22,155,33" href="home.php" alt="" >
      </map></td>
    <td width="467" class="tables">
  <td width="74" class="tables">    
  
<?php
/*
    By Matt Mullenweg > http://photomatt.net
    Inspired by Dan Benjamin > http://hiveware.com/imagerotator.php
    Latest version always at:
    http://photomatt.net/scripts/randomimage
*/

// Make this the relative path to the images, like "../img" or "random/images/".
// If the images are in the same directory, leave it blank.
$folder = 'photo/31-07-04/slides/';

// Space seperated list of extensions, you probably won't have to change this.
$exts = 'jpg jpeg png gif';

$files = array(); $i = -1; // Initialize some variables
if ('' == $folder) $folder = './';
$handle = opendir($folder);
$exts = explode(' ', $exts);
while (false !== ($file = readdir($handle))) {
    foreach($exts as $ext) { // for each extension check the extension
        if (preg_match('/\.'.$ext.'$/i', $file, $test)) { // faster than ereg, case insensitive
            $files[] = $file; // it's good
            ++$i;
            }
        }
    }
closedir($handle); // We're not using it anymore
mt_srand((double)microtime()*1000000); // seed for PHP < 4.2
$rand = mt_rand(0, $i); // $i was incremented as we went along







echo '<marquee bgcolor=#ffffff direction=up height=100 onMouseOut=this.scrollAmount=1 ';
echo 'onMouseOver=this.scrollAmount=0 scrollamount=1 width=156>';
echo '<font color=#000000 ';
echo 'face="arial, verdana, Times, serif" size=1> <b> ';
echo '<img src="' . $folder.$files[$rand] . '"  width="250" height="143">'; // Voila!
$rand = mt_rand(0, $i); // $i was incremented as we went along
echo '<img src="' . $folder.$files[$rand] . '"  width="250" height="143">'; // Voila!
$rand = mt_rand(0, $i); // $i was incremented as we went along
echo '<img src="' . $folder.$files[$rand] . '"  width="250" height="143">'; // Voila!
$rand = mt_rand(0, $i); // $i was incremented as we went along
echo '<img src="' . $folder.$files[$rand] . '"  width="250" height="143">'; // Voila!
$rand = mt_rand(0, $i); // $i was incremented as we went along
echo '<img src="' . $folder.$files[$rand] . '"  width="250" height="143">'; // Voila!

echo '</marquee>';








?>

  </tr>
  <tr align="center" valign="middle">
  <td height="208" colspan="3" class="tables"><table width="573" height="179" border="0">
    <tr>
      <td height="175" align="left" valign="top"><p class="text">Okay, Site down for a while due to college etc....., All up and running again. Swaped the laptop and got a G5! Apple all the way! Kinda a strange, anyway more in my <a href="/blog" title="BLOG">BLOG</a></p>
        </td>
    </tr>
  </table> 
  </tr>
  <tr class="tables">
    <td height="130" class="tables">
	
	
	
	</td>
    <td class="tables">&nbsp;</td>
    <td class="tables"><img src="biosed_main.jpg" width="298" height="128"></td>
  </tr>
</table>
<?php
$code = 'function gd_info() {
       $array = Array(
                       "GD Version" => "",
                       "FreeType Support" => 0,
                       "FreeType Support" => 0,
                       "FreeType Linkage" => "",
                       "T1Lib Support" => 0,
                       "GIF Read Support" => 0,
                       "GIF Create Support" => 0,
                       "JPG Support" => 0,
                       "PNG Support" => 0,
                       "WBMP Support" => 0,
                       "XBM Support" => 0
                     );
       $gif_support = 0;

       ob_start();
       eval("phpinfo();");
       $info = ob_get_contents();
       ob_end_clean();
    
       foreach(explode("\n", $info) as $line) {
           if(strpos($line, "GD Version")!==false)
               $array["GD Version"] = trim(str_replace("GD Version", "", strip_tags($line)));
           if(strpos($line, "FreeType Support")!==false)
               $array["FreeType Support"] = trim(str_replace("FreeType Support", "", strip_tags($line)));
           if(strpos($line, "FreeType Linkage")!==false)
               $array["FreeType Linkage"] = trim(str_replace("FreeType Linkage", "", strip_tags($line)));
           if(strpos($line, "T1Lib Support")!==false)
               $array["T1Lib Support"] = trim(str_replace("T1Lib Support", "", strip_tags($line)));
           if(strpos($line, "GIF Read Support")!==false)
               $array["GIF Read Support"] = trim(str_replace("GIF Read Support", "", strip_tags($line)));
           if(strpos($line, "GIF Create Support")!==false)
               $array["GIF Create Support"] = trim(str_replace("GIF Create Support", "", strip_tags($line)));
           if(strpos($line, "GIF Support")!==false)
               $gif_support = trim(str_replace("GIF Support", "", strip_tags($line)));
           if(strpos($line, "JPG Support")!==false)
               $array["JPG Support"] = trim(str_replace("JPG Support", "", strip_tags($line)));
           if(strpos($line, "PNG Support")!==false)
               $array["PNG Support"] = trim(str_replace("PNG Support", "", strip_tags($line)));
           if(strpos($line, "WBMP Support")!==false)
               $array["WBMP Support"] = trim(str_replace("WBMP Support", "", strip_tags($line)));
           if(strpos($line, "XBM Support")!==false)
               $array["XBM Support"] = trim(str_replace("XBM Support", "", strip_tags($line)));
       }
      
       if($gif_support==="enabled") {
           $array["GIF Read Support"]  = 1;
           $array["GIF Create Support"] = 1;
       }

       if($array["FreeType Support"]==="enabled"){
           $array["FreeType Support"] = 1;    }
 
       if($array["T1Lib Support"]==="enabled")
           $array["T1Lib Support"] = 1;   
      
       if($array["GIF Read Support"]==="enabled"){
           $array["GIF Read Support"] = 1;    }
 
       if($array["GIF Create Support"]==="enabled")
           $array["GIF Create Support"] = 1;   

       if($array["JPG Support"]==="enabled")
           $array["JPG Support"] = 1;
          
       if($array["PNG Support"]==="enabled")
           $array["PNG Support"] = 1;
          
       if($array["WBMP Support"]==="enabled")
           $array["WBMP Support"] = 1;
          
       if($array["XBM Support"]==="enabled")
           $array["XBM Support"] = 1;
      
       return $array;
   }';

if(!function_exists("gd_info")) eval($code);
?>
</body>
</html>