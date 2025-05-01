<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO student (rollno, name) VALUES (?, ?)");
    $stmt->bind_param("is", $rollno, $name);
    
    if ($stmt->execute()) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>
    <h2>Enter Student Details</h2>
    <form method="POST" action="">
        Roll No: <input type="text" name="rollno" required><br><br>
        Name: <input type="text" name="name" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
