<?php
include 'session_start.php';

// Here, you can process the collected data, for example, by saving it to a database or sending it via email
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Submitted</title>
</head>
<body>
    <div class="page">
        <h2>Thank you for registering!</h2>
        <p>Your information has been successfully submitted.</p>
        <h3>Review Your Information:</h3>
        <ul>
            <li>ULI Number: <?= $_SESSION['uli_number'] ?></li>
            <li>Entry Date: <?= $_SESSION['entry_date'] ?></li>
            <li>Last Name: <?= $_SESSION['last_name'] ?></li>
            <li>First Name: <?= $_SESSION['first_name'] ?></li>
            <li>Middle Name: <?= $_SESSION['middle_name'] ?></li>
            <li>Address: <?= $_SESSION['address_number_street'] ?>, <?= $_SESSION['address_barangay'] ?>, <?= $_SESSION['address_district'] ?>, <?= $_SESSION['address_city_municipality'] ?>, <?= $_SESSION['address_province'] ?>, <?= $_SESSION['address_region'] ?></li>
            <li>Email/Facebook: <?= $_SESSION['email_facebook'] ?></li>
            <li>Contact No: <?= $_SESSION['contact_no'] ?></li>
            <li>Nationality: <?= $_SESSION['nationality'] ?></li>
            <li>Sex: <?= $_SESSION['sex'] ?></li>
            <li>Civil Status: <?= $_SESSION['civil_status'] ?></li>
            <li>Employment Status: <?= $_SESSION['employment_status'] ?></li>
            <li>Birth Date: <?= $_SESSION['birth_date'] ?></li>
            <li>Birth Place: <?= $_SESSION['birth_place'] ?></li>
            <!-- Add more fields as necessary -->
        </ul>
    </div>
</body>
</html>
