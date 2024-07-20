<?php
include 'session_start.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Save data from page 3
    $_SESSION['employment_status'] = $_POST['employment_status'];
    $_SESSION['birth_date'] = $_POST['birth_date'];
    $_SESSION['birth_place'] = $_POST['birth_place'];

    // Redirect to page 4
    header("Location: submit.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form - Page 5</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f9;
        }

        .page {
            max-width: 1700px;
            height: 1400px;
            margin: 20px auto;
            padding: 90px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            overflow: hidden;
        }

        h2, h1, h3, p {
            text-align: center;
            margin-bottom: 10px;
        }

        form {
            width: 100%;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 2px solid #007bff;
            font-size: 22px;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        td input[type="text"] {
            width: calc(100% - 16px);
            padding: 6px;
            width: 900px;
            border: 1px solid black;
            border-radius: 4px;
            margin-top: 5px;
        }

        .center {
            text-align: center;
            margin-top: 20px;
        }

        button[type="submit"], button[type="button"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover, button[type="button"]:hover {
            background-color: #0056b3;
        }
.picture-box {
    padding: 50px;
    display: flex; /* Enables flexbox layout */
    justify-content: space-evenly; /* Distributes space between the boxes */
    align-items: center; /* Centers items vertically */
    margin-bottom: 20px;
}

.thumbmark-box {
    padding: 40px;
    border: 5px dashed #ccc;
    width: 200px;
    height: 200px;
    text-align: center;
    
}

.image-box {
    padding: 50px;
    border: 5px dashed #ccc;
    width: 200px;
    height: 200px;
    text-align: center;
}

.thumbmark-label {
    display: block;
    font-weight: bold;
    color: #007bff;
    font-weight: bold;
    position: relative;
    top: 15px;


    
}

.file-upload-label {
    display: block;
    color: white;
    border-radius: 4px;
    cursor: pointer;
    position: relative;
    top: 15px;
}

input[type="file"] {
    display: none;
}

input[type="file"] + label:hover {
    background-color: #0056b3;
}
.file-upload-label {
            display: block;
            cursor: pointer;
            color: #007bff;
            font-weight: bold;
        }

 
        .box {
            background-color: #f0f4c3;
            cursor: pointer;
            overflow: hidden;
            position: relative;
        }

        .box input[type="file"] {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

       

        @media (max-width: 768px) {
            .page {
                padding: 20px;
            }

            th, td {
                font-size: 14px;
            }

            button[type="submit"], button[type="button"] {
                width: 100%;
                padding: 12px;
            }

            .picture-box {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
<div class="page">
    <h1>Technical Education and Skills Development Authority</h1>
    <h1><p>Pangasiwaan sa Edukasyong Teknikal at Pagpapaunlad ng Kasanayan</p></h1>
    <h1>Registration Form - Page 5/6</h1>
    <form action="page5.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <th colspan="2">Applicant's Signature</th>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">This is to certify that the information stated above is true and correct.</td>
            </tr>
            <tr>
                <td><label for="applicant_signature">APPLICANT'S SIGNATURE OVER PRINTED NAME:</label></td>
                <td><input type="text" id="applicant_signature" placeholder="APPLICANT'S SIGNATURE OVER PRINTED NAME" name="applicant_signature"></td>
            </tr>
            <tr>
                <td><label for="date_accomplished">DATE ACCOMPLISHED:</label></td>
                <td><input type="text" id="date_accomplished" placeholder="DATE ACCOMPLISHED" name="date_accomplished"></td>
            </tr>
            <tr>
                <td><label for="registrar_signature">REGISTRAR/SCHOOL ADMINISTRATOR:</label></td>
                <td><input type="text" id="registrar_signature" placeholder="REGISTRAR/SCHOOL ADMINISTRATOR" name="registrar_signature"></td>
            </tr>
            <tr>
                <td><label for="date_received">DATE RECEIVED:</label></td>
                <td><input type="text" id="date_received" placeholder="DATE RECEIVED" name="date_received"></td>
            </tr>
    <table> 

    <tr>
        <td colspan="2" class="picture-box">
            <div class="thumbmark-box">
                <label for="thumbmark" class="thumbmark-label">Right Thumbmark</label>
                <input type="file" id="thumbmark" name="thumbmark" accept=".jpg, .jpeg, .png" class="thumbmark-input">
            </div>
        
    
            <div class="image-box" id="imageBox">
                <label for="imageUpload" class="file-upload-label">Choose Picture 1x1</label>
                <input type="file" id="imageUpload" name="imageUpload" accept=".jpg, .jpeg, .png">
            </div>
        </td>
    </tr>

        </table>
        <div class="center">
            <button type="button" onclick="window.location.href='page4.php'">Back</button>
            <button type="submit">Submit</button>
        </div>
        
    </form>
</div>
</body>
</html>
