<?php



include_once ("config.php");





	$query = "SELECT * FROM `css` WHERE `id`='$id' LIMIT 1";

	$result = mysql_query($query);

	$numrows = mysql_num_rows($result);



	while($row = mysql_fetch_array($result))



if($id == "$row[id]"){





	$query = "SELECT * FROM `css` WHERE `id`='$id' LIMIT 1";

	$result = mysql_query($query);

	$numrows = mysql_num_rows($result);



	while($row = mysql_fetch_array($result))



$cra = $row[rates] + 1;



	$query = "SELECT * FROM `css` WHERE `id`='$id' LIMIT 1";

	$result = mysql_query($query);

	$numrows = mysql_num_rows($result);



	while($row = mysql_fetch_array($result))



$crs = $row[rating] + $_POST['crating'];



$query = "UPDATE `css` SET `rates`='$cra' WHERE `id`='$id'";

mysql_query($query);



$query2 = "UPDATE `css` SET `rating`='$crs' WHERE `id`='$id'";

mysql_query($query2);





echo "<center><font color='black' face='verdana' size='1'><B>Your vote has been counted!</B>";



	$query = "SELECT * FROM `css` WHERE `id`='$id' LIMIT 1";

	$result = mysql_query($query);

	$numrows = mysql_num_rows($result);



	while($row = mysql_fetch_array($result))



$fout = $row[rating] / $row[rates];

$fout2 = round($fout, 1);



$query2 = "UPDATE `css` SET `rd`='$fout2' WHERE `id`='$id'";

mysql_query($query2);







}
