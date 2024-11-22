<?php

$host = "localhost"; 
$user = "root";      
$pass = "";         
$db = "lms"; 

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
  
    $student_name = $_POST['student_name'];

    if (isset($_FILES['assignment_file']) && $_FILES['assignment_file']['error'] == 0) {
        
        $file_name = $_FILES['assignment_file']['name'];
        $file_tmp = $_FILES['assignment_file']['tmp_name'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $allowed_ext = array("pdf", "doc", "docx", "txt");

        if (in_array($file_ext, $allowed_ext)) {
        
            $upload_dir = "uploads/";

            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            $new_file_name = uniqid() . "_" . $file_name;

            if (move_uploaded_file($file_tmp, $upload_dir . $new_file_name)) {
                
                $sql = "INSERT INTO assignments (student_name, file_name) VALUES ('$student_name', '$new_file_name')";
                if ($conn->query($sql) === TRUE) {
                    echo "File uploaded and saved successfully!";
                } else {
                    echo "Database error: " . $conn->error;
                }
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Invalid file format. Only PDF, DOC, DOCX, and TXT files are allowed.";
        }
    } else {
        echo "No file uploaded.";
    }
}

$conn->close();
?>
