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
        <div class="col-12">
            <div class="main-content">
                <router-outlet></router-outlet>
                <ng-component>
                    <section>
                        <div class="row mb-3 no-gutters align-items-center">
                            <div class="col-12 col-sm">
                                <h1> <?php echo $page_title; ?></h1>
                            </div>
                        </div>
                        <p>
                            <message key="admin.documentation.message">These documentation links are available publicly to share with developers/programmers.</message>
                        </p>
                        <a href="docs/v1/apiGuide.html" target="_blank">
                            <message key="admin.documentation.version">Version 1</message>
                        </a> </section>
                </ng-component>
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
