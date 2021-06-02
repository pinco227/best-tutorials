<?php	
require_once 'config.php';

$cerereSQL = 'SELECT * FROM `php` WHERE `id`="'.$_GET['id'].'"';
$rezultat = mysql_query($cerereSQL, $conexiune);
	while($rand = mysql_fetch_array($rezultat)) {
		$cerereSQL = "UPDATE `php` SET `hits`='".($rand['hits']+1)."' WHERE `id`='".$_GET['id']."' ";
		mysql_query($cerereSQL, $conexiune);
		echo '<frameset rows="60,*,22" framespacing="0" border="0" frameborder="0">
			<frame height="60" name="header" scrolling="no" noresize target="main" src="top.php?id='.$_GET['id'].'" marginwidth="0" marginheight="0">
			<frame name="main" marginwidth="0" marginheight="0" src="'.$rand['url'].'" scrolling="auto" noresize>
			<frame name="rate" marginwidth="0" marginheight="0" src="php_bottom.php?id='.$_GET['id'].'" noresize>";
		</frameset>';
	}

?>