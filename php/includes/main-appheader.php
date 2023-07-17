
<nav> <a class="rbt-skip-link" href="#mainSearch" id="setsearch">Skip to search</a> <a class="rbt-skip-link" href="#main-content">Skip to content</a></nav>
<header class="d-flex flex-nowrap rbt-app-header">
    <div class="ccf-brand-image-container d-none d-sm-block"><img src="../img/trident-large.png" alt="" class="rbt-brand-image"/></div>
    <div class="ccf-brand-image-container d-sm-none"><img src="../img/trident-large.png" alt="" class="rbt-brand-image"/></div>
    <div class="rbt-brand-title-container flex-grow-1 "> <a href="#" class="rbt-brand-title font-weight-bold ml-2">IU Classifieds </a> </div>
    
    <!--Search-->
    <div class="d-none d-md-block mr-md-3" id="mainSearch_container">
        <label for="mainSearch" class="sr-only">
            <message>Search classifieds</message>
        </label>
        <div class="input-group clear-field ml-2">
            <input type="text" class="form-control" id="mainSearch" placeholder="Search ads">
            <button class="cleartext" id="cleartext2" style="display:none"> <i class="fa fa-window-close"></i><span class="sr-only">Clear search terms</span></button>
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" onclick="location.href = 'main-searchresults.php';"><i aria-hidden="true" class="fa fa-search"></i> <span class="d-none d-lg-inline">
                <message>Search</message>
                </span> </button>	
            </div>
        </div>
    </div>
    <!-- mobile search trigger-->
    <div class="d-md-none ccf-searchtrigger p-0" id="mobile_showSearch">
        <button class="btn btn-link"><i aria-hidden="true" class="fa fa-search"></i></button>
    </div>
    <!-- mobile hide search trigger-->
    <div class="d-md-none ccf-searchtrigger p-0" id="mobile_hideSearch" style="display:none">
        <button class="btn btn-link" type="button"> <span class="rbt-icon-close"></span> <span class="d-none d-lg-inline">
        <message>Close</message>
        </span> </button>
    </div>
    <!--Post ad button - desktop-->
    <div class="d-none d-md-block mr-3"> <a href="main-postad-success.php" class="btn btn-outline-primary">
            <message>Post ad</message>
        </a> </div>
    <!-- App Mobile Menu-->
    
    <div class="d-md-none rbt-drawer-button">
        <button class="btn btn-link"><span class="rbt-icon-menu" aria-hidden="true"><span class="sr-only">
        <message key="global.button.openNavigation">Open User Menu</message>
        </span></span> </button>
    </div>
</header>

<!--Drawer menu-->
<div class="rbt-drawer">
    <nav>
        <ul class="list-group mt-3">
            <li class="list-group-item"> <a href="admin-ads.php">Admin</a> </li>
            <li class="list-group-item"> <a href="main-myads.php">My ads (1)</a> </li>
            <li class="list-group-item"> <a href="main-watchlist.php">My watchlist (4)</a> </li>
            <li class="list-group-item"> <a href="main-savedsearch.php">Saved Searches</a> </li>
            <li class="dropdown-divider"> </li>
            <li class="list-group-item"> <a href="">Policy</a> </li>
        </ul>
    </nav>
</div>
