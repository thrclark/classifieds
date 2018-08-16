<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'User moderation';
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
<div class="container pt-3">
    <main class="main-content">
        <router-outlet></router-outlet>
        <ng-component>
            <div class="row mb-3 no-gutters align-items-center">
                <div class="col-12 col-sm">
                    <h1> <?php echo $page_title; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <form novalidate class="  ">
                                <div class="form-group">
                                    <label class="control-label" id="nameLabel">
                                        <message key="admin.field.name">User name</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="nameDirections">
                                        <message key="admin.market.name.directions">This user will have system access reinstated.</message>
                                    </div>
                                    <input aria-labelledby="nameLabel nameDirections" ccfvalidated="" class="form-control" formcontrolname="name" type="text" value="thrclark" disabled>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" id="shortNameLabel">
                                        <message key="admin.market.field.shortName">Reinstatement reason</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="shortNameDirections">
                                        <message key="admin.market.field.shortName.directions">Provide a reason for reinstating this user's system access (only seen by administrators).</message>
                                    </div>
                                    <textarea class="form-control" id="textarea-full" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" id="shortNameLabel">
                                        <message key="admin.market.field.shortName">Message to send to user</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="shortNameDirections">
                                        <message key="admin.market.field.shortName.directions">Provide a message to be sent to the user regarding this action.</message>
                                    </div>
                                    <textarea class="form-control" id="textarea-full" rows="5"></textarea>
                                </div>
                                <div class="rbt-button-group mb-5"> <a class="btn btn-primary" routerlink="" href="admin-usermaintenance1.php">
                                        <message key="global.buttons.cancel">Reinstate user's access</message>
                                    </a> <a class="btn btn-outline-primary" routerlink="" href="admin-usermaintenance1.php">
                                        <message key="global.buttons.cancel">Cancel</message>
                                    </a> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </ng-component>
    </main>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
