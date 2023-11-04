<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Wheelchair_symbol.svg/898px-Wheelchair_symbol.svg.png">
    <script defer src="SignupComplete.js"></script>
    <link rel="stylesheet" href="login.css">
    <title>Sign Up Successful!</title>
</head>
<body>
    <div class="background-container">
        <form method="post" action = "SignUpRedirect.php">
            <div>
                <h3 id="scUsername">Welcome, <em><?php $username = 'username'; echo $_COOKIE[$username];?></em></h3>
                <p>Before you're finished setting up your account, please fill out this info!</p>
            </div>
            <div>
                <p>Account Type:</p>
                <input id="helperButton" type="radio" name="accountType" value="Helper"/>
                <label for="helperButton">Helper</label>
                <h5>I want to help others!</h5>
                <input id="seekerButton" type="radio" name="accountType" value="Seeker"/>
                <label for="seekerButton">Seeker</label>
                <h5>I am seeking volunteers to help me!</h5>
                <h6>Note: Your account type is permanent, so make sure you select the correct one!</h6>
            </div>
            <div>
                <p style="text-decoration: underline;">Basic Information:</p>
                <label for="firstName">First Name:</label><br />
                <input id="firstName" type="text" name="firstName" autocomplete="on" placeholder="Type your first name..."/>
                <label for="lastName">Last Name:</label><br />
                <input name = "lastName" id="lastName" type="text" autocomplete="on" placeholder="Type your last name..."/>
                <label for="zipCode">Zip Code:</label><br />
                <input name = "zipCode" id="zipCode" type="text" autocomplete="on" placeholder="Type your zip code..."/>
            </div>
            <input type="submit" value="Submit">
        </form>
        
    </div>
</body>