<?php
	require_once('config/auth.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add a new Employee or Admin</title>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">



	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
            <h3>Add a new Employee or Admin</h3>
            <div class="container-login100-form-btn">
						<a href="./home.php"><button class="btn btn-dangers btn-lg">
							Cancel
						</button></a>
					</div>
                    
                    
                    
                 
                    
                    
                    
				<form method="post" class="login100-form validate-form" enctype="multipart/form-data" action="scan_employee.php">
                
                
<input type="hidden" value="20<?php
	$current=date("y-m-d");
echo"$current";
?>" name="date">                
                
<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "User Name :">


 <input type="text" class="input100" name="user" required>
 
 <span class="focus-input100" data-placeholder="New Username"></span>
				  </div>
 
 
 
<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="User Password"></span>
					</div>
                    
                    
<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Address">
						<input class="input100" type="text" name="address">
						<span class="focus-input100" data-placeholder="User Address"></span>
					</div>                    
                    
<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="text" name="mobile">
						<span class="focus-input100" data-placeholder="User Mobile Number"></span>
					</div>                    
                    

<label for="post">Position :</label>

 <select name="position" class="form-control">
			<option value="Employee">Employee</option>
			<option value="Admin">Admin</option>
			</select>
            <br/>
            <div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Submit" name="btn-upload">
							
						
					</div>
<br/>
 
					
			  </form>
			</div>
		</div>
	
	

	

	<script src="js/main.js"></script>
</body>
</html>