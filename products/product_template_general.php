<?php include '../common.php';

require '../vendor/autoload.php';

$uri = "mongodb://localhost:27017/ecommerce";
$client = new MongoDB\Client($uri);

$id = $_GET['id'] ?? '';


$db = $client->ecommerce;

$collection = $db->Products;
$cursor = $collection->findOne(['_id' => (int)$id]);

headerCommon();
navBarCommon(); ?>
    <div id="sectionID" class="container-fluid">

        <h1 class="categoryHeads text-center"><?php echo $cursor['name'];?></h1>

        <h4><?php echo $cursor['model'];?></h4>

        <div class="row text-center previews productDiv">
            <div id="productImage" class=" col-xs-4 col-sm-offset-2 text-right">
                <a href="#"><img class="img-fluid" src="..<?php echo $cursor['image directory'];?>" alt="<?php echo $cursor['name'];?>"></a>
            </div>

            <div class=" col-xs-4  ">

                <div class="list-group">
                    <h4 class="list-group-item">Description</h4>
                    <!-- Start Products List Group-->
                    <div class="list-group-item">
                        <ul class="list-inline">
                            <li class="list-inline-item descLabel">Name :</li>
                            <li class="list-inline-item"><?php echo $cursor['name'];?></li>
                        </ul>

                        <ul class="list-inline">
                            <li class="list-inline-item descLabel">Price :</li>
                            <li class="list-inline-item"><?php echo $cursor['price'];?></li>
                        </ul>

                        <ul class="list-inline">
                            <li class="list-inline-item"><?php echo $cursor['product description'];?>
                        </ul>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <button class="btn btn-default btn-block btn-primary prodButt"> Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Products List group-->
            </div>
        </div>
    </div>
<?php commonFooter(); ?>