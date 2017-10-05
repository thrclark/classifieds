<?php 
$page_title = 'cat_myads';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include('includes/user-styles.php') ?>
</head>
<body>
<?php include('includes/user-mobiledrawer.php') ?>
<div id="main">
    <?php include('includes/user-appheader.php') ?>
    <?php include('includes/user-mobilepanel-search.php') ?>
    <?php include('includes/user-mobilepanel-post.php') ?>
    <?php include('includes/user-mobilepanel-categories.php') ?>
    <section class="main-content" style="display:">
        <div class="container">
            <div class="row">
                <div class="col-3 main-nav d-none d-md-block">
                    <?php include('includes/user-nav.php') ?>
                </div>
                <div class="col-xs-12 col-md-9 main-content-section" style="">
                    <div class="row align-items-center section-head">
                        <div class="col-auto section-head-title">
                            <h2 class="">My Ads</h2>
                        </div>
                        <div class="col-12">
                            <div class="section-head-utilities">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="dropdown util-location"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="long-name">IU Kokomo</span> <span class="short-name">IUK</span></button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#"><span class="long-name">IU Bloomington</span></a> <a class="dropdown-item" href="#"><span class="long-name">IUPUI</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU Kokomo</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU Northwest</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU South Bend</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU East</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU South</span></a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><span class="long-name">All Campuses</span></a> </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="dropdown util-filter"><i class="fa fa-filter" aria-hidden="true"></i>
                                            <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class=" d-none d-sm-inline">All Ads</span></button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#"> Selling</a> <a class="dropdown-item" href="#"> Seeking</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">All Ads</a> </div>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <div class="btn-group util-view-switch d-none d-sm-inline" data-toggle="buttons">
                                            <label class="btn btn-sm btn-outline-dark active" id="set_grid">
                                                <input type="radio" name="options" id="" autocomplete="off" checked>
                                                <i class="fa fa-th-large" aria-hidden="true"></i> </label>
                                            <label class="btn btn-sm btn-outline-dark" id="set_thumb">
                                                <input type="radio" name="options" id="" autocomplete="off">
                                                <i class="fa fa-list-ul" aria-hidden="true"></i> </label>
                                            <label class="btn btn-sm btn-outline-dark" id="set_list">
                                                <input type="radio" name="options" id="" autocomplete="off">
                                                <i class="fa fa-list" aria-hidden="true"></i> </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include('includes/user-ads-myads.php') ?>
                </div>
            </div>
        </div>
    </section>
    <?php include('includes/user-footer-menu.php') ?>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
