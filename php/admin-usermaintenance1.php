<?php 
$audience = 'admin';
$section = 'moderator';
$page_title = 'User maintenance';
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
    <div class="row">
        <div class="col-12">
            <main class="main-content" id="main-content">
                <div class="row no-gutters mb-3 justify-content-between align-items-center">
                    <div class="col-12 col-md-6">
                        <h1> <?php echo $page_title; ?></h1>
                    </div>
                    <div class="col-auto pr-4 border-right">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                            <label class="form-check-label" for="defaultCheck1">Revoked users only</label>
                        </div>
                    </div>
                    <div class="col pl-4">
                        <form novalidate ng-reflect-form="[object Object]" class="ng-pristine ng-valid ng-touched">
                            <label class="sr-only" id="termsLabel">
                                <message key="admin.ads.field.searchTerms" ng-reflect-key="admin.ads.field.searchTerms">Find an Ad</message>
                            </label>
                            <div class="input-group">
                                <input aria-labelledby="termsLabel" class="form-control ng-pristine ng-valid ng-touched" formcontrolname="terms" type="text" ng-reflect-name="terms">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"> <i aria-hidden="true" class="fa fa-search"></i> <span class="sr-only">
                                    <message key="global.button.search" ng-reflect-key="global.button.search">Search</message>
                                    </span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-link" type="button">
                        <message key="admin.buttons.clear" ng-reflect-key="admin.buttons.clear">Clear</message>
                        </button>
                    </div>
                </div>
                <table class="table rbt-table-responsive table-actions">
                    <thead>
                        <tr>
                            <th> Username</th>
                            <th><strong>Person Id</strong></th>
                            <th>Status</th>
                            <th class="text-center"><span class="sr-only">Actions</span>
                                <button class="btn btn-sm btn-outline-primary">Add user</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">thrclark</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0001328543</span></td>
                            <td>Warning issued </td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                               <button type="button" class="btn btn-link btn-sm" id="demojs_btn_togglerow1">View activity</button></td>
                        </tr>
                        <tr id="demojs_detailrow1" style="display:none">
                            <td colspan="4" style="white-space: inherit; background:#eae8df" ><div class="row">
                                    <div class="col">
                                        <div class="rbt-ts-20 font-weight-bold">Viewing activity for 'thrclark'</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Actions </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Revoke user's system access</a> <a class="dropdown-item" href="#">Warn user</a> <a class="dropdown-item" href="#">Other action?</a> <a class="dropdown-item" href="#">Other action? </a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <ul class="rvb-timeline mt-3" id="timeline1" style="display:none">
                                            
                                            <li>
                                                <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/04/2018</span> <span>03:42 AM</span></time>
                                                <div class="rvb-timeline-marker bg-warning"></div>
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title">Warning issued; ads deactivated (fradulent activity)</h2>
                                                        </div>
                                                        <div class="col-auto"><span class="rbt-icon-chevron-up" id="btn_showdet1-1"></span></div>
                                                    </div>
                                                    <div class="row mt-3 border-top" id="showdet1-1" style="display:nonne">
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
                                </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">tewtband</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0003023985</span></td>
                            <td>Access reinstated </td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-link btn-sm" id="demojs_btn_togglerow2">View activity</button></td>
                        </tr>
                        <tr id="demojs_detailrow2" style="display:none">
                            <td colspan="4" style="white-space: inherit; background:#eae8df" ><div class="row">
                                    <div class="col">
                                        <div class="rbt-ts-20 font-weight-bold">Viewing activity for 'tewtband'</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Actions </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Revoke user's system access</a> <a class="dropdown-item" href="#">Warn user</a> <a class="dropdown-item" href="#">Other action?</a> <a class="dropdown-item" href="#">Other action? </a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <ul class="rvb-timeline mt-3" id="timeline2" style="display:none">
                                            <li>
                                                <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/13/2018</span> <span>11:27 AM</span></time>
                                                <div class="rvb-timeline-marker bg-success"></div>
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title">Access reinstated</h2>
                                                        </div>
                                                        <div class="col-auto"><span class="rbt-icon-chevron-down" id="btn_showdet2-4"></span></div>
                                                    </div>
                                                    <div class="row mt-3 border-top" id="showdet2-4" style="display:none">
                                                        <div class="col">
                                                            <dl class="row justify-content-end mt-4">
                                                                <dt class="col-sm-3">Admin notes</dt>
                                                                <dd class="col-sm-9">User emailed us on 0/8/13/2018 with an apology, and expressed intent to abide by policy.</dd>
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
                                                        <div class="col-auto"><span class="rbt-icon-chevron-down" id="btn_showdet2-3"></span></div>
                                                    </div>
                                                    <div class="row mt-3 border-top" id="showdet2-3" style="display:none">
                                                        <div class="col">
                                                            <dl class="row justify-content-end mt-3">
                                                                <dt class="col-sm-3">Deactivated ads</dt>
                                                                <dd class="col-sm-9">ID# 0006725343
                                                                    <button class="btn btn-sm btn-link">View</button>
                                                                </dd>
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
                                                        <div class="col-auto"><span class="rbt-icon-chevron-down" id="btn_showdet2-2"></span></div>
                                                    </div>
                                                    <div class="row mt-3 border-top" id="showdet2-2" style="display:none">
                                                        <div class="col">
                                                            <dl class="row justify-content-end mt-3">
                                                                <dt class="col-sm-3">Deactivated ad</dt>
                                                                <dd class="col-sm-9">ID# 0006725343
                                                                    <button class="btn btn-sm btn-link">View</button>
                                                                </dd>
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
                                                        <div class="col-auto"><span class="rbt-icon-chevron-down" id="btn_showdet2-1"></span></div>
                                                    </div>
                                                    <div class="row mt-3 border-top" id="showdet2-1" style="display:none">
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
                                </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">zealfleo</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0003956434</span></td>
                            <td>Access revoked</td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                               <button type="button" class="btn btn-link btn-sm" id="demojs_btn_togglerow3">View activity</button></td>
                        </tr>
                               <tr id="demojs_detailrow3" style="display:none">
                            <td colspan="4" style="white-space: inherit; background:#eae8df" ><div class="row">
                                    <div class="col">
                                        <div class="rbt-ts-20 font-weight-bold">Viewing activity for 'zealfleo'</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Actions </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Revoke user's system access</a> <a class="dropdown-item" href="#">Warn user</a> <a class="dropdown-item" href="#">Other action?</a> <a class="dropdown-item" href="#">Other action? </a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <ul class="rvb-timeline mt-3" id="timeline3" style="display:none">
                                            
                                            <li>
                                                <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/07/2018</span> <span>03:42 AM</span></time>
                                                <div class="rvb-timeline-marker bg-danger"></div>
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title">Access revoked; ad deactivated (fradulent activity)</h2>
                                                        </div>
                                                        <div class="col-auto"><span class="rbt-icon-chevron-down" id="btn_showdet3-3"></span></div>
                                                    </div>
                                                    <div class="row mt-3 border-top" id="showdet3-3" style="display:none">
                                                        <div class="col">
                                                            <dl class="row justify-content-end mt-3">
                                                                <dt class="col-sm-3">Deactivated ads</dt>
                                                                <dd class="col-sm-9">ID# 0006725343
                                                                    <button class="btn btn-sm btn-link">View</button>
                                                                </dd>
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
                                                <time class="rvb-timeline-timestamp" datetime="2017-11-04T03:45"><span>08/07/2018</span> <span>03:42 AM</span></time>
                                                <div class="rvb-timeline-marker bg-warning"></div>
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h2 class="card-title">Warning issued; ads deactivated (fradulent activity)</h2>
                                                        </div>
                                                        <div class="col-auto"><span class="rbt-icon-chevron-down" id="btn_showdet3-1"></span></div>
                                                    </div>
                                                    <div class="row mt-3 border-top" id="showdet3-1" style="display:none">
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
                                </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">languid</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0002534347</span></td>
                            <td>Warning issued </td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#maintain_user"  >View activity</button></td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </div>
</div>
<?php include('modals/modal-admin-maintainuser.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
<script>
$(document).ready(function(){
	
	 $("#demojs_btn_togglerow1").click(function(){
        $("#demojs_detailrow1, #timeline1").slideToggle();
    });
	
	
    $("#demojs_btn_togglerow2").click(function(){
        $("#demojs_detailrow2, #timeline2").slideToggle();
    });
	
	 $("#demojs_btn_togglerow3").click(function(){
        $("#demojs_detailrow3, #timeline3").slideToggle();
    });
});
</script> 
<script>
$(document).ready(function(){
	
	
	$("#btn_showdet1-1").click(function(){
        $("#showdet1-1").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	 $("#btn_showdet1-2").click(function(){
        $("#showdet1-2").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
	$("#btn_showdet1-3").click(function(){
        $("#showdet1-3").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	$("#btn_showdet1-4").click(function(){
        $("#showdet1-4").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
	
    $("#btn_showdet2-1").click(function(){
        $("#showdet2-1").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	 $("#btn_showdet2-2").click(function(){
        $("#showdet2-2").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
	$("#btn_showdet2-3").click(function(){
        $("#showdet2-3").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	$("#btn_showdet2-4").click(function(){
        $("#showdet2-4").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
	
    $("#btn_showdet3-1").click(function(){
        $("#showdet3-1").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	 $("#btn_showdet3-2").click(function(){
        $("#showdet3-2").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
	$("#btn_showdet3-3").click(function(){
        $("#showdet3-3").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	$("#btn_showdet3-4").click(function(){
        $("#showdet3-4").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
});
</script>
</body>
</html>
