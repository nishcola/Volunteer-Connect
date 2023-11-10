<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signing In...</title>
</head>
<body>
    <p id="taskName">name: <?php echo $_POST["taskName"]; ?></p>
    <p id="taskDescription">description: <?php echo $_POST["taskDescription"]; ?></p>
    <p id="date">date: <?php echo $_POST["date"]; ?></p>
    <p id="time">start time: <?php echo $_POST["startTime"]; ?></p>
    <p id="time">end time: <?php echo $_POST["endTime"]; ?></p>

    <?php
        $sqlservername = "localhost";
        $sqlusername = "root";
        $sqlpassword = "";
        $sqldbname = "disabilitymatch";

        $Uusername = $_COOKIE["username"];


        // Create connection
        $conn = mysqli_connect($sqlservername, $sqlusername, $sqlpassword, $sqldbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";

        $UtaskName = $conn -> real_escape_string($_POST["taskName"]);
        $UtaskDescription = $conn -> real_escape_string($_POST["taskDescription"]);
        $Udate = $_POST["date"];
        $UstartTime = $_POST["startTime"];
        $UendTime = $_POST["endTime"];

        $query = "SELECT * FROM userrecords WHERE username = '$Uusername'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $userID = $row[0];

        $sql = 'INSERT INTO taskrecords (taskName, taskDescription, creatorID, date, startTime, endTime, status)
        VALUES ("$UtaskName", "$UtaskDescription", "$userID", "$Udate", "$UstartTime", "$UendTime", "Upcoming")';

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        mysqli_close($conn); 
    ?>
</body>
</html>