<?php
	require_once('auth.php');
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "genexit";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$user_id= $_POST['user_id'];
$user_name= $_POST['user_name'];
$date= $_POST['date'];
$amount= $_POST['amount'];
$status= $_POST['status'];



$sql = "INSERT INTO payment (user_id, user_name, date, amount, status)
VALUES ('$user_id', '$user_name', '$date', '$amount',  '$status')";

if ($conn->query($sql) === TRUE) {
    echo "Payment send successfully <br/><a href='./home.php'><button>Go to home page</button>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
$conn->close();
?>
