<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math FUnctions</title>
</head>
<body>
    Variable: <?php echo $var1 = 4.55; ?><br>
   Round: <?php echo round($var1); ?><br>
   Round (1 decimal): <?php echo round($var1, 1); ?><br>
   Ceiling: <?php echo ceil($var1); ?><br>
   Floor: <?php echo floor($var1); ?><br>
   Square root: <?php echo sqrt($var1); ?><br>
   Random: <?php echo rand(); ?><br>
   Random limited: <?php echo rand(5, 15); ?><br>
</body>
</html>