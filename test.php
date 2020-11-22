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
<div class="container-fluid" style="padding-left: 0; padding-right: 0;">
        <header>It's MY page</header>

        <nav class="navbar navbar-light navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav" style="width: 540px;">
                        <li><a href="index#home">Home</a></li>
                        <li><a href="index#our_team">Our team</a></li>
                        <li><a href="index#project">Projects</a></li>
                        <li><a href="index#map">Map</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row" id="home">
            <div class="col-lg-8 col-md-9 col-sm-9 col-xs-12 ">
            <h3>Your results!</h3>
            <?php
                if(isset($_POST['tButton'])){
                    echo "<b>Name:     </b>{$_POST['tName']}<br/>";
                    echo "<b>HomeName: </b>{$_POST['tHomeName']}<br/>";
                    
                    if(empty($_POST['tSquares'])){
                        echo("You didn't select any square ;(");
                    } 
                    else{
                        $tSquare = $_POST['tSquares'];
                        $N = count($tSquare);
                        echo("You selected $N square(s): ");
                        foreach ($tSquare as $tSquares){ 
                            echo "{$tSquares} ";
                        }
                    }
                    
                    echo "<b>Time: </b>{$_POST['tTime']}<br/>";
                    echo "<b>Weight: </b>{$_POST['tPercents']}<br/>";
                    echo "<b>Mood: </b>{$_POST['tMood']}<br/>";
                }

            ?>
            <div class="sidebar sticky col-lg-4 col-md-3 col-sm-3 col-xs-12">
                <ul>
                    <h3><a href="index">Return</a></h3>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
