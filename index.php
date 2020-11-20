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

    <title>My my my</title>
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
                <h2>Hi there! Welcome to MY otter page!</h2>
                <p>Please, don't take too serious every sentence here and smile :)</p>
                <h3>Fun facts about otters</h3>
                <img src="image/LutrasGul.jpg" alt="Otters sleep" style="width: 100%; padding: 30px;">
                <ol>
                    <li>Thirteen different species of otter exist all around the world. Some are small river otters, and some are bigger sea otters.</li>
                    <li>90% of all sea otters live on the coast of Alaska.</li>
                    <li>They're hungry animals! Sea otters eat 25% of their body weight in food every day.</li>
                    <li>Clever creatures, they'll use rocks to crack open the clams. They carry rocks and store food in the loose skin under their armpits - who needs carrier bags!</li>
                    <li>Baby otters are called pups. Newborn pups need lots of attention, and will stay close to their mum's until they've developed enough skills to go it alone - usually at 6 months.</li>
                    <li>An otter pup's fur is too dense for it to swim underwater. So, their mother leaves them floating while she searches for food, until their adult fur grows in.</li>
                    <li>Don't challenge an otter to a holding-your-breath competition! Sea otters can stay underwater for 5 minutes, and river otters can hold their breath for even longer - 8 minutes!</li>
                    <li>Otters like to stick together, so when they sleep they will wrap themselves in seaweed and float together in a group. A group of resting otters is called a raft. We wouldn't go drifting away on one of these rafts, however! Otters have a nasty bite!</li>
                </ol>
            </div>
        <div class="sidebar sticky col-lg-4 col-md-3 col-sm-3 col-xs-12">
            <h2>Related</h2>
            <ul>
                <li><a href="#home">Fun facts about lutras</a></li>
                <li><a href="#video">An otter having a brushing *super cute*</a></li>
            </ul>
            <a class="btn btn-outline-light" href="#home" role="button">
                <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
            </a>
        </div>


        </div>
        <div class="row" id="our_team">
            <div class="col-lg-8 col-md-9 col-sm-9 col-xs-12 ">
                <form action="test" method="POST">
                    <h3 id="challenge">Here's a test! Challenge yourself! Good luck!</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="formGroupExampleInput">Write your name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Don't worry" name="tName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Write your home name</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="No one will see it" name="tHomeName">
                        </div>
                    </div>

                    <h4>Choose a little square</h4>
                    <div class="form-row">
                        <div class="form-check col-md-6">
                            <input class="form-check-input" type="checkbox" value="1st" id="tSquares" name="tSquares[]">
                            <label class="form-check-label" for="defaultCheck1">First little square</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2nd" id="tSquares" name="tSquares[]">
                            <label class="form-check-label" for="defaultCheck2">Second little square</label>
                        </div>
                        <div class="form-check col-md-6">
                            <input class="form-check-input" type="checkbox" value="3rd" id="tSquares" name="tSquares[]">
                            <label class="form-check-label" for="defaultCheck3">Third little square</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4th" id="tSquares" name="tSquares[]">
                            <label class="form-check-label" for="defaultCheck4">Fourth little square</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <h4>How long can otters hold their breath? </h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tTime" id="exampleRadios1" value="4">
                                <label class="form-check-label" for="exampleRadios1">4 min</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tTime" id="exampleRadios2" value="5">
                                <label class="form-check-label" for="exampleRadios2">5 min</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tTime" id="exampleRadios3" value="8">
                                <label class="form-check-label" for="exampleRadios3">8 min</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tTime" id="exampleRadios4" value="60">
                                <label class="form-check-label" for="exampleRadios4">1 hr</label>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <h4>How much do otters eat per day? </h4>
                            <div class="form-check2">
                                <input class="form-check2-input" type="radio" name="tPercents" id="exampleRadios5" value="0.1">
                                <label class="form-check-label" for="exampleRadios5">10% of its weight</label>
                            </div>
                            <div class="form-check2">
                                <input class="form-check2-input" type="radio" name="tPercents" id="exampleRadios6" value="0.25">
                                <label class="form-check-label" for="exampleRadios6">25% of its weight</label>
                            </div>
                            <div class="form-check2">
                                <input class="form-check2-input" type="radio" name="tPercents" id="exampleRadios7" value="0.5">
                                <label class="form-check-label" for="exampleRadios7">50% of its weight</label>
                            </div>
                            <div class="form-check2">
                                <input class="form-check2-input" type="radio" name="tPercents" id="exampleRadios8" value="1.1">
                                <label class="form-check-label" for="exampleRadios8">110% of its weight</label>
                            </div>
                        </div>
                    </div>


                    <h4>How is by now?</h4>
                    <select id="inputMood" class="form-control" name="tMood">
                        <option></option>
                        <option>Good</option>
                        <option>Ok</option>
                        <option>Next question</option>
                    </select>


                    <h4>Thats all, thank you!</h4>
                    <button type="submit" class="btn btn-primary" name="tButton">Submit</button>

                    <h6>Main developer- Natalya Jermakova. Yes, this panel is about our team. </h6>
                    
                </form>
            </div>
        </div>

        <div class="row" id="project">
            <div class="col-lg-8 col-md-9 col-sm-9 col-xs-12 ">
                <div class="row" style="margin-bottom: 20px; padding-top: 0">
                    <h2>Soon there <b>WILL</b> be projects. We promise. At least <i>hope so</i>, but for now, take a look at these otters :) </h2>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 modal-images">
                        <img src="image/LutraEstZivis.jpg" alt="Otter eats a fish" onclick="openModal();currentSlide(1)" class="hover-shadow">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 modal-images">
                        <img src="image/LutraRokas.jpg" alt="Holding an otter" onclick="openModal();currentSlide(1)" class="hover-shadow">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 modal-images">
                        <img src="image/LutrasGul.jpg" alt="Otters sleep" onclick="openModal();currentSlide(1)" class="hover-shadow">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 modal-images">
                        <img src="image/LutraUdeni.jpg" alt="Otter swims" onclick="openModal();currentSlide(1)" class="hover-shadow">
                    </div>
                </div>

            <!-- Lightbox -->

                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 4</div>
                            <img src="image/LutraEstZivis.jpg" style="width: 100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">2 / 4</div>
                            <img src="image/LutraRokas.jpg" style="width: 100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">3 / 4</div>
                            <img src="image/LutrasGul.jpg" style="width: 100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">4 / 4</div>
                            <img src="image/LutraUdeni.jpg" style="width: 100%">
                        </div>
                        <!-- Next/previous controls -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <!-- Caption text -->
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                        <!-- Thumbnail image controls -->
                        <div class="column">
                            <img class="demo" src="image/LutraEstZivis.jpg" onclick="currentSlide(1)" alt="Otter eats a fish">
                        </div>

                        <div class="column">
                            <img class="demo" src="image/LutraRokas.jpg" onclick="currentSlide(2)" alt="Holding an otter">
                        </div>

                        <div class="column">
                            <img class="demo" src="image/LutrasGul.jpg" onclick="currentSlide(3)" alt="Otters sleep">
                        </div>

                        <div class="column">
                            <img class="demo" src="image/LutraUdeni.jpg" onclick="currentSlide(4)" alt="Otter swims">
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript" src="./js/script.js"></script>

            <div class="YoutubeVideo col-lg-8 col-md-9 col-sm-9 col-xs-12 ">
                <h2 id="video">Video of an otter having a massage </h2>
                <iframe width="100%"
                        src="https://www.youtube.com/embed/z7rFrc5kqOk?start=20"
                        frameborder="0" allowfullscreen>
                        <!--allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"-->

                </iframe>
            </div>
        </div>

        <div class="row" id="map">
            <div class="col-lg-8 col-md-9 col-sm-9 col-xs-12 ">
                <h2>How to contact us? It's easy.</h2>
                <p>Just go straight, turn left, go across the building, light a candle with a stone, open a bottle (of juice) with an eye, and do it all at midnight next to the dead cow, and then our raven will bring you our email. See ya!</p>
                <h6>Or just call us- 6700____ and if that's your destiny, next 4 numbers you'll guess.</h6>
                <p>Just joking, click <a href="contact">here</a></p>

                <h4>If you all of a sudden want to visit us- here's our adress: </h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15503806.597142525!2d-81.33706237164914!3d18.433357990205362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb9e309d5a038b7%3A0xc67ecf32cac5dbdc!2z0JrQsNGA0LjQsdGL!5e0!3m2!1sru!2slv!4v1575713713570!5m2!1sru!2slv"
                        width="100%" height="300"
                        frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <h3 class="col-lg-8 col-md-9 col-sm-9 col-xs-12" style="padding-bottom: 0;">Top places to look at the otters</h3>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nr.</th>
                    <th>Residence</th>
                    <th>Country</th>
                    <th>Link</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Otter City</td>
                    <td>Singapore</td>
                    <td><a href="https://www.facebook.com/ottercity/">@ottercity</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Smallbrook Meadows</td>
                    <td>UK</td>
                    <td><a href="http://wiltshireweb.co.uk/nature/smallbrook-meadows">wiltshireweb.co.uk</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Elkhorn Slough</td>
                    <td>USA</td>
                    <td><a href="http://www.elkhornslough.com/">elkhornslough.com</a></td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>

    <footer>
        <p>@Copyright 2050 by me, myself & I. All rights reversed.</p>
    </footer>
</body>
</html>
