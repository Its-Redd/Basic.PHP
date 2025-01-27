<?php
    session_start();


  function generateNumber(){
    return rand(1,5);
  }

    if(!isset($_SESSION['number'])){
        $_SESSION['number'] = generateNumber();
    }

    if(!isset($_SESSION['guesses'])){
        $_SESSION['guesses'] = 0;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess a Number</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="w-100 d-flex flex-column align-items-center mt-5">
    <h1>Guess a Number!</h1>
    <form>
        <label for="guess">Enter a number between 1 and 5:</label>
        <input type="text" id="guess" name="guess">
        <button type="submit">Guess</button>
        <div class="d-flex justify-content-center">
        <?php
            if(isset($_GET['guess'])){
                $guess = $_GET['guess'];
                $number = $_SESSION['number'];
                $guesses = $_SESSION['guesses'];

                if ($guess == '' || $guess == null){
                    echo "<h2 style=\"color: red;\">Please enter a number</h2>";
                }
                else if ($guess < 1 || $guess > 5){
                    echo "<h2 style=\"color: red;\">Please enter a number between 1 and 5</h2>";
                }
                else
    
                if($guess == $number){
                    echo "<h2 style=\"color: green;\">You guessed correctly!</h2>";
                    $_SESSION['number'] = generateNumber();
                    $_SESSION['guesses'] = 0;
                }
                else{
                    if ($guess > $number){
                        echo "<h2 style=\"color: red;\">You guessed too high! Try again</h2>";
                        $_SESSION['guesses'] = $guesses + 1;
                    }
                    else{
                        echo "<h2 style=\"color: red;\">You guessed too low! Try again</h2>";
                        $_SESSION['guesses'] = $guesses + 1;
                    }
                }
            }

                
        ?>
        </div>
        <h3>Guesses: <?php
        
        if(isset($_GET['guess'])){
            echo $_SESSION['guesses'];
        }
        else{
            echo 0;
        }
        
        ?></h3>

    </form>
</body>
</html>