<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='date.js' type='text/javascript'></script>
    <script defer src="HelperAccountDashboard.js"></script>
    <link rel="icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Wheelchair_symbol.svg/898px-Wheelchair_symbol.svg.png">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Dashboard</title>
    <script>
    function redirect(taskId) {
        document.cookie = `taskId = ${taskId}; path=/`;
        window.location.replace('TaskPage.php');
    }

    function setLink(cell, taskId) {
        cell.innerHTML = `<button onclick='redirect(${taskId})' class='btn btn-primary'>Task Page</button>`;
    }
</script>
</head>

<body class="text-bg-dark">
    <div class="container-fluid text-bg-dark fixed-top border-bottom">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-0">
            <a href="HelperAccountDashboard.php"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4 text-white"><strong>Volunteer Connect</strong></span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        style="margin-right: 5px; margin-top: 5px;" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </li>
                <li class="nav-item"><a href="#" class="nav-link text-white"
                        style="margin-right: 5px; padding-left: 5px;">
                        <?php $username = 'username';
                        echo $_COOKIE[$username]; ?>
                    </a></li>
                <div class="vr"></div>
                <li class="nav-item"><a href="#" class="nav-link" id="logoutLink">Log Out</a></li>
                <li class="nav-item"><a href="FindTask.php" class="nav-link active" aria-current="page">Find Task</a>
                </li>
            </ul>
        </header>
    </div>
    <div class="container mt-5 pt-5">
        <button class="btn btn-primary p-3" id="upcomingButton">Upcoming Tasks</button>
        <button class="btn btn-primary p-3" style="margin-left: 5px;" id="completedButton">Recently Completed Tasks</button>
        <table id="taskTable" class="table table-dark table-striped mt-3">
            <tbody id="taskTableBody">
                <tr>
                    <th class="col-10">Task Name</th>
                    <th class="col-1">Date</th>
                    <th class="col-3">Page</th>
                </tr>
            </tbody>
        </table>
        <div class="empty-message mt-2" id="emptyMessage">
            <p id="emptyText" class="h1 text-primary"></p>
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
    while ($row = $result->fetch_row()) {
        $rows[] = $row;
    }

    if ($_COOKIE["tableMode"] == "Completed") {
        $tableMode = 'Completed';
    } else {
        $tableMode = 'Upcoming';
    }

    for ($i = 0; $i < count($rows); $i++) {
        $taskId = $rows[$i][1];
        $query = "SELECT * FROM taskrecords WHERE taskid = '$taskId'";
        $result = mysqli_query($conn, $query);
        $currentRow = mysqli_fetch_array($result);

        $taskName = $currentRow[1];
        $date = $currentRow[4];
        $status = $currentRow[7];
        $cell3HTML = "<button onclick=`redirect('$taskId');`>Event Page</button>";

        echo "<script defer>
                    var table = document.getElementById('taskTable');
                    
                    if(('$tableMode' == 'Upcoming' && '$status' == 'Upcoming') || ('$tableMode' == 'Completed' && '$status' == 'Completed')){
                        row = table.insertRow(table.rows.length);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);

                        var date = Date.parse('$date').toString('M/d/yy');
                        cell1.innerHTML = '$taskName';
                        cell2.innerHTML = date;
                        
                        setLink(cell3, '$taskId');
                    }
                </script>";
    }

    mysqli_close($conn);

    echo "<script defer>
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