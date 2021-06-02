<?php	

require('config.php');

$cerereSQL = 'SELECT * FROM `banner` WHERE `id`="'.$_GET['id'].'"';
$rezultat = mysqli_query($conexiune, $cerereSQL);
	while($rand = mysqli_fetch_assoc($rezultat)) {
		$cerereSQL = "UPDATE `banner` SET `hits`='".($rand['hits']+1)."' WHERE `id`='".$_GET['id']."' ";
		mysqli_query($conexiune, $cerereSQL);
		echo '<frameset rows="60,*" framespacing="0" border="0" frameborder="0">
			<frame height="60" name="header" scrolling="no" noresize target="main" src="top2.php" marginwidth="0" marginheight="0">
			<frame name="main" marginwidth="0" marginheight="0" src="'.$rand['url'].'" scrolling="auto" noresize>
		</frameset>';
	}

?>