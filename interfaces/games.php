<?php include '../common.php'; headerCommon();?>

<?php navBarCommon();?>
        
     <div id = "sectionID" class = "container-fluid">

        <h1 class="categoryHeads text-center">Games</h1>
         
        <h4>Find your favourite game and select the platform you wish to purchase it for.</h4>

         <div class="row catSort">
             <div class="col-md-4 col-md-offset-2 form-group">
                 <label for="organise1">Sort By:</label>
                 <select class="form-control" id="organise1">
                     <option>Ascending</option>
                     <option>Descending</option>
                     <option>Cheapest</option>
                     <option>Highest Price</option>
                     <option>Most Bought</option>
                 </select>
             </div>

             <div class="col-md-4 form-group">
                 <label for="organise2">Show:</label>
                 <select class="form-control" id="organise2">
                     <option>All</option>
                     <option>Adventure</option>
                     <option>Horror</option>
                     <option>Open World</option>
                 </select>
             </div>
         </div>

        <div class="row text-center previews">
            <div id= "" class=" col-xs-4 text-right">
                <img id= "gamesSection" class="img-fluid" src="../media/products/productpreviews/fallout4.jpg" alt="Fallout">
                <div id= "gamesIcons">
                    <a href = "../products/games/falloutpc.php"><img class="img-fluid" src="../media/icons/pcicon.png" alt="Fallout"></a>
                    <a href = "../products/games/falloutxbox.php"><img class="img-fluid" src="../media/icons/xboxicon.jpg" alt="Fallout"></a>
                    <a href = "../products/games/falloutps4.php"><img class="img-fluid" src="../media/icons/ps4icon.jpg" alt="Fallout"></a>
                </div>
            </div>

            <div class="col-xs-4">
                <img id= "gamesSection" class="img-fluid" src="../media/products/productpreviews/skyrim.jpg" alt="Skyrim">
                <div id= "gamesIcons">
                    <a href = "../products/games/skyrimswitch.php"><img class="img-fluid" src="../media/icons/switchicon.jpg" alt="Skyrim for Nintendo Switch"></a>
                    <a href = "../products/games/skyrimpc.php"><img class="img-fluid" src="../media/icons/pcicon.png" alt="Skyrim for PC"></a>
                    <a href = "../products/games/skyrimxbox.php"><img class="img-fluid" src="../media/icons/xboxicon.jpg" alt="Skyrim for Xbox"></a>
                    <a href = "../products/games/skyrimps4.php"><img class="img-fluid" src="../media/icons/ps4icon.jpg" alt="Skyrim for PS4"></a>
                </div>
            </div>

            <div class="col-xs-4  text-left">
                <img id= "gamesSection" class="img-fluid" src="../media/products/productpreviews/darksouls.png" alt="Dark Souls 3">
                <div id= "gamesIcons">
                    <a href = "../products/games/darksouls3pc.php"><img class="img-fluid" src="../media/icons/pcicon.png" alt="Dark Souls 3 for PC"></a>
                    <a href = "../products/games/darksouls3xbox.php"><img class="img-fluid" src="../media/icons/xboxicon.jpg" alt="Dark Souls 3 for Xbox"></a>
                    <a href = "../products/games/darksouls3ps4.php"><img class="img-fluid" src="../media/icons/ps4icon.jpg" alt="Dark Souls 3 for PS4"></a>
                </div>
            </div>
         </div>
         
         
        <div class="row text-center previews">
            <div id= "" class=" col-xs-4 text-right">
                <img id= "gamesSection" class="img-fluid" src="../media/products/productpreviews/mortalkombat.png" alt="Mortal Kombat X">
                <div id= "gamesIcons">
                    <a href = "../products/pc/mkxpc.php"><img class="img-fluid" src="../media/icons/pcicon.png" alt="Mortal Kombat X for PC"></a>
                    <a href = "../products/games/mkxxbox.php"><img class="img-fluid" src="../media/icons/xboxicon.jpg" alt="Mortal Kombat X for Xbox"></a>
                    <a href = "../products/games/mkxps4.php"><img class="img-fluid" src="../media/icons/ps4icon.jpg" alt="Mortal Kombat X for PS4"></a>
                </div>
            </div>

            <div class="col-xs-4">
                <img id= "gamesSection" class="img-fluid" src="../media/products/productpreviews/witcher3.png" alt="Witcher 3">
                <div id= "gamesIcons">
                    <a href = "../products/games/witcher3pc.php"><img class="img-fluid" src="../media/icons/pcicon.png" alt="Witcher 3 for PC"></a>
                    <a href = "../products/games/witcher3xbox.php"><img class="img-fluid" src="../media/icons/xboxicon.jpg" alt="Witcher 3 for Xbox"></a>
                    <a href = "../products/games/witcherps4.php"><img class="img-fluid" src="../media/icons/ps4icon.jpg" alt="Witcher 3 for PS4"></a>
                </div>
            </div>

            <div class="col-xs-4  text-left">
                <img id= "gamesSection" class="img-fluid" src="../media/products/productpreviews/botw.png" alt="Breath of the Wild">
                <div id= "gamesIcons">
                    <a href = "../products/games/botwswitch.php"><img class="img-fluid" src="../media/icons/switchicon.jpg" alt="Breath of the Wild for Switch"></a>
                </div>
            </div>
        </div>

    </div>
<?php commonFooter();?>
        
        
        
        
