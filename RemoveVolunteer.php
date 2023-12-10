<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changing volunteer status...</title>
    <link rel="icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Wheelchair_symbol.svg/898px-Wheelchair_symbol.svg.png">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="spinner-border text-danger" role="status" id="spinner"></div>
        <span class="text-danger" style="margin-left: 15px; font-size: 20px;" id="text">Removing Volunteer...</span>
    </div>
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

$sql = "DELETE FROM taskuserxref WHERE userID = '$userId'";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);

echo "

<script>
setTimeout(function(){
    window.location.replace('TaskPage.php');
}, 3000);
setTimeout(function () {
    var spinner = document.getElementById('spinner');
    var text = document.getElementById('text');
    spinner.classList.remove('spinner-border');
    spinner.innerHTML += `
        <svg xmlns='http://www.w3.org/2000/svg' width='35' height='35' fill='#198754' class='bi bi-check-circle-fill' viewBox='0 0 16 16'>
            <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
        </svg>
    `;
    text.classList.remove('text-danger');
    text.classList.add('text-success');
    text.innerHTML = 'Success!';
}, 1000);
</script>

";
?>

</html>