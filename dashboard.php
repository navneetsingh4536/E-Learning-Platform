<?php
session_start();
include 'db.php';

if ($_SESSION['role'] == 'instructor') {
    header("Location: ../LMS_Project/dashboard_instructor.php");
} else {
    header("Location: ../LMS_Project/dashboard_student.php");
}
?>
