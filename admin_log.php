<?php
session_start();

require('config.php');

include('header.php');

//
//
//
// FIRST USER
//
//
//

if((($_POST['usrname'] == $_ENV['ADMIN_USER']) && ($_POST['usrpass'] == $_ENV['ADMIN_PASS'])) OR ($_SESSION['usrname'] == $_ENV['ADMIN_USER']))
{
$_SESSION['usrname'] = $_POST['usrname'];

include('admin.php');

}  else {

echo '<center><form method="post" action="admin_log.php"><h3>:: Please Log-In First ::</h3><br><br>Username : <input type="text" name="usrname" value="" size="20"><br>Password : <input type="password" name="usrpass" value="" size="20"><br><input type="submit" value="Login !" class="button"></form></center>';

}
include('footer.php')
?>