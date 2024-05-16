<!DOCTYPE html>
<html>

<head>
    <title>String Functions Demo</title>
</head>

<body>
    <h2>String Functions Demo</h2>
    <form action="" method="post">
        <label for="string1">Enter the first string:</label>
        <input type="text" id="string1" name="string1" required><br>
        <label for="string2">Enter the second string:</label>
        <input type="text" id="string2" name="string2" required><br>
        <br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string1 = $_POST["string1"];
        $string2 = $_POST["string2"];
        // 1. String Length
        echo "<p>1. Length of the string1: " . strlen($string1) . "</p>";
        echo "<p>1. Length of the string2: " . strlen($string2) . "</p>";
        // 2. Convert to Lowercase
        echo "<p>2. Convert to Lowercase string1: " . strtolower($string1) .
            "</p>";
        echo "<p>2. Convert to Lowercase string2:" . strtolower($string2) .
            "</p>";
        // 3. Convert to Uppercase
        echo "<p>3. Convert to uppercase string1: " . strtoupper($string1) .
            "</p>";
        echo "<p>3. Convert to uppercase string2: " . strtoupper($string2) .
            "</p>";
        // 4. Trim leading and trailing whitespace
        echo "<p>4. Trimmed(to remove whitespace) string1: " . trim($string1)
            . "</p>";
        echo "<p>4. Trimmed(to remove whitespace) string2: " . trim($string2)
            . "</p>";
        // 5. Reverse String
        echo "<p>5. Reversed the String1: " . strrev($string1) . "</p>";
        echo "<p>5. Reversed the String2: " . strrev($string2) . "</p>";
        // 6. Explode String
        $words_array = explode(" ", $string1);
        echo "<p>6. Explode(split a string into an array of substrings ) 
String1: " . implode(", ", $words_array) . "</p>";
        $words_array = explode(" ", $string2);
        echo "<p>6. Explode(split a string into an array of substrings ) 
String2: " . implode(", ", $words_array) . "</p>";
        // 7. Word Count
        echo "<p>7. To count the word in string1: " . str_word_count($string1)
            . "</p>";
        echo "<p>7. To count the word in string2: " . str_word_count($string2)
            . "</p>";
        $result = strcmp($string1, $string2);
        if ($result < 0) {
            echo "<p>The string '$string1' is less than '$string2'.</p>";
        } elseif ($result > 0) {
            echo "<p>The string '$string1' is greater than '$string2'.</p>";
        } else {
            echo "<p>The strings '$string1' and '$string2' are equal.</p>";
        }
    }
    ?>
</body>

</html>