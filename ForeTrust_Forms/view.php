<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view.css">
    <title>Veiw</title>
</head>

<body>
    <div class="header">
        <img src="img/Foretrust.png" alt="" width="200px">
    </div>
    <div class="body">
    <h1 class="F">View Details</h1>
    <h1>Student Information</h1>
    <div class="search-container">
        <form action="" method="post">
            <label for="search">Search Using First Name or Phone Number</label><br>
            <input type="text" class="search-input"name="search" placeholder="Type:">
            <button class="search-button">Search</button>
        </form>
    </div>
    <a href="index.php">
        <button type="button" onclick="navigateToPage1()">Back To Home</button>
    </a>

    <a href="updateform.php">
        <button type="button" onclick="navigateToPage4()">Update Form</button>
    </a>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Retrieve search query
            $search = $_POST["search"];

            include('connect.php');

            // Construct the search query
            $searchQuery = "SELECT * FROM student WHERE FirstName = '$search' OR PhoneNumber = '$search'";
            $result = $conn->query($searchQuery);

            //if record is found then display record
            if ($result->num_rows > 0) {
                echo "<table border='1' class='searchs'>";
                echo "<tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>PhoneNumber</th>
                <th>GuardianName</th>
                <th>GuardianNumber</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Educational Qualifications</th>
                <th>Other Qualifications</th>
                <th>Occupation</th>
                <th>State of Origin</th>
                <th>Course Applied</th>
                <th>Duration</th>
                <th>Date of Admission</th>
                <th>Course Fee</th>
                <th>Mode of Payment</th>	
                    </tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["StudentID"] . "</td>";
                    echo "<td>" . $row["FirstName"] . "</td>";
                    echo "<td>" . $row["LastName"] . "</td>";
                    echo "<td>" . $row["Email"] . "</td>";
                    echo "<td>" . $row["PhoneNumber"] . "</td>";
                    echo "<td>" . $row["GuardianName"] . "</td>";
                    echo "<td>" . $row["GuardianNumber"] . "</td>";
                    echo "<td>" . $row["DOB"] . "</td>";
                    echo "<td>" . $row["Gender"] . "</td>";
                    echo "<td>" . $row["Address"] . "</td>";
                    echo "<td>" . $row["EducationalQualifications"] . "</td>";
                    echo "<td>" . $row["OtherQualifications"] . "</td>";
                    echo "<td>" . $row["Occupation"] . "</td>";
                    echo "<td>" . $row["City"] . "</td>";
                    echo "<td>" . $row["CourseApplied"] . "</td>";
                    echo "<td>" . $row["Duration"] . "</td>";
                    echo "<td>" . $row["DateofAdmission"] . "</td>";
                    echo "<td>" . $row["CourseFee"] . "</td>";
                    echo "<td>" . $row["ModeofPayment"] . "</td>";
                    echo "<tr>";
                }

                echo "</table>";
            } else {
                echo "<h3>No records found for the specified name.</h3>";
            }

            // Close the connection
            $conn->close();

        }
    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>PhoneNumber</th>
                <th>GuardianName</th>
                <th>GuardianNumber</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Educational Qualifications</th>
                <th>Other Qualifications</th>
                <th>Occupation</th>
                <th>State of Origin</th>
                <th>Course Applied</th>
                <th>Duration</th>
                <th>Date of Admission</th>
                <th>Course Fee</th>
                <th>Mode of Payment</th>	
            </tr>
        </thead>

        <tbody>
        <?php

        include('connect.php');
        include('select.php');

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["StudentID"] . "</td>";
                echo "<td>" . $row["FirstName"] . "</td>";
                echo "<td>" . $row["LastName"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["PhoneNumber"] . "</td>";
                echo "<td>" . $row["GuardianName"] . "</td>";
                echo "<td>" . $row["GuardianNumber"] . "</td>";
                echo "<td>" . $row["DOB"] . "</td>";
                echo "<td>" . $row["Gender"] . "</td>";
                echo "<td>" . $row["Address"] . "</td>";
                echo "<td>" . $row["EducationalQualifications"] . "</td>";
                echo "<td>" . $row["OtherQualifications"] . "</td>";
                echo "<td>" . $row["Occupation"] . "</td>";
                echo "<td>" . $row["City"] . "</td>";
                echo "<td>" . $row["CourseApplied"] . "</td>";
                echo "<td>" . $row["Duration"] . "</td>";
                echo "<td>" . $row["DateofAdmission"] . "</td>";
                echo "<td>" . $row["CourseFee"] . "</td>";
                echo "<td>" . $row["ModeofPayment"] . "</td>";
                echo "<tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No records found</td></tr>";
        }
        ?>
    </tbody>
    </table>
    </div>







    

</body>
<script src="script.js"></script>

</html>