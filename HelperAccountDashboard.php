<!DOCTYPE html>
<html id="test" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AccountDashboard.css">
    <script src="https://kit.fontawesome.com/bf12c23961.js" crossorigin="anonymous"></script>
    <script src='date.js' type='text/javascript'></script>
    <script defer src="HelperAccountDashboard.js"></script>
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
    <div class="uad-right-block">
        <div class="profile-navigation-buttons">
            <a href="#"><button class="profile-navigation" id="upcomingButton">Upcoming Tasks</button></a>
            <a href="#"><button class="profile-navigation" id="completedButton">Recently Completed</button></a>
        </div>
        <div class="empty-message" id="emptyMessage">
            <p id="emptyText">Test</p>
        </div>
        <div class="upcoming-tasks-table">
            <table id="taskTable">
                <tbody id="taskTableBody">
                    <tr>
                        <th style="width:86%;"></th>
                        <th style="width:8%;"></th>
                        <th style="width:4%;"></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php 
        $sqlservername = "localhost";
        $sqlusername = "root";
        $sqlpassword = "";
        $sqldbname = "disabilitymatch";

        // Create connection
        $conn = mysqli_connect($sqlservername, $sqlusername, $sqlpassword, $sqldbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //echo "Connected successfully";

        $tasks = array();
        $Uusername = $_COOKIE["username"];

        $query = "SELECT * FROM userrecords WHERE username = '$Uusername'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $userId = $row[0];

        $query = "SELECT * FROM taskuserxref WHERE userid = '$userId'";
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = $result->fetch_row()){
            $rows[] = $row;
        }

        if($_COOKIE["tableMode"] == "Completed"){
            $tableMode = 'Completed';
        }else{
            $tableMode = 'Upcoming';
        }

        for($i=0; $i<count($rows); $i++){
            $taskId = $rows[$i][1];
            $query = "SELECT * FROM taskrecords WHERE taskid = '$taskId'";
            $result = mysqli_query($conn, $query);
            $currentRow = mysqli_fetch_array($result);
            
            $taskName = $currentRow[1];
            $date = $currentRow[4];
            $status = $currentRow[7];

            echo"<script defer>
                    var table = document.getElementById('taskTable');
                    
                    if(('$tableMode' == 'Upcoming' && '$status' == 'Upcoming') || ('$tableMode' == 'Completed' && '$status' == 'Completed')){
                        row = table.insertRow(table.rows.length);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);

                        var date = Date.parse('$date').toString('M/d/yy');
                        cell1.innerHTML = '$taskName';
                        cell2.innerHTML = date;
                        cell3.innerHTML = '<a href=`HelperAccountDashboard.php/#`>Event Page</a>';
                    }
                </script>";
        }

        mysqli_close($conn);

        echo"<script defer>
                var table = document.getElementById('taskTable');
                var emptyText = document.getElementById('emptyText');

                if(table.rows.length == 1){
                    document.getElementById('taskTable').style.display='none'; 
                    document.getElementById('emptyMessage').style.display='block';

                    if('$tableMode' == 'Upcoming'){
                        emptyText.textContent = 'You have no upcoming tasks!';
                    }else{
                        emptyText.textContent = 'You have no completed tasks.';
                    }
                }else{
                    document.getElementById('taskTable').style.display='block'; 
                    document.getElementById('emptyMessage').style.display='none';
                }
                
            </script>";
    ?>
</body>

</html>