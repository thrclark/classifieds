<?php 
$audience = 'admin';
$section = 'moderator';
$page_title = 'Ads';
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
    <div class="form-row">
        <div class="col-12">
            <div class="main-content" id="main-content">
                <div class="row no-gutters mb-3 justify-content-between align-items-center">
                    <div class="col-12 col-md-6">
                        <h1> <?php echo $page_title; ?></h1>
                    </div>
                    <div class="col-auto pr-4 border-right">
                    
                    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">Reported ads only </label>
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
                <div class="ccf-table-responsive-container">
                    <table class="table rbt-table-responsive">
                        <thead>
                            <tr>
                                <th>Campus</th>
                                <th>Title</th>
                                <th>User</th>
                                <th>Post Date</th>
                                <th>Status</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody id="table_userads">
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUB</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Sublease for Brownstone Apartments for Spring Semester </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">alfresco</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/22/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUB</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Math-M211 and M212 Textbook</span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">thrclark</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/22/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Expired</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail_expired">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUPUI</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Self Defense Boxing Gloves</span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">immortelle</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/22/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content"> Deactivated <span class="small font-italic">(by user)</span></span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail_deactivated_user">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUPUI</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Offering ride to Indy Dec 21 around 10:30am </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">veridical</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/22/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Deactivated <span class="small font-italic">(by admin)</span></span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail_deactivated_admin">View</button>
                                    </span></td>
                            </tr>
                            <tr >
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUPUI</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">2018 Spring sublease Jan-July the Fields  </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">typhogenic</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/22/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b>Active <span class="small font-italic text-danger">(reported)</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail_reported">View</button>
                                </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUK</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Business Law with Online Access Code (16th Edition) </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">thrclark</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/21/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active <span class="small font-italic">(report dismissed)</span></span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail_reported">View</button>
                                </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUB</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Spring 2018 Sublease 7Ten Apartments</span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">rentsmp</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/21/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUK</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Essentials of Helth Information Management (3rd Edition) </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">rupellary</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/21/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUS</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">thrclark</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/21/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Deactivated <span class="small font-italic">(by admin)</span></span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail_deactivated_admin">View</button>
                                </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUK</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Spring Sublease Large Room with Walk in </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">alluvium</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/21/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUK</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Folding table and chairs </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">mandorla</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/20/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUS</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">RIDE TO/FROM CHI FRI 12/22 </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">knight85</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/20/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUPUI</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Need a ride from Indy to Bloomington on Dec 30 </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">stereometer</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/19/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUS</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">One bedroom sublet in 8th street </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">volitive</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/19/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUS</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Math-M211 and M212 Textbook "Calculus Single Variable</span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">vilip</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/19/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUS</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Sublease for Brownstone Apartments for Spring Semester </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">shilling</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/18/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUS</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Math-M211 and M212 Textbook</span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">quixotism</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/18/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUS</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Self Defense Boxing Gloves</span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">posology</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/18/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUK</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">2018 Spring sublease Jan-July the Fields  </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">calque</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/18/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUB</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Business Law with Online Access Code (16th Edition) </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">colliform</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/17/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUB</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Spring 2018 Sublease 7Ten Apartments</span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">hierurgy</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/16/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUPUI</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Essentials of Helth Information Management (3rd Edition) </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">nolky321</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/16/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUB</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">squeegee</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/16/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUS</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Spring Sublease Large Room with Walk in </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">telenergy</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/15/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUK</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">NOW HIRING '18 BARTENDERS AND SERVERS </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">velocimeter</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/15/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUS</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Folding table and chairs </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">xeli</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/15/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUPUI</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">RIDE TO/FROM CHI FRI 12/22 </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">fishbein</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/15/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUB</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Need a ride from Indy to Bloomington on Dec 30 </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">dissentient</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/15/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUS</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">One bedroom sublet in 8th street </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">jogo11</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/14/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUPUI</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Math-M211 and M212 Textbook "Calculus Single Variable</span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">reamlt</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/14/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUS</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Offering ride to Indy Dec 21 around 10:30am </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">phenetic</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/14/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUPUI</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Business Law with Online Access Code (16th Edition) </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">pygmachy</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/14/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUS</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Spring 2018 Sublease 7Ten Apartments</span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">varifocal</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/13/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUS</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Essentials of Helth Information Management (3rd Edition) </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">zuquir</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/13/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUK</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">meronym</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/13/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUB</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Spring Sublease Large Room with Walk in </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">groundsel</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/12/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUPUI</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">NOW HIRING '18 BARTENDERS AND SERVERS </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">demitasse</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/12/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Campus</b><span class="rbt-table-responsive-cell-content">IUK</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Title</b><span class="rbt-table-responsive-cell-content">Offering ride to Indy Dec 21 around 10:30am </span></td>
                                <td><b class="rbt-table-responsive-cell-label">User</b><span class="rbt-table-responsive-cell-content">jogo11</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Post Date</b><span class="rbt-table-responsive-cell-content">01/12/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Status</b><span class="rbt-table-responsive-cell-content">Active</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button>
                                    </span></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php include('includes/all-pagination.php') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('modals/modal-admin-ad-detail.php') ?>
<?php include('modals/modal-admin-ad-detail-expired.php') ?>
<?php include('modals/modal-admin-ad-detail-deactivated-user.php') ?>

<?php include('modals/modal-admin-ad-detail-deactivated-admin.php') ?>


<?php include('modals/modal-admin-ad-detail-reported.php') ?>
<?php include('modals/modal-admin-restrictuser.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
<script>
    $(document).ready(function() {	
        $(document).ready(function() {
    $('#clear_field').keydown(function() {
        tmpval = $(this).val();
        if (tmpval == '') {
            $(".cleartext").css({
                "display": "none"
            });
        } else {
            $(".cleartext").css({
                "display": "block"
            });
        }
    });
    $(".cleartext").click(function() {
        $(".cleartext").hide();
        $("#clear_field").val("");
        $("#clear_field").focus();
    });
});
    });
</script>
</body>
</html>
