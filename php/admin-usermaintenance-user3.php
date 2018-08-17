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
          <div class="row mb-1 no-gutters align-items-center">
            <div class="col-12 col-sm">
                <h1> <?php echo $page_title; ?></h1>
            </div>
        </div>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb rbt-breadcrumb-no-bkg mb-3 pt-0">
                <li class="breadcrumb-item"><a href="admin-usermaintenance1.php">User moderation</a></li>
                <li class="breadcrumb-item active" aria-current="page">'zealfleo'</li>
            </ol>
        </nav>    
        
        
        
         <h2>Viewing activity for 'zealfleo'</h2>    
         
         
            
           
            <div class="row">
                <div class="col">
                    <ul class="rvb-timeline mt-3" id="timeline3" style="">     <li>
                        <div class="rvb-timeline-marker bg-secondary"></div>
                        <div class="card">
                            <div class="row">
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Add action </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item demojs-btn-showrevoke" href="#">Restore system access</a>  </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 border-top" id="showrevoke" style="display:none">
                                <div class="col-12 mt-3 mb-3">
                                    <h2 class="card-title mt-3 mb-3">Restore system access</h2>
                                </div>
                                <div class="col-12">
                                    <form novalidate class="  ">
                                        <div class="form-group">
                                            <label class="control-label" id="nameLabel">
                                                <message key="admin.field.name">User name</message>
                                            </label>
                                            <div class="ccf-instructional-text" id="nameDirections">
                                                <message key="admin.market.name.directions">This user will have system access restored.</message>
                                            </div>
                                            <input aria-labelledby="nameLabel nameDirections" ccfvalidated="" class="form-control" formcontrolname="name" type="text" value="zealfleo" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" id="shortNameLabel">
                                                <message key="admin.market.field.shortName">Restoration reason</message>
                                            </label>
                                            <div class="ccf-instructional-text" id="shortNameDirections">
                                                <message key="admin.market.field.shortName.directions">Provide a reason for restoring this user's system access (only seen by administrators).</message>
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
                                        <div class="rbt-button-group mb-5"> <a class="btn btn-primary demojs-btn-hiderevoke" routerlink="" href="#">
                                                <message key="global.buttons.cancel">Restore user's access</message>
                                            </a> <a class="btn btn-outline-primary demojs-btn-hiderevoke" routerlink="" href="#">
                                                <message key="global.buttons.cancel">Cancel</message>
                                            </a> </div>
                                    </form>
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
                                    <div class="col-auto"><span class="rbt-icon-chevron-up" id="btn_showdet3-3"></span></div>
                                </div>
                                <div class="row mt-3 border-top" id="showdet3-3" style="display:nonee">
                                    <div class="col">
                                        <dl class="row justify-content-end mt-3">
                                            <dt class="col-sm-3">Deactivated ads</dt>
                                            <dd class="col-sm-9">ID# 0006725343
                                                <button class="btn btn-sm btn-link">View</button>
                                            </dd>
                                            <dt class="col-sm-3">Revocation reason</dt>
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
                            <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/07/2018</span> <span>03:42 AM</span></time>
                            <div class="rvb-timeline-marker bg-warning"></div>
                            <div class="card">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="card-title">Warning issued; ads deactivated (fradulent activity)</h2>
                                    </div>
                                    <div class="col-auto"><span class="rbt-icon-chevron-up" id="btn_showdet3-1"></span></div>
                                </div>
                                <div class="row mt-3 border-top" id="showdet3-1" style="display:nonee">
                                    <div class="col">
                                        <dl class="row justify-content-end mt-3">
                                            <dt class="col-sm-3">Deactivated ads</dt>
                                            <dd class="col-sm-9">ID# 0006725343
                                                <button class="btn btn-sm btn-link">View</button>
                                            </dd>
                                            <dd class="col-sm-9 offset-md-3">ID# 0006725354
                                                <button class="btn btn-sm btn-link">View</button>
                                            </dd>
                                            <dd class="col-sm-9 offset-md-3">ID# 0006725362
                                                <button class="btn btn-sm btn-link">View</button>
                                            </dd>
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
        </ng-component>
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
</body>
</html>
