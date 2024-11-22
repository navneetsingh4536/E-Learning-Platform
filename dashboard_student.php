<?php
session_start();
if ($_SESSION['role'] != 'student') {
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
      
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #101011;
        }

        header {
            background-color:  #009688;
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

        .dashboard-overview, .progress-tracker {
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
            background-color:  #009688;
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
            background-color:  #009688;
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
            background-color:  #009688;
        }

        .upcoming-deadlines {
            text-align: left;
            padding: 20px;
            margin: 20px auto;
            max-width: 80%;
        }

        .deadline-list ul {
            list-style-type: none;
            padding: 0;
        }

        .deadline-list li {
            background-color: #fff;
            padding: 15px;
            margin: 10px 0;
            border-left: 5px solid  #009688;
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
            <h1>InspireLearn - Student Dashboard</h1>
            <p>Your gateway to a brighter future</p>
        </div>
    </header>

    <section class="dashboard">
        <div class="welcome-section">
            <h2>Welcome, Student!</h2>
            <p>We're excited to see your progress. Let's keep learning!</p>
        </div>

        <div class="info-section">
            <div class="dashboard-overview">
                <h3>Overview</h3>
                <ul>
                    <li><strong>Current Courses:</strong> 5</li>
                    <li><strong>Completed Assignments:</strong> 3</li>
                    <li><strong>Pending Assignments:</strong> 2</li>
                    <li><strong>Total Credits Earned:</strong> 20</li>
                </ul>
            </div>

            <div class="progress-tracker">
                <h3>Your Progress</h3>
                <p>You're currently on track to complete your coursework for the semester. Keep up the great work!</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 60%;">60%</div>
                </div>
            </div>
        </div>

        <div class="dashboard-menu">
            <h3>Quick Links</h3>
            <div class="menu-grid">
            <a href="courses.html" class="menu-item">View Courses</a>
            <a href="assignment.html" class="menu-item">Submit Assignments</a>
            <a href="#" class="menu-item">View Grades</a>
            <a href="#" class="menu-item">Progress Tracker</a>
        </div>
        </div>
    </section>

    <section class="upcoming-deadlines">
        <h3>Upcoming Deadlines</h3>
        <div class="deadline-list">
            <ul>
                <li>Assignment 4 - Due: <strong>October 25th, 2024</strong></li>
                <li>Mid-Term Project - Due: <strong>November 5th, 2024</strong></li>
                <li>Final Exam - <strong>December 10th, 2024</strong></li>
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
