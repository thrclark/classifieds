
<header class="rbt-app-header rbt-app-header--light">
    <div class="container">
        <div class="row align-items-center"> 
            
            <!--App Logo Image-->
            <div class="col-auto rbt-brand-image-container"> <img src="../img/trident-large.png" alt="trident" class="rbt-brand-image"/> </div>
            
            <!--App Title-->
            <div class="col col-md-auto rbt-brand-title-container"> <span class="rbt-header-title"> <a  href="main-home.php"class="rbt-brand-title"><strong>Classifieds</strong> </a></span> </div>
            <div class="col d-none d-md-block">
                <div class="input-group">
                    <label for="mainSearch" class="sr-only">
                        <message>Search classifieds</message>
                    </label>
                    <input type="text" class="form-control" placeholder="" aria-label="Search" aria-describedby="search" id="mainSearch">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" onclick="location.href = 'main-searchresults.php';"><i aria-hidden="true" class="fa fa-search"></i> <span class="d-none d-lg-inline">
                        <message>Search</message>
                        </span> </button>
                    </div>
                </div>
            </div>
            <div class="col-auto d-none d-md-block"> <a href="main-postad.php" class="btn btn-outline-primary">
                <message>Post Ad</message>
                </a></div>
            
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
            <li class="list-group-item">My ads (1)</li>
            <li class="list-group-item">My watchlist (4)</li>
            <li class="list-group-item">Ads policy</li>
            <li class="list-group-item">Admin</li>
        </ul>
    </nav>
</div>
