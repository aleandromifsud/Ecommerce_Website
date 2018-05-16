<?php include '../common.php';
headerCommon(); ?>

<?php navBarCommon(); ?>
<!-- First section for the scroll spy-->

<!-- Beginning of profile code -->

<div class="proContainer container">
    <div class="row">
        <div class="proPicWrap col-sm-3">
            <img title="profile image" class="img-square img-fluid" src="../media/icons/userpic.png">
        </div>

        <div class="proNameMsg col-sm-9">
            <h1 class="">Username123</h1>
            <button type="button" class="msgBtn btn">Classified Request</button>
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
                    <span class="pull-left"><strong class="userDetails">Name:</strong></span>John snew
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
                <div class="panel-heading">Username123's Bio</div>
                <div class="panel-body">Your average consumer</div>
            </div>

            <!--Transactions n money stuff code start-->
            <div class="panel panel-default">
                <div class="panel-heading">Purchases</div>
                <div class="userDetails container pendingContainer">
                    <table class="table table-condensed table-responsive">
                        <thead>
                        <tr>
                            <th>Purchase ID</th>
                            <th>Username</th>
                            <th>Date&amp;Time</th>
                            <th>Details</th>

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

                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Posted Classified Requests</div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Credit Card Info</div>
            </div>
            <!--Transactions n money stuff code end-->
        </div>
    </div>
</div>


<!-- End       of profile code -->

<!-- End of Contact Us -->

<?php commonFooter(); ?>


