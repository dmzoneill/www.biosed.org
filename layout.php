<?php

/**
 * Shared page layout for the biosed.org pages.
 *
 * @param string $pageText     HTML shown in the main content cell.
 * @param string $pageKeywords Optional meta keywords.
 */
function renderPage(string $pageText, string $pageKeywords = ''): void
{
    ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <?php if ($pageKeywords !== '') : ?>
<meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <?php endif; ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>biosed dot org</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="859"  border="1" class="tables">
  <tr class="tables">
    <td width="148" height="147" align="left" valign="top" nowrap class="tables"><img name="biosed_MENU"
      src="biosed_MENU.jpg" width="250" height="143" border="0" usemap="#m_biosed_MENU" alt="">
      <map name="m_biosed_MENU">
        <area shape="rect" coords="65,125,153,137" href="about.php" alt="" >
        <area shape="rect" coords="94,99,169,114" href="links.php" alt="" >
        <area shape="rect" coords="105,78,250,89" href="projects.php" alt="" >
        <area shape="rect" coords="108,49,193,62" href="http://www.biosed.org/forum/portal.php" alt="" >
        <area shape="rect" coords="98,22,155,33" href="home.php" alt="" >
      </map></td>
    <td width="467" class="tables">
  <td width="74" class="tables">

    <?php renderRandomImages('photo/31-07-04/slides/', 5); ?>
  </tr>
  <tr align="center" valign="middle">
  <td height="208" colspan="3" class="tables"><table width="573" height="179" border="0">
    <tr>
      <td height="175" align="left" valign="top"><p class="text"><?php echo $pageText; ?></p>
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
</body>
</html>
    <?php
}

/**
 * Print a scrolling marquee of randomly chosen images from a folder.
 *
 * Based on the random image script by Matt Mullenweg (photomatt.net).
 *
 * @param string $folder Relative path to the image folder, with trailing slash.
 * @param int    $count  Number of images to show.
 */
function renderRandomImages(string $folder, int $count): void
{
    $files = [];
    $handle = opendir($folder);
    if ($handle !== false) {
        while (($file = readdir($handle)) !== false) {
            if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file) === 1) {
                $files[] = $file;
            }
        }
        closedir($handle);
    }

    echo '<marquee bgcolor=#ffffff direction=up height=100 onMouseOut=this.scrollAmount=1 ';
    echo 'onMouseOver=this.scrollAmount=0 scrollamount=1 width=156>';
    echo '<font color=#000000 ';
    echo 'face="arial, verdana, Times, serif" size=1> <b> ';
    if ($files !== []) {
        for ($n = 0; $n < $count; $n++) {
            echo '<img src="' . $folder . $files[array_rand($files)] . '"  width="250" height="143">';
        }
    }
    echo '</marquee>';
}
