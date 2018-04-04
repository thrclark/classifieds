
<header class="rbt-app-header rbt-app-header--light">
    <a class="rbt-skip-link" href="#main-content">Skip to content</a>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            
            <!--App Logo Image-->
            <div class="col-auto rbt-brand-image-container">
                <img src="../img/trident-large.png" alt="trident" class="rbt-brand-image"/>
            </div>
            
            <!--App Title-->
            <div class="col rbt-brand-title-container">
                <span class="rbt-header-title">
                <a  href="main-home.php"class="rbt-brand-title"><strong>Classifieds</strong> Admin</a>
                </span>
            </div>
            
            <!--App Nav-->
            <div class="col-auto">
                <div class="row align-items-center">
                    <div class="col-auto d-none d-lg-block">
                        <ul class="nav align-items-center">
                            <li class="nav-item">
                                <a class="nav-link"  href="main-home.php" role="button" >View appppp</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Moderation</a>
                                <div class="dropdown-menu">
                                    <a <?php if ($page_title == 'Ads') { echo 'class="dropdown-item active"'; } ?> href="admin-ads.php" class="dropdown-item">Ads</a>
                                    <a <?php if ($page_title == 'Restricted users') { echo 'class="dropdown-item active"'; } ?> href="#" class="dropdown-item">Restricted users</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
                                <div class="dropdown-menu">
                                    <a <?php if ($page_title == 'General settings') { echo 'class="dropdown-item active"'; } ?> href="admin-generalsettings.php" class="dropdown-item">General settings</a>
                                    <a <?php if ($page_title == 'Branding') { echo 'class="dropdown-item active"'; } ?> href="admin-branding.php" class="dropdown-item">Branding</a>
                                    <a <?php if ($page_title == 'Categories') { echo 'class="dropdown-item active"'; } ?> href="admin-categories.php" class="dropdown-item">Categories</a>
                                    <a <?php if ($page_title == 'Markets') { echo 'class="dropdown-item active"'; } ?> href="admin-markets.php" class="dropdown-item">Markets</a>
                                    <a <?php if ($page_title == 'LDAP configuration') { echo 'class="dropdown-item active"'; } ?> href="admin-ldap.php" class="dropdown-item">LDAP Configuration</a>
                                    <a <?php if ($page_title == 'API accounts') { echo 'class="dropdown-item active"'; } ?> href="admin-apiaccounts.php" class="dropdown-item">API Accounts</a>
                                    <a <?php if ($page_title == 'API documentation') { echo 'class="dropdown-item active"'; } ?> href="admin-apidocs.php" class="dropdown-item">API Documentation</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Configuration</a>
                                <div class="dropdown-menu">
                                    <a <?php if ($page_title == 'Google Analytics rollup') { echo 'class="dropdown-item active"'; } ?> href="admin-garollup.php" class="dropdown-item" >Google Analytics Rollup</a>
                                    <a <?php if ($page_title == 'System parameters') { echo 'class="dropdown-item active"'; } ?> href="admin-sysparameters.php" class="dropdown-item">System Parameters</a>
                                    <a <?php if ($page_title == 'Reload cache') { echo 'class="dropdown-item active"'; } ?> href="admin-reloadcache.php" class="dropdown-item" >Reload Cache </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- App Mobile Menu-->
            <div class="col-auto d-lg-none rbt-drawer-button">
                <button class="btn btn-link"><span class="rbt-icon-menu" aria-hidden="true"><span class="sr-only">
                <message key="global.button.openNavigation">Open User Menu</message>
                </span></span>
                </button>
            </div>
        </div>
    </div>
</header>

<!--Drawer menu-->
<div class="rbt-drawer">
    <nav>
        <ul class="list-group ">
            <li class="list-group-item">
                <a href="main-home.php">View app</a>
            </li>
        </ul>
        <h3 class="rbt-ts-14 text-uppercase mt-4 mb-2">Moderation</h3>
        <ul class="list-group ">
            <li class="list-group-item">
                <a href="admin-ads.php">Ads</a>
            </li>
            <li class="list-group-item">
                <a href="main-home.php">Main view</a>
            </li>
        </ul>
        <h3 class="rbt-ts-14 text-uppercase  mt-3 mb-2">Settings</h3>
        <ul class="list-group ">
            <li class="list-group-item">
                <a href="admin-generalsettings.php">General Settings</a>
            </li>
            <li class="list-group-item">
                <a href="admin-branding.php">Branding</a>
            </li>
            <li class="list-group-item">
                <a href="admin-categories.php">Categories</a>
            </li>
            <li class="list-group-item">
                <a href="admin-markets.php">Markets</a>
            </li>
            <li class="list-group-item">
                <a href="admin-ldap.php">LDAP Configuration</a>
            </li>
            <li class="list-group-item">
                <a href="admin-apiaccounts.php">API Accounts</a>
            </li>
            <li class="list-group-item">
                <a href="admin-apidocs.php">API Documentation</a>
            </li>
        </ul>
        <h3 class="rbt-ts-14 text-uppercase mt-3 mb-2">Configuration</h3>
        <ul class="list-group ">
            <li class="list-group-item">
                <a href="admin-garollup.php"  >Google Analytics Rollup</a>
            </li>
            <li class="list-group-item">
                <a href="admin-sysparameters.php" >System Parameters</a>
            </li>
            <li class="list-group-item">
                <a href="admin-reloadcache.php"  >Reload Cache </a>
            </li>
        </ul>
    </nav>
</div>
