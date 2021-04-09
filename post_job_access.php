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


$date= $_POST['date'];
$category= $_POST['category'];
$link= $_POST['link'];
$start_point= $_POST['start_point'];
$end_point= $_POST['end_point'];
$quantity= $_POST['quantity'];
$rate= $_POST['rate'];
$average= $_POST['quantity']*$_POST['rate'];
$user= $_POST['user'];

$remark= $_POST['remark'];
$order_date= $_POST['order_date'];
$post_id= $_POST['post_id'];



	$start_point_screenshot=$_POST['start_point_screenshot'];

	$end_point_screenshot=$_POST['end_point_screenshot'];

$sql = "INSERT INTO history (date, category, link, start_point, end_point, quantity, rate, average, start_point_screenshot, end_point_screenshot, remark, order_date, post_id, user)
VALUES ('$date', '$category', '$link', '$start_point', '$end_point',  '$quantity', '$rate',  '$average', '$start_point_screenshot',  '$end_point_screenshot', '$remark',  '$order_date', '$post_id', '$user')";

if ($conn->query($sql) === TRUE) {
    echo "New proposal send successfully <br/><a href='./home.php'><button>Go to home page</button>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
$conn->close();
?>
