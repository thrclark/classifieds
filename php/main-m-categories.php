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
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-soccer-ball-o" aria-hidden="true"></span> Activity partners</a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-bullhorn" aria-hidden="true"></span> Announcements</a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-shield" aria-hidden="true"></span> Antiques &amp; collectibles</a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-book" aria-hidden="true"></span> Books</a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-bolt" aria-hidden="true"></span> Electronics</a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-hotel" aria-hidden="true"></span> Furniture</a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-handshake-o" aria-hidden="true"></span> Jobs</a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-question" aria-hidden="true"></span> Lost &amp; found</a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-tags" aria-hidden="true"></span> Miscellaneous</a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-music" aria-hidden="true"></span> Musicians &amp; artists</a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-thumbs-o-up" aria-hidden="true"></span> Rideboard &amp; carpools</a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-address-book" aria-hidden="true"></span> Roommates &amp; sublets</a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-ticket" aria-hidden="true"></span> Tickets &amp; events</a></li>
                            <li class="list-group-item"><a href="main-music.php"><span class="fa fa-bicycle" aria-hidden="true"></span> Vehicles</a></li>
                        </ul>
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
