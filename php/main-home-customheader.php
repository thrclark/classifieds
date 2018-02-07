<?php 
$audience = 'main';
$page_title = 'All ads';
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
    <?php include('includes/all-customheader.php') ?>
    <?php include('includes/main-appheader.php') ?>
    
   
    
    <section class="main-content pt-3" role="main">
        <div class="container">
            <div class="row">
                <div class="col-3 d-none d-md-block nav-section">
                     <?php include('includes/main-user-options.php') ?>
                        <hr>
                        <?php include('includes/main-nav.php') ?>
                    
                </div>
                <div class="col-xs-12 col-md-9 main-content-section">
                    <div class="row align-items-center section-head">
                        <div class="col-auto section-head-title">
                             <h1 class="mb-1"> <?php echo $page_title; ?></h1>
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
