<?php 
$audience = 'admin';
$section = 'appconfig';
$page_title = 'reloadcache';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/admin-styles.php') ?>
<style type="text/css">
.btn-outline-secondary:active, .btn-outline-secondary.active, .show > .btn-outline-secondary.dropdown-toggle {
	color: #868e96;
	background-color: white;
}
</style>
</head>
<body>
<?php include('includes/all-custom-header.php') ?>
<?php include('includes/admin-appheader.php') ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            <div id="adminNav">
                <?php include('includes/admin-nav.php') ?>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="main-content">
                <div class="doc-header mb-3">
                    <div class="row">
                        <div class="col doc-title">
                            <h2>Reload Cache</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
