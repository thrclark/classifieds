<?php 
$audience = "main";
$page_title = "Ads from: 'sampleUser'";	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/main-styles.php') ?>
<style>
@media (max-width: 567px) {
  .btn-responsive {
    padding:2px 4px;
    font-size:80%;
    line-height: 2;
    border-radius:3px;
  }
}
</style>
</head>
<body>
<div id="main">
    <?php include('includes/main-appheader.php') ?>
    <section class="main-content pt-3" role="main">
        <div class="container">
            <div class="row">
                <div class="col-3 d-none d-md-block nav-section">
                    <?php include('includes/main-nav.php') ?>
                </div>
                <div class="col-xs-12 col-md-9 main-content-section" role="main">
                    <div class="row align-items-center section-head">
                        <div class="col-12 section-head-title">
                            <h1 class="mb-2"> <?php echo $page_title; ?>
                            	<button onclick="location.href='main-home.php';" class="btn btn-link rbt-ts-20" style="padding: 5px;"><i class="rbt-icon-close-circle"></i></button>
                            </h1>
                        </div>
                        <div class="col-12">
                            <?php include('includes/main-section-utilities-user.php') ?>
                        </div>
                    </div>
                    <?php include('includes/main-ads-user.php') ?>
                </div>
            </div>
        </div>
        <?php include('modals/modal-main-ad-detail-user.php') ?>
        <?php include('modals/modal-main-ad-detail-reported.php') ?>
    </section>
    <?php include('includes/main-footer-menu.php') ?>
</div>
<?php include('includes/main-custom-footer.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
