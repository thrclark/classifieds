<?php 
$section = '';
$page_title = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head-meta.php') ?>
<style type="text/css">
.ad .ad-title {
	font-size: 16px;
	font-weight: bold;
	color: #007bff;
	line-height: 1.1rem;
}
.ad .ad-price {
	font-size: 16px;
	font-weight: bold;
	line-height: 1.1rem;
}
.ad .ad-location {
	font-size: 12px;
	color: #868e96;
}
.ad .ad-titleprice {
	min-height: 45px;
}
</style>
<?php include('includes/user-styles.php') ?>
</head>
<body>
<div id="UserAccess" class="user-access"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> <a href="#">Post Ad</a> <a href="#">My Ads</a> <a href="#">Watchlist</a> <a href="#">Policy</a>
    <hr>
    <a href="#">Admin</a> </div>
<div id="main">
    <div class="app-header" id="">
        <div class="container">
            <div class="row align-items-center" style="position:relative">
                <div class="col-12 col-lg-auto">
                    <h1 style="display:">IU Classifieds</h1>
                    <img src="../img/logo.png" alt="logo" style="width:80px; height:auto; display:none"/></div>
                <div class="col search">
                    <div class="search-container">
                        <div class="row align-items-center">
                            <div class="col">
                                <label for="mainsearch" class="sr-only">Search</label>
                                <input type="text" class="form-control search-input" id="mainsearch" placeholder="">
                            </div>
                            <div class="col-auto search-geo d-none d-lg-inline"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="dropdown show"> <span class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="d-none d-lg-inline">All Campuses</span> </span>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="#">IU Bloomington</a> <a class="dropdown-item" href="#">IUPUI</a> <a class="dropdown-item" href="#">IU Kokomo</a> <a class="dropdown-item" href="#">IU Northwest</a> <a class="dropdown-item" href="#">IU South Bend</a> <a class="dropdown-item" href="#">IUPUC</a> <a class="dropdown-item" href="#">IU East</a> <a class="dropdown-item" href="#">IU South</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">All Campuses</a> </div>
                                </span> </div>
                            <div class="col-auto search-button text-right">
                                <button type="button" class="btn btn-dark"> <i class="fa fa-search" aria-hidden="true"></i> <span class="search-label d-none d-lg-inline">Search</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto post">
                    <button type="button" class="btn btn-outline-secondary">Post</button>
                </div>
                <div class="col-auto user-ads d-none d-lg-inline" style="position:relative"><i class="fa fa-ellipsis-v" aria-hidden="true" onclick="openNav()"></i> </div>
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
                        <li><a href="#">Books</a></li>
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">Furniture</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Lost &amp; Found</a></li>
                        <li><a href="#">Miscellaneous </a></li>
                        <li class="active"><a href="#">Musicians &amp; Artists </a></li>
                        <li><a href="#">Rideboard &amp; Carpools </a></li>
                        <li><a href="#">Roommates &amp; Sublets </a></li>
                        <li><a href="#">Tickets &amp; Events </a></li>
                        <li><a href="#">Vehicles </a></li>
                    </ul>
                </div>
                <div class="col-9" style="">
                    <div class="row">
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/drums1.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">5-pc Drum Set with cymbals</div>
                                    <div class="col-auto ad-price">$750</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/guitar1.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Strat Guitar with case</div>
                                    <div class="col-auto ad-price">$1100</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/piano1.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title"> Grand Piano - gently used</div>
                                    <div class="col-auto ad-price">$2450</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/sax1.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Selmer  Sax -pro model</div>
                                    <div class="col-auto ad-price">$7000</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Voice Lessons with grad student</div>
                                    <div class="col-auto ad-price">$25/hr</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/drums2.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Drum Set</div>
                                    <div class="col-auto ad-price">$400</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/flute2.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Great Flute - Yamaha YS-45</div>
                                    <div class="col-auto ad-price">$500</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/guitar2.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Classic Guitar - used only once</div>
                                    <div class="col-auto ad-price">$650</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/piano2.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Steinway Piano</div>
                                    <div class="col-auto ad-price">$12,000</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/sax2.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Tenor Sax</div>
                                    <div class="col-auto ad-price">$200</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Professional Recording Studio</div>
                                    <div class="col-auto ad-price">$75/hr</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/flute3.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Flute</div>
                                    <div class="col-auto ad-price">$750</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/guitar3.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Guitar</div>
                                    <div class="col-auto ad-price">$900</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/piano3.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Old Piano</div>
                                    <div class="col-auto ad-price">$50</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/sax3.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Bari Sax</div>
                                    <div class="col-auto ad-price">$150</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Jam with me</div>
                                    <div class="col-auto ad-price">Free</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/drums4.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Small Kit</div>
                                    <div class="col-auto ad-price">$750</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/flute4.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Wood Flute</div>
                                    <div class="col-auto ad-price">$40</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/piano4.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">old Piano</div>
                                    <div class="col-auto ad-price">$100</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/sax4.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Sax mic</div>
                                    <div class="col-auto ad-price">$120</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IU Bloomington</div>
                            </div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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
