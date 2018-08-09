<?php 
$audience = 'admin';
$section = 'moderator';
$page_title = 'User maintenance';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/admin-styles.php') ?>
</head>
<body>
<?php include('includes/all-custom-header.php') ?>
<?php include('includes/admin-appheader.php') ?>
<div class="container pt-3">
    <div class="row">
        <div class="col-12">
            <div class="main-content" id="main-content">
                <div class="row no-gutters mb-3 justify-content-between align-items-center">
                    <div class="col-12 col-md-6">
                        <h1> <?php echo $page_title; ?></h1>
                    </div>
                    <div class="col-auto pr-4 border-right">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                            <label class="form-check-label" for="defaultCheck1">Warned/revoked users only</label>
                        </div>
                    </div>
                    <div class="col pl-4">
                        <form novalidate ng-reflect-form="[object Object]" class="ng-pristine ng-valid ng-touched">
                            <label class="sr-only" id="termsLabel">
                                <message key="admin.ads.field.searchTerms" ng-reflect-key="admin.ads.field.searchTerms">Find an Ad</message>
                            </label>
                            <div class="input-group">
                                <input aria-labelledby="termsLabel" class="form-control ng-pristine ng-valid ng-touched" formcontrolname="terms" type="text" ng-reflect-name="terms">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"> <i aria-hidden="true" class="fa fa-search"></i> <span class="sr-only">
                                    <message key="global.button.search" ng-reflect-key="global.button.search">Search</message>
                                    </span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-link" type="button">
                        <message key="admin.buttons.clear" ng-reflect-key="admin.buttons.clear">Clear</message>
                        </button>
                    </div>
                </div>
                <table class="table rbt-table-responsive table-actions">
                    <thead>
                        <tr>
                            <th> Username</th>
                            <th><strong>Person Id</strong></th>
                            <th>Status</th>
                            <th><span class="sr-only">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">thrclark</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0001328543</span></td>
                            <td>Warned</td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#maintain_user"  >View activity</button></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">tewtband</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0003023985</span></td>
                            <td>Warned</td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm" id="demojs_btn_togglerow">View activity</button></td>
                        </tr>
                        <tr class="demojs-detailrow" style="display:none">
                            <td colspan="4" style="white-space: inherit"><div class="rbt-ts-20">Viewing activity for 'tewtband'</div>
                                <div class="row">
                                    <div class="col border-right">
                                        <ul class="rvb-timeline mt-3" style="display:none">
                                            <li>
                                                <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/10/2018</span> <span>4:33 PM</span></time>
                                                <div class="rvb-timeline-marker bg-success"></div>
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title">System access reinstated by admin</h2>
                                                        </div>
                                                        <div class="col-auto"><span class="rbt-icon-ellipsis"></span></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/07/2018</span> <span>12:09 PM</span></time>
                                                <div class="rvb-timeline-marker bg-danger"></div>
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title">System access revoked by admin</h2>
                                                        </div>
                                                        <div class="col-auto"><span class="rbt-icon-ellipsis"></span></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/07/2018</span> <span>12:09 PM</span></time>
                                                <div class="rvb-timeline-marker bg-danger"></div>
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title">Ads deactivated by admin</h2>
                                                        </div>
                                                        <div class="col-auto"><span class="rbt-icon-ellipsis"></span></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/07/2018</span> <span>10:04 AM</span></time>
                                                <div class="rvb-timeline-marker bg-success"></div>
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title">Ad verified, accepted by admin</h2>
                                                        </div>
                                                        <div class="col-auto"><span class="rbt-icon-ellipsis"></span></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/07/2018</span> <span>09:38 AM</span></time>
                                                <div class="rvb-timeline-marker bg-danger"></div>
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title">Ad reported by 'jcoltrane'</h2>
                                                        </div>
                                                        <div class="col-auto"><span class="rbt-icon-ellipsis"></span></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/07/2018</span> <span>08:16 AM</span></time>
                                                <div class="rvb-timeline-marker bg-danger"></div>
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title">Ad reported by 'sostitt'</h2>
                                                        </div>
                                                        <div class="col-auto"><span class="rbt-icon-ellipsis"></span></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/07/2018</span> <span>03:45 AM</span></time>
                                                <div class="rvb-timeline-marker bg-success"></div>
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title">Ad posted</h2>
                                                        </div>
                                                        <div class="col-auto"><span class="rbt-icon-ellipsis"></span></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/07/2018</span> <span>03:42 AM</span></time>
                                                <div class="rvb-timeline-marker bg-success"></div>
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title">Ad posted</h2>
                                                        </div>
                                                        <div class="col-auto"><span class="rbt-icon-ellipsis"></span></div>
                                                    </div>
                                                    <div class="row mt-3 border-top">
                                                        <div class="col">
                                                            <dl class="row mt-3">
                                                                <dt class="col-sm-2">Ad title</dt>
                                                                <dd class="col-sm-10">Apartment for lease</dd>
                                                                <dt class="col-sm-2">Description</dt>
                                                                <dd class="col-sm-10">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus. </dd>
                                                                <dt class="col-sm-2">Price</dt>
                                                                <dd class="col-sm-10">$300</dd>
                                                            </dl>
                                                            <button class="btn btn-sm btn-outline-primary">View ad</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-sm btn-primary mb-2">Action1</button>
                                        <br>
                                        <button class="btn btn-sm btn-outline-primary mb-2">Action2</button>
                                        <br>
                                        <button class="btn btn-sm btn-outline-primary mb-2">Action3</button>
                                    </div>
                                </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">zealfleo</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0003956434</span></td>
                            <td>Access revoked</td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#maintain_user"  >View activity</button></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">languid</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0002534347</span></td>
                            <td>Warned</td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#maintain_user"  >View activity</button></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">accljones</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0004436419</span></td>
                            <td>Access revoked</td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#maintain_user"  >View activity</button></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">sgdsteven</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0002635478</span></td>
                            <td>Access revoked</td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#maintain_user"  >View activity</button></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">lerrome</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0002888753</span></td>
                            <td>Warned</td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#maintain_user"  >View activity</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('modals/modal-admin-maintainuser.php') ?>
<?php include('includes/admin-footerscripts.php') ?>



<script>
$(document).ready(function(){
    $("#demojs_btn_togglerow").click(function(){
        $(".demojs-detailrow, .rvb-timeline").slideToggle();
    });
});
</script>



</body>
</html>
