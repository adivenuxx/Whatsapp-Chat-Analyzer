<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roll No & Section Selection</title>
</head>
<body>

    <h2>Enter Roll Number & Select Section</h2>
    <form method="post">
        <label for="rollno">Roll No:</label>
        <input type="text" name="rollno" required>
        <br><br>

        <label>Select Section:</label>
        <br>
        <input type="radio" name="section" value="40" required> Section 40
        <br>
        <input type="radio" name="section" value="41"> Section 41
        <br>
        <input type="radio" name="section" value="42"> Section 42
        <br>
        <input type="radio" name="section" value="43"> Section 44
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $rollno = $_POST['rollno'];
        $section = isset($_POST['section']) ? $_POST['section'] : null;

        if (!empty($rollno) && !empty($section)) {
            echo "<h3>Roll No: $rollno</h3>";
            echo "<h3>Selected Section: $section</h3>";
        } else {
            echo "<h3>Please enter a Roll Number and select a Section.</h3>";
        }
    }
    ?>

</body>
</html>
