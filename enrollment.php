<?php
include 'db.php';

if (isset($_POST['enroll'])) {
    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];

    $query = "INSERT INTO enrollments (student_id, course_id) VALUES ('$student_id', '$course_id')";
    if ($conn->query($query)) 
    {
        echo "Enrollment successful";
    }
     else {
        echo "Error: " . $conn->error;
    }
}
?>
