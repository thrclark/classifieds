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
                <li> <a href="php/main-home.php" target="_blank">Main View</a> </li>
                <li> <a href="php/main-home-customheader.php" target="_blank">Main View w/ custom header</a> </li>
                <li><a href="php/main-searchresults.php" target="_blank">Search Result</a> </li>
                <li><a href="php/main-myads.php">My Ads</a> </li>
                <li><a href="php/main-watchlist.php" target="_blank">My Watchlist</a> </li>
                <li><a href="php/main-music.php" target="_blank">Category View</a> </li>
                <li><a href="php/main-postad.php" target="_blank">Post Ad</a> </li>
                <li><a href="php/main-postad-has-errors1.php" target="_blank">Post Ad - errors 1</a> </li>
                <li><a href="php/main-postad-has-errors2.php" target="_blank">Post Ad - errors 2</a> </li>
                <li><a href="php/main-postad-success1.php" target="_blank">Post Ad - success 1</a> </li>
                <li><a href="php/main-postad-success2.php" target="_blank">Post Ad - success 2</a> </li>
            </ul>
        </div>
        <div class="col">
            <h2 class="h3"> Admin Views</h2>
            <ul>
                <li><a href="php/admin-ads.php" target="_blank">All ads</a> </li>
                <li><a href="php/admin-branding.php" target="_blank">Branding</a> </li>
                <li><a href="php/admin-categories.php" target="_blank">Categories</a> </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <hr>
    on <a href="https://github.com/thrclark/classifieds" target="_blank">Github</a> </div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
