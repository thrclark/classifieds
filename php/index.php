<?php 
$section = '';
$page_title = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include('includes/admin-styles.php') ?>
<style type="text/css">
.btn-outline-secondary:active, .btn-outline-secondary.active, .show > .btn-outline-secondary.dropdown-toggle {
	color: #868e96;
	background-color: white;
}
</style>
</head>
<body>
<div class="app-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-9">
                <h1>IU Classifieds </h1>
                <div class="">Prototypes</div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding-top:4rem">
    <div class="row">
        <div class="col">
            <h2 class="h3"> Publishing Views</h2>
            <ul>
                <li><a href="admin-template-index.php" target="_blank">Index Layout Template</a></li>
                <li><a href="admin-template-form.php" target="_blank">Form Layout Template</a></li>
            </ul>
            <hr>
            <ul>
                <li><a href="admin-sys-parameters.php" target="_blank">System Parameters</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container" style="padding-top:4rem">
    <div class="row">
        <div class="col">
            <h2 class="h3"> End User Views</h2>
            <ul>
                <li> <a href="user-home.php" target="_blank">Main View</a></li>
                <li> <a href="user-home-4wide.php" target="_blank">Main View - 4 wide</a></li>
                <li> <a href="user-home-3wide.php" target="_blank">Main View - 3 wide</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <hr>
    on <a href="https://github.com/thrclark/classifieds" target="_blank">Github</a></div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
