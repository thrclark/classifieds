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
<?php include('includes/main-mobiledrawer.php') ?>
<div id="main">	
    <?php include('includes/main-appheader.php') ?>
    <section class="main-content pt-3" role="main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mobile-panel search">
                        <div class="mobile-panel-header">
                            <h2 class="h4">Search Ads</h2>
                        </div>
                        <div class="search-container">
                            <div class="row align-items-center">
                                <div class="col clear-field">
                                    <label for="mainsearch-mobile" class="sr-only">Search</label>
                                    <input type="text" class="form-control search-input" id="mainsearch-mobile" placeholder="">
                                    <div class="cleartext" style="display:none"> <i class="fa fa-window-close"></i></div>
                                </div>
                                <div class="col-auto search-button text-right"> <a href="main-searchresults.php" class="btn btn-dark"> <i class="fa fa-search" aria-hidden="true"></i> <span class="search-label d-none d-lg-inline">Search</span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('modals/modal-main-ad-detail.php') ?>
        <?php include('modals/modal-policy.php') ?>
    </section>
    <?php include('includes/main-footer-menu.php') ?>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
