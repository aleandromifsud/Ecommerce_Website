<?php include '../common.php';
headerCommon();

require '../vendor/autoload.php';

$uri = "mongodb://localhost:27017/ecommerce";
$client = new MongoDB\Client($uri);

$db = $client->ecommerce;

$collection = $db->Products;
$cursor = $collection->find();
$productCount = $collection->count();

$userCollection = $db ->Users;
$cursor2 = $userCollection->find();
$userCount = $userCollection->count();



?>

<?php navBarCommon(); ?>
<!-- First section for the scroll spy-->

<div class="proContainer container">
    <div class="row">
        <div class="proPicWrap col-md-2">
            <img title="profile image" class="img-square img-fluid" src="../media/icons/userpic.png">
        </div>

        <div class="proNameMsg col-md-3">
            <h1 class="">Admin121</h1>
            <button type="button" class="msgBtn btn">Classified Request</button>
        </div>

        <div class="cmsButtons col-md-3 col-md-offset-5 pull-right">
            <button type="button" href="#" class="btn btn-primary btn-block btn-lg"   data-toggle="modal" data-target="#addProductModal">Add Product</button>
            <button type="button"  data-toggle="modal" data-target="#editProductModal" href="#" class="btn btn-warning btn-block btn-lg" >Edit Product</button>
            <button type="button"  data-toggle="modal" data-target="#deleteProductModal" href="#" class="btn btn-danger btn-block btn-lg">Remove Product</button>
        </div>

        <!-- Modal -->
        <div id="addProduct" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <hr>

    <div class="row">
        <!--left column profile code start-->
        <div class="col-sm-3">
            <!--Profile Info Code Start-->
            <ul class="proDiscribe list-group">
                <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                <li class="list-group-item text-right">
                    <!--Rating Code Start-->
                    <div class="rating-block text-center">
                        <h2 class="bold padding-bottom-6">3.7
                            <small>/5</small>
                        </h2>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                    </div>
                    <!--Rating Code End-->
                </li>
                <li class="userDetails list-group-item text-right">
                    <span class="pull-left"><strong class="userDetails">Name:</strong></span>Ben Dover
                </li>
                <li class="userDetails list-group-item text-right"><span class="pull-left"><strong class="userDetails">Phone: </strong></span>
                    12323412
                </li>
                <li class="userDetails list-group-item text-right">
                    <span class="pull-left"><strong class="userDetails">Email:</strong></span>BenD@overmail.com
                </li>

            </ul>
            <!--Profile Info Code End-->
            <!--Information Code start-->
            <ul class="list-group">
                <li class="list-group-item">Information<i class="proTitles"></i>

                </li>
                <li class="userDetails list-group-item text-right"><span class="pull-left"><strong
                                class="">Rank:</strong></span> Veteran
                </li>
                <li class="userDetails list-group-item text-right"><span class="pull-left"><strong
                                class="">Points:</strong></span> 134.21k
                </li>
                <li class="userDetails list-group-item text-right"><span class="pull-left"><strong
                                class="">Sales:</strong></span> 312
                </li>
                <li class="userDetails list-group-item text-right"><span class="pull-left"><strong
                                class="">Replies:</strong></span> Immediate
                </li>
            </ul>
            <!--Information Code End-->
        </div>
        <!--left column profile code end-->

        <!--right column profile code start-->
        <div class="col-sm-9" style="" contenteditable="false">

            <div class="panel panel-default">
                <div class="panel-heading">Website Overview</div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td>
                                <button type="button" data-toggle="modal" data-target="#UsersModal" href="#"
                                        class="btn btn-info infoBtn">Users
                                </button>
                            </td>
                            <td><?php echo $userCount ?></td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" data-toggle="modal" data-target="#productsModal" href="#"
                                        class="btn btn-info infoBtn">Products
                                </button>
                            </td>
                            <td><?php echo $productCount ?></td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" data-toggle="modal" data-target="#Visitors" href="#"
                                        class="btn btn-info infoBtn">Visitors
                                </button>
                            </td>
                            <td>400</td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" data-toggle="modal" data-target="#productsSoldModal" href="#"
                                        class="btn btn-info infoBtn">Products sold this month
                                </button>
                            </td>
                            <td>41</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modals starts-->
            <!-- Users Modal -->
            <div id="UsersModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title CMSModals">Users</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th> Email</th>
                                    <th> Number</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($cursor2 as $doc) {?>
                                    <tr>
                                        <td><?php echo $doc['name']; ?></td>
                                        <td><?php echo $doc['surname']; ?></td>
                                        <td><?php echo $doc['email']; ?></td>
                                        <td><?php echo $doc['phoneNum']; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <div id="productsModal" class="modal fade " role="dialog">
                <div class="modal-dialog modal-lg">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title CMSModals">Products</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th> Model</th>
                                    <th> Category</th>
                                    <th> Condition</th>
                                    <th> Date Added</th>
                                    <th> Stock</th>
                                </tr>
                                </thead>
                                <tbody id="productModContent">
                                <?php foreach ($cursor as $doc) {?>
                                    <tr>
                                        <td><?php echo $doc['name']; ?></td>
                                        <td><?php echo $doc['price']; ?></td>
                                        <td><?php echo $doc['model']; ?></td>
                                        <td><?php echo $doc['category']; ?></td>
                                        <td><?php echo $doc['condition']; ?></td>
                                        <td><?php echo $doc['date']; ?></td>
                                        <td><?php echo $doc['stock']; ?></td>
                                        <td> <a type="button"  href="<?php echo '../interfaces/edit_Products_Interface.php?id=' .$doc['_id']?>"
                                                     class="btn btn-info infoBtn">Edit
                                            </a></td>
                                        <td> <a type="submit" href="<?php echo '../php/products/delete_product.php?id=' .$doc['_id']?>"
                                                class="btn btn-info infoBtn">Delete
                                            </a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>



            <div class="panel panel-default">
                <div class="panel-heading">Admin121's Bio</div>
                <div class="panel-body">Original Admin of GGez</div>
            </div>

            <!--Transactions n money stuff code start-->
            <div class="panel panel-default">
                <div class="panel-heading">Pending Classified Requests</div>
                <div class="userDetails container pendingContainer">
                    <table class="table table-condensed table-responsive">
                        <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>Username</th>
                            <th>Date&amp;Time</th>
                            <th>Details</th>
                            <th>Confirm?</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                [CONTENT]
                            </td>
                            <td>
                                [CONTENT]
                            </td>
                            <td>
                                [CONTENT]
                            </td>
                            <td>
                                <button type="button" class="btn btn-info infoBtn">Info</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                [CONTENT]
                            </td>
                            <td>
                                [CONTENT]
                            </td>
                            <td>
                                [CONTENT]
                            </td>
                            <td>
                                <button type="button" class="btn btn-info infoBtn">Info</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                [CONTENT]
                            </td>
                            <td>
                                [CONTENT]
                            </td>
                            <td>
                                [CONTENT]
                            </td>
                            <td>
                                <button type="button" class="btn btn-info infoBtn">Info</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                [CONTENT]
                            </td>
                            <td>
                                [CONTENT]
                            </td>
                            <td>
                                [CONTENT]
                            </td>
                            <td>
                                <button type="button" class="btn btn-info infoBtn">Info</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Processed Classified Requests</div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Purchase History</div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Credit Card Info</div>
            </div>
            <!--Transactions n money stuff code end-->
        </div>
    </div>
</div>


<!--Add Product Popup-->

<div class="modal fade" id="addProductModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="row">
                <div class="col-sm-12">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Product</h4>
                    </div>
                    <div class="modal-body">
                        <form action="../php/products/add_product.php"  enctype="multipart/form-data" method="POST" id="addProdForm">
                            <div class="form-group">
                                <label for="PName">Product Name :</label>
                                <input type="text" name="Pname" class="form-control" id="PName" >
                            </div>
                            <div class="form-group">
                                <label for="Price">Price :</label>
                                <input type="number" name="PPrice" class="form-control" id="Price" >
                            </div>
                            <div class="form-group">
                                <label for="Model">Model :</label>
                                <input type="text" name="Pmodel" class="form-control" id="Model" >
                            </div>
                            <div class="form-group">
                                <label for="organise2">Category</label>
                                <select name ="catBox" class="form-control" id="organise2">
                                    <option value="1">Prebuilt PC's</option>
                                    <option value="2">Consoles</option>
                                    <option value="3">Hand Helds</option>
                                    <option value="4">Games</option>
                                    <option value="5">Controllers</option>
                                    <option value="6">Headsets</option>
                                    <option value="7">Mice and Keyboards</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags:</label>
                                <textarea name="Ptags" class="form-control" id="tags" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="desc">Description:</label>
                                <textarea name="Pdesc" class="form-control" id="desc" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="organise2">Condition</label>
                                <select name="conditionBox" class="form-control" id="organise2">
                                    <option value="1">Excellent</option>
                                    <option value="2">Good</option>
                                    <option value="3">OK</option>
                                    <option value="4">Bad</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock:</label>
                                <input type="number" name="PStock" class="form-control" id="stock" >
                            </div>
                                <input name="photo" type="file"/>
                            <button type="submit" id="addProductSub" class="btn btn-default pull-right subButt">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<!-- End       of profile code -->

<!-- End of Contact Us -->

<?php commonFooter(); ?>


