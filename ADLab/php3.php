<!DOCTYPE html>
<html>
<head>
    <title>Average Calculator</title>
</head>
<body>
    <h2>Average of Ten Numbers</h2>
    <?php
        $numbers = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100); 
        $sum = 0;
        $count = count($numbers);
        
        foreach ($numbers as $num) {
            $sum += $num;
        }
        
        $average = $sum / $count;
        
        echo "Numbers: " . implode(", ", $numbers) . "<br>";
        echo "Average: " . $average . "<br>";
    ?>
</body>
</html>
