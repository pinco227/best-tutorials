<?php
session_start();
set_time_limit(0);
error_reporting(E_ALL);

if(file_exists('env.php')) include('env.php');

// Informatii baza de date

 $AdresaBazaDate = "localhost";
 $UtilizatorBazaDate = $_ENV['DB_USER'];
 $ParolaBazaDate = $_ENV['DB_PASS'];
 $NumeBazaDate = "tutorials";

//Shoutbox Configuration

   //Message length limit (in characters)
   $max_length = '150';

   //Shoutbox message limit (Dont set this too high!)
   $dmessage = '20';

 $conexiune = mysql_connect($AdresaBazaDate,$UtilizatorBazaDate,$ParolaBazaDate) or die("Can not connect to MySQL Server");
 mysql_select_db($NumeBazaDate, $conexiune) or die("Data Base not exist");
 
function addentities($data){
if(trim($data) != ''){
$data = htmlentities($data, ENT_QUOTES);
return str_replace('\\', '&#92;', $data);
} else return $data;
} // End addentities() --------------

?>
