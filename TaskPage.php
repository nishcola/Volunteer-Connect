<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AccountDashboard.css">
    <script defer src="#"></script>
    <script src="https://kit.fontawesome.com/bf12c23961.js" crossorigin="anonymous"></script>
    <title>Your Task</title>
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
            <h1 id="username">Opportunity Provided By: <br />Username</h1>
            <div class="task-information">
                <p><i class="fa-solid fa-calendar-days"></i> Date: </p>
                <p><i class="fa-solid fa-hourglass-start"></i> Start Time:</p>
                <p><i class="fa-solid fa-hourglass-end"></i> End Time: </p>
                <p><i class="fa-solid fa-handshake-angle"></i> Slots Available:</p><br />
                <button class="task-info-button">Sign Me Up!</button><br /><br />
                <button class="task-info-button" id="complete">Mark As Complete.</button>
            </div>
        </div>
    </div>
    <div class="uad-right-block">
        <h1 class = 'title'>Hello Beta!</h1>
            <p class = 'task-description-title'><b>Description: </b></p>
            <p class = 'task-description'> cooking up a tsa projec tlmao</p>
            <h2 class = 'task-description'>Address: UP ur butt lol</h1>
            <h2 class = 'task-description'>Zip-Code: UP ur butt lol</h1>

        <table style = "width:95%" id="taskTable" class = 'task-description'>
            <tbody id="taskTableBody">
                <tr  style = "width:100%" class = 'task-description-title'>
                    <th>Volenteers: </th>
                    <th style = "width:12%">Options</th>
                </tr>
                <tr>
                    <td>Tharrrruuuuunnnnn</td>
                    <td><button class="volenteer-Remove-button">Remove</button><button class="volenteer-Completed-button">Completed</button</td>
                </tr>
                <tr>
                    <td>Ram</td>
                    <td><button class="volenteer-Remove-button">Remove</button><button class="volenteer-Completed-button">Completed</button</td>
                </tr>
                <tr>
                    <td>nish_cola</td>
                    <td><button class="volenteer-Remove-button">Remove</button><button class="volenteer-Completed-button">Completed</button</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>