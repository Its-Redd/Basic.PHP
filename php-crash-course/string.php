<html>
    <head>
        <h1>strings</h1>
    </head>
    <body>
        <?php 
            $name1 = "My name is John Doe";
            $name2 = 'My Name is John Doe';
        ?>
        <br>
        <?php 
            $img = '<img src="url/to/image/here">';
            echo $img; 
        ?>
        <br>
        <?php 
            $name = "John Doe";
            echo "Welcome back, " . $name; 
        ?>
        <br>
        <?php 
            $firstname = "John";
            $lastname = "Doe";
            echo "Hello {$firstname} {$lastname}. How are you?"; 
        ?>
        <br>
        <?php 
            $html_string = "<p>Hello world</p>";
            echo $html_string;
        ?>
        <br>
        <?php 
            $name = "John Doe";  
            $html_string = "<p>" . $name . "</p>";
            echo $html_string;
        ?>
        <br>

    </body>
</html>