<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Greater Number</title>
</head>
<body>

    <h2>Enter Two Numbers</h2>
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" required>
        <br><br>
        <label for="num2">Number 2:</label>
        <input type="text" name="num2" required>
        <br><br>
        <input type="submit" name="submit" value="Find Greater Number">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Validate if inputs are numbers
        if (is_numeric($num1) && is_numeric($num2)) {
            if ($num1 > $num2) {
                echo "<h3>The greater number is: $num1</h3>";
            } elseif ($num2 > $num1) {
                echo "<h3>The greater number is: $num2</h3>";
            } else {
                echo "<h3>Both numbers are equal.</h3>";
            }
        } else {
            echo "<h3>Please enter valid numbers.</h3>";
        }
    }
    ?>

</body>
</html>
