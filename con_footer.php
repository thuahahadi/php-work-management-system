<?php
	require_once('auth.php');
?>
 <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("genexit", $con);

$userid=$_POST['userid'];
$company=$_POST['company'];
$allright=$_POST['allright'];
$contact=$_POST['contact'];
$access=$_POST['access'];


mysql_query("UPDATE footer SET company='$company', allright='$allright', contact='$contact', access='$access' WHERE id='$userid'");

header("location: footer_contant.php?/db/update/company/allright/condition");

mysql_close($con);
?> 
 