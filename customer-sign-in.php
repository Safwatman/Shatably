<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer - Sign in | SHATTABLY</title>
    <!-- Title Icon -->
    <link rel="icon" type="image/png" href="/images/SHATTABLYwhite.png" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/Normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="css/shattably.css">
    <link rel="stylesheet" href="css/signin.css">
</head>

<body>

    <!-- ===================== Navigation Bar ===================== -->
    <div class="nav">
        <h1>
            <a href="index.html" target="_self">SHATTABLY</a>
        </h1>
        <a href="index.html" class="logo">
            <img src="images/shattablyLogo.svg" alt="website-logo">
        </a>
        <ul>
            <li>
                <a href="cus-wo-sign-in.html">Sign in</a>
            </li>
            <li>
                <a href="cus-wo-register.html">Register</a>
            </li>
        </ul>
    </div>
    <!-- ===================== END Navigation Bar ===================== -->

    <div class="welcome">
        <h2>Customer Sign-in</h2>
    </div>

    <div class="reg-form">
        <img src="images/sign-in-photo.jpg" alt="website-logo">
        <form action="Clogin.php" method="post">
            <?php
            if (isset($erroremail)) {
                echo $erroremail;
            }
            ?>
            <input type="email" class="email" name="email" placeholder="Email" >
            <?php
            if (isset($email_error)) {
                echo $email_error;
            } 
            ?>
            <input type="password" class="pass" name="password" placeholder="Password">
            <?php
            if (isset($password_error)) {
                echo $password_error;
            }
            ?>
            <input type="tel" class="cus-phone" name="customer-phone" placeholder="Phone number" required>
            <button type="submit" class="submit">Sign in </button>
            <div class="forgot-password">Forgot password?</div>
            <div class="new-account">New account? <a href="cus-wo-register.html">Register</a></div>
        </form>
    </div>

    <!-- ===================== Footer ===================== -->
    <footer>
        <div class="container">
            <img src="images/shattablyLogo.svg" alt="Logo" />
            <p>We are social</p>
            <div class="social-icons">
                <i class="fab fa-facebook-f"></i>
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
            </div>
            <div class="policy">
                <a href="terms.html" class="ter">Terms and Conditions</a>
                <a href="privacy.html" class="pol">Privacy Policy</a>
            </div>
            <p class="copyright"> &copy; <span id="date"></span> <a href="index.html">SHATTABLY</a> All Right Reserved. </p>
        </div>
    </footer>
    <!-- ===================== END Footer ===================== -->






    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/bab5d0d7f7.js" crossorigin="anonymous"></script>

</body>

</html>