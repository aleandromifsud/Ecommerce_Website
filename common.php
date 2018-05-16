<?php

// Creating the header of the site
function headerCommon()
{
    echo '<!DOCTYPE html>';
    echo ' <html lang="en">';
    echo '<head>';
    echo '  <meta charset="UTF-8">';
    echo '  <meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '  <title>GGez</title>';
            // Importing FontAwesome, Google APi and Bootstrap
    echo '  <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">';
    echo '  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

    echo '   <link rel="stylesheet" href="/libs/bootstrap-3.3.7-dist/css/bootstrap.css">';
    echo '   <link rel="stylesheet" href="/css/style.css" type="text/css">';
    echo '   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
    echo '   <script src="/libs/bootstrap-3.3.7-dist/js/bootstrap.js"></script>';
    echo '</head>';
}

// Creating the entire navbar, including the bootstrap modals
function navBarCommon()
{
    echo '   <body data-spy="scroll" data-target=".navbar" data-offset="50">';
    echo ' <nav id="navigation" class="navbar navbar-default navbar-fixed-top" >';

    echo '     <div class="container-fluid">';

    echo '       <div class="navbar-header">';
    echo '          <!--Put the class to active if carousel works -->';
    echo '         <li class = "active"><a class="navbar-brand" href="/index.php"><img src="/media/logo.png" alt="Logo"></a></li>';
    echo '   </div>';

    echo '    <form id = "searchBar" class="navbar-form navbar-left" action="/action_page.php">';
    echo '               <input  type="text" name="search" placeholder="Search..">';
    echo '      </form>';

    echo '      <div class = "lowerNav">';
    echo '          <div class = "nav navbar-nav">';

    echo '             <li><a href="/interfaces/games.php">Games</a></li>';

    echo '              <li class="dropdown" onclick="">';
    echo '                  <a  data-toggle="dropdown">Platforms';
    echo '                   <span class="caret"></span></a>';
    echo '          <ul class="dropdown-menu">';
    echo '              <li><a href="/interfaces/platforms1.php">PreBuilt PCs</a></li>';
    echo '              <li><a href="/index.php#consoleID">Consoles</a></li>';


    echo '          </ul>';
    echo '      </li>';

    echo '      <li class="dropdown">';
    echo '          <a class="dropdown-toggle" data-toggle="dropdown" href="/index.php#consoleID">Consoles';
    echo '              <span class="caret"></span></a>';
    echo '          <ul class="dropdown-menu">';
    echo '              <li><a href="/interfaces/standardconsoles.php">Standard Consoles</a></li>';
    echo '              <li><a href="/interfaces/handheldconsoles.php">Hand-Held Consoles</a></li>';
    echo '          </ul>';
    echo '      </li>';

    echo '      <li class="dropdown">';
    echo '          <a class="dropdown-toggle" data-toggle="dropdown" href="/index.php#periphID">Peripherals';
    echo '              <span class="caret"></span></a>';
    echo '          <ul class="dropdown-menu">';
    echo '              <li><a href="/interfaces/headsets.php">Gaming Headsets</a></li>';
    echo '              <li><a href="/interfaces/keyboardandmouse.php">Keyboard and Mouse</a></li>';
    echo '              <li><a href="/interfaces/controllers.php">Controllers</a></li>';
    echo '          </ul>';
    echo '      </li>';


    echo '      <li><a href="/index.php#aboutUsUD">About Us</a></li>';
    echo '      <li><a href="/index.php#contactUsID">Contact Us</a></li>';

    echo '  </div>';
    echo '</div>';

    echo '            <div  class="nav navbar-nav navbar-right">';

    echo '  <li><a type="button" data-toggle="modal" data-target="#classifiedModal" href="#" id="classified"><i class="fa fa-barcode"></i></a></li>';
    echo '  <li><a type="button" data-toggle="modal" data-target="#cartModal" href="#" id="cart"  ><i class="fa fa-cart-arrow-down"></i></a></li>';
    echo '  <li><a type="button" data-toggle="modal" data-target="#registerLoginModal" href="#" id="regButton"  ><i class="fa fa-user-circle"></i></a></li>';

    echo '</div>';
    echo '</div>';
    echo '</nav>';

    echo '<!-- Register -->';
    echo ' <div class="modal fade" id="registerLoginModal" role="dialog">';
    echo '     <div class="modal-dialog">';

    echo '       <!-- Modal content-->';
    echo '    <div class="modal-content">';

    echo '  <div class="row">';
    echo '      <div class="col-sm-6">';
    echo '          <div class="modal-header">';
    echo '              <h4 class="modal-title">Register</h4>';
    echo '          </div>';
    echo '          <div class="modal-body">';
    echo '              <form action="/php/user/add_user.php" method="POST">';
    echo '                  <div class="form-group">';
    echo '                      <label for="Rname">Name :</label>';
    echo '                      <input type="text" name="name" class="form-control" id="Rname" >';
    echo '                  </div>';
    echo '                  <div class="form-group">';
    echo '                      <label for="RSname">Surname :</label>';
    echo '                      <input type="text" name="surname" class="form-control" id="RSname" >';
    echo '                  </div>';
    echo '                   <div class="form-group">';
    echo '                     <label for="Rnumber">Phone Number:</label>';
    echo '                      <input type="number" name="phonenum" class="form-control" id="Rnumber" >';
    echo '                  </div>';
    echo '                  <div class="form-group">';
    echo '                      <label for="Remail">Email address:</label>';
    echo '                      <input type="email" name="email" class="form-control" id="Remail" >';
    echo '                        </div>';
    echo '                  <div class="form-group">';
    echo '                      <label for="Rpass">Password:</label>';
    echo '                      <input type="password" name="password" class="form-control" id="Rpass" >';
    echo '                  </div>';
    echo '                  <button type="submit" class="btn btn-default pull-right subButt">Submit</button>';
    echo '              </form>';
    echo '          </div>';
    echo '      </div>';

    echo '      <div class="col-sm-6">';
    echo '          <div class="modal-header">';
    echo '              <button type="button" class="close" data-dismiss="modal">&times;</button>';
    echo '              <h4 class="modal-title">Login</h4>';
    echo '          </div>';
    echo '          <div class="modal-body">';
    echo '              <form action="php/user/login.php" method="post">';
    echo '                  <div class="form-group">';
    echo '                      <label for="email">Email address:</label>';
    echo '                      <input type="email" name="email" class="form-control" id="email">';
    echo '                  </div>';
    echo '                  <div class="form-group">';
    echo '                      <label for="pwd">Password:</label>';
    echo '                      <input type="password" name="password" class="form-control" id="pwd">';
    echo '                  </div>';
    echo '                  <div class="checkbox">';
    echo '                      <label><input type="checkbox"> Remember me</label>';
    echo '                  </div>';
    echo '                  <button type="submit" class="btn btn-default pull-right">Submit</button>';
    echo '              </form>';
    echo '              <div id="tempButton">';
    echo '                  <a href="/interfaces/normal-profile.php" class="btn btn-default btn-block btn-warning" >Temp User Account Button</a>';
    echo '                  <a href="/interfaces/admin-profile.php" class="btn btn-default btn-block btn-warning">Temp Admin Account Button</a>';
    echo '              </div>';
    echo '          </div>';
    echo '      </div>';
    echo '  </div>';

    echo ' </div>';

    echo '</div>';
    echo '</div>';

    echo '  <!-- End of register login popup-->';

    echo ' <!-- Begin Cart-->';

    echo ' <div id="cartModal" class="modal fade" role="dialog">';
    echo '   <div class="modal-dialog">';

    echo '  <div class="modal-content">';
    echo '  <div class="modal-header">';
    echo '      <button type="button" class="close" data-dismiss="modal">&times;</button>';
    echo '      <h4 class="modal-title">Your Shopping Basket</h4>';
    echo '  </div>';
    echo '  <div class="modal-body">';
    echo '      <p class="cartHead">Nintendo Switch</p>';
    echo '       <div id="cartID" class="pull-right">';
    echo '              <label for="Quant">Quantity:</label>';
    echo '              <input type="number" class="form-control" id="Quant">';
    echo '       </div>';
    echo '       <p>Price : 300 Euro</p>';
    echo '       <div id="removeButton">';
    echo '           <button class="btn btn-default btn-warning pull-right">Remove</button>';
    echo '       </div>';
    echo '  </div>';
    echo '  <div class="modal-footer">';
    echo '  <p id="totalPrice" class="pull-left"> Total : 300 Euro </p>';
    echo '      <a type="button" class="btn btn-default" id="checkoutButton" href="/interfaces/checkout.php">Checkout</a>';
    echo '  </div>';
    echo '</div>';

    echo '</div>';
    echo '</div>';

    echo '<!-- End of Cart-->';

    echo '   <!-- Begin Classified Form-->';

    echo ' <div id="classifiedModal" class="modal fade" role="dialog">';
    echo '     <div class="modal-dialog">';
    echo '     <div class="modal-content">';
    echo '          <div class="modal-header">';
    echo '         <button type="button" class="close" data-dismiss="modal">&times;</button>';
    echo '          <h4 class="modal-title">Classified / Sell your products</h4>';
    echo '           </div>';
    echo '         <div class="modal-body">';
    echo '            <form action="/action_page.php">';

    echo '                <div class="form-group">';
    echo '                    <label for="Cemail">Email address:</label>';
    echo '                   <input type="email" class="form-control" id="Cemail">';
    echo '               </div>';

    echo '          <div class="form-group">';
    echo '              <label for="CPname">Product Name:</label>';
    echo '              <input type="text" class="form-control" id="CPname">';
    echo '          </div>';

    echo '          <div class="form-group-lg">';
    echo '              <label for="CPdesc">Product Description:</label>';
    echo '              <input type="text" class="form-control" id="CPdesc">';
    echo '          </div>';

    echo '          <div id="uploadID" class="form-group">';
    echo '              <label for="Cprice">Price:</label>';
    echo '              <input type="number" class="form-control" id="Cprice">';
    echo '          </div>';

    echo '          <div class="form-group">';
    echo '              <label for="Ccat">Select Product Category:</label>';
    echo '              <select class="form-control" id="Ccat">';
    echo '                  <option>Games</option>';
    echo '                  <option>Pre-built PCs</option>';
    echo '                        <option>Consoles</option>';
    echo '                 <option>Peripherals</option>';
    echo '                  </select>';
    echo '            </div>';

    echo '                 <div class="form-group">';
    echo '                        <label>Upload Product Image</label>';
    echo '                    <button type="button" class="btn btn-default">Upload!</button>';
    echo '                 </div>';

    echo '               <div class="modal-footer">';
    echo '               <button id="Csub" type="submit" class="btn btn-default">Submit</button>';
    echo '               </div>';
    echo '           </form>';
    echo '       </div>';
    echo '    </div>';
    echo '   </div>';
    echo '   </div>';

    // End of Classified
    //End of Nav
}

// Creates the footer
function commonFooter()
{
    echo '   <footer class="page-footer">';

    echo '     <div id="foot" class="container">';
    echo '   <!--Copyright-->';
    echo '       <div class = "row">';
    echo '   <div class="footer-copyright">';
    echo '       <div class="container">';
    echo ' © 2018 Copyright: GGez';
    echo '</div>';
    echo '    </div>';
    echo '    </div>';
    echo '    <!--/Copyright-->';

    echo '    <div id="footerSoc" class="row">';
    echo '       <a href="https://www.facebook.com"><i class=" fa fa-facebook-square col-lg-3"></i></a>';
    echo '      <a href="https://www.instagram.com"><i class=" fa fa-instagram col-lg-3"></i></a>';
    echo '      <a href="https://www.twitter.com"><i class=" fa fa-twitter col-lg-3"></i></a>';
    echo '       <a href="https://www.youtube.com"><i class=" fa fa-youtube col-lg-3"></i></a>';
    echo '   </div>';

    echo '  </div>';
    echo '  </footer>';

    echo ' </body>';
    echo '  </html>';

}