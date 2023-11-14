<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Create New Task</title>
</head>

<body>
    <div class="background-container" style="height: 140vh;">
        <div class="bgc2" style="height: 140vh;">
            <form method="post" action="CreateTaskRedirect.php" style="margin-top: 10vh;">
                <div>
                    <h3 id="scUsername">Welcome, <em>
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
                    <input id="date" type="date" name="date" autocomplete="on" placeholder="Date of the Task..." style="width: 93.5%; padding: 10px; border-radius: 5px; border: none;"/>

                    <p>Task Start Time:</p>
                    <input id="time" type="time" name="startTime" autocomplete="on"
                        placeholder="When the task starts..." style="width: 93.5%; padding: 10px; border-radius: 5px; border: none;" />

                    <p>Task End Time:</p>
                    <input id="time" type="time" name="endTime" autocomplete="on" placeholder="When the task ends..." style="width: 93.5%; padding: 10px; border-radius: 5px; border: none;" />

                    <p>Slots Available</p>
                    <input type="number" name="maxSlots" step="1" min="1" style="width: 93.5%; padding: 10px; border-radius: 5px; border: none;"></input>

                    <p>Address (Street, city, state):</p>
                    <input id="taskAddress" type="text" name="taskAddress" autocomplete="on"
                        placeholder="Street address..." style="width: 100%; padding: 10px; border-radius: 5px; border: none;"/>

                    <p>Zip Code:</p>
                    <input id="taskZipCode" type="number" name="taskZipCode" autocomplete="on" style="width: 93.5%; padding: 10px; border-radius: 5px; border: none;"/>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>