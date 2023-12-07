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
    <script defer src="signup.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <section class="vh-100 bg-dark">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black bg-dark border-0" style="border-radius: 25px;">
                        <div class="card-body p-md-5" style="color: white;">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Start Volunteering!</p>

                                    <form class="mx-1 mx-md-4">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" placeholder="Create your username..." id="username"
                                                    class="form-control" />
                                                <label class="form-label h6 mt-2" for="username"><em>Username must be between 8-16
                                                    characters.</em></label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="password" placeholder="Create a password..."
                                                    class="form-control" />
                                                <label class="form-label mt-2" for="password">
                                                <hr class="hr" />
                                                    <p class="h6"><em>Your password must:</em></p>
                                                    <p class="mb-0">
                                                        Be between 8-16 characters
                                                    </p>
                                                    <p class="mb-0">
                                                        Have at least one lowercase letter
                                                    </p>
                                                    <p class="mb-0">
                                                        Have at least one uppercase letter
                                                    </p>
                                                    <p class="mb-0">
                                                        Have at least one number
                                                    </p>
                                                    <p class="mb-3">
                                                        Have at least one special character
                                                    </p>
                                                    <hr class="hr" />
                                                </label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="createFName" class="form-control"
                                                    placeholder="Enter your first name..." />
                                                <label class="form-label mt-1" for="createFName"><em><strong>Name (first)</strong></em></label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-3">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="createLName" class="form-control"
                                                    placeholder="Enter your last name..." />
                                                <label class="form-label mt-1" for="createLName"><em><strong>Name (last)</strong></em></label>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-4">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="showPass"
                                                onclick="showPassword()" />
                                            <label class="form-check-label h6" for="showPass">
                                                Show Password
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3">
                                            <button type="button" class="btn btn-primary btn-lg">Continue</button>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a
                                                    href="newSignin.php" class="link-primary">Log In</a></p>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <svg class="img-fluid ms-4" xmlns="http://www.w3.org/2000/svg" width="751.57"
                                        height="539.42" viewBox="0 0 751.57 539.42"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path
                                            d="m19.9,538.23c0,.66.53,1.19,1.19,1.19h729.29c.66,0,1.19-.53,1.19-1.19s-.53-1.19-1.19-1.19H21.09c-.66,0-1.19.53-1.19,1.19Z"
                                            fill="#3f3d58" />
                                        <path
                                            d="m253.43,95.15H19.53c-8.92,0-16.18-7.26-16.18-16.18s7.26-16.18,16.18-16.18h233.9c8.92,0,16.18,7.26,16.18,16.18s-7.26,16.18-16.18,16.18ZM19.53,64.79c-7.82,0-14.18,6.36-14.18,14.18s6.36,14.18,14.18,14.18h233.9c7.82,0,14.18-6.36,14.18-14.18s-6.36-14.18-14.18-14.18H19.53Z"
                                            fill="#e2e3e4" />
                                        <path
                                            d="m253.43,284.5H19.53c-8.65,0-15.68-7.03-15.68-15.68s7.03-15.68,15.68-15.68h233.9c8.65,0,15.68,7.03,15.68,15.68s-7.03,15.68-15.68,15.68Z"
                                            fill="#6c63ff" />
                                        <path
                                            d="m176.78,31.36H15.68C7.03,31.36,0,24.33,0,15.68S7.03,0,15.68,0h161.1c8.65,0,15.68,7.03,15.68,15.68s-7.03,15.68-15.68,15.68Z"
                                            fill="#e2e3e4" />
                                        <path
                                            d="m253.43,158.43H19.53c-8.92,0-16.18-7.26-16.18-16.18s7.26-16.18,16.18-16.18h233.9c8.92,0,16.18,7.26,16.18,16.18s-7.26,16.18-16.18,16.18Zm-233.9-30.36c-7.82,0-14.18,6.36-14.18,14.18s6.36,14.18,14.18,14.18h233.9c7.82,0,14.18-6.36,14.18-14.18s-6.36-14.18-14.18-14.18H19.53Z"
                                            fill="#e2e3e4" />
                                        <path
                                            d="m253.43,221.72H19.53c-8.92,0-16.18-7.26-16.18-16.18s7.26-16.18,16.18-16.18h233.9c8.92,0,16.18,7.26,16.18,16.18s-7.26,16.18-16.18,16.18Zm-233.9-30.36c-7.82,0-14.18,6.36-14.18,14.18s6.36,14.18,14.18,14.18h233.9c7.82,0,14.18-6.36,14.18-14.18s-6.36-14.18-14.18-14.18H19.53Z"
                                            fill="#e2e3e4" />
                                        <path
                                            d="m11.49,51.17h61.3c1.46,0,2.65,1.18,2.65,2.65h0c0,1.46-1.19,2.65-2.65,2.65H11.49c-1.46,0-2.65-1.18-2.65-2.65h0c0-1.46,1.19-2.65,2.65-2.65Z"
                                            fill="#e2e3e4" />
                                        <path
                                            d="m11.49,115.95h61.3c1.46,0,2.65,1.18,2.65,2.64h0c0,1.46-1.19,2.65-2.65,2.65H11.49c-1.46,0-2.65-1.18-2.65-2.64h0c0-1.46,1.19-2.65,2.65-2.65Z"
                                            fill="#e2e3e4" />
                                        <path
                                            d="m11.49,180.74h61.3c1.46,0,2.65,1.18,2.65,2.65h0c0,1.46-1.19,2.64-2.65,2.64H11.49c-1.46,0-2.65-1.18-2.65-2.65h0c0-1.46,1.19-2.64,2.65-2.64Z"
                                            fill="#e2e3e4" />
                                        <g>
                                            <polygon
                                                points="447.08 132.26 424.72 139.62 424.72 107.43 445.01 107.43 447.08 132.26"
                                                fill="#9f616a" />
                                            <circle cx="427.49" cy="94.06" r="22.28" fill="#9f616a" />
                                            <path
                                                d="m433.61,91.85c-3.73-.11-6.18-3.88-7.63-7.32s-2.94-7.39-6.4-8.81c-2.83-1.16-7.82,6.69-10.05,4.6-2.33-2.18-.06-13.37,2.41-15.38,2.47-2.01,5.85-2.4,9.03-2.55,7.76-.36,15.57.27,23.18,1.86,4.71.98,9.55,2.46,12.95,5.86,4.3,4.32,5.4,10.83,5.71,16.92.32,6.23-.04,12.75-3.07,18.2s-9.37,9.47-15.45,8.08c-.61-3.3.01-6.69.25-10.05.23-3.35-.01-6.97-2.06-9.64-2.04-2.67-6.42-3.73-8.8-1.36"
                                                fill="#2f2e43" />
                                            <path
                                                d="m461.02,99.57c2.23-1.63,4.9-3,7.64-2.66,2.96.36,5.47,2.8,6.23,5.69s-.09,6.07-1.93,8.43c-1.83,2.36-4.56,3.92-7.44,4.7-1.67.45-3.5.64-5.09-.04-2.34-1.01-3.61-4-2.69-6.38"
                                                fill="#2f2e43" />
                                            <g>
                                                <path id="uuid-00bc58e7-734f-4d7c-a085-03c0cd267642-104"
                                                    d="m375.76,309.2c-1.49,7.32,1.24,14.01,6.08,14.94s9.97-4.26,11.45-11.58c.63-2.92.53-5.94-.29-8.82l18.43-114.75-23.05-4.34-8.9,116.5c-1.89,2.36-3.16,5.12-3.72,8.06h0Z"
                                                    fill="#9f616a" />
                                                <path
                                                    d="m424.48,124.85h-15.73c-11.12,1.69-14.14,7.62-16.67,18.58-3.86,16.72-8.79,38.98-7.81,39.31,1.57.52,28.35,13.12,42,10.24l-1.79-68.13h0Z"
                                                    fill="#e2e3e4" />
                                            </g>
                                            <rect x="418.75" y="490.36" width="20.94" height="29.71" fill="#9f616a" />
                                            <path
                                                d="m398.36,538.05c-2.2,0-4.16-.05-5.64-.19-5.56-.51-10.87-4.62-13.54-7.02-1.2-1.08-1.58-2.8-.96-4.28h0c.45-1.06,1.34-1.86,2.45-2.17l14.7-4.2,23.8-16.06.27.48c.1.18,2.44,4.39,3.22,7.23.3,1.08.22,1.98-.23,2.68-.31.48-.75.76-1.1.92.43.45,1.78,1.37,5.94,2.03,6.07.96,7.35-5.33,7.4-5.59l.04-.21.18-.12c2.89-1.86,4.67-2.71,5.28-2.53.38.11,1.02.31,2.75,17.44.17.54,1.38,4.48.56,8.25-.89,4.1-18.81,2.69-22.4,2.37-.1.01-13.52.97-22.71.97h0Z"
                                                fill="#2f2e43" />
                                            <rect x="487.82" y="470.31" width="20.94" height="29.71"
                                                transform="translate(-181.25 337.18) rotate(-31.95)" fill="#9f616a" />
                                            <path
                                                d="m475.72,533.98c-2.46,0-4.72-.3-6.33-.58-1.58-.28-2.82-1.54-3.08-3.12h0c-.18-1.14.15-2.29.93-3.14l10.25-11.34,11.7-26.22.48.26c.18.1,4.39,2.43,6.56,4.43.83.76,1.24,1.57,1.22,2.4-.01.58-.23,1.04-.45,1.37.6.16,2.23.22,6.11-1.42,5.66-2.39,3.42-8.41,3.32-8.66l-.08-.2.09-.19c1.47-3.11,2.52-4.77,3.14-4.94.39-.11,1.03-.28,11.56,13.35.43.36,3.54,3.07,4.84,6.7,1.41,3.95-14.54,12.24-17.75,13.86-.1.08-16.79,12.21-23.65,15.66-2.72,1.37-5.94,1.79-8.87,1.79h0Z"
                                                fill="#2f2e43" />
                                            <path
                                                d="m455.11,241.91h-58.63l-5.32,54.54,23.28,201.52h29.93l-11.97-116.39,48.55,105.08,26.6-18.62-37.91-98.1s13.54-85.46,2.9-106.75c-10.64-21.28-17.43-21.28-17.43-21.28h0Z"
                                                fill="#2f2e43" />
                                            <polygon
                                                points="484.28 245.23 391.16 245.23 419.1 124.85 459.67 124.85 484.28 245.23"
                                                fill="#e2e3e4" />
                                            <path id="uuid-ece83039-1aa0-468e-a846-e0cb6ecd6032-105"
                                                d="m492.66,309.2c1.49,7.32-1.24,14.01-6.08,14.94s-9.97-4.26-11.45-11.58c-.63-2.92-.53-5.94.29-8.82l-18.43-114.75,23.05-4.34,8.9,116.5c1.89,2.36,3.16,5.12,3.72,8.06h0Z"
                                                fill="#9f616a" />
                                            <path
                                                d="m443.94,124.85h15.73c11.12,1.69,14.14,7.62,16.67,18.58,3.86,16.72,8.79,38.98,7.81,39.31-1.57.52-28.35,13.12-42,10.24l1.79-68.13h0Z"
                                                fill="#e2e3e4" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>