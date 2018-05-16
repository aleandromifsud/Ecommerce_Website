<?php include '../common.php';
headerCommon();
require '../vendor/autoload.php';

$uri = "mongodb://localhost:27017/ecommerce";
$client = new MongoDB\Client($uri);

$db = $client->ecommerce;

$collection = $db->Products;
$cursor = $collection->find(["category" => "Mouse And Keyboard"]);
navBarCommon(); ?>

    <div id="sectionID" class="container-fluid">

        <h1 class="categoryHeads text-center">Keyboards and Mice</h1>

        <h4>Stylish accessories to make your desktop setup more fun.</h4>

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
                    <option>Keyboard</option>
                    <option>Mice</option>
                    <option>High End</option>
                    <option>Mid Tier</option>
                    <option>Low End</option>
                </select>
            </div>
        </div>


        <div class="row text-center previews">
            <?php foreach ($cursor as $doc) {?>
                <div class=" col-md-3 looper">
                    <a href ="<?php echo '../products/product_template_general.php?id=' .$doc['_id']?>"><img class="img-fluid auto-img" src="<?php echo $doc['image directory']; ?>" alt="<?php echo $doc['name']; ?>"></a>
                    <h4 class="text-right catButtonText"> <?php echo $doc['name']; ?></h4>
                </div>
            <?php } ?>
        </div>

    </div>
<?php commonFooter(); ?>