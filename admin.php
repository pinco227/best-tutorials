<?php
echo '<table width="100%"  border="0" cellspacing="2" cellpadding="2" align="center" style="margin:2px 2px 2px 2px;">
  <tr>
    <td width="123" valign="middle" style="margin:0 2px 0 0; padding:0 0 0 0; border-right: 1px dashed #000000;">
	<table width="120" height="100%" align="center"><tr><td align="center" background="images/button_fundal.jpg" valign="middle" style="color:#FFFFFF; font-weight:bolder; margin:0 0 0 0; padding:0 0 0 0;"><a href="#" class="orange">General</a></td></tr></table>&nbsp;&nbsp;<a href="admin_log.php">Home</a><br>&nbsp;&nbsp;<a href="logout.php">Logout</a>
	<table width="120" height="100%" align="center"><tr><td align="center" background="images/button_fundal.jpg" valign="middle" style="color:#FFFFFF; font-weight:bolder; margin:0 0 0 0; padding:0 0 0 0;"><a href="#" class="orange">CSS Stylesheets</a></td></tr></table>&nbsp;&nbsp;<a href="admin_log.php?page=css&vaf=addtut">Add Tutorials</a><br>&nbsp;&nbsp;<a href="admin_log.php?page=css&vaf=tutlist">Edit Tutorials</a>
	<table width="120" height="100%" align="center"><tr><td align="center" background="images/button_fundal.jpg" valign="middle" style="color:#FFFFFF; font-weight:bolder; margin:0 0 0 0; padding:0 0 0 0;"><a href="#" class="orange">HTML</a></td></tr></table>&nbsp;&nbsp;<a href="admin_log.php?page=html&vaf=addtut">Add Tutorials</a><br>&nbsp;&nbsp;<a href="admin_log.php?page=html&vaf=tutlist">Edit Tutorials</a>
	<table width="120" height="100%" align="center"><tr><td align="center" background="images/button_fundal.jpg" valign="middle" style="color:#FFFFFF; font-weight:bolder; margin:0 0 0 0; padding:0 0 0 0;"><a href="#" class="orange">Photoshop</a></td></tr></table>&nbsp;&nbsp;<a href="admin_log.php?page=ps&vaf=addtut">Add Tutorials</a><br>&nbsp;&nbsp;<a href="admin_log.php?page=ps&vaf=tutlist">Edit Tutorials</a>
	<table width="120" height="100%" align="center"><tr><td align="center" background="images/button_fundal.jpg" valign="middle" style="color:#FFFFFF; font-weight:bolder; margin:0 0 0 0; padding:0 0 0 0;"><a href="#" class="orange">PHP</a></td></tr></table>&nbsp;&nbsp;<a href="admin_log.php?page=php&vaf=addtut">Add Tutorials</a><br>&nbsp;&nbsp;<a href="admin_log.php?page=php&vaf=tutlist">Edit Tutorials</a>
	<table width="120" height="100%" align="center"><tr><td align="center" background="images/button_fundal.jpg" valign="middle" style="color:#FFFFFF; font-weight:bolder; margin:0 0 0 0; padding:0 0 0 0;"><a href="#" class="orange">Banners</a></td></tr></table>&nbsp;&nbsp;<a href="admin_log.php?page=banner&vaf=add">Add Banner</a><br>&nbsp;&nbsp;<a href="admin_log.php?page=banner&vaf=bannerlist">Edit Banner</a>
	<table width="120" height="100%" align="center"><tr><td align="center" background="images/button_fundal.jpg" valign="middle" style="color:#FFFFFF; font-weight:bolder; margin:0 0 0 0; padding:0 0 0 0;"><a href="#" class="orange">Shoutbox</a></td></tr></table>&nbsp;&nbsp;<a href="admin_log.php?page=sbox">Delete Messages</a>
	<table width="120" height="100%" align="center"><tr><td align="center" background="images/button_fundal.jpg" valign="middle" style="color:#FFFFFF; font-weight:bolder; margin:0 0 0 0; padding:0 0 0 0;"><a href="#" class="orange">Aprove</a></td></tr></table>&nbsp;&nbsp;<a href="admin_log.php?page=aprove">Aprove</a></td>
    <td width="100%" valign="top">';
if(!isset($_GET['page'])) $_GET['page'] = '';
switch($_GET['page'])
{
   case '';
   echo '<br><br><br>
   <p><center><h3>Welcome Admin '.$_SESSION['usrname'].' !</h3></center></p><br><p></p>';
$css = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `css` WHERE `aprove`="Yes"'));
$css2 = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `css` WHERE `aprove`="No"'));
$html = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `html` WHERE `aprove`="Yes"'));
$html2 = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `html` WHERE `aprove`="No"'));
$ps = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `ps` WHERE `aprove`="Yes"'));
$ps2 = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `ps` WHERE `aprove`="No"'));
$php = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `php` WHERE `aprove`="Yes"'));
$php2 = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `php` WHERE `aprove`="No"'));
$link = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `banner` WHERE `aprove`="Yes"'));
$link2 = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `banner` WHERE `aprove`="No"'));

if('.$css2.' >= 1) {$csscolor = 'FF0000';}
elseif('.$html2.' >= 1) {$htmlcolor = 'FF0000';}
elseif('.$ps2.' >= 1) {$pscolor = 'FF0000';}
elseif('.$php2.' >= 1) {$phpcolor = 'FF0000';}
elseif('.$link2.' >= 1) {$linkcolor = 'FF0000';}
else {
$csscolor = '000000';
$htmlcolor = '000000';
$pscolor = '000000';
$phpcolor = '000000';
$linkcolor = '000000';
}

echo '<center><br>CSS Tutorials Aproved : <b>'.$css.'</b><br>CSS Tutorials Waiting : <font color="#'.$csscolor.'">'.$css2.'</font><br>HTML Tutorials Aproved : <b>'.$html.'</b><br>HTML Tutorials Waiting : <font color="#'.$htmlcolor.'">'.$html2.'</font><br>Photoshop Tutorials Aproved : <b>'.$ps.'</b><br>Photoshop Tutorials Waiting : <font color="#'.$pscolor.'">'.$ps2.'</font><br>PHP Tutorials Aproved : <b>'.$php.'</b><br>PHP Tutorials Waiting : <font color="#'.$phpcolor.'">'.$php2.'</font><br>Links Aproved : <b>'.$link.'</b><br>Links Waiting : <font color="#'.$linkcolor.'">'.$link2.'</font></center>';

   
   break;

/////////////////////////////////
//  __ _ _ __ _ _ _____ _____  //
// / _` | '_ \ '_/ _ \ V / -_) //
// \__,_| .__/_| \___/\_/\___| //
//      |_|                    //
/////////////////////////////////

	case 'aprove';
	echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=aprove">Aprove</a><br><p></p>';
	echo '<table width="500" border=1 align=center><tr>
<tr><td align="center" colspan="8"><b>Not Aproved BANNERS</b></td></tr>
<td><b>ID:</b></td>
<td><b>Title:</b></td>
<td><b>BANNER:</b></td>
<td><b>Descriere:</b></td>
<td><b>Hits:</b></td>
<td><b>Data:</b></td>
<td><b>Edit:</b></td>
<td><b>Delete:</b></td>
</tr>';
$cerereSQL = 'SELECT * FROM `banner` WHERE `aprove`="No" ORDER BY `id` DESC';
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
                              <td><img src="'.$rand['banner'].'" border="0"></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
                              <td><a href="admin_log.php?page=banner&vaf=editbanner&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=banner&vaf=delbanner&id='.$rand['id'].'">DELETE</a></td>
                              </tr>';

 } echo '</table>';
 
 echo '<table width="660" border=1 align=center><tr>
<tr><td align="center" colspan="9"><b>Not Aproved Tutorials</b></td></tr>
<td><b>ID:</b></td>
<td><b>Title:</b></td>
<td><b>Descriere:</b></td>
<td><b>URL:</b></td>
<td><b>Hits:</b></td>
<td><b>Data:</b></td>
<td><b>User:</b></td>
<td><b>Edit:</b></td>
<td><b>Delete:</b></td>
</tr><tr><td align="center" colspan="9"><b>CSS</b></td></tr>';
$cerereSQL = "SELECT * FROM `css` WHERE `aprove`='No' ORDER BY `id` DESC";
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['url'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
							  <td>'.$rand['user'].'</td>
                              <td><a href="admin_log.php?page=css&vaf=edittut&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=css&vaf=deltut&id='.$rand['id'].'">DELETE</a></td>
                              </tr>'; }
echo '<tr><td align="center" colspan="9"><b>HTML</b></td></tr>';
$cerereSQL = "SELECT * FROM `html` WHERE `aprove`='No' ORDER BY `id` DESC";
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['url'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
							  <td>'.$rand['user'].'</td>
                              <td><a href="admin_log.php?page=html&vaf=edittut&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=html&vaf=deltut&id='.$rand['id'].'">DELETE</a></td>
                              </tr>'; }
echo '<tr><td align="center" colspan="9"><b>PHP</b></td></tr>';
$cerereSQL = "SELECT * FROM `php` WHERE `aprove`='No' ORDER BY `id` DESC";
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['url'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
							  <td>'.$rand['user'].'</td>
                              <td><a href="admin_log.php?page=php&vaf=edittut&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=php&vaf=deltut&id='.$rand['id'].'">DELETE</a></td>
                              </tr>'; }
echo '<tr><td align="center" colspan="9"><b>PHOTOSHOP</b></td></tr>';
$cerereSQL = "SELECT * FROM `ps` WHERE `aprove`='No' ORDER BY `id` DESC";
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['url'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
							  <td>'.$rand['user'].'</td>
                              <td><a href="admin_log.php?page=ps&vaf=edittut&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=ps&vaf=deltut&id='.$rand['id'].'">DELETE</a></td>
                              </tr>';

 } echo '</table>';
	
	

	break;

////////////////////////////////////
//  _                             //
// | |__  __ _ _ _  _ _  ___ _ _  //
// | '_ \/ _` | ' \| ' \/ -_) '_| //
// |_.__/\__,_|_||_|_||_\___|_|   //
////////////////////////////////////
 


   case 'banner';

if(!isset($_GET['vaf'])) $_GET['vaf'] = '';
switch($_GET['vaf'])
{
case '';
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=banner">Banners</a><br><p></p>';
echo '<br><center><a href="admin_log.php?page=banner&vaf=add">Add Banners</a> :: <a href="admin_log.php?page=banner&vaf=bannerlist">Edit Banners</a></center>';
break;

case 'add';

echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=banner">Banners</a> > <a href="admin_log.php?page=banner&vaf=add">Add Banner</a><br><p></p>';
echo '<form name="add" action="admin_log.php?page=banner&vaf=adding" method="post">
<table border="0">
<tr>
<td><b>Title:</b></td>
<td><input class="tbox" type="text" size="60" name="title"></td>   
</tr><tr>
<td><b>URL:</b></td>
<td><input class="tbox" type="text" size="60" name="url"></td>   
</tr><tr>
<td><b>Banner:</b></td>
<td><input class="tbox" type="text" size="60" name="banner"></td>   
</tr><tr>
<td><b>Descriere:</b></td>
<td><input class="tbox" type="text" size="60" name="descriere"></td>   
</tr><tr>
<td><b></b></td>
<td><input name="Submit" class="button" type="submit" id="Submit" value="Add Banner"></td>
</tr>
</table> </form><br><br></center>';
break;

case 'adding';

$_SESSION['title'] = $_POST['title'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['banner'] = $_POST['banner'];
$_SESSION['descriere'] = $_POST['descriere'];

if(($_SESSION['title'] == '') || ($_SESSION['url'] == '') || ($_SESSION['banner'] == ''))
{
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=banner">Banners</a> > <a href="admin_log.php?page=banner&vaf=add">Add Banner</a> > Error !<br><p></p>';
echo '<br><br><br><center><h3><font color=red>Error! You dont add enything.<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} 
else 
{
echo '<br><br><br><center><h3>Adding...</h3></center><br><br><br>';
$data = date('d.m.Y');
$cerereSQL = "INSERT INTO `banner` ( `title`, `url`, `banner`, `descriere`, `data`, `aprove`) 
                   VALUES ( '".htmlentities($_SESSION['title'], ENT_QUOTES)."', '".htmlentities($_SESSION['url'], ENT_QUOTES)."', '".htmlentities($_SESSION['banner'], ENT_QUOTES)."', '".htmlentities($_SESSION['descriere'], ENT_QUOTES)."', '".$data."', 'Yes')";
mysqli_query($conexiune, $cerereSQL);

$_SESSION['title'] = '';
$_SESSION['url'] = '';
$_SESSION['banner'] = '';
$_SESSION['descriere'] = '';

echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=admin_log.php?page=banner&vaf=add">';
}

break;

case 'bannerlist';

echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=banner">Banners</a> > <a href="admin_log.php?page=banner&vaf=bannerlist">Banner List</a><br><p></p>';

// not aproved //////////////////////////////////

echo '<center>
<form method="POST" action="admin_log.php?page=banner&vaf=bannerlist">
<b>Sort By</b> &nbsp;
<select name="sort2" class="tbox">
                     <option value="id">Data</option>
                     <option value="hits">Hits</option>
                     </select> &nbsp;
<select name="fel2" class="tbox">
                     <option value="DESC">Descendent</option>
                     <option value="ASC">Ascendent</option>
                     </select> &nbsp;
<input class="button" type="submit" name="submit" value="Submit">
</form><br></center>';

if($_POST['sort2'] == "") { $_POST['sort2'] = 'id'; }
if($_POST['fel2'] == "") { $_POST['fel2'] = 'DESC'; }


echo '<table width="500" border=1 align=center><tr>
<tr><td align="center" colspan="8"><b>Not Aproved</b></td></tr>
<td><b>ID:</b></td>
<td><b>Title:</b></td>
<td><b>BANNER:</b></td>
<td><b>Descriere:</b></td>
<td><b>Hits:</b></td>
<td><b>Data:</b></td>
<td><b>Edit:</b></td>
<td><b>Delete:</b></td>
</tr>';
$cerereSQL = 'SELECT * FROM `banner` WHERE `aprove`="No" ORDER BY `'.$_POST['sort2'].'` '.$_POST['fel2'].'';
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
                              <td><img src="'.$rand['banner'].'" border="0"></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
                              <td><a href="admin_log.php?page=banner&vaf=editbanner&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=banner&vaf=delbanner&id='.$rand['id'].'">DELETE</a></td>
                              </tr>';

 } echo '</table>';

// aproved //////////////////////////////////////

echo '<center>
<form method="POST" action="admin_log.php?page=banner&vaf=bannerlist">
<b>Sort By</b> &nbsp;
<select name="sort" class="tbox">
                     <option value="id">Data</option>
                     <option value="hits">Hits</option>
                     </select> &nbsp;
<select name="fel" class="tbox">
                     <option value="DESC">Descendent</option>
                     <option value="ASC">Ascendent</option>
                     </select> &nbsp;
<input class="button" type="submit" name="submit" value="Submit">
</form><br></center>';

if($_POST['sort'] == "") { $_POST['sort'] = 'id'; }
if($_POST['fel'] == "") { $_POST['fel'] = 'DESC'; }


echo '<table width="500" border=1 align=center><tr>
<tr><td align="center" colspan="8"><b>Not Aproved</b></td></tr>
<td><b>ID:</b></td>
<td><b>Title:</b></td>
<td><b>BANNER:</b></td>
<td><b>Descriere:</b></td>
<td><b>Hits:</b></td>
<td><b>Data:</b></td>
<td><b>Edit:</b></td>
<td><b>Delete:</b></td>
</tr>';
$cerereSQL = 'SELECT * FROM `banner` WHERE `aprove`="Yes" ORDER BY `'.$_POST['sort'].'` '.$_POST['fel'].'';
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
                              <td><img src="'.$rand['banner'].'" border="0"></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
                              <td><a href="admin_log.php?page=banner&vaf=editbanner&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=banner&vaf=delbanner&id='.$rand['id'].'">DELETE</a></td>
                              </tr>';

 } echo '</table>';

break;

case 'editbanner';

$_SESSION['id'] = $_GET['id'];

if(!is_numeric($_GET['id'])) {
echo '<br><br><br><center><h3><font color=red>Error!<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} else {
   $cerereSQL = "SELECT * FROM `banner` WHERE `id`='".$_GET['id']."'"; 
   $rezultat = mysqli_query($conexiune, $cerereSQL);
   while($rand = mysqli_fetch_assoc($rezultat))
   {
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=banner">Banners</a> > <a href="admin_log.php?page=banner&vaf=bannerlist">Banner List</a> > Edit Banner<br><p></p>';
echo '<form name="add" action="admin_log.php?page=banner&vaf=editing" method="post">
<table border="0">
<tr>
<td><b>Title:</b></td>
<td><input class="tbox" type="text" size="60" name="title" value="'.$rand['title'].'"></td>   
</tr><tr>
<td><b>URL:</b></td>
<td><input class="tbox" type="text" size="60" name="url" value="'.$rand['url'].'"></td>   
</tr><tr>
<td><b>Banner:</b></td>
<td><input class="tbox" type="text" size="60" name="banner" value="'.$rand['banner'].'"></td>   
</tr><tr>
<td><b>Descriere:</b></td>
<td><input class="tbox" type="text" size="60" name="descriere" value="'.$rand['descriere'].'"></td>   
</tr><tr>
<td><b>Aprove:</b></td>
<td><select class="tbox" name="aprove"><option value="Yes" selected>Yes</option><option value="No">No</option></select></td>   
</tr><tr>
<td><b></b></td>
<td><input name="Submit" class="button" type="submit" id="Submit" value="Edit Banner"></td>
</tr>
</table> </form></center><br><br>';
   }
}

break;

case 'editing';

$_SESSION['title'] = $_POST['title'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['banner'] = $_POST['banner'];
$_SESSION['descriere'] = $_POST['descriere'];
$_SESSION['aprove'] = $_POST['aprove'];

if(($_SESSION['title'] == '') || ($_SESSION['url'] == '') || ($_SESSION['banner'] == '') || ($_SESSION['descriere'] == ''))
{
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=banner">Banners</a> > <a href="admin_log.php?page=banner&vaf=bannerlist">Banner List</a> > Edit Banner > Error !<br><p></p>';
echo '<br><br><br><center><h3><font color=red>Error! You dont add enything.<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} 
else 
{
echo '<br><br><br><center><h3>Modifing...</h3></center><br><br><br>';

$cerereSQL = "UPDATE `banner` SET `title`='".htmlentities($_SESSION['title'], ENT_QUOTES)."', `url`='".htmlentities($_SESSION['url'], ENT_QUOTES)."', `banner`='".htmlentities($_SESSION['banner'], ENT_QUOTES)."', `descriere`='".htmlentities($_SESSION['descriere'], ENT_QUOTES)."', `aprove`='".htmlentities($_SESSION['aprove'], ENT_QUOTES)."' WHERE `id`='".$_SESSION['id']."'";
mysqli_query($conexiune, $cerereSQL);

$_SESSION['title'] = '';
$_SESSION['url'] = '';
$_SESSION['banner'] = '';
$_SESSION['descriere'] = '';
$_SESSION['aprove'] = '';

echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=admin_log.php?page=banner&vaf=bannerlist">';
}

break;

case 'delbanner';

$cerereSQL = "DELETE FROM `banner` WHERE `id`='".htmlentities($_GET['id'], ENT_QUOTES)."'";
$rezultat = mysqli_query($conexiune, $cerereSQL);
echo '<br><br><br><center><h3>Banner was deleted!</h3></center><br><br><br>';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=admin_log.php?page=banner&vaf=bannerlist">';
break;
}
break;


////////////////////////////////////
// CSS /////////////////////////////
////////////////////////////////////

   case 'css';

if(!isset($_GET['vaf'])) $_GET['vaf'] = '';
switch($_GET['vaf'])
{
case '':
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=css">CSS Stylesheets</a><br><p></p>';
echo '<br><center><a href="admin_log.php?page=css&vaf=addtut">Add Tutorials</a> :: <a href="admin_log.php?page=css&vaf=tutlist">Edit Tutorials</a></center>';
break;

case 'addtut':

echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=css">CSS Stylesheets</a> > <a href="admin_log.php?page=css&vaf=addtut">Add CSS Tutorial</a><br><p></p>';
echo '<form name="add" action="admin_log.php?page=css&vaf=addingtut" method="post">
<table border="0">
<tr>
<td><b>Title:</b></td>
<td><input class="tbox" type="text" size="60" name="title"></td>   
</tr><tr>
<td><b>URL:</b></td>
<td><input class="tbox" type="text" size="60" name="url"></td>   
</tr><tr>
<td><b>Desc:</b></td>
<td><input class="tbox" type="text" size="60" name="descriere"></td>   
</tr><tr>
<td><b></b></td>
<td><input name="Submit" class="button" type="submit" id="Submit" value="Add Tutorial"></td>
</tr>
</table> </form><br><br></center>';

break;

case 'addingtut':
$_SESSION['title'] = $_POST['title'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['descriere'] = $_POST['descriere'];
   
if(($_SESSION['title'] == '') || ($_SESSION['url'] == ''))
{
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=css">CSS Stylesheets</a> > <a href="admin_log.php?page=css&vaf=addtut">Add CSS Tutorial</a> > Error !<br><p></p>';
echo '<br><br><br><center><h3><font color=red>Error! You dont add enything !<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
}
elseif($_SESSION['url'] == $urlstok)
{
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=css">CSS Stylesheets</a> > <a href="admin_log.php?page=css&vaf=addtut">Add CSS Tutorial</a> > Error !<br><p></p>';
echo '<br><br><br><center><h3><font color=red>Error! This tutorial already exist !<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
}
else 
{
echo '<br><br><br><center><h3>Adding...</h3></center><br><br><br>';
$data = date('d.m.Y');
$cerereSQL = "INSERT INTO `css` ( `title`, `url`, `descriere`, `data`, `user`, `aprove`) 
                   VALUES ( '".htmlentities($_SESSION['title'], ENT_QUOTES)."', '".htmlentities($_SESSION['url'], ENT_QUOTES)."', '".htmlentities($_SESSION['descriere'], ENT_QUOTES)."', '".$data."', 'admin:".htmlentities($_SESSION['usrname'], ENT_QUOTES)."', 'Yes')";
mysqli_query($conexiune, $cerereSQL);

$_SESSION['title'] = '';
$_SESSION['url'] = '';
$_SESSION['descriere'] = '';

echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=admin_log.php?page=css&vaf=addtut">';
}
break;

case 'tutlist':
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=css">CSS Stylesheets</a> > <a href="admin_log.php?page=css&vaf=tutlist">CSS Tutorial List</a><br><p></p>';

// not aproved ///////////////////////////////////

echo '<center>
<form method="POST" action="admin_log.php?page=css&vaf=tutlist">
<b>Sort By</b> &nbsp;
<select name="sort2" class="tbox">
                     <option value="id">Data</option>
                     <option value="hits">Hits</option>
                     </select> &nbsp;
<select name="fel2" class="tbox">
                     <option value="DESC">Descendent</option>
                     <option value="ASC">Ascendent</option>
                     </select> &nbsp;
<input class="button" type="submit" name="submit" value="Submit">
</form><br></center>';

if($_POST['sort2'] == "") { $_POST['sort2'] = 'id'; }
if($_POST['fel2'] == "") { $_POST['fel2'] = 'DESC'; }


echo '<table width="660" border=1 align=center><tr>
<tr><td align="center" colspan="8"><b>Not Aproved</b></td></tr>
<td><b>ID:</b></td>
<td><b>Title:</b></td>
<td><b>Descriere:</b></td>
<td><b>URL:</b></td>
<td><b>Hits:</b></td>
<td><b>Data:</b></td>
<td><b>User:</b></td>
<td><b>Edit:</b></td>
<td><b>Delete:</b></td>
</tr>';
$cerereSQL = "SELECT * FROM `css` WHERE `aprove`='No' ORDER BY `".$_POST['sort2']."` ".$_POST['fel2']."";
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['url'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
							  <td>'.$rand['user'].'</td>
                              <td><a href="admin_log.php?page=css&vaf=edittut&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=css&vaf=deltut&id='.$rand['id'].'">DELETE</a></td>
                              </tr>';

 } echo '</table>';

// aproved ///////////////////////////////////////

echo '<center>
<form method="POST" action="admin_log.php?page=css&vaf=tutlist">
<b>Sort By</b> &nbsp;
<select name="sort" class="tbox">
                     <option value="id">Data</option>
                     <option value="hits">Hits</option>
                     </select> &nbsp;
<select name="fel" class="tbox">
                     <option value="DESC">Descendent</option>
                     <option value="ASC">Ascendent</option>
                     </select> &nbsp;
<input class="button" type="submit" name="submit" value="Submit">
</form><br></center>';

if($_POST['sort'] == "") { $_POST['sort'] = 'id'; }
if($_POST['fel'] == "") { $_POST['fel'] = 'DESC'; }


echo '<table width="660" border=1 align=center><tr>
<tr><td align="center" colspan="8"><b>Aproved</b></td></tr>
<td><b>ID:</b></td>
<td><b>Title:</b></td>
<td><b>Descriere:</b></td>
<td><b>URL:</b></td>
<td><b>Hits:</b></td>
<td><b>Data:</b></td>
<td><b>User:</b></td>
<td><b>Edit:</b></td>
<td><b>Delete:</b></td>
</tr>';
$cerereSQL = "SELECT * FROM `css` WHERE `aprove`='Yes' ORDER BY `".$_POST['sort']."` ".$_POST['fel']."";
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['url'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
							  <td>'.$rand['user'].'</td>
                              <td><a href="admin_log.php?page=css&vaf=edittut&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=css&vaf=deltut&id='.$rand['id'].'">DELETE</a></td>
                              </tr>';

 } echo '</table>';
break;

case 'edittut':
$_SESSION['id'] = $_GET['id'];

if(!is_numeric($_GET['id'])) {
echo '<br><br><br><center><h3><font color=red>Error!<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} else {
   $cerereSQL = "SELECT * FROM `css` WHERE `id`='".$_GET['id']."'"; 
   $rezultat = mysqli_query($conexiune, $cerereSQL);
   while($rand = mysqli_fetch_assoc($rezultat))
   {
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=css">CSS Stylesheets</a> > <a href="admin_log.php?page=css&vaf=tutlist">CSS Tutorial List</a> > Edit CSS Tutorial<br><p></p>';
echo '<form name="add" action="admin_log.php?page=css&vaf=editingtut" method="post">
<table border="0">
<tr>
<td><b>Title:</b></td>
<td><input class="tbox" type="text" size="60" name="title" value="'.$rand['title'].'"></td>   
</tr><tr>
<td><b>URL:</b></td>
<td><input class="tbox" type="text" size="60" name="url" value="'.$rand['url'].'"></td>   
</tr><tr>
<td><b>Desc:</b></td>
<td><input class="tbox" type="text" size="60" name="descriere" value="'.$rand['descriere'].'"></td>   
</tr><tr>
<td><b>Aprove:</b></td>
<td><select class="tbox" name="aprove"><option value="Yes" selected>Yes</option><option value="No">No</option></select></td>   
</tr><tr>
<td><b></b></td>
<td><input name="Submit" class="button" type="submit" id="Submit" value="Edit Tutorial"></td>
</tr>
</table> </form></center><br><br>';
   }
}
break;

case 'editingtut':
$_SESSION['title'] = $_POST['title'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['descriere'] = $_POST['descriere'];
$_SESSION['aprove'] = $_POST['aprove'];

if(($_SESSION['title'] == '') || ($_SESSION['url'] == ''))
{
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=css">CSS Stylesheets</a> > <a href="admin_log.php?page=css&vaf=tutlist">CSS Tutorial List</a> > Edit CSS Tutorial > Error !<br><p></p>';
echo '<br><br><br><center><h3><font color=red>Error! You dont add enything.<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} 
else 
{
echo '<br><br><br><center><h3>Modifing...</h3></center><br><br><br>';

$cerereSQL = "UPDATE `css` SET `title`='".htmlentities($_SESSION['title'], ENT_QUOTES)."', `url`='".htmlentities($_SESSION['url'], ENT_QUOTES)."', `descriere`='".htmlentities($_SESSION['descriere'], ENT_QUOTES)."', `aprove`='".htmlentities($_SESSION['aprove'], ENT_QUOTES)."' WHERE `id`='".$_SESSION['id']."'";
mysqli_query($conexiune, $cerereSQL);

$_SESSION['title'] = '';
$_SESSION['url'] = '';
$_SESSION['descriere'] = '';
$_SESSION['aprove'] = '';

echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=admin_log.php?page=css&vaf=tutlist">';
}
break;

case 'deltut':
$cerereSQL = "DELETE FROM `css` WHERE `id`='".htmlentities($_GET['id'], ENT_QUOTES)."'";
$rezultat = mysqli_query($conexiune, $cerereSQL);
echo '<br><br><br><center><h3>Tutorial was deleted!</h3></center><br><br><br>';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=javascript:history.back()">';
break;
}

   break;

//
// HTML
//

   case 'html';

if(!isset($_GET['vaf'])) $_GET['vaf'] = '';
switch($_GET['vaf'])
{
case '':
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=html">HTML</a><br><p></p>';
echo '<br><center><a href="admin_log.php?page=html&vaf=addtut">Add Tutorials</a> :: <a href="admin_log.php?page=html&vaf=tutlist">Edit Tutorials</a></center>';
break;

case 'addtut':

echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=html">HTML</a> > <a href="admin_log.php?page=html&vaf=addtut">Add HTML Tutorial</a><br><p></p>';
echo '<form name="add" action="admin_log.php?page=html&vaf=addingtut" method="post">
<table border="0">
<tr>
<td><b>Title:</b></td>
<td><input class="tbox" type="text" size="60" name="title"></td>   
</tr><tr>
<td><b>URL:</b></td>
<td><input class="tbox" type="text" size="60" name="url"></td>   
</tr><tr>
<td><b>Desc:</b></td>
<td><input class="tbox" type="text" size="60" name="descriere"></td>   
</tr><tr>
<td><b></b></td>
<td><input name="Submit" class="button" type="submit" id="Submit" value="Add Tutorial"></td>
</tr>
</table> </form><br><br></center>';

break;

case 'addingtut':
$_SESSION['title'] = $_POST['title'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['descriere'] = $_POST['descriere'];

if(($_SESSION['title'] == '') || ($_SESSION['url'] == ''))
{
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=html">HTML</a> > <a href="admin_log.php?page=html&vaf=addtut">Add HTML Tutorial</a> > Error !<br><p></p>';
echo '<br><br><br><center><h3><font color=red>Error! You dont add enything.<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} 
else 
{
echo '<br><br><br><center><h3>Adding...</h3></center><br><br><br>';
$data = date('d.m.Y');
$cerereSQL = "INSERT INTO `html` ( `title`, `url`, `descriere`, `data`, `user`, `aprove`) 
                   VALUES ( '".htmlentities($_SESSION['title'], ENT_QUOTES)."', '".htmlentities($_SESSION['url'], ENT_QUOTES)."', '".htmlentities($_SESSION['descriere'], ENT_QUOTES)."', '".$data."', 'admin:".htmlentities($_SESSION['usrname'], ENT_QUOTES)."', 'Yes')";
mysqli_query($conexiune, $cerereSQL);

$_SESSION['title'] = '';
$_SESSION['url'] = '';
$_SESSION['descriere'] = '';

echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=admin_log.php?page=html&vaf=addtut">';
}
break;

case 'tutlist':

echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=html">HTML</a> > <a href="admin_log.php?page=html&vaf=tutlist">HTML Tutorial List</a><br><p></p>';

// not aproved ///////////////////////////////////

echo '<center>
<form method="POST" action="admin_log.php?page=html&vaf=tutlist">
<b>Sort By</b> &nbsp;
<select name="sort2" class="tbox">
                     <option value="id">Data</option>
                     <option value="hits">Hits</option>
                     </select> &nbsp;
<select name="fel2" class="tbox">
                     <option value="DESC">Descendent</option>
                     <option value="ASC">Ascendent</option>
                     </select> &nbsp;
<input class="button" type="submit" name="submit" value="Submit">
</form><br></center>';

if($_POST['sort2'] == "") { $_POST['sort2'] = 'id'; }
if($_POST['fel2'] == "") { $_POST['fel2'] = 'DESC'; }


echo '<table width="500" border=1 align=center>
<tr><td align="center" colspan="8"><b>Not Aproved</b></td></tr>
<td><b>ID:</b></td>
<td><b>Title:</b></td>
<td><b>Descriere:</b></td>
<td><b>URL:</b></td>
<td><b>Hits:</b></td>
<td><b>Data:</b></td>
<td><b>User:</b></td>
<td><b>Edit:</b></td>
<td><b>Delete:</b></td>
</tr>';
$cerereSQL = 'SELECT * FROM `html` WHERE `aprove`="No" ORDER BY `'.$_POST['sort2'].'` '.$_POST['fel2'].'';
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['url'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
							  <td>'.$rand['user'].'</td>
                              <td><a href="admin_log.php?page=html&vaf=edittut&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=html&vaf=deltut&id='.$rand['id'].'">DELETE</a></td>
                              </tr>';

 } echo '</table>';

// aproved ///////////////////////////////////////

echo '<center>
<form method="POST" action="admin_log.php?page=html&vaf=tutlist">
<b>Sort By</b> &nbsp;
<select name="sort" class="tbox">
                     <option value="id">Data</option>
                     <option value="hits">Hits</option>
                     </select> &nbsp;
<select name="fel" class="tbox">
                     <option value="DESC">Descendent</option>
                     <option value="ASC">Ascendent</option>
                     </select> &nbsp;
<input class="button" type="submit" name="submit" value="Submit">
</form><br></center>';

if($_POST['sort'] == "") { $_POST['sort'] = 'id'; }
if($_POST['fel'] == "") { $_POST['fel'] = 'DESC'; }


echo '<table width="500" border=1 align=center>
<tr><td align="center" colspan="8"><b>Aproved</b></td></tr>
<td><b>ID:</b></td>
<td><b>Title:</b></td>
<td><b>Descriere:</b></td>
<td><b>URL:</b></td>
<td><b>Hits:</b></td>
<td><b>Data:</b></td>
<td><b>User:</b></td>
<td><b>Edit:</b></td>
<td><b>Delete:</b></td>
</tr>';
$cerereSQL = 'SELECT * FROM `html` WHERE `aprove`="Yes" ORDER BY `'.$_POST['sort'].'` '.$_POST['fel'].'';
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['url'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
							  <td>'.$rand['user'].'</td>
                              <td><a href="admin_log.php?page=html&vaf=edittut&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=html&vaf=deltut&id='.$rand['id'].'">DELETE</a></td>
                              </tr>';

 } echo '</table>';

break;

case 'edittut':
$_SESSION['id'] = $_GET['id'];

if(!is_numeric($_GET['id'])) {
echo '<br><br><br><center><h3><font color=red>Error!<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} else {
   $cerereSQL = "SELECT * FROM `html` WHERE `id`='".$_GET['id']."'"; 
   $rezultat = mysqli_query($conexiune, $cerereSQL);
   while($rand = mysqli_fetch_assoc($rezultat))
   {
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=html">HTML</a> > <a href="admin_log.php?page=html&vaf=tutlist">HTML Tutorial List</a> > Edit HTML Tutorial<br><p></p>';
echo '<form name="add" action="admin_log.php?page=html&vaf=editingtut" method="post">
<table border="0">
<tr>
<td><b>Title:</b></td>
<td><input class="tbox" type="text" size="60" name="title" value="'.$rand['title'].'"></td>   
</tr><tr>
<td><b>URL:</b></td>
<td><input class="tbox" type="text" size="60" name="url" value="'.$rand['url'].'"></td>   
</tr><tr>
<td><b>Desc:</b></td>
<td><input class="tbox" type="text" size="60" name="descriere" value="'.$rand['descriere'].'"></td>   
</tr><tr>
<td><b>Aprove:</b></td>
<td><select class="tbox" name="aprove"><option value="Yes" selected>Yes</option><option value="No">No</option></select></td>   
</tr><tr>
<td><b></b></td>
<td><input name="Submit" class="button" type="submit" id="Submit" value="Edit Tutorial"></td>
</tr>
</table> </form></center><br><br>';
   }
}
break;

case 'editingtut':
$_SESSION['title'] = $_POST['title'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['descriere'] = $_POST['descriere'];
$_SESSION['aprove'] = $_POST['aprove'];

if(($_SESSION['title'] == '') || ($_SESSION['url'] == ''))
{
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=html">HTML</a> > <a href="admin_log.php?page=html&vaf=tutlist">HTML Tutorial List</a> > Edit HTML Tutorial > Error !<br><p></p>';
echo '<br><br><br><center><h3><font color=red>Error! You dont add enything.<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} 
else 
{
echo '<br><br><br><center><h3>Modifing...</h3></center><br><br><br>';

$cerereSQL = "UPDATE `html` SET `title`='".htmlentities($_SESSION['title'], ENT_QUOTES)."', `url`='".htmlentities($_SESSION['url'], ENT_QUOTES)."', `descriere`='".htmlentities($_SESSION['descriere'], ENT_QUOTES)."', `aprove`='".htmlentities($_SESSION['aprove'], ENT_QUOTES)."' WHERE `id`='".$_SESSION['id']."'";
mysqli_query($conexiune, $cerereSQL);

$_SESSION['title'] = '';
$_SESSION['url'] = '';
$_SESSION['descriere'] = '';
$_SESSION['aprove'] = '';

echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=admin_log.php?page=html&vaf=tutlist">';
}
break;

case 'deltut':
$cerereSQL = "DELETE FROM `html` WHERE `id`='".htmlentities($_GET['id'], ENT_QUOTES)."'";
$rezultat = mysqli_query($conexiune, $cerereSQL);
echo '<br><br><br><center><h3>Tutorial was deleted!</h3></center><br><br><br>';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=javascript:history.back()">';
break;
}

   break;

//
// Photoshop
//

   case 'ps';

if(!isset($_GET['vaf'])) $_GET['vaf'] = '';
switch($_GET['vaf'])
{
case '':
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=ps">Photoshop</a><br><p></p>';
echo '<br><center><a href="admin_log.php?page=ps&vaf=addtut">Add Tutorials</a> :: <a href="admin_log.php?page=ps&vaf=tutlist">Edit Tutorials</a></center>';
break;

case 'addtut':

echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=ps">Photoshop</a> > <a href="admin_log.php?page=ps&vaf=addtut">Add Photoshop Tutorial</a><br><p></p>';
echo '<form name="add" action="admin_log.php?page=ps&vaf=addingtut" method="post">
<table border="0">
<tr>
<td><b>Title:</b></td>
<td><input class="tbox" type="text" size="60" name="title"></td>   
</tr><tr>
<td><b>URL:</b></td>
<td><input class="tbox" type="text" size="60" name="url"></td>   
</tr><tr>
<td><b>Desc:</b></td>
<td><input class="tbox" type="text" size="60" name="descriere"></td>   
</tr><tr>
<td><b>Banner:</b></td>
<td><input class="tbox" type="text" size="60" name="banner"></td>   
</tr><tr>
<td><b></b></td>
<td><input name="Submit" class="button" type="submit" id="Submit" value="Add Tutorial"></td>
</tr>
</table> </form><br><br></center>';

break;

case 'addingtut':
$_SESSION['title'] = $_POST['title'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['descriere'] = $_POST['descriere'];
$_SESSION['banner'] = $_POST['banner'];

if(($_SESSION['title'] == '') || ($_SESSION['url'] == ''))
{
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=ps">Photoshop</a> > <a href="admin_log.php?page=ps&vaf=addtut">Add Photoshop Tutorial</a> > Error !<br><p></p>';
echo '<br><br><br><center><h3><font color=red>Error! You dont add enything.<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} 
else 
{
echo '<br><br><br><center><h3>Adding...</h3></center><br><br><br>';
$data = date('d.m.Y');
$cerereSQL = "INSERT INTO `ps` ( `title`, `url`, `descriere`, `banner`, `data`, `user`, `aprove`) 
                   VALUES ( '".htmlentities($_SESSION['title'], ENT_QUOTES)."', '".htmlentities($_SESSION['url'], ENT_QUOTES)."', '".htmlentities($_SESSION['descriere'], ENT_QUOTES)."', '".htmlentities($_SESSION['banner'], ENT_QUOTES)."', '".$data."', 'admin:".htmlentities($_SESSION['usrname'], ENT_QUOTES)."', 'Yes')";
mysqli_query($conexiune, $cerereSQL);

$_SESSION['title'] = '';
$_SESSION['url'] = '';
$_SESSION['descriere'] = '';
$_SESSION['banner'] = '';

echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=admin_log.php?page=ps&vaf=addtut">';
}
break;

case 'tutlist':

echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=ps">Photoshop</a> > <a href="admin_log.php?page=ps&vaf=tutlist">Photoshop Tutorial List</a><br><p></p>';

// not aproved ///////////////////////////////////

echo '<center>
<form method="POST" action="admin_log.php?page=ps&vaf=tutlist">
<b>Sort By</b> &nbsp;
<select name="sort2" class="tbox">
                     <option value="id">Data</option>
                     <option value="hits">Hits</option>
                     </select> &nbsp;
<select name="fel2" class="tbox">
                     <option value="DESC">Descendent</option>
                     <option value="ASC">Ascendent</option>
                     </select> &nbsp;
<input class="button" type="submit" name="submit" value="Submit">
</form><br></center>';

if($_POST['sort2'] == "") { $_POST['sort2'] = 'id'; }
if($_POST['fel2'] == "") { $_POST['fel2'] = 'DESC'; }


echo '<table width="500" border=1 align=center>
<tr><td align="center" colspan="8"><b>Not Aproved</b></td></tr>
<td><b>ID:</b></td>
<td><b>Title:</b></td>
<td><b>Descriere:</b></td>
<td><b>URL:</b></td>
<td><b>Hits:</b></td>
<td><b>Data:</b></td>
<td><b>User:</b></td>
<td><b>Edit:</b></td>
<td><b>Delete:</b></td>
</tr>';
$cerereSQL = 'SELECT * FROM `ps` WHERE `aprove`="No" ORDER BY `'.$_POST['sort2'].'` '.$_POST['fel2'].'';
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['url'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
							  <td>'.$rand['user'].'</td>
                              <td><a href="admin_log.php?page=ps&vaf=edittut&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=ps&vaf=deltut&id='.$rand['id'].'">DELETE</a></td>
                              </tr>';

 } echo '</table>';

// aproved ///////////////////////////////////////

 echo '<center>
<form method="POST" action="admin_log.php?page=ps&vaf=tutlist">
<b>Sort By</b> &nbsp;
<select name="sort" class="tbox">
                     <option value="id">Data</option>
                     <option value="hits">Hits</option>
                     </select> &nbsp;
<select name="fel" class="tbox">
                     <option value="DESC">Descendent</option>
                     <option value="ASC">Ascendent</option>
                     </select> &nbsp;
<input class="button" type="submit" name="submit" value="Submit">
</form><br></center>';

if($_POST['sort'] == "") { $_POST['sort'] = 'id'; }
if($_POST['fel'] == "") { $_POST['fel'] = 'DESC'; }


echo '<table width="500" border=1 align=center>
<tr><td align="center" colspan="8"><b>Aproved</b></td></tr>
<td><b>ID:</b></td>
<td><b>Title:</b></td>
<td><b>Descriere:</b></td>
<td><b>URL:</b></td>
<td><b>Hits:</b></td>
<td><b>Data:</b></td>
<td><b>User:</b></td>
<td><b>Edit:</b></td>
<td><b>Delete:</b></td>
</tr>';
$cerereSQL = 'SELECT * FROM `ps` WHERE `aprove`="Yes" ORDER BY `'.$_POST['sort'].'` '.$_POST['fel'].'';
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['url'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
							  <td>'.$rand['user'].'</td>
                              <td><a href="admin_log.php?page=ps&vaf=edittut&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=ps&vaf=deltut&id='.$rand['id'].'">DELETE</a></td>
                              </tr>';

 } echo '</table>';

break;

case 'edittut':
$_SESSION['id'] = $_GET['id'];

if(!is_numeric($_GET['id'])) {
echo '<br><br><br><center><h3><font color=red>Error!<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} else {
   $cerereSQL = "SELECT * FROM `ps` WHERE `id`='".$_GET['id']."'"; 
   $rezultat = mysqli_query($conexiune, $cerereSQL);
   while($rand = mysqli_fetch_assoc($rezultat))
   {
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=ps">Photoshop</a> > <a href="admin_log.php?page=ps&vaf=tutlist">Photoshop Tutorial List</a> > Edit Photoshop Tutorial<br><p></p>';
echo '<form name="add" action="admin_log.php?page=ps&vaf=editingtut" method="post">
<table border="0">
<tr>
<td><b>Title:</b></td>
<td><input class="tbox" type="text" size="60" name="title" value="'.$rand['title'].'"></td>   
</tr><tr>
<td><b>URL:</b></td>
<td><input class="tbox" type="text" size="60" name="url" value="'.$rand['url'].'"></td>   
</tr><tr>
<td><b>Desc:</b></td>
<td><input class="tbox" type="text" size="60" name="descriere" value="'.$rand['descriere'].'"></td>   
</tr><tr>
<td><b>Banner:</b></td>
<td><input class="tbox" type="text" size="60" name="banner" value="'.$rand['banner'].'"></td>   
</tr><tr>
<td><b>Aprove:</b></td>
<td><select class="tbox" name="aprove"><option value="Yes" selected>Yes</option><option value="No">No</option></select></td>   
</tr><tr>
<td><b></b></td>
<td><input name="Submit" class="button" type="submit" id="Submit" value="Edit Tutorial"></td>
</tr>
</table> </form></center><br><br>';
   }
}
break;

case 'editingtut':
$_SESSION['title'] = $_POST['title'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['descriere'] = $_POST['descriere'];
$_SESSION['banner'] = $_POST['banner'];
$_SESSION['aprove'] = $_POST['aprove'];

if(($_SESSION['title'] == '') || ($_SESSION['url'] == ''))
{
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=ps">Photoshop</a> > <a href="admin_log.php?page=ps&vaf=tutlist">Photoshop Tutorial List</a> > Edit Photoshop Tutorial > Error !<br><p></p>';
echo '<br><br><br><center><h3><font color=red>Error! You dont add enything.<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} 
else 
{
echo '<br><br><br><center><h3>Modifing...</h3></center><br><br><br>';

$cerereSQL = "UPDATE `ps` SET `title`='".htmlentities($_SESSION['title'], ENT_QUOTES)."', `url`='".htmlentities($_SESSION['url'], ENT_QUOTES)."', `descriere`='".htmlentities($_SESSION['descriere'], ENT_QUOTES)."', `banner`='".htmlentities($_SESSION['banner'], ENT_QUOTES)."', `aprove`='".htmlentities($_SESSION['aprove'], ENT_QUOTES)."' WHERE `id`='".$_SESSION['id']."'";
mysqli_query($conexiune, $cerereSQL);

$_SESSION['title'] = '';
$_SESSION['url'] = '';
$_SESSION['descriere'] = '';
$_SESSION['banner'] = '';
$_SESSION['aprove'] = '';

echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=admin_log.php?page=ps&vaf=tutlist">';
}
break;

case 'deltut':
$cerereSQL = "DELETE FROM `ps` WHERE `id`='".htmlentities($_GET['id'], ENT_QUOTES)."'";
$rezultat = mysqli_query($conexiune, $cerereSQL);
echo '<br><br><br><center><h3>Tutorial was deleted!</h3></center><br><br><br>';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=javascript:history.back()">';
break;
}

   break;

//
// PHP
//

   case 'php';

if(!isset($_GET['vaf'])) $_GET['vaf'] = '';
switch($_GET['vaf'])
{
case '':
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=php">PHP</a><br><p></p>';
echo '<br><center><a href="admin_log.php?page=php&vaf=addtut">Add Tutorials</a> :: <a href="admin_log.php?page=php&vaf=tutlist">Edit Tutorials</a></center>';
break;

case 'addtut':

echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=php">PHP</a> > <a href="admin_log.php?page=php&vaf=addtut">Add PHP Tutorial</a><br><p></p>';
echo '<form name="add" action="admin_log.php?page=php&vaf=addingtut" method="post">
<table border="0">
<tr>
<td><b>Title:</b></td>
<td><input class="tbox" type="text" size="60" name="title"></td>   
</tr><tr>
<td><b>URL:</b></td>
<td><input class="tbox" type="text" size="60" name="url"></td>   
</tr><tr>
<td><b>Desc:</b></td>
<td><input class="tbox" type="text" size="60" name="descriere"></td>   
</tr><tr>
<td><b></b></td>
<td><input name="Submit" class="button" type="submit" id="Submit" value="Add Tutorial"></td>
</tr>
</table> </form><br><br></center>';

break;

case 'addingtut':
$_SESSION['title'] = $_POST['title'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['descriere'] = $_POST['descriere'];

if(($_SESSION['title'] == '') || ($_SESSION['url'] == ''))
{
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=php">PHP</a> > <a href="admin_log.php?page=php&vaf=addtut">Add PHP Tutorial</a> > Error !<br><p></p>';
echo '<br><br><br><center><h3><font color=red>Error! You dont add enything.<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} 
else 
{
echo '<br><br><br><center><h3>Adding...</h3></center><br><br><br>';
$data = date('d.m.Y');
$cerereSQL = "INSERT INTO `php` ( `title`, `url`, `descriere`, `data`, `user`, `aprove`) 
                   VALUES ( '".htmlentities($_SESSION['title'], ENT_QUOTES)."', '".htmlentities($_SESSION['url'], ENT_QUOTES)."', '".htmlentities($_SESSION['descriere'], ENT_QUOTES)."', '".$data."', 'admin:".htmlentities($_SESSION['usrname'], ENT_QUOTES)."', 'Yes')";
mysqli_query($conexiune, $cerereSQL);

$_SESSION['title'] = '';
$_SESSION['url'] = '';
$_SESSION['descriere'] = '';

echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=admin_log.php?page=php&vaf=addtut">';
}
break;

case 'tutlist':

echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=php">PHP</a> > <a href="admin_log.php?page=php&vaf=tutlist">PHP Tutorial List</a><br><p></p>';

// not aproved ///////////////////////////////////

echo '<center>
<form method="POST" action="admin_log.php?page=php&vaf=tutlist">
<b>Sort By</b> &nbsp;
<select name="sort2" class="tbox">
                     <option value="id">Data</option>
                     <option value="hits">Hits</option>
                     </select> &nbsp;
<select name="fel2" class="tbox">
                     <option value="DESC">Descendent</option>
                     <option value="ASC">Ascendent</option>
                     </select> &nbsp;
<input class="button" type="submit" name="submit" value="Submit">
</form><br></center>';

if($_POST['sort2'] == "") { $_POST['sort2'] = 'id'; }
if($_POST['fel2'] == "") { $_POST['fel2'] = 'DESC'; }


echo '<table width="500" border=1 align=center>
<tr><td align="center" colspan="8"><b>Not Aproved</b></td></tr>
<td><b>ID:</b></td>
<td><b>Title:</b></td>
<td><b>Descriere:</b></td>
<td><b>URL:</b></td>
<td><b>Hits:</b></td>
<td><b>Data:</b></td>
<td><b>User:</b></td>
<td><b>Edit:</b></td>
<td><b>Delete:</b></td>
</tr>';
$cerereSQL = 'SELECT * FROM `php` WHERE `aprove`="No" ORDER BY `'.$_POST['sort2'].'` '.$_POST['fel2'].'';
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['url'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
							  <td>'.$rand['user'].'</td>
                              <td><a href="admin_log.php?page=php&vaf=edittut&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=php&vaf=deltut&id='.$rand['id'].'">DELETE</a></td>
                              </tr>';

 } echo '</table>';

// aproved ///////////////////////////////////////

echo '<center>
<form method="POST" action="admin_log.php?page=php&vaf=tutlist">
<b>Sort By</b> &nbsp;
<select name="sort" class="tbox">
                     <option value="id">Data</option>
                     <option value="hits">Hits</option>
                     </select> &nbsp;
<select name="fel" class="tbox">
                     <option value="DESC">Descendent</option>
                     <option value="ASC">Ascendent</option>
                     </select> &nbsp;
<input class="button" type="submit" name="submit" value="Submit">
</form><br></center>';

if($_POST['sort'] == "") { $_POST['sort'] = 'id'; }
if($_POST['fel'] == "") { $_POST['fel'] = 'DESC'; }


echo '<table width="500" border=1 align=center>
<tr><td align="center" colspan="8"><b>Aproved</b></td></tr>
<td><b>ID:</b></td>
<td><b>Title:</b></td>
<td><b>Descriere:</b></td>
<td><b>URL:</b></td>
<td><b>Hits:</b></td>
<td><b>Data:</b></td>
<td><b>User:</b></td>
<td><b>Edit:</b></td>
<td><b>Delete:</b></td>
</tr>';
$cerereSQL = 'SELECT * FROM `php` WHERE `aprove`="Yes" ORDER BY `'.$_POST['sort'].'` '.$_POST['fel'].'';
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<tr>
                              <td>'.$rand['id'].'</td>
                              <td><a href="'.$rand['url'].'" target="_blank">'.$rand['title'].'</a></td>
							  <td>'.$rand['descriere'].'</td>
                              <td>'.$rand['url'].'</td>
                              <td>'.$rand['hits'].'</td>
                              <td>'.$rand['data'].'</td>
							  <td>'.$rand['user'].'</td>
                              <td><a href="admin_log.php?page=php&vaf=edittut&id='.$rand['id'].'">Edit</a></td>
                              <td><a href="admin_log.php?page=php&vaf=deltut&id='.$rand['id'].'">DELETE</a></td>
                              </tr>';

 } echo '</table>';
 
break;

case 'edittut':
$_SESSION['id'] = $_GET['id'];

if(!is_numeric($_GET['id'])) {
echo '<br><br><br><center><h3><font color=red>Error!<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} else {
   $cerereSQL = "SELECT * FROM `php` WHERE `id`='".$_GET['id']."'"; 
   $rezultat = mysqli_query($conexiune, $cerereSQL);
   while($rand = mysqli_fetch_assoc($rezultat))
   {
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=php">PHP</a> > <a href="admin_log.php?page=php&vaf=tutlist">PHP Tutorial List</a> > Edit PHP Tutorial<br><p></p>';
echo '<form name="add" action="admin_log.php?page=php&vaf=editingtut" method="post">
<table border="0">
<tr>
<td><b>Title:</b></td>
<td><input class="tbox" type="text" size="60" name="title" value="'.$rand['title'].'"></td>   
</tr><tr>
<td><b>URL:</b></td>
<td><input class="tbox" type="text" size="60" name="url" value="'.$rand['url'].'"></td>   
</tr><tr>
<td><b>Desc:</b></td>
<td><input class="tbox" type="text" size="60" name="descriere" value="'.$rand['descriere'].'"></td>   
</tr><tr>
<td><b>Aprove:</b></td>
<td><select class="tbox" name="aprove"><option value="Yes" selected>Yes</option><option value="No">No</option></select></td>   
</tr><tr>
<td><b></b></td>
<td><input name="Submit" class="button" type="submit" id="Submit" value="Edit Tutorial"></td>
</tr>
</table> </form></center><br><br>';
   }
}
break;

case 'editingtut':
$_SESSION['title'] = $_POST['title'];
$_SESSION['url'] = $_POST['url'];
$_SESSION['descriere'] = $_POST['descriere'];
$_SESSION['aprove'] = $_POST['aprove'];

if(($_SESSION['title'] == '') || ($_SESSION['url'] == ''))
{
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=php">PHP</a> > <a href="admin_log.php?page=php&vaf=tutlist">PHP Tutorial List</a> > Edit PHP Tutorial > Error !<br><p></p>';
echo '<br><br><br><center><h3><font color=red>Error! You dont add enything.<br><a href="javascript:history.back()">Go Back</a></font></h3></center><br><br><br>';
} 
else 
{
echo '<br><br><br><center><h3>Modifing...</h3></center><br><br><br>';

$cerereSQL = "UPDATE `php` SET `title`='".htmlentities($_SESSION['title'], ENT_QUOTES)."', `url`='".htmlentities($_SESSION['url'], ENT_QUOTES)."', `descriere`='".htmlentities($_SESSION['descriere'], ENT_QUOTES)."', `aprove`='".htmlentities($_SESSION['aprove'], ENT_QUOTES)."' WHERE `id`='".$_SESSION['id']."'";
mysqli_query($conexiune, $cerereSQL);

$_SESSION['title'] = '';
$_SESSION['url'] = '';
$_SESSION['descriere'] = '';
$_SESSION['aprove'] = '';

echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=admin_log.php?page=php&vaf=tutlist">';
}
break;

case 'deltut':
$cerereSQL = "DELETE FROM `php` WHERE `id`='".htmlentities($_GET['id'], ENT_QUOTES)."'";
$rezultat = mysqli_query($conexiune, $cerereSQL);
echo '<br><br><br><center><h3>Tutorial was deleted!</h3></center><br><br><br>';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=javascript:history.back()">';
break;
}

   break; 

//
// Shoutbox
//

   case 'sbox';

if(!isset($_GET['vaf'])) $_GET['vaf'] = '';
switch($_GET['vaf'])
{

case '':
echo '<a href="admin_log.php">Admin Area</a> > <a href="admin_log.php?page=sbox">Shoutbox</a><br><p></p>';


echo '<div class=\"shoutbox\">';
$cerereSQL = 'SELECT * FROM `shoutbox` ORDER BY `id` DESC';
$rezultat = mysqli_query($conexiune, $cerereSQL);
while($rand = mysqli_fetch_assoc($rezultat)) {
                        echo '<li title="Shouted on '.$rand['date'].'" style=\"cursor: pointer\"><strong>'.$rand['name'].'</strong>: '.$rand['message'].' ... '.$rand['ip'].' <a href="admin_log.php?page=sbox&vaf=deltut&id='.$rand['id'].'">[DELETE]</a></li>';

 } echo '</div>';
break;

case 'deltut':
$cerereSQL = "DELETE FROM `shoutbox` WHERE `id`='".htmlentities($_GET['id'], ENT_QUOTES)."'";
$rezultat = mysqli_query($conexiune, $cerereSQL);
echo '<br><br><br><center><h3>Message was deleted!</h3></center><br><br><br>';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=javascript:history.back()">';
break;
}

   break; 

}

echo '<br>';
echo '</td>
  </tr>
</table>';
