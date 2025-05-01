<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Retrieve Student Details</h2>
    <form method="post">
        <button type="submit" name="fetch_students">Show All Students</button>
    </form>

    <?php
    if (isset($_POST['fetch_students'])) {
        // Database connection
        $conn = new mysqli("localhost", "root", "", "school_db");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to fetch all records
        $sql = "SELECT * FROM student";
        $result = $conn->query($sql);

        // Check if records exist
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Roll No</th><th>Name</th><th>Age</th><th>Class</th><th>Marks</th></tr>";

            // Display each record in a row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['rollno']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['class']}</td>
                        <td>{$row['marks']}</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No records found.</p>";
        }

        // Close connection
        $conn->close();
    }
    ?>

</body>
</html>
