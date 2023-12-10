<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signing you up...</title>
</head>
<body>
    <p>Signup Successful!</p>
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
    $Uusername = $_COOKIE['username'];

    $query = "SELECT userID FROM userrecords WHERE Username = '$Uusername'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $userId = $row[0];

    $sql = "INSERT INTO taskuserxref (userID, taskID) VALUES ('$userId', '$taskId')";
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);

    echo "<script>
        setTimeout(function(){
            window.location.replace('TaskPage.php');
        }, 2000);
        </script>";
?>
</html>