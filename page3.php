<?php
include 'session_start.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Save data from page 3
    $_SESSION['employment_status'] = $_POST['employment_status'];
    $_SESSION['birth_date'] = $_POST['birth_date'];
    $_SESSION['birth_place'] = $_POST['birth_place'];

    // Redirect to page 4
    header("Location: page4.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form - Page 3</title>
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
    <h1>Registration Form - Page 3/6</h1>
    <form action="page3.php" method="post">
        <table>
            <tr>
                <th colspan="3">Educational Attainment Before the Training (Trainee)</th>
            </tr>
            <tr>
                <td><input type="checkbox" name="educational_attainment[]" value="no_grade_completed"> No Grade Completed</td>
                <td><input type="checkbox" name="educational_attainment[]" value="pre_school"> Pre-School (Nursery/Kinder/Prep)</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="educational_attainment[]" value="elementary_undergraduate"> Elementary Undergraduate</td>
                <td><input type="checkbox" name="educational_attainment[]" value="post_secondary_undergraduate"> Post Secondary Undergraduate</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="educational_attainment[]" value="elementary_graduate"> Elementary Graduate</td>
                <td><input type="checkbox" name="educational_attainment[]" value="post_secondary_graduate"> Post Secondary Graduate</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="educational_attainment[]" value="high_school_undergraduate"> High School Undergraduate</td>
                <td><input type="checkbox" name="educational_attainment[]" value="high_school_graduate"> High School Graduate</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="educational_attainment[]" value="college_undergraduate"> College Undergraduate</td>
                <td><input type="checkbox" name="educational_attainment[]" value="college_graduate_or_higher"> College Graduate or Higher</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="educational_attainment[]" value="junior_high_graduate"> Junior High Graduate</td>
                <td><input type="checkbox" name="educational_attainment[]" value="senior_high_graduate"> Senior High Graduate</td>
            </tr>
            
  
        <table>
            <tr>
                <th colspan="3">3.7. Parent/Guardian</th>
            </tr>
            <tr>
                <td>Parent/Guardian Name:</td>
                <td colspan="2"><input type="text" name="parent_guardian_name" size="50" placeholder="Name"></td>
            </tr>
            <tr>
                <td>Complete Permanent Mailing Address:</td>
                <td colspan="2"><input type="text" name="parent_guardian_address" size="50" placeholder="Complete Permanent Mailing Address"></td>
            </tr>
        
       
            <tr>
                <th colspan="3">Learner/Trainee/Student (Clients) Classification:</th>
            </tr>
            <th>Learner/Trainee/Student</th>
            <th>Client Type</th>
           <th>Client Type</th>
            <tr class="row">
                <td class="column">
                    <input type="checkbox" name="classification[]" value="Students"> Students<br>
                    <input type="checkbox" name="classification[]" value="Out-of-School-Youth"> Out-of-School-Youth<br>
                    <input type="checkbox" name="classification[]" value="Solo Parent"> Solo Parent<br>
                    <input type="checkbox" name="classification[]" value="Solo Parent's Children"> Solo Parent's Children<br>
                    <input type="checkbox" name="classification[]" value="Senior Citizens"> Senior Citizens<br>
                    <input type="checkbox" name="classification[]" value="Displaced HEIs Teaching Personnel"> Displaced HEIs Teaching Personnel<br>
                    <input type="checkbox" name="classification[]" value="Displaced Workers"> Displaced Workers<br>
                    <input type="checkbox" name="classification[]" value="TVET Trainers"> TVET Trainers<br>
                    <input type="checkbox" name="classification[]" value="Currently Employed Workers"> Currently Employed Workers<br>
                    <input type="checkbox" name="classification[]" value="Employees with Contractual/Job-Order Status"> Employees with Contractual/Job-Order Status<br>
                    <input type="checkbox" name="classification[]" value="TESDA Alumni"> TESDA Alumni<br>
                    <input type="checkbox" name="classification[]" value="Urban and Rural Poor"> Urban and Rural Poor<br>
                    
                </td>
                <td class="column">
                    <input type="checkbox" name="classification[]" value="Informal Workers"> Informal Workers<br>
                    <input type="checkbox" name="classification[]" value="Industry Workers"> Industry Workers<br>
                    <input type="checkbox" name="classification[]" value="Cooperatives"> Cooperatives<br>
                    <input type="checkbox" name="classification[]" value="Family Enterprises"> Family Enterprises<br>
                    <input type="checkbox" name="classification[]" value="Micro Entrepreneurs"> Micro Entrepreneurs<br>
                    <input type="checkbox" name="classification[]" value="Family Members of Microentrepreneur"> Family Members of Microentrepreneur<br>
                    <input type="checkbox" name="classification[]" value="Farmers and Fisherman"> Farmers and Fisherman<br>
                    <input type="checkbox" name="classification[]" value="Family Members of Farmers and Fisherman"> Family Members of Farmers and Fisherman<br>
                    <input type="checkbox" name="classification[]" value="Community Tmg. & Employment Coordinator"> Community Tmg. & Employment Coordinator<br>
                    <input type="checkbox" name="classification[]" value="Retuming/Repatriated Overseas Filipino Workers"> Retuming/Repatriated Overseas Filipino Workers<br>
                    <input type="checkbox" name="classification[]" value="Overseas Filipino Workers (OFW) Dependents"> Overseas Filipino Workers (OFW) Dependents<br>
                    <input type="checkbox" name="classification[]" value="Persons with Disabilities"> Persons with Disabilities<br>
                </td>
                <td class="column">
                    <input type="checkbox" name="classification[]" value="Indigenous People & Cultural Communities"> Indigenous People & Cultural Communities<br>
                    <input type="checkbox" name="classification[]" value="Disadvantaged Women"> Disadvantaged Women<br>
                    <input type="checkbox" name="classification[]" value="Victim of Natural Disasters and Calamities"> Victim of Natural Disasters and Calamities<br>
                    <input type="checkbox" name="classification[]" value="Victim or Survivor of Human Trafficking"> Victim or Survivor of Human Trafficking<br>
                    <input type="checkbox" name="classification[]" value="Drug Dependent Surrenderers"> Drug Dependent Surrenderers<br>
                    <input type="checkbox" name="classification[]" value="Rebel Returnees or Decommissioned Combatants"> Rebel Returnees or Decommissioned Combatants<br>
                    <input type="checkbox" name="classification[]" value="Inmates and Detainees"> Inmates and Detainees<br>
                    <input type="checkbox" name="classification[]" value="Wounded-in-Action AFP & PNP Personnel"> Wounded-in-Action AFP & PNP Personnel<br>
                    <input type="checkbox" name="classification[]" value="Family Members of AFP and PNP Killed-and-Wounded in-Action"> Family Members of AFP and PNP Killed-and-Wounded in-Action<br>
                    <input type="checkbox" name="classification[]" value="Family Members of Inmates and Detainees"> Family Members of Inmates and Detainees<br>
                    <input type="checkbox" name="classification[]" value="Uniformed Personnel"> Uniformed Personnel<br>
                    
                    
                </td>
            </tr>
        </table>
            <div class="center">
                <button type="button" onclick="window.location.href='page2.php'">Back</button>
                <button type="submit">Next</button>
            </div>
        </form>
    </div>
</body>
</html>
