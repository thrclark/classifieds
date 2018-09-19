<?php 
$audience = 'admin';
$section = 'appconfig';
$page_title = 'Reload cache';
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
            <main class="main-content">
                <router-outlet></router-outlet>
                <ng-component>
                    <div class="row mb-3 no-gutters align-items-center">
                        <div class="col-12 col-sm">
                            <h1> <?php echo $page_title; ?></h1>
                        </div>
                    </div>
                    <div class="form-group">
                    	<p class="" id="postingIdDirections">
                            <message key="admin.cache.ad.reindex.directions">Occasionally, an ad may be improperly cached in the system while searching or browsing ads, causing it to incorrectly appear or not appear. To manually reload and correctly cache ads, select the button below. </message>
                        </p>
                        <button class="btn btn-primary" type="button" id="reloadAd">
                        <message key="admin.cache.reload.button">Reload</message>
                        </button>
                        <!---->
                    </div>
                    <div id="successMessage" style="display:none">
                    <div class="alert alert-success alert-dismissible fade show"  role="alert" >
                        <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                        <h4 class="alert-heading">Success!</h4>
                        <p>The cache has now been reloaded.</p>
                    </div>
                </div>
                </ng-component>
            </main>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
<script>
$(document).ready(function(){
    $("#reloadAd").click(function(){
    	$("#successMessage").show();
    });
});
</script>
</body>
</html>
