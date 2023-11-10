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
            <h1 id="username">Welcome, <br /><?php $username = 'username'; echo $_COOKIE[$username];?>!</h1>
        </div>
    </div>
    <div class="uad-right-block">
        <div class="profile-navigation-buttons">
            <a href="CreateTask.php"><button class="profile-navigation"><strong>Create Task</strong></button></a>
            <a href="#"><button class="profile-navigation">Upcoming Tasks</button></a>
            <a href="#"><button class="profile-navigation">Recently Completed</button></a>
        </div>
        <div class="empty-message">
            <p>You have no upcoming tasks!</p>
        </div>
        <div class="upcoming-tasks-table">
            <table>
                <tr>
                    <th style="width:86%;"></th>
                    <th style="width:8%;"></th>
                    <th style="width:4%;"></th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Date</td>
                    <td>Event Page</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Date</td>
                    <td>Event Page</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Date</td>
                    <td>Event Page</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Date</td>
                    <td>Event Page</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Date</td>
                    <td>Event Page</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Date</td>
                    <td>Event Page</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Date</td>
                    <td>Event Page</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Date</td>
                    <td>Event Page</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>