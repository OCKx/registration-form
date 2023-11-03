<?php

/* 
*** if you are to use the PUT method instead of POST
    but i recommend that you use the POST method***

if ($_SERVER["REQUEST_METHOD"] === "PUT") {
    parse_str(file_get_contents("php://input"), $putData);
    $id = $_POST["id"];
    $email = $_POST["email"];
    $name = $_POST["name"];
}
 */


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $g_name = $_POST["g_name"];
    $g_number = $_POST["g_number"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $edu_qual = $_POST["edu_qual"];
    $other_qual = $_POST["other_qual"];
    $occupation = $_POST["occupation"];
    $nationality = $_POST["nationality"];
    $course = $_POST["course"];
    $duration = $_POST["duration"];
    $date_admit = $_POST["date_admit"];
    $fee = $_POST["fee"];
    $mod_payment = $_POST["mod_payment"];

    include('connect.php');

    // Check if a record with the specified id exists
    $idCheckQuery = "SELECT * FROM student WHERE StudentID = '$id'";
    $result = $conn->query($idCheckQuery);

    
    //ckeck if any record is found
    if ($result->num_rows > 0) {
        // Construct the update query
        $updateQuery = "UPDATE student SET";
        $updateFields = array();

        if (!empty($fname)) {
            $updateFields[] = " FirstName = '$fname'";
        }

        if (!empty($lname)) {
            $updateFields[] = " LastName = '$lname'";
        }
        
        if (!empty($email)) {
            $updateFields[] = " Email = '$email'";
        }

        if (!empty($phone)) {
            $updateFields[] = " PhoneNumber = '$phone'";
        }

        if (!empty($g_name)) {
            $updateFields[] = " GuardianName = '$g_name'";
        }

        if (!empty($g_number)) {
            $updateFields[] = " GuardianNumber = '$g_number'";
        }

        if (!empty($dob)) {
            $updateFields[] = " DOB = '$dob'";
        }

        if (!empty($gender)) {
            $updateFields[] = " Gender = '$gender'";
        }

        if (!empty($address)) {
            $updateFields[] = " Address = '$address'";
        }
        if (!empty($edu_qual)) {
            $updateFields[] = " EducationalQualifications = '$edu_qual'";
        }

        if (!empty($other_qual)) {
            $updateFields[] = " OtherQualifications = '$other_qual'";
        }

        if (!empty($occupation)) {
            $updateFields[] = " Occupation = '$occupation'";
        }

        if (!empty($nationality)) {
            $updateFields[] = " City = '$nationality'";
        }

        if (!empty($course)) {
            $updateFields[] = "  CourseApplied  = '$course'";
        }

        if (!empty($duration)) {
            $updateFields[] = " Duration = '$duration'";
        }

        if (!empty($date_admit)) {
            $updateFields[] = " DateofAdmission = '$date_admit'";
        }

        if (!empty($fee)) {
            $updateFields[] = " CourseFee = '$fee'";
        }

        if (!empty($mod_payment)) {
            $updateFields[] = " ModeofPayment = '$mod_payment'";
        }

        
        // Include other fields as needed


        if (!empty($updateFields)) {
            $updateQuery .= implode(', ', $updateFields);
            $updateQuery .= " WHERE StudentID = '$id'";

            if ($conn->query($updateQuery) === TRUE) {
                // Redirect back to update.php
                header("Location: success.php");
                exit();
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            echo "<h1>No fields to update.</h1>";
        }
    } else {
        echo "Record with the specified id does not exist.";
    }

    // Close the connection
    $conn->close();
}
?>