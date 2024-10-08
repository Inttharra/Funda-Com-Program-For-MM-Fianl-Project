<?php 
    include 'php/data.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riry's COSMA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'php/navbar.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="fs-2 text-center">Guess the number game</div>
        </div>
        <div class="row">
            <div class="col-1"> </div>
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <form action="guessing_number.php" method="post">
                            <div class="form-label ms-1">Enter your guess ( 1 - 10 )</div>
                            <input type="number" name="guess" class="form-control" min="1" max="10">
                            <input type="submit" value="Submit the guess number" class="btn btn my-3" style="background-color: #594346; color: #F9EFF1;">
                        </form>

                        <?php
                            if(isset($_POST['guess'])) {
                                $numberGuess = $_POST['guess'];
                                $win = "false";
                                echo "number random - ";

                                for($i = 1; $i <= 3; $i++){
                                    $ran = rand(1,10);
                                    echo "$ran ";
                                    if($ran == $numberGuess){
                                        $win = "true";
                                        $_SESSION['discount'] = 0.025;
                                    }
                                }

                                if($win == "true"){
                                    echo "<div class='text-success'>Congratulations!! you guessed the correct number : $numberGuess and get the 2.5% discount for your next purchase </div>";
                                    echo "<div class='text-danger'>Your discount will be lost if you navigate to the main page. Please complete your purchase here to keep your discount.</div>";
                                } else {
                                    echo "<div class='text-danger'>You guessed the incorrect number : $numberGuess , Try again!!</div>";
                                }
                            }
                        ?>
                    </div>
                    <div class="card-footer">have a surprise if you guessed the correct number</div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>