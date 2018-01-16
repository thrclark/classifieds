<?php 
$section = 'moderator';
$page_title = 'userads';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/admin-styles.php') ?>
<style type="text/css">
.btn-outline-secondary:active, .btn-outline-secondary.active, .show > .btn-outline-secondary.dropdown-toggle {
	color: #868e96;
	background-color: white;
}
</style>
</head>
<body>
<?php include('includes/all-custom-header.php') ?>
<?php include('includes/admin-appheader.php') ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            <div id="adminNav">
                <?php include('includes/admin-nav.php') ?>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="main-content">
                <div class="doc-header mb-3">
                    <div class="row">
                        <div class="col doc-title">
                            <h2>Moderator</h2>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" id="allads-tab" data-toggle="tab" href="#allads" role="tab" aria-controls="allads" aria-selected="true">All Ads</a> </li>
                    <li class="nav-item"> <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Restricted Users</a> </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="allads" role="tabpanel" aria-labelledby="allads-tab">
                        <div class="bg-light mb-3 mt-3 table-filter">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group clear-field mb-0">
                                            <label class="sr-only" for="table_filter">Filter table</label>
                                            <input type="text" class="form-control" id="table_filter" placeholder="filter" >
                                            <div class="cleartext" style="display:none"> <i class="fa fa-window-close"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="dropdown show"> <a class="btn btn-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Status: <span>All</span> </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="#">All</a> <a class="dropdown-item" href="#">Active</a> <a class="dropdown-item" href="#">Inactive</a> <a class="dropdown-item" href="#">Flagged</a> <a class="dropdown-item" href="#">Removed</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-sm table-postdetails" >
                            <thead>
                                <tr>
                                    <th>Ad Title</th>
                                    <th>Posted by</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="table_userads">
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Sublease for Brownstone Apartments for Spring Semester  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>tutorsmob</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                        </td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Math-M211 and M212 Textbook </div>
                                        <?php include('includes/admin-postdetail-inactive.php') ?></td>
                                    <td>skylardy</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr class="flagged">
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i> Self Defense Boxing Gloves </div>
                                        <?php include('includes/admin-postdetail-flagged.php') ?></td>
                                    <td>diewillow</td>
                                    <td><span class="fa fa-circle text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Flagged (Expires 02/15/2018)"><span class="sr-only"> Flagged </span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>2018 Spring sublease Jan-July the Fields room Waterchase  </div>
                                        <?php include('includes/admin-postdetail-removed.php') ?></td>
                                    <td>roadmasked</td>
                                    <td><span class="fa fa-ban text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Removed on 01/15/2018"><span class="sr-only"> Removed </span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Offering ride to Indy Dec 21 around 10:30am  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>glintgodly</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Business Law with Online Access Code (16th Edition)  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>backlisp</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Spring 2018 Sublease 7Ten Apartments </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>numbadze</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Essentials of Helth Information Management (3rd Edition)  </div>
                                        <?php include('includes/admin-postdetail-inactive.php') ?></td>
                                    <td>testifytub</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner  </div>
                                        <?php include('includes/admin-postdetail-inactive.php') ?></td>
                                    <td>velaribbon</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Spring Sublease Large Room with Walk in  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>reamcoals</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>NOW HIRING '18 BARTENDERS AND SERVERS  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>factbest</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Folding table and chairs  </div>
                                        <?php include('includes/admin-postdetail-inactive.php') ?></td>
                                    <td>oinkskier</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>RIDE TO/FROM CHI FRI 12/22  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>killspine</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Need a ride from Indy to Bloomington on Dec 30  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>jawplenty</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>One bedroom sublet in 8th street  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>mendwhinny</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="flagged">
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i> Math-M211 and M212 Textbook "Calculus Single Variable </div>
                                        <?php include('includes/admin-postdetail-flagged.php') ?></td>
                                    <td>sharinggym</td>
                                    <td><span class="fa fa-circle text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Flagged (Expires 02/15/2018)"><span class="sr-only"> Flagged </span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Self Defense Boxing Gloves  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>growlsicko</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Offering ride to Indy Dec 21 around 10:30am  </div>
                                        <?php include('includes/admin-postdetail-removed.php') ?></td>
                                    <td>bomblove</td>
                                    <td><span class="fa fa-ban text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Removed on 01/15/2018"><span class="sr-only"> Removed </span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>2018 Spring sublease Jan-July the Fields room Waterchase  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>backlisp</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Business Law with Online Access Code (16th Edition)  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>factbest</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Spring 2018 Sublease 7Ten Apartments </div>
                                        <?php include('includes/admin-postdetail-inactive.php') ?></td>
                                    <td>tutorsmob</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Essentials of Helth Information Management (3rd Edition)  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>skylardy</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>diewillow</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Spring Sublease Large Room with Walk in  </div>
                                        <?php include('includes/admin-postdetail-inactive.php') ?></td>
                                    <td>glintgodly</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>NOW HIRING '18 BARTENDERS AND SERVERS  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>roadmasked</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Folding table and chairs  </div>
                                        <?php include('includes/admin-postdetail-inactive.php') ?></td>
                                    <td>backlisp</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>RIDE TO/FROM CHI FRI 12/22  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>numbadze</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Need a ride from Indy to Bloomington on Dec 30  </div>
                                        <?php include('includes/admin-postdetail-removed.php') ?></td>
                                    <td>testifytub</td>
                                    <td><span class="fa fa-ban text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Removed on 01/15/2018"><span class="sr-only"> Removed </span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>One bedroom sublet in 8th street  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>factbest</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Math-M211 and M212 Textbook "Calculus Single Variable Early Transcendentals" ISBN: 9781305748217  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>oinkskier</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Self Defense Boxing Gloves  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>killspine</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Offering ride to Indy Dec 21 around 10:30am  </div>
                                        <?php include('includes/admin-postdetail-inactive.php') ?></td>
                                    <td>jawplenty</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>2018 Spring sublease Jan-July the Fields room Waterchase  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>mendwhinny</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Business Law with Online Access Code (16th Edition)  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>sharinggym</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Spring 2018 Sublease 7Ten Apartments </div>
                                        <?php include('includes/admin-postdetail-inactive.php') ?></td>
                                    <td>growlsicko</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Essentials of Helth Information Management (3rd Edition)  </div>
                                        <?php include('includes/admin-postdetail-inactive.php') ?></td>
                                    <td>bomblove</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner  </div>
                                        <?php include('includes/admin-postdetail-inactive.php') ?></td>
                                    <td>diewillow</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Spring Sublease Large Room with Walk in  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>bushmildew</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>NOW HIRING '18 BARTENDERS AND SERVERS  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>rakeplank</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Folding table and chairs  </div>
                                        <?php include('includes/admin-postdetail-active.php') ?></td>
                                    <td>velaribbon</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php include('includes/all-pagination.php') ?>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab2">
                        <div class="bg-light mb-3 mt-3 table-filter">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group clear-field mb-0">
                                            <label class="sr-only" for="table_filteruser">Filter table</label>
                                            <input type="text" class="form-control" id="table_filteruser" placeholder="filter" >
                                            <div class="cleartext" style="display:none"> <i class="fa fa-window-close"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="dropdown show"> <a class="btn btn-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Status: <span>All</span> </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="#">All</a> <a class="dropdown-item" href="#">Reinstated</a> <a class="dropdown-item" href="#">Warned</a> <a class="dropdown-item" href="#">Banned</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-sm table-actions table-postdetails" >
                            <thead>
                                <tr>
                                    <th> Username</th>
                                    <th><strong>University Id</strong></th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="table_users">
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>thrclark </div></td>
                                    <td>0001328543</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Reinstated on 02/15/2018"><span class="sr-only"> Reinstated </span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>tewtband</div></td>
                                    <td>0003023985</td>
                                    <td><span class="fa fa-circle text-warning post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Warned on 02/15/2018"><span class="sr-only"> Warned </span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>zealfleo</div></td>
                                    <td>0003956434</td>
                                    <td><span class="fa fa-circle text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Banned on 02/15/2018"><span class="sr-only"> Banned </span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>languid</div></td>
                                    <td>0002534347</td>
                                    <td><span class="fa fa-circle text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Banned on 02/15/2018"><span class="sr-only"> Banned </span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>accljones</div></td>
                                    <td>0004436419</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Reinstated on 02/15/2018"><span class="sr-only"> Reinstated </span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>sgdsteven</div></td>
                                    <td>0002635478</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Reinstated on 02/15/2018"><span class="sr-only"> Reinstated </span></span></td>
                                </tr>
                                <tr>
                                    <td class="post-maininfo"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>lerrome</div></td>
                                    <td>0002888753</td>
                                    <td><span class="fa fa-circle text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Banned on 02/15/2018"><span class="sr-only"> Banned </span></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('modals/modal-main-ad-detail.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
<script type='text/javascript'>
    $(document).ready(function() {
        $("#table_filter").keyup(function() {

            var data = this.value.split(" ");

            var jo = $("#table_userads").find("tr");
            if (this.value == "") {
                jo.show();
                return;
            }

            jo.hide();

            jo.filter(function(i, v) {
                    var $t = $(this);
                    for (var d = 0; d < data.length; ++d) {
                        if ($t.is(":contains('" + data[d] + "')")) {
                            return true;
                        }
                    }
                    return false;
                })

                .show();
        }).focus(function() {
            this.value = "";
            $(this).css({
                "color": "black"
            });
            $(this).unbind('focus');
        }).css({
            "color": "#C0C0C0"
        });
    }); //]]>
</script> 
<script>
    $(document).ready(function() {

        $('#table_filter').keydown(function() {
            tmpval = $(this).val();
            if (tmpval == '') {

                $(".cleartext").css({"display": "none"});
            } else {
                $(".cleartext").css({"display": "block"});
            }
        });
        $(".cleartext").click(function() {
            $(".cleartext").hide();
			$("#table_userads tr").show();
            $("#table_filter").val("");
			$("#table_filter").focus();
        });
    });
</script> 
<script>
    $(document).ready(function() {

        $('#table_filteruser').keydown(function() {
            tmpval = $(this).val();
            if (tmpval == '') {

                $(".cleartext").css({"display": "none"});
            } else {
                $(".cleartext").css({"display": "block"});
            }
        });
        $(".cleartext").click(function() {
            $(".cleartext").hide();
			$("#table_users tr").show();
            $("#table_filteruser").val("");
			$("#table_filteruser").focus();
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $(".post-details").hide();
        $(".post-title").on('click', function() {
            $(this).next(".post-details").fadeToggle();
            $(this).parents("tr").toggleClass("open");
            $(this).children(".fa-chevron-right").toggleClass("fa-chevron-down");
        });
    });
</script> 
<script>

 $(document).ready(function() {
        $('.post-status').tooltip()
    });






</script>
</body>
</html>
