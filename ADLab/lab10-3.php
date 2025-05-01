<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form Validation</title>
</head>
<body>

    <h2>Login Form</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $password = $_POST['password'];

        // Validate Name (Only letters and spaces allowed)
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            echo "<h3 style='color: red;'>Invalid Name! Only letters and spaces are allowed.</h3>";
        } 
        // Validate Password (Minimum 6 characters required)
        elseif (strlen($password) < 6) {
            echo "<h3 style='color: red;'>Password must be at least 6 characters long.</h3>";
        } 
        else {
            echo "<h3 style='color: green;'>Login Successful! Welcome, $name.</h3>";
        }
    }
    ?>

</body>
</html>
