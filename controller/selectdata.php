
<?php
$servername = "localhost";
$username = "phucvinhvic";
$password = "2019vanconyeuem";
$dbname = "fikve";
$post="3306";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM account where email = 'phucvinh@gmail.com'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $myname=$row["name"];
        $mynick=$row[]
    }
} else {
    echo "0 results";
}
$conn->close();
?>