<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataregister";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM registrations";
$result = $conn->query($sql);

// Collect form data
if ($stmt->affected_rows > 0) {
    echo "Date inserted successfully into database.";
} else {
    echo "Error inserting date into database: " . $conn->error;
}

// Collect form data
$classifications = $_POST['classifications'];
$disabilities = $_POST['disability'];
$causes_of_disability = $_POST['cause_of_disability'];
$taken_ncae = $_POST['taken_ncae'];
$where = $_POST['where'];
$when = $_POST['when'];
$qualification = $_POST['qualification'];
$scholarship = $_POST['scholarship'];
$privacy_disclaimer = $_POST['privacy_disclaimer'];
$applicant_signature = $_POST['applicant_signature'];
$date_accomplished = $_POST['date_accomplished'];
$registrar_signature = $_POST['registrar_signature'];
$date_received = $_POST['date_received'];

// Insert data into database
$sql = "INSERT INTO registrations (classification, disability, cause_of_disability, taken_ncae, `where`, `when`, qualification, scholarship, privacy_disclaimer, applicant_signature, date_accomplished, registrar_signature, date_received) 
        VALUES ('$classifications', '$disabilities', '$causes_of_disability', '$taken_ncae', '$where', '$when', '$qualification', '$scholarship', '$privacy_disclaimer', '$applicant_signature', '$date_accomplished', '$registrar_signature', '$date_received')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
