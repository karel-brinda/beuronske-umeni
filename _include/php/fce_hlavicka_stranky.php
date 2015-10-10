<?php
	function description ($hodnota)
	{
		global $hlavicka;
		$hlavicka .= "    <meta name=\"description\" content=\"$hodnota\" />\n";
		$hlavicka .= "    <meta name=\"DC.Description\" content=\"$hodnota\" />\n";
	}
	function keywords ($hodnota)
	{
		global $hlavicka;
		$hlavicka .= "    <meta name=\"keywords\" content=\"$hodnota\" />\n";
		$hlavicka .= "    <meta name=\"DC.Subject\" content=\"$hodnota\" />\n";
	}
	function styl ($adresa)
	{
		global $hlavicka;
		$hlavicka .= "    <link rel=\"stylesheet\" type=\"text/css\" href=\"_styly/$adresa\" media=\"screen\" />\n";
	}
	function titulek ($titulek)
	{
		global $hlavicka;
		$titulek =  $titulek . "";
		$hlavicka .= "    <title>$titulek</title>\n";
		$hlavicka .= "    <meta http-equiv=\"DC.Title\" content=\"$titulek\" />\n";
	}
	function samotny_titulek ($titulek)
	{
		global $hlavicka;
		$hlavicka .= "    <title>$titulek</title>\n";
		$hlavicka .= "    <meta http-equiv=\"DC.Title\" content=\"$titulek\" />\n";
	}
	function hlink ($jmeno,$adresa)
	{
		global $hlavicka;
		$hlavicka .= "    <link rel=\"$jmeno\" href=\"$adresa\" />\n";
	}
	function menu ($nazev,$adresa)
	{
		global $menu;
		$menu .= "<li><a href=\"$adresa\">$nazev</a></li>";
	}
?>
