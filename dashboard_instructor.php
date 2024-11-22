<?php
session_start();
if ($_SESSION['role'] != 'instructor') {
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background-color: #009688;
            color: white;
            text-align: center;
            padding: 20px;
        }

        h1, h2, h3 {
            margin: 0;
            padding: 10px 0;
        }

        .dashboard {
            text-align: center;
            padding: 20px;
        }

        .welcome-section {
            margin-bottom: 30px;
        }

        .info-section {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .dashboard-overview, .student-tracker {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 40%;
        }

        .progress-bar {
            background-color: #ddd;
            border-radius: 10px;
            width: 100%;
            height: 20px;
            margin-top: 10px;
        }

        .progress {
            background-color: #009688;
            height: 100%;
            border-radius: 10px;
            text-align: center;
            color: white;
            font-size: 12px;
        }

        .dashboard-menu {
            margin-top: 30px;
        }

        .menu-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
        }

        .menu-item {
            background-color: #009688;
            color: white;
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 8px;
            margin: 10px;
            display: block;
            text-align: center;
            width: 180px;
        }

        .menu-item:hover {
            background-color: #009688;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .footer-social {
            margin-bottom: 15px;
        }

        .social-icons a {
            margin: 0 10px;
        }

        .social-icons img {
            width: 30px;
            height: 30px;
        }

        footer p {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>InspireLearn - Instructor Dashboard</h1>
            <p>Empowering you to lead the next generation of learners</p>
        </div>
    </header>

    <section class="dashboard">
        <div class="welcome-section">
            <h2>Welcome, Instructor!</h2>
            <p>Manage your courses and student progress here.</p>
        </div>

        <div class="info-section">
            <div class="dashboard-overview">
                <h3>Course Overview</h3>
                <ul>
                    <li><strong>Active Courses:</strong> 3</li>
                    <li><strong>Assignments Graded:</strong> 45</li>
                    <li><strong>Upcoming Deadlines:</strong> 2</li>
                    <li><strong>Enrolled Students:</strong> 120</li>
                </ul>
            </div>

            <div class="student-tracker">
                <h3>Student Progress Tracker</h3>
                <p>Monitor the overall progress of your students.</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 70%;">70% Average Progress</div>
                </div>
            </div>
        </div>

        <div class="dashboard-menu">
            <h3>Quick Actions</h3>
            <div class="menu-grid">
            <a href="courses.html" class="menu-item">Manage Courses</a>
            <a href="grade.html" class="menu-item">Grade Assignments</a>
            <a href="#" class="menu-item">View Forum</a>
        </div>
        </div>
    </section>

    <section class="upcoming-deadlines">
        <h3>Upcoming Deadlines</h3>
        <div class="deadline-list">
            <ul>
                <li>Assignment Grading - Due: <strong>October 25th, 2024</strong></li>
                <li>Course Review - Due: <strong>November 5th, 2024</strong></li>
            </ul>
        </div>
    </section><br><br>

    <footer>
        <div class="footer-social">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="https://www.facebook.com/YourPage" target="_blank">
                    <img src="images/face.png" alt="Facebook">
                </a>&nbsp; &nbsp;
                <a href="https://www.twitter.com/YourPage" target="_blank">
                    <img src="images/twitter.png" alt="Twitter">
                </a>&nbsp; &nbsp;
                <a href="https://www.instagram.com/YourPage" target="_blank">
                    <img src="images/inst.jpg" alt="Instagram">
                </a>&nbsp; &nbsp;
                <a href="https://www.linkedin.com/company/YourPage" target="_blank">
                    <img src="images/in.png" alt="LinkedIn">
                </a>
            </div>
        </div><br>

        <div>
            <h3>Contact Us</h3>
            <p>Email: support@inspirelearn.com</p>
            <p>Phone: +161 456 7890</p>
        </div>
        <br>

        <div>
            <p>&copy; 2024 InspireLearn. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
