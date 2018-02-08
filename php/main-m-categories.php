<?php 
$audience = 'main';
$page_title = '';
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
            <div class="row">
                <div class="col">
                    <div class="mobile-panel-header">
                        <h1>Categories</h1>
                    </div>
                    <nav>
                        <div class="row">
                            <div class="col-6 category-card"> <a href="main-home.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-th" aria-hidden="true"></span> </div>
                                <div class="category-title">All ads</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-soccer-ball-o" aria-hidden="true"></span> </div>
                                <div class="category-title">Activity partners</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-bullhorn" aria-hidden="true"></span> </div>
                                <div class="category-title">Announcements</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-shield" aria-hidden="true"></span> </div>
                                <div class="category-title">Antiques &amp; collectibles</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-book" aria-hidden="true"></span> </div>
                                <div class="category-title">Books</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-bolt" aria-hidden="true"></span> </div>
                                <div class="category-title">Electronics</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-hotel" aria-hidden="true"></span> </div>
                                <div class="category-title">Furniture</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-handshake-o" aria-hidden="true"></span> </div>
                                <div class="category-title">Jobs</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-question" aria-hidden="true"></span> </div>
                                <div class="category-title">Lost &amp; found</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-tags" aria-hidden="true"></span> </div>
                                <div class="category-title">Miscellaneous</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-music" aria-hidden="true"></span> </div>
                                <div class="category-title">Musicians &amp; artists</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-thumbs-o-up" aria-hidden="true"></span> </div>
                                <div class="category-title">Rideboard &amp; carpools</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-address-book" aria-hidden="true"></span> </div>
                                <div class="category-title">Roommates &amp; sublets</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-ticket" aria-hidden="true"></span> </div>
                                <div class="category-title">Tickets &amp; events</div>
                                </a></div>
                            <div class="col-6 category-card"> <a href="main-music.php">
                                <div class="category-icon mx-auto"> <span class="fa fa-bicycle" aria-hidden="true"></span> </div>
                                <div class="category-title">Vehicles</div>
                                </a> </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <?php include('modals/modal-main-ad-detail.php') ?>
    </section>
    <?php include('includes/main-footer-menu.php') ?>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
