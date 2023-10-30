<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Landing Page Title</title>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            margin: 0;
            background-color: #f6f8fa;
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 200vh;
            /* Adjusted to 200vh to accommodate two sections */
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #24292e;
            color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .navbar .links {
            display: flex;
        }

        .navbar .greeting {
            margin-left: auto;
            padding-right: 40px;
            color: #fff;
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            padding: 10px 15px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 0 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .company-info {
            display: flex;
            height: 100vh;
            background-color: #ffffff;
            padding: 0 20px;
        }

        .company-info-text {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 0 20px;
        }

        .company-info-text h2 {
            color: #24292e;
            margin-bottom: 20px;
        }

        .company-info-text p {
            color: #586069;
            text-align: left;
        }

        .company-info-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .company-info-image img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="links">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
            </div>
            <div class="greeting">
                <p>Welcome, User! <a href="#">Log Out</a></p>
            </div>
        </div>
        <div class="content">
            <h1>Disability Match</h1>
            <p>Our mission is to connect people with resources they need.</p>
            <a href="#" class="button">Get Started</a> <!-- Added button -->
        </div>
        <div class="company-info">
            <div class="company-info-text">
                <h2>Disability Match</h2>
                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="company-info-image">
                <!-- Replace the source with your desired image -->
                <img src="your_image.jpg" alt="Company Image">
            </div>
        </div>
    </div>
</body>

</html>