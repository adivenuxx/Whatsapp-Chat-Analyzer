<!DOCTYPE html>
<html>
<head>
    <title>Sort Numbers</title>
</head>
<body>
    <h2>Sorted List of Numbers</h2>
    <?php
        function sortArray($arr) {
            $n = count($arr);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }
            return $arr;
        }
        
        $numbers = array(45, 12, 89, 33, 67, 25, 78, 10);
        echo "Original List: " . implode(", ", $numbers) . "<br>";
        
        $sortedNumbers = sortArray($numbers);
        echo "Sorted List: " . implode(", ", $sortedNumbers) . "<br>";
    ?>
</body>
</html>