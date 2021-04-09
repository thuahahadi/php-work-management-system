<?php
	require_once('config/auth.php');
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home | <?php echo $_SESSION['SESS_FIRST_NAME'];?></title>
<link href="src/css/style.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
</head>
<body>
<br/>
<div class="container">



<?php
			   include('config/config.php');
			   $commentid=$_SESSION['SESS_MEMBER_ID'];
			   
			   $result = mysql_query("SELECT * FROM member where id='$commentid'");
								
								
								while($row = mysql_fetch_array($result))
								  { 



$tuaha=$row['position']; 					 
	if($tuaha=='Admin')
		{


echo '<a href="http://localhost/project/index.php?reject/hidden/basic_info/details"><button class="btn-default btn">Log Out&nbsp;'.  $_SESSION['SESS_FIRST_NAME'].'</button></a>';



echo '<a href="http://localhost/project/new_employee.php?scan/bin/browser/internet_protocol/systems/access/member/add/new/"><button class="btn-default btn">Add a new Employee</button></a>';

echo '<a href="http://localhost/project/all_member.php?scan/bin/browser/internet_protocol/systems/access/member/add/new/"><button class="btn-default btn">View All Member</button></a>';

echo '<a href="http://localhost/project/messages.php?functions/scan/messages/inbox/else/create_new/media/"><button class="btn-default btn">Employee Messages&nbsp;' .
	include('config/config.php');

$result5 = mysql_query("SELECT * FROM messages WHERE pakadtoan='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread' ORDER BY pakadtoan ASC");
	
	$numberOfRows5 = MYSQL_NUMROWS($result5);	
	
	echo  $numberOfRows5 ; 
	
	echo '</button></a>';
	
	echo '<a href="http://localhost/project/footer_contant.php?scan/bin/browser/internet_protocol/systems/access/site/footer/feed"><button class="btn-default btn">Footer Contant</button></a>';
	
	
	?>
	
	
<br/>
<br/>
<div class="col-md-2">
<input type="text" name="From" id="From" class="form-control" placeholder="From Date"/>
</div>
<div class="col-md-2">
<input type="text" name="to" id="to" class="form-control" placeholder="To Date"/>
</div>
<div class="col-md-8">
<input type="button" name="range" id="range" value="Search" class="btn btn-success"/>
</div>	
	
	<?php

}
		$tuaha=$row['position']; 					 
	if($tuaha=='Employee')
		{


echo '<a href="index.php?reject/hidden/basic_info/details"><button class="btn-default btn">Log Out&nbsp;' .  $_SESSION['SESS_FIRST_NAME'].'</button></a>';


echo '<a href="./messages.php?functions/scan/messages/inbox/else/create_new/media/"><button class="btn-default btn">Admin Message&nbsp;' .
	include('config/config.php');

$result6 = mysql_query("SELECT * FROM messages WHERE pakadtoan='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread' ORDER BY pakadtoan ASC");
	
	$numberOfRows6 = MYSQL_NUMROWS($result6);	
	
	echo  $numberOfRows6 ; 
	echo '</button></a>';

echo '<a href=payment.php?id='.$_SESSION['SESS_MEMBER_ID'] .'><button class="btn btn-default">View Payment History </button></a>';


?>
<br/>
<br/>

If you face any problem please contact :
 <?php			
			
include('config/config.php');
		$admin='Admin';	   
			   
			   $result7 = mysql_query("SELECT * FROM member where position='$admin'");
								
								
								while($row7 = mysql_fetch_array($result7))
								  {
									  
	echo '<a href=create_message.php?id='.$row7["id"].'><button class="btn btn-warning">Message '.$row7["user"].'</button></a>&nbsp;';
	
	
				}	
				
				
				
include('config/config.php');
		$hsd=$_SESSION['SESS_MEMBER_ID'];	   
			   
			   $result7 = mysql_query("SELECT * FROM member where id='$hsd'");
								
								
								while($row7 = mysql_fetch_array($result7))
								  {
									  
	?>
    <hr/>
<b>User name :</b> <?php echo $row7['user'];?>

<br/><br/>
<b>Address :</b> <?php echo $row7['address'];?>
<br/><br/>
<b>Mobile :</b>  <?php echo $row7['mobile'];?>
<br/><br/>
<b>Position :</b>  <?php echo $row7['position'];?>
<br/><br/>
<b>Join Date :</b>  <?php echo $row7['date'];?>
<br/><br/>	


<b>Last Profile visit :</b> <?php echo $row7['seen'];?>



	
	<?php							  }
				
				
								  
								  }
								
}
?>



<div class="clearfix"></div>
</div>
<div class="container-fluid">
<br/>
<div id="purchase_order">



<?php
			   include('config/config.php');
			   $commentid=$_SESSION['SESS_MEMBER_ID'];
			   
			   $result = mysql_query("SELECT * FROM member where id='$commentid'");
								
								
								while($row = mysql_fetch_array($result))
								  { 



$tuaha=$row['position']; 					 
	if($tuaha=='Editor')
		{
			
			
	}
	
	
	
	
	
		$tuaha=$row['position']; 					 
	if($tuaha=='Employee')
		{
			
			echo '<table class="table table-striped table-bordered">
<tr>


<th width="8%">Update  Date</th>
<th width="8%">User Name</th>
<th width="8%">Category</th>
<th width="14%">Link</th>
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
			
		
		 
		 
	$commentid2=$_SESSION['SESS_MEMBER_ID'];
	
			   
			   $result2 = mysql_query("SELECT * FROM history where post_id='$commentid2'");
								
								
								while($row2 = mysql_fetch_array($result2))
								  {	 
		 

    echo '<tr>';
    echo '<td>'.$row2["date"].'</td>';
	
	 echo  '<td><a href=profile.php?id='.$row2["post_id"] .'>'.$row2['user'].'</a></td>';				
	
   echo '<td>'.$row2["category"].'</td>';
    echo '<td><a target="_blank" href='.$row2["link"].'>'.$row2["link"].'</a></td>';
    echo '<td>'.$row2["start_point"].'</td>';
   echo '<td>'.$row2["end_point"].'</td>';
   echo '<td>'.$total9=$row2["quantity"].'&nbsp;k</td>';
    echo '<td>$&nbsp;'.$total8=$row2["rate"].'</td>';
	
	echo '<td>$&nbsp;'.$total9*$total8.'</td>';
	echo '<td><a target="_blank" href='.$row2["start_point_screenshot"].'">View Image</a></td>';
	echo '<td><a target="_blank" href='.$row2["end_point_screenshot"].'">View Image</a></td>';
	echo '<td>'.$row2["remark"].'</td>';
	echo '<td>'.$row2["order_date"].'</td>';
	
	
		
		}
			
		}
		
	else {
		
				echo '<table class="table table-striped table-bordered">
<tr>
<th width="3%">Serial No</th>
<th width="8%">Update  Date</th>
<th width="15%">User Name</th>
<th width="10%">Category</th>
<th width="10%">link</th>
<th width="5%">Start Point</th>
<th width="5%">End Point</th>
<th width="4%">Quantity</th>
<th width="4%">Rate</th>
<th width="4%">Sub Total</th>
<th width="4%">Start point screenshot</th>
<th width="4%">End point screenshot</th>
<th width="15%">Remark</th>
<th width="8%">Order Date</th>


</tr>';	

		include('config/config.php');
			   
			   
			   $result3 = mysql_query("SELECT * FROM history ORDER BY id DESC");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { 
		

    echo '<tr><td>'; 
	echo $row3["id"] .'</td>';
    echo '<td>'.$row3["date"].'</td>';
	
	 echo  '<td><a href=profile.php?id='.$row3["post_id"] .'>'.$row3['user'].'</a></td>';				
	
   echo '<td>'.$row3["category"].'</td>';
   echo '<td><a target="_blank" href='.$row3["link"].'>'.$row3["link"].'</a></td>';
    echo '<td>'.$row3["start_point"].'</td>';
   echo '<td>'.$row3["end_point"].'</td>';
   echo '<td>'.$total2=$row3["quantity"].'&nbsp;k</td>';
    echo '<td>$&nbsp;'.$total1=$row3["rate"].'</td>';
	
	echo '<td>$&nbsp;'.$total1*$total2.'</td>';
	echo '<td><a target="_blank" href='.$row3["start_point_screenshot"].'>View Image</a></td>';
	echo '<td><a target="_blank" href='.$row3["end_point_screenshot"].'>View Image</a></td>';
	echo '<td>'.$row3["remark"].'</td>';
	echo '<td>'.$row3["order_date"].'</td>';
	
	echo '<td><a href=editrow.php?id='.$row3["id"].'>Edit</a> <a href=deletemember.php?id='.$row3["id"].'>Delete</a> <a href=create_message.php?id='.$row3["id"].'>Message</a></td>';	
		
		}	
		
		
	}
			
}
?>
</table>
</div>



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