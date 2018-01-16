
<nav class="nav-side-menu" style="margin-right: -30px; margin-top:10px"> <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    <div class="menu-list">
        <ul class="menu-content" id="menu-content" aria-expanded="false" aria-hidden="true" style="">
            <li>
                <button onclick="location.href = 'admin-userads.php';" > Moderator </button>
               
            </li>
            <li>
                <button  <?php if ($section == 'settings') {echo 'class=""';} else {echo 'class="collapsed"';} ?> data-toggle="collapse" data-target="#group2" aria-expanded="false" aria-controls="group2" class="collapsed"> Settings <span class="arrow"></span> </button>
                <ul <?php if ($section == 'settings') {echo 'class="menu-items collapse show"';} else {echo 'class="menu-items collapse"';} ?> class="menu-items collapse" id="group2">
                    <li <?php if ($page_title == 'generalsettings') { echo 'class="active"'; } ?>><a href="admin-generalsettings.php">General Settings</a></li>
                    <li <?php if ($page_title == 'branding') { echo 'class="active"'; } ?>><a href="admin-branding.php">Branding</a></li>
                    <li <?php if ($page_title == 'categories') { echo 'class="active"'; } ?>><a href="admin-categories.php">Categories</a></li>
                    <li <?php if ($page_title == 'markets') { echo 'class="active"'; } ?>><a href="admin-markets.php">Markets</a></li>
                    <li <?php if ($page_title == 'ldap') { echo 'class="active"'; } ?>><a href="admin-ldap.php">LDAP Configuration</a></li>
                    <li <?php if ($page_title == 'apiaccounts') { echo 'class="active"'; } ?>><a href="admin-apiaccounts.php">API Accounts</a></li>
                    <li <?php if ($page_title == 'apidocs') { echo 'class="active"'; } ?>><a href="admin-apidocs.php">API Documentation</a></li>
                </ul>
            </li>
            <li>
                <button  <?php if ($section == 'appconfig') {echo 'class=""';} else {echo 'class="collapsed"';} ?> data-toggle="collapse" data-target="#group4" aria-expanded="false" aria-controls="group4" class="collapsed"> Application Configuration <span class="arrow"></span> </button>
                <ul <?php if ($section == 'appconfig') {echo 'class="menu-items collapse show"';} else {echo 'class="menu-items collapse"';} ?> 	class="menu-items collapse" id="group4">
                    <li <?php if ($page_title == 'garollup') { echo 'class="active"'; } ?>><a href="admin-garollup.php">Google Analytics Rollup</a></li>
                    <li <?php if ($page_title == 'sysparameters') { echo 'class="active"'; } ?>><a href="admin-sysparameters.php">System Parameters</a></li>
                    <li <?php if ($page_title == 'reloadcache') { echo 'class="active"'; } ?>><a href="admin-reloadcache.php">Reload Cache </a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<div style="font-style:italic; padding-top:20px"> <a href="main-home.php">Main View</a></div>
