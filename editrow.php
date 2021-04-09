<?php
	require_once('config/auth.php');
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit</title>
<link href="src/css/style.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
</head>
<body>
<br/>
<div class="container-fluid">

<div align="center"><h3>Edit</h3></div><hr/>
<div align="left"><a href="./home.php">Back Home</a></div><br/><br/>

				<table class="table table-bordered">
<tr>

<th width="8%">Update  Date</th>

<th width="16%">Category</th>
<th width="16%">Link</th>
<th width="14%">Start Point</th>
<th width="6%">End Point</th>
<th width="4%">Quantity (k)</th>
<th width="4%">Rate ($)</th>

<th width="4%">Start point screenshot</th>
<th width="26%">End point screenshot</th>
<th width="15%">Remark</th>
<th width="26%">Order Date</th>
</tr>
<tr>
   <td>
  
	<form action="conedit.php" enctype="multipart/form-data" method="post">
<?php
include('config/config.php');
$tuhan=$_GET['id'];

$result = mysql_query("SELECT * FROM history WHERE id='$tuhan'");

while($row = mysql_fetch_array($result))
  {
   ?>
  
    
	<input type="text" style="border:none;" name="date" value="<?php echo '20'.$current=date("y-m-d");?>"></td>
 
   <td><input type="text" style="border:none;" name="category" value="<?php echo $row["category"];?>"></td>
      <td><input type="text" style="border:none;" name="link" value="<?php echo $row["link"];?>"></td>
    <td><input type="text" style="border:none;" name="start_point" value="<?php echo $row["start_point"];?>"></td>
   <td><input type="text" style="border:none;" name="end_point" value="<?php echo $row["end_point"];?>"></td>
   <td><input type="text" style="border:none;" name="quantity" value="<?php echo $row["quantity"];?>"></td>
	<td><input type="text" style="border:none;" name="rate" value="<?php echo $row["rate"];?>"></td>
    <td><input type="text" style="border:none;" name="start_point_screenshot" style="border:none;" value="<?php echo $row["start_point_screenshot"];?>"></td>
    <td><input type="text" style="border:none;" name="end_point_screenshot" value="<?php echo $row["end_point_screenshot"];?>"></td>
    <td><input type="text" style="border:none;" name="remark" value="<?php echo $row["remark"];?>"></td>
    <td><input type="text" style="border:none;" name="order_date" id="to" value="<?php echo $row["order_date"];?>"></td>
	
	<input type="hidden" value="<?php echo $_GET['id'];?>" name="userid">
    <?php	
	}

?> 
</tr>
</table>
<button class="btn btn-success" name="submit">Submit</button>
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