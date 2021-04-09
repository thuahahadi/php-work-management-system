<?php
session_start();
include('config/config.php');

if(isset($_POST['btn-upload']))
{    



$to=$_POST['to'];
$content=$_POST['content'];
$from=$_POST['from'];
$status='unread';
    
	$file = rand(100000,10000000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="image/messages/";
	
	// new file size in KB
	$new_size = $file_size/230024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	move_uploaded_file($file_loc,$folder.$final_file);
			$sql="INSERT INTO messages (ginhalinan, pakadtoan, content, status, file, type, size)
VALUES
('$from', '$to', '$content', '$status','$final_file', '$file_type', '$new_size')";

	if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
header("location: home.php");
exit();

		
	
}
?>
 