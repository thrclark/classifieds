<?php 
$audience = 'main';
$page_title = 'cat_all';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/main-styles.php') ?>
</head>
<body>
<div id="main">
    <?php include('includes/main-appheader.php') ?>
    <section class="main-content pt-3" role="main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mobile-panel-header">
                        <h1>Search Ads</h1>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" onclick="location.href = 'main-searchresults.php';"> <i aria-hidden="true" class="fa fa-search"></i> <span class="sr-only">
                            <message>Search</message>
                            </span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('modals/modal-main-ad-detail.php') ?>
    </section>
    <?php include('includes/main-footer-menu.php') ?>
</div>
<?php include('includes/main-custom-footer.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
