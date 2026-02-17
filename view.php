<?php
include 'connect.php';

$name = $_POST['name'];
$age = $_POST['age'];
$course = $_POST['course'];
$year = $_POST['year_of_study'];
$email = $_POST['email'];

$sql = "INSERT INTO students (name, age, course, year_of_study, email)
        VALUES ('$name', '$age', '$course', '$year', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "<h3 style='color:green;'>Student Registered Successfully!</h3>";
    echo "<a href='index.php'>Back to Form</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
