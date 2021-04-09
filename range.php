<?php
// Range.php
if(isset($_POST["From"], $_POST["to"]))
{
	$conn = mysqli_connect("localhost", "root", "", "genexit");
	$result = '';
	$query = "SELECT * FROM history WHERE date BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
	$sql = mysqli_query($conn, $query);
	$result .='
	<table class="table table-bordered">
	<tr>
<th width="3%">Serial No</th>
<th width="8%">Update  Date</th>
<th width="8%">User Name</th>
<th width="16%">Category</th>
<th width="16%">Link</th>
<th width="14%">Start Point</th>
<th width="6%">End Point</th>
<th width="4%">Quantity</th>
<th width="4%">Rate</th>
<th width="4%">Sub Total</th>
<th width="4%">Start point screenshot</th>
<th width="26%">End point screenshot</th>
<th width="15%">Remark</th>
<th width="26%">Order Date</th>


</tr>';	
	if(mysqli_num_rows($sql) > 0)
	{
		while($row = mysqli_fetch_array($sql))
		{
			$result .='
			<tr>
			<td>'.$row["id"] .'</td>
			<td>'.$row["date"].'</td>
			<td><a href=profile.php?id='.$row["post_id"] .'>'.$row['user'].'</a></td>
			<td>'.$row["category"].'</td>
			<td>'.$row["link"].'</td>
			<td>'.$row["start_point"].'</td>
			<td>'.$row["end_point"].'</td>
			<td>'.$total1=$row["quantity"].'&nbsp;k</td>
			<td>$&nbsp;'.$total2=$row["rate"].'</td>
			<td>$&nbsp;'.$row["average"].'</td>
			<td><a target="_blank" href='.$row["start_point_screenshot"].'">View Image</a></td>
	<td><a target="_blank" href='.$row["end_point_screenshot"].'">View Image</a></td>
			<td>'.$row["remark"].'</td>
			<td>'.$row["order_date"].'</td>
		
			<td><a href=editrow.php?id='.$row["id"].'>Edit</a> <a href=deletemember.php?id='.$row["id"].'>Delete</a> <a href=create_message.php?id='.$row["id"].'>Message</a></td></tr>';	
			
			
			
		}
	}
	else
	{
		$result .='
		<tr>
		<td colspan="14">No row Found</td>
		</tr>';
	}
	$result .='</table>';
	echo $result;
}
?>