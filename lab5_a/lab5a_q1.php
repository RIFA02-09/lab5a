<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php  
        // Declare variables for personal details
        $name = "TUAN NUR RIFAQIAH BT TUAN HANIZI";
        $matric_number = "AI220040";
        $course = "Bachelor of Computer Science (Software Engineering) with honor";
        $year_of_study = "3rd Year";
        $address = "Lot 1883, Kg Saring, 16800 Pasir Puteh, kelantan";
    ?> 

    <!-- HTML Table to Display the Details -->
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Details</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
