<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lms";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['assign_grade'])) {
    $student_id = $_POST['student_id'];
    $assignment_id = $_POST['assignment_id'];
    $grade = $_POST['grade'];

    $query = "INSERT INTO grades (student_id, assignment_id, grade) VALUES ('$student_id', '$assignment_id', '$grade')";

    if ($conn->query($query)) {
        $message = "Grade assigned successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>
