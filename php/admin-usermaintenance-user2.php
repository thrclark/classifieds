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
        <div class="row mb-1 no-gutters align-items-center mb-3">
            <div class="col">
                <h1> <?php echo $page_title; ?></h1>
            </div>
            <div class="col-auto">
                <div class="mr-3 pr-3 border-right"><a class="btn btn-link font-weight-normal" href="admin-usermaintenance1.php">View all</a></div>
            </div>
            <div class="col-auto">
                <div class="form-group mb-0" style="margin-bottom:0px !important">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Find user" aria-label="" aria-describedby="" id="demojs_uservalue" >
                        <div class="input-group-append"> <a href="" class="btn btn-primary" id="finduser"><i aria-hidden="true" class="fa fa-search"></i> <span class="sr-only">Search</span></a> </div>
                    </div>
                </div>
            </div>
        </div>
        <h2>Activity for 'jhopf'</h2>
        <div class="row">
            <div class="col">
                <ul class="rvb-timeline mt-3" id="timeline2" style="">
                    <li>
                        <div class="rvb-timeline-marker bg-secondary"></div>
                        <div class="card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="card-title">Administrative actions</h2>
                                </div>
                                <div class="col-auto"><span class="rbt-icon-chevron-down" id="btn_showdet1-2"></span></div>
                            </div>
                            <div class="row mt-3 border-top" id="showdet1-2" style="display:none">
                                <div class="col-8 pt-3">
                                    <form class="">
                                        <fieldset>
                                            <legend class="">Administrative actions</legend>
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
                                                <label class="form-check-label" for="otherad3"> "Math-M211 and M212 Text" <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a></label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input demojs-otherad" type="checkbox" value="" id="otherad4" >
                                                <label class="form-check-label" for="otherad4"> "Math-M211 and M212 bo0k" <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a> </label>
                                            </div>
                                            <div class="font-weight-bold mb-1 mt-3">Revoke system access for 'thrclark'? </div>
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
                                        <fieldset class="demojs-sendusermessage">
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
                                        <div class="rbt-button-group mt-3"> <a class="btn btn-primary demojs-btn-hiderevoke" routerlink="" href="#">
                                                <message key="global.buttons.cancel">Perform actions</message>
                                            </a> <a class="btn btn-outline-primary demojs-btn-hiderevoke" routerlink="" href="#">
                                                <message key="global.buttons.cancel">Cancel</message>
                                            </a> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/13/2018</span> <span>11:27 AM</span></time>
                        <div class="rvb-timeline-marker bg-success"></div>
                        <div class="card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="card-title">Access reinstated</h2>
                                </div>
                                <div class="col-auto"><span class="rbt-icon-chevron-up" id="btn_showdet2-4"></span></div>
                            </div>
                            <div class="row mt-3 border-top" id="showdet2-4" style="display:nonee">
                                <div class="col">
                                    <dl class="row justify-content-end mt-4">
                                        <dt class="col-sm-3">Admin notes</dt>
                                        <dd class="col-sm-9">User emailed us on 0/8/13/2018 with an apology, and expressed intent to abide by policy.</dd>
                                        <dt class="col-sm-3">Message sent to user</dt>
                                        <dd class="col-sm-9">Your access to IU Classifieds has been restored. Please be aware that future violations will result in revoked access to IU Classifieds. We encourage you to continue using Classifieds for appropriate reasons.</dd>
                                        <dt class="col-sm-3">System access</dt>
                                        <dd class="col-sm-9">Enabled</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/07/2018</span> <span>03:42 AM</span></time>
                        <div class="rvb-timeline-marker bg-danger"></div>
                        <div class="card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="card-title">Access revoked; ad deactivated (fradulent activity)</h2>
                                </div>
                                <div class="col-auto"><span class="rbt-icon-chevron-up" id="btn_showdet2-3"></span></div>
                            </div>
                            <div class="row mt-3 border-top" id="showdet2-3" style="display:nonee">
                                <div class="col">
                                    <dl class="row justify-content-end mt-3">
                                        <dt class="col-sm-3">Deactivated ads</dt>
                                        <dd class="col-sm-9">"Sublet apartment near campus" <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a> </dd>
                                        <dt class="col-sm-3">Deactivation reason</dt>
                                        <dd class="col-sm-9">Fraudulent activity</dd>
                                        <dt class="col-sm-3">Message sent to user</dt>
                                        <dd class="col-sm-9">We have verified repeated instances of policy violations of the IU Classifieds system on your behalf. As such, your access has now been revoked. If you wish to address this situation with IU Classifieds administrators, please contact <a href="mailto:">one@iu.edu</a></dd>
                                        <dt class="col-sm-3">System access</dt>
                                        <dd class="col-sm-9">Revoked</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/07/2018</span> <span>09:38 AM</span></time>
                        <div class="rvb-timeline-marker bg-warning"></div>
                        <div class="card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="card-title">Warning issued; ad deactivated (selling IU parking permit)</h2>
                                </div>
                                <div class="col-auto"><span class="rbt-icon-chevron-up" id="btn_showdet2-2"></span></div>
                            </div>
                            <div class="row mt-3 border-top" id="showdet2-2" style="display:nonee">
                                <div class="col">
                                    <dl class="row justify-content-end mt-3">
                                        <dt class="col-sm-3">Deactivated ad</dt>
                                        <dd class="col-sm-9">"Sublet apartment near campus" <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a> </dd>
                                        <dt class="col-sm-3">Deactivation reason</dt>
                                        <dd class="col-sm-9">Selling IU parking permit</dd>
                                        <dt class="col-sm-3">Message sent to user</dt>
                                        <dd class="col-sm-9">Your IU Classifieds ad(s) for the buying or selling of IU parking permits violates IU policy.  IU Permits are property of the University. Please be aware that your ad(s) have been removed, and future violations may result in revoked access to IU Classifieds. We encourage you to continue using Classifieds for appropriate reasons.</dd>
                                        <dt class="col-sm-3">System access</dt>
                                        <dd class="col-sm-9">Enabled</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/07/2018</span> <span>03:42 AM</span></time>
                        <div class="rvb-timeline-marker bg-warning"></div>
                        <div class="card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="card-title">Warning issued; ads deactivated (fradulent activity)</h2>
                                </div>
                                <div class="col-auto"><span class="rbt-icon-chevron-up" id="btn_showdet2-1"></span></div>
                            </div>
                            <div class="row mt-3 border-top" id="showdet2-1" style="display:nonee">
                                <div class="col">
                                    <dl class="row justify-content-end mt-3">
                                        <dt class="col-sm-3">Deactivated ads</dt>
                                        <dd class="col-sm-9">"Sublet apartment near campus" <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a> </dd>
                                        <dd class="col-sm-9 offset-md-3">"Math 101 textbook" <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a> </dd>
                                        <dd class="col-sm-9 offset-md-3">"Rideshare to Chicago needed" <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a> </dd>
                                        <dt class="col-sm-3">Deactivation reason</dt>
                                        <dd class="col-sm-9">Fraudulent activity</dd>
                                        <dt class="col-sm-3">Message sent to user</dt>
                                        <dd class="col-sm-9">We have received a complaint regarding your use of Classifieds. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.</dd>
                                        <dt class="col-sm-3">System access</dt>
                                        <dd class="col-sm-9">Enabled</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</div>
<?php include('includes/admin-footerscripts.php') ?>
<script>
    $(document).ready(function() {
        $("#btn_showdet1-1").click(function() {
            $("#showdet1-1").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet1-2").click(function() {
            $("#showdet1-2").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet1-3").click(function() {
            $("#showdet1-3").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet1-4").click(function() {
            $("#showdet1-4").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet2-1").click(function() {
            $("#showdet2-1").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet2-2").click(function() {
            $("#showdet2-2").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet2-3").click(function() {
            $("#showdet2-3").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet2-4").click(function() {
            $("#showdet2-4").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet3-1").click(function() {
            $("#showdet3-1").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet3-2").click(function() {
            $("#showdet3-2").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet3-3").click(function() {
            $("#showdet3-3").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet3-4").click(function() {
            $("#showdet3-4").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet4-1").click(function() {
            $("#showdet4-1").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet4-2").click(function() {
            $("#showdet4-2").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet4-3").click(function() {
            $("#showdet4-3").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
        $("#btn_showdet4-4").click(function() {
            $("#showdet4-4").slideToggle();
            $(this).toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $(".demojs-btn-showrevoke").click(function() {
            $("#showrevoke").slideDown();
            $("#showadminnote").hide();
            $("#showwarning").hide();
        });
        $(".demojs-btn-hiderevoke").click(function() {
            $("#showrevoke").hide();
        });
        $(".demojs-btn-shownote").click(function() {
            $("#showadminnote").slideDown();
            $("#showrevoke").hide();
            $("#showwarning").hide();
        });
        $(".demojs-btn-hidenote").click(function() {
            $("#showadminnote").hide();
        });
        $(".demojs-btn-showwarning").click(function() {
            $("#showwarning").slideDown();
            $("#showrevoke").hide();
            $("#showadminnote").hide();
        });
        $(".demojs-btn-hidewarning").click(function() {
            $("#showwarning").hide();
        });
    });
</script> 
<script>
$(document).ready(function () {
    $("#finduser").click(function () {
	
        var text = $("#demojs_uservalue").val();
        var user0 = "ewestfal";
var user1 = "thrclark";
		var user2 = "jhopf";
		var user3 = "jtwalker";
		var user4 = "eecox";
        if (text == user0) {
            $('#finduser').attr("href", "admin-usermaintenance-user0.php");
        }
 if (text == user1) {
            $('#finduser').attr("href", "admin-usermaintenance-user1.php");
        }
		if (text == user2) {
             $('#finduser').attr("href", "admin-usermaintenance-user2.php");
        }
		if (text == user3) {
             $('#finduser').attr("href", "admin-usermaintenance-user3.php");
        }
		if (text == user4) {
             $('#finduser').attr("href", "admin-usermaintenance-user4.php");
        }
    });
	 $("#demojs_uservalue").click(function () {
		 	alert( "For the prototype, valid usernames are: ewestfal, thrclark, jhopf, jtwalker, eecox" );
	});
});
</script>
</body>
</html>
