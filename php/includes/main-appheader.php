 <a class="rbt-skip-link" href="#mainSearch" id="setsearch">Skip to search</a> <a class="rbt-skip-link" href="#main-content">Skip to content</a>
<header class="rbt-app-header">
    <div class="container">
        <div class="row align-items-center"> 
            <!--App Logo Image-->
            
            <div class="col-auto rbt-brand-image-container"> <img src="../img/ccf-logo.png" alt="" class="rbt-brand-image d-none d-sm-block"/><img src="../img/ccf-logo-mobile.png" alt="" class="rbt-brand-image d-sm-none"/> </div>
            <!--App Title-->
            <div class="col col-md-auto rbt-brand-title-container"> <span class="rbt-header-title" > <a  href="main-home.php"class="rbt-brand-title"><!--<strong>Classifieds</strong> --></a></span> </div>
            
            <!--Search-->
            <div class="col d-none d-md-block" id="mainSearch_container">
                <label for="mainSearch" class="sr-only">
                    <message>Search classifieds</message>
                </label>
                <div class="input-group clear-field">
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
            <div class="col-auto d-md-none ccf-searchtrigger p-0" id="mobile_showSearch">
                <button class="btn btn-link"><i aria-hidden="true" class="fa fa-search"></i></button>
            </div>
            <!-- mobile hide search trigger-->
            <div class="col-auto d-md-none ccf-searchtrigger p-0" id="mobile_hideSearch" style="display:none">
                <button class="btn btn-link" type="button"> <span class="rbt-icon-close"></span> <span class="d-none d-lg-inline">
                <message>Close</message>
                </span> </button>
            </div>
            <!--Post ad button - desktop-->
            <div class="col-auto d-none d-md-block"> <a href="main-postad-success.php" class="btn btn-outline-primary">
                    <message>Post ad</message>
                </a> </div>
            <!-- App Mobile Menu-->
            <div class="col-auto d-md-none rbt-drawer-button">
                <button class="btn btn-link"><span class="rbt-icon-menu" aria-hidden="true"><span class="sr-only">
                <message key="global.button.openNavigation">Open User Menu</message>
                </span></span> </button>
            </div>
        </div>
    </div>
</header>

<!--Drawer menu-->
<div class="rbt-drawer">
    <nav>
        <ul class="list-group mt-3">
            <li class="list-group-item"> <a href="admin-ads.php">Admin</a> </li>
            <li class="list-group-item"> <a href="main-myads.php">My ads (1)</a> </li>
            <li class="list-group-item"> <a href="main-watchlist.php">My watchlist (4)</a> </li>
            <li class="list-group-item"> <a href="">Policy</a> </li>
        </ul>
    </nav>
</div>
