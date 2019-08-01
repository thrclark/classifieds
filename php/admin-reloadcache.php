<?php 
$audience = 'admin';
$section = 'appconfig';
$page_title = 'Reload cache';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/admin-styles.php') ?>
</head>
<body>
<?php include('includes/all-custom-header.php') ?>
<?php include('includes/admin-appheader.php') ?>
<div class="container pt-3 mb-5">
    <div class="row">
        <div class="col-12">
            <main class="main-content">
                <router-outlet></router-outlet>
                <ng-component>
                    <div class="row mb-3 no-gutters align-items-center">
                        <div class="col-12 col-sm">
                            <h1> <?php echo $page_title; ?></h1>
                        </div>
                    </div>
                    <div class="btn-group" dropdown="">
                        <button class="btn btn-primary" type="button">
                        <message key="admin.cache.reload.button">Reload</message>
                        </button>
                        <button aria-controls="dropdown-split" class="btn btn-primary dropdown-toggle dropdown-toggle-split" dropdowntoggle="" id="button-split" type="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span> <span class="sr-only">
                        <message key="admin.buttons.dropdown.toggle">Toggle dropdown</message>
                        </span> </button>
                        <!---->
                        <ul aria-labelledby="button-split" class="dropdown-menu" id="dropdown-split" role="menu" style="left: 0px; right: auto; top: 100%; transform: translateY(0px);">
                            <li role="menuitem">
                                <button class="dropdown-item">
                                <message key="admin.cache.reload.button.index">Reload and index ads</message>
                                </button>
                            </li>
                        </ul>
                    </div>
                </ng-component>
            </main>
        </div>
    </div>
</div>
<?php include('includes/main-custom-footer.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
