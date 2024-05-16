<!DOCTYPE html>
<html>

<head>
    <title>Check Prime Number</title>
</head>

<body>
    <h2>Check if a Number is Prime</h2>
    <form method="post" action="">
        Enter a number: <input type="text" name="number">
        <input type="submit" name="submit" value="Check">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        function isPrime($number)
        {
            if ($number <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        if (isPrime($number)) {
            echo "$number is a prime number.";
        } else {
            echo "$number is not a prime number.";
        }
    }
    ?>
</body>

</html>