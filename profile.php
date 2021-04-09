<?php
	require_once('config/auth.php');
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Profile</title>
<link href="src/css/style.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
</head>
<body>
<br/>
<div class="container">
<div align="center"><h3>Member Profile</h3><hr/>


<?php
include('config/config.php');			
						
					$commentid9=$_GET['id'];
								
								$result9 = mysql_query("SELECT * FROM member where id='$commentid9'");
								
								
								while($row9 = mysql_fetch_array($result9))
								  {


echo '<a href=post_job.php?id='.$row9["id"].'><button class="btn btn-default">Post a job </button></a>';
echo '<a href=create_message.php?id='.$row9["id"].'><button class="btn btn-default">Send Message </button></a>';
echo '<a href=payment.php?id='.$row9["id"].'><button class="btn btn-default">View Payment History </button></a>';
echo '<a href="./home.php/home"><button class="btn btn-default">Back Home</button></a>';
echo '<a href=edit_profile.php?id='.$row9["id"].'><button class="btn btn-default">Edit Profile </button></a>';
echo '<a href=delete_profile.php?thuaha='.$row9["id"].'><button class="btn btn-default">Delete Profile </button></a>';


}
?>

</div><br/>
<?php
	include('config/config.php');			
						
					$commentid=$_GET['id'];
								
								$result = mysql_query("SELECT * FROM member where id='$commentid'");
								
								
								while($row = mysql_fetch_array($result))
								  {
?>

<b>User name :</b> <?php echo $row['user'];?>
<br/><br/>
<b>Password :</b>  <?php echo $row['password'];?>
<br/><br/>
<b>Address :</b> <?php echo $row['address'];?>
<br/><br/>
<b>Mobile :</b>  <?php echo $row['mobile'];?>
<br/><br/>
<b>Position :</b>  <?php echo $row['position'];?>
<br/><br/>
<b>Join Date :</b>  <?php echo $row['date'];?>
<br/><br/>


<b>Last Profile visit :</b> <?php echo $row['seen'];?>

<br/><br/>




<?php
	 }
?>



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
								  
								  
								  }?> :</b> <?php $due1= $rows['sum(average)'];
								  echo '$'.$due1;
							  ?>
<br/><br/>

<?php
$result5 = mysql_query("SELECT sum(amount) FROM payment where user_id='$members'") or die(mysql_error());
                            while ($rows1 = mysql_fetch_array($result5)) {
                                ?>  
                                
                                
   <b>Total Paid :</b> $<?php $due2=$rows1['sum(amount)'];
   echo $due2;
   
   ?>
<br/><br/>

<b>Due Payment :</b> $<?php $amount=$due1-$due2;
 echo $amount;
 ?>

   
   
<?php 
							}
							   }
                            ?>
</div><br/>
<div class="container-fluid">

<?php 


echo '<table class="table table-striped table-bordered">
<tr>
<th width="3%">Serial No</th>
<th width="8%">Update  Date</th>
<th width="8%">User Name</th>
<th width="6">Category</th>
<th width="15%">Link</th>
<th width="4%">Start Point</th>
<th width="4%">End Point</th>
<th width="4%">Quantity</th>
<th width="4%">Rate</th>
<th width="4%">Sub Total</th>
<th width="4%">Start point screenshot</th>
<th width="4%">End point screenshot</th>
<th width="25%">Remark</th>
<th width="8%">Order Date</th>


</tr>';	


include('config/config.php');
			   
			   $memberid=$_GET['id'];
			   $result2 = mysql_query("SELECT * FROM history where post_id='$memberid'");
								
								
								while($row2 = mysql_fetch_array($result2))
								  { 
		

    echo '<tr><td>'; 
	echo $row2["id"] .'</td>';
    echo '<td>'.$row2["date"].'</td>';
	
	 echo  '<td>'.$row2['user'].'</td>';				
	
   echo '<td>'.$row2["category"].'</td>';
   echo '<td><a target="_blank" href='.$row2["link"].'>'.$row2["link"].'</a></td>';
    echo '<td>'.$row2["start_point"].'</td>';
   echo '<td>'.$row2["end_point"].'</td>';
   echo '<td>'.$total3=$row2["quantity"].'&nbsp;k</td>';
    echo '<td>$&nbsp;'.$total4=$row2["rate"].'</td>';
	
	echo '<td>$&nbsp;'.$total3*$total4.'</td>';
	echo '<td><a target="_blank" href='.$row2["start_point_screenshot"].'>View Image</a></td>';
	echo '<td><a target="_blank" href='.$row2["end_point_screenshot"].'>View Image</a></td>';
	echo '<td>'.$row2["remark"].'</td>';
	echo '<td>'.$row2["order_date"].'</td>';
	
	echo '<td><a href=editrow.php?id='.$row2["id"].'>Edit</a> <a href=deletemember.php?id='.$row2["id"].'>Delete</a> </td>';	
		
		}	


?>
<tr/></table>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<!-- Script -->
<script>
$(document).ready(function(){
	$.datepicker.setDefaults({
		dateFormat: 'yy-mm-dd'
	});
	$(function(){
		$("#From").datepicker();
		$("#to").datepicker();
	});
	$('#range').click(function(){
		var From = $('#From').val();
		var to = $('#to').val();
		if(From != '' && to != '')
		{
			$.ajax({
				url:"range.php",
				method:"POST",
				data:{From:From, to:to},
				success:function(data)
				{
					$('#purchase_order').html(data);
				}
			});
		}
		else
		{
			alert("Please Select the Date");
		}
	});
});
</script>
 
</body>
</html>