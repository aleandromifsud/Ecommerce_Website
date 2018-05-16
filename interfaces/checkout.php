<?php include '../common.php'; headerCommon();?>

<?php navBarCommon();?>

    <div id="checkoutID" class="container-fluid">
        <div class="page-header">
            <h1>Checkout </h1>
        </div>

        <!-- Start Row of checkout-->

        <div class="row">
            <div class="col-lg-1"></div>
            <!--- Start Address column-->
            <div class="col-lg-5">
                <h3>Shipping Address</h3>
                <!-- Start List Group-->
                <div class="list-group">
                    <!-- Start Saved Address List Group-->
                    <div class="list-group-item">
                        <div class="list-group-item-heading">
                            <div class="row radio">
                                <div class="col-xs-3">
                                    <label>
                                        <input type="radio" name="optionShipp" id="optionShipp2" value="option2">
                                        Saved Address
                                    </label>
                                </div>
                                <div class="col-xs-5">
                                    <dl class="dl-small">
                                        <dt>Corey Taylor</dt>
                                        <dd>4269 Slipknot Avenue California CF 2402 USA</dd>
                                    </dl>
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm">Delete this address</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Saved Address List Group-->
                    <div class="list-group-item">
                        <div class="list-group-item-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionShipp" id="optionShipp2" value="option2" checked>
                                            A new address
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-9">
                                    <form role="form" class="">
                                        <div class="form-group">
                                            <label for="inputname">Name</label>
                                            <input type="text" class="form-control form-control-large" id="inputname" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress1">Street address 1</label>
                                            <input type="text" class="form-control form-control-large" id="inputAddress1" placeholder="Enter address">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Street address 2</label>
                                            <input type="text" class="form-control form-control-large" id="inputAddress2" placeholder="Enter address">
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="form-group">
                                                    <label for="inputZip">ZIP Code</label>
                                                    <input type="text" class="form-control form-control-small" id="inputZip" placeholder="Enter zip">
                                                </div>
                                            </div>
                                            <div class="col-xs-9">
                                                <div class="form-group">
                                                    <label for="inputCity">City</label>
                                                    <input type="text" class="form-control" id="inputCity" placeholder="Enter city">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputState" class="control-label">Country</label>
                                            <select class="form-control form-control-large">
                                                <option>Select Country</option>
                                                <option>Malta</option>
                                                <option>England</option>
                                                <option>USA</option>
                                                <option>Germany</option>
                                            </select>
                                        </div>
                                    </form>
                                    <button class="btn btn-sm">Save Address</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End List Group-->

            </div>
            <!-- End Address Column-->

            <div class="col-lg-5">
                <h3>Products</h3>
                <!-- Start List Group-->
                <div class="list-group">
                    <!-- Start Products List Group-->
                    <div class="list-group-item">
                        <div class="row cartHead">
                        <p class="col-sm-9">Nintendo Switch</p>
                              <div class="col-sm-3">
                                  <p>Quantity: 1</p>
                               </div>
                        </div>
                               <p>Price : 300 Euro</p>
                               <div id="removeButton">
                                       <button class="btn btn-default btn-warning pull-right">Remove</button>
                               </div>
                          </div>
                    </div>
                    <!-- End of Products List group-->
                </div>
            </div>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <button id="buyButton" type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#payModal">Proceed To Payment</button>
            </div>
        </div>
    </div>



        <!-- End Row of checkout-->

    <div id="payModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Enter Card Credentials </h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="">
                        <div class="form-group">
                            <label for="cardName">Full Name As On Card</label>
                            <input type="text" class="form-control form-control-large" id="cardName" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="cardNumber">Card Number</label>
                            <input type="number" class="form-control form-control-large" id="cardNumber" placeholder="Enter Card Number">
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label for="CVV">CVV Code</label>
                                    <input type="number" class="form-control form-control-small" id="CVV" placeholder="CVV">
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="form-group">
                                    <label for="expDate">Expiration Date</label>
                                    <input type="text" class="form-control" id="expDate" placeholder="Enter Expiration Date">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Proceed</button>
                </div>
            </div>

        </div>
    </div>




<?php commonFooter();?>