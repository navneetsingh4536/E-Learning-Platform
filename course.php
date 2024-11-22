<?php
include 'db.php';

if (isset($_POST['add_course'])) {
    $course_name = $_POST['course_name'];
    $instructor_id = $_POST['instructor_id'];
    $description = $_POST['description'];

    $query = "INSERT INTO courses (course_name, instructor_id, description) VALUES ('$course_name', '$instructor_id', '$description')";
    if ($conn->query($query)) {
        echo "Course added successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
