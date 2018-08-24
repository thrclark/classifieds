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
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb rbt-breadcrumb-no-bkg mb-3 pt-0">
                    <li class="breadcrumb-item"><a href="admin-usermaintenance1.php">User moderation</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add user</li>
                </ol>
            </nav>
            <h2>Add user</h2>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <form novalidate class="  ">
                                <div class="form-group">
                                    <label class="control-label" id="nameLabel">
                                        <message key="admin.field.name">Look up user</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="nameDirections">
                                        <message key="admin.market.name.directions">Enter the user name of the user to receive administrative action.</message>
                                    </div>
                                    <input aria-labelledby="nameLabel nameDirections" ccfvalidated="" class="form-control" formcontrolname="name" type="text">
                                </div>
                                
                                <!--         <div class="mb-3">
                                    <div class="font-weight-bold mb-1 mt-3"> Administrative action type </div>
                                    <div class="ccf-instructional-text" id="shortNameDirections">
                                        <message key="admin.market.field.shortName.directions">Select which type of action you wish to perform on this user.</message>
                                    </div>
                                    <div class="form-check demojs-adminactiontoggle">
                                        <input class="form-check-input" type="radio" name="takeactiontoggle1" id="takeadminaction1" value="3">
                                        <label class="form-check-label" for="takeadminaction1"> Revoke system access for this user. </label>
                                    </div>
                                    <div class="form-check mb-3 demojs-adminactiontoggle ">
                                        <input class="form-check-input" type="radio" name="takeactiontoggle1" id="justdeactivate2" value="2">
                                        <label class="form-check-label" for="justdeactivate2"> Issue warning to user for innapropriate actions/behavior. </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" id="shortNameLabel">
                                        <message key="admin.market.field.shortName">Action reason</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="shortNameDirections">
                                        <message key="admin.market.field.shortName.directions">Provide a reason for the action being taken (only seen by administrators).</message>
                                    </div>
                                    <textarea class="form-control" id="textarea-full" rows="5"></textarea>
                                </div>
                                <div class="mb-3">
                                    <div class="font-weight-bold mb-1 mt-3">Deactivate ads</div>
                                    <div class="form-check demojs-otherad">
                                        <div class="ccf-instructional-text" id="shortNameDirections">
                                            <message key="admin.market.field.shortName.directions">Select the ads posted by this user that you wish to deactivate.</message>
                                        </div>
                                        <input class="form-check-input" type="checkbox" value="" id="otherad1">
                                        <label class="form-check-label" for="otherad1"> "Math-M211 and M212 Text" <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a></label>
                                    </div>
                                    <div class="form-check demojs-otherad">
                                        <input class="form-check-input" type="checkbox" value="" id="otherad2">
                                        <label class="form-check-label" for="otherad2"> "Math-M211 and M212 Text" <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a></label>
                                    </div>
                                    <div class="form-check demojs-otherad">
                                        <input class="form-check-input" type="checkbox" value="" id="otherad3">
                                        <label class="form-check-label" for="otherad3"> "Math-M211 and M212 Text" <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="selectresponse1">Reason for administrative action</label>
                                    <select class="form-control" id="selectresponse1">
                                        <option value="Fraudulent activity">Fraudulent activity</option>
                                        <option value="Posting offensive material">Posting offensive material</option>
                                        <option value="Promoting a personal/commercial business">Promoting a personal/commercial business</option>
                                        <option value="Promoting a political/social agenda">Promoting a political/social agenda</option>
                                        <option value="Selling IU parking permit">Selling IU parking permit</option>
                                        <option value="Fake ad">Fake ad</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" id="shortNameLabel">
                                        <message key="admin.market.field.shortName">Message to send to user</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="shortNameDirections">
                                        <message key="admin.market.field.shortName.directions">Provide a message to be sent to the user regarding this action.</message>
                                    </div>
                                    <textarea class="form-control" id="textarea-full" rows="5"></textarea>
                                </div>-->
                                <div class="rbt-button-group mb-5"> <a class="btn btn-primary" routerlink="" href="admin-usermaintenance-add2.php">
                                        <message key="global.buttons.cancel">Next</message>
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
