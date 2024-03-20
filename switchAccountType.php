<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="switchAccountType.js"></script>
</head>
<body>
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

    $username = $_COOKIE["username"];

    $query = "SELECT * FROM userrecords WHERE Username = '$username'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $userId = $row[0];
    $accountType = $row[3];

    if ($accountType == "Helper") {
        $query = "UPDATE userrecords SET AccountType='Seeker' WHERE UserID = '$userId'";
        $result = mysqli_query($conn, $query);
    } else {
        $query = "UPDATE userrecords SET AccountType='Helper' WHERE UserID = '$userId'";
        $result = mysqli_query($conn, $query);
    }
    
    mysqli_close($conn);

    ?>
    Successfully changed account type! Redirecting you to the login page shortly...
</body>
</html>