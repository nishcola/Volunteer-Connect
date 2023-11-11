<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Create New Task</title>
</head>

<body>
    <div class="background-container">
        <div class="bgc2">
            <form method="post" action="CreateTaskRedirect.php">
                <div>
                    <h3 id="scUsername"><em>
                            <?php $username = 'username';
                            echo $_COOKIE[$username]; ?>
                        </em></h3>
                    <h2>Create New Task</h2>
                </div>
                <div>
                    <p>Task Name:</p>
                    <input id="taskName" type="text" name="taskName" autocomplete="on"
                        placeholder="Type the name of your task..." />

                    <p>Task Description:</p>
                    <input id="taskDescription" type="text" name="taskDescription" autocomplete="on"
                        placeholder="Type the description of your task..." />
                </div>
                <div>
                    <p>Date of Task</p>
                    <input id="date" type="date" name="date" autocomplete="on" placeholder="Date of the Task..." />

                    <p>Task Start Time:</p>
                    <input id="time" type="time" name="startTime" autocomplete="on"
                        placeholder="When the task starts..." />

                    <p>Task End Time:</p>
                    <input id="time" type="time" name="endTime" autocomplete="on" placeholder="When the task ends..." />

                    <p>Slots Available</p>
                    <input type="number" name="maxSlots" step="1" min="1"></input>

                    <p>Address:</p>
                    <input id="taskAddress" type="text" name="taskAddress" autocomplete="on"
                        placeholder="Street address..." />

                    <p>Zip Code:</p>
                    <input id="taskZipCode" type="number" name="taskZipCode" autocomplete="on"/>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>