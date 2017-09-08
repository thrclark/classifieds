<?php 
$section = '';
$page_title = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head-meta.php') ?>
<style type="text/css">
.ad {
	background: #FFFFFF;
	min-height: 120px;
	margin-bottom: 20px;
}
</style>
<?php include('includes/user-styles.php') ?>
</head>
<body>
<div id="UserAccess" class="user-access"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> <a href="#">Post Ad</a> <a href="#">My Ads</a> <a href="#">Watchlist</a> <a href="#">Policy</a>
    <hr>
    <a href="#">Admin</a> </div>
<div class="app-header" id="main">
    <div class="container">
        <div class="row align-items-center" style="position:relative">
            <div class=" col-auto">
                <h1 style="display:">IU Classifieds</h1>
                <img src="../img/logo.png" alt="logo" style="width:80px; height:auto; display:none"/></div>
            <div class="col search">
                <div class="search-container">
                    <div class="row align-items-center">
                        <div class="col">
                            <label for="mainsearch" class="sr-only">Search</label>
                            <input type="text" class="form-control search-input" id="mainsearch" placeholder="">
                        </div>
                        <div class="col-auto search-geo"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="dropdown show"> <span class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> All Campuses </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="#">IU Bloomington</a> <a class="dropdown-item" href="#">IUPUI</a> <a class="dropdown-item" href="#">IU Kokomo</a> <a class="dropdown-item" href="#">IU Northwest</a> <a class="dropdown-item" href="#">IU South Bend</a> <a class="dropdown-item" href="#">IUPUC</a> <a class="dropdown-item" href="#">IU East</a> <a class="dropdown-item" href="#">IU South</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">All Campuses</a> </div>
                            </span> </div>
                        <div class="col-auto search-button text-right">
                            <button type="button" class="btn btn-dark"> <i class="fa fa-search" aria-hidden="true"></i> <span class="search-label">Search</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto post">
                <button type="button" class="btn btn-outline-secondary">Post</button>
            </div>
            <div class="col-auto user-ads" style="position:relative"><i class="fa fa-ellipsis-v" aria-hidden="true" onclick="openNav()"></i> </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col-6" style=" background:red">asf </div>
        </div>
    </div>--> 
</div>
<section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-3 main-nav">
                <ul class="sub-menu" id="" style="">
                    <li><a href="#">Activity Partners</a></li>
                    <li><a href="#">Announcements</a></li>
                    <li><a href="#">Antiques &amp; Collectibles</a></li>
                    <li class="active"><a href="#">Books</a></li>
                    <li><a href="#">Electronics</a></li>
                    <li><a href="#">Furniture</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Lost &amp; Found</a></li>
                    <li><a href="#">Miscellaneous </a></li>
                    <li><a href="#">Musicians &amp; Artists </a></li>
                    <li><a href="#">Rideboard &amp; Carpools </a></li>
                    <li><a href="#">Roommates &amp; Sublets </a></li>
                    <li><a href="#">Tickets &amp; Events </a></li>
                    <li><a href="#">Vehicles </a></li>
                </ul>
            </div>
            <div class="col-9" style="">
                <div class="row"> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div> <div class="col-4">
                        <div class="ad">asdf</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('includes/admin-footerscripts.php') ?>
<script type="text/javascript">
        $(function() {
            $("#mainsearch").focus();
        });
    </script> 
<script>
function openNav() {
    document.getElementById("UserAccess").style.width = "250px";
    document.getElementById("main").style.marginRight = "250px";
}

function closeNav() {
    document.getElementById("UserAccess").style.width = "0";
    document.getElementById("main").style.marginRight= "0";
}
</script>
</body>
</html>
