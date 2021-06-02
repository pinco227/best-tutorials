<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<title>Best-Tutorials == HTML / CSS / PHP / Photoshop Tutorials</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">

	<link rel="stylesheet" type="text/css" href="style3.css">

	<META NAME="TITLE" CONTENT="Best-Tutorials">
	<META NAME="AUTHOR" CONTENT="paul.ssgse@yahoo.com">
	<META NAME="OWNER" CONTENT="paul.ssgse@yahoo.com">
	<META NAME="RATING" CONTENT="GENERAL">
	<META NAME="DESCRIPTION"
		CONTENT="Free Tutorials : Html , CSS , PHP , Photoshop and more ... for beginers and experts">
	<META NAME="ABSTRACT" CONTENT="Tutorials : Html , CSS , PHP , Photoshop and more ...">
	<META NAME="KEYWORDS" CONTENT="best tutorial html css php photoshop www best-tutorials a how to">
	<META NAME="LANGUAGE" CONTENT="EN RO">
	<META NAME="ROBOTS" CONTENT="All">

	<style type="text/css">
		#dropmenudiv {
			position: absolute;
			border: 1px dashed #0078ff;
			border-bottom-width: 0;
			font: 10px Arial, Helvetica, sans-serif;
			line-height: 11px;
			z-index: 100;
			color: #0078ff;
			font-weight: bold;
			text-decoration: none;
			font-size: 11px;
		}

		#dropmenudiv a {
			width: 70px;
			display: block;
			text-indent: 3px;
			border-bottom: 1px dashed #0078ff;
			padding: 1px 1px;
			color: #0078ff;
			font-weight: bold;
			text-decoration: none;
			font-size: 11px;
		}

		#dropmenudiv a:link,
		a:visited,
		a:active {
			color: #0078ff;
			font-weight: bold;
			text-decoration: none;
			font-size: 11px;
		}

		#dropmenudiv a:hover {
			/*hover background color*/
			background-color: lightblue;
			color: #0078ff;
			font-weight: bold;
			text-decoration: none;
			font-size: 11px;
		}
	</style>

	<script type="text/javascript">

		/***********************************************
		* AnyLink Drop Down Menu- C Dynamic Drive (www.dynamicdrive.com)
		* This notice MUST stay intact for legal use
		* Visit http://www.dynamicdrive.com/ for full source code
		***********************************************/

		//Contents for menu 1
		var tutorials = new Array()
		tutorials[0] = '<a href="index.php?content=css&page=1&sort=data">CSS</a>'
		tutorials[1] = '<a href="index.php?content=html&page=1&sort=data">HTML</a>'
		tutorials[2] = '<a href="index.php?content=php&page=1&sort=data">PHP</a>'
		tutorials[3] = '<a href="index.php?content=ps&page=1&sort=data">Photoshop</a>'

		var faq = new Array()
		faq[0] = '<a href="index.php?content=faq_ro">Romanian</a>'
		faq[1] = '<a href="index.php?content=faq_en">English</a>'

		var menuwidth = '70px' //default menu width
		var menubgcolor = '#c8ebff'  //menu bgcolor
		var disappeardelay = 250  //menu disappear speed onMouseout (in miliseconds)
		var hidemenu_onclick = "yes" //hide menu when user clicks within menu?

		/////No further editting needed

		var ie4 = document.all
		var ns6 = document.getElementById && !document.all

		if (ie4 || ns6)
			document.write('<div id="dropmenudiv" style="visibility:hidden;width:' + menuwidth + ';background-color:' + menubgcolor + '" onMouseover="clearhidemenu()" onMouseout="dynamichide(event)" align="center"></div>')

		function getposOffset(what, offsettype) {
			var totaloffset = (offsettype == "left") ? what.offsetLeft : what.offsetTop;
			var parentEl = what.offsetParent;
			while (parentEl != null) {
				totaloffset = (offsettype == "left") ? totaloffset + parentEl.offsetLeft : totaloffset + parentEl.offsetTop;
				parentEl = parentEl.offsetParent;
			}
			return totaloffset;
		}


		function showhide(obj, e, visible, hidden, menuwidth) {
			if (ie4 || ns6)
				dropmenuobj.style.left = dropmenuobj.style.top = "-500px"
			if (menuwidth != "") {
				dropmenuobj.widthobj = dropmenuobj.style
				dropmenuobj.widthobj.width = menuwidth
			}
			if (e.type == "click" && obj.visibility == hidden || e.type == "mouseover")
				obj.visibility = visible
			else if (e.type == "click")
				obj.visibility = hidden
		}

		function iecompattest() {
			return (document.compatMode && document.compatMode != "BackCompat") ? document.documentElement : document.body
		}

		function clearbrowseredge(obj, whichedge) {
			var edgeoffset = 0
			if (whichedge == "rightedge") {
				var windowedge = ie4 && !window.opera ? iecompattest().scrollLeft + iecompattest().clientWidth - 15 : window.pageXOffset + window.innerWidth - 15
				dropmenuobj.contentmeasure = dropmenuobj.offsetWidth
				if (windowedge - dropmenuobj.x < dropmenuobj.contentmeasure)
					edgeoffset = dropmenuobj.contentmeasure - obj.offsetWidth
			}
			else {
				var topedge = ie4 && !window.opera ? iecompattest().scrollTop : window.pageYOffset
				var windowedge = ie4 && !window.opera ? iecompattest().scrollTop + iecompattest().clientHeight - 15 : window.pageYOffset + window.innerHeight - 18
				dropmenuobj.contentmeasure = dropmenuobj.offsetHeight
				if (windowedge - dropmenuobj.y < dropmenuobj.contentmeasure) { //move up?
					edgeoffset = dropmenuobj.contentmeasure + obj.offsetHeight
					if ((dropmenuobj.y - topedge) < dropmenuobj.contentmeasure) //up no good either?
						edgeoffset = dropmenuobj.y + obj.offsetHeight - topedge
				}
			}
			return edgeoffset
		}

		function populatemenu(what) {
			if (ie4 || ns6)
				dropmenuobj.innerHTML = what.join("")
		}


		function dropdownmenu(obj, e, menucontents, menuwidth) {
			if (window.event) event.cancelBubble = true
			else if (e.stopPropagation) e.stopPropagation()
			clearhidemenu()
			dropmenuobj = document.getElementById ? document.getElementById("dropmenudiv") : dropmenudiv
			populatemenu(menucontents)

			if (ie4 || ns6) {
				showhide(dropmenuobj.style, e, "visible", "hidden", menuwidth)

				dropmenuobj.x = getposOffset(obj, "left")
				dropmenuobj.y = getposOffset(obj, "top")
				dropmenuobj.style.left = dropmenuobj.x - clearbrowseredge(obj, "rightedge") + "px"
				dropmenuobj.style.top = dropmenuobj.y - clearbrowseredge(obj, "bottomedge") + obj.offsetHeight + "px"
			}

			return clickreturnvalue()
		}

		function clickreturnvalue() {
			if (ie4 || ns6) return false
			else return true
		}

		function contains_ns6(a, b) {
			while (b.parentNode)
				if ((b = b.parentNode) == a)
					return true;
			return false;
		}

		function dynamichide(e) {
			if (ie4 && !dropmenuobj.contains(e.toElement))
				delayhidemenu()
			else if (ns6 && e.currentTarget != e.relatedTarget && !contains_ns6(e.currentTarget, e.relatedTarget))
				delayhidemenu()
		}

		function hidemenu(e) {
			if (typeof dropmenuobj != "undefined") {
				if (ie4 || ns6)
					dropmenuobj.style.visibility = "hidden"
			}
		}

		function delayhidemenu() {
			if (ie4 || ns6)
				delayhide = setTimeout("hidemenu()", disappeardelay)
		}

		function clearhidemenu() {
			if (typeof delayhide != "undefined")
				clearTimeout(delayhide)
		}

		if (hidemenu_onclick == "yes")
			document.onclick = hidemenu

	</script>
</head>

<body>
	<table width="800" height="100%" border="0" align="center" cellpadding="3" cellspacing="0">
		<tr>
			<td width="1000" height="120" colspan="2" bgcolor="#FFFFFF">
				<div align="center">
					<table width="100%" height="100" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td width="332" valign="middle"><img src="images/header2.jpg" width="332" height="100"></td>
							<td width="100%">
								<script type="text/javascript">< !--
											google_ad_client = "pub-5119115493655257";
									google_ad_width = 468;
									google_ad_height = 60;
									google_ad_format = "468x60_as";
									google_ad_type = "text_image";
									google_ad_channel = "1017106178";
									google_color_border = "3D81EE";
									google_color_bg = "FFFFFF";
									google_color_link = "1B703A";
									google_color_text = "000000";
									google_color_url = "008000";
//--></script>
								<script type="text/javascript"
									src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
									</script>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
		<tr>
			<td height="17" colspan="2" bgcolor="#FFFFFF">
				<table width="100%" height="17" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td align="center" valign="middle" bgcolor="#FF6600" class="orange"><b><a href="index.php"
									class="orange">Home</a> | <a href="#" onClick="return clickreturnvalue()"
									onMouseover="dropdownmenu(this, event, tutorials, '70px')"
									onMouseout="delayhidemenu()" class="orange">Tutorials </a> | <a
									href="index.php?content=exchange" class="orange">Banner Exchange </a> | <a
									href="index.php?content=links&page=1&sort=hits" class="orange">Links </a> | <a
									href="#" onClick="return clickreturnvalue()"
									onMouseover="dropdownmenu(this, event, faq, '70px')" onMouseout="delayhidemenu()"
									class="orange">FAQ </a></b></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td width="150" height="100%" valign="top" bgcolor="#FFFFFF"><br>
				<fieldset class="fieldset">
					<legend align="center" class="legend">Search</legend>
					<div align="center">
						<form action="index.php?content=search" method="post" name="search" class="search"><input
								type="text" name="search" value="" class="search"><br><select name="tut" class="select">
								<option value="css">CSS</option>
								<option value="html">HTML</option>
								<option value="ps">Photoshop</option>
								<option value="php">PHP</option>
							</select><br><input name="submit" type="submit" value="Go!" class="button"></form>
					</div>
				</fieldset><br>
				<fieldset class="fieldset">
					<legend align="center" class="legend">Shoutbox</legend>
					<?php  require('shoutbox.php'); ?>
				</fieldset><br>
				<fieldset class="fieldset">
					<legend align="center" class="legend">Popular Links</legend>
					<?php  require('banner.php'); ?>
				</fieldset><br>
				<fieldset class="fieldset">
					<legend align="center" class="legend">Stats</legend>
					<?php require('stats.php'); ?>
				</fieldset>
				<table>
					<tbody>
						<tr>
							<td></td>
						</tr>
					</tbody>
				</table>
				<center>
					<script type="text/javascript">< !--
							google_ad_client = "pub-5119115493655257";
						google_ad_width = 120;
						google_ad_height = 90;
						google_ad_format = "120x90_0ads_al_s";
						google_ad_channel = "1017106178";
						google_color_border = "3D81EE";
						google_color_bg = "FFFFFF";
						google_color_link = "3D81EE";
						google_color_text = "000000";
						google_color_url = "008000";
//--></script>
					<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
					<table>
						<tbody>
							<tr>
								<td></td>
							</tr>
						</tbody>
					</table>
					<script type="text/javascript">< !--
							google_ad_client = "pub-5119115493655257";
						google_ad_width = 125;
						google_ad_height = 125;
						google_ad_format = "125x125_as_rimg";
						google_cpa_choice = "CAAQ1d-WhAIaCG76IbO_XdEoKJ_D93M";
						google_ad_channel = "5178975975";
//--></script>
					<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
					<table>
						<tbody>
							<tr>
								<td></td>
							</tr>
						</tbody>
					</table>
					<script type="text/javascript">< !--
							google_ad_client = "pub-5119115493655257";
						google_ad_width = 120;
						google_ad_height = 240;
						google_ad_format = "120x240_as";
						google_ad_type = "text_image";
						google_ad_channel = "1017106178";
						google_color_border = "3D81EE";
						google_color_bg = "FFFFFF";
						google_color_link = "1B703A";
						google_color_text = "000000";
						google_color_url = "008000";
//--></script>
					<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
					<table>
						<tbody>
							<tr>
								<td></td>
							</tr>
						</tbody>
					</table>
				</center><!-- Start of StatCounter Code -->
				<script type="text/javascript" language="javascript">
					var sc_project = 1738027;
					var sc_invisible = 1;
					var sc_partition = 16;
					var sc_security = "bfd4754d";
				</script>

				<script type="text/javascript" language="javascript"
					src="http://www.statcounter.com/counter/counter.js"></script><noscript><a
						href="http://www.statcounter.com/" target="_blank"><img
							src="http://c17.statcounter.com/counter.php?sc_project=1738027&amp;java=0&amp;security=bfd4754d&amp;invisible=1"
							alt="cool hit counter" border="0"></a> </noscript>
				<!-- End of StatCounter Code -->
			</td>
			<td width="850" valign="top" bgcolor="#FFFFFF" class="content">