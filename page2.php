<?php
include 'session_start.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Save data from page 2
    $_SESSION['sex'] = $_POST['sex'];
    $_SESSION['civil_status'] = $_POST['civil_status'];

    // Redirect to page 3
    header("Location: page3.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form - Page 2</title>
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
            max-width: 1700px; /* Adjust as needed */
            height: 1400px;
            margin: 0px auto;
            padding: 90px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            overflow: hidden; /* Prevents overflow from breaking layout */
        }

        h2, h1, h3, p {
            text-align: center;
            margin-bottom: 10px;
        }

        form {
            width: 100%;
            margin-top: 20px; /* Provides space between headings and form */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px; /* Adjust padding for tighter spacing */
            text-align: left;
            width: 700px;
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
            width: calc(100% - 16px); /* Adjust width to fit table without overflow */
            padding: 6px;
            border: 1px solid black;
            border-radius: 4px;
            margin-top: 5px;
        }

        .center {
            text-align: center;
            margin-top: 20px; /* Provides space for button */
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

        @media (max-width: 768px) {
            .page {
                padding: 20px; /* Adjust padding for smaller screens */
            }

            th, td {
                font-size: 14px;
            }

            button[type="submit"], button[type="button"] {
                width: 100%;
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="page">
        <h1>Technical Education and Skills Development Authority</h1>
        <h1><p>Pangasiwaan sa Edukasyong Teknikal at Pagpapaunlad ng Kasanayan</p></h1>
        <h1>Registration Form - Page 2/6</h1>
        <form action="page2.php" method="post">
            <table>
                <tr>
                    <th colspan="2">ADDITIONAL PERSONAL INFORMATION</th>
                </tr>
                <tr>
                    <td>3.1. Sex</td>
                    <td>3.2. Civil Status</td>
                </tr>
                <tr>
                    <td><input type="radio" name="sex" value="male" <?= (isset($_SESSION['sex']) && $_SESSION['sex'] == 'male') ? 'checked' : '' ?>> Male</td>
                    <td><input type="radio" name="civil_status" value="single" <?= (isset($_SESSION['civil_status']) && $_SESSION['civil_status'] == 'single') ? 'checked' : '' ?>> Single</td>
                </tr>
                <tr>
                    <td><input type="radio" name="sex" value="female" <?= (isset($_SESSION['sex']) && $_SESSION['sex'] == 'female') ? 'checked' : '' ?>> Female</td>
                    <td><input type="radio" name="civil_status" value="married" <?= (isset($_SESSION['civil_status']) && $_SESSION['civil_status'] == 'married') ? 'checked' : '' ?>> Married</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="civil_status" value="widow" <?= (isset($_SESSION['civil_status']) && $_SESSION['civil_status'] == 'widow') ? 'checked' : '' ?>> Widow/er</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="civil_status" value="separated" <?= (isset($_SESSION['civil_status']) && $_SESSION['civil_status'] == 'separated') ? 'checked' : '' ?>> Separated</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="civil_status" value="solo parent" <?= (isset($_SESSION['civil_status']) && $_SESSION['civil_status'] == 'solo parent') ? 'checked' : '' ?>> Solo Parent</td>
                </tr>
                <tr>
                    <th colspan="2">EMPLOYMENT AND BIRTH INFORMATION</th>
                </tr>
               


                <tr>
                    <td>3.3. Employment Status</td>
                    <td>3.4. Birthdate</td>
                    
                </tr>
                <tr>
                <td><input type="radio" name="employment_status" value="employed" <?= (isset($_SESSION['employment_status']) && $_SESSION['employment_status'] == 'employed') ? 'checked' : '' ?>> Employed</td>
                    <td> <input type="text" name="month_of_birth" size="10" placeholder="Month of Birth" value="<?= isset($_SESSION['month_of_birth']) ? $_SESSION['month_of_birth'] : '' ?>"></td>
                </tr>
                <tr>
                <td><input type="radio" name="employment_status" value="unemployed" <?= (isset($_SESSION['employment_status']) && $_SESSION['employment_status'] == 'unemployed') ? 'checked' : '' ?>> Unemployed</td>
                    <td>  <input type="text" name="day_of_birth" size="10" placeholder="Day of Birth" value="<?= isset($_SESSION['day_of_birth']) ? $_SESSION['day_of_birth'] : '' ?>"></td>
                  
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" name="year_of_birth" size="10" placeholder="Year of Birth" value="<?= isset($_SESSION['year_of_birth']) ? $_SESSION['year_of_birth'] : '' ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" name="age" size="20" placeholder="Age" value="<?= isset($_SESSION['age']) ? $_SESSION['age'] : '' ?>"></td>
                </tr>

                <tr>
                    <td>3.5. Birthplace</td>
                    <td></td>
                </tr>
                    <tr>
                        <td><input type="text" name="birthplace_city_municipality" size="20" placeholder="City/Municipality"></td>
                        <td><input type="text" name="birthplace_province" size="20" placeholder="Province"></td>
                        
                    </tr>
                    <tr>
                        <td><input type="text" name="birthplace_region" size="20" placeholder="Region"></td>
                        <td></td>
                    </tr>
                                    
            </table>
            <div class="center">
                <button type="button" onclick="window.location.href='page1.php'">Back</button>
                <button type="submit">Next</button>
            </div>
        </form>
    </div>
</body>
</html>
