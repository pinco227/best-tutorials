<?php
session_start();
set_time_limit(0);
error_reporting(0);

echo '<table border=0 cellspacing="2" cellpadding="2" width="100%">';

// CSS

$cerereSQLsearchcss = 'SELECT * FROM `css` WHERE `title` LIKE "%'.addentities($_POST['cauta']).'%"';
$rezultatsearchcss = mysqli_query($cerereSQLsearchcss);

if(mysqli_num_rows($rezultatsearchcss) > 0) {
	while($rand = mysqli_fetch_assoc($rezultatsearchcss))	
	{
    echo '  <tr>
    		<td width="40" height="40" rowspan="2"><img src="'.$rand['banner'].'" width="40" height="40"></td>
    		<td><b><a href="http://www.divertisment.org/links/link.php?url=http://gfx.divertisment.org/animatii/tutorial.php?id='.$rand['id'].'" target="_blank"><font color="green">'.$rand['title'].'</font></a></b></td>
    		<td width="40" height="40" rowspan="2"><center>'.$rand['hits'].'</center></td>
  	    </tr>
  	    <tr>
    		<td>'.$rand['descriere'].'</td>
  	    </tr>';
	}   
} else {
echo 'Here was no CSS Stylesheets tutorials found for your search !';
}

// HTML

$cerereSQLsearchhtml = 'SELECT * FROM `html` WHERE `title` LIKE "%'.addentities($_POST['cauta']).'%"';
$rezultatsearchhtml = mysqli_query($cerereSQLsearchhtml);

if(mysqli_num_rows($rezultatsearchhtml) > 0) {
	while($rand = mysqli_fetch_assoc($rezultatsearchhtml))	
	{
    echo '  <tr>
    		<td width="40" height="40" rowspan="2"><img src="'.$rand['banner'].'" width="40" height="40"></td>
    		<td><b><a href="http://www.divertisment.org/links/link.php?url=http://gfx.divertisment.org/animatii/tutorial.php?id='.$rand['id'].'" target="_blank"><font color="green">'.$rand['title'].'</font></a></b></td>
    		<td width="40" height="40" rowspan="2"><center>'.$rand['hits'].'</center></td>
  	    </tr>
  	    <tr>
    		<td>'.$rand['descriere'].'</td>
  	    </tr>';
	}   
} else {
echo 'Here was no HTML tutorials found for your search !';
}

// Photoshop

$cerereSQLsearchps = 'SELECT * FROM `ps` WHERE `title` LIKE "%'.addentities($_POST['cauta']).'%"';
$rezultatsearchps = mysqli_query($cerereSQLsearchps);

if(mysqli_num_rows($rezultatsearchps) > 0) {
	while($rand = mysqli_fetch_assoc($rezultatsearchps))	
	{
    echo '  <tr>
    		<td width="40" height="40" rowspan="2"><img src="'.$rand['banner'].'" width="40" height="40"></td>
    		<td><b><a href="http://www.divertisment.org/links/link.php?url=http://gfx.divertisment.org/animatii/tutorial.php?id='.$rand['id'].'" target="_blank"><font color="green">'.$rand['title'].'</font></a></b></td>
    		<td width="40" height="40" rowspan="2"><center>'.$rand['hits'].'</center></td>
  	    </tr>
  	    <tr>
    		<td>'.$rand['descriere'].'</td>
  	    </tr>';
	}   
} else {
echo 'Here was no Photoshop tutorials found for your search !';
}

// PHP

$cerereSQLsearchphp = 'SELECT * FROM `php` WHERE `title` LIKE "%'.addentities($_POST['cauta']).'%"';
$rezultatsearchphp = mysqli_query($cerereSQLsearchps);

if(mysqli_num_rows($rezultatsearchphp) > 0) {
	while($rand = mysqli_fetch_assoc($rezultatsearchphp))	
	{
    echo '  <tr>
    		<td width="40" height="40" rowspan="2"><img src="'.$rand['banner'].'" width="40" height="40"></td>
    		<td><b><a href="http://www.divertisment.org/links/link.php?url=http://gfx.divertisment.org/animatii/tutorial.php?id='.$rand['id'].'" target="_blank"><font color="green">'.$rand['title'].'</font></a></b></td>
    		<td width="40" height="40" rowspan="2"><center>'.$rand['hits'].'</center></td>
  	    </tr>
  	    <tr>
    		<td>'.$rand['descriere'].'</td>
  	    </tr>';
	}   
} else {
echo 'Here was no PHP tutorials found for your search !';
}

echo '</table>';
?>