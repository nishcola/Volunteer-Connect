<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AccountDashboard.css">
    <script defer src="#"></script>
    <script src='date.js' type='text/javascript'></script>
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
            <h1 id="username-label">Opportunity Provided By: </h1>
            <h1 id="usernameText">Username</h1>
            <div class="task-information">
                <p id="dateText"><i class="fa-solid fa-calendar-days"></i> Date: </p>
                <p id="startTime"><i class="fa-solid fa-hourglass-start"></i> Start Time:</p>
                <p id="endTime"><i class="fa-solid fa-hourglass-end"></i> End Time: </p>
                <p id="slotsText"><i class="fa-solid fa-handshake-angle"></i> Slots Available:</p><br />
                <button class="task-info-button" id="signupButton">Sign Me Up!</button><br /><br />
                <button class="task-info-button" id="markCompleteButton">Mark As Complete.</button>
            </div>
        </div>
    </div>
    <div class="uad-right-block">
        <h1 class = 'title' id="taskNameText">Hello Beta!</h1>
            <p class = 'task-description-title'><b>Description: </b></p>
            <p class = 'task-description' id="taskDescriptionText"> cooking up a tsa projec tlmao</p>
            <h2 class = 'task-description' id="taskAddressText">Address: UP ur butt lol</h2>
            <h2 class = 'task-description' id="taskZipCodeText">Zip-Code: UP ur butt lol</h2>

        <table style = "width:95%" id="taskTable" class = 'task-description'>
            <tbody id="taskTableBody">
                <tr style = "width:100%" class = 'task-description-title'>
                    <th>Volunteers: </th>
                    <th style = "width:12%">Options</th>
                </tr>
                <tr>
                    <td>Tharrrruuuuunnnnn</td>
                    <td><button class="volenteer-Remove-button">Remove</button><p class="no-options-text">N/A</p></td>
                </tr>
                <tr>
                    <td>Ram</td>
                    <td><button class="volenteer-Remove-button">Remove</button><p class="no-options-text">N/A</p></td>
                </tr>
                <tr>
                    <td>nish_cola</td>
                    <td><button class="volenteer-Remove-button">Remove</button><p class="no-options-text">N/A</p></td>
                </tr>
            </tbody>
        </table>

        <div id="emptyMessage">
            <p id="emptyText">No volunteers have signed up for this opportunity yet.</p>
        </div>
    </div>

    <?php 
        $sqlservername = "localhost";
        $sqlusername = "root";
        $sqlpassword = "";
        $sqldbname = "disabilitymatch";

        $taskId = $_COOKIE["taskId"];

        $conn = mysqli_connect($sqlservername, $sqlusername, $sqlpassword, $sqldbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM taskrecords WHERE taskID = '$taskId'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        
        $creatorId = $row[3];
        $query = "SELECT Username FROM userrecords WHERE userID = '$creatorId'";
        $result = mysqli_query($conn, $query);
        $userRow = mysqli_fetch_array($result);
        $creatorUsername = $userRow[0];

        $date = $row[4];
        $startTime = $row[5];
        $endTime = $row[6];
        $maxSlots = $row[8];
        $slotsFilled = $row[9];
        $taskName = $row[1];
        $taskDescription = $row[2];
        $address = $row[10];
        $zipCode = $row[11];

        echo "<script>
            var dateText = document.getElementById('dateText');
            var startTime = document.getElementById('startTime');
            var endTime = document.getElementById('endTime');
            var slotsText = document.getElementById('slotsText');
            var taskNameText = document.getElementById('taskNameText');
            var taskDescriptionText = document.getElementById('taskDescriptionText');
            var addressText = document.getElementById('taskAddressText');
            var zipCodeText = document.getElementById('taskZipCodeText');
            var usernameText = document.getElementById('usernameText');

            var str1 = 'Date: ' + Date.parse('$date').toString('M/d/yy');
            var str2 = 'Start Time: ' + '$startTime';
            var str3 = 'End Time: ' + '$endTime';
            var str4 = 'Slots Available: ' + '$slotsFilled' + '/' + '$maxSlots';
            var str5 = '$taskName';
            var str6 = '$taskDescription';
            var str7 = 'Location: ' + '$address';
            var str8 = 'Zip Code: ' + '$zipCode';
            var str9 = '$creatorUsername';

            dateText.innerHTML = `<p id='dateText'><i class='fa-solid fa-calendar-days'></i>` + str1 + '</p>';
            startTime.innerHTML = `<p id='startTime'><i class='fa-solid fa-hourglass-start'></i>` + str2 + '</p>';
            endTime.innerHTML = `<p id='endTime'><i class='fa-solid fa-hourglass-end'></i>` + str3 + '</p>';
            slotsText.innerHTML = `<p id='slotsText'><i class='fa-solid fa-handshake-angle'></i>` + str4 + '</p>';

            taskNameText.innerText = str5;
            taskDescriptionText.innerText = str6;
            addressText.innerText = str7;
            zipCodeText.innerText = str8;
            usernameText.innerText = str9;
        </script>";

        if($creatorUsername == $_COOKIE['username']){
            echo "<script>
                var signupButton = document.getElementById('signupButton');
                var markCompleteButton = document.getElementById('markCompleteButton');

                signupButton.style.display = 'none';
                markCompleteButton.style.display = 'block';
            </script>";
        }else{
            echo "<script>
                var signupButton = document.getElementById('signupButton');
                var markCompleteButton = document.getElementById('markCompleteButton');

                signupButton.style.display = 'block';
                markCompleteButton.style.display = 'none';
            </script>";
        }

        $query = "SELECT userID FROM taskuserxref WHERE taskID = '$taskId'";
        $result = mysqli_query($conn, $query);
        $ids = mysqli_fetch_array($result);
        echo count($ids);
        $usernames = [];
        for($i=0; $i<count($ids) - 1; $i++){
            $currentId = $ids[$i];
            $query = "SELECT Username FROM userrecords WHERE UserId = '$currentId'";
            $result = mysqli_query($conn, $query);
            $currentUsername = mysqli_fetch_array($result)[0];
            echo $currentUsername;
        }
    ?>
</body>
</html>