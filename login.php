<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Login to InspireLearn</h1>
    </header>

    <form action="auth.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="submit" name="login" value="Login">
    </form>
    <br><br><br><br><br>
    
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
            <p>Email: info@inspirelearn.com</p>
            <p>Phone: +161 456 7890</p>
        </div>
    </div><br>

    <div>
        <p>&copy; 2024 InspireLearn. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
