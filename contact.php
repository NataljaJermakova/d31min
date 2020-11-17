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

    <title>Contact</title>
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
                        <li><a href="#home">Contact</a></li>
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
                <form action="contact" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Lonely" name="name">
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" class="form-control" id="surname" placeholder="Otter" name="surname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="lonely.otter@cry.yes" name="email">
                        <small id="emailHelp" class="form-text text-muted" name="hint">We'll never share your email with anyone else. Maybe</small>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="text" class="form-control" id="phone" placeholder="200-00-000 (Latvian numbers only)" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="question">Write your question</label>
                        <textarea class="form-control" name="question" id="question" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                    <?php
                        if(isset($_POST['save'])){
                            echo "<b>Name:</b>{$_POST['name']}";
                            echo "<b>Surname:</b>{$_POST['surname']}<br/>";
                            echo "<b>Email:</b>{$_POST['email']}<br/>";
                            echo "<b>Phone:</b>{$_POST['phone']}<br/>";
                            echo "<b>Question:</b>{$_POST['question']}<br/>";
                        }
                    ?>
                  </form>
            </div>
        </div>

        <div class="sidebar sticky col-lg-4 col-md-3 col-sm-3 col-xs-12">
            <ul>
                <h3><a href="index">Return</a></h3>
            </ul>
            <a class="btn btn-outline-light" href="#home" role="button">
                <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</body>
</html>