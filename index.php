<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your App</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav id="navbar">
        <div class="navbar-container">
            <div class="navbar-left">
                <abbr title="Toggle theme"><div id="theme-toggle" class="theme-icon">
                    <i class="fas fa-sun" id="sun-icon"></i>
                    <i class="fas fa-moon" id="moon-icon" style="display:none;"></i>
                </div></abbr>
            </div>
            <div class="navbar-center">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
            </div>
            <div class="navbar-right">
                <a class="btn signup" href="html/signup.html">Sign Up</a>
                <a class="btn login" href="html/login.html">Login</a>
            </div>
            <div class="hamburger" id="hamburger" onclick="toggleNavbar()">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <!-- nav for small screen -->
        <div class="navbar-mobile" id="mobile-menu">
            <span class="close" onclick="toggleNavbar()">&times;</span>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a class="btn signup" href="html/signup.html">Sign Up</a>
            <a class="btn login" href="html/login.html">Login</a>
        </div>
        
    </nav>

    <div class="intro">
        <h1>Welcome to my Application</h1>
        <p>Discover our services and manage your <b>account</b> easily.</p>
    </div>

    <div class="floating-buttons">
        <a href="html/signup.html" class="btn floating-btn signup">Join us</a>
        <a href="html/login.html" class="btn floating-btn login">Explore</a>
    </div>

    <script src="js/scripts.js"></script>
</body>
</html>