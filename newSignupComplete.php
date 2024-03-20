<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Volunteer Connect</title>
    <link rel="icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Wheelchair_symbol.svg/898px-Wheelchair_symbol.svg.png">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

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

    $Uusername = $_COOKIE["username"];
    
    $query = "SELECT * FROM userrecords WHERE username = '$Uusername'";
    $queryResult = mysqli_query($conn, $query);
    $result = mysqli_fetch_array($queryResult);

    if($result != null){
        mysqli_close($conn); 
            
        setcookie("usernametaken", "yes", time() + (86400 * 30), "/");
        setcookie("username", "yes", time() - (86400 * 30), "/");
        setcookie("password", "yes", time() - (86400 * 30), "/");
        echo "<script> window.location.replace('newSignup.php');</script>";
    }else{
        mysqli_close($conn);
    }

?>

<body>
    <section class="vh-100 bg-dark text-white">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card card-registration bg-dark p-2" style="border-radius: 15px; border: 2px solid white;">
                        <div class="card-body p-4 p-md-5 bg-dark border: none;">
                            <h1 class="mb-4 pb-2 pb-md-0">Almost There!</h1>
                            <h5 class="pb-2 pb-md-0">We just need a little more information to get you started...</h5>
                            <p class="mb-md-4"><small>Note: you can always change your account type at a later date if needed.</small></p>
                            <form method="post" action="SignUpRedirect.php">

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="firstName" class="form-control form-control-lg" name="firstName" placeholder="Enter your first name..."/>
                                            <label class="form-label h6 mt-2" for="firstName">First Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control form-control-lg" name="lastName" placeholder="Enter your last name..."/>
                                            <label class="form-label h6 mt-2" for="lastName">Last Name</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <input type="text" class="form-control form-control-lg" id="zipCode" name="zipCode" placeholder="Enter your zip code..."/>
                                            <label for="zipCode" class="form-label h6 mt-2">Zip Code</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Account Type: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="accountType"
                                                id="helperButton" value="Helper" />
                                            <label class="form-check-label" for="helperButton">Helper</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="accountType"
                                                id="seekerButton" value="Seeker" />
                                            <label class="form-check-label" for="seekerButton">Seeker</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Register" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>