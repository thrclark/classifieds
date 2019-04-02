 <a class="rbt-skip-link" href="#main-content">Skip to content</a> <a class="rbt-skip-link" href="#main-content" tabindex="0">Skip to content</a>
<header class="d-flex flex-nowrap rbt-app-header rbt-app-header--light"> <img src="../img/trident-large.png" alt="trident" class="rbt-brand-image mr-3"/>
    <div class="rbt-brand-title-container flex-grow-1"> <a href="#" class="rbt-brand-title font-weight-bold">IU Classifieds Administration </a> </div>
    <nav class="d-none d-lg-block pr-3">
        <ul class="nav align-items-center d-flex flex-nowrap">
            <li class="nav-item"> <a class="nav-link"  href="main-home.php" role="button" >Main view</a> </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Moderation</a>
                <div class="dropdown-menu"> <a <?php if ($page_title == 'Ads') { echo 'class="dropdown-item active"'; } ?> href="admin-ads.php" class="dropdown-item">Moderate ads</a> <a <?php if ($page_title == 'Moderate users') { echo 'class="dropdown-item active"'; } ?> href="admin-usermaintenance1.php" class="dropdown-item">Moderate users</a> <a <?php if ($page_title == 'Reindex ad') { echo 'class="dropdown-item active"'; } ?> href="admin-reindexad.php" class="dropdown-item">Reindex ad</a> </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
                <div class="dropdown-menu"> <a <?php if ($page_title == 'General settings') { echo 'class="dropdown-item active"'; } ?> href="admin-generalsettings.php" class="dropdown-item">General settings</a> <a <?php if ($page_title == 'Categories') { echo 'class="dropdown-item active"'; } ?> href="admin-categories.php" class="dropdown-item">Categories</a> <a <?php if ($page_title == 'Markets') { echo 'class="dropdown-item active"'; } ?> href="admin-campuses.php" class="dropdown-item">Campuses</a> <a <?php if ($page_title == 'Policy') { echo 'class="dropdown-item active"'; } ?> href="admin-policymaintenance.php" class="dropdown-item">Policy</a> <a <?php if ($page_title == 'LDAP configuration') { echo 'class="dropdown-item active"'; } ?> href="admin-ldap.php" class="dropdown-item">LDAP configuration</a> <a <?php if ($page_title == 'Branding') { echo 'class="dropdown-item active"'; } ?> href="admin-branding.php" class="dropdown-item">Branding</a> <a <?php if ($page_title == 'API accounts') { echo 'class="dropdown-item active"'; } ?> href="admin-apiaccounts.php" class="dropdown-item">API accounts</a> <a <?php if ($page_title == 'API documentation') { echo 'class="dropdown-item active"'; } ?> href="admin-apidocs.php" class="dropdown-item">API documentation</a> </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Configuration</a>
                <div class="dropdown-menu"> <a <?php if ($page_title == 'Google Analytics Rollup') { echo 'class="dropdown-item active"'; } ?> href="admin-garollup.php" class="dropdown-item" >Google Analytics rollup</a> <a <?php if ($page_title == 'System parameters') { echo 'class="dropdown-item active"'; } ?> href="admin-sysparameters.php" class="dropdown-item">System parameters</a> <a <?php if ($page_title == 'Reload cache') { echo 'class="dropdown-item active"'; } ?> href="admin-reloadcache.php" class="dropdown-item" >Reload cache </a> </div>
            </li>
        </ul>
    </nav>
    <div class="d-lg-none rbt-drawer-button">
        <button class="btn btn-link"><span class="rbt-icon-menu" aria-hidden="true"><span class="sr-only">
        <message key="global.button.openNavigation">Open User Menu</message>
        </span></span> </button>	
    </div>
</header>
<div class="rbt-drawer d-lg-none">
    <nav>
        <ul class="list-group ">
            <li class="list-group-item"> <a href="main-home.php">Main view</a> </li>
        </ul>
        <h3 class="rbt-ts-14 text-uppercase mt-4 mb-2">Moderator</h3>
        <ul class="list-group ">
            <li class="list-group-item"> <a href="admin-ads.php">Moderate ads</a> </li>
            <li class="list-group-item"> <a href="admin-usermaintenance1.php">Moderate users</a> </li>
            <li class="list-group-item"> <a href="admin-reindexad.php">Reindex ad</a> </li>
        </ul>
        <h3 class="rbt-ts-14 text-uppercase  mt-3 mb-2">Settings</h3>
        <ul class="list-group ">
            <li class="list-group-item"> <a href="admin-generalsettings.php">General settings</a> </li>
            <li class="list-group-item"> <a href="admin-branding.php">Branding</a> </li>
            <li class="list-group-item"> <a href="admin-categories.php">Categories</a> </li>
            <li class="list-group-item"> <a href="admin-campuses.php">Campuses</a> </li>
            <li class="list-group-item"> <a href="admin-policymaintenance.php">Policy</a> </li>
            <li class="list-group-item"> <a href="admin-ldap.php">LDAP configuration</a> </li>
            <li class="list-group-item"> <a href="admin-apiaccounts.php">API accounts</a> </li>
            <li class="list-group-item"> <a href="admin-apidocs.php">API documentation</a> </li>
        </ul>
        <h3 class="rbt-ts-14 text-uppercase mt-3 mb-2">Configuration</h3>
        <ul class="list-group ">
            <li class="list-group-item"> <a href="admin-garollup.php"  >Google Analytics rollup</a> </li>
            <li class="list-group-item"> <a href="admin-sysparameters.php" >System parameters</a> </li>
            <li class="list-group-item"> <a href="admin-reloadcache.php"  >Reload cache </a> </li>
        </ul>
    </nav>
</div>
