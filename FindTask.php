<!DOCTYPE html>
<html id="test" lang="en">

<script>
    function redirect(taskId){
        document.cookie = `taskId = ${taskId}; path=/`;
        window.location.replace('TaskPage.php');
    }

    function setLink(cell, taskId){
        cell.innerHTML = `<button onclick='redirect(${taskId})'>Task Page</button>`;
    }
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AccountDashboard.css">
    <script src="https://kit.fontawesome.com/bf12c23961.js" crossorigin="anonymous"></script>
    <script src='date.js' type='text/javascript'></script>
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
            <h1 id="username" style="text-align: center;">Welcome, <br /><?php $username = 'username'; echo $_COOKIE[$username];?>!</h1>
            <form method="post" action = 'FindTaskResult.php' class="findingTaskForm">
                <div class="error-box" id="errorBox" style="padding: 5px;">
                    <label id="errorText" style="width: 500px; height: 20px; background-color: rgb(218, 140, 140);"></label>
                </div>
                Find task: <br /> <input name="taskKeywords" id="taskKeywords" type="text" autocomplete="on" placeholder="Keywords to search..."/></br><br />
                Or, find task from zip code: <input name="taskZipCode" id="taskZipCode" type="text" autocomplete="on" placeholder="Search by zip code..."/>
                <input type="submit" value="Submit"></br>
            </form>
        </div>
    </div>
    <div class="uad-right-block">
        <div class="profile-navigation-buttons">
            <label style="color: white;">All available tasks:</label>
        </div>
        <div class="empty-message" id="emptyMessage">
            <p id="emptyText">No Tasks Found!</p>
        </div>
        <div class="upcoming-tasks-table">
            <table id="taskTable">
                <tr>
                    <th style="width:86%;"></th>
                    <th style="width:8%;"></th>
                    <th style="width:4%;"></th>
                </tr>
            </table>
        </div>
    </div>
    <?php 
        $sqlservername = "localhost";
        $sqlusername = "root";
        $sqlpassword = "";
        $sqldbname = "disabilitymatch";

        $conn = mysqli_connect($sqlservername, $sqlusername, $sqlpassword, $sqldbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $Uusername = $_COOKIE["username"];

        #$tableMode = "";
        #if($_COOKIE["tableMode"] == "Completed"){
        #    $tableMode = 'Completed';
        #}else{
        #    $tableMode = 'Upcoming';
        #}
        
        $query = "SELECT taskID, taskName, date, status FROM taskrecords";
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = $result->fetch_row()){
            $rows[] = $row;
        }

        mysqli_close($conn);

        for($i=0; $i<count($rows); $i++){
            $currentRow = $rows[$i];
            
            $taskId = $currentRow[0];
            $taskName = $currentRow[1];
            $date = $currentRow[2];
            $status = $currentRow[3];
            
            $cell3HTML = "<button class='profile-navigation' onclick=`redirect('$taskId');`>Event Page</button>";

            echo "<script>
                var table = document.getElementById('taskTable');

                if('$status' == 'Upcoming'){
                    row = table.insertRow(table.rows.length);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);

                    var date = Date.parse('$date').toString('M/d/yy');
                    cell1.innerHTML = '$taskName';
                    cell2.innerHTML = date;
                    
                    setLink(cell3, '$taskId');
                }

                var emptyText = document.getElementById('emptyText');
                
                /*
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
                */
            </script>";
        }
    ?>
</body>

</html>