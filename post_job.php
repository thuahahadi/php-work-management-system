<?php
	require_once('config/auth.php');
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Post Job</title>
<link href="src/css/style.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
<style>
.inp { border:none};
</style>
</head>
<body>
<br/>
<div class="container-fluid">
<div align="center"><h3>Send a proposal <?php include('config/config.php');
			   
			   $members=$_GET['id'];
			   $result = mysql_query("SELECT * FROM member where id='$members'");
								
								
								while($row = mysql_fetch_array($result))
								  {
									  echo $row['user']; 
								  }?></h3></div><hr/>

<table class="table table-bordered">
<tr>

<th width="8%">Update  Date</th>

<th width="16%">Category</th>
<th width="16%">Link</th>
<th width="4%">Start Point</th>
<th width="4%">End Point</th>
<th width="4%">Quantity</th>
<th width="4%">Rate</th>
<th width="4%">Sub Total</th>
<th width="4%">Start point screenshot</th>
<th width="4%">End point screenshot</th>
<th width="15%">Remark</th>
<th width="8%">Order Date</th>
</tr>

<tr>
<form enctype="multipart/form-data" method="post" action="post_job_access.php">
<input type="hidden" value="<?php echo $_GET['id'];?>" name="post_id">
<td><input type="text" class="inp" value="<?php echo '20'.$current=date("y-m-d"); ?>" name="date" id="From"></td>
<td><input type="text" class="inp" name="category"></td>
<td><input type="text" class="inp" name="link"></td>
<td><input type="text" class="inp" name="start_point"></td>
<td><input type="text" class="inp" name="end_point"></td>
<td><input type="text" class="inp" name="quantity"></td>
<td><input type="text" class="inp" name="rate" value=""></td>
<td>Auto</td>
<td><input type="text" class="inp" name="start_point_screenshot"></td>
<td><input type="text" class="inp" name="end_point_screenshot"></td>
<td><textarea class="inp" name="remark"></textarea></td>
<td><input type="text" value="<?php echo '20'.$current=date("y-m-d"); ?>" name="order_date" id="to"></td>

</tr>

</table>
<?php
			   include('config/config.php');
			 
			   $user=$_GET['id'];
			   $result1 = mysql_query("SELECT * FROM member where id='$user'");
								
								
								while($row1 = mysql_fetch_array($result1))
								  { ?>
                                  
                             <input type="hidden" name="user" value="<?php echo $row1['user'];?>">     
                                  
                                  <?php
								  }
?>
<button class="btn btn-success"/>Send</button>
</form>
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