<!DOCTYPE html>
<html lang="en">
<script>
    function StandardToAMPM(input){
        var inputTime = input.toString();
        var outputTime = "";
        var hours = Number(inputTime.charAt(0) + inputTime.charAt(1));
        var minutes = inputTime.charAt(3) + inputTime.charAt(4);
        var ampm = "";

        if(hours > 12){
            ampm = "PM";
            hours -= 12;
        }else if(hours == 12){
            ampm = "PM";
        }else if(hours == 0){
            ampm = "AM";
            hours = 12;
        }else{
            ampm = "AM";
        }

        outputTime = hours.toString() + ":" + minutes + ampm;
        return outputTime;
    }
    function setLink(cell, username) {
        cell.innerHTML = `<button onclick='removeVolunteer("${username}")' class='btn btn-danger'>Remove</button>`;
    }

    function removeVolunteer(username) {
        if (confirm('Are you sure you would like to remove this volunteer?')) {
            document.cookie = `removeVolunteer = ${username}; path=/;`;
            window.location.replace('RemoveVolunteer.php');
        }
    }

    function signup() {
        window.location.replace('TaskSignupRedirect.php');
    }

    function markComplete() {
        if (confirm('Are you sure you want to mark this task as completed?')) {
            window.location.replace('markTaskComplete.php');
        }
    }

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = document.cookie;
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
</script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        $sqlservername = "localhost";
        $sqlusername = "root";
        $sqlpassword = "";
        $sqldbname = "disabilitymatch";

        $taskId = $_COOKIE["taskId"];

        $conn = mysqli_connect($sqlservername, $sqlusername, $sqlpassword, $sqldbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM taskrecords WHERE taskID = '$taskId'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);

        mysqli_close($conn);

        $taskName = $row[1];
        echo $taskName;
        ?>
    </title>
    <link rel="icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Wheelchair_symbol.svg/898px-Wheelchair_symbol.svg.png">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="date.js" type="text/javascript"></script>
    <script defer src="TaskPage.js"></script>
    <style>
        .feature-icon {
            width: 4rem;
            height: 4rem;
            border-radius: .75rem;
        }

        .icon-square {
            width: 3rem;
            height: 3rem;
            border-radius: .75rem;
        }

        .text-shadow-1 {
            text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25);
        }

        .text-shadow-2 {
            text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25);
        }

        .text-shadow-3 {
            text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25);
        }

        .card-cover {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .feature-icon-small {
            width: 3rem;
            height: 3rem;
        }

        #signupButton[disabled] {
            pointer-events: auto;
        }

        #markCompleteButton[disabled] {
            pointer-events: auto;
        }
    </style>
</head>

<body class="text-bg-dark">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="home" viewBox="0 0 16 16">
            <path
                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd"
                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path
                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="collection" viewBox="0 0 16 16">
            <path
                d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
        </symbol>
        <symbol id="calendar3" viewBox="0 0 16 16">
            <path
                d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
            <path
                d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
        </symbol>
        <symbol id="cpu-fill" viewBox="0 0 16 16">
            <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
            <path
                d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z" />
        </symbol>
        <symbol id="gear-fill" viewBox="0 0 16 16">
            <path
                d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
        </symbol>
        <symbol id="speedometer" viewBox="0 0 16 16">
            <path
                d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd"
                d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
        </symbol>
        <symbol id="toggles2" viewBox="0 0 16 16">
            <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
            <path
                d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z" />
            <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
        </symbol>
        <symbol id="tools" viewBox="0 0 16 16">
            <path
                d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
        </symbol>
        <symbol id="chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </symbol>
        <symbol id="geo-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
        </symbol>
        <symbol id="clock" viewBox="0 0 16 16">
            <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9z" />
            <path
                d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5M13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1" />
        </symbol>
        <symbol id="endhourglass" viewBox="0 0 16 16">
            <path
                d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5m2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2z" />
        </symbol>
        <symbol id="address" viewBox="0 0 16 16">
            <path
                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
        </symbol>
        <symbol id="ziplocation" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z" />
        </symbol>
    </svg>
    <div class="container-fluid text-bg-dark fixed-top border-bottom border-secondary">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-0">
            <a href="HelperAccountDashboard.php"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4 text-white"><strong>Volunteer Connect</strong></span>
            </a>

            <ul class="nav nav-pills">
                <?php 
                    if($_COOKIE["accounttype"] == "Helper"){
                        echo '<li class="nav-item"><a href="FindTask.php" class="nav-link active" aria-current="page">Find Task</a></li>';
                    }else{
                        echo '<li class="nav-item"><a href="CreateTask.php" class="nav-link active" aria-current="page">Create Task</a></li>';
                    }
                ?>
                <!--<li class="nav-item"><a href="FindTask.php" class="nav-link active" aria-current="page">Find Task</a></li>-->
                <li class="nav-item"><a href="#" class="nav-link" id="logoutLink">Log Out</a></li>
            </ul>
        </header>
    </div>
    <div class="container px-4 py-5 mt-5">
        <h2 class="pb-2">Task Information:</h2>
        <hr>
        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="col d-flex flex-column align-items-start gap-2">
                <h2 class="fw-bold text-body-emphasis" id="taskNameText">Task Title</h2>
                <h4 class="text-body-secondary" id="usernameText">Paragraph of text beneath the heading to
                    explain the heading.</h4>
                <div class="text-wrap">
                    <p class="text-body-secondary" id="taskDescriptionText">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Commodi in incidunt sit asperiores fugit. Maiores accusantium nostrum
                        repudiandae
                        possimus cupiditate ut perspiciatis rerum consequuntur, molestias laudantium optio quasi
                        similique
                        sunt numquam eligendi suscipit, sed quae vel? Sed iure ipsum a?</p>
                </div>
                <button class="btn btn-primary btn-lg" id="signupButton" onclick="signup()">Sign Me Up!</button>
                <button class="btn btn-primary btn-lg" id="markCompleteButton" onclick="markComplete()" title="">Mark As
                    Complete</button><br /><br />
            </div>

            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#calendar3" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Task Date:</h4>
                        <p class="text-body-secondary" id="dateText">Paragraph of text beneath the heading to explain
                            the heading.</p>
                    </div>
                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#clock" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Task Start Time:</h4>
                        <p class="text-body-secondary" id="startTime">Paragraph of text beneath the heading to explain
                            the heading.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#endhourglass" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Task End Time:</h4>
                        <p class="text-body-secondary" id="endTime">Paragraph of text beneath the heading to explain the
                            heading.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#people-circle" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Slots Filled:</h4>
                        <p class="text-body-secondary" id="slotsText">Paragraph of text beneath the heading to explain
                            the heading.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#address" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Address</h4>
                        <p class="text-body-secondary" id="taskAddressText">Paragraph of text beneath the heading to
                            explain the heading.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#ziplocation" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Zip Code</h4>
                        <p class="text-body-secondary" id="taskZipCodeText">Paragraph of text beneath the heading to
                            explain the heading.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="container" style="padding-bottom: 50px;">
        <table id="taskTable" class="table table-dark table-striped">
            <tbody id="taskTableBody">
                <tr>
                    <th class="h4">Volunteers:</th>
                    <th class="h4">Options:</th>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <div id="emptyMessage" style="">
            <p id="emptyText" class="h1 text-danger" style="margin-left: 10px;">No volunteers have signed up for this opportunity yet.</p>
        </div>
    </div>

    <?php
    $sqlservername = "localhost";
    $sqlusername = "root";
    $sqlpassword = "";
    $sqldbname = "disabilitymatch";

    $taskId = $_COOKIE["taskId"];

    $conn = mysqli_connect($sqlservername, $sqlusername, $sqlpassword, $sqldbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $Uusername = $_COOKIE['username'];

    $query = "SELECT * FROM taskrecords WHERE taskID = '$taskId'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    $creatorId = $row[3];
    $query = "SELECT Username FROM userrecords WHERE userID = '$creatorId'";
    $result = mysqli_query($conn, $query);
    $userRow = mysqli_fetch_array($result);
    $creatorUsername = $userRow[0];

    $date = $row[4];
    $startTime = $row[5];
    $endTime = $row[6];
    $maxSlots = $row[8];
    $slotsFilled = $row[9];
    $taskName = $row[1];
    $taskDescription = $row[2];
    $address = $row[10];
    $zipCode = $row[11];
    $status = $row[7];

    echo "<script>
            var dateText = document.getElementById('dateText');
            var startTime = document.getElementById('startTime');
            var endTime = document.getElementById('endTime');
            var slotsText = document.getElementById('slotsText');
            var taskNameText = document.getElementById('taskNameText');
            var taskDescriptionText = document.getElementById('taskDescriptionText');
            var addressText = document.getElementById('taskAddressText');
            var zipCodeText = document.getElementById('taskZipCodeText');
            var usernameText = document.getElementById('usernameText');

            var str1 = Date.parse('$date').toString('M/d/yy');
            var str2 = StandardToAMPM('$startTime');
            var str3 = StandardToAMPM('$endTime');
            var str4 = '$slotsFilled' + '/' + '$maxSlots';
            var str5 = '$taskName';
            var str6 = '$taskDescription';
            var str7 = '$address';
            var str8 = '$zipCode';
            var str9 = 'Opportunity Provided By: ' + '$creatorUsername';

            dateText.innerText = str1;
            startTime.innerHTML = str2;
            endTime.innerHTML = str3;
            slotsText.innerHTML = str4;
            taskNameText.innerText = str5;
            taskDescriptionText.innerText = str6;
            addressText.innerText = str7;
            zipCodeText.innerText = str8;
            usernameText.innerText = str9;
        </script>";

    if ($status != "Upcoming") {
        echo "<script>
                var signupButton = document.getElementById('signupButton');
                var markCompleteButton = document.getElementById('markCompleteButton');
                signupButton.disabled=true;
                markCompleteButton.disabled=true;
                signupButton.title = 'This task is already complete!';
                markCompleteButton.title = 'This task is already complete!';
            </script>";
    }

    if($slotsFilled == $maxSlots){
        echo "<script>
                var signupButton = document.getElementById('signupButton');
                signupButton.disabled=true;
                signupButton.title = 'This task is already full!';
            </script>";
    }

    $isCreator = false;
    if ($creatorUsername == $_COOKIE['username']) {
        $isCreator = true;
        echo "<script>
                var signupButton = document.getElementById('signupButton');
                var markCompleteButton = document.getElementById('markCompleteButton');
                signupButton.disabled=true;
                signupButton.title = 'You are not a volunteer!';
                markCompleteButton.disabled=false;
            </script>";
    } else {
        echo "<script>
                var signupButton = document.getElementById('signupButton');
                var markCompleteButton = document.getElementById('markCompleteButton');
                //signupButton.disabled = false;
                markCompleteButton.style.display = 'none';
            </script>";
    }

    $query = "SELECT u.Username FROM userrecords u INNER JOIN taskuserxref xref ON u.UserID = xref.UserID 
        INNER JOIN taskrecords t ON t.TaskID = xref.TaskID WHERE t.TaskID = '$taskId'";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = $result->fetch_row()) {
        $rows[] = $row;
    }

    for ($i = 0; $i < count($rows); $i++) {
        $currentUsername = $rows[$i][0];

        echo "<script>
                var tableBody = document.getElementById('taskTableBody');

                var row = tableBody.insertRow(1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);

                cell1.innerText = '$currentUsername';
                if('$isCreator'){
                    //cell2.innerHTML = `<button onclick='removeVolunteer();' class='volenteer-Remove-button'>Remove</button>`;
                    setLink(cell2, '$currentUsername');
                }else{
                    cell2.innerHTML = `<p class='no-options-text'>N/A</p>`;
                }
            </script>";
    }

    echo "<script>
            var tableBody = document.getElementById('taskTableBody');

            if(tableBody.rows.length == 1){
                document.getElementById('taskTable').style.display='none'; 
                document.getElementById('emptyMessage').style.display='block';
            }else{
                document.getElementById('taskTable').style.display='table'; 
                document.getElementById('emptyMessage').style.display='none';
            }
        </script>";

    $query = "SELECT UserID FROM userrecords WHERE Username = '$Uusername'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $userId = $row[0];

    $query = "SELECT * FROM taskuserxref WHERE UserID = '$userId' AND TaskID = '$taskId'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    mysqli_close($conn);

    if ($row != null) {
        echo "<script>
        var signupButton = document.getElementById('signupButton');
        document.getElementById('signupButton').disabled = true;
        signupButton.title = 'You have already signed up for this task!';
        </script>";
    }
    ?>
</body>
</html>