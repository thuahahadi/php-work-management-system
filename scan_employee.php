<?php
	require_once('auth.php');
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "genexit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$date= $_POST['date'];
$user= $_POST['user'];
$password= $_POST['password'];
$position= $_POST['position'];
$address= $_POST['address'];
$mobile= $_POST['mobile'];

$sql = "INSERT INTO member (date, user, password, position, address, mobile)
VALUES ('$date', '$user', '$password', '$position',  '$address', '$mobile')";

if ($conn->query($sql) === TRUE) {
    echo "New person add successfully <br/><a href='./home.php'><button>Go to home page</button>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

