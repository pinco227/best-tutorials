<script type="text/javascript">
<!--
  function addsmiley(code)  {
    var pretext = document.forms['shoutbox_form'].shoutbox_message.value;
      this.code = code;
      document.forms['shoutbox_form'].shoutbox_message.value = pretext + code;
  }
//-->
</script>
<?php

error_reporting(0);
$siteurl = '.';

    if ($_POST['shoutbox_submit'])  {
      $name = $_POST['shoutbox_name'];
      $ip = $_POST['shoutbox_ip'];
      $message = $_POST['shoutbox_message'];
      $mlen = strlen($message);
      $date = date("F jS Y");
      if ($name == "") { 
        echo "<strong>Error: Please enter your nickname.</strong>"; 
      }
      else if ($message == "") { 
        echo "<strong>Error: No message to be sent.</strong>"; 
      }
      else if ($mlen > $max_length) { 
        echo "<strong>Error: Message too long.</strong>"; 
      }
     else {
      // $db = mysql_connect($AdresaBazaDate,$UtilizatorBazaDate,$ParolaBazaDate); 
      // mysql_select_db($NumeBazaDate) or die("Cannot connect to database");
      mysql_query("INSERT INTO `shoutbox` ( `name`, `ip`, `message`, `date`) VALUES('$name','$ip','$message','$date')"); 
      // mysql_close($db);
	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=javascript:history.back()">';
      }
    }
  // $db = mysql_connect($AdresaBazaDate,$UtilizatorBazaDate,$ParolaBazaDate); 
  // mysql_select_db($NumeBazaDate) or die("Cannot connect to database");
  $query = "SELECT * FROM `shoutbox` ORDER BY `id` DESC LIMIT $dmessage"; 
  $result = mysql_query($query);
    echo "<div class=\"shoutbox\">";
    while($r=mysql_fetch_array($result)) {
      //Strips unwanted HTML from nickname
      $name = $r['name'];
      $name = strip_tags($name);
      //Strips unwanted HTML from message
      $message = $r['message'];
      $message = strip_tags($message);
      // Transform text to smileys =) 
      $message = str_replace("=((","<img src=\"".$siteurl."/smileys/sad.gif\" alt=\"=((\"/>", $message);
      $message = str_replace(":(","<img src=\"".$siteurl."/smileys/sad.gif\" alt=\":(\"/>", $message);
      $message = str_replace(":((","<img src=\"".$siteurl."/smileys/cry.gif\" alt=\":((\"/>", $message);
      $message = str_replace(":-((","<img src=\"".$siteurl."/smileys/cry.gif\" alt=\":-((\"/>", $message);
      $message = str_replace("X(","<img src=\"".$siteurl."/smileys/mad.gif\" alt=\"X(\"/>", $message);
      $message = str_replace("x(","<img src=\"".$siteurl."/smileys/mad.gif\" alt=\"x(\"/>", $message);
      $message = str_replace("X-(","<img src=\"".$siteurl."/smileys/mad.gif\" alt=\"X-(\"/>", $message);
      $message = str_replace("x-(","<img src=\"".$siteurl."/smileys/mad.gif\" alt=\"x-(\"/>", $message);
      $message = str_replace(":)","<img src=\"".$siteurl."/smileys/smile.gif\" alt=\":)\"/>", $message);
      $message = str_replace(":-)","<img src=\"".$siteurl."/smileys/smile.gif\" alt=\":-)\"/>", $message);
      $message = ereg_replace(":D","<img src=\"".$siteurl."/smileys/laugh.gif\" alt=\":D\"/>", $message);
      $message = ereg_replace(":d","<img src=\"".$siteurl."/smileys/laugh.gif\" alt=\":d\"/>", $message);
      $message = ereg_replace(":-D","<img src=\"".$siteurl."/smileys/laugh.gif\" alt=\":-D\"/>", $message);
      $message = ereg_replace(":-d","<img src=\"".$siteurl."/smileys/laugh.gif\" alt=\":-d\"/>", $message);
      $message = ereg_replace(":p","<img src=\"".$siteurl."/smileys/tongue.gif\" alt=\":p\"/>", $message);
      $message = ereg_replace(":P","<img src=\"".$siteurl."/smileys/tongue.gif\" alt=\":P\"/>", $message);
      $message = ereg_replace(":-p","<img src=\"".$siteurl."/smileys/tongue.gif\" alt=\":-p\"/>", $message);
      $message = ereg_replace(":-P","<img src=\"".$siteurl."/smileys/tongue.gif\" alt=\":-P\"/>", $message);
      $message = ereg_replace(":O","<img src=\"".$siteurl."/smileys/shocked.gif\" alt=\":O\"/>", $message);
      $message = ereg_replace(":o","<img src=\"".$siteurl."/smileys/shocked.gif\" alt=\":o\"/>", $message);
      $message = ereg_replace(":-O","<img src=\"".$siteurl."/smileys/shocked.gif\" alt=\":-O\"/>", $message);
      $message = ereg_replace(":-o","<img src=\"".$siteurl."/smileys/shocked.gif\" alt=\":-o\"/>", $message);
      $message = ereg_replace(";)","<img src=\"".$siteurl."/smileys/wink.gif\" alt=\";)\"/>", $message);
      $message = ereg_replace(":S","<img src=\"".$siteurl."/smileys/sick.gif\" alt=\":S\"/>", $message);
      $message = ereg_replace(":s","<img src=\"".$siteurl."/smileys/sick.gif\" alt=\":s\"/>", $message);
      $message = ereg_replace(":-S","<img src=\"".$siteurl."/smileys/sick.gif\" alt=\":-S\"/>", $message);
      $message = ereg_replace(":-s","<img src=\"".$siteurl."/smileys/sick.gif\" alt=\":-s\"/>", $message);
      $message = ereg_replace(":roll:","<img src=\"".$siteurl."/smileys/roll.gif\" alt=\":roll:\"/>", $message);
      $message = str_replace("pula","****", $message);
      $message = str_replace("pizda","*****", $message);
      $message = str_replace("fut","***", $message);
      $message = str_replace(".ro","***", $message);
      $message = str_replace(".lx.ro","***", $message);
      $message = str_replace(".com","***", $message);
      $message = str_replace(".tk","***", $message);
      $message = str_replace(".org","***", $message);
      echo "<li title=\"Shouted on $r[date]\" style=\"cursor: default\"><u><strong>$name</strong></u>: $message</li>\n";
	  if(($_SESSION['usrname'] == 'P4uL') OR ($_SESSION['usrname'] == 'ovi91') OR ($_SESSION['usrname'] == 'mihai'))
	  { echo '<a href="admin_log.php?page=sbox&vaf=deltut&id='.$r['id'].'">[DELETE]</a>'; }
    }
      echo "</div>";
      // mysql_close($db);
?>

<div align="center">
  <form id="shoutbox_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <strong>Nickname:</strong><br/>
    <input type="text" name="shoutbox_name" size="18" maxlength="20" class="input"><br>
    <strong>Message:</strong><br/>
    <textarea id="shoutbox-message" cols="22" rows="3" name="shoutbox_message" class="textarea"></textarea><br>
    <img class="smileys" src="<?php echo ''.$siteurl.''; ?>/smileys/smile.gif" alt=":)" onclick="addsmiley(':)')"/>
    <img class="smileys" src="<?php echo ''.$siteurl.''; ?>/smileys/laugh.gif" alt=":D" onclick="addsmiley(':D')"/>
    <img class="smileys" src="<?php echo ''.$siteurl.''; ?>/smileys/wink.gif" alt=";)" onclick="addsmiley(';)')"/>
    <img class="smileys" src="<?php echo ''.$siteurl.''; ?>/smileys/sad.gif" alt=":(" onclick="addsmiley(':(')"/>
    <img class="smileys" src="<?php echo ''.$siteurl.''; ?>/smileys/shocked.gif" alt=":O" onclick="addsmiley(':O')"/><br/>
    <img class="smileys" src="<?php echo ''.$siteurl.''; ?>/smileys/tongue.gif" alt=":P" onclick="addsmiley(':P')"/>
    <img class="smileys" src="<?php echo ''.$siteurl.''; ?>/smileys/sick.gif" alt=":S" onclick="addsmiley(':S')"/>
    <img class="smileys" src="<?php echo ''.$siteurl.''; ?>/smileys/roll.gif" alt=":roll:" onclick="addsmiley(':roll:')"/>
    <img class="smileys" src="<?php echo ''.$siteurl.''; ?>/smileys/cry.gif" alt=":((" onclick="addsmiley(':-((')"/>
    <img class="smileys" src="<?php echo ''.$siteurl.''; ?>/smileys/mad.gif" alt="X(" onclick="addsmiley('X(')"/><br/>
    <input name="shoutbox_submit" type="submit" value="Go!" class="button">
    <input type="hidden" name="shoutbox_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
  </form>
</div>