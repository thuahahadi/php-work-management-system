<?php
include('config/config.php');
$tuhan=$_GET['thuaha'];
mysql_query("DELETE FROM payment WHERE id='$tuhan'");
header ("location: home.php/delete/payment/scan/view");
mysql_close($con);
?>