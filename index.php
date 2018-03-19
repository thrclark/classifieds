<?php 
$section = '';
$page_title = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>IU Classifieds</title>
<link href="css/admin.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
            <h2 class="h3">Main Views</h2>
            <ul>
                <li> <a href="php/main-home.php" target="_blank">Main View</a></li>
                <li> <a href="php/main-home-customheader.php" target="_blank">Main View w/ custom header</a></li>
                <li><a href="php/main-searchresults.php" target="_blank">Search Result</a></li>
                <li><a href="php/main-myads.php">My Ads</a></li>
                <li><a href="php/main-watchlist.php" target="_blank">My Watchlist</a></li>
                <li><a href="php/main-music.php" target="_blank">Category View</a></li>
                <li><a href="php/main-postad.php" target="_blank">Post Ad</a></li>
                <li><a href="php/main-postad-validation.php" target="_blank">Post Ad - Validation</a></li>
            </ul>
        </div>
        <div class="col">
            <h2 class="h3"> Admin Views</h2>
            <ul>
                <li><a href="php/admin-userads.php" target="_blank">Moderator</a></li>
                <li><a href="php/admin-sysparameters.php" target="_blank">System Parameters</a></li>
                <li><a href="php/admin-branding.php" target="_blank">Branding Configuration</a></li>
            </ul>
        </div>
        <div class="col">
            <h2 class="h3"> Components &amp; Templates</h2>
            <ul>
                <li><a href="php/components-main.php" target="_blank">Component styling (main.css)</a></li>
                <li><a href="php/components-admin.php" target="_blank">Component styling (admin.css)</a></li>
                <li><a href="php/template-admin-index.php" target="_blank">Index Layout Template</a></li>
                <li><a href="php/template-admin-form.php" target="_blank">Form Layout Template</a></li>
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
