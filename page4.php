<?php
include 'session_start.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Save additional data if needed
    // Redirect to final submission
    header("Location: page5.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form - Page 4</title>
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
            width: 720px;
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
        <h1>Registration Form - Page 4/6</h1>
        <form action="page4.php" method="post">
            <table>
                <tr>
                    <th colspan="3">Type of Disability (for Persons with Disability Only): To be filled up by the TESDA personnel</th>
                </tr>

                
                <tr>
                  <th>Type of Disability</th>
                  <th>Type of Disability</th>
                  <th>Type of Disability</th>
                </tr>
                <tr>
                  <td><input type="checkbox" name="disability[]" value="Mental/Intellectual"> Mental/Intellectual</td>
                  <td><input type="checkbox" name="disability[]" value="Visual Disability"> Visual Disability</td>
                  <td><input type="checkbox" name="disability[]" value="Orthopedic (Musculoskeletal) Disability"> Orthopedic (Musculoskeletal) Disability</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="disability[]" value="Hearing Disability"> Hearing Disability</td>
                  <td><input type="checkbox" name="disability[]" value="Speech Impairment"> Speech Impairment</td>
                <td><input type="checkbox" name="disability[]" value="Multiple Disabilities"> Multiple Disabilities, specify</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="disability[]" value="Psychosocial Disability"> Psychosocial Disability</td>
                  <td><input type="checkbox" name="disability[]" value="Disability Due to Chronic Illness"> Disability Due to Chronic Illness</td>
                  <td><input type="checkbox" name="disability[]" value="Leaming Disability"> Leaming Disability</td>
                </tr>

              <tr>
                <th colspan="3">Causes of Disability (for Persons with Disability Only): To be filled up by the TESDA personnel</th>
            
             </tr>
             <tr>
             <th>Cause of Disability</th>
             <th>Cause of Disability</th>
             <th>Cause of Disability</th>
             </tr>
             <tr>
                <td><input type="checkbox" name="cause_of_disability[]" value="Congenital/Inborn"> Congenital/Inborn</td>
                <td><input type="checkbox" name="cause_of_disability[]" value="Illness"> Illness</td>
               <td><input type="checkbox" name="cause_of_disability[]" value="Injury"> Injury</td>
             </tr>
  </table>


  <table>
            <tr>
               <th colspan="3">Taken NCAE/YP4SC Before?</th>
            </tr>

         <tr>
              <td><input type="checkbox" name="taken_ncae" value="Yes"> Yes</td>                              
              <td><input type="checkbox" name="taken_ncae" value="No"> No</td>
        </tr>
        <tr>
             <td><input type="text" placeholder="Where:" id="where" name="where"></td>
             <td><input type="text" placeholder="When:"  id="when" name="When" ></td>
        </tr>
       
        <tr>
               <th colspan="3">Name of Course/Qualification</th>
              
        </tr>
        <tr>
          <td>Name of Course/Qualification:</td>
          <td><input type="text" id="qualification" placeholder="Course/Qualification"  name="qualification"></td>
      </tr>
      
          <tr>
               <th colspan="3">If Scholar, What Type of Scholarship Package (TWSP, PESFA, STEP, others)?</th>
        </tr>
        <tr>
        <td>If Scholar, What Type of Scholarship:</td>
        <td><input type="text" id="scholarship"     placeholder=" Type of Scholarship Package (TWSP, PESFA, STEP, others)?"   name="scholarship"></td>
        </tr>
        <tr>
         <th colspan="3">Privacy Disclaimer</th>
        </tr>
        <tr>
        <td colspan="2" style="text-align: center;">I hereby allow TESDA to use/post my contact details, name, email, cellphone/landline nos. and other information I provided which maybe used for processing of my scholarship application, for employment opportunities and other purposes.</td>
        </tr>

        <tr>
        <td><input type="checkbox" name="privacy_disclaimer" value="Agree"> Agree</td>
        <td><input type="checkbox" name="privacy_disclaimer" value="Disagree"> Disagree</td>
        </tr>
            </table>
            <div class="center">
                <button type="button" onclick="window.location.href='page3.php'">Back</button>
                <button type="submit">Next</button>
            </div>
        </form>
    </div>
</body>
</html>
