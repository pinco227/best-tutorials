<?php
require('config.php');

include('header.php');

$siteurl = '.'; // fara bara dupa

if(!isset($_GET['content'])) $_GET['content'] = '';
switch($_GET['content'])
{

	case 'faq_en';
	echo '<a href="index.php">Index</a> > <a href="index.php?content=faq_en">English Frequently Asked Questions</a><br><p></p>';
	echo '<br><br>
<ol type="1">
<br>
<li><h5 align="left">What is CSS ?</h5>
CSS, short for Cascading Style Sheets, a new feature being added to HTML that gives both Web site developers <br>
and users more control over how pages are displayed. With CSS, designers and users can create style sheets that <br>
define how different elements, such as headers and links, appear. These Style Sheets can then be applied to any <br>
Web page.</li>
<br><br>
<li><h5 align="left">What is HTML ?</h5>
Hypertext Markup Language is the authoring software language used on the Internet\'s World Wide Web. HTML <br>
is used for creating World Wide Web pages.</li>
<br><br>
<li><h5 align="left">What is PHP ?</h5>
PHP is an HTML-embedded scripting language. Much of its syntax is borrowed from C, Java and Perl with a <br>
couple of unique PHP-specific features thrown in. The goal of the language is to allow web developers to write <br>
dynamically generated pages quickly. </li>
<br><br>
<li><h5 align="left">What is MySQL ?</h5>
MySQL (pronounced "my ess cue el") is an open source relational database management system (RDBMS) <br>
that uses Structured Query Language (SQL), the most popular language for adding, accessing, and processing <br>
data in a database. Because it is open source, anyone can download MySQL and tailor it to their needs in <br>
accordance with the general public license. MySQL is noted mainly for its speed, reliability, and flexibility.</li>
<br><br>
<li><h5 align="left">What is Photoshop ?</h5>
Adobe Photoshop is today\'s leading image / graphic paint program. It is the industry leader in providing the <br>
tools needed for maximum control of your graphical work. Algorithm ~ Internet Search Engines provide relevant <br>
Search Engine Result Pages (SERP\'s) to visitors that search the Internet. Each Search Engine has its own <br>
Algorithm in determining the relevance between the Search Query and Web pages, and attempts to returns the <br>
most revelant results.</li>
</ol><br>';
	break;

	case 'faq_ro';
	echo '<a href="index.php">Index</a> > <a href="index.php?content=faq_en">Romanian Frequently Asked Questions</a><br><p></p>';
	echo '<br><br>
<ol type="1">
<br>
<li><h5 align="left">Ce este CSS ?</h5>
Stilurile CSS pun la dispozitia creatorilor de site-uri web noi posibilitati de personalizare a paginilor HTML. <br>
Un stil reprezinta un mod de formatare exacta a unui bloc de text (spre exemplu anumite caracteristici pentru <br>
font, marime, culoare, aranjare in pagina, distantare fata de margini etc).</li>
<br><br>
<li><h5 align="left">Ce este HTML ?</h5>
HTML (Hyper Text Markup Language) este un limbaj pentru calculatoar. Ca si alte limbaje de calculator el e <br>
folosit sa creeze ceva. Este creeat pentru un singur lucru, pentru pagini web. Este foarte usor de invatat, este <br>
unul din cele mai usoare limbaje de calculator si poti sa-l inveti in cateva minute.</li>
<br><br>
<li><h5 align="left">Ce este PHP ?</h5>
PHP (se pronunta pe-has-pe) este un limbaj de programare ce ruleaza server, proiectat special pentru WEB. <br>
Intr-o pagina HTML puteti ingloba cod PHP care va fi executat la fiecare vizitare a paginii. <br>
Codul dumneavoastra PHP este interpretat pe serverul WEB si genereaza un cod HTML care va fi vazut de <br>
Uilizator (clientului (browserului) fiindu-i transmis numai cod interpretat ca si HTML).</li>
<br><br>
<li><h5 align="left">Ce este MySQL ?</h5>
Mysql (se pronunta mai-es-chiu-el) este un sistem de gestiune a bazelor de date, foarte rapid si robust. <br>
O baza de date va permite sa stocati, sa cautati, sa sortati si sa va regasiti datele in mod eficient. <br>
Serverul MySQL controleaza accesul la datele dumneavoastra pentru a garanta ca mai multi utilizatori pot <br>
lucra simultan cu acestea.</li>
<br><br>
<li><h5 align="left">Ce este Photoshop ?</h5>
Photoshop este un instrument pentru retusarea fotografiilor care ofera posibilitatea de a crea imagini <br>
deosebite in special pentru paginile WEB. Daca inca nu esti familiarizat cu bazele imaginilor digitale, acum <br>
e momentul sa inveti despre acest lucru.</li>
</ol><br>';
	break;


////////////////////////////////
// Submit Tutorials ////////////
////////////////////////////////

   case 'submit_tutss';
   
   echo '<a href="index.php">Index</a> > <a href="index.php?content=submit_tutss">Submit a Tutorial</a><br><p></p>';   
   echo '<center><form name="submit_tuts" action="index.php?content=submiting_tuts" method="post">
<table border="0" align="center">
<tr>
<td><b>Tip Tutorial*:</b></td>
<td>
<select name="tip_tut"><option value="css" selected>CSS</option><option value="html">HTML</option><option value="php">PHP</option><option value="ps">Photoshop</option></select>
</td>
</tr><tr>
<td><b>Title*:</b></td>
<td><input class=tbox type=text size=60 name=title></td>   
</tr><tr>
<td colspan=2><font color=#999999>Titlul tutorialului</font></td>
</tr><tr>
<td></td>
</tr><tr>
<td><b>URL*:</b></td>
<td><input class=tbox type=text size=60 name=url></td>   
</tr><tr>
<td colspan=2><font color=#999999>Adresa tutorialului (nu uitati http://)</font></td>
</tr><tr>
<td></td>
</tr><tr>
<td><b>Banner:</b></td>
<td><input class=tbox type=text size=60 name=banner></td>   
</tr><tr>
<td colspan=2><font color=#999999>Adresa Bannerului 40x40 obligatoriu doar in cazul in care ati ales Photoshop !</font></td>
</tr><tr>
<td></td>
</tr><tr>
<td><b>Descriere:</b></td>
<td><input class=tbox type=text size=60 name=descriere></td>   
</tr><tr>
<td colspan=2><font color=#999999>Descrierea tutorialului</font></td>
</tr><tr>
<td></td>
</tr><tr>
<td><b>Your Nick:</b></td>
<td><input class=tbox type=text size=60 name=user></td>   
</tr><tr>
<td colspan=2><font color=#999999>Lasa gol pentru Anonim</font></td>
</tr><tr>
<td></td>
</tr><tr>
<td><b></b></td>
<td><input name=Submit class=button type=submit id=Submit value=Add Tutorial></td>
</tr><tr>
<td colspan=2><font color="#999999">Campurile cu</font> * <font color="#999999">sunt obligatorii<br>Daca nu completati cu date adevarate tutorialul nu va fi aprobat !</font>
</td></tr>
</table></form></center><br><br>';
   break;
   
   case 'submiting_tuts';
   
if(($_POST['tip_tut'] == 'ps') && ($_POST['banner'] == '')) {
   echo '<a href="index.php">Index</a> > <a href="index.php?content=submit_tutss">Submit a Tutorial</a> > Error !<br><p></p>'; 
   echo '<p></p><p></p><br><br><center>Error ! You have chose to add tutorial in Photoshop category and you didn\'t write the adress of tutorial banner (40x40) !<br><a href="javascript:history.back()">Go Back</a></center><br><br><br><br>';}
elseif(($_POST['title'] == '') || ($_POST['url'] == '')) {
   echo '<a href="index.php">Index</a> > <a href="index.php?content=submit_tutss">Submit a Tutorial</a> > Error !<br><p></p>'; 
   echo '<p></p><p></p><br><br><center>Error! You don\'t add enything at Title or URL field !<br><a href="javascript:history.back()">Go Back</a></center><br><br><br><br>'; }
else {
   echo '<a href="index.php">Index</a> > <a href="index.php?content=submit_tutss">Submit a Tutorial</a><br><p></p>'; 
   
	$_SESSION['title'] = $_POST['title'];
	$_SESSION['url'] = $_POST['url'];
	if($_POST['tip_tut'] == 'ps') {
	$_SESSION['banner'] = $_POST['banner']; }
	$_SESSION['descriere'] = $_POST['descriere'];
	$_SESSION['user'] = $_POST['user'];
	$_SESSION['tip_tut'] = $_POST['tip_tut'];

echo '<br><br><br><center><h3>Succsefuly Added</h3></center><br><br><br>';
$data = date('d.m.Y');
	if($_POST['tip_tut'] == 'ps') {
$cerereSQL = "INSERT INTO `ps` ( title, url, banner, descriere, user, data) 
                   VALUES ( '".htmlentities($_SESSION['title'], ENT_QUOTES)."', '".htmlentities($_SESSION['url'], ENT_QUOTES)."', '".htmlentities($_SESSION['banner'], ENT_QUOTES)."', '".htmlentities($_SESSION['descriere'], ENT_QUOTES)."', '".htmlentities($_SESSION['user'], ENT_QUOTES)."', '".$data."')"; 
				   					}
	else {
$cerereSQL = "INSERT INTO `".$_SESSION['tip_tut']."` ( title, url, descriere, user, data) 
                   VALUES ( '".htmlentities($_SESSION['title'], ENT_QUOTES)."', '".htmlentities($_SESSION['url'], ENT_QUOTES)."', '".htmlentities($_SESSION['descriere'], ENT_QUOTES)."', '".htmlentities($_SESSION['user'], ENT_QUOTES)."', '".$data."')"; 
				   					}
									
mysql_query($cerereSQL, $conexiune);

$_SESSION['title'] = '';
$_SESSION['url'] = '';
$_SESSION['banner'] = '';
$_SESSION['descriere'] = '';
$_SESSION['user'] = '';
$_SESSION['tip_tut'] = '';

echo '<br><br><br><br><center>Tutorialul a fost adaugat in baza noastra de date cu succes ! <br> Va fi aprobat in maxim 24 de ore de catre un admin ! Va multumim !</center><br><br><br><br>';
}
   break;

////////////////////////////////
// Submit Banner ///////////////
////////////////////////////////

   case 'submit_link';
   echo '<a href="index.php">Index</a> > <a href="index.php?content=submit_link">Submit a Banner</a><br><p></p>';
   echo '<form name="submit_link" action="index.php?content=submiting_link" method="post">
<table border="0" align="center">
<tr>
<td><b>Title*:</b></td>
<td><input class="tbox" type="text" size="60" name="title"></td>   
</tr><tr><td colspan="2"><font color="#999999">Titlul site-ului</font></td></tr><tr><td></td></tr><tr>
<td><b>URL*:</b></td>
<td><input class="tbox" type="text" size="60" name="url"></td>   
</tr><tr><td colspan="2"><font color="#999999">Adresa site-ului (nu uitati http://)</font></td></tr><tr><td></td></tr><tr>
<td><b>Banner*:</b></td>
<td><input class="tbox" type="text" size="60" name="banner"></td>   
</tr><tr><td colspan="2"><font color="#999999">Adresa Bannerului 88x31 (nu uitati http://)</font></td></tr><tr><td></td></tr><tr>
<td><b>Descriere*:</b></td>
<td><input class="tbox" type="text" size="60" name="descriere"</td>   
</tr><tr><td colspan="2"><font color="#999999">Descrierea site-ului</font></td></tr><tr><td></td></tr><tr>
<td><b></b></td>
<td><input name="Submit" class="button" type="submit" id="Submit" value="Add Banner"></td>
</tr><tr><td colspan="2"><font color="#999999">Campurile cu</font> * <font color="#999999">sunt obligatorii<br>Daca nu completati cu date adevarate site-ul nu va fi aprobat !</font></td></tr>
</table> </form><br><br></center>';
   break;
   
   case 'submiting_link';
   echo '<a href="index.php">Index</a> > <a href="index.php?content=submit_link">Submit a Banner</a><br><p></p>';

$_SESSION['title'] = $_POST['title'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['banner'] = $_POST['banner'];
$_SESSION['descriere'] = $_POST['descriere'];

if(($_SESSION['title'] == '') || ($_SESSION['url'] == '') || ($_SESSION['banner'] == '') || ($_SESSION['descriere'] == ''))
{
echo '<a href="index.php">Index</a> > <a href="index.php?content=submit_link">Submit a Banner</a><br><p></p>';
echo '<br><br><br><center><h3><font color=red>Error! You dont add enything.<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} 
else 
{
echo '<br><br><br><center><h3>Succesfully Added</h3></center><br><br><br>';
$data = date('d.m.Y');
$cerereSQL = "INSERT INTO `banner` ( title, url, banner, descriere, data) 
                   VALUES ( '".htmlentities($_SESSION['title'], ENT_QUOTES)."', '".htmlentities($_SESSION['url'], ENT_QUOTES)."', '".htmlentities($_SESSION['banner'], ENT_QUOTES)."', '".htmlentities($_SESSION['descriere'], ENT_QUOTES)."', '".$data."')";
mysql_query($cerereSQL, $conexiune);

$_SESSION['title'] = '';
$_SESSION['url'] = '';
$_SESSION['banner'] = '';
$_SESSION['descriere'] = '';

echo '<br><br><br><br><center>Bannerul a fost adaugat in baza noastra de date cu succes ! <br> Va fi aprobat in maxim 24 de ore de catre un admin cu conditia ca in acest timp <br> sa puneti unul din bannerele noastre (le gasiti la pagina de <a href="index.php?content=exchange">Banner Exchange</a>) la dumneavioastra pe site ! </center><br><br><br><br>';
}
   break;

// Banner Exchange

   case 'exchange';
echo '<a href="index.php">Index</a> > <a href="index.php?content=exchange">Banner Exchange</a><br><p></p>';
echo'<p>
  <h4>:: Conditions</h4>
  <p><br>
  1. Min 150 unique visitors per day;</p>
  <p>2. Max banner dimensions : 88x31;</p>
  <p>3. My banner (88x31) must be on all your pages;</p>
  <p>4. My banner musn\'t be into iframe or marquee;</p>
  <p>5. Submit your site title, description, url and banner adress at "Submit your link" button in the bottom or <a href="'.$siteurl.'/index.php?content=submit_link">click here</a> ; </p>
  <p>6. Put my banner into your website. </p>
  <p></p>
<h4>:: My banners</h4>
<p><br><center>88x31<br><img src="'.$siteurl.'/banner88.gif" alt="Best Tutorials Site From Romania for noobs and experts" border="0" width="88" height="31"><br><textarea class="style1" cols="50" rows="3"><script type="text/javascript" language="javascript" scr="'.$siteurl.'/banner1.js"></script></textarea>
</center></p>
<hr align="center" size="1" width="500">
<p><center>88x31<br><img src="'.$siteurl.'/banner88_2.gif" alt="Best Tutorials Site From Romania for noobs and experts" border="0" width="88" height="31"><br><textarea class="style1" cols="50" rows="3"><script type="text/javascript" language="javascript" scr="'.$siteurl.'/banner4.js"></script></textarea>
</center></p>
<hr align="center" size="1" width="500">
<p><center>468x60<br><img src="'.$siteurl.'/banner468.gif" alt="Best Tutorials Site From Romania for noobs and experts" border="0" width="468" height="60"><br><textarea class="style1" cols="50" rows="3"><script type="text/javascript" language="javascript" scr="'.$siteurl.'/banner2.js"></script></textarea>
</center></p><br>
<hr align="center" size="1" width="500">
<p><center>468x60<br><img src="'.$siteurl.'/banner468_2.gif" alt="Best Tutorials Site From Romania for noobs and experts" border="0" width="468" height="60"><br><textarea class="style1" cols="50" rows="3"><script type="text/javascript" language="javascript" scr="'.$siteurl.'/banner5.js"></script></textarea>
</center></p><br>
<hr align="center" size="1" width="500">
<p><center>468x60 flash<br>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="468" height="60"><param name="movie" value="flash468.swf"><param name="quality" value="high"><embed src="flash468.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="468" height="60"></embed></object>
<br><textarea class="style1" cols="50" rows="3"><script type="text/javascript" language="javascript" scr="'.$siteurl.'/banner3.js"></script></textarea></center></p><br>';

   break;

// SEARCH

   case 'search';

echo '<a href="index.php">Index</a> > Search Tutorials<br><p></p>';
echo '<table border=0 cellspacing="2" cellpadding="2" width="90%" align="center">';

//
// START IF
//

if($_POST['tut'] == 'css') {

// CSS

$cerereSQLsearchcss = 'SELECT * FROM `css` WHERE `title` LIKE "%'.addentities($_POST['search']).'%" AND aprove="Yes" ORDER BY title ASC';
$rezultatsearchcss = mysql_query($cerereSQLsearchcss);

if(mysql_num_rows($rezultatsearchcss) > 0) {
	while($rand = mysql_fetch_array($rezultatsearchcss))	
	{
			  $width = $rand['rd'] * 10 ;
			  echo '<tr>
<td width="40" height="40" rowspan="2" class="display"><img src="'.$siteurl.'/images/css.gif" width="40" height="40"></td>
<td colspan="2" class="display"><b><a href="'.$siteurl.'/css_tutorial.php?id='.$rand['id'].'" target="_blank">'.$rand['title'].'</a></b> - '.$rand['descriere'].'</td> 
</tr><tr><td align="left" class="display"><table width="130" height="12" cellpadding="0" cellspacing="0" style="margin:0 0 0 0; padding:0 0 0 0;"><tr><td width="100" height="12" bgcolor="#FFFFCC" style="margin:0 0 0 0; padding:0 0 0 0;"><img width="'.$width.'" height="12" src="images/rate.jpg" alt="rate : '.$rand['rd'].'/10"></td><td width="30" style="margin:0 0 0 0; padding:0 0 0 0;" class="display"><a href="'.$siteurl.'/css_bottom.php?id='.$rand['id'].'" target="_blank"><b>'.$rand['rd'].'</b>/10</a></td></tr></table></td>
<td align="right" class="display" width="12%">Views : <b>'.$rand['hits'].'</b></td>
</tr><tr><td align="left" class="display" colspan="3" width="100%">Added by <b><strong>'.$rand['user'].'</strong></b> on '.$rand['data'].'</td></tr><tbody><tr><td></td></tr></tbody>';
	}
} else {
echo '<br><p>We did not find CSS Stylesheets Tutorials for <b>"'.$_POST['search'].'"</b>.</p><p>Also try:<br><li>Check your spelling.</li><li>Try more general words.</li><li>Try different words that mean the same thing.</li></p>';
}
} elseif($_POST['tut'] == 'html') {

// HTML

$cerereSQLsearchhtml = 'SELECT * FROM `html` WHERE `title` LIKE "%'.addentities($_POST['search']).'%" AND aprove="Yes" ORDER BY title ASC';
$rezultatsearchhtml = mysql_query($cerereSQLsearchhtml);

if(mysql_num_rows($rezultatsearchhtml) > 0) {
	while($rand = mysql_fetch_array($rezultatsearchhtml))	
	{
			  $width = $rand['rd'] * 10 ;
			  echo '<tr>
<td width="40" height="40" rowspan="2" class="display"><img src="'.$siteurl.'/images/html.gif" width="40" height="40"></td>
<td colspan="2" class="display"><b><a href="'.$siteurl.'/html_tutorial.php?id='.$rand['id'].'" target="_blank">'.$rand['title'].'</a></b> - '.$rand['descriere'].'</td> 
</tr><tr><td align="left" class="display"><table width="130" height="12" cellpadding="0" cellspacing="0" style="margin:0 0 0 0; padding:0 0 0 0;"><tr><td width="100" height="12" bgcolor="#FFFFCC" style="margin:0 0 0 0; padding:0 0 0 0;"><img width="'.$width.'" height="12" src="images/rate.jpg" alt="rate : '.$rand['rd'].'/10"></td><td width="30" style="margin:0 0 0 0; padding:0 0 0 0;" class="display"><a href="'.$siteurl.'/html_bottom.php?id='.$rand['id'].'" target="_blank"><b>'.$rand['rd'].'</b>/10</a></td></tr></table></td>
<td align="right" class="display" width="12%">Views : <b>'.$rand['hits'].'</b></td>
</tr><tr><td align="left" class="display" colspan="3" width="100%">Added by <b><strong>'.$rand['user'].'</strong></b> on '.$rand['data'].'</td></tr><tbody><tr><td></td></tr></tbody>';
	}
} else {
echo '<br><p>We did not find HTML Tutorials for <b>"'.$_POST['search'].'"</b>.</p><p>Also try:<br><li>Check your spelling.</li><li>Try more general words.</li><li>Try different words that mean the same thing.</li></p>';
}
} elseif($_POST['tut'] == 'ps') {

// Photoshop

$cerereSQLsearchps = 'SELECT * FROM `ps` WHERE `title` LIKE "%'.addentities($_POST['search']).'%" AND aprove="Yes" ORDER BY title ASC';
$rezultatsearchps = mysql_query($cerereSQLsearchps);

if(mysql_num_rows($rezultatsearchps) > 0) {
	while($rand = mysql_fetch_array($rezultatsearchps))	
	{
			  $width = $rand['rd'] * 10 ;
			  echo '<tr>
<td width="40" height="40" rowspan="2" class="display"><img src="'.$rand['banner'].'" width="40" height="40"></td>
<td colspan="2" class="display"><b><a href="'.$siteurl.'/ps_tutorial.php?id='.$rand['id'].'" target="_blank">'.$rand['title'].'</a></b> - '.$rand['descriere'].'</td> 
</tr><tr><td align="left" class="display"><table width="130" height="12" cellpadding="0" cellspacing="0" style="margin:0 0 0 0; padding:0 0 0 0;"><tr><td width="100" height="12" bgcolor="#FFFFCC" style="margin:0 0 0 0; padding:0 0 0 0;"><img width="'.$width.'" height="12" src="images/rate.jpg" alt="rate : '.$rand['rd'].'/10"></td><td width="30" style="margin:0 0 0 0; padding:0 0 0 0;" class="display"><a href="'.$siteurl.'/ps_bottom.php?id='.$rand['id'].'" target="_blank"><b>'.$rand['rd'].'</b>/10</a></td></tr></table></td>
<td align="right" class="display" width="12%">Views : <b>'.$rand['hits'].'</b></td>
</tr><tr><td align="left" class="display" colspan="3" width="100%">Added by <b><strong>'.$rand['user'].'</strong></b> on '.$rand['data'].'</td></tr><tbody><tr><td></td></tr></tbody>';
	}
} else {
echo '<br><p>We did not find Photoshop Tutorials for <b>"'.$_POST['search'].'"</b>.</p><p>Also try:<br><li>Check your spelling.</li><li>Try more general words.</li><li>Try different words that mean the same thing.</li></p>';
}
} elseif($_POST['tut'] == 'php') {

// PHP

$cerereSQLsearchphp = 'SELECT * FROM `php` WHERE `title` LIKE "%'.addentities($_POST['search']).'%" AND aprove="Yes" ORDER BY title ASC';
$rezultatsearchphp = mysql_query($cerereSQLsearchphp);

if(mysql_num_rows($rezultatsearchphp) > 0) {
	while($rand = mysql_fetch_array($rezultatsearchphp))	
	{
			  $width = $rand['rd'] * 10 ;
			  echo '<tr>
<td width="40" height="40" rowspan="2" class="display"><img src="'.$siteurl.'/images/php.gif" width="40" height="40"></td>
<td colspan="2" class="display"><b><a href="'.$siteurl.'/php_tutorial.php?id='.$rand['id'].'" target="_blank">'.$rand['title'].'</a></b> - '.$rand['descriere'].'</td> 
</tr><tr><td align="left" class="display"><table width="130" height="12" cellpadding="0" cellspacing="0" style="margin:0 0 0 0; padding:0 0 0 0;"><tr><td width="100" height="12" bgcolor="#FFFFCC" style="margin:0 0 0 0; padding:0 0 0 0;"><img width="'.$width.'" height="12" src="images/rate.jpg" alt="rate : '.$rand['rd'].'/10"></td><td width="30" style="margin:0 0 0 0; padding:0 0 0 0;" class="display"><a href="'.$siteurl.'/php_bottom.php?id='.$rand['id'].'" target="_blank"><b>'.$rand['rd'].'</b>/10</a></td></tr></table></td>
<td align="right" class="display" width="12%">Views : <b>'.$rand['hits'].'</b></td>
</tr><tr><td align="left" class="display" colspan="3" width="100%">Added by <b><strong>'.$rand['user'].'</strong></b> on '.$rand['data'].'</td></tr><tbody><tr><td></td></tr></tbody>';
	}
} else {
echo '<br><p>We did not find PHP Tutorials for <b>"'.$_POST['search'].'"</b>.</p><p>Also try:<br><li>Check your spelling.</li><li>Try more general words.</li><li>Try different words that mean the same thing.</li></p>';
}
}

//
// END IF
//

echo '</table>';

   break;
   
   
// LINKS <<-------------------------------------------------------------------------------

   case 'links';
   
   echo '<a href="index.php">Index</a> > <a href="index.php?content=links">Links</a><br><p></p>';
   
echo 'Sort By <a href="'.$siteurl.'/index.php?content=links&page='.$_GET['page'].'&sort=data" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Data</a> <a href="'.$siteurl.'/index.php?content=links&page='.$_GET['page'].'&sort=title" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Title</a> <a href="'.$siteurl.'/index.php?content=links&page='.$_GET['page'].'&sort=hits" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Hits</a> <a href="'.$siteurl.'/index.php?content=links&page='.$_GET['page'].'&sort=rd" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Rating</a>';

if($_GET['sort'] == "data") {
$_SESSION['sort'] = 'id';
$_SESSION['fel'] = 'DESC';}
elseif($_GET['sort'] == "title") {
$_SESSION['sort'] = 'title';
$_SESSION['fel'] = 'ASC';}
elseif($_GET['sort'] == "hits") {
$_SESSION['sort'] = 'hits';
$_SESSION['fel'] = 'DESC';}
elseif($_GET['sort'] == "rd") {
$_SESSION['sort'] = 'rd';
$_SESSION['fel'] = 'DESC';}
else {
$_SESSION['sort'] = 'hits';
$_SESSION['fel'] = 'DESC';}

$rezultate_maxime = 25;
$intrari_totale = mysql_result(mysql_query('SELECT COUNT(*) as Num FROM `banner`'),0);

if($intrari_totale == 0) echo 'No Links Added Yet...';
else {
	if(!isset($_GET['page'])) $pagina = 1;
	else $pagina = $_GET['page'];

	$from = (($pagina * $rezultate_maxime) - $rezultate_maxime);

	$cerereSQL = mysql_query('SELECT * FROM `banner` WHERE aprove="Yes" ORDER by '.$_SESSION['sort'].' '.$_SESSION['fel'].' LIMIT '.$from.', '.$rezultate_maxime.' ');
	$pagini_totale = ceil($intrari_totale / $rezultate_maxime);

	if($pagina > $pagini_totale) echo 'Page cannot find';
	else {
		if($pagini_totale > 0) {
		
	echo '<div align=center>';
if($pagina > 1){
    $inapoi = ($pagina - 1);
    echo '<a href="'.$_SERVER['PHP_SELF'].'?content=links&page=1&sort='.$_GET['sort'].'"><img src="images/first.jpg" width="14" height="12" alt="First Page" align="middle"></a>&nbsp;&nbsp;<a href="'.$_SERVER['PHP_SELF'].'?content=links&page='.$inapoi.'&sort='.$_GET['sort'].'"><img src="images/prev.jpg" width="12" height="12" alt="Previous Page" align="middle"></a>&nbsp;&nbsp;';
}

for($pagini = 1; $pagini <= $pagini_totale; $pagini++){
    if(($pagina) == $pagini) echo '<b>'.$pagini.'</b>&nbsp;';
	else echo '<a href="'.$_SERVER['PHP_SELF'].'?content=links&page='.$pagini.'&sort='.$_GET['sort'].'">'.$pagini.'</a>&nbsp;';
}

if($pagina < $pagini_totale){
	$inainte = ($pagina + 1);
	echo '&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=links&page='.$inainte.'&sort='.$_GET['sort'].'"><img src="images/next.jpg" width="12" height="12" alt="Next Page" align="middle"></a>&nbsp;&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=links&page='.$pagini_totale.'&sort='.$_GET['sort'].'"><img src="images/last.jpg" width="14" height="12" alt="Last Page" align="middle"></a>';				
}
	echo '</div>';

			echo '<table border=0 cellspacing="2" cellpadding="2" width="90%" align="center">';
	
			while($rand = mysql_fetch_array($cerereSQL)) 
			{
			  echo '  <tr>
<td width="88" rowspan="2" class="display"><a href="'.$siteurl.'/banner2.php?id='.$rand['id'].'" target="_blank"><img src="'.$rand['banner'].'" alt="'.$rand['title'].' - '.$rand['hits'].' hits" width="88" height="31" border="0"></a></td>
<td colspan="2" class="display"><b><a href="'.$siteurl.'/banner2.php?id='.$rand['id'].'" target="_blank">'.$rand['title'].'</a></b></td> 
</tr><tr><td align="left" class="display">'.$rand['descriere'].'</td>
<td align="right" class="display" width="12%">Views : <b>'.$rand['hits'].'</b></td>
</tr><tbody><tr><td></td></tr></tbody>';
 			}

			echo '</table>';

if($pagini_totale == 1) echo '<div align=left> </div>';
else {

	echo '<div align=center>';
if($pagina > 1){
    $inapoi = ($pagina - 1);
    echo '<a href="'.$_SERVER['PHP_SELF'].'?content=links&page=1&sort='.$_GET['sort'].'"><img src="images/first.jpg" width="14" height="12" alt="First Page" align="middle"></a>&nbsp;&nbsp;<a href="'.$_SERVER['PHP_SELF'].'?content=links&page='.$inapoi.'&sort='.$_GET['sort'].'"><img src="images/prev.jpg" width="12" height="12" alt="Previous Page" align="middle"></a>&nbsp;&nbsp;';
}

for($pagini = 1; $pagini <= $pagini_totale; $pagini++){
    if(($pagina) == $pagini) echo '<b>'.$pagini.'</b>&nbsp;';
	else echo '<a href="'.$_SERVER['PHP_SELF'].'?content=links&page='.$pagini.'&sort='.$_GET['sort'].'">'.$pagini.'</a>&nbsp;';
}

if($pagina < $pagini_totale){
	$inainte = ($pagina + 1);
	echo '&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=links&page='.$inainte.'&sort='.$_GET['sort'].'"><img src="images/next.jpg" width="12" height="12" alt="Next Page" align="middle"></a>&nbsp;&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=links&page='.$pagini_totale.'&sort='.$_GET['sort'].'"><img src="images/last.jpg" width="14" height="12" alt="Last Page" align="middle"></a>';				
}
	echo '</div>';
   }
  }
 }
}
   
   break;
   
   
// CONTACT <<--------------------------------------------------------------------------------

   case 'contact';
   
   echo '<a href="index.php">Index</a> > <a href="index.php?content=contact">Contact</a><br><p></p>';
   echo '<center><br><br><form action="index.php?content=send" method="post">
   E-Mail&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" name="email" value="" class="input"> <br>
   Name&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" name="nume" value="" class="input"> <br>
   Subject&nbsp;:&nbsp;<input type="text" name="subiect" value="" class="input"> <br>
   Message&nbsp;:&nbsp;<textarea name="mesaj" cols="60" rows="6" class="textarea"></textarea><br><br>
   <input type="submit" name="Send" value="Send" class="button">&nbsp;<input type="reset" name="Reset" value="Reset" class="button"></form></center>';
   break;

   case 'send';
   echo '<a href="index.php">Index</a> > <a href="index.php?content=contact">Contact</a><br><p></p>';
   if(($_POST['email'] == '') || ($_POST['nume'] == '') || (is_numeric($_POST['nume'])) || ($_POST['subiect'] == '') || ($_POST['mesaj'] == '')) {

echo 'Error ! Some fields were left blank ! Please complete again !<br>
Click <a href="javascript:history.back()">Here</a> to complete again.';

} else {

$catre = 'best.tutorials@yahoo.com';
$data_trimitere = date('d-m-Y H:i:s');
$subiect = $_POST['subiect'];
$mesaj = '
<html>
<head>
<title>Formular de Contact</title>
</head>
<body>
<p><tt>Data trimitere: '.$data_trimitere.' </tt></p>
<table border=1 style="border-style: dashed; border-color: #CCCCCC">
<tr>
<td><tt> Nume: '.$_POST['nume'].' </tt></td>
</tr>
<tr>
<td><tt> E-Mail: <a href="mailto:'.$_POST['email'].'">'.$_POST['email'].'</a> </tt></td>
</tr>
<tr>
<td><tt> Mesaj: <br><br> '.$_POST['mesaj'].' </tt></td>
</tr></table></body></html>';
$headere = "MIME-Version: 1.0\r\n";
$headere .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headere .= "From: ".$_POST['nume']." <".$_POST['email'].">\r\n";

mail($catre, $subiect, $mesaj, $headere);

echo '<br><br>Message Sent';
}

   break;

// NEWS <<--------------------------------------------------------------------------------

   case '';
echo '<a href="index.php">Index</a> > Last 5 Tutorials Added<br><p></p>';
// Last added -----------

   
  // CSS

   $cerereSQLcss = mysql_query('SELECT * FROM `css` WHERE aprove="Yes" ORDER BY `id` DESC LIMIT 5');

   echo '<br><h5 align="left">:: Last 5 CSS Stylesheets Tutorials Added</h5>';
   echo '<table border=0 cellspacing="2" cellpadding="2" width="90%" align="center">';
   while($rand = mysql_fetch_array($cerereSQLcss)) 
			{
			  $width = $rand['rd'] * 10 ;
			  echo '<tr>
<td width="40" height="40" rowspan="2" class="display"><img src="'.$siteurl.'/images/css.gif" width="40" height="40"></td>
<td colspan="2" class="display"><b><a href="'.$siteurl.'/css_tutorial.php?id='.$rand['id'].'" target="_blank">'.$rand['title'].'</a></b> - '.$rand['descriere'].'</td> 
</tr><tr><td align="left" class="display"><table width="130" height="12" cellpadding="0" cellspacing="0" style="margin:0 0 0 0; padding:0 0 0 0;"><tr><td width="100" height="12" bgcolor="#FFFFCC" style="margin:0 0 0 0; padding:0 0 0 0;"><img width="'.$width.'" height="12" src="images/rate.jpg" alt="rate : '.$rand['rd'].'/10"></td><td width="30" style="margin:0 0 0 0; padding:0 0 0 0;" class="display"><a href="'.$siteurl.'/css_bottom.php?id='.$rand['id'].'" target="_blank"><b>'.$rand['rd'].'</b>/10</a></td></tr></table></td>
<td align="right" class="display" width="12%">Views : <b>'.$rand['hits'].'</b></td>
</tr><tr><td align="left" class="display" colspan="3" width="100%">Added by <b><strong>'.$rand['user'].'</strong></b> on '.$rand['data'].'</td></tr><tbody><tr><td></td></tr></tbody>';
 			}
   echo '</table>';

  // HTML

   $cerereSQLhtml = mysql_query('SELECT * FROM `html` WHERE aprove="Yes" ORDER BY `id` DESC LIMIT 5');

   echo '<br><h5 align="left">:: Last 5 HTML Tutorials Added</h5>';
   echo '<table border=0 cellspacing="2" cellpadding="2" width="90%" align="center">';

   while($rand = mysql_fetch_array($cerereSQLhtml)) 
			{
			  $width = $rand['rd'] * 10 ;
			  echo '<tr>
<td width="40" height="40" rowspan="2" class="display"><img src="'.$siteurl.'/images/html.gif" width="40" height="40"></td>
<td colspan="2" class="display"><b><a href="'.$siteurl.'/html_tutorial.php?id='.$rand['id'].'" target="_blank">'.$rand['title'].'</a></b> - '.$rand['descriere'].'</td> 
</tr><tr><td align="left" class="display"><table width="130" height="12" cellpadding="0" cellspacing="0" style="margin:0 0 0 0; padding:0 0 0 0;"><tr><td width="100" height="12" bgcolor="#FFFFCC" style="margin:0 0 0 0; padding:0 0 0 0;"><img width="'.$width.'" height="12" src="images/rate.jpg" alt="rate : '.$rand['rd'].'/10"></td><td width="30" style="margin:0 0 0 0; padding:0 0 0 0;" class="display"><a href="'.$siteurl.'/html_bottom.php?id='.$rand['id'].'" target="_blank"><b>'.$rand['rd'].'</b>/10</a></td></tr></table></td>
<td align="right" class="display" width="12%">Views : <b>'.$rand['hits'].'</b></td>
</tr><tr><td align="left" class="display" colspan="3" width="100%">Added by <b><strong>'.$rand['user'].'</strong></b> on '.$rand['data'].'</td></tr><tbody><tr><td></td></tr></tbody>';
 			}
   echo '</table>';

  // Photoshop

   $cerereSQLps = mysql_query('SELECT * FROM `ps` WHERE aprove="Yes" ORDER BY `id` DESC LIMIT 5');

   echo '<br><h5 align="left">:: Last 5 Photoshop Tutorials Added</h5>';
   echo '<table border=0 cellspacing="2" cellpadding="2" width="90%" align="center">';

   while($rand = mysql_fetch_array($cerereSQLps)) 
			{
			  $width = $rand['rd'] * 10 ;
			  echo '<tr>
<td width="40" height="40" rowspan="2" class="display"><img src="'.$rand['banner'].'" width="40" height="40"></td>
<td colspan="2" class="display"><b><a href="'.$siteurl.'/ps_tutorial.php?id='.$rand['id'].'" target="_blank">'.$rand['title'].'</a></b> - '.$rand['descriere'].'</td> 
</tr><tr><td align="left" class="display"><table width="130" height="12" cellpadding="0" cellspacing="0" style="margin:0 0 0 0; padding:0 0 0 0;"><tr><td width="100" height="12" bgcolor="#FFFFCC" style="margin:0 0 0 0; padding:0 0 0 0;"><img width="'.$width.'" height="12" src="images/rate.jpg" alt="rate : '.$rand['rd'].'/10"></td><td width="30" style="margin:0 0 0 0; padding:0 0 0 0;" class="display"><a href="'.$siteurl.'/ps_bottom.php?id='.$rand['id'].'" target="_blank"><b>'.$rand['rd'].'</b>/10</a></td></tr></table></td>
<td align="right" class="display" width="12%">Views : <b>'.$rand['hits'].'</b></td>
</tr><tr><td align="left" class="display" colspan="3" width="100%">Added by <b><strong>'.$rand['user'].'</strong></b> on '.$rand['data'].'</td></tr><tbody><tr><td></td></tr></tbody>';
 			}
   echo '</table>';

  // PHP

   $cerereSQLphp = mysql_query('SELECT * FROM `php` WHERE aprove="Yes" ORDER BY `id` DESC LIMIT 5');

   echo '<br><h5 align="left">:: Last 5 PHP Tutorials Added</h5>';
   echo '<table border=0 cellspacing="2" cellpadding="2" width="90%" align="center">';

   while($rand = mysql_fetch_array($cerereSQLphp)) 
			{
			  $width = $rand['rd'] * 10 ;
			  echo '<tr>
<td width="40" height="40" rowspan="2" class="display"><img src="'.$siteurl.'/images/php.gif" width="40" height="40"></td>
<td colspan="2" class="display"><b><a href="'.$siteurl.'/php_tutorial.php?id='.$rand['id'].'" target="_blank">'.$rand['title'].'</a></b> - '.$rand['descriere'].'</td> 
</tr><tr><td align="left" class="display"><table width="130" height="12" cellpadding="0" cellspacing="0" style="margin:0 0 0 0; padding:0 0 0 0;"><tr><td width="100" height="12" bgcolor="#FFFFCC" style="margin:0 0 0 0; padding:0 0 0 0;"><img width="'.$width.'" height="12" src="images/rate.jpg" alt="rate : '.$rand['rd'].'/10"></td><td width="30" style="margin:0 0 0 0; padding:0 0 0 0;" class="display"><a href="'.$siteurl.'/php_bottom.php?id='.$rand['id'].'" target="_blank"><b>'.$rand['rd'].'</b>/10</a></td></tr></table></td>
<td align="right" class="display" width="12%">Views : <b>'.$rand['hits'].'</b></td>
</tr><tr><td align="left" class="display" colspan="3" width="100%">Added by <b><strong>'.$rand['user'].'</strong></b> on '.$rand['data'].'</td></tr><tbody><tr><td></td></tr></tbody>';
 			}
   echo '</table>';

   break;

// CSS TURORIALS <<--------------------------------------------------------------------------------

   case 'css';

   echo '<a href="index.php">Index</a> > <a href="index.php?content=css">CSS Style Sheets Tutorials</a><br><p></p>';

echo 'Sort By <a href="'.$siteurl.'/index.php?content=css&page='.$_GET['page'].'&sort=data" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Data</a> <a href="'.$siteurl.'/index.php?content=css&page='.$_GET['page'].'&sort=title" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Title</a> <a href="'.$siteurl.'/index.php?content=css&page='.$_GET['page'].'&sort=hits" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Hits</a> <a href="'.$siteurl.'/index.php?content=css&page='.$_GET['page'].'&sort=rd" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Rating</a>';

if($_GET['sort'] == "data") {
$_SESSION['sort'] = 'id';
$_SESSION['fel'] = 'DESC';}
elseif($_GET['sort'] == "title") {
$_SESSION['sort'] = 'title';
$_SESSION['fel'] = 'ASC';}
elseif($_GET['sort'] == "hits") {
$_SESSION['sort'] = 'hits';
$_SESSION['fel'] = 'DESC';}
elseif($_GET['sort'] == "rd") {
$_SESSION['sort'] = 'rd';
$_SESSION['fel'] = 'DESC';}
else {
$_SESSION['sort'] = 'id';
$_SESSION['fel'] = 'DESC';}

$rezultate_maxime = 25;
$intrari_totale = mysql_result(mysql_query('SELECT COUNT(*) as Num FROM `css` WHERE aprove="Yes"'),0);

if($intrari_totale == 0) echo 'No CSS Tutorials Yet...';
else {
	if(!isset($_GET['page'])) $pagina = 1;
	else $pagina = $_GET['page'];

	$from = (($pagina * $rezultate_maxime) - $rezultate_maxime);

	$cerereSQL = mysql_query('SELECT * FROM `css` WHERE aprove="Yes" ORDER by '.$_SESSION['sort'].' '.$_SESSION['fel'].' LIMIT '.$from.', '.$rezultate_maxime.' ');
	$pagini_totale = ceil($intrari_totale / $rezultate_maxime);

	if($pagina > $pagini_totale) echo 'Page cannot find';
	else {
		if($pagini_totale > 0) {

	echo '<div align=center>';
if($pagina > 1){
    $inapoi = ($pagina - 1);
    echo '<a href="'.$_SERVER['PHP_SELF'].'?content=css&page=1&sort='.$_GET['sort'].'"><img src="images/first.jpg" width="14" height="12" alt="First Page" align="middle"></a>&nbsp;&nbsp;<a href="'.$_SERVER['PHP_SELF'].'?content=css&page='.$inapoi.'&sort='.$_GET['sort'].'"><img src="images/prev.jpg" width="12" height="12" alt="Previous Page" align="middle"></a>&nbsp;&nbsp;';
}

for($pagini = 1; $pagini <= $pagini_totale; $pagini++){
    if(($pagina) == $pagini) echo '<b>'.$pagini.'</b>&nbsp;';
	else echo '<a href="'.$_SERVER['PHP_SELF'].'?content=css&page='.$pagini.'&sort='.$_GET['sort'].'">'.$pagini.'</a>&nbsp;';
}

if($pagina < $pagini_totale){
	$inainte = ($pagina + 1);
	echo '&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=css&page='.$inainte.'&sort='.$_GET['sort'].'"><img src="images/next.jpg" width="12" height="12" alt="Next Page" align="middle"></a>&nbsp;&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=css&page='.$pagini_totale.'&sort='.$_GET['sort'].'"><img src="images/last.jpg" width="14" height="12" alt="Last Page" align="middle"></a>';				
}
	echo '</div>';

			echo '<table border=0 cellspacing="2" cellpadding="2" width="90%" align="center">';
	
			while($rand = mysql_fetch_array($cerereSQL)) 
			{
			  $width = $rand['rd'] * 10 ;
			  echo '<tr>
<td width="40" height="40" rowspan="2" class="display"><img src="'.$siteurl.'/images/css.gif" width="40" height="40"></td>
<td colspan="2" class="display"><b><a href="'.$siteurl.'/css_tutorial.php?id='.$rand['id'].'" target="_blank">'.$rand['title'].'</a></b> - '.$rand['descriere'].'</td> 
</tr><tr><td align="left" class="display"><table width="130" height="12" cellpadding="0" cellspacing="0" style="margin:0 0 0 0; padding:0 0 0 0;"><tr><td width="100" height="12" bgcolor="#FFFFCC" style="margin:0 0 0 0; padding:0 0 0 0;"><img width="'.$width.'" height="12" src="images/rate.jpg" alt="rate : '.$rand['rd'].'/10"></td><td width="30" style="margin:0 0 0 0; padding:0 0 0 0;" class="display"><a href="'.$siteurl.'/css_bottom.php?id='.$rand['id'].'" target="_blank"><b>'.$rand['rd'].'</b>/10</a></td></tr></table></td>
<td align="right" class="display" width="12%">Views : <b>'.$rand['hits'].'</b></td>
</tr><tr><td align="left" class="display" colspan="3" width="100%">Added by <b><strong>'.$rand['user'].'</strong></b> on '.$rand['data'].'</td></tr><tbody><tr><td></td></tr></tbody>';
 			}

			echo '</table>';

if($pagini_totale == 1) echo '<div align=left> </div>';
else {

	echo '<div align=center>';
if($pagina > 1){
    $inapoi = ($pagina - 1);
    echo '<a href="'.$_SERVER['PHP_SELF'].'?content=css&page=1&sort='.$_GET['sort'].'"><img src="images/first.jpg" width="14" height="12" alt="First Page" align="middle"></a>&nbsp;&nbsp;<a href="'.$_SERVER['PHP_SELF'].'?content=css&page='.$inapoi.'&sort='.$_GET['sort'].'"><img src="images/prev.jpg" width="12" height="12" alt="Previous Page" align="middle"></a>&nbsp;&nbsp;';
}

for($pagini = 1; $pagini <= $pagini_totale; $pagini++){
    if(($pagina) == $pagini) echo '<b>'.$pagini.'</b>&nbsp;';
	else echo '<a href="'.$_SERVER['PHP_SELF'].'?content=css&page='.$pagini.'&sort='.$_GET['sort'].'">'.$pagini.'</a>&nbsp;';
}

if($pagina < $pagini_totale){
	$inainte = ($pagina + 1);
	echo '&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=css&page='.$inainte.'&sort='.$_GET['sort'].'"><img src="images/next.jpg" width="12" height="12" alt="Next Page" align="middle"></a>&nbsp;&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=css&page='.$pagini_totale.'&sort='.$_GET['sort'].'"><img src="images/last.jpg" width="14" height="12" alt="Last Page" align="middle"></a>';				
}
	echo '</div>';
   }
  }
 }
}
   break;

// HTML TUTORIALS <<--------------------------------------------------------------------------------

   case 'html';

   echo '<a href="index.php">Index</a> > <a href="index.php?content=html">HTML Tutorials</a><br><p></p>';

echo 'Sort By <a href="'.$siteurl.'/index.php?content=html&page='.$_GET['page'].'&sort=data" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Data</a> <a href="'.$siteurl.'/index.php?content=html&page='.$_GET['page'].'&sort=title" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Title</a> <a href="'.$siteurl.'/index.php?content=html&page='.$_GET['page'].'&sort=hits" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Hits</a> <a href="'.$siteurl.'/index.php?content=html&page='.$_GET['page'].'&sort=rd" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Rating</a>';

if($_GET['sort'] == "data") {
$_SESSION['sort'] = 'id';
$_SESSION['fel'] = 'DESC';}
elseif($_GET['sort'] == "title") {
$_SESSION['sort'] = 'title';
$_SESSION['fel'] = 'ASC';}
elseif($_GET['sort'] == "hits") {
$_SESSION['sort'] = 'hits';
$_SESSION['fel'] = 'DESC';}
elseif($_GET['sort'] == "rd") {
$_SESSION['sort'] = 'rd';
$_SESSION['fel'] = 'DESC';}
else {
$_SESSION['sort'] = 'id';
$_SESSION['fel'] = 'DESC';}

$rezultate_maxime = 25;
$intrari_totale = mysql_result(mysql_query('SELECT COUNT(*) as Num FROM `html` WHERE aprove="Yes"'),0);

if($intrari_totale == 0) echo 'No HTML Tutorials Yet...';
else {
	if(!isset($_GET['page'])) $pagina = 1;
	else $pagina = $_GET['page'];

	$from = (($pagina * $rezultate_maxime) - $rezultate_maxime);

	$cerereSQL = mysql_query('SELECT * FROM `html` WHERE aprove="Yes" ORDER by '.$_SESSION['sort'].' '.$_SESSION['fel'].' LIMIT '.$from.', '.$rezultate_maxime.' ');
	$pagini_totale = ceil($intrari_totale / $rezultate_maxime);

	if($pagina > $pagini_totale) echo 'Page cannot find';
	else {
		if($pagini_totale > 0) {

	echo '<div align=center>';
if($pagina > 1){
    $inapoi = ($pagina - 1);
    echo '<a href="'.$_SERVER['PHP_SELF'].'?content=html&page=1&sort='.$_GET['sort'].'"><img src="images/first.jpg" width="14" height="12" alt="First Page" align="middle"></a>&nbsp;&nbsp;<a href="'.$_SERVER['PHP_SELF'].'?content=html&page='.$inapoi.'&sort='.$_GET['sort'].'"><img src="images/prev.jpg" width="12" height="12" alt="Previous Page" align="middle"></a>&nbsp;&nbsp;';
}

for($pagini = 1; $pagini <= $pagini_totale; $pagini++){
    if(($pagina) == $pagini) echo '<b>'.$pagini.'</b>&nbsp;';
	else echo '<a href="'.$_SERVER['PHP_SELF'].'?content=html&page='.$pagini.'&sort='.$_GET['sort'].'">'.$pagini.'</a>&nbsp;';
}

if($pagina < $pagini_totale){
	$inainte = ($pagina + 1);
	echo '&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=html&page='.$inainte.'&sort='.$_GET['sort'].'"><img src="images/next.jpg" width="12" height="12" alt="Next Page" align="middle"></a>&nbsp;&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=html&page='.$pagini_totale.'&sort='.$_GET['sort'].'"><img src="images/last.jpg" width="14" height="12" alt="Last Page" align="middle"></a>';				
}
	echo '</div>';

			echo '<table border=0 cellspacing="2" cellpadding="2" width="90%" align="center">';
	
			while($rand = mysql_fetch_array($cerereSQL)) 
			{
			  $width = $rand['rd'] * 10 ;
			  echo '<tr>
<td width="40" height="40" rowspan="2" class="display"><img src="'.$siteurl.'/images/html.gif" width="40" height="40"></td>
<td colspan="2" class="display"><b><a href="'.$siteurl.'/html_tutorial.php?id='.$rand['id'].'" target="_blank">'.$rand['title'].'</a></b> - '.$rand['descriere'].'</td> 
</tr><tr><td align="left" class="display"><table width="130" height="12" cellpadding="0" cellspacing="0" style="margin:0 0 0 0; padding:0 0 0 0;"><tr><td width="100" height="12" bgcolor="#FFFFCC" style="margin:0 0 0 0; padding:0 0 0 0;"><img width="'.$width.'" height="12" src="images/rate.jpg" alt="rate : '.$rand['rd'].'/10"></td><td width="30" style="margin:0 0 0 0; padding:0 0 0 0;" class="display"><a href="'.$siteurl.'/html_bottom.php?id='.$rand['id'].'" target="_blank"><b>'.$rand['rd'].'</b>/10</a></td></tr></table></td>
<td align="right" class="display" width="12%">Views : <b>'.$rand['hits'].'</b></td>
</tr><tr><td align="left" class="display" colspan="3" width="100%">Added by <b><strong>'.$rand['user'].'</strong></b> on '.$rand['data'].'</td></tr><tbody><tr><td></td></tr></tbody>';
 			}

			echo '</table>';

if($pagini_totale == 1) echo '<div align=left> </div>';
else {

	echo '<div align=center>';
if($pagina > 1){
    $inapoi = ($pagina - 1);
    echo '<a href="'.$_SERVER['PHP_SELF'].'?content=html&page=1&sort='.$_GET['sort'].'"><img src="images/first.jpg" width="14" height="12" alt="First Page" align="middle"></a>&nbsp;&nbsp;<a href="'.$_SERVER['PHP_SELF'].'?content=html&page='.$inapoi.'&sort='.$_GET['sort'].'"><img src="images/prev.jpg" width="12" height="12" alt="Previous Page" align="middle"></a>&nbsp;&nbsp;';
}

for($pagini = 1; $pagini <= $pagini_totale; $pagini++){
    if(($pagina) == $pagini) echo '<b>'.$pagini.'</b>&nbsp;';
	else echo '<a href="'.$_SERVER['PHP_SELF'].'?content=html&page='.$pagini.'&sort='.$_GET['sort'].'">'.$pagini.'</a>&nbsp;';
}

if($pagina < $pagini_totale){
	$inainte = ($pagina + 1);
	echo '&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=html&page='.$inainte.'&sort='.$_GET['sort'].'"><img src="images/next.jpg" width="12" height="12" alt="Next Page" align="middle"></a>&nbsp;&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=html&page='.$pagini_totale.'&sort='.$_GET['sort'].'"><img src="images/last.jpg" width="14" height="12" alt="Last Page" align="middle"></a>';				
}
	echo '</div>';
   }
  }
 }
}
   break;

// PHP TUTORIALS <<--------------------------------------------------------------------------------

   case 'php';

   echo '<a href="index.php">Index</a> > <a href="index.php?content=php">PHP Tutorials</a><br><p></p>';

echo 'Sort By <a href="'.$siteurl.'/index.php?content=php&page='.$_GET['page'].'&sort=data" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Data</a> <a href="'.$siteurl.'/index.php?content=php&page='.$_GET['page'].'&sort=title" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Title</a> <a href="'.$siteurl.'/index.php?content=php&page='.$_GET['page'].'&sort=hits" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Hits</a> <a href="'.$siteurl.'/index.php?content=php&page='.$_GET['page'].'&sort=rd" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Rating</a>';

if($_GET['sort'] == "data") {
$_SESSION['sort'] = 'id';
$_SESSION['fel'] = 'DESC';}
elseif($_GET['sort'] == "title") {
$_SESSION['sort'] = 'title';
$_SESSION['fel'] = 'ASC';}
elseif($_GET['sort'] == "hits") {
$_SESSION['sort'] = 'hits';
$_SESSION['fel'] = 'DESC';}
elseif($_GET['sort'] == "rd") {
$_SESSION['sort'] = 'rd';
$_SESSION['fel'] = 'DESC';}
else {
$_SESSION['sort'] = 'id';
$_SESSION['fel'] = 'DESC';}

$rezultate_maxime = 25;
$intrari_totale = mysql_result(mysql_query('SELECT COUNT(*) as Num FROM `php` WHERE aprove="Yes"'),0);

if($intrari_totale == 0) echo 'No PHP Tutorials Yet...';
else {
	if(!isset($_GET['page'])) $pagina = 1;
	else $pagina = $_GET['page'];

	$from = (($pagina * $rezultate_maxime) - $rezultate_maxime);

	$cerereSQL = mysql_query('SELECT * FROM `php` WHERE aprove="Yes" ORDER by '.$_SESSION['sort'].' '.$_SESSION['fel'].' LIMIT '.$from.', '.$rezultate_maxime.' ');
	$pagini_totale = ceil($intrari_totale / $rezultate_maxime);

	if($pagina > $pagini_totale) echo 'Page cannot find';
	else {
		if($pagini_totale > 0) {

	echo '<div align=center>';
if($pagina > 1){
    $inapoi = ($pagina - 1);
    echo '<a href="'.$_SERVER['PHP_SELF'].'?content=php&page=1&sort='.$_GET['sort'].'"><img src="images/first.jpg" width="14" height="12" alt="First Page" align="middle"></a>&nbsp;&nbsp;<a href="'.$_SERVER['PHP_SELF'].'?content=php&page='.$inapoi.'&sort='.$_GET['sort'].'"><img src="images/prev.jpg" width="12" height="12" alt="Previous Page" align="middle"></a>&nbsp;&nbsp;';
}

for($pagini = 1; $pagini <= $pagini_totale; $pagini++){
    if(($pagina) == $pagini) echo '<b>'.$pagini.'</b>&nbsp;';
	else echo '<a href="'.$_SERVER['PHP_SELF'].'?content=php&page='.$pagini.'&sort='.$_GET['sort'].'">'.$pagini.'</a>&nbsp;';
}

if($pagina < $pagini_totale){
	$inainte = ($pagina + 1);
	echo '&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=php&page='.$inainte.'&sort='.$_GET['sort'].'"><img src="images/next.jpg" width="12" height="12" alt="Next Page" align="middle"></a>&nbsp;&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=php&page='.$pagini_totale.'&sort='.$_GET['sort'].'"><img src="images/last.jpg" width="14" height="12" alt="Last Page" align="middle"></a>';				
}
	echo '</div>';

			echo '<table border=0 cellspacing="2" cellpadding="2" width="90%" align="center">';
	
			while($rand = mysql_fetch_array($cerereSQL)) 
			{
			  $width = $rand['rd'] * 10 ;
			  echo '<tr>
<td width="40" height="40" rowspan="2" class="display"><img src="'.$siteurl.'/images/php.gif" width="40" height="40"></td>
<td colspan="2" class="display"><b><a href="'.$siteurl.'/php_tutorial.php?id='.$rand['id'].'" target="_blank">'.$rand['title'].'</a></b> - '.$rand['descriere'].'</td> 
</tr><tr><td align="left" class="display"><table width="130" height="12" cellpadding="0" cellspacing="0" style="margin:0 0 0 0; padding:0 0 0 0;"><tr><td width="100" height="12" bgcolor="#FFFFCC" style="margin:0 0 0 0; padding:0 0 0 0;"><img width="'.$width.'" height="12" src="images/rate.jpg" alt="rate : '.$rand['rd'].'/10"></td><td width="30" style="margin:0 0 0 0; padding:0 0 0 0;" class="display"><a href="'.$siteurl.'/php_bottom.php?id='.$rand['id'].'" target="_blank"><b>'.$rand['rd'].'</b>/10</a></td></tr></table></td>
<td align="right" class="display" width="12%">Views : <b>'.$rand['hits'].'</b></td>
</tr><tr><td align="left" class="display" colspan="3" width="100%">Added by <b><strong>'.$rand['user'].'</strong></b> on '.$rand['data'].'</td></tr><tbody><tr><td></td></tr></tbody>';
 			}

			echo '</table>';

if($pagini_totale == 1) echo '<div align=left> </div>';
else {

	echo '<div align=center>';
if($pagina > 1){
    $inapoi = ($pagina - 1);
    echo '<a href="'.$_SERVER['PHP_SELF'].'?content=php&page=1&sort='.$_GET['sort'].'"><img src="images/first.jpg" width="14" height="12" alt="First Page" align="middle"></a>&nbsp;&nbsp;<a href="'.$_SERVER['PHP_SELF'].'?content=php&page='.$inapoi.'&sort='.$_GET['sort'].'"><img src="images/prev.jpg" width="12" height="12" alt="Previous Page" align="middle"></a>&nbsp;&nbsp;';
}

for($pagini = 1; $pagini <= $pagini_totale; $pagini++){
    if(($pagina) == $pagini) echo '<b>'.$pagini.'</b>&nbsp;';
	else echo '<a href="'.$_SERVER['PHP_SELF'].'?content=php&page='.$pagini.'&sort='.$_GET['sort'].'">'.$pagini.'</a>&nbsp;';
}

if($pagina < $pagini_totale){
	$inainte = ($pagina + 1);
	echo '&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=php&page='.$inainte.'&sort='.$_GET['sort'].'"><img src="images/next.jpg" width="12" height="12" alt="Next Page" align="middle"></a>&nbsp;&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=php&page='.$pagini_totale.'&sort='.$_GET['sort'].'"><img src="images/last.jpg" width="14" height="12" alt="Last Page" align="middle"></a>';				
}
	echo '</div>';
   }
  }
 }
}
   break;

// PHOTOSHOP TUTORIALS <<--------------------------------------------------------------------------------

   case 'ps';

   echo '<a href="index.php">Index</a> > <a href="index.php?content=ps">Adobe Photoshop Tutorials</a><br><p></p>';

echo 'Sort By <a href="'.$siteurl.'/index.php?content=ps&page='.$_GET['page'].'&sort=data" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Data</a> <a href="'.$siteurl.'/index.php?content=ps&page='.$_GET['page'].'&sort=title" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Title</a> <a href="'.$siteurl.'/index.php?content=ps&page='.$_GET['page'].'&sort=hits" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Hits</a> <a href="'.$siteurl.'/index.php?content=ps&page='.$_GET['page'].'&sort=rd" style="border-width:1px; border-bottom-color:#3366FF; padding-left:2px; padding-right:2px; background-color:#CCCCCC; padding-bottom:0px; padding-top:0px;">Rating</a>';

if($_GET['sort'] == "data") {
$_SESSION['sort'] = 'id';
$_SESSION['fel'] = 'DESC';}
elseif($_GET['sort'] == "title") {
$_SESSION['sort'] = 'title';
$_SESSION['fel'] = 'ASC';}
elseif($_GET['sort'] == "hits") {
$_SESSION['sort'] = 'hits';
$_SESSION['fel'] = 'DESC';}
elseif($_GET['sort'] == "rd") {
$_SESSION['sort'] = 'rd';
$_SESSION['fel'] = 'DESC';}
else {
$_SESSION['sort'] = 'id';
$_SESSION['fel'] = 'DESC';}

$rezultate_maxime = 25;
$intrari_totale = mysql_result(mysql_query('SELECT COUNT(*) as Num FROM `ps` WHERE aprove="Yes"'),0);

if($intrari_totale == 0) echo 'No PHOTOSHOP Tutorials Yet...';
else {
	if(!isset($_GET['page'])) $pagina = 1;
	else $pagina = $_GET['page'];

	$from = (($pagina * $rezultate_maxime) - $rezultate_maxime);

	$cerereSQL = mysql_query('SELECT * FROM `ps` WHERE aprove="Yes" ORDER by '.$_SESSION['sort'].' '.$_SESSION['fel'].' LIMIT '.$from.', '.$rezultate_maxime.' ');
	$pagini_totale = ceil($intrari_totale / $rezultate_maxime);

	if($pagina > $pagini_totale) echo 'Page cannot find';
	else {
		if($pagini_totale > 0) {

	echo '<div align=center>';
if($pagina > 1){
    $inapoi = ($pagina - 1);
    echo '<a href="'.$_SERVER['PHP_SELF'].'?content=ps&page=1&sort='.$_GET['sort'].'"><img src="images/first.jpg" width="14" height="12" alt="First Page" align="middle"></a>&nbsp;&nbsp;<a href="'.$_SERVER['PHP_SELF'].'?content=ps&page='.$inapoi.'&sort='.$_GET['sort'].'"><img src="images/prev.jpg" width="12" height="12" alt="Previous Page" align="middle"></a>&nbsp;&nbsp;';
}

for($pagini = 1; $pagini <= $pagini_totale; $pagini++){
    if(($pagina) == $pagini) echo '<b>'.$pagini.'</b>&nbsp;';
	else echo '<a href="'.$_SERVER['PHP_SELF'].'?content=ps&page='.$pagini.'&sort='.$_GET['sort'].'">'.$pagini.'</a>&nbsp;';
}

if($pagina < $pagini_totale){
	$inainte = ($pagina + 1);
	echo '&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=ps&page='.$inainte.'&sort='.$_GET['sort'].'"><img src="images/next.jpg" width="12" height="12" alt="Next Page" align="middle"></a>&nbsp;&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=ps&page='.$pagini_totale.'&sort='.$_GET['sort'].'"><img src="images/last.jpg" width="14" height="12" alt="Last Page" align="middle"></a>';				
}
	echo '</div>';

			echo '<table border=0 cellspacing="2" cellpadding="2" width="90%" align="center">';
	
			while($rand = mysql_fetch_array($cerereSQL)) 
			{
			  $width = $rand['rd'] * 10 ;
			  echo '<tr>
<td width="40" height="40" rowspan="2" class="display"><img src="'.$rand['banner'].'" width="40" height="40"></td>
<td colspan="2" class="display"><b><a href="'.$siteurl.'/ps_tutorial.php?id='.$rand['id'].'" target="_blank">'.$rand['title'].'</a></b> - '.$rand['descriere'].'</td> 
</tr><tr><td align="left" class="display"><table width="130" height="12" cellpadding="0" cellspacing="0" style="margin:0 0 0 0; padding:0 0 0 0;"><tr><td width="100" height="12" bgcolor="#FFFFCC" style="margin:0 0 0 0; padding:0 0 0 0;"><img width="'.$width.'" height="12" src="images/rate.jpg" alt="rate : '.$rand['rd'].'/10"></td><td width="30" style="margin:0 0 0 0; padding:0 0 0 0;" class="display"><a href="'.$siteurl.'/ps_bottom.php?id='.$rand['id'].'" target="_blank"><b>'.$rand['rd'].'</b>/10</a></td></tr></table></td>
<td align="right" class="display" width="12%">Views : <b>'.$rand['hits'].'</b></td>
</tr><tr><td align="left" class="display" colspan="3" width="100%">Added by <b><strong>'.$rand['user'].'</strong></b> on '.$rand['data'].'</td></tr><tbody><tr><td></td></tr></tbody>';
 			}

			echo '</table>';

if($pagini_totale == 1) echo '<div align=left> </div>';
else {

	echo '<div align=center>';
if($pagina > 1){
    $inapoi = ($pagina - 1);
    echo '<a href="'.$_SERVER['PHP_SELF'].'?content=ps&page=1&sort='.$_GET['sort'].'"><img src="images/first.jpg" width="14" height="12" alt="First Page" align="middle"></a>&nbsp;&nbsp;<a href="'.$_SERVER['PHP_SELF'].'?content=ps&page='.$inapoi.'&sort='.$_GET['sort'].'"><img src="images/prev.jpg" width="12" height="12" alt="Previous Page" align="middle"></a>&nbsp;&nbsp;';
}

for($pagini = 1; $pagini <= $pagini_totale; $pagini++){
    if(($pagina) == $pagini) echo '<b>'.$pagini.'</b>&nbsp;';
	else echo '<a href="'.$_SERVER['PHP_SELF'].'?content=ps&page='.$pagini.'&sort='.$_GET['sort'].'">'.$pagini.'</a>&nbsp;';
}

if($pagina < $pagini_totale){
	$inainte = ($pagina + 1);
	echo '&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=ps&page='.$inainte.'&sort='.$_GET['sort'].'"><img src="images/next.jpg" width="12" height="12" alt="Next Page" align="middle"></a>&nbsp;&nbsp;<a href=" '.$_SERVER['PHP_SELF'].'?content=ps&page='.$pagini_totale.'&sort='.$_GET['sort'].'"><img src="images/last.jpg" width="14" height="12" alt="Last Page" align="middle"></a>';				
}
	echo '</div>';
   }
  }
 }
}
   break;

}
echo '<br><br><center><a href="'.$siteurl.'/best-tut-toolbar.exe"><img src="besttuttoolbar.gif" width="468" height="60"></a><br><br><script type="text/javascript"><!--
google_ad_client = "pub-5119115493655257";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as_rimg";
google_cpa_choice = "CAAQiYaYhAIaCJ2wcuQYTrQ_KOm293M";
google_ad_channel = "5178975975";
//--></script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></center>';
include('footer.php')
?>