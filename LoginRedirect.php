<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $sqlservername = "localhost";
    $sqlusername = "root";
    $sqlpassword = "";
    $sqldbname = "disabilitymatch";

    $Uusername = $_POST["username"];
    $UPassword = $_POST["password"];

    echo "The username received from the form was: $Uusername";
    echo "The password received from the form was: $UPassword";

    $conn = mysqli_connect($sqlservername, $sqlusername, $sqlpassword, $sqldbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM userrecords WHERE username = '$Uusername'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $associatedPassword = $row[2];
    $UAccountType = $row[3];
    mysqli_close($conn); 

    if($associatedPassword == $UPassword){
        setcookie("username", "$Uusername", 0, "/");
        setcookie("password", "$UPassword", 0, "/");
        setcookie("accounttype", "$UAccountType", 0, "/");
        setcookie("tableMode", "Upcoming", 0, "/");

        echo "<script>window.location.replace('AccountDashboardRedirect.php'); </script>";
    }else{
        echo "<script>document.cookie = 'loginerror=true; path=/'; window.location.replace('newSignin.php');</script>";
    }
    ?>
</body>
</html>


