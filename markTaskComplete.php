<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marking task complete...</title>
</head>
<body>
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
        echo "Record updated successfully";
    }else{
        echo "Error updating record: " . $conn->error;
    }

    mysqli_close($conn);

    echo "<script>window.location.replace('TaskPage.php');</script>"
?>
</html>