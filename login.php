<?php
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	include('config/config.php');
	//Function to sanitize values received from the form. Prevents SQL injection
	
	//Sanitize the POST values
	$a = $_POST['username'];
	$password = $_POST['password'];
	
	//Input Validations
	/*if($login == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}*/
	
	//Create query
	$qry="SELECT * FROM member WHERE user = '$a' AND password = '$password'";
	$result=mysql_query($qry);
	echo $qry;
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['user'];
			header("location: home.php");
			$seen=$_POST['seen'];
								$update=mysql_query("UPDATE member SET seen='$seen' WHERE id=".$_SESSION['SESS_MEMBER_ID']."");
			exit();
		}else {
			//Login failed
			header("location:error.php?access_denied/scan/thirdparty/internet_protocol/verification/tryagain/");
			exit();
		}
	}else {
		die("Query failed");
	}
?>