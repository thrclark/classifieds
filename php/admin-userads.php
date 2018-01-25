<?php 
$audience = 'admin';
$section = 'moderator';
$page_title = 'userads';
?>
<!DOCTYPE html>
<html lang="en">
<head>	
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/admin-styles.php') ?>
<style type="text/css">
.btn-outline-secondary:active, .btn-outline-secondary.active, .show> .btn-outline-secondary.dropdown-toggle {
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
                    <li class="nav-item"><a class="nav-link active" id="allads-tab" data-toggle="tab" href="#allads" role="tab" aria-controls="allads" aria-selected="true">All Ads</a></li>
                    <li class="nav-item"><a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Moderated Users</a></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="allads" role="tabpanel" aria-labelledby="allads-tab">
                        <div class="bg-light mb-3 mt-3 table-filter">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <div class="form-group clear-field mb-0">
                                            <label class="sr-only" for="table_filter">Filter table</label>
                                            <input type="text" class="form-control" id="table_filter" placeholder="filter">
                                            <div class="cleartext" style="display:none"><i class="fa fa-window-close"></i></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Status: All</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">All</a><a class="dropdown-item" href="#">Active</a><a class="dropdown-item" href="#">Inactive</a><a class="dropdown-item" href="#">Flagged</a><a class="dropdown-item" href="#">Removed</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-sm table-postdetails">
                            <thead>
                                <tr class="ad-summary">
                                    <th><button class="btn btn-sm btn-light" disabled id="multiremove" data-toggle="modal" data-target="#ad_bulkdelete"><i class="fa fa-trash-o" aria-hidden="true"></i><span class="sr-only">Delete</span></button></th>
                                    <th>Ad Title</th>
                                    <th>Date</th>
                                    <th>User</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="table_userads">
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox1">
                                            <label for="checkbox1"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse" data-target="#ad_table_row--01" aria-expanded="false" aria-controls="ad_table_row--01"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Sublease for Brownstone Apartments for Spring Semester </div></td>
                                    <td>01/22/18</td>
                                    <td>alfresco</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--01">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary flagged">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox2">
                                            <label for="checkbox2"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo flagged" data-toggle="collapse"  data-target="#ad_table_row--02" aria-expanded="false" aria-controls="ad_table_row--02"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Math-M211 and M212 Textbook</div></td>
                                    <td>01/22/18</td>
                                    <td>thrclark</td>
                                    <td><span class="fa fa-exclamation-circle text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Flagged on 01/15/2018"><span class="sr-only"> Flagged </span></span></td>
                                </tr>
                                <tr class="collapse flagged" data-parent="#accordion1" id="ad_table_row--02">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-flagged.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox3">
                                            <label for="checkbox3"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--03" aria-expanded="false" aria-controls="ad_table_row--03"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Self Defense Boxing Gloves</div></td>
                                    <td>01/22/18</td>
                                    <td>immortelle</td>
                                    <td><span class="fa fa-ban text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Removed on 01/15/2018"><span class="sr-only"> Removed </span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--03">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-removed.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox4">
                                            <label for="checkbox4"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--04" aria-expanded="false" aria-controls="ad_table_row--04"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>2018 Spring sublease Jan-July the Fields room Waterchase </div></td>
                                    <td>01/22/18</td>
                                    <td>typhogenic</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--04">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox5">
                                            <label for="checkbox5"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--05" aria-expanded="false" aria-controls="ad_table_row--05"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Offering ride to Indy Dec 21 around 10:30am </div></td>
                                    <td>01/22/18</td>
                                    <td>veridical</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--05">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-inactive.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox6">
                                            <label for="checkbox6"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--06" aria-expanded="false" aria-controls="ad_table_row--06"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Business Law with Online Access Code (16th Edition) </div></td>
                                    <td>01/21/18</td>
                                    <td>thrclark</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--06">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox7">
                                            <label for="checkbox7"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--07" aria-expanded="false" aria-controls="ad_table_row--07"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Spring 2018 Sublease 7Ten Apartments</div></td>
                                    <td>01/21/18</td>
                                    <td>rentsmp</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--07">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-inactive.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox8">
                                            <label for="checkbox8"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--08" aria-expanded="false" aria-controls="ad_table_row--08"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Essentials of Helth Information Management (3rd Edition) </div></td>
                                    <td>01/21/18</td>
                                    <td>rupellary</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--08">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox9">
                                            <label for="checkbox9"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--09" aria-expanded="false" aria-controls="ad_table_row--09"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </div></td>
                                    <td>01/21/18</td>
                                    <td>thrclark</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--09">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox10">
                                            <label for="checkbox10"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo"  data-toggle="collapse"  data-target="#ad_table_row--10" aria-expanded="false" aria-controls="ad_table_row--10"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Spring Sublease Large Room with Walk in </div></td>
                                    <td>01/21/18</td>
                                    <td>alluvium</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--10">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox11">
                                            <label for="checkbox11"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo"><div class="post-title" data-toggle="collapse"  data-target="#ad_table_row--11" aria-expanded="false" aria-controls="ad_table_row--11"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>NOW HIRING '18 BARTENDERS AND SERVERS </div></td>
                                    <td>01/20/18</td>
                                    <td>colliform</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--11">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary flagged">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox12">
                                            <label for="checkbox12"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo flagged" data-toggle="collapse"  data-target="#ad_table_row--12" aria-expanded="false" aria-controls="ad_table_row--12"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Folding table and chairs </div></td>
                                    <td>01/20/18</td>
                                    <td>mandorla</td>
                                    <td><span class="fa fa-exclamation-circle text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Flagged on 01/15/2018"><span class="sr-only"> Flagged </span></span></td>
                                </tr>
                                <tr class="collapse flagged" data-parent="#accordion1" id="ad_table_row--12">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-flagged.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox13">
                                            <label for="checkbox13"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--13" aria-expanded="false" aria-controls="ad_table_row--13"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>RIDE TO/FROM CHI FRI 12/22 </div></td>
                                    <td>01/20/18</td>
                                    <td>knight85</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--13">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox14">
                                            <label for="checkbox14"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--14" aria-expanded="false" aria-controls="ad_table_row--14"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Need a ride from Indy to Bloomington on Dec 30 </div></td>
                                    <td>01/19/18</td>
                                    <td>stereometer</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--14">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-inactive.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox15">
                                            <label for="checkbox15"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--15" aria-expanded="false" aria-controls="ad_table_row--15"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>One bedroom sublet in 8th street </div></td>
                                    <td>01/19/18</td>
                                    <td>volitive</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--15">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-inactive.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox16">
                                            <label for="checkbox16"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--16" aria-expanded="false" aria-controls="ad_table_row--16"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Math-M211 and M212 Textbook "Calculus Single Variable</div></td>
                                    <td>01/19/18</td>
                                    <td>vilip</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--16">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox17">
                                            <label for="checkbox17"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--17" aria-expanded="false" aria-controls="ad_table_row--17"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Sublease for Brownstone Apartments for Spring Semester </div></td>
                                    <td>01/18/18</td>
                                    <td>shilling</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--17">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-inactive.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox18">
                                            <label for="checkbox18"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--18" aria-expanded="false" aria-controls="ad_table_row--18"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Math-M211 and M212 Textbook</div></td>
                                    <td>01/18/18</td>
                                    <td>quixotism</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--18">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox19">
                                            <label for="checkbox19"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--19" aria-expanded="false" aria-controls="ad_table_row--19"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Self Defense Boxing Gloves</div></td>
                                    <td>01/18/18</td>
                                    <td>posology</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--19">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox20">
                                            <label for="checkbox20"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--20" aria-expanded="false" aria-controls="ad_table_row--20"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>2018 Spring sublease Jan-July the Fields room Waterchase </div></td>
                                    <td>01/18/18</td>
                                    <td>calque</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--20">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox21">
                                            <label for="checkbox21"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--21" aria-expanded="false" aria-controls="ad_table_row--21"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Offering ride to Indy Dec 21 around 10:30am </div></td>
                                    <td>01/17/18</td>
                                    <td>thrclark</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--21">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox22">
                                            <label for="checkbox22"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--22" aria-expanded="false" aria-controls="ad_table_row--22"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Business Law with Online Access Code (16th Edition) </div></td>
                                    <td>01/17/18</td>
                                    <td>colliform</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--22">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox23">
                                            <label for="checkbox23"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--23" aria-expanded="false" aria-controls="ad_table_row--23"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Spring 2018 Sublease 7Ten Apartments</div></td>
                                    <td>01/16/18</td>
                                    <td>hierurgy</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--23">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-inactive.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox24">
                                            <label for="checkbox24"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--24" aria-expanded="false" aria-controls="ad_table_row--24"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Essentials of Helth Information Management (3rd Edition) </div></td>
                                    <td>01/16/18</td>
                                    <td>nolky321</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--24">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox25">
                                            <label for="checkbox25"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--25" aria-expanded="false" aria-controls="ad_table_row--25"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </div></td>
                                    <td>01/16/18</td>
                                    <td>squeegee</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--25">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox26">
                                            <label for="checkbox26"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--26" aria-expanded="false" aria-controls="ad_table_row--26"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Spring Sublease Large Room with Walk in </div></td>
                                    <td>01/15/18</td>
                                    <td>telenergy</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--26">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox27">
                                            <label for="checkbox27"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--27" aria-expanded="false" aria-controls="ad_table_row--27"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>NOW HIRING '18 BARTENDERS AND SERVERS </div></td>
                                    <td>01/15/18</td>
                                    <td>velocimeter</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--27">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox28">
                                            <label for="checkbox28"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--28" aria-expanded="false" aria-controls="ad_table_row--28"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Folding table and chairs </div></td>
                                    <td>01/15/18</td>
                                    <td>xeli</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--28">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox29">
                                            <label for="checkbox29"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--29" aria-expanded="false" aria-controls="ad_table_row--29"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>RIDE TO/FROM CHI FRI 12/22 </div></td>
                                    <td>01/15/18</td>
                                    <td>fishbein</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--29">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-inactive.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox30">
                                            <label for="checkbox30"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--30" aria-expanded="false" aria-controls="ad_table_row--30"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Need a ride from Indy to Bloomington on Dec 30 </div></td>
                                    <td>01/15/18</td>
                                    <td>dissentient</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--30">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox31">
                                            <label for="checkbox31"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--31" aria-expanded="false" aria-controls="ad_table_row--31"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>One bedroom sublet in 8th street </div></td>
                                    <td>01/14/18</td>
                                    <td>jogo11</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--31">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-inactive.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox32">
                                            <label for="checkbox32"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--32" aria-expanded="false" aria-controls="ad_table_row--32"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Math-M211 and M212 Textbook "Calculus Single Variable</div></td>
                                    <td>01/14/18</td>
                                    <td>reamlt</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--32">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-inactive.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox33">
                                            <label for="checkbox33"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--33" aria-expanded="false" aria-controls="ad_table_row--33"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Offering ride to Indy Dec 21 around 10:30am </div></td>
                                    <td>01/14/18</td>
                                    <td>phenetic</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--33">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox34">
                                            <label for="checkbox34"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--34" aria-expanded="false" aria-controls="ad_table_row--34"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Business Law with Online Access Code (16th Edition) </div></td>
                                    <td>01/14/18</td>
                                    <td>pygmachy</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--34">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox35">
                                            <label for="checkbox35"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--35" aria-expanded="false" aria-controls="ad_table_row--35"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Spring 2018 Sublease 7Ten Apartments</div></td>
                                    <td>01/13/18</td>
                                    <td>varifocal</td>
                                    <td><span class="fa fa-ban text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Removed on 01/15/2018"><span class="sr-only"> Removed </span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--35">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-removed.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox36">
                                            <label for="checkbox36"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--36" aria-expanded="false" aria-controls="ad_table_row--36"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Essentials of Helth Information Management (3rd Edition) </div></td>
                                    <td>01/13/18</td>
                                    <td>zuquir</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--36">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox37">
                                            <label for="checkbox37"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--37" aria-expanded="false" aria-controls="ad_table_row--37"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </div></td>
                                    <td>01/13/18</td>
                                    <td>meronym</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--37">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-inactive.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox38">
                                            <label for="checkbox38"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--38" aria-expanded="false" aria-controls="ad_table_row--38"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Spring Sublease Large Room with Walk in </div></td>
                                    <td>01/12/18</td>
                                    <td>groundsel</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--38">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox39">
                                            <label for="checkbox39"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--39" aria-expanded="false" aria-controls="ad_table_row--39"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>NOW HIRING '18 BARTENDERS AND SERVERS </div></td>
                                    <td>01/12/18</td>
                                    <td>demitasse</td>
                                    <td><span class="fa fa-circle-thin text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Inactive (Expired on 02/15/2018)"><span class="sr-only">Inactive</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--39">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-inactive.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td><div class="checkbox	">
                                            <input type="checkbox" id="checkbox40">
                                            <label for="checkbox40"><span class="sr-only">select</span></label>
                                        </div></td>
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#ad_table_row--40" aria-expanded="false" aria-controls="ad_table_row--40"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>Offering ride to Indy Dec 21 around 10:30am </div></td>
                                    <td>01/12/18</td>
                                    <td>faktos</td>
                                    <td><span class="fa fa-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Active (Expires 02/15/2018)"><span class="sr-only">Active</span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="ad_table_row--40">
                                    <td colspan="5" class="open"><?php include('includes/admin-postdetail-active.php') ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php include('includes/all-pagination.php') ?>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab2">
                        <div class="bg-light mb-3 mt-3 table-filter">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <div class="form-group clear-field mb-0">
                                            <label class="sr-only" for="table_filteruser">Filter table</label>
                                            <input type="text" class="form-control" id="table_filteruser" placeholder="filter">
                                            <div class="cleartext" style="display:none"><i class="fa fa-window-close"></i></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Status: All</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">All</a><a class="dropdown-item" href="#">Active</a><a class="dropdown-item" href="#">Inactive</a><a class="dropdown-item" href="#">Flagged</a><a class="dropdown-item" href="#">Removed</a></div>
                                    </div>
                                    <div class="col text-right">
                                        <button class="btn btn-sm btn-outline-secondary ">Add User</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-sm table-actions table-postdetails">
                            <thead>
                                <tr class="ad-summary">
                                    <th>Username</th>
                                    <th>University ID</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="table_moderatedusers">
                                <tr class="ad-summary">
                                    <td class="post-maininfo" data-toggle="collapse" data-target="#user_table_row--01" aria-expanded="false" aria-controls="user_table_row--01"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>thrclark </div></td>
                                    <td>0001328543</td>
                                    <td><span class="fa fa-check-circle text-success post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Reinstated on 02/15/2018"><span class="sr-only"> Reinstated </span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="user_table_row--01">
                                    <td colspan="3" class="open"><?php include('includes/admin-usertimeline.php') ?></td>
                                </tr>
                                <tr class="ad-summary ">
                                    <td class="post-maininfo " data-toggle="collapse"  data-target="#user_table_row--02" aria-expanded="false" aria-controls="user_table_row--02"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>tewtband</div></td>
                                    <td>0003956434</td>
                                    <td><span class="fa fa-dot-circle-o text-warning post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Warned on 02/15/2018"><span class="sr-only"> Warned </span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="user_table_row--02">
                                    <td colspan="3" class="open"><?php include('includes/admin-usertimeline.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#user_table_row--03" aria-expanded="false" aria-controls="user_table_row--03"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>zealfleo</div></td>
                                    <td>0002534347 </td>
                                    <td><span class="fa fa-ban text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Banned on 02/15/2018"><span class="sr-only"> Banned </span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="user_table_row--03">
                                    <td colspan="3" class="open"><?php include('includes/admin-usertimeline.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#user_table_row--04" aria-expanded="false" aria-controls="user_table_row--04"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>languid </div></td>
                                    <td>0004436419</td>
                                    <td><span class="fa fa-ban text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Banned on 02/15/2018"><span class="sr-only"> Banned </span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="user_table_row--04">
                                    <td colspan="3" class="open"><?php include('includes/admin-usertimeline.php') ?></td>
                                </tr>
                                <tr class="ad-summary">
                                    <td class="post-maininfo" data-toggle="collapse"  data-target="#user_table_row--05" aria-expanded="false" aria-controls="user_table_row--05"><div class="post-title"><i class="fa fa-chevron-right toggle-indicator" aria-hidden="true"></i>accljones </div></td>
                                    <td>0002635478</td>
                                    <td><span class="fa fa-ban text-danger post-status" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Banned on 02/15/2018"><span class="sr-only"> Banned </span></span></td>
                                </tr>
                                <tr class="collapse" data-parent="#accordion1" id="user_table_row--05">
                                    <td colspan="3" class="open"><?php include('includes/admin-usertimeline.php') ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('modals/modal-admin-ad-detail.php') ?>
<?php include('modals/modal-admin-ad-bulkdelete.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
<script type='text/javascript'>
    $(document).ready(function() {
        $("#table_filter").keyup(function() {

            var data = this.value.split(" ");

            var jo = $("#table_userads").find("tr.ad-summary");
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
            $("#table_userads tr").show();
			$( ".open" ).hide();
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
            $("#table_users tr").show();
            
            $("#table_filteruser").val("");
            $("#table_filteruser").focus();
        });
    });
</script> 
<script>
    $(document).ready(function() {
        //$(".post-details").hide();
        $("[data-toggle=collapse]").on('click', function() {
            //$("[data-toggle=collapse]").removeClass("open");
            //$("i").removeClass("fa-chevron-down");
            $(this).parent("tr").toggleClass("open");
            $(this).toggleClass("open");
            $(this).find(".fa-chevron-right").toggleClass("fa-chevron-down");
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $('.post-status').tooltip()
    });
</script> 
<script type='text/javascript'>

    //<![CDATA[
    $(function() {
        var checkboxes = $("input[type='checkbox']"),
            submitButt = $("#multiremove");

        checkboxes.click(function() {
            submitButt.attr("disabled", !checkboxes.is(":checked"));
        });
    }); //]]>
</script>
</body>
</html>
