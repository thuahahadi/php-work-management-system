 
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


$user=$_POST['user'];
$password=$_POST['password'];
$address=$_POST['address'];
$position=$_POST['position'];
$mobile=$_POST['mobile'];



mysql_query("UPDATE member SET user='$user', password='$password', address='$address', position='$position', mobile='$mobile' WHERE id='$userid'");

header("location: all_member.php?/db/update/userinfo/success");

mysql_close($con);
?> 
 
 
