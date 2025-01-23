<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For-loop-table</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <?php
        
        for($row = 1; $row <= 5; $row++){
            echo "<tr>";
            for($col = 1; $col <= 4; $col++){
                echo "<td>" . $row * $col . "</td>";
            }
            echo "</tr>";
        }

        
        ?>
    </table>
</body>
</html>