<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" ) {
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

// Insert data into the database 
    $sql = "INSERT INTO student (FirstName, LastName, Email, PhoneNumber, GuardianName, GuardianNumber, DOB, Gender, Address, EducationalQualifications, OtherQualifications, Occupation, City, CourseApplied, Duration, DateofAdmission, CourseFee, ModeofPayment) VALUES ('$fname', '$lname', '$email', '$phone', '$g_name', '$g_number', '$dob','$gender', '$address', '$edu_qual', '$other_qual', '$occupation', '$nationality', '$course', '$duration', '$date_admit', '$fee', '$mod_payment')";

    if ($conn->query($sql) === TRUE) {
        header("Location: success.php");
        exit();
    }

// Close the connection 
    $conn->close();
}
?>