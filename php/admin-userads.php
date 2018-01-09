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
               
                    <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Restricted Users</a> </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="allads" role="tabpanel" aria-labelledby="allads-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group clear-field">
                                    <label class="sr-only" for="table_filter">Filter table</label>
                                    <input type="text" class="form-control" id="table_filter" placeholder="filter" >
                                    <div class="cleartext" style="display:none"> <i class="fa fa-window-close"></i></div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-sm" >
                            <thead>
                                <tr>
                                    <th>Ad Title</th>
                                    <th>Posted by</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="table_userads">
                                <tr>
                                    <td>Sublease for Brownstone Apartments for Spring Semester </td>
                                    <td>tutorsmob</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Math-M211 and M212 Textbook "Calculus Single Variable Early Transcendentals" ISBN: 9781305748217 </td>
                                    <td>skylardy</td>
                                    <td>Flagged</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-chevron-down" aria-hidden="true"></i> Self Defense Boxing Gloves <br>
<br>
<br>
<br>
<br>
<br>
<br>
</td>
                                    <td>diewillow</td>
                                    <td>Inactive</td>
                                </tr>
                                <tr>
                                    <td>Offering ride to Indy Dec 21 around 10:30am </td>
                                    <td>glintgodly</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>2018 Spring sublease Jan-July the Fields room Waterchase </td>
                                    <td>roadmasked</td>
                                    <td>Removed</td>
                                </tr>
                                <tr>
                                    <td>Business Law with Online Access Code (16th Edition) </td>
                                    <td>backlisp</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Spring 2018 Sublease 7Ten Apartments</td>
                                    <td>numbadze</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Essentials of Helth Information Management (3rd Edition) </td>
                                    <td>testifytub</td>
                                    <td>Inactive</td>
                                </tr>
                                <tr>
                                    <td>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </td>
                                    <td>velaribbon</td>
                                    <td>Inactive</td>
                                </tr>
                                <tr>
                                    <td>Spring Sublease Large Room with Walk in </td>
                                    <td>reamcoals</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>NOW HIRING '18 BARTENDERS AND SERVERS </td>
                                    <td>factbest</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Folding table and chairs </td>
                                    <td>oinkskier</td>
                                    <td>Inactive</td>
                                </tr>
                                <tr>
                                    <td>RIDE TO/FROM CHI FRI 12/22 </td>
                                    <td>killspine</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Need a ride from Indy to Bloomington on Dec 30 </td>
                                    <td>jawplenty</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>One bedroom sublet in 8th street </td>
                                    <td>mendwhinny</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Math-M211 and M212 Textbook "Calculus Single Variable Early Transcendentals" ISBN: 9781305748217 </td>
                                    <td>sharinggym</td>
                                    <td>Flagged</td>
                                </tr>
                                <tr>
                                    <td>Self Defense Boxing Gloves </td>
                                    <td>growlsicko</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Offering ride to Indy Dec 21 around 10:30am </td>
                                    <td>bomblove</td>
                                    <td>Removed</td>
                                </tr>
                                <tr>
                                    <td>2018 Spring sublease Jan-July the Fields room Waterchase </td>
                                    <td>backlisp</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Business Law with Online Access Code (16th Edition) </td>
                                    <td>factbest</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Spring 2018 Sublease 7Ten Apartments</td>
                                    <td>tutorsmob</td>
                                    <td>Inactive</td>
                                </tr>
                                <tr>
                                    <td>Essentials of Helth Information Management (3rd Edition) </td>
                                    <td>skylardy</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </td>
                                    <td>diewillow</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Spring Sublease Large Room with Walk in </td>
                                    <td>glintgodly</td>
                                    <td>Inactive</td>
                                </tr>
                                <tr>
                                    <td>NOW HIRING '18 BARTENDERS AND SERVERS </td>
                                    <td>roadmasked</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Folding table and chairs </td>
                                    <td>backlisp</td>
                                    <td>Inactive</td>
                                </tr>
                                <tr>
                                    <td>RIDE TO/FROM CHI FRI 12/22 </td>
                                    <td>numbadze</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Need a ride from Indy to Bloomington on Dec 30 </td>
                                    <td>testifytub</td>
                                    <td>Removed</td>
                                </tr>
                                <tr>
                                    <td>One bedroom sublet in 8th street </td>
                                    <td>factbest</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Math-M211 and M212 Textbook "Calculus Single Variable Early Transcendentals" ISBN: 9781305748217 </td>
                                    <td>oinkskier</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Self Defense Boxing Gloves </td>
                                    <td>killspine</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Offering ride to Indy Dec 21 around 10:30am </td>
                                    <td>jawplenty</td>
                                    <td>Inactive</td>
                                </tr>
                                <tr>
                                    <td>2018 Spring sublease Jan-July the Fields room Waterchase </td>
                                    <td>mendwhinny</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Business Law with Online Access Code (16th Edition) </td>
                                    <td>sharinggym</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Spring 2018 Sublease 7Ten Apartments</td>
                                    <td>growlsicko</td>
                                    <td>Inactive</td>
                                </tr>
                                <tr>
                                    <td>Essentials of Helth Information Management (3rd Edition) </td>
                                    <td>bomblove</td>
                                    <td>Inactive</td>
                                </tr>
                                <tr>
                                    <td>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </td>
                                    <td>diewillow</td>
                                    <td>Inactive</td>
                                </tr>
                                <tr>
                                    <td>Spring Sublease Large Room with Walk in </td>
                                    <td>bushmildew</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>NOW HIRING '18 BARTENDERS AND SERVERS </td>
                                    <td>rakeplank</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Folding table and chairs </td>
                                    <td>velaribbon</td>
                                    <td>Active</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <!--  <table class="table table-sm table-actions" >
                    <thead>
                        <tr>
                            <th> Market</th>
                            <th>Category</th>
                            <th>Ad Title</th>
                            <th>Email</th>
                            <th>Posted</th>
                            <th>Status</th>
                            <th><span class="sr-only">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody id="table_userads">
                        <tr>
                            <td>IUB</td>
                            <td>Jobs</td>
                            <td>Sublease for Brownstone Apartments for Spring Semester </td>
                            <td>idea@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Activity Partners</td>
                            <td>Math-M211 and M212 Textbook "Calculus Single Variable Early Transcendentals" ISBN: 9781305748217 </td>
                            <td>j0sh23@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Books</td>
                            <td>Self Defense Boxing Gloves </td>
                            <td>jyx_qc@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Books</td>
                            <td>Offering ride to Indy Dec 21 around 10:30am </td>
                            <td>kerz06@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Jobs</td>
                            <td>2018 Spring sublease Jan-July the Fields room Waterchase </td>
                            <td>kimmy@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Jobs</td>
                            <td>Business Law with Online Access Code (16th Edition) </td>
                            <td>kiutl@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Announcements</td>
                            <td>Spring 2018 Sublease 7Ten Apartments</td>
                            <td>kles1710@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUSE</td>
                            <td>Electronics</td>
                            <td>Essentials of Helth Information Management (3rd Edition) </td>
                            <td>ko41@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Jobs</td>
                            <td>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </td>
                            <td>algraphy@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Antiques &amp; Collectibles</td>
                            <td>Spring Sublease Large Room with Walk in </td>
                            <td>anuresis@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Electronics</td>
                            <td>NOW HIRING '18 BARTENDERS AND SERVERS </td>
                            <td>apatetic@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUSE</td>
                            <td>Activity Partners</td>
                            <td>Folding table and chairs </td>
                            <td>bert7733@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Electronics</td>
                            <td>RIDE TO/FROM CHI FRI 12/22 </td>
                            <td>bie77@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Electronics</td>
                            <td>Need a ride from Indy to Bloomington on Dec 30 </td>
                            <td>blembzp@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Jobs</td>
                            <td>One bedroom sublet in 8th street </td>
                            <td>boyx33@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Activity Partners</td>
                            <td>Math-M211 and M212 Textbook "Calculus Single Variable Early Transcendentals" ISBN: 9781305748217 </td>
                            <td>mer2246@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Musicians &amp; Artists</td>
                            <td>Self Defense Boxing Gloves </td>
                            <td>mewl@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUSE</td>
                            <td>Vehicles</td>
                            <td>Offering ride to Indy Dec 21 around 10:30am </td>
                            <td>monaxial@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Announcements</td>
                            <td>2018 Spring sublease Jan-July the Fields room Waterchase </td>
                            <td>mott03@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Vehicles</td>
                            <td>Business Law with Online Access Code (16th Edition) </td>
                            <td>narquois@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Lost &amp; Found</td>
                            <td>Spring 2018 Sublease 7Ten Apartments</td>
                            <td>nick_v@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUSE</td>
                            <td>Jobs</td>
                            <td>Essentials of Helth Information Management (3rd Edition) </td>
                            <td>oblivion@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Musicians &amp; Artists</td>
                            <td>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </td>
                            <td>papyrus@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Musicians &amp; Artists</td>
                            <td>Spring Sublease Large Room with Walk in </td>
                            <td>parchy@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Books</td>
                            <td>NOW HIRING '18 BARTENDERS AND SERVERS </td>
                            <td>tin657@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Books</td>
                            <td>Folding table and chairs </td>
                            <td>tistry@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Vehicles</td>
                            <td>RIDE TO/FROM CHI FRI 12/22 </td>
                            <td>tus99@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Activity Partners</td>
                            <td>Need a ride from Indy to Bloomington on Dec 30 </td>
                            <td>vah777@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Vehicles</td>
                            <td>One bedroom sublet in 8th street </td>
                            <td>vaulty@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Miscellaneous</td>
                            <td>Math-M211 and M212 Textbook "Calculus Single Variable Early Transcendentals" ISBN: 9781305748217 </td>
                            <td>vesicate@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Books</td>
                            <td>Self Defense Boxing Gloves </td>
                            <td>ruth@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Musicians &amp; Artists</td>
                            <td>Offering ride to Indy Dec 21 around 10:30am </td>
                            <td>sexton@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Antiques &amp; Collectibles</td>
                            <td>2018 Spring sublease Jan-July the Fields room Waterchase </td>
                            <td>son22@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUSE</td>
                            <td>Jobs</td>
                            <td>Business Law with Online Access Code (16th Edition) </td>
                            <td>spelter@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Vehicles</td>
                            <td>Spring 2018 Sublease 7Ten Apartments</td>
                            <td>oblivion@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Announcements</td>
                            <td>Essentials of Helth Information Management (3rd Edition) </td>
                            <td>papyrus@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Jobs</td>
                            <td>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </td>
                            <td>parchy@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Electronics</td>
                            <td>Spring Sublease Large Room with Walk in </td>
                            <td>tin657@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Electronics</td>
                            <td>NOW HIRING '18 BARTENDERS AND SERVERS </td>
                            <td>tistry@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Activity Partners</td>
                            <td>Folding table and chairs </td>
                            <td>ruth@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button></td>
                        </tr>
                    </tbody>
                </table>--> 
                    </div>
               
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-sm table-actions">
                            <thead>
                                <tr>
                                    <th> Username</th>
                                    <th><strong>University Id</strong></th>
                                    <th>Status</th>
                                    <th><span class="sr-only">Actions</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>thrclark</td>
                                    <td>0001328543</td>
                                    <td>Flagged</td>
                                    <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                                </tr>
                                <tr>
                                    <td>tewtband</td>
                                    <td>0003023985</td>
                                    <td>Flagged</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>zealfleo</td>
                                    <td>0003956434</td>
                                    <td>Flagged</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>languid</td>
                                    <td>0002534347</td>
                                    <td>Warned</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>accljones</td>
                                    <td>0004436419</td>
                                    <td>Flagged</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>sgdsteven</td>
                                    <td>0002635478</td>
                                    <td>Restricted</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>lerrome</td>
                                    <td>0002888753</td>
                                    <td>Warned</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php include('includes/all-pagination.php') ?>
            </div>
        </div>
    </div>
</div>
<?php include('modals/modal-admin-userads.php') ?>
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
</body>
</html>
