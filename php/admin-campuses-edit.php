<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Campuses';
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
    <div class="row mb-3 justify-content-between align-items-center">
        <div class="col">
            <h1> <?php echo $page_title; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="main-content" id="main-content">
                <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                    <div class="form-group">
                        <label class="control-label" id="nameLabel">
                            <message key="admin.field.name">Name</message>
                        </label>
                        <div class="ccf-instructional-text" id="nameDirections">
                            <message key="admin.market.name.directions">The name used to identify this.</message>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <countdown>
                                    <div class="rbt-charcount">
                                        <input aria-labelledby="nameLabel nameDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="name" type="text">
                                        <span class="badge badge-success"> 100 </span> </div>
                                </countdown>
                                <errors controlname="name"> 
                                    <!----> 
                                </errors>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" id="shortNameLabel">
                            <message key="admin.market.field.shortName">Short Name</message>
                        </label>
                        <div class="ccf-instructional-text" id="shortNameDirections">
                            <message key="admin.market.field.shortName.directions">If necessary, the short name will be displayed instead of the full name.</message>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <countdown>
                                    <div class="rbt-charcount">
                                        <input aria-labelledby="shortNameLabel shortNameDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="shortName" type="text">
                                        <span class="badge badge-success"> 5 </span> </div>
                                </countdown>
                                <errors controlname="shortName"> 
                                    <!----> 
                                </errors>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" id="uniqueKeyLabel">
                            <message key="admin.field.uniqueKey">Unique Key</message>
                        </label>
                        <div class="ccf-instructional-text" id="uniqueKeyDirections">
                            <message key="admin.market.field.uniqueKey.directions">A unique value that can be matched to the user attribute selected by the Market User Attribute setting. This allows configuration of a default ad filter for users on initial login.</message>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <countdown>
                                    <div class="rbt-charcount">
                                        <input aria-labelledby="uniqueKeyLabel uniqueKeyDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="uniqueKey" type="text">
                                        <span class="badge badge-success"> 100 </span> </div>
                                </countdown>
                                <errors controlname="uniqueKey"> 
                                    <!----> 
                                </errors>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" id="liveDataKeyLabel">
                            <message key="admin.market.field.liveDataKey">Live Data Key</message>
                        </label>
                        <div class="ccf-instructional-text" id="liveDataKeyDirections">
                            <message key="admin.market.field.liveDataKey.directions">Allows filtering of ads in the Live Data API. See API Documentation for more information.</message>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <countdown>
                                    <div class="rbt-charcount">
                                        <input aria-labelledby="liveDataKeyLabel liveDataKeyDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="liveDataKey" type="text">
                                        <span class="badge badge-success"> 100 </span> </div>
                                </countdown>
                                <errors controlname="liveDataKey"> 
                                    <!----> 
                                </errors>
                            </div>
                        </div>
                    </div>
                    <form-invalid-alert> 
                        <!----> 
                    </form-invalid-alert>
                    <p class="text-right">
                        <button class="btn btn-primary" type="submit">
                        <message key="global.buttons.save">Save</message>
                        </button>
                        <a class="btn btn-outline-primary" routerlink="/markets" href="admin-campuses.php">
                            <message key="global.buttons.cancel">Cancel</message>
                        </a> </p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
