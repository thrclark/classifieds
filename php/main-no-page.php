<?php 
$audience = 'main';
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
            <div class="ccf-not-found">
                    <h5>An unexpected error has occurred.  Please navigate to the <a href="main-home.php">homepage</a> and try again.  If the problem persists, contact support.</h5>
            </div>
        </div>
    </section>
    <?php include('includes/main-footer-menu.php') ?>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
