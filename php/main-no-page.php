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
                    <h2>Unexpected error!</h2>
                    An unexpected error has occurred.  If the problem persists, contact support.  <a href="main-home.php">Go to homepage.</a>
            </div>
        </div>
    </section>
    <?php include('includes/main-footer.php') ?>
    <?php include('includes/main-footer-menu.php') ?>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
