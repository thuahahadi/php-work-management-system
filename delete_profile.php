<?php
include('config/config.php');
$tuhan=$_GET['thuaha'];
mysql_query("DELETE FROM member WHERE id='$tuhan'");
header ("location: all_member.php/delete/account/scan/view/all");
mysql_close($con);
?>