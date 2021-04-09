<?php
include('config/config.php');
$tuhan=$_GET['id'];
mysql_query("DELETE FROM history WHERE id='$tuhan'");
header ("location: home.php");
mysql_close($con);
?>