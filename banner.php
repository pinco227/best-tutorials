<?php

$cerereSQLbanner = mysqli_query($conexiune, 'SELECT * FROM `banner` WHERE `aprove`="Yes" ORDER BY `hits` DESC');
$n=0;
  echo '<center>';
  while($rand = mysqli_fetch_assoc($cerereSQLbanner))
{

$n++;
if($n < 6) {
  echo '<a href="'.$siteurl.'/banner2.php?id='.$rand['id'].'" target="_blank"><img src="'.$rand['banner'].'" alt="'.$rand['title'].' - '.$rand['hits'].' hits" width="88" height="31" border="0"></a><table><tbody><tr><td></td></tr></tbody></table>'; 
} 
else {
  echo '<a href="'.$siteurl.'/banner2.php?id='.$rand['id'].'" target="_blank" alt="'.$rand['hits'].' hits">'.$rand['title'].'</a><table><tbody><tr><td></td></tr></tbody></table>'; 
}

}
  echo '</center>';

?>