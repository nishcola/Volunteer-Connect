<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signing In...</title>
</head>
<body>
    <p id="taskName">type: <?php echo $_POST["taskName"]; ?></p>
    <p id="taskDescription">first name: <?php echo $_POST["taskDescription"]; ?></p>
    <p id="date">last name: <?php echo $_POST["date"]; ?></p>
    <p id="time">zip code: <?php echo $_POST["time"]; ?></p>

    <?php
        $sqlservername = "localhost";
        $sqlusername = "root";
        $sqlpassword = "";
        $sqldbname = "disabilitymatch";

        $Uusername = $_COOKIE["username"];

        $UtaskName = $_POST["taskName"];
        $UtaskDescription = $_POST["taskDescription"];
        $Udate = $_POST["date"];
        $Utime = $_POST["time"];

        // Create connection
        $conn = mysqli_connect($sqlservername, $sqlusername, $sqlpassword, $sqldbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";

        $query = "SELECT * FROM userrecords WHERE username = '$Uusername'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $userID = $row[0];

        $sql = "INSERT INTO taskrecords (taskName, taskDescription, creatorID, date, time, status)
        VALUES ('$UtaskName', '$UtaskDescription', '$userID', '$Udate', '$Utime', 'Upcoming')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        mysqli_close($conn); 
    ?>
</body>
</html>