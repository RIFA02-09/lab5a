<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <?php
    // Define the multiplication function
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'number' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $results;
    }

    // Call the function with a specific multiplier
    $multiplier = 5; // You can change this number to any multiplier you want
    $multiplicationTable = multiplication($multiplier);
    ?>

    <!-- HTML Table to Display the Results -->
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php foreach ($multiplicationTable as $row): ?>
            <tr>
                <td><?php echo $row['number']; ?></td>
                <td><?php echo $row['multiplier']; ?></td>
                <td><?php echo $row['answer']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
