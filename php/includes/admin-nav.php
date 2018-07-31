
<nav class="sidebar mt-3">
    <ul class="rbt-sidebar-nav">
        <li><span class="text-uppercase">Moderator</span>
            <ul class="list-unstyled">
                <li <?php if ($page_title == 'Ads') { echo 'class="active"'; } ?>>
                    <a href="admin-ads.php">Ads</a>
                </li>
                <li <?php if ($page_title == 'Restricted users') { echo 'class="active"'; } ?>>
                    <a href="admin-restricted.php">Restricted users</a>
                </li>
                <li <?php if ($page_title == 'xxxxxxxxx') { echo 'class="active"'; } ?>>
                    <a href="main-home.php">Main View</a>
                </li>
            </ul>
        </li>
        <li><span class="text-uppercase">Settings</span>
            <ul class="list-unstyled">
                <li <?php if ($page_title == 'General Settings') { echo 'class="active"'; } ?>>
                    <a href="admin-generalsettings.php">General settings</a>
                </li>
                <li <?php if ($page_title == 'Branding') { echo 'class="active"'; } ?>>
                    <a href="admin-branding.php">Branding</a>
                </li>
                <li <?php if ($page_title == 'Categories') { echo 'class="active"'; } ?>>
                    <a href="admin-categories.php">Categories</a>
                </li>
                <li <?php if ($page_title == 'Campuses') { echo 'class="active"'; } ?>>
                    <a href="admin-campuses.php">Campuses</a>
                </li>
                <li <?php if ($page_title == 'LDAP configuration') { echo 'class="active"'; } ?>>
                    <a href="admin-ldap.php">LDAP configuration</a>
                </li>
                <li <?php if ($page_title == 'API accounts') { echo 'class="active"'; } ?>>
                    <a href="admin-apiaccounts.php">API accounts</a>
                </li>
                <li <?php if ($page_title == 'API documentation') { echo 'class="active"'; } ?>>
                    <a href="admin-apidocs.php">API documentation</a>
                </li>
            </ul>
        </li>
        <li><span class="text-uppercase">Configuration</span>
            <ul class="list-unstyled">
                <li <?php if ($page_title == 'Google Analytics rollup') { echo 'class="active"'; } ?>>
                    <a href="admin-garollup.php">Google Analytics rollup</a>
                </li>
                <li <?php if ($page_title == 'System parameters') { echo 'class="active"'; } ?>>
                    <a href="admin-sysparameters.php">System parameters</a>
                </li>
                <li <?php if ($page_title == 'Reload cache') { echo 'class="active"'; } ?>>
                    <a href="admin-reloadcache.php">Reload cache </a>
                </li>
            </ul>
        </li>
        <li><span class="text-uppercase">Post MVP</span>
            <ul class="list-unstyled">
                <li <?php if ($page_title == 'Moderator') { echo 'class="active"'; } ?>>
                    <a href="admin-ads-postmvp.php">Moderator</a>
                </li>
                <li <?php if ($page_title == 'Moderate Ads &amp; Users') { echo 'class="active"'; } ?>>
                    <a href="admin-userads.php">Moderate ads &amp; users</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
