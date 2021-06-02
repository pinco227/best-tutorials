<?php

include_once("config.php");


$query = "SELECT * FROM `ps` WHERE `id`='$id' LIMIT 1";
$result = mysqli_query($conexiune, $query);
$numrows = mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result))

	if ($id == "$row[id]") {

		echo "<html>
<body bgcolor='lightgrey'>";

		$query = "SELECT * FROM `ps` WHERE `id`='$id' LIMIT 1";
		$result = mysqli_query($conexiune, $query);
		$numrows = mysqli_num_rows($result);

		while ($row = mysqli_fetch_assoc($result))

			$cra = $row['rates'] + 1;

		$query = "SELECT * FROM `ps` WHERE `id`='$id' LIMIT 1";
		$result = mysqli_query($conexiune, $query);
		$numrows = mysqli_num_rows($result);

		while ($row = mysqli_fetch_assoc($result))

			$crs = $row['rating'] + $crating;

		$query = "UPDATE `ps` SET `rates`='$cra' WHERE `id`='$id'";
		mysqli_query($conexiune, $query);

		$query2 = "UPDATE `ps` SET `rating`='$crs' WHERE `id`='$id'";
		mysqli_query($conexiune, $query2);


		echo "<center><font color='black' face='verdana' size='1'><B>Your vote has been counted!</B>";

		$query = "SELECT * FROM `ps` WHERE `id`='$id' LIMIT 1";
		$result = mysqli_query($conexiune, $query);
		$numrows = mysqli_num_rows($result);

		while ($row = mysqli_fetch_assoc($result))

			$fout = $row['rating'] / $row['rates'];
		$fout2 = round($fout, 1);

		$query2 = "UPDATE `ps` SET `rd`='$fout2' WHERE `id`='$id'";
		mysqli_query($conexiune, $query2);
	}
