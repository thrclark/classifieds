<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Markets';
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
<div class="container pt-3 mb-5">
    <div class="row">
        <div class="col-12">
            <main class="main-content" id="main-content">
                <h1> <?php echo $page_title; ?></h1>
            </main>
        </div>
    </div>
</div>
<?php include('includes/main-custom-footer.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
