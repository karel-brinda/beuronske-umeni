<?php

  require ('fce_hlavicka_stranky.php');

  if ( $_SERVER['REMOTE_ADDR'] == '127.0.0.1' ):
     $zakladni_adresa   = 'http://localhost/do/';
  else:
     $zakladni_adresa   = 'http://beuronske-umeni.brinda.info/';
  endif;


  function zahlavi ()
  {
    global $zakladni_adresa;
    global $tabulka;
    global $menu;

    header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Expires: Mon, 26 Jan 1996 02:00:00 GMT");
    header ("Pragma: no-cache");

    echo "<?xml version='1.0' encoding='iso-8859-2'?>\n";

    styl ('zaklad.css');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="cs" xml:lang="cs" xmlns="http://www.w3.org/1999/xhtml">
	<head>
<script language="JavaScript" src="_include/js/psaci-stroj.js">
</script>
<?php
   echo '		<base href="' . $zakladni_adresa . '" />'."\n";
   global $hlavicka;
   global $body;

   echo $hlavicka;
?>

		<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
		<meta http-equiv="content-script-type" content="text/javascript" />
		<meta http-equiv="content-style-type" content="text/css" />
		<meta http-equiv="expires" content="Sat 21 Jun 2003 20:04:00" />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="pragma" content="no-cache" />
		<meta http-equiv="imagetoolbar" content="no" />
		<meta name="robots"  content="index,follow" />
		<meta name="googlebot" content="index,follow,archive,snippet" />
		<meta name="webmaster" content="All: Karel Břinda, e-mail: karel@brinda.info, web: http://brinda.info" />
		<meta name="generator" content="PSPad editor, www.pspad.com" />
		<link rel="index" href="<?php echo $zakladni_adresa; ?>" />
		<link rel="start" href="<?php echo $zakladni_adresa; ?>" />
		<link rel="home" href="<?php echo $zakladni_adresa; ?>" />
		<meta http-equiv="content-language" content="cs" />
		<meta http-equiv="DC.Language" content="cs" />
		<link rel="stylesheet" type="text/css" href="_include/css/zaklad.css" />
	</head>
	<body <?php echo $body; ?>>

<?php

    if ($tabulka == true):
		echo "<table id=\"prochazeni\"><tr><td id=\"prochazeni-obsah\">";
    endif;


  }

  function zapati ()
  {
    global $tabulka;
    global $zakladni_adresa;
    global $menu;

    $dily = explode("/", $_SERVER["PHP_SELF"]);
    $cislo = sizeof ($dily);    
    $jmeno = $dily[$cislo-1];
    $jmeno = str_replace('.html', '', $jmeno);
    
    if (file_exists ('_img/pudorys/'.$jmeno.'.jpg')):
      $menu2 = "<img src=\"_img/pudorys/$jmeno.jpg\" width=\"150\" />";
      $ano = TRUE;
    endif;

    if ($tabulka == true):
    	echo "</td><td id=\"prochazeni-menu\">$menu2<div";
      if ($ano) echo " id=\"nahoru\"";
      echo "><h3>Akce:</h3><ul>$menu</ul></div></td></tr></table>";
    endif;
?>

		<div style="color:#eeeeee">
			Webmaster: <a href="http://brinda.cz" style="color:#eeeeee">Karel Břinda</a>
		</div>
<?php
		/* <div style="visibility:none">
		    <!-- pocitadlo.cz  pocitadlo:60526  uzivatel:14736 -->
			<script language="JavaScript" type="text/javascript">
			<!-- <![CDATA[
			Tmp=Math.floor(1000000 * Math.random());
			document.write('<scr' + 'ipt src="http://cnt1.pocitadlo.cz/counter.php?poc=60526&amp;ref='+escape(top.document.referrer)+'&amp;depth='+screen.colorDepth+'&amp;width='+screen.width+'&amp;height='+screen.height+'&amp;tmp='+Tmp+'" language="JavaScript" type="text/javascript"></scr' + 'ipt>');
			//]]> -->
			</script>
			
			<noscript>
				<img src="http://cnt1.pocitadlo.cz/counter.php?poc=60526&amp;ns=1" width="1" height="1" alt="Počítadlo těchto stránek" border="0" />
			</noscript>
			<!-- pocitadlo.cz konec -->

		</div> */
?>

	</body>
</html>

<?php

  }
?>
