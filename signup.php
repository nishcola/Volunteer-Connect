<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script defer src="signup.js"></script>
    <script defer src="app.js"></script>
    <title>Sign Up - Disability Match</title>
</head>
<body>
    <form action="/signup" method="post">
        <h2>Sign Up</h2>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Choose a username.." required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Choose a password.." required>
        <p id="passwordInfo">Min. 8 characters; at least 1 uppercase, lowercase, number, & special character</p>
        <input type="submit" id="signupButton" value="Sign Up">
        <div class="login-section">
            <p>Already have an account? <a href="index.html">Login here</a>.</p>
        </div>
    </form>
</body>
</html>