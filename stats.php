<?php

$css = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `css` WHERE `aprove`="Yes"'));
$html = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `html` WHERE `aprove`="Yes"'));
$ps = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `ps` WHERE `aprove`="Yes"'));
$php = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `php` WHERE `aprove`="Yes"'));
$link = mysqli_num_rows(mysqli_query($conexiune, 'SELECT COUNT(*) as Num FROM `banner` WHERE `aprove`="Yes"'));

echo 'Online Visitors : <b><script type="text/javascript" src="http://freeonlineusers.com/on1.php?id=644"> </script></b><br><br>CSS Tutorials : <b>'.$css.'</b><br>HTML Tutorials : <b>'.$html.'</b><br>Photoshop Tutorials : <b>'.$ps.'</b><br>PHP Tutorials : <b>'.$php.'</b><br>Links : <b>'.$link.'</b>';
