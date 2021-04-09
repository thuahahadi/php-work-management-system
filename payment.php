<?php
	require_once('config/auth.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment History</title>
<link href="src/css/style.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
</head>
<body>
<br/>
<div class="container-fluid">
<div align="center"><h3>



<?php
	include('config/config.php');			
						
					$commentid4=$_GET['id'];
								
								$result4 = mysql_query("SELECT * FROM member where id='$commentid4'");
								
								
								while($row4 = mysql_fetch_array($result4))
								  {
?>

<?php echo $row4['user'];?>'s

<?php
	 }
?>
Payment History</h3><hr/>


<div align="left"><a href="./home.php">Back Home</a></div>
<?php
			   include('config/config.php');
			   $commentid=$_SESSION['SESS_MEMBER_ID'];
			   
			   $result = mysql_query("SELECT * FROM member where id='$commentid'");
								
								
								while($row = mysql_fetch_array($result))
								  { 



$tuaha=$row['position']; 					 
	if($tuaha=='Admin')
		{
		
		?>
        
   <div align="center"><h4>Send Payment</h4></div>     
    <table class="table table-bordered">
<tr>

<th width="4%">Payment Date</th>
<th width="17%">Amount</th>
<th width="80%">Status</th>


</tr>    
		
		<tr>
<form action="success_payment.php" enctype="multipart/form-data" method="post">
<input type="hidden" name="user_id" value="<?php echo $_GET['id'];?>">
<input type="hidden" name="user_name" value="<?php
	include('config/config.php');			
						
					$commentid3=$_GET['id'];
								
								$result3 = mysql_query("SELECT * FROM member where id='$commentid3'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { echo $row3['user']; } ?>">

<td><input name="date" type="text" style="border:none; background:none; width:250px;" value="<?php
	$current=date("d-m-y");
	$timeset=strtotime("+4 hour");
	$time = date ("H");
	
$time=date("l h:i:s A",$timeset);


echo" $current | $time";

?>"></td>
<td>$ <input name="amount" type="number" style="border:none; width: 94%" placeholder="0.00" required></td>
<td><input name="status" type="text" style="border:none; width: 100%" placeholder="Send a comment"></td>


</tr> 
		
		</table>
        <button class="btn btn-success" type="submit" name="submit">Send</button>
		</form><hr/>
		<?php
		
		}
$tuaha=$row['position']; 					 
	if($tuaha=='Employee')
		{
		}
								  }
?>			
			
			<div align="center"><h4>History</h4></div>
            
            <div align="left">
            
             <?php
 $member_amount=$_GET['id'];
                            $result3 = mysql_query("SELECT sum(average) FROM history where post_id='$member_amount'") or die(mysql_error());
                            while ($rows = mysql_fetch_array($result3)) {
                                ?>
 <b>Total Amount <?php include('config/config.php');
			   
			   $members=$_GET['id'];
			   $result4 = mysql_query("SELECT * FROM member where id='$members'");
								
								
								while($row4 = mysql_fetch_array($result4))
								  { 
								  
							echo '('.$row4['date'].'&nbsp;to&nbsp20'.$current=date("y-m-d").')';	  
								  
								  
								  }?> :</b> $<?php $due1= $rows['sum(average)'];
						echo $due1;	   
							              
            
   echo '<br/><br/>';
   
   
   
;
                            $result5 = mysql_query("SELECT sum(amount) FROM payment where user_id='$members'") or die(mysql_error());
                            while ($rows1 = mysql_fetch_array($result5)) {
                                ?>  
                                
                                
   <b>Total Paid :</b> $<?php $due2=$rows1['sum(amount)'];
   echo $due2;
   
   ?>
<br/><br/>
                             
                               
                            

  
 <b>Due Amount :</b> $  <?php $amount=$due1-$due2;
 echo $amount;
 ?>
  <?php
								 
							   }}
                            ?>                             
    <br/><br/>          
    </div>        
            
            
            
            
<table class="table table-striped table-bordered">
<tr>
<th width="10%">Name</th>
<th width="17%">Payment Date</th>
<th width="10%">Amount</th>
<th width="58%">Status</th>


</tr> 

<?php
	include('config/config.php');			
						
					$paymentid=$_GET['id'];
								
								$result2 = mysql_query("SELECT * FROM payment where user_id='$paymentid'");
								
								
								while($row2 = mysql_fetch_array($result2))
								  {


    
		
		echo '<tr>
       <td><a href=profile.php?id='.$row2["user_id"] .'>'.$row2['user_name'].'</a></td> 
        <td>'.$row2['date'].'</td>
<td>$&nbsp;'.$row2['amount'].'</td>
<td>'.$row2['status'].'</td>';

include('config/config.php');
			   $commentid=$_SESSION['SESS_MEMBER_ID'];
			   
			   $result = mysql_query("SELECT * FROM member where id='$commentid'");
								
								
								while($row = mysql_fetch_array($result))
								  { 


	
	
	
	
	
		$tuaha=$row['position']; 					 
	if($tuaha=='Employee')
		{
			
		}
		
	else {
	echo '<td><a href=payment_delete.php?thuaha='.$row2["id"].'>Delete</a></td>';
	}
	}
			
			
			
			
echo'</tr>';

	 }
?>


</table>



<?php
			   include('config/config.php');
			 
			   
			   $result = mysql_query("SELECT * FROM footer ORDER BY id DESC");
								
								
								while($row = mysql_fetch_array($result))
								  { ?>
                                  <div align="center">
<?php echo $row['company'];?> &copy; 20<?php $current=date("y"); echo"$current";?> <?php echo $row['allright'];?>
<div align="center" style="font-family:Comic Sans MS">Developed by:<br>
<a href="http://genexit.net/about-us/" target="_blank"><font color="#000000">Thuaha Hadi</font></a><br/>
Developer of <a href="http://genexit.net/" target="_blank"><font color="#000000">GenexIT</font></a>
</div>
<br/>
<?php echo $row['access'];?>
</div>
<?php
								  }
?>
</div>
 
</body>
</html>