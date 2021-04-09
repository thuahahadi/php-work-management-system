<?php
	require_once('config/auth.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Footer</title>
<link href="src/css/style.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
<style>
.iput {
	border:none;}

</style>
</head>
<body>
<br/>
<div class="container">
<div align="center">

<h3>Edit Footer</h3><hr/>
<div align="left">
 <a href="./home.php">Back Home</a>
 </div><br/>

 
<?php
			   include('config/config.php');
			 
			   
			   $result = mysql_query("SELECT * FROM footer ORDER BY id DESC");
								
								
								while($row = mysql_fetch_array($result))
								  { ?>
                                  <form enctype="multipart/form-data" method="post" action="con_footer.php">
                                 
<input type="text" name="company" class="iput" placeholder="Company Name" value="<?php echo $row['company'];?>">
&copy; 20<?php $current=date("y"); echo"$current";?> 
<input type="text" name="allright" class="iput" placeholder="all right reserved" value="<?php echo $row['allright'];?>">
<br/><br/>
<div align="center" style="font-family:Comic Sans MS">Developed by:<br>
<a href="http://genexit.net/about-us/" target="_blank"><font color="#000000">Thuaha Hadi</font></a><br/>
Developer of <a href="http://genexit.net/" target="_blank"><font color="#000000">GenexIT</font></a>
</div>
<br/><br/>
Index Contant:
<textarea class="iput" name="contact" placeholder="Index Footer contant"><?php echo $row['contact'];?></textarea>

<br/><br/>
Access Contant:
<textarea class="iput" name="access" placeholder="Access Footer contant"><?php echo $row['access'];?></textarea>
<?php
								  }
?><br/><br/>
<input type="hidden" name="userid" value="1">
<button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<!-- Script -->

 
</body>
</html>