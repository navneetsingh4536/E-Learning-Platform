<?php
include 'db.php';

if (isset($_POST['issue_certificate'])) {
    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];

    $query = "INSERT INTO certificates (student_id, course_id, issued_at) VALUES ('$student_id', '$course_id', NOW())";
    if ($conn->query($query)) {
        echo "Certificate issued successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
