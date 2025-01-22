<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
        <?php
            $string = "10";
            $number = 10;
        ?>
    <br>  
    <?php
        $string = "10/3";
        $number = 10/3;
    ?>
    <br>
    <?php
        $var1 = 2;
        $var2 = 3;
        $result = $var1 + $var2;
        echo $result; // 5
    ?>
    <br>
    Variable: <?php echo $var1 = 2; ?><br>
   +=8: <?php echo ($var1 += 8); ?><br>
   -=4: <?php echo ($var1 -= 4); ?><br>
   *=8: <?php echo ($var1 *= 8); ?><br>
   /=8: <?php echo ($var1 /= 8); ?><br>
   <br>
   Variable: <?php $var1 = 2; ?>
   Increment: <?php $var1++; echo $var1; ?>
   Decrement: <?php $var1--; echo $var1; ?>
   <br>
   <?php
        $var1 = 4.50;
        echo $var1;
    ?>
    <br>
    <?php
        $var1 = 4.50;
        $var2 = 4.25;
        $result = $var1 + $var2;
        echo $result;
    ?>
    <br>
    <?php echo 10/3; ?> // 3.3333333


</body>
</body>
</html>