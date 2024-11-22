<?php
include 'db.php';

if (isset($_POST['create_topic'])) {
    $course_id = $_POST['course_id'];
    $topic = $_POST['topic'];
    $content = $_POST['content'];
    $created_by = $_POST['created_by'];

    $query = "INSERT INTO forums (course_id, topic, content, created_by, created_at) VALUES ('$course_id', '$topic', '$content', '$created_by', NOW())";
    if ($conn->query($query)) {
        echo "Forum topic created successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
