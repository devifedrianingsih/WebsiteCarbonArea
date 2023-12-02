<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <h1><a href="beranda.php" style="text-decoration: none; color: green; padding-left: 17cm; font-size: 40px;">CarbonArea</a></h1>
    <div class="main">
        <!-- Sign in Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="img/signin-image.jpg" alt="sign up image"></figure>
                        <a href="register.php" class="signup-image-link">Create an account</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" action="beranda.php" onsubmit="return redirectToBeranda()" class="login-form" id="login-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log In"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://twitter.com/login?lang=en"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://accounts.google.com/login?hl=id"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main1.js"></script>
    <script>
        // Add event listener to the form submission
        document.getElementById("login-form").addEventListener("submit", function(event) {
            // Validate the form fields (you can add more validation if needed)
            var username = document.getElementById("username").value;
            var password = document.getElementById("your_pass").value;

            if (username === "" || password === "") {
                alert("Please fill in all fields");
                event.preventDefault(); // Prevent the form from submitting
            } else {
                // Redirect to beranda.php
                window.location.href = "beranda.php";
            }
        });
    </script>
    <script>
        function redirectToBeranda() {
            // You can add additional validation logic here if needed
            return true; // Returning true will allow the form submission and redirect
        }
    </script>
</body>
</html>
