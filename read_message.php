<?php
	require_once('auth.php');
?>
 <?php
			   include('config/config.php');			
					$commentid=$_GET['id'];
					$rrt='read';
								$update=mysql_query("UPDATE messages SET status='$rrt' WHERE id='$commentid'");
								$result3 = mysql_query("SELECT * FROM messages where id='$commentid'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { 
			  
			  $to=$row3['ginhalinan'];
			  
			 
					
			  		echo $row3['content'];
					echo '<br/><br/>';
					
					echo '<a href=image/messages/'.$row3['file'].' target="_blank">View file</a>';
					echo "<br/>";
					
					echo '<font color="#d9195c" size="1px">File Name:</font><font color="#595757" size="1px"> '.$row3['file'].';</font>&nbsp;';
					
					echo '<font color="#d9195c" size="1px">File Type:</font><font color="#595757" size="1px"> '.$row3['type'].';</font>&nbsp;';
					
					echo '<font color="#d9195c" size="1px">File Size(KB):</font><font color="#595757" size="1px"> '.$row3['size'].';</font><br/>';
						 echo '<font color="#919191" size="2px"><br>';
					echo 'Time: '.$row3['created'];
					echo '</font>';		  
								  }
?>
<?php
echo '<form action="send_top.php" method="post">';
echo '<input name="to" type="hidden" value="'.$to.'">';
echo '<input name="from" type="hidden" value="'.$_SESSION['SESS_MEMBER_ID'].'">';
echo '<textarea name="content" cols="60" rows="4"></textarea>'.'<br>';
echo '<input name="send" type="submit" value="Send">';
echo '</form>';
?>
