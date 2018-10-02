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
    <main class="main-content">
        <router-outlet></router-outlet>
        <ng-component>
            <div class="row mb-3 no-gutters align-items-center">
                <div class="col-12 col-sm">
                    <h1> <?php echo $page_title; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-<form novalidate class="  ">
                                <div class="form-group">
                                    <label class="control-label" id="nameLabel">
                                        <message key="admin.field.name">Name</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="nameDirections">
                                        <message key="admin.market.name.directions">The name used to identify this.</message>
                                    </div>
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <input aria-labelledby="nameLabel nameDirections" ccfvalidated="" class="form-control" id="isinvalid" formcontrolname="name" type="text">
                                            <span class="badge badge-success"> 100 </span> </div>
                                    </countdown>
                                    <errors controlname="name">
            							<div class="invalid-feedback" style="display: none;"><span class="rbt-icon-circle-close" aria-hidden="true"></span> Required </div>
        							</errors>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" id="shortNameLabel">
                                        <message key="admin.market.field.shortName">Short Name <span class="small font-italic">(optional)</span></message>
                                    </label>
                                    <div class="ccf-instructional-text" id="shortNameDirections">
                                        <message key="admin.market.field.shortName.directions">If necessary, the short name will be displayed instead of the full name.</message>
                                    </div>
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <input aria-labelledby="shortNameLabel shortNameDirections" ccfvalidated="" class="form-control ng-valid" formcontrolname="shortName" type="text">
                                            <span class="badge badge-success"> 5 </span> </div>
                                    </countdown>
                                    <errors controlname="shortName"> 
                                        <!----> 
                                    </errors>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" id="uniqueKeyLabel">
                                        <message key="admin.field.uniqueKey">Unique Key</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="uniqueKeyDirections">
                                        <message key="admin.market.field.uniqueKey.directions">A unique value that can be matched to the user attribute selected by the Market User Attribute setting. This allows configuration of a default ad filter for users on initial login.</message>
                                    </div>
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <input aria-labelledby="uniqueKeyLabel uniqueKeyDirections" ccfvalidated="" class="form-control" id="isinvalid2" formcontrolname="uniqueKey" type="text">
                                            <span class="badge badge-success"> 100 </span> </div>
                                    </countdown>
                                    <errors controlname="uniqueKey">
            							<div class="invalid-feedback" style="display: none;"><span class="rbt-icon-circle-close" aria-hidden="true"></span> Required </div>
        							</errors>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" id="liveDataKeyLabel">
                                        <message key="admin.market.field.liveDataKey">Live Data Key <span class="small font-italic">(optional)</span></message>
                                    </label>
                                    <div class="ccf-instructional-text" id="liveDataKeyDirections">
                                        <message key="admin.market.field.liveDataKey.directions">Allows filtering of ads in the Live Data API. See API Documentation for more information.</message>
                                    </div>
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <input aria-labelledby="liveDataKeyLabel liveDataKeyDirections" ccfvalidated="" class="form-control   ng-valid" formcontrolname="liveDataKey" type="text">
                                            <span class="badge badge-success"> 100 </span> </div>
                                    </countdown>
                                    <errors controlname="liveDataKey"> 
                                        <!----> 
                                    </errors>
                                </div>
                                <form-invalid-alert> 
                                    <!----> 
                                </form-invalid-alert>
                                <div class="rbt-button-group mb-5">
                                    <button class="btn btn-primary">
                                    <message key="global.buttons.save">Save</message>
                                    </button>
                                    <a class="btn btn-outline-primary" routerlink="/markets" href="admin-campuses.php">
                                        <message key="global.buttons.cancel">Cancel</message>
                                    </a> </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </ng-component>
    </main>
</div>
<?php include('includes/admin-footerscripts.php') ?>
<script>
$(document).ready(function() {
	$('button').on('click',function(){
		$(".invalid-feedback").css("display","block");
		$("#isinvalid").addClass("is-invalid");
		$("#isinvalid2").addClass("is-invalid");
	});
});

</script>
</body>
</html>
