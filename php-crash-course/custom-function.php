<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Functions</title>
</head>
<body>
    <?php
        function simple_function() {
            echo "Hello world";
        }

        simple_function()
    ?>
    <br>
    <?php
        function simple_function2($name){
            echo "Hello " . $name;
        }
        simple_function2("Mike"); // Hello Mike
    ?>
    <br>
    <?php
        function simple_function3($name){
            echo "Hello, " . $name;
        }
        $user = "Mike";
        simple_function3($user); // Hello Mike
    ?>
    <br>
    <?php
        // Create function
        function simple_function4($name1, $name2, $event){
            echo "Hello " . $name1. " and " . $name2  . ".<br>";
            echo "Welcome to my " . $event . ".";
        }		
        // Call function	
        simple_function4("Mike", "John", "Birthday"); // Hello Mike and John Welcome to my birthday
    ?>
    <br>
    <?php
        function math_function($var1, $var2){
            $result =  $var1 + $var2;
            echo $result;			
        }
        math_function(10, 20); // 30
    ?>
    <br>
    <?php
        function simple_function5($var1, $var2){
            $result =  $var1 + $var2;
            echo $result;			
        }
        simple_function5(10, 20);
    ?>
    <br>
    <?php
        function simple_function6($var1, $var2){
            $result =  $var1 + $var2;
            return $result;			
        }
        echo simple_function6(10, 20);
    ?>
    
</body>
</html>