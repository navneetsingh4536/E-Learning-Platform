<?php
include 'db.php';

if (isset($_POST['submit_feedback'])) {
    $course_id = $_POST['course_id'];
    $student_id = $_POST['student_id'];
    $feedback_text = $_POST['feedback_text'];
    $rating = $_POST['rating'];

    $query = "INSERT INTO feedback (course_id, student_id, feedback_text, rating) VALUES ('$course_id', '$student_id', '$feedback_text', '$rating')";
    if ($conn->query($query)) {
        echo "Feedback submitted successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
