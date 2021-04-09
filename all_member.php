<?php
	require_once('config/auth.php');
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Member list</title>
<link href="src/css/style.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
</head>
<body>
<br/>
<div class="container-fluid">
<div align="center"><h3>All Member List</h3></div><hr/>
<a href="./home.php"><i class="fa fa-arrow-left"></i> Back Home</a><br/><br/>
<?php
echo '<table class="table table-striped table-bordered">
<tr>

<th width="3%">ID No.</th>
<th width="14%">User Name</th>


<th width="10%">Password</th>
<th width="5%">Add Date</th>
<th width="20%%">Address</th>
<th width="6%">Mobile</th>
<th width="5%">Position</th>
<th width="7%">Last view</th>
</tr>';
			
		 
		 include('config/config.php');
 $result = mysql_query("SELECT * FROM member ORDER BY id DESC");
								
								
								while($row = mysql_fetch_array($result))
								  {	 
		 
		 
	echo '<tr>'; 
    echo '<td>'.$row["id"].'</td>';
    echo  '<td><a href=profile.php?id='.$row["id"] .'>'.$row['user'].'</td>';
   echo '<td>'.$row["password"].'</td>';
    echo '<td>'.$row["date"].'</td>';
	echo '<td>'.$row["address"].'</td>';
	echo '<td>'.$row["mobile"].'</td>';
	echo '<td>'.$row["position"].'</td>';
	echo '<td>'.$row["seen"].'</td></tr>';
		
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