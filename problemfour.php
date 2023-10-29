<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table Generator</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $tableSize = (int)$_POST["tableSize"];
        echo "<h2>Multiplication Table (1 to $tableSize)</h2>";
        echo "<table border='1'>";
        
        // Print table header with column indexes
        echo "<tr><th>x</th>";
        for ($col = 1; $col <= $tableSize; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";

        // Generate the multiplication table
        for ($row = 1; $row <= $tableSize; $row++) {
            echo "<tr>";
            echo "<th>$row</th>"; // Print row index
            for ($col = 1; $col <= $tableSize; $col++) {
                $result = $row * $col;
                echo "<td>$result</td>"; // Print multiplication result
            }
            echo "</tr>";
        }
        
        echo "</table>";
    }
    ?>
    <h1>EECS 348 Lab Seven Practice Four</h1>
    <form action="problemfour.php" method="post">
        <label for="tableSize">Table Size:</label>
        <input type="number" name="tableSize" id="tableSize" min="1">
        <input type="submit" value="Generate Table">
    </form>
</body>
</html>
