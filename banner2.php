<?php	

// Informatii baza de date

 $host = "mysql77.secureserver.net";
 $dbuser = "P4uL";
 $dbpass = "mustacios";
 $dbname = "P4uL";

$connect = mysql_connect($host,$dbuser,$dbpass) or die("Can not connect to MySQL Server");
 mysql_select_db($dbname, $connect) or die("Data Base not exist");

$cerereSQL = 'SELECT * FROM `banner` WHERE `id`="'.$_GET['id'].'"';
$rezultat = mysql_query($cerereSQL, $connect);
	while($rand = mysql_fetch_array($rezultat)) {
		$cerereSQL = "UPDATE `banner` SET `hits`='".($rand['hits']+1)."' WHERE `id`='".$_GET['id']."' ";
		mysql_query($cerereSQL, $connect);
		echo '<frameset rows="60,*" framespacing="0" border="0" frameborder="0">
			<frame height="60" name="header" scrolling="no" noresize target="main" src="top2.php" marginwidth="0" marginheight="0">
			<frame name="main" marginwidth="0" marginheight="0" src="'.$rand['url'].'" scrolling="auto" noresize>
		</frameset>';
	}

?>