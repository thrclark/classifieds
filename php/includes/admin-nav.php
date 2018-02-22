
<nav class="sidebar">
    <ul class="rbt-sidebar-nav">
        <li <?php if ($page_title == 'xxxxxxxxx') { echo 'class="active"'; } ?>> <a href="main-home.php">Main View</a> </li>
    </ul>
</nav>
<hr>
<nav class="sidebar">
    <ul class="rbt-sidebar-nav">
        <li <?php if ($page_title == 'Moderator') { echo 'class="active"'; } ?>><a href="admin-ads.php">Moderator</a></li>
         <li <?php if ($page_title == 'Moderate Ads &amp; Users') { echo 'class="active"'; } ?>><a href="admin-userads.php">Moderate ads &amp; asers</a> </li>
        <li <?php if ($page_title == 'General Settings') { echo 'class="active"'; } ?>><a href="admin-generalsettings.php">General settings</a></li>
        <li <?php if ($page_title == 'Branding') { echo 'class="active"'; } ?>><a href="admin-branding.php">Branding</a></li>
        <li <?php if ($page_title == 'Categories') { echo 'class="active"'; } ?>><a href="admin-categories.php">Categories</a></li>
        <li <?php if ($page_title == 'Markets') { echo 'class="active"'; } ?>><a href="admin-markets.php">Markets</a></li>
        <li <?php if ($page_title == 'LDAP configuration') { echo 'class="active"'; } ?>><a href="admin-ldap.php">LDAP configuration</a></li>
        <li <?php if ($page_title == 'API accounts') { echo 'class="active"'; } ?>><a href="admin-apiaccounts.php">API accounts</a></li>
        <li <?php if ($page_title == 'API documentation') { echo 'class="active"'; } ?>><a href="admin-apidocs.php">API documentation</a></li>
        <li <?php if ($page_title == 'Google Analytics rollup') { echo 'class="active"'; } ?>><a href="admin-garollup.php">Google Analytics rollup</a></li>
        <li <?php if ($page_title == 'System parameters') { echo 'class="active"'; } ?>><a href="admin-sysparameters.php">System parameters</a></li>
        <li <?php if ($page_title == 'Reload cache') { echo 'class="active"'; } ?>><a href="admin-reloadcache.php">Reload cache </a></li>
    </ul>
</nav>
