<?php include 'common.php'; headerCommon();?>

<?php navBarCommon(); ?>
<!-- First section for the scroll spy-->

<div id="mainSelection">

    <!-- Carousel Code Start-->

    <div class="container-fluid">
        <div id="gameCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#gameCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#gameCarousel" data-slide-to="1"></li>
                <li data-target="#gameCarousel" data-slide-to="2"></li>
                <li data-target="#gameCarousel" data-slide-to="3"></li>
                <li data-target="#gameCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active img-fluid">
                    <img src="media/carousel/PC.jpg" alt="PC">
                    <div class="carousel-caption">
                        <h3>High-End Computers</h3>
                        <p> For those who need power.</p>
                    </div>
                </div>

                <div class="item  img-fluid">
                    <img src="media/carousel/ps4.jpg" alt="Playstation">
                    <div class="carousel-caption">
                        <h3>Sony Playstation</h3>
                        <p>Best Sales for Sony's best console.</p>
                    </div>
                </div>


                <div class="item  img-fluid">
                    <img src="media/carousel/peripherals.jpeg" alt="Playstation">
                    <div class="carousel-caption">
                        <h3>Peripherals</h3>
                        <p>From Keyboards to controllers</p>
                    </div>
                </div>

                <div class="item  img-fluid">
                    <img src="media/carousel/PSvita.jpg" alt="Playstation">
                    <div class="carousel-caption">
                        <h3>PSVita</h3>
                        <p>Sony's Hand held.</p>
                    </div>
                </div>


                <div class="item img-fluid">
                    <img src="media/carousel/xbox.jpg" alt="Xbox">
                    <div class="carousel-caption">
                        <h3>Xbox</h3>
                        <p>You'll probably never be able to play anything on this</p>
                    </div>
                </div>


            </div>

            <!-- Left and right controls -->
            <a href="#gameCarousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#gameCarousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>

    <!-- Select category start-->
    <div class="container mainButtons">
        <div class="row ">
            <div id="leftCat" class="col-sm pull-left category">
                <a href="interfaces/games.php"><img class="img-fluid" src="media/icons/videogames.png" alt="Games"></a>
            </div>

            <div class="col-sm pull-left category">
                <a href="#platformID"><img class="img-fluid" src="media/icons/gamingplatforms.png" alt="Platforms"></a>
            </div>

            <div class="col-sm pull-left category">
                <a href="#periphID"><img class="img-fluid" src="media/icons/peripherals.png" alt="Peripherals"></a>
            </div>
        </div>
    </div>


</div>
<!-- End of first section for scroll spy-->

<!--Beginning of  Platforms-->

<div id="platformID" class="container-fluid">

    <h2>Platforms</h2>

    <div class="row platformButtons ">
        <div class="col-sm-6 text-right">
            <a href="interfaces/platforms1.php"><img class="img-fluid" src="media/icons/prebuilt.png" alt="PreBuilt PCs"></a>
        </div>
        <div class="col-sm-6 text-left">
            <a href="#consoleID"><img class="img-fluid" src="media/icons/consoles.png" alt="Consoles"></a>
        </div>

    </div>

</div>

<!-- End of Platforms-->

<!--Beginning of  Consoles-->

<div id="consoleID" class="container-fluid">

    <h2>Consoles</h2>

    <div class="row platformButtons">

        <div class=" col-sm-6 text-right">
            <a href="interfaces/standardconsoles.php"><img class="img-fluid" src="media/icons/standardconsoles.png" alt="Consoles"></a>
        </div>

        <div class=" col-sm-6 text-left">
            <a href="interfaces/handheldconsoles.php"><img class="img-fluid" src="media/icons/handheldconsoles.png"
                                                           alt="Hand held"></a>
        </div>

    </div>

</div>

<!-- End of Consoles-->


<!-- Beginning of Peripherals-->

<div id="periphID" class="container-fluid">

    <h2>Peripherals</h2>

    <div class="row text-center platformButtons">
        <div id="" class=" col-xs-4 text-right">
            <a href="interfaces/headsets.php"><img class="img-fluid" src="media/icons/gamingheadsets.png" alt="Headsets"></a>
        </div>

        <div class=" col-xs-4 ">
            <a href="interfaces/keyboardandmouse.php"><img class="img-fluid" src="media/icons/miceandkeyboards.png"
                                                           alt="Keyboard and Mouse"></a>
        </div>

        <div class="col-xs-4  text-left">
            <a href="interfaces/controllers.php"><img class="img-fluid" src="media/icons/controllers.png" alt="Keyboard and Mouse"></a>
        </div>
    </div>

</div>


<!-- End of Peripherals-->

<!--Beginning of About Us -->
<div id="aboutUsUD" class="container-fluid ">
    <h2>About Us</h2>

    <div id="leftAbout" class=" col-md-4 aboutBaods">
        <h3>The Team</h3>
        <h4>Sarah-Jane Camilleri - Lead Designer</h4>
        <p>

        </p>
        <h4>Sanad Amish - Lead Developer</h4>
        <p>

        </p>
        <h4>Aleandro Mifsud - Project Manager</h4>
        <p>

        </p>

    </div>

    <div id="rightAbout" class=" col-md-4 aboutBaods">
        <h3>Our Goal</h3>
        <blockquote>
            Our goal here at GGez is to create an easy environment for any kind of user to be able to purchase hardware
            or software.
            Our website was created with people who are new to technology in mind, the art work for each button was
            created to have an eye
            catching effect on the user.
        </blockquote>
    </div>

</div>
<!-- End of About Us-->

<!-- Beginning of Contact Us-->

<div id="contactUsID" class="container-fluid">
    <h2>Contact Us</h2>

    <div id="formDiv" class=" contactBod">
        <form>
            <div class="form-group">
                <label>Email address:</label>
                <input type="email" class="form-control">
            </div>

            <div class="form-group">
                <label>Subject:</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>Comment:</label>
                <textarea class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-default pull-right">Submit</button>
        </form>
    </div>

</div>

<!-- End of Contact Us -->

<?php commonFooter(); ?>


