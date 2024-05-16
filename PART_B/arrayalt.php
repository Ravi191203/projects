<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Enter the size:
        <input type="number" name="s" required><br>
        Enter the elements separated by commas:
        <input type="text" name="e" required><br>
        Enter the element to insert:
        <input type="number" name="i" required><br>
        Enter the position:
        <input type="number" name="p" required><br>
        <br>
        <input type="submit" name="submit">
    </form> 
    <?php
    function insert($a, $e, $p) {
        if ($p < 0 || $p > count($a)) {
            return "Invalid choice";
        }
        array_splice($a, $p, 0, $e);
        return $a;
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $s = $_POST['s'];
        $e = explode(",", $_POST['e']);
        $i = $_POST['i'];
        $p = $_POST['p'];
        if ($s != count($e)) {
            echo "The number of elements does not match the specified size.";
        } else {
            $r = insert($e, $i, $p);
            print_r($r);
        }
    }
    ?>
</body>
</html>