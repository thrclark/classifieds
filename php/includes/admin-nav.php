
<nav class="sidebar">
    <ul class="rbt-sidebar-nav font-italic">
        <li <?php if ($page_title == 'xxxxxxxxx') { echo 'class="active"'; } ?>> <a href="main-home.php">Main View</a> </li>
    </ul>
</nav>
<hr>
<nav class="sidebar">
    <ul class="rbt-sidebar-nav">
        <li <?php if ($page_title == 'userads') { echo 'class="active"'; } ?>><a href="admin-userads.php">Moderate Ads & Users</a></li>
        <li <?php if ($page_title == 'generalsettings') { echo 'class="active"'; } ?>><a href="admin-generalsettings.php">General Settings</a></li>
        <li <?php if ($page_title == 'branding') { echo 'class="active"'; } ?>><a href="admin-branding.php">Branding</a></li>
        <li <?php if ($page_title == 'categories') { echo 'class="active"'; } ?>><a href="admin-categories.php">Categories</a></li>
        <li <?php if ($page_title == 'markets') { echo 'class="active"'; } ?>><a href="admin-markets.php">Markets</a></li>
        <li <?php if ($page_title == 'ldap') { echo 'class="active"'; } ?>><a href="admin-ldap.php">LDAP Configuration</a></li>
        <li <?php if ($page_title == 'apiaccounts') { echo 'class="active"'; } ?>><a href="admin-apiaccounts.php">API Accounts</a></li>
        <li <?php if ($page_title == 'apidocs') { echo 'class="active"'; } ?>><a href="admin-apidocs.php">API Documentation</a></li>
        <li <?php if ($page_title == 'garollup') { echo 'class="active"'; } ?>><a href="admin-garollup.php">Google Analytics Rollup</a></li>
        <li <?php if ($page_title == 'sysparameters') { echo 'class="active"'; } ?>><a href="admin-sysparameters.php">System Parameters</a></li>
        <li <?php if ($page_title == 'reloadcache') { echo 'class="active"'; } ?>><a href="admin-reloadcache.php">Reload Cache </a></li>
    </ul>
</nav>
