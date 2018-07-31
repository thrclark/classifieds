<?php 
$audience = 'admin';
$section = 'moderator';
$page_title = 'Reindex ad';
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
                <div class="doc-header mb-3">
                    <div class="row">
                        <div class="col doc-title">
                            <h1> <?php echo $page_title; ?></h1>
                        </div>
                        <div class="col doc-controls"> 
                            <!-- <button type="button" class="btn btn-outline-secondary btn-sm float-md-right">Restrict User</button>--> 
                        </div>
                    </div>
                </div>
                <form novalidate="" class="ng-untouched ng-pristine ng-valid">
                    <div class="form-group">
                        <label id="postingIdLabel">
                            <message key="admin.cache.ad.reindex.label">Ad Id</message>
                        </label>
                        <div class="small" id="postingIdDirections">
                            <message key="admin.cache.ad.reindex.directions">Enter the Ad Id of the ad you would like to reindex.  This can be found the ad detail view URL on the main classifieds application.  If the Ad needs removed, it will be removed.  If the ad needs updating, it will update it.</message>
                        </div>
                        <input aria-labelledby="postingIdLabel, postingIdDirections" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="postingId" type="text">
                        <errors controlname="postingId"> 
                            <!----> 
                        </errors>
                    </div>
                    <p class="text-right">
                        <button class="btn btn-sm btn-primary" type="submit">
                        <message key="admin.buttons.view">View</message>
                        </button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
