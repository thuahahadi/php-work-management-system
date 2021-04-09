<?php
	require_once('auth.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Messages</title>
</head>

<body>

 <div align="center"><font color="#575959"><b>Unread Messages</b></font><br/><br/><a href="./home.php"><button>Back Home</button></a></div><br/>
<?php
			   include('config/config.php');			
				
								
								$result = mysql_query("SELECT * FROM messages WHERE pakadtoan='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread'");
								
								
								while($row3 = mysql_fetch_array($result))
								  {
								  $qwe=$row3['ginhalinan'];
								  $result1 = mysql_query("SELECT * FROM member WHERE id='$qwe'");
								
								
								while($row1 = mysql_fetch_array($result1))
								  { 
			  
			  echo '<div>';
			  echo '<div style="float:left">';
			  
					echo '<div style="float:right">';
					echo $row1['user'];
					echo '</div>';
				echo '</div>';
				echo '<div style="float:right">';	
					echo '<a rel="facebox" href=read_message.php?id='.$row3["id"] .' title="Click to read message">'.'Read Message'.'</a>';
					echo '</div>';
			   echo '<br><br><br>';
			   echo '</div>';
								  }
								  }
				?>


</body>
</html>