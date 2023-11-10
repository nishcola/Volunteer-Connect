<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script defer src="LoginScreen.js"></script>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Wheelchair_symbol.svg/898px-Wheelchair_symbol.svg.png">
    <title>Login - Disability Match</title>
</head>

<body>
    <div class="background-container">
        <div class="bgc2">
            <form action="LoginRedirect.php" method="post">
                <div class="error-box" id="errorBox" style="padding: 5px;">
                    <label id="errorText" style="width: 500px; height: 20px; background-color: rgb(218, 140, 140);">Invalid login information.</label>
                </div>
                <h2>Login</h2>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Your username..." required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Your password..." required>
                <input type="submit" id="loginButton" value="Submit">
                <div class="signup-section">
                    <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>