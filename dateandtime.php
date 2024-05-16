<!DOCTYPE html>
<html>

<head>
    <title>Date and Time Functionality</title>
</head>

<body>
    <h2>Date and Time Functionality</h2>
    <?php
    // Set default timezone
    date_default_timezone_set('Asia/kolkata');
    // Get current date and time
    $currentDateTime = date('Y-m-d H:i:s') . "<br>";
    // Display current date and time
    echo "Current Date and Time: " . $currentDateTime;
    // Display current year
    echo "The Current Year: " . date("Y") . "<br>";
    // Display current Month
    echo "The Current Month: " . date("F") . "<br>";
    // Display current Day of the week
    echo "The Current Day of the week: " . date("l") . "<br>";
    // Display current time in 12-hours format
    echo "The Current time in 12-hours format: " . date("h:i:s A") . "<br>";
    // Display current timestamp
    echo "The Current timestamp is: " . time() . "<br>";
    // Adding or subtracting time
    $futureDate = strtotime("+1 week");
    echo "Future one week Date: " . date("Y-m-d", $futureDate) . "<br>";
    $pastDate = strtotime("-1 month");
    echo "Past one month before Date: " . date("Y-m-d", $pastDate) . "<br>";
    ?>
</body>

</html>