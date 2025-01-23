<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop List</title>
</head>
<body>
    <ul>
        <?php
        $number = 1;
        while($number <= 10){
            echo "<li>" . $number . "</li>";
            $number++;
        }
        ?>
    </ul>
</body>
</html>