<!DOCTYPE html>
<html id="test" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AccountDashboard.css">
    <script src="https://kit.fontawesome.com/bf12c23961.js" crossorigin="anonymous"></script>
    <script defer src="SeekerAccountDashboard.js"></script>
    <title>Account Dashboard</title>
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
                <p><a href="#" style="text-decoration: underline;" id="logoutLink">Log Out</a></p>
            </div>
        </div>
        <div class="uad-left-block">
            <div class="uad-left-block-content">
                <img id="pfp" src='images/115-1150152_default-profile-picture-avatar-png-green.png'>
                <h1 id="username">Username</h1>
                <div id="account-info">
                    <i class="fa-solid fa-envelope"></i><label>Email: lorem@ipsum.dolor</label>
                    <br />
                    <i class="fa-solid fa-handshake"></i><label>Type: Helper</label>
                    <br />
                    <i class="fa-solid fa-house"></i><label>Zip Code: 17050</label>
                    <br />
                    <i class="fa-solid fa-lock"></i><label>Password: e********</label>
                    <br />
                </div>
            </div>
        </div>
    </div>
</body>

</html>