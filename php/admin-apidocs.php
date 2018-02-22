<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'API documentation';
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
        <div class="col-12 col-md-3">
            <div id="adminNav">
                <?php include('includes/admin-nav.php') ?>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="main-content">
              <h1> <?php echo $page_title; ?></h1>
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
