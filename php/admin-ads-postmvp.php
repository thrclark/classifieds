<?php 
$audience = 'admin';
$section = 'moderator';
$page_title = 'Moderator';
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
        <div class="col-12 col-md-3">
            <div id="adminNav">
                <?php include('includes/admin-nav.php') ?>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="main-content" id="main-content">
                <h1> <?php echo $page_title; ?></h1>
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="moderate-ads-tab" data-toggle="pill" href="#moderate-ads" role="tab" aria-controls="moderate-ads" aria-selected="true">Ads</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="moderate-users-tab" data-toggle="pill" href="#moderate-users" role="tab" aria-controls="moderate-users" aria-selected="false">Restricted Users</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent" tabindex="0" role="tabpanel">
                    <div class="tab-pane fade show active" id="moderate-ads" role="tabpanel" aria-labelledby="moderate-ads-tab">
                        <div class="row">
                            <div class="col">
                                <h2>Ads</h2>
                            </div>
                            <div class="col">
                                <div class="input-group clear-field  mb-3">
                                    <input type="text" class="form-control " placeholder="" aria-label="" aria-describedby="" id="clear_field">
                                    <button class="cleartext" style="display:none"> <i class="fa fa-window-close"></i></button>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="button"><i aria-hidden="true" class="fa fa-search"></i> <span class="sr-only">Search</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-sm table-postdetails">
                            <thead>
                                <tr >
                                    <th>Campus</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody id="table_userads">
                                <tr >
                                    <td>IUB</td>
                                    <td>Jobs</td>
                                    <td>Sublease for Brownstone Apartments for Spring Semester </td>
                                    <td>alfresco</td>
                                    <td>01/22/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr class="ad-summary flagged">
                                    <td>IUB</td>
                                    <td>Rideboard &amp; carpools</td>
                                    <td>Math-M211 and M212 Textbook</td>
                                    <td>thrclark</td>
                                    <td>01/22/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUPUI</td>
                                    <td>Antiques &amp; collectibles</td>
                                    <td>Self Defense Boxing Gloves</td>
                                    <td>immortelle</td>
                                    <td>01/22/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUPUI</td>
                                    <td>Antiques &amp; collectibles</td>
                                    <td>2018 Spring sublease Jan-July the Fields room Waterchase </td>
                                    <td>typhogenic</td>
                                    <td>01/22/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td class="ad-summary flagged">IUB</td>
                                    <td>Jobs</td>
                                    <td>Offering ride to Indy Dec 21 around 10:30am </td>
                                    <td>veridical</td>
                                    <td>01/22/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUK</td>
                                    <td>Activity Partners</td>
                                    <td>Business Law with Online Access Code (16th Edition) </td>
                                    <td>thrclark</td>
                                    <td>01/21/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td class="ad-summary flagged">IUB</td>
                                    <td>Jobs</td>
                                    <td>Spring 2018 Sublease 7Ten Apartments</td>
                                    <td>rentsmp</td>
                                    <td>01/21/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUK</td>
                                    <td>Roommates &amp; sublets</td>
                                    <td>Essentials of Helth Information Management (3rd Edition) </td>
                                    <td>rupellary</td>
                                    <td>01/21/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUS</td>
                                    <td>Roommates &amp; sublets</td>
                                    <td>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </td>
                                    <td>thrclark</td>
                                    <td>01/21/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUK</td>
                                    <td>Roommates &amp; sublets</td>
                                    <td>Spring Sublease Large Room with Walk in </td>
                                    <td>alluvium</td>
                                    <td>01/21/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUK</td>
                                    <td>Antiques &amp; collectibles</td>
                                    <td >NOW HIRING '18 BARTENDERS AND SERVERS </td>
                                    <td>colliform</td>
                                    <td>01/20/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr class="ad-summary flagged">
                                    <td>IUB</td>
                                    <td>Roommates &amp; sublets</td>
                                    <td>Folding table and chairs </td>
                                    <td>mandorla</td>
                                    <td>01/20/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUS</td>
                                    <td>Rideboard &amp; carpools</td>
                                    <td>RIDE TO/FROM CHI FRI 12/22 </td>
                                    <td>knight85</td>
                                    <td>01/20/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUPUI</td>
                                    <td>Books</td>
                                    <td>Need a ride from Indy to Bloomington on Dec 30 </td>
                                    <td>stereometer</td>
                                    <td>01/19/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUS</td>
                                    <td>Books</td>
                                    <td>One bedroom sublet in 8th street </td>
                                    <td>volitive</td>
                                    <td>01/19/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUS</td>
                                    <td>Activity Partners</td>
                                    <td>Math-M211 and M212 Textbook "Calculus Single Variable</td>
                                    <td>vilip</td>
                                    <td>01/19/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td class="ad-summary flagged">IUB</td>
                                    <td>Jobs</td>
                                    <td>Sublease for Brownstone Apartments for Spring Semester </td>
                                    <td>shilling</td>
                                    <td>01/18/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUS</td>
                                    <td>Roommates &amp; sublets</td>
                                    <td>Math-M211 and M212 Textbook</td>
                                    <td>quixotism</td>
                                    <td>01/18/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUS</td>
                                    <td>Books</td>
                                    <td>Self Defense Boxing Gloves</td>
                                    <td>posology</td>
                                    <td>01/18/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUK</td>
                                    <td>Roommates &amp; sublets</td>
                                    <td>2018 Spring sublease Jan-July the Fields room Waterchase </td>
                                    <td>calque</td>
                                    <td>01/18/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td class="ad-summary flagged">IUB</td>
                                    <td>Roommates &amp; sublets</td>
                                    <td>Offering ride to Indy Dec 21 around 10:30am </td>
                                    <td>thrclark</td>
                                    <td>01/17/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td class="ad-summary flagged">IUB</td>
                                    <td>Rideboard &amp; carpools</td>
                                    <td>Business Law with Online Access Code (16th Edition) </td>
                                    <td>colliform</td>
                                    <td>01/17/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUS</td>
                                    <td>Antiques &amp; collectibles</td>
                                    <td>Spring 2018 Sublease 7Ten Apartments</td>
                                    <td>hierurgy</td>
                                    <td>01/16/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUPUI</td>
                                    <td>Books</td>
                                    <td>Essentials of Helth Information Management (3rd Edition) </td>
                                    <td>nolky321</td>
                                    <td>01/16/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td class="ad-summary flagged">IUB</td>
                                    <td>Roommates &amp; sublets</td>
                                    <td>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </td>
                                    <td>squeegee</td>
                                    <td>01/16/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUS</td>
                                    <td>Activity Partners</td>
                                    <td>Spring Sublease Large Room with Walk in </td>
                                    <td>telenergy</td>
                                    <td>01/15/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUK</td>
                                    <td>Jobs</td>
                                    <td>NOW HIRING '18 BARTENDERS AND SERVERS </td>
                                    <td>velocimeter</td>
                                    <td>01/15/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUS</td>
                                    <td>Roommates &amp; sublets</td>
                                    <td>Folding table and chairs </td>
                                    <td>xeli</td>
                                    <td>01/15/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUPUI</td>
                                    <td>Roommates &amp; sublets</td>
                                    <td>RIDE TO/FROM CHI FRI 12/22 </td>
                                    <td>fishbein</td>
                                    <td>01/15/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td class="ad-summary flagged">IUB</td>
                                    <td>Rideboard &amp; carpools</td>
                                    <td>Need a ride from Indy to Bloomington on Dec 30 </td>
                                    <td>dissentient</td>
                                    <td>01/15/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUS</td>
                                    <td>Antiques &amp; collectibles</td>
                                    <td>One bedroom sublet in 8th street </td>
                                    <td>jogo11</td>
                                    <td>01/14/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUPUI</td>
                                    <td>Books</td>
                                    <td>Math-M211 and M212 Textbook "Calculus Single Variable</td>
                                    <td>reamlt</td>
                                    <td>01/14/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUS</td>
                                    <td>Roommates &amp; sublets</td>
                                    <td>Offering ride to Indy Dec 21 around 10:30am </td>
                                    <td>phenetic</td>
                                    <td>01/14/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUPUI</td>
                                    <td>Roommates &amp; sublets</td>
                                    <td>Business Law with Online Access Code (16th Edition) </td>
                                    <td>pygmachy</td>
                                    <td>01/14/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUS</td>
                                    <td>Antiques &amp; collectibles</td>
                                    <td>Spring 2018 Sublease 7Ten Apartments</td>
                                    <td>varifocal</td>
                                    <td>01/13/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUS</td>
                                    <td>Activity Partners</td>
                                    <td>Essentials of Helth Information Management (3rd Edition) </td>
                                    <td>zuquir</td>
                                    <td>01/13/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUK</td>
                                    <td>Rideboard &amp; carpools</td>
                                    <td>2014 JEEP Grand Cherokee 4*4 Limited 5w miles 1st owner </td>
                                    <td>meronym</td>
                                    <td>01/13/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td class="ad-summary flagged">IUB</td>
                                    <td>Activity Partners</td>
                                    <td>Spring Sublease Large Room with Walk in </td>
                                    <td>groundsel</td>
                                    <td>01/12/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUPUI</td>
                                    <td>Jobs</td>
                                    <td>NOW HIRING '18 BARTENDERS AND SERVERS </td>
                                    <td>demitasse</td>
                                    <td>01/12/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                                <tr >
                                    <td>IUK</td>
                                    <td>Books</td>
                                    <td>Offering ride to Indy Dec 21 around 10:30am </td>
                                    <td>jogo11</td>
                                    <td>01/12/18</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail">View</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php include('includes/all-pagination.php') ?>
                    </div>
                    <div class="tab-pane show fade" id="moderate-users" role="tabpanel" aria-labelledby="moderate-users-tab">
                        <div class="row">
                            <div class="col">
                                <h2>Restricted users</h2>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-sm btn-outline-primary " data-toggle="modal" data-target="#modal_restrictuser">Restrict user</button>
                            </div>
                        </div>
                        <table class="table table-sm rbt-table-actions">
                            <thead>
                                <tr >
                                    <th>User</th>
                                    <th>Person ID</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody id="table_userads">
                                <tr >
                                    <td>thrclark</td>
                                    <td>0001328543</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#asdf">Remove</button></td>
                                </tr>
                                <tr>
                                    <td>tewtband</td>
                                    <td>0003928574</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#asdf">Remove</button></td>
                                </tr>
                                <tr >
                                    <td>zealfleo</td>
                                    <td>0002633644</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#asdf">Remove</button></td>
                                </tr>
                                <tr >
                                    <td>languid</td>
                                    <td>0002737344</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#asdf">Remove</button></td>
                                </tr>
                                <tr >
                                    <td>accljones</td>
                                    <td>0003470996</td>
                                    <td><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#asdf">Remove</button></td>
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
