<!DOCTYPE html>
<html>
<head>
    <title>Grade Evaluator</title>
</head>
<body>
    <h2>Student Grade</h2>
    <?php
        $marks = 85; 
        
        if ($marks >= 90 && $marks <= 100) {
            $grade = "O";
        } elseif ($marks >= 80) {
            $grade = "E";
        } elseif ($marks >= 70) {
            $grade = "A";
        } elseif ($marks >= 60) {
            $grade = "B";
        } elseif ($marks >= 50) {
            $grade = "C";
        } elseif ($marks >= 40) {
            $grade = "D";
        } elseif ($marks >= 0 && $marks < 40) { // Fixed syntax issue here
            $grade = "F";
        } else { // Properly closing else block
            $grade = "Put the correct marks";
        }
        
        echo "Marks: " . $marks . "<br>";
        echo "Grade: " . $grade . "<br>";
    ?>
</body>
</html>
