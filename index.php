<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing.css">
    <link rel="icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Wheelchair_symbol.svg/898px-Wheelchair_symbol.svg.png">
    <script defer src="app.js"></script>
    <script defer src="cookies.js"></script>
    <title>Disability Match - Home</title>
</head>

<body>
    <div class="container">
        <div class="navbar sticky" id="navbar">
            <div class="links">
                <a href="#">Home</a>
                <a href="#about-heading">About</a>
                <a href="#services">Services</a>
                <a href="#footer">Contact</a>
            </div>
            <div class="greeting">
                <p><a href="signup.php" style="text-decoration: underline;" id="signupLink">Sign Up</a><a href="login.php" style="text-decoration: underline;">Login</a></p>
            </div>
        </div>
        <div id="darkeningDiv" class="hiddenDiv"></div>
        <div style="background-image: url(images/pexels-rdne-stock-project-6647037.jpg);background-size:cover;">
            <div class="landing-header">
                <h1>Disability Match</h1>
                <p>We believe in connecting volunteers with people who require aid.</p>
                <a href="signup.php" class="button" id="signupButton">Get Started</a>
                <div id="consentPopup" class="hidden_cookie">
                    <p>By using this site, you agree our use of cookies to store necessary information. Please <a id="acceptCookies" href="#">accept</a> before using our site.</p>
                </div>
            </div>
        </div>
        <div style="background-image: url('images/pexels-rdne-stock-project-6646952.jpg');background-size: cover;">
            <div class="about-flex-container" id="about-heading">
                <div class="about-div">
                    <h1 class="about-heading hidden">About Us</h1>
                    <p class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi ab ducimus esse ullam, vel
                        tenetur.
                        Recusandae id porro rem quibusdam, accusamus voluptates asperiores provident culpa quam dolorem
                        animi odio obcaecati?</p>
                </div>
            </div>
        </div>
        <div style="background-image: url(images/pexels-rdne-stock-project-6646877.jpg);background-size: cover;">
            <div class="services-flex-container" id="services">
                <div class="services-div-1">
                    <h1 class="services hidden">Our Services</h1>
                    <p class="hidden">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit, expedita numquam? Aut in, 
                        optio quaerat quas et corporis reprehenderit quia, tempora repellat nisi enim hic ex dolorum, modi reiciendis necessitatibus.
                    </p>
                    <a href="services.php"><button class="homepage-button" id="goToServices">Start Now</button></a>
                </div>
                <div class="line"></div>
                <div class="services-div-2">
                    <h1 class="services hidden">Our Guarantee</h1>
                    <p class="hidden">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id et impedit aliquid quaerat ipsum harum sit
                        exercitationem tempora quo magnam iure perferendis corporis vitae accusantium porro libero, assumenda blanditiis repellat.
                    </p>
                </div>
            </div>
        </div>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "disabilitymatch";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        ?>
        <div class="footer" id="footer">
            <p>We prioritize customer experience. Email us with questions, doubts, or feedback, at: lorem@ipsum.dolorsitamet</p>
        </div>
    </div>
</body>

</html>