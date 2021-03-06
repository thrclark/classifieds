<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Moderate users';
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
    <main class="main-content">
        <div class="d-flex flex-row bd-highlight mb-3 align-items-center">
            <h1 class="flex-grow-1"> <?php echo $page_title; ?></h1>
            <div class="mr-4 pr-1 border-right"><a class="btn btn-link font-weight-normal" href="admin-usermaintenance1.php">View all</a></div>
            <div class="form-group" style="margin-bottom: 0rem !important;">
                <div class="input-group clear-field">
                    <label class="sr-only" for="demojs_uservalue">Find/add user</label>
                    <input type="text" class="form-control" placeholder="Find/add user" aria-label="" aria-describedby="" id="demojs_uservalue" >
                    <button class="cleartext" id="cleartext2" style="display:none"> <i class="rbt-icon-circle-close"></i></button>
                    <div class="input-group-append"> <a href="" class="btn btn-primary" id="finduser"><i aria-hidden="true" class="fa fa-search"></i> <span class="sr-only">Search</span></a> </div>
                </div>
            </div>
        </div>
        <h2>Activity for 'eecox'</h2>
        <div class="mr-5 mt-3 pr-1 float-right"><a class="btn btn-sm btn-link font-weight-normal" href="#" id="expand_collapse">Expand all</a></div>
        <div class="p-5 bg-white border">
            <ul class="rvb-timeline" id="timeline4" >
                <li>
                    <div class="rvb-timeline-marker bg-secondary"></div>
                    <div class="card">
                        <div class="row">
                            <div class="col">
                                <h2 class="card-title">Restore access</h2>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-sm btn-link rbt-icon-chevron-down" id="btn_showdet4-4"><span class="sr-only">Expand/collapse section</span></button>
                            </div>
                        </div>
                        <div class="row mt-3 border-top" id="showdet4-4" style="display:none">
                            <div class="col-8 pt-3">
                                <form class="">
                                    <fieldset>
                                        <legend class="">Restore access</legend>
                                        <div class="form-group" style="">
                                            <label for="exampleInputEmail1">Reason</label>
                                            <countdown>
                                                <div class="rbt-charcount">
                                                    <input aria-labelledby="otherReason" class="form-control " formcontrolname="title" id="otherReason">
                                                    <span class="badge badge-success" id="counterDemo1_badge"> <span id="charcounter1">100</span> </span> </div>
                                            </countdown>
                                        </div>
                                        <div class="font-weight-bold mb-1 mt-3">Send an email to 'eecox'?</div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="sendusermessage_toggle" checked="">
                                            <label class="form-check-label" for="sendusermessage_toggle"> Send email </label>
                                        </div>
                                    </fieldset>
                                    <fieldset class="demojs-sendusermessage" >
                                        <legend class="">Email user</legend>
                                        <div class="form-group">
                                            <label for="banneduseruser">User</label>
                                            <input type="text" class="form-control" id="banneduseruser" placeholder="" value="eecox@indiana.edu" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="responsefield1">Email to be sent</label>
                                            <textarea class="form-control" id="responsefield1" rows="8">We have received a complaint regarding your use of Classifieds. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.</textarea>
                                        </div>
                                    </fieldset>
                                    <div class="rbt-button-group mt-3"> <a class="btn btn-primary demojs-btn-hiderevoke" routerlink="" href="#">
                                            <message key="global.buttons.cancel">Perform actions</message>
                                        </a> </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/04/2018</span> <span>03:42 AM</span></time>
                    <div class="rvb-timeline-marker bg-danger"></div>
                    <div class="card">
                        <div class="row">
                            <div class="col">
                                <h2 class="card-title">Access revoked</h2>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-sm btn-link rbt-icon-chevron-down" id="btn_showdet4-1"><span class="sr-only">Expand/collapse section</span></button>
                            </div>
                        </div>
                        <div class="row mt-3 border-top" id="showdet4-1" style="display:nonne">
                            <div class="col">
                                <dl class="row justify-content-end mt-3">
                                    <dt class="col-sm-3">Reason</dt>
                                    <dd class="col-sm-9">The security office emailed us us on 8/12/2018 with the following note: "Please deacivate any account access on behalf of user 'eecox'. Please notify us of any future communications you might have with this user." </dd>
                                    <dt class="col-sm-3">Email sent to user</dt>
                                    <dd class="col-sm-9">The University Security Office has requested that we revoke your access to the Classifieds system. Please direct any correspondences regarding this matter to <a href="#">itsecure@iu.edu</a>.</dd>
                                    <dt class="col-sm-3">System access</dt>
                                    <dd class="col-sm-9">Revoked</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>
</div>
<?php include('modals/modal-admin-ad-detail.php') ?>
<?php include('includes/main-custom-footer.php') ?>
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
        $('#expand_collapse').click(function(){
    		var x = document.getElementById("expand_collapse");
  			if (x.innerHTML === "Expand all") {
    			x.innerHTML = "Collapse all";
  			} else {
    			x.innerHTML = "Expand all";
  			}
    		
    		$("#showdet4-1").slideToggle();
    		$("#showdet4-2").slideToggle();
    		$("#showdet4-3").slideToggle();
    		$("#showdet4-4").slideToggle();
    	
    		$("#btn_showdet4-1").toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
    		$("#btn_showdet4-2").toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
    		$("#btn_showdet4-3").toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
    		$("#btn_showdet4-4").toggleClass("rbt-icon-chevron-down rbt-icon-chevron-up ");
  		});
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
		var user5 = "";
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
		if (text == user5) {
             $('#finduser').attr("href", "admin-usermaintenance1-usernotfound.php");
        }
    });
	 $("#demojs_uservalue").click(function () {
		 	// alert( "For the prototype, valid usernames are: ewestfal, thrclark, jhopf, jtwalker, eecox" );
	});
});
</script> 
<script>
$(document).ready(function() {
    $('#demojs_uservalue').keydown(function() {
        tmpval = $(this).val();
        if (tmpval == '') {
            $("#cleartext2").css({
                "display": "none"
            });
        } else {
            $("#cleartext2").css({
                "display": "block"
            });
        }
    });
    $("#cleartext2").click(function() {
        $("#cleartext2").hide();
        $("#demojs_uservalue").val("");
        $("#demojs_uservalue").focus();
    });
});
</script>
</body>
</html>
