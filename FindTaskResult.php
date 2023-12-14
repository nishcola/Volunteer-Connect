<!DOCTYPE html>
<html lang="en">
<script>
    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = document.cookie;
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
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
    <script src='date.js' type='text/javascript'></script>
    <script defer src="FindTask.js"></script>
    <link rel="icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Wheelchair_symbol.svg/898px-Wheelchair_symbol.svg.png">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Find Task</title>
    <script>
        function redirect(taskId) {
            document.cookie = `taskId = ${taskId}; path=/`;
            window.location.replace('TaskPage.php');
        }

        function setLink(cell, taskId) {
            cell.innerHTML = `<button onclick='redirect(${taskId})' class='btn btn-primary'>Task Page</button>`;
        }
    </script>

<body class="text-bg-dark">
    <div class="container-fluid text-bg-dark fixed-top border-bottom">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-0">
            <a href="AccountDashboardRedirect.php"
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
                <li class="nav-item"><a href="#" class="nav-link active" style="margin-left: 20px;" id="logoutLink">Log
                        Out</a></li>
                </li>
            </ul>
        </header>
    </div>
    <div class="container mt-5 pt-5">
        <div class="col-8">
            <form action="FindTaskResult.php" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" name="taskKeywords" id="taskKeywords" class="form-control p-3 text-white"
                            style="background-color: #2c3034; border: 2px solid #373b3e;"
                            placeholder="Search by keywords...">
                    </div>
                    <div class="col">
                        <input name="taskZipCode" id="taskZipCode" type="text" class="form-control p-3 text-white"
                            style="background-color: #2c3034; border: 2px solid #373b3e;"
                            placeholder="Search by zip code...">
                    </div>
                    <div class="col">
                        <input type="submit" value="Search" class="btn btn-primary p-3">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container mt-4">
        <h2 id="resultsLabel"></h2>
        <table id="taskTable" class="table table-dark table-striped mt-3">
            <tbody id="taskTableBody">
                <tr>
                    <th class="col-10">Task Name</th>
                    <th class="col-1">Date</th>
                    <th class="col-3">Page</th>
                </tr>
            </tbody>
        </table>
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

    $query = "SELECT userID FROM userrecords WHERE username = '$Uusername'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $UuserId = $row[0];

    $KeyWords = strtolower($_POST['taskKeywords']);
    $ZipCode = $_POST['taskZipCode'];

    $searchCase = "";
    if ($KeyWords == "" && $ZipCode != "") {
        $searchCase = "case1";
    } else if ($KeyWords != "" && $ZipCode == "") {
        $searchCase = "case2";
    } else {
        $searchCase = "case3";
    }

    if ($searchCase == "case1") {
        $query = "
            SELECT taskID, taskName, date, status 
            FROM taskrecords
            WHERE(taskZipCode LIKE '%$ZipCode%' AND status LIKE '%Upcoming%')
            ";
    } else if ($searchCase == "case2") {
        $query = "
            SELECT taskID, taskName, date, status 
            FROM taskrecords
            WHERE((LOWER(taskName) LIKE '%$KeyWords%' OR LOWER(taskDescription) LIKE '%$KeyWords%') AND status LIKE '%Upcoming%')
            ";
    } else {
        $query = "
            SELECT taskID, taskName, date, status 
            FROM taskrecords
            WHERE((LOWER(taskName) LIKE '%$KeyWords%' OR LOWER(taskDescription) LIKE '%$KeyWords%') AND taskZipCode LIKE '%$ZipCode%' AND status LIKE '%Upcoming%')
            ";
    }

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = $result->fetch_row()) {
        $rows[] = $row;
    }

    for ($i = 0; $i < count($rows); $i++) {
        $currentRow = $rows[$i];

        $taskId = $currentRow[0];
        $taskName = $currentRow[1];
        $date = $currentRow[2];
        $status = $currentRow[3];

        $cell3HTML = "<button class='profile-navigation' onclick=`redirect('$taskId');`>Event Page</button>";

        $query = "SELECT * FROM taskuserxref WHERE userID = '$UuserId' AND taskID = '$taskId'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        if($row == null){
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
            </script>";
        }
    }

    mysqli_close($conn);

    echo "<script>
            resultsLabel = document.getElementById('resultsLabel');
            var results = 'Results for: ';
            
            if('$searchCase' == 'case2'){
                results += '$KeyWords';
            }else if('$searchCase' == 'case1'){
                results += '' + '$ZipCode';
            }else{
                results += '$KeyWords' + ' in ' + '$ZipCode';
            }

            resultsLabel.innerText = results;
        </script>";
    ?>
</body>

</html>