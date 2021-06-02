<?php

$css = mysql_result(mysql_query('SELECT COUNT(*) as Num FROM `css` WHERE `aprove`="Yes"'),0);
$html = mysql_result(mysql_query('SELECT COUNT(*) as Num FROM `html` WHERE `aprove`="Yes"'),0);
$ps = mysql_result(mysql_query('SELECT COUNT(*) as Num FROM `ps` WHERE `aprove`="Yes"'),0);
$php = mysql_result(mysql_query('SELECT COUNT(*) as Num FROM `php` WHERE `aprove`="Yes"'),0);
$link = mysql_result(mysql_query('SELECT COUNT(*) as Num FROM `banner` WHERE `aprove`="Yes"'),0);

echo 'Online Visitors : <b><script type="text/javascript" src="http://freeonlineusers.com/on1.php?id=644"> </script></b><br><br>CSS Tutorials : <b>'.$css.'</b><br>HTML Tutorials : <b>'.$html.'</b><br>Photoshop Tutorials : <b>'.$ps.'</b><br>PHP Tutorials : <b>'.$php.'</b><br>Links : <b>'.$link.'</b>';
?>