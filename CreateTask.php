<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <link rel="icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Wheelchair_symbol.svg/898px-Wheelchair_symbol.svg.png">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Create New Task</title>
</head>

<body class="text-bg-dark">
    <div class="container-fluid text-bg-dark fixed-top">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-0">
            <a href="HelperAccountDashboard.php"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4 text-white"><strong>Volunteer Connect</strong></span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="FindTask.php" class="nav-link active" aria-current="page">Find Task</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link" id="logoutLink">Log Out</a></li>
            </ul>
        </header>
    </div>
    <div class="container mt-5">
        <div class="py-5 text-center">
            <h2><u>Create Task</u></h2>
        </div>
        <main class="d-flex justify-content-center">
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Task Information:</h4>
                <form method="post" action="CreateTaskRedirect.php">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="taskName" class="form-label">Task Name</label>
                            <input type="text" class="form-control" id="taskName" name="taskName"
                                placeholder="Give your task a name..." value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="date" class="form-label">Task Date</label>
                            <input type="date" class="form-control" name="date" id="date" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="taskDescription" class="form-label">Task Description</label>
                            <div class="input-group has-validation">
                                <textarea id="taskDescription" type="text" name="taskDescription" class="form-control"
                                    placeholder="Type a short description explaining your task..." required></textarea>
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="taskAddress" class="form-label">Address <span class="text-white"><em>(street,
                                        city,
                                        state)</em></span></label>
                            <input id="taskAddress" type="text" name="taskAddress" class="form-control"
                                placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="taskZipCode" class="form-label">Zip Code</label>
                            <input id="taskZipCode" type="number" name="taskZipCode" class="form-control" placeholder=""
                                required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="time" class="form-label">Start Time</label>
                            <input id="time" type="time" name="startTime" class="form-select" required></input>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="time" class="form-label">End Time</label>
                            <input id="time" type="time" name="endTime" class="form-select" required></input>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="slotsAvailable" class="form-label">Slots Available</label>
                            <input id="slotsAvailable" type="number" name="maxSlots" step="1" min="1"
                                class="form-select" required></input>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Create Task</button>
                </form>
            </div>
    </div>
    </main>
    </div>
</body>

</html>