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
                                            <label class="btn btn-sm btn-outline-dark active" id="set_grid">
                                                <input type="radio" name="options" id="" autocomplete="off" checked>
                                                <i class="fa fa-th-large" aria-hidden="true"></i> </label>
                                            <label class="btn btn-sm btn-outline-dark" id="set_thumb">
                                                <input type="radio" name="options" id="" autocomplete="off">
                                                <i class="fa fa-th-list" aria-hidden="true"></i> </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/drums1.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont3 banner">New</div>
                                    <div class="ad2-cont4 ad-title">Drum Set - Like New!</div>
                                    <div class="ad2-cont5 ad-price">$1200</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Integer semper ligula a neque consequat aliquet. Duis ullamcorper venenatis nisi, in blandit lectus maximus quis. </div>
                                    <div class="ad2-cont7 ad-date">Sep 16</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUK</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/piano1.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont3 banner">New</div>
                                    <div class="ad2-cont4 ad-title">Stienway grand piano, 1932</div>
                                    <div class="ad2-cont5 ad-price">$15,000</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Nunc eu urna vitae lectus imperdiet cursus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                    <div class="ad2-cont7 ad-date">Sep 16</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUK</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/sax1.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Student Model Saxophone, with mouthpiece, strap, and reeds</div>
                                    <div class="ad2-cont5 ad-price">$400</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Nam ultrices iaculis dapibus.</div>
                                    <div class="ad2-cont7 ad-date">Sep 14</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUK</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/guitar1.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Gibson Guitar w/ effects</div>
                                    <div class="ad2-cont5 ad-price">$750</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Vestibulum nec erat nunc. Nulla orci lectus, efficitur in lorem at, volutpat pretium libero. Sed sagittis vel sem nec pellentesque. Mauris at finibus odio, sed viverra nisl. Nulla a semper arcu. Proin efficitur egestas odio, sed vulputate purus hendrerit at. Quisque interdum nulla vitae metus pulvinar volutpat. Suspendisse porta gravida urna, ut blandit arcu aliquet et. Class aptent taciti sociosqu.</div>
                                    <div class="ad2-cont7 ad-date">Sep 13</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUK</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/flute1.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Flute - needs repair</div>
                                    <div class="ad2-cont5 ad-price">$100</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Donec sapien enim, lobortis non purus eu, consectetur sagittis arcu. Integer volutpat lacus in neque porttitor bibendum. Duis non leo nec magna interdum pretium. Donec ultrices libero non posuere.</div>
                                    <div class="ad2-cont7 ad-date">Sep 7</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUK</div>
                                </div>
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
    font-size: 1.3rem;
">Listings from other campuses</div>
                            <hr style="
    margin-top: -16px;
">
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/drums2.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont3 banner">New</div>
                                    <div class="ad2-cont4 ad-title">Jazz kit, with stands and cymbals</div>
                                    <div class="ad2-cont5 ad-price">$2000</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Praesent faucibus eros a ex vulputate, a semper lorem convallis.</div>
                                    <div class="ad2-cont7 ad-date">Sep 16</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/piano2.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Studio piano for sale</div>
                                    <div class="ad2-cont5 ad-price">$2000</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Sed aliquet diam in porttitor suscipit. Nulla ac tellus varius, vehicula .</div>
                                    <div class="ad2-cont7 ad-date">Sep 14</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/sax2.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Selmer M6, mint contidtion</div>
                                    <div class="ad2-cont5 ad-price">$7900</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Donec suscipit luctus venenatis. Sed varius, nunc vel porta facilisis, ante metus accumsan felis, eu facilisis ipsum metus vitae odio. Ut feugiat pulvinar velit a ullamcorper. Donec fringilla venenatis ante, quis eleifend elit rutrum viverra. Phasellus dapibus congue ligula id blandit. In hendrerit ex in risus pulvinar, id tristique massa tempor. Fusce vitae diam et leo fringilla auctor. Vestibulum ante.</div>
                                    <div class="ad2-cont7 ad-date">Sep 14</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/guitar2.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Classical guitar</div>
                                    <div class="ad2-cont5 ad-price">$500</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Phasellus nibh nulla, egestas non mattis eu, volutpat sit amet mauris. Nulla sed ipsum a augue pellentesque luctus. Maecenas elementum tellus at vestibulum tristique. In ut euismod mauris. Mauris rhoncus, diam vitae tristique tincidunt, sapien nisl pulvinar urna, at eleifend leo justo at elit. Sed gravida dolor at sapien maximus maximus. Nulla facilisi. Nam metus justo, finibus et eleifend nec.</div>
                                    <div class="ad2-cont7 ad-date">Sep 11</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/flute2.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Yamaha student model flute </div>
                                    <div class="ad2-cont5 ad-price">$250</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Quisque laoreet magna eget magna sodales condimentum. In non nisi pellentesque.</div>
                                    <div class="ad2-cont7 ad-date">Sep 9</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/drums3.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Steve Jordan signature snare drum, used twice</div>
                                    <div class="ad2-cont5 ad-price">$400</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Mauris laoreet aliquet augue eget efficitur. Vivamus id sollicitudin arcu. Fusce tempor gravida enim. Phasellus volutpat condimentum suscipit. Duis ac ligula at lectus tempor cursus.</div>
                                    <div class="ad2-cont7 ad-date">Sep 9                                    </div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/piano3.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Free piano, come and get it</div>
                                    <div class="ad2-cont5 ad-price">$0</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Ut ac diam viverra, accumsan mauris dapibus, molestie lectus. Curabitur eu velit sed lectus consectetur vehicula vel sit amet turpis. Sed tincidunt diam at egestas malesuada. Sed sollicitudin porttitor ultrices. Donec vel nulla mauris. Phasellus a urna posuere, sagittis erat at.</div>
                                    <div class="ad2-cont7 ad-date">Sep 9</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/sax3.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">saxophone stand with doubler pegs</div>
                                    <div class="ad2-cont5 ad-price">$45</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Sed efficitur posuere metus, auctor tempor nisi maximus et. Sed diam erats.</div>
                                    <div class="ad2-cont7 ad-date">Sep 7</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/guitar3.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Guitar lessons with a pro</div>
                                    <div class="ad2-cont5 ad-price">$30/hr</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Aenean venenatis velit nec eros luctus feugiat.</div>
                                    <div class="ad2-cont7 ad-date">Sep 7</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/flute3.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Gold plated flute</div>
                                    <div class="ad2-cont5 ad-price">$1200</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Nam nisi libero, feugiat id nibh a, condimentum vestibulum lacus. </div>
                                    <div class="ad2-cont7 ad-date">Sep 6</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/drums4.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Double bass drum set with all hardware</div>
                                    <div class="ad2-cont5 ad-price">$1500</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Proin scelerisque quis urna in hendrerit. Nulla facilisi. Nunc vel mi mollis enim sodales luctus quis at lacus. Fusce eget condimentum enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse vel ex quis sem laoreet tempus eu at mauris. Integer hendrerit purus vitae ullamcorper tempor. Proin nec pellentesque tellus, id condimentum orci. Aenean feugiat.</div>
                                    <div class="ad2-cont7 ad-date">Sep 4</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/piano4.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Piano Lessons </div>
                                    <div class="ad2-cont5 ad-price">$40/hr</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Praesent quis orci sed sapien facilisis mollis a vitae sapien. Cras auctor est eu ipsum commodo vestibulum. Pellentesque ac tristique tellus. Vestibulum eget placerat neque.</div>
                                    <div class="ad2-cont7 ad-date">Sep 4</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/sax4.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">sax player needed for gigs</div>
                                    <div class="ad2-cont5 ad-price">Negotiable</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Aenean sit amet metus magna. Aliquam quis velit ac risus vulputate dignissim. Etiam malesuada vestibulum diam, sed sodales dolor aliquet vel. Pellentesque consectetur interdum placera.</div>
                                    <div class="ad2-cont7 ad-date">Sep 3</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/guitar4.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Hollow body ibanez guitar</div>
                                    <div class="ad2-cont5 ad-price">$899</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Curabitur faucibus porta justo non dapibus. Integer pretium hendrerit vulputate. Donec in posuere erat. Ut at metus ante. Ut commodo sem ut nunc ultricies sodales. Cras interdum nisl diam, in ullamcorper tortor vulputate ut. Pellentesque eleifend justo eros, non ultrices leo condimentum nec. Vestibulum leo quam, vestibulum ac odio vitae, venenatis eleifend arcu. Donec ornare fermentum laoreet. Mauris consequat mattis.</div>
                                    <div class="ad2-cont7 ad-date">Sep 2</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
                        <div class="ad2 grid">
                            <div class="ad2-maincontainer">
                                <div class="row">
                                    <div class="ad2-cont1">
                                        <div class="ad-image" style="background-image:url(../img/ad-pics/flute4.jpg)"> </div>
                                    </div>
                                    <div class="ad2-cont2">
                                        <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                                    </div>
                                    <div class="ad2-cont4 ad-title">Ethnic flute collection</div>
                                    <div class="ad2-cont5 ad-price">$300</div>
                                    <div class="w-100"></div>
                                    <div class="ad2-cont6 ad-description">Maecenas egestas, mauris egestas tristique ornare, nisi elit sollicitudin metus, vel auctor metus mi ut nisi. Nam cursus ligula ut elementum feugiat. In non mauris id quam interdum condimentum et ut nisl. Nam vitae purus et ex porta bibendum nec vel justo. Mauris blandit lectus vel congue dapibus. Cras tempor porta varius. Nullam tristique lectus non urna pellentesque, in semper.</div>
                                    <div class="ad2-cont7 ad-date">Sep 2</div>
                                    <div class="ad2-cont8 ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                                </div>
                            </div>
                        </div>
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
        $(".toggle_mobilesearch").click(function() {
            $(".mobile-panel.search").slideToggle();
            $(".main-content").toggle();
            $(".mobile-panel.post, .mobile-panel.categories").slideUp();
        });
        $(".toggle_mobilepost").click(function() {
            $(".mobile-panel.post").slideToggle();
            $(".main-content").toggle();
            $(".mobile-panel.search, .mobile-panel.categories").slideUp();
        });
        $(".toggle_mobilecategories").click(function() {
            $(".mobile-panel.categories").slideToggle();
            $(".main-content").toggle();
            $(".mobile-panel.post, .mobile-panel.search").slideUp();
        });
    });
</script> 
<script>
$(document).ready(function() {
	$(".ad-title,.ad-description").dotdotdot({
		/*	The text to add as ellipsis. */
		ellipsis	: '...',
 
		/*	How to cut off the text/html: 'word'/'letter'/'children' */
		wrap		: 'letter',
 
		/*	Wrap-option fallback to 'letter' for long words */
		fallbackToLetter: 'letter',
 
		/*	jQuery-selector for the element to keep and put after the ellipsis. */
		after		: null,
 
		/*	Whether to update the ellipsis: true/'window' */
		watch		: true,
	
		/*	Optionally set a max-height, if null, the height will be measured. */
		height		: null,
 
		/*	Deviation for the height-option. */
		tolerance	: 0

	});
});

</script> 
<script>
$(document).ready(function() {
    $('#set_grid').click(function() {
        $('.ad2').addClass('grid');
        $('.ad2').removeClass('thumb');
    });
	
	$('#set_thumb').click(function() {
        $('.ad2').addClass('thumb');
        $('.ad2').removeClass('grid');
    });
	
	
});
</script>
</body>
</html>
