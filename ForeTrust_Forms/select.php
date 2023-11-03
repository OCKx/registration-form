<?php
    include('connect.php');

// Retrieve data from the database
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

?>