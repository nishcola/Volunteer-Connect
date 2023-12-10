<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Wheelchair_symbol.svg/898px-Wheelchair_symbol.svg.png">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Changing task status...</title>
</head>
<body class="bg-dark">
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status" id="spinner"></div>
        <span class="text-primary" style="margin-left: 15px; font-size: 20px;" id="text">Marking as complete...</span>
    </div>
</body>
<?php
    $sqlservername = "localhost";
    $sqlusername = "root";
    $sqlpassword = "";
    $sqldbname = "disabilitymatch";

    $conn = mysqli_connect($sqlservername, $sqlusername, $sqlpassword, $sqldbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $taskId = $_COOKIE['taskId'];

    $query = "SELECT date, startTime, endTime FROM taskrecords WHERE taskID = '$taskId'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $date = $row[0];
    $startTimeRaw = $row[1];
    $endTimeRaw = $row[2];

    $startDateTime = new DateTime($date . " " . $startTimeRaw);
    $endDateTime = $date . " " . $endTimeRaw;

    $difference = $startDateTime->diff(new DateTime($endDateTime));
    $minutes = $difference->days * 24 * 60;
    $minutes += $difference->h * 60;
    $minutes += $difference->i;

    $taskHours = round($minutes / 60);


    $query = "SELECT userID FROM taskuserxref WHERE taskID = '$taskId'";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = $result->fetch_row()){
        $rows[] = $row;
    }

    for($i=0; $i<count($rows); $i++){
        $currentUserId = $rows[$i][0];

        $query = "SELECT totalHours FROM userrecords WHERE userID = '$currentUserId'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $totalHours = $row[0];

        $totalHours += $taskHours;

        $sql = "UPDATE userrecords SET totalHours = '$totalHours' WHERE userID = '$currentUserId'";
        if($conn->query($sql) === TRUE){
            echo "Record updated successfully";
        }else{
            echo "Error updating record: " . $conn->error;
        }
    }

    $status = 'Completed';
    $sql = "UPDATE taskrecords SET status = '$status' WHERE taskID = '$taskId'";
    if($conn->query($sql) === TRUE){
        echo "";
    }else{
        echo "Error updating record: " . $conn->error;
    }

    mysqli_close($conn);

    echo "

    <script>
    setTimeout(function(){
        window.location.replace('AccountDashboardRedirect.php');
    }, 3000);
    setTimeout(function () {
        var spinner = document.getElementById('spinner');
        var text = document.getElementById('text');
        spinner.classList.remove('spinner-border');
        spinner.innerHTML += `
            <svg xmlns='http://www.w3.org/2000/svg' width='35' height='35' fill='#198754' class='bi bi-check-circle-fill' viewBox='0 0 16 16'>
                <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
            </svg>
        `;
        text.classList.remove('text-primary');
        text.classList.add('text-success');
        text.innerHTML = 'Marked as completed!';
    }, 1000);
    </script>
    
    ";
?>
?>
</html>