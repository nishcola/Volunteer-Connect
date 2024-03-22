<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Wheelchair_symbol.svg/898px-Wheelchair_symbol.svg.png">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="switchAccountType.js"></script>
</head>
<body class="text-bg-dark">
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
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <h1 class="text-primary">Successfully switched account type! Redirecting you to the login page...</h1>
</div>
</body>
</html>