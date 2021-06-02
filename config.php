<?php
session_start();
set_time_limit(0);
error_reporting(E_ALL);

if (file_exists('env.php')) include('env.php');

// Informatii baza de date

$AdresaBazaDate = $_ENV['DB_URL'];
$UtilizatorBazaDate = $_ENV['DB_USER'];
$ParolaBazaDate = $_ENV['DB_PASS'];
$NumeBazaDate = $_ENV['DB_NAME'];

//Shoutbox Configuration

//Message length limit (in characters)
$max_length = '150';

//Shoutbox message limit (Dont set this too high!)
$dmessage = '20';

$conexiune = mysqli_connect($AdresaBazaDate, $UtilizatorBazaDate, $ParolaBazaDate, $NumeBazaDate) or die("Can not connect to MySQL Server");
//  mysqli_select_db($NumeBazaDate, $conexiune) or die("Data Base not exist");

function addentities($data)
{
  if (trim($data) != '') {
    $data = htmlentities($data, ENT_QUOTES);
    return str_replace('\\', '&#92;', $data);
  } else return $data;
} // End addentities() --------------
