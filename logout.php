<?php
session_start();
session_destroy();
session_unset();
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=admin_log.php">';
?>