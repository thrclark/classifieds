<?php 
$section = '';
$page_title = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/head-styles.php') ?>
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
                <li><a href="template-index.php" target="_blank">Index Layout Template</a></li>
                <li><a href="template-form.php" target="_blank">Form Layout Template</a></li>
            </ul>
            
        </div>
    </div>
</div>

<div class="container" style="padding-top:4rem">
    <div class="row">
        <div class="col">
            <h2 class="h3"> End User Views</h2>
            <ul>
                <li>                Main View</li>
                <li>Create Ad</li>
            </ul>
        </div>
    </div>
</div>
<div class="container"><hr>
on <a href="https://github.com/thrclark/classifieds" target="_blank">Github</a></div>
<?php include ('includes/footer-scripts.php') ?>
</body>
</html>
