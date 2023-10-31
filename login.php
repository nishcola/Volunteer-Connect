<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script defer src="app.js"></script>
    <title>Login - Disability Match</title>
</head>

<body>
    <div class="background-container">
        <div class="bgc2">
            <form action="/login" method="post">
                <h2>Login</h2>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Your username.." required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Your password.." required>
                <input type="submit" value="Login">
                <div class="signup-section">
                    <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>