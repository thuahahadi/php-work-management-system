<?php
	require_once('config/auth.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Profile</title>
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
            <h3>Edit Profile</h3>
            <div class="container-login100-form-btn">
						<a href="./home.php"><button class="btn btn-dangers btn-lg">
							Cancel
						</button></a>
					</div>
                    
                    
                    
                 
                    
                    
                    
				<form method="post" class="login100-form validate-form" enctype="multipart/form-data" action="con_edit_profile.php">
               <?php
include('config/config.php');
$tuhan=$_GET['id'];

$result = mysql_query("SELECT * FROM member WHERE id='".$tuhan."'");

while($row = mysql_fetch_array($result))
  {
	  ?> 
                
       
<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "User Name :">


 <input type="text" class="input100" name="user" value="<?php echo $row['user'];?>">
 
 <span class="focus-input100" data-placeholder="New Username"></span>
				  </div>
 
 
 
<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="text" name="password" value="<?php echo $row['password'];?>">
						<span class="focus-input100" data-placeholder="User Password"></span>
					</div>
                    
                    
<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Address">
						<input class="input100" type="text" name="address" value="<?php echo $row['address'];?>">
						<span class="focus-input100" data-placeholder="User Address"></span>
					</div>                    
                    
<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="text" name="mobile" value="<?php echo $row['mobile'];?>">
						<span class="focus-input100" data-placeholder="User Mobile Number"></span>
					</div>                    
                    

<label for="post">Position :</label>

 <select name="position" class="form-control">
 <option value="<?php echo $row['position'];?>"><?php echo $row['position'];?></option>
			<option value="Employee">Employee</option>
			<option value="Admin">Admin</option>
			</select>
            <br/>
          <input type="hidden" value="<?php echo $tuhan;?>" name="userid">         
                  
            <?php
			}

?> 
            
            
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