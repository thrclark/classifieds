<?php 
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
    <?php include('includes/main-mobilepanel-search.php') ?>
    <?php include('includes/main-mobilepanel-post.php') ?>
    <?php include('includes/main-mobilepanel-categories.php') ?>
    <section class="main-content pt-3" role="main">
        <div class="container">
            <div class="row">
                <div class="col-3 d-none d-md-block">
                    <ul class="nav flex-column user-options">
                        <li class="nav-item"> <a class="nav-link" href="main-myads.php">My Ads (2)</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="main-watchlist.php">Watchlist (4) <i aria-hidden="true" class="fa fa-star pull-right"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link" href="admin-branding.php">Admin</a> </li>
                    </ul>
                    <?php include('includes/main-nav.php') ?>
                </div>
                <div class="col-xs-12 col-md-9 main-content-section">
                    <div class="row align-items-center section-head">
                        <div class="col-auto section-head-title">
                            <h2 class="">IUK: All Ads</h2>
                        </div>
                        <div class="col-12">
                            <?php include('includes/main-section-utilities.php') ?>
                        </div>
                    </div>
                    <?php include('includes/main-ads-all.php') ?>
                    <?php include('includes/all-pagination.php') ?>
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
