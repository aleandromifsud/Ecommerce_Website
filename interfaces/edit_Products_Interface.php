<?php require '../common.php';
headerCommon();

require '../vendor/autoload.php';

$uri = "mongodb://localhost:27017/ecommerce";
$client = new MongoDB\Client($uri);

$id = $_GET['id'] ?? '';


$db = $client->ecommerce;

$collection = $db->Products;
$cursor = $collection->findOne(['_id' => (int)$id]);

 navBarCommon(); ?>

<div class = "container-fluid">
    <div = "row">
    <div class = "col-lg-offset-2 col-lg-8 editProf">
        <h1>Edit Products</h1>
    <form action="<?php echo '../php/products/edit_product.php?id=' .$cursor['_id']?>"  enctype="multipart/form-data" method="POST" id="addProdForm">
        <div class="form-group">
            <label for="PName">Product Name :</label>
            <input type="text" name="Pname" class="form-control" id="PName" value="<?php echo $cursor['name'];?>">
        </div>
        <div class="form-group">
            <label for="Price">Price :</label>
            <input type="number" name="PPrice" class="form-control" id="Price" value="<?php echo $cursor['price'];?>" >
        </div>
        <div class="form-group">
            <label for="Model">Model :</label>
            <input type="text" name="Pmodel" class="form-control" id="Model" value="<?php echo $cursor['model'];?>">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="Pcat" class="form-control" id="category" value="<?php echo $cursor['category'];?>">
        </div>
        <div class="form-group">
            <label for="tags">Tags:</label>
            <input name="Ptags" class="form-control" id="tags" value="<?php echo $cursor['tags'];?>">
        </div>
        <div class="form-group">
            <label for="desc">Description:</label>
            <input name="Pdesc" class="form-control" id="desc" value="<?php echo $cursor['product description'];?>">
        </div>
        <div class="form-group">
            <label for="condition">Condition</label>
            <input name="Pcond" class="form-control" id="condition" value="<?php echo $cursor['condition'];?> ">
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" name="PStock" class="form-control" id="stock" value="<?php echo $cursor['stock'];?>">
        </div>
        <button type="submit" id="addProductSub" class="btn btn-default pull-right subButt">Submit</button>
    </form>
    </div>
    </div>
</div>




<?php commonFooter(); ?>
