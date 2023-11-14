<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signing In...</title>
</head>
<body>
    <p id="accountType">type: <?php echo $_POST["accountType"]; ?></p>
    <p id="firstName">first name: <?php echo $_POST["firstName"]; ?></p>
    <p id="lastName">last name: <?php echo $_POST["lastName"]; ?></p>
    <p id="zipCode">zip code: <?php echo $_POST["zipCode"]; ?></p>

    <?php
        $sqlservername = "localhost";
        $sqlusername = "root";
        $sqlpassword = "";
        $sqldbname = "disabilitymatch";

        $Uusername = $_COOKIE["username"];
        $Upassword = $_COOKIE["password"];
        $UaccountType = $_POST["accountType"];
        $UfirstName = $_POST["firstName"];
        $UlastName = $_POST["lastName"];
        $UzipCode = $_POST["zipCode"];

        // Create connection
        $conn = mysqli_connect($sqlservername, $sqlusername, $sqlpassword, $sqldbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";

        $sql = "INSERT INTO userrecords (Username, Password, AccountType, ZipCode, FirstName, LastName, totalHours)
        VALUES ('$Uusername', '$Upassword', '$UaccountType', '$UzipCode', '$UfirstName', '$UlastName', 0)";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        mysqli_close($conn); 

        setcookie("accounttype", "$UaccountType", 0, "/");
        echo "<script> window.location.replace('AccountDashboardRedirect.php');</script>";
    ?>
</body>
</html>