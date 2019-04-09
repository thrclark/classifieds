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
                        <ul class="ccf-mobile-categories">
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-soccer-ball-o" aria-hidden="true"></span>
                                    <div class="category">Activity partners</div>
                                </a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-bullhorn" aria-hidden="true"></span>
                                    <div class="category"> Announcements</div>
                                </a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-shield" aria-hidden="true"></span>
                                    <div class="category">Antiques &amp; collectibles</div>
                                </a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-book" aria-hidden="true"></span>
                                    <div class="category">Books</div>
                                </a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-bolt" aria-hidden="true"></span>
                                    <div class="category">Electronics </div>
                                </a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-hotel" aria-hidden="true"></span>
                                    <div class="category">Furniture</div>
                                </a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-handshake-o" aria-hidden="true"></span>
                                    <div class="category">Jobs</div>
                                </a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-question" aria-hidden="true"></span>
                                    <div class="category">Lost &amp; found</div>
                                </a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-tags" aria-hidden="true"></span>
                                    <div class="category">Miscellaneous</div>
                                </a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-music" aria-hidden="true"></span>
                                    <div class="category">Musicians &amp; artists</div>
                                </a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-thumbs-o-up" aria-hidden="true"></span>
                                    <div class="category">Rideboard &amp; carpools</div>
                                </a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-address-book" aria-hidden="true"></span>
                                    <div class="category">Roommates &amp; sublets</div>
                                </a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-ticket" aria-hidden="true"></span>
                                    <div class="category">Tickets &amp; events</div>
                                </a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-bicycle" aria-hidden="true"></span>
                                    <div class="category">Vehicles</div>
                                </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <?php include('modals/modal-main-ad-detail.php') ?>
    </section>
    <?php include('includes/main-footer-menu.php') ?>
</div>
<?php include('includes/main-custom-footer.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
