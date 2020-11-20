<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="libraries/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="libraries/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>Results</title>
    <link rel="icon" href="image/logo.png">
</head>
<body>
    <div class="container">
        <h1>Your results!</h1>
        <?php
                            if(isset($_POST['tButton'])){
                                echo "<br/><b>Name:     </b>{$_POST['tName']}<br/>";
                                echo "<b>HomeName: </b>{$_POST['tHomeName']}<br/>";
                                $tSquare = $_POST['tSquares'];
                                if(empty($tSquare)){
                                    echo("You didn't select any square ;(");
                                } 
                                else{
                                    $N = count($tSquare);
                                    echo("You selected $N square(s): ");
                                    foreach ($tSquare as $tSquares){ 
                                        echo "{$tSquares} ";
                                    }
                                echo "<br/><b>Time: </b>{$_POST['tTime']}<br/>";
                                echo "<b>Weight: </b>{$_POST['tPercents']}<br/>";
                                echo "<b>Mood: </b>{$_POST['tMood']}<br/>";
                                }
                            }

        ?>
        <a href="index">Return</a>
    </div>
</body>
</html>
