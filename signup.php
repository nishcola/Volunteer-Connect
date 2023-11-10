<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Wheelchair_symbol.svg/898px-Wheelchair_symbol.svg.png">
    <script defer src="signup.js"></script>
    <title>Sign Up - Disability Match</title>
</head>

<body>
    <div class="background-container">
        <div class="bgc2">
            <form method="post">
                <div class="error-box" id="errorBox" style="padding: 5px;">
                    <label id="errorText" style="width: 500px; height: 20px; background-color: rgb(218, 140, 140);"></label>
                </div>
                <h2>Sign Up</h2>
                Username: <input id="username" type="text" autocomplete="on" placeholder="Choose a username..."/>
                <br />
                Password: <input id="password" type="password" autocomplete="on" placeholder="Choose a password..."/>
                <br />
                <!-- <input type="submit" id="signupButton" value="Sign Up"> -->
                <button type="button" id="signupButton">Sign Up</button>
                <div class="login-section">
                    <p>Already have an account?<br><a href="login.php">Log in here</a>.</p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>