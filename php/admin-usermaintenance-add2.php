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
                    <li class="breadcrumb-item"><a href="admin-usermaintenance-add.php">Add user</a></li>
                    <li class="breadcrumb-item active" aria-current="page">'thrclark'</li>
                </ol>
            </nav>
            <h2>User 'thrclark'</h2>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <form class="">
                                <div class="card bg-light mb-3">
                                    <div class="card-body">
                                        <fieldset>
                                            <legend class="">Administrative actions</legend>
                                            <div class="form-group">
                                                <label for="selectresponse1">Reason for administrative action</label>
                                                <select class="form-control" id="selectresponse1">
                                                    <option value="Fraudulent activity">Fraudulent activity</option>
                                                    <option value="Contains offensive material">Contains offensive material</option>
                                                    <option value="Promotes personal/commercial business">Promotes personal/commercial business</option>
                                                    <option value="Promotes a political/social agenda">Promotes a political/social agenda</option>
                                                    <option value="Selling IU parking permit">Selling IU parking permit</option>
                                                    <option value="Fake ad">Fake ad</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group demojs-specifyreason" style="display:none">
                                                <label for="exampleInputEmail1">Specify reason for administrative action</label>
                                                <countdown>
                                                    <div class="rbt-charcount">
                                                        <input aria-labelledby="otherReason" class="form-control " formcontrolname="title" id="otherReason">
                                                        <span class="badge badge-success" id="counterDemo1_badge"> <span id="charcounter1">100</span> </span> </div>
                                                </countdown>
                                            </div>
                                            <div class="font-weight-bold mb-1 mt-3">Deactivate ads by 'thrclark'</div>
                                            <div class="form-check">
                                                <input class="form-check-input demojs-otherad" type="checkbox" value="" id="otherad3" >
                                                <label class="form-check-label" for="otherad3"> Math-M211 and M212 Text <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a></label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input demojs-otherad" type="checkbox" value="" id="otherad4" >
                                                <label class="form-check-label" for="otherad4"> Math-M211 and M212 bo0k <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a> </label>
                                            </div>
                                            <div class="font-weight-bold mb-1 mt-3">Revoke system access for 'thrclark'? <a href="#" class="small font-italic" data-toggle="popover" data-placement="bottom" title="" data-content="<div class='border-bottom'>Fraudulent activity</div><ul class='small list-unstyled mb-2'><li>06/26/2017</li><li>09/06/2017</li></ul><div class='border-bottom'>Selling IU parking permit</div><ul class='small list-unstyled mb-2'><li>07/26/2017</li></ul>" data-original-title="Violations for 'thrclark'">(3 previous violations)</a></div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="revokeaccess1">
                                                <label class="form-check-label" for="revokeaccess1"> Yes, revoke access (this will deactivate all ads by this user). </label>
                                            </div>
                                            <div class="font-weight-bold mb-1 mt-3">Send a message to 'thrclark'?</div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="sendusermessage_toggle" checked="">
                                                <label class="form-check-label" for="sendusermessage_toggle"> Send message </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="card bg-light mb-3 demojs-sendusermessage">
                                    <div class="card-body">
                                        <fieldset>
                                            <legend class="">Message user</legend>
                                            <div class="form-group">
                                                <label for="banneduseruser">User</label>
                                                <input type="text" class="form-control" id="banneduseruser" placeholder="" value="thrclark" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="responsefield1">Message to be sent</label>
                                                <textarea class="form-control" id="responsefield1" rows="8">We have received a complaint regarding your use of Classifieds. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.</textarea>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="rbt-button-group mb-5"> <a class="btn btn-primary" routerlink="" href="admin-usermaintenance1.php">
                                        <message key="global.buttons.cancel">Perform actions</message>
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
<script type="text/javascript">
    $(document).ready(function() {

        $('#revokeaccess1').change(function() {
            if ($(this).prop('checked')) {
                $('.demojs-otherad').prop('checked', true);
				$('.demojs-otherad').attr("disabled", true);
            } else {
                $('.demojs-otherad').prop('checked', false);
				$('.demojs-otherad').attr("disabled", false);
            }
        });
        $('#revokeaccess1').trigger('change');

    });
</script>
</body>
</html>
