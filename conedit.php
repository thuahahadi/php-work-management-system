 
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


$date=$_POST['date'];
$category=$_POST['category'];
$link=$_POST['link'];
$start_point=$_POST['start_point'];
$end_point=$_POST['end_point'];

$rate=$_POST['rate'];
$quantity=$_POST['quantity'];
$average=$_POST['rate']*$_POST['quantity'];
$start_point_screenshot=$_POST['start_point_screenshot'];
$end_point_screenshot=$_POST['end_point_screenshot'];
$remark=$_POST['remark'];
$order_date=$_POST['order_date'];


mysql_query("UPDATE history SET date='$date', category='$category', link='$link', start_point='$start_point', end_point='$end_point', rate='$rate', quantity='$quantity', average='$average', start_point_screenshot='$start_point_screenshot', end_point_screenshot='$end_point_screenshot', remark='$remark', order_date='$order_date' WHERE id='$userid'");

header("location: home.php?/db/update/date/user/password/position/particular/rate/quantity/comments/success/");

mysql_close($con);
?> 
 
 
