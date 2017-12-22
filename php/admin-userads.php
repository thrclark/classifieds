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
                <div class="doc-header" style="    margin-bottom: 15px;">
                    <div class="row">
                        <div class="col doc-title">
                            <h2>User Ads</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="sr-only" for="exampleFormControlInput1">Email address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="filter">
                        </div>
                    </div>
                </div>
                <table class="table table-sm table-actions">
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
                    <tbody>
                        <tr>
                            <td>IUB</td>
                            <td>Jobs</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Sublease for Brownstone Apartments for Spring Semester </td>
                            <td>idea@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#pub_addetails">View</button>
                            
                            
                           
                            
                           
                            </td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Activity Partners</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Math-M211 and M212 Textbook "Calculus Single Variable Early Transcendentals" ISBN: 9781305748217 </td>
                            <td>j0sh23@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Books</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Self Defense Boxing Gloves </td>
                            <td>jyx_qc@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Books</td>
                            <td>Offering ride to Indy Dec 21 around 10:30am </td>
                            <td>kerz06@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Jobs</td>
                            <td>2018 Spring sublease Jan-July the Fields room Waterchase </td>
                            <td>kimmy@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Jobs</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Business Law with Online Access Code (16th Edition) </td>
                            <td>kiutl@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Announcements</td>
                            <td><span ng-if="ad.type == 'n'">Looking: </span>Spring 2018 Sublease 7Ten Apartments</td>
                            <td>kles1710@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUSE</td>
                            <td>Electronics</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Essentials of Helth Information Management (3rd Edition) </td>
                            <td>ko41@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Jobs</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </td>
                            <td>algraphy@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Antiques &amp; Collectibles</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Spring Sublease Large Room with Walk in </td>
                            <td>anuresis@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Electronics</td>
                            <td><span ng-if="ad.type == 'n'">Looking: </span>NOW HIRING '18 BARTENDERS AND SERVERS </td>
                            <td>apatetic@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUSE</td>
                            <td>Activity Partners</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Folding table and chairs </td>
                            <td>bert7733@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Electronics</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>RIDE TO/FROM CHI FRI 12/22 </td>
                            <td>bie77@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Electronics</td>
                            <td><span ng-if="ad.type == 'n'">Looking: </span>Need a ride from Indy to Bloomington on Dec 30 </td>
                            <td>blembzp@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Jobs</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>One bedroom sublet in 8th street </td>
                            <td>boyx33@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Activity Partners</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Math-M211 and M212 Textbook "Calculus Single Variable Early Transcendentals" ISBN: 9781305748217 </td>
                            <td>mer2246@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Musicians &amp; Artists</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Self Defense Boxing Gloves </td>
                            <td>mewl@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUSE</td>
                            <td>Vehicles</td>
                            <td>Offering ride to Indy Dec 21 around 10:30am </td>
                            <td>monaxial@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Announcements</td>
                            <td>2018 Spring sublease Jan-July the Fields room Waterchase </td>
                            <td>mott03@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Vehicles</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Business Law with Online Access Code (16th Edition) </td>
                            <td>narquois@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Lost &amp; Found</td>
                            <td><span ng-if="ad.type == 'n'">Looking: </span>Spring 2018 Sublease 7Ten Apartments</td>
                            <td>nick_v@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUSE</td>
                            <td>Jobs</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Essentials of Helth Information Management (3rd Edition) </td>
                            <td>oblivion@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Musicians &amp; Artists</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </td>
                            <td>papyrus@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Musicians &amp; Artists</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Spring Sublease Large Room with Walk in </td>
                            <td>parchy@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Books</td>
                            <td><span ng-if="ad.type == 'n'">Looking: </span>NOW HIRING '18 BARTENDERS AND SERVERS </td>
                            <td>tin657@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Books</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Folding table and chairs </td>
                            <td>tistry@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Vehicles</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>RIDE TO/FROM CHI FRI 12/22 </td>
                            <td>tus99@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Activity Partners</td>
                            <td><span ng-if="ad.type == 'n'">Looking: </span>Need a ride from Indy to Bloomington on Dec 30 </td>
                            <td>vah777@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Vehicles</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>One bedroom sublet in 8th street </td>
                            <td>vaulty@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Miscellaneous</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Math-M211 and M212 Textbook "Calculus Single Variable Early Transcendentals" ISBN: 9781305748217 </td>
                            <td>vesicate@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Books</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Self Defense Boxing Gloves </td>
                            <td>ruth@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Musicians &amp; Artists</td>
                            <td>Offering ride to Indy Dec 21 around 10:30am </td>
                            <td>sexton@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Antiques &amp; Collectibles</td>
                            <td>2018 Spring sublease Jan-July the Fields room Waterchase </td>
                            <td>son22@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUSE</td>
                            <td>Jobs</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Business Law with Online Access Code (16th Edition) </td>
                            <td>spelter@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUPUI</td>
                            <td>Vehicles</td>
                            <td><span ng-if="ad.type == 'n'">Looking: </span>Spring 2018 Sublease 7Ten Apartments</td>
                            <td>oblivion@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Announcements</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Essentials of Helth Information Management (3rd Edition) </td>
                            <td>papyrus@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Jobs</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </td>
                            <td>parchy@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Electronics</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Spring Sublease Large Room with Walk in </td>
                            <td>tin657@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUB</td>
                            <td>Electronics</td>
                            <td><span ng-if="ad.type == 'n'">Looking: </span>NOW HIRING '18 BARTENDERS AND SERVERS </td>
                            <td>tistry@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                        <tr>
                            <td>IUK</td>
                            <td>Activity Partners</td>
                            <td><span ng-if="ad.type == 'o'">Selling: </span>Folding table and chairs </td>
                            <td>ruth@iu.edu</td>
                            <td>12/03/17</td>
                            <td>Active</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">View</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('modals/modal-admin-userads.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
