<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Removing Volunteer...</title>
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

    $removalUsername = $_COOKIE['removeVolunteer'];
    setcookie('removeVolunteer', '', time() - (86400 * 30), "/");

    $query = "SELECT userID FROM userrecords WHERE Username = '$removalUsername'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $userId = $row[0];

    echo $userId;

    $sql = "DELETE FROM taskuserxref WHERE userID = '$userId'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
    }

    mysqli_close($conn);

    echo"<script>window.location.replace('TaskPage.php');</script>";
?>
</html>


