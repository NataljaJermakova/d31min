<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <style>
    .btn-primary {
        margin: 0;
        margin-top: 20px;
        position: relative;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .registration-box{
        border: 1.5pt solid beige;
        border-radius: 10px;
        background: white no-repeat;
    }
    </style>

    <link rel="stylesheet" href="libraries/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="libraries/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    
    <title>Registration</title>
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
                        <a href="register">Sign Up</a>
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row" style="background: linear-gradient(beige, beige, #b6c9c2) no-repeat; background-image: linear-gradient(#00000000, #00000000);">
            <div class="col-md-3">
            <img src="image\LutraRegistration.jpg" alt="Otter ir watching you" width="100%" style="border-radius: 50%;margin-top: 20%;">
            </div>
            <div class="col-md-6 registration-box">
                <form action="register" method="POST">
                    <h2>Register</h2>
                    <p>Please fill in this form to create an account.</p>
                    <hr>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="rName">Username</label>
                            <input type="text" class="form-control" id="rName" name="rName" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="rPassword">Password</label>
                            <input type="password" class="form-control" id="rPassword" name="rPassword" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="rPassword1">Repeat password</label>
                            <input type="password" class="form-control" id="rPassword1" name="rPassword1" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="rEmail">Email address</label>
                            <input type="email" class="form-control" id="rEmail" name="rEmail" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="rPhone">Phone number</label>
                            <input type="text" class="form-control" id="rPhone" name="rPhone" required>
                        </div>
                    </div>

                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                    <button type="submit"  class="btn btn-primary" name="rButton">Register</button>
                    
                    <div class="form-row">
                        <p>Already have an account? <a href="#">Sign in</a>.</p>
                    </div>

                    <?php
                            
                        // function for email validation
                        function is_valid_email($mail)
                        {
                            // check if e-mail address is well-formed
                            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                                echo "Invalid email format."; 
                                return false;
                            }else
                            {
                                // check if the mail is already registered
                                // $slquery = "SELECT 1 FROM register WHERE email = '$email'";
                                // $selectresult = mysql_query($slquery);
                                // if(mysql_num_rows($selectresult)>0) {
                                //     echo 'This email already exists.';
                                //     return false;
                                // }
                                // // now returns the true- means you can proceed with this mail
                            return true;
                            }
                        }
                            
                        // function for password verification
                        function is_valid_passwords($pass,$confirmpass) 
                        {
                            // Your validation code.
                            if ($pass != $confirmpass) {
                                // error matching passwords
                                echo 'Your passwords do not match. Please type carefully.';
                                return false;
                            }
                            // passwords match
                            return true;
                        }
                            
                            // function for creating user
                            // function create_user($username, $password, $cpassword, $email) 
                            // {
                            //     $query = "INSERT INTO `register` (username, password, confirmpassword, email) VALUES ('$username', '$password', '$cpassword', '$email')";
                            //     $result = mysql_query($query);
                            //     if($result){
                            //         return true; // Success
                            //     }else{
                            //         return false; // Error somewhere
                            //     }
                            // }
                            
                            // Code execution starts here when submit
                        if (isset($_POST['rName']) && isset($_POST['rPassword']))
                        {                    
                            echo "<b>Name:</b>{$_POST['rName']}<br/>";
                            echo "<b>Password:</b>{$_POST['rPassword']}<br/>";
                            echo "<b>Password1:</b>{$_POST['rPassword1']}<br/>";
                            echo "<b>Email:</b>{$_POST['rEmail']}<br/>";
                            echo "<b>Phone:</b>{$_POST['rPhone']}<br/>";
                            
                            // Reading form values
                            //$username = $_POST['username'];
                            $email = $_POST['rEmail'];
                            $password = $_POST['rPassword'];
                            $cpassword = $_POST['rPassword1'];
                            is_valid_email($email);
                            is_valid_passwords($password,$cpassword);

                            if (is_valid_email($email) && is_valid_passwords($password,$cpassword))
                            {
                                //if (create_user($username, $password, $cpassword, $email)) { //pagaidām pietiek ar to, ka email un parole pareizas
                                echo 'New User Registered Successfully.'; 
                            }else
                            {
                                echo 'Error Registering User!';
                            }
                            // You don't need to write another 'else' since this is the end of PHP code
                        }
                    ?>
                </form>
            </div>
            <div class="col-md-3">
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