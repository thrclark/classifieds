<?php 
$section = '';
$page_title = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head-meta.php') ?>
<style type="text/css"></style>
<?php include('includes/user-styles.php') ?>
</head>
<body>
<div id="UserAccess" class="user-access"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> <a href="#">My Ads (1)</a> <a href="#">My Watchlist (4)</a> <a href="#">Ads Policy</a>
    <hr>
    <a href="#">Admin</a> </div>
<div id="main">
    <div class="app-header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto brand">
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <div class="brand-image"> <img src="../img/trident-large.png" alt="logo" /></div>
                        </div>
                        <div class="col-auto">
                            <h1 class="brand-text text-center">Classifieds</h1>
                        </div>
                    </div>
                </div>
                <div class="col search d-none d-md-block">
                    <div class="search-container ">
                        <div class="row align-items-center">
                            <div class="col">
                                <label for="mainsearch" class="sr-only">Search</label>
                                <input type="text" class="form-control search-input" id="mainsearch" placeholder="">
                            </div>
                            <div class="col-auto search-geo"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="dropdown show"> <span class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="short-name">All</span> <span class="long-name">All Campuses</span> </span>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="#"><span class="short-name">IUB</span> <span class="long-name">IU Bloomington</span></a> <a class="dropdown-item" href="#"><span class="short-name">IUPUI</span><span class="long-name">IUPUI</span></a> <a class="dropdown-item" href="#"><span class="short-name">IUK</span><span class="long-name">IU Kokomo</span></a> <a class="dropdown-item" href="#"><span class="short-name">IUN</span><span class="long-name">IU Northwest</span></a> <a class="dropdown-item" href="#"><span class="short-name">IUSB</span><span class="long-name">IU South Bend</span></a> <a class="dropdown-item" href="#"><span class="short-name">IUE</span><span class="long-name">IU East</span></a> <a class="dropdown-item" href="#"><span class="short-name">IUS</span><span class="long-name">IU South</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><span class="short-name">All</span><span class="long-name">All Campuses</span></a> </div>
                                </span> </div>
                            <div class="col-auto search-button text-right">
                                <button type="button" class="btn btn-dark"> <i class="fa fa-search" aria-hidden="true"></i> <span class="search-label d-none d-lg-inline">Search</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto post d-none d-md-block">
                    <button type="button" class="btn btn-outline-secondary toggle_mobilepost">Post Ad</button>
                </div>
                <div class="col-auto user-ads d-md-none text-right">
                    <div class="menu-trigger" onclick="openNav()"><i class="fa fa-ellipsis-v" aria-hidden="true" ></i></div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/user-mobilepanel-search.php') ?>
    <?php include('includes/user-mobilepanel-post.php') ?>
    <section class="main-content" style="display:">
        <div class="container">
            <div class="row">
                <div class="col-3 main-nav d-none d-md-block">
                    <ul class="sub-menu" id="" style="">
                        <li> <a href="#">Admin</a></li>
                        <li> <a href="#">My Ads (1)</a></li>
                        <li class="watchlist"> <a href="#"> My Watchlist (4) <i aria-hidden="true" class="fa fa-heart-o pull-right"></i></a></li>
                        <li> <a href="#">All Ads</a></li>
                        <li> <a href="#">Activity Partners</a></li>
                        <li> <a href="#">Announcements</a></li>
                        <li> <a href="#">Antiques &amp; Collectibles</a></li>
                        <li> <a href="#">Books</a></li>
                        <li> <a href="#">Electronics</a></li>
                        <li> <a href="#">Furniture</a></li>
                        <li> <a href="#">Jobs</a></li>
                        <li> <a href="#">Lost &amp; Found</a></li>
                        <li> <a href="#">Miscellaneous </a></li>
                        <li class="active"> <a href="#">Musicians &amp; Artists </a></li>
                        <li> <a href="#">Rideboard &amp; Carpools </a></li>
                        <li> <a href="#">Roommates &amp; Sublets </a></li>
                        <li> <a href="#">Tickets &amp; Events </a></li>
                        <li> <a href="#">Vehicles </a></li>
                    </ul>
                    
                    
                    
                   <div class="" style=" padding-top:30px; font-style:italic"><a href="#"> Ads Policy</a></div>
                </div>
                <div class="col-xs-12 col-md-9 main-content-section" style="">
                    <div class="row align-items-center section-head">
                        <div class="col-auto section-head-title">
                            <h2 class="">Musicians &amp; Artists</h2>
                        </div>
                        <div class="col-12">
                            <div class="section-head-utilities">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="dropdown util-location"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="long-name">IU Kokomo</span> <span class="short-name">IUK</span></button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#"><span class="long-name">IU Bloomington</span></a> <a class="dropdown-item" href="#"><span class="long-name">IUPUI</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU Kokomo</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU Northwest</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU South Bend</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU East</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU South</span></a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><span class="long-name">All Campuses</span></a> </div>
                                        </div>
                                        <div class="dropdown util-filter"><i class="fa fa-filter" aria-hidden="true"></i>
                                            <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> All Ads</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Selling</a> <a class="dropdown-item" href="#">In Search Of</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">All Ads</a> </div>
                                        </div>
                                    </div>
                                    <div class="col-auto align-self-end"> <strong class="d-none d-sm-inline">View:</strong> <i class="fa fa-sort d-sm-none" aria-hidden="true"></i>
                                        <div class="dropdown util-sort" >
                                            <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="d-none d-sm-inline">By</span> Date </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">By Relevance</a> <a class="dropdown-item" href="#">By Date</a> </div>
                                        </div>
                                        <div class="btn-group util-view-switch d-none d-sm-inline" data-toggle="buttons">
                                            <label class="btn btn-sm btn-outline-dark active">
                                                <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                <i class="fa fa-th-large" aria-hidden="true"></i> </label>
                                            <label class="btn btn-sm btn-outline-dark">
                                                <input type="radio" name="options" id="option3" autocomplete="off">
                                                <i class="fa fa-th-list" aria-hidden="true"></i> </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/drums1.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">5-pc Drum Set with cymbals</div>
                                    <div class="col-auto ad-price">$750</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUK</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/guitar1.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Strat Guitar with case</div>
                                    <div class="col-auto ad-price">$1100</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUK</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/piano1.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title"> Grand Piano - gently used</div>
                                    <div class="col-auto ad-price">$2450</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUK</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/sax1.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Selmer  Sax -pro model</div>
                                    <div class="col-auto ad-price">$7000</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUK</div>
                            </div>
                        </div>
                        <div class="col-12 text-center" style="
    margin-bottom: 10px;
">
                            <div style="
    background: #e9ecef;
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 1rem;
">Listings from other campuses</div>
                            <hr style="
    margin-top: -11px;
">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Voice Lessons with grad student</div>
                                    <div class="col-auto ad-price">$25/hr</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/drums2.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Drum Set</div>
                                    <div class="col-auto ad-price">$400</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/flute2.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Great Flute - Yamaha YS-45</div>
                                    <div class="col-auto ad-price">$500</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/guitar2.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Classic Guitar - used only once</div>
                                    <div class="col-auto ad-price">$650</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/piano2.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Steinway Piano</div>
                                    <div class="col-auto ad-price">$12,000</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/sax2.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Tenor Sax</div>
                                    <div class="col-auto ad-price">$200</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Professional Recording Studio</div>
                                    <div class="col-auto ad-price">$75/hr</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/flute3.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Flute</div>
                                    <div class="col-auto ad-price">$750</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/guitar3.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Guitar</div>
                                    <div class="col-auto ad-price">$900</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/piano3.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Old Piano</div>
                                    <div class="col-auto ad-price">$50</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/sax3.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Bari Sax</div>
                                    <div class="col-auto ad-price">$150</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Jam with me</div>
                                    <div class="col-auto ad-price">Free</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/drums4.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Small Kit</div>
                                    <div class="col-auto ad-price">$750</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/flute4.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Wood Flute</div>
                                    <div class="col-auto ad-price">$40</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/piano4.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">old Piano</div>
                                    <div class="col-auto ad-price">$100</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <div class="ad">
                                <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                <div class="ad-image" style="background-image:url(../img/ad-pics/sax4.jpg)"></div>
                                <div class="form-row ad-titleprice">
                                    <div class="col ad-title">Sax mic</div>
                                    <div class="col-auto ad-price">$120</div>
                                </div>
                                <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                            </div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('includes/user-footer-menu.php') ?>
</div>
<?php include('includes/admin-footerscripts.php') ?>
<script type="text/javascript">
    $(function() {
        $("#mainsearch").focus();
    });
</script> 
<script>
    function openNav() {
        if (window.innerWidth < 560) {
            document.getElementById("UserAccess").style.width = "80%";
        } else {
            document.getElementById("UserAccess").style.width = "40%";
        }
    }
    function closeNav() {
        document.getElementById("UserAccess").style.width = "0";
    }
</script> 
<script>
    $(document).ready(function() {
        $("#toggle_mobilesearch").click(function() {
            $(".mobile-panel.search").slideToggle();
			$(".main-content").toggle();
			$(".main-content").toggleClass("blur");
        });
		
		
		
		$(".toggle_mobilepost").click(function() {
            $(".mobile-panel.post").slideToggle();
			$(".main-content").toggle();
			$(".main-content").toggleClass("blur");
        });
		
		
    });
</script>
</body>
</html>
