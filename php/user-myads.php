<?php 
$page_title = 'cat_myads';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include('includes/user-styles.php') ?>
</head>
<body>
<?php include('includes/user-mobiledrawer.php') ?>
<div id="main">
    <?php include('includes/user-appheader.php') ?>
    <?php include('includes/user-mobilepanel-search.php') ?>
    <?php include('includes/user-mobilepanel-post.php') ?>
    <?php include('includes/user-mobilepanel-categories.php') ?>
    <section class="main-content" style="display:">
        <div class="container">
            <div class="row">
                <div class="col-3 main-nav d-none d-md-block">
                    <?php include('includes/user-nav.php') ?>
                </div>
                 <div class="col-xs-12 col-md-9 main-content-section" role="main">
                    <div class="row align-items-center section-head">
                        <div class="col-auto section-head-title">
                            <h2 class="">My Ads</h2>
                        </div>
                        <div class="col-12">
                                  <?php include('includes/user-section-utilities.php') ?>
                        </div>
                    </div>
                    <?php include('includes/user-ads-myads.php') ?>
                </div>
            </div>
        </div>
    </section>
    <?php include('includes/user-footer-menu.php') ?>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
