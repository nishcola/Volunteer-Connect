<!DOCTYPE html>
<html lang="en">

<script>
    function setLink(cell, username){
        cell.innerHTML = `<button onclick='removeVolunteer("${username}")' class='volenteer-Remove-button'>Remove</button>`;
    }

    function removeVolunteer(username){
        if(confirm('Are you sure you would like to remove this volunteer?')){
            document.cookie = `removeVolunteer = ${username}; path=/;`;
            window.location.replace('RemoveVolunteer.php');
        }
    }

    function signup(){
        window.location.replace('TaskSignupRedirect.php');
    }

    function markComplete(){
        if(confirm('Are you sure you want to mark this task as completed?')){
            window.location.replace('markTaskComplete.php');
        }
    }
    
    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
            c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
            }
        }
        return "";
    }
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AccountDashboard.css">
    <script defer src="TaskPage.js"></script>
    <script src='date.js' type='text/javascript'></script>
    <script src="https://kit.fontawesome.com/bf12c23961.js" crossorigin="anonymous"></script>
    <title>Your Task</title>
</head>

<body>
    <div class="navbar sticky" id="navbar">
        <div class="links">
            <a href="AccountDashboardRedirect.php">Home</a>
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
                <p id="dateText"><i class="fa-solid fa-calendar-days"></i>Date: </p>
                <p id="startTime"><i class="fa-solid fa-hourglass-start"></i> Start Time:</p>
                <p id="endTime"><i class="fa-solid fa-hourglass-end"></i> End Time: </p>
                <p id="slotsText"><i class="fa-solid fa-handshake-angle"></i> Slots Available:</p><br />
                <button class="task-info-button" id="signupButton" onclick="signup()">Sign Me Up!</button><br /><br />
                <button class="task-info-button" id="markCompleteButton" onclick="markComplete()">Mark As Complete.</button>
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
            </tbody>
        </table>

        <div id="emptyMessage" style="padding: 50px;">
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

        $Uusername = $_COOKIE['username'];

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
        $status = $row[7];

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

        $isCreator = false;
        if($creatorUsername == $_COOKIE['username']){
            $isCreator = true;
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

        if($status != "Upcoming"){
            echo "<script>
                var signupButton = document.getElementById('signupButton');
                var markCompleteButton = document.getElementById('markCompleteButton');

                signupButton.style.display = 'none';
                markCompleteButton.style.display = 'none';
            </script>";
        }

        $query = "SELECT u.Username FROM userrecords u INNER JOIN taskuserxref xref ON u.UserID = xref.UserID 
        INNER JOIN taskrecords t ON t.TaskID = xref.TaskID WHERE t.TaskID = '$taskId'";
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = $result->fetch_row()){
            $rows[] = $row;
        }

        for($i=0; $i<count($rows); $i++){
            $currentUsername = $rows[$i][0];

            echo "<script>
                var tableBody = document.getElementById('taskTableBody');

                var row = tableBody.insertRow(1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);

                cell1.innerText = '$currentUsername';
                if('$isCreator'){
                    //cell2.innerHTML = `<button onclick='removeVolunteer();' class='volenteer-Remove-button'>Remove</button>`;
                    setLink(cell2, '$currentUsername');
                }else{
                    cell2.innerHTML = `<p class='no-options-text'>N/A</p>`;
                }
            </script>";
        }

        echo "<script>
            var tableBody = document.getElementById('taskTableBody');

            if(tableBody.rows.length == 1){
                document.getElementById('taskTable').style.display='none'; 
                document.getElementById('emptyMessage').style.display='block';
            }else{
                document.getElementById('taskTable').style.display='table'; 
                document.getElementById('emptyMessage').style.display='none';
            }
        </script>";
        
        $query = "SELECT UserID FROM userrecords WHERE Username = '$Uusername'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $userId = $row[0];

        $query = "SELECT * FROM taskuserxref WHERE UserID = '$userId' AND TaskID = '$taskId'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        
        mysqli_close($conn);

        if($row != null){
            echo "<script>document.getElementById('signupButton').style.display = 'none';</script>";
        }
    ?>
</body>
</html>