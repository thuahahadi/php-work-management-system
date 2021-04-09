
<?php
	require_once('auth.php');
?>



<div align="center"><font color="#575959"><u><b>Inbox <?php
			   include('config/config.php');			
					$commentid=$_GET['id'];
								
								$result3 = mysql_query("SELECT * FROM member where id='$commentid'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { 
			  
			  
			  		echo $row3['user'];
					
					
								  
								  }
				?></b></u></font><br/><br/><a href="./home.php"><button>Back Home</button></a></div><br>
               


<?php
			   include('config/config.php');			
					$commentid=$_GET['id'];
					$rrt='read';
					$th=$_SESSION['SESS_MEMBER_ID'];
								$update=mysql_query("UPDATE messages SET status='$rrt' WHERE id='$commentid'");
							
								
								$result6 = mysql_query("SELECT * FROM messages where pakadtoan='$th' and 	ginhalinan='$commentid' ORDER BY id");
								
								
								while($row6 = mysql_fetch_array($result6))
								  { 
								  
								  
								  
								  
								  
			
								  
							
								  
								  
			  
			  //$to=$row3['ginhalinan'];
			 
			  		  
							
								  
							
							

		
			 
			  echo '<div align="left" style="margin-top:-10px;">';
			  		echo $row6['content'];
					
					
					
					 echo '<div align="right" style="margin-top:-12px;">'; 
								  /*echo '<a href=delete_message.php?id='.$row6["id"].' title="Delete Message"><font color="red">X</font></a>'; */
								  
								  echo '</div>';
					
					echo "<br/>";
					
					echo '<font color="#d9195c" size="1px">File Name:</font><font color="#595757" size="1px"> '.$row6['file'].';</font>&nbsp;';
					
					echo '<font color="#d9195c" size="1px">File Type:</font><font color="#595757" size="1px"> '.$row6['type'].';</font>&nbsp;';
					
					echo '<font color="#d9195c" size="1px">File Size(KB):</font><font color="#595757" size="1px"> '.$row6['size'].';</font>&nbsp;';
					
					
					echo '<a href=image/messages/'.$row6['file'].' target="_blank">View file</a><br>';
					
					
					
					echo '<font color="#919191" size="2px">';
					echo 'Time: '.$row6['created'];
					echo '</font>';
					
					
					
					
					echo '</div>';
					 echo '<div style="margin-top:-12px;">';
					
					 echo '<hr>';
					
					echo '</div>';
								  }
					$result3 = mysql_query("SELECT * FROM messages where pakadtoan='$commentid' and 	ginhalinan='$th' ORDER BY id");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { 
								  
								  
						  echo '<div align="right" style="margin-top:-10px;">';
			  		echo $row3['content'];
					
					
					
					 echo '<div align="right" style="margin-top:-12px;">'; 
								  /*echo '<a href=delete_message.php?id='.$row3["id"].' title="Delete Message"><font color="red">X</font></a>';*/ 
								  
								  echo '</div>';
					
					echo "<br/>";
					
					echo '<font color="#d9195c" size="1px">File Name:</font><font color="#595757" size="1px"> '.$row3['file'].';</font>&nbsp;';
					
					echo '<font color="#d9195c" size="1px">File Type:</font><font color="#595757" size="1px"> '.$row3['type'].';</font>&nbsp;';
					
					echo '<font color="#d9195c" size="1px">File Size(KB):</font><font color="#595757" size="1px"> '.$row3['size'].';</font>&nbsp;';
					
					
					echo '<a href=image/messages/'.$row3['file'].' target="_blank">View file</a><br>';
					
					
					
					echo '<font color="#919191" size="2px">';
					echo 'Time: '.$row3['created'];
					echo '</font>';
					
					
					
					
					echo '</div>';
					 echo '<div style="margin-top:-12px;">';
					
					 echo '<hr>';
					
					echo '</div>';		  
								  
								 
								  }
								  
								  
								  
								  
					  
								     
?>


<?php
echo '<form action="send.php" method="post" enctype="multipart/form-data">';
echo '<input name="to" type="hidden" value="'.$_GET['id'].'">';
echo '<input name="from" type="hidden" value="'.$_SESSION['SESS_MEMBER_ID'].'">';

echo '<textarea class="form-control" name="content" cols="60" rows="4" placeholder="Leave a message"></textarea>';
echo '<input type="file" name="file" class="cg la ll form-control">'.'<br>';
echo '<input name="btn-upload" class="cg la ll" type="submit" value="Send Message">';
echo '</form>';
?>

