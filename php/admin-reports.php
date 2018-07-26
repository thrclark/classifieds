<?php 
$audience = 'admin';
$section = 'moderator';
$page_title = 'Reported ads';
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
                    <div class="col">
                        <h1> <?php echo $page_title; ?></h1>
                    </div>
                    
                    
                    <div class="col-auto">
                    
                    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">Unresolved only </label>
</div>

</div>





                </div>
                <div class="ccf-table-responsive-container">
                    <table class="table rbt-table-responsive rbt-table-actions">
                        <thead>
                            <tr>
                                <th>Ad title</th>
                                <th>Posted by</th>
                                <th>First reported</th>
                                <th>Resolution</th>
                                <th>Report</th>
                            </tr>
                        </thead>
                        <tbody id="table_userads">
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">Sublease for Brownstone Apartments for Spring Semester </span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">kwhalem</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content">07/28/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content">Unresolved</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#admin_ad_detail_reported">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">Math-M211 and M212 book</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">jlancer</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content">07/28/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content">Unresolved</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#admin_ad_detail_reported">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">Math-M211 and M212 text</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">jlancer</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content">07/27/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content">Unresolved</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#admin_ad_detail_reported">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">Math-M211 and M212 Textbook</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">jlancer</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content">07/26/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content">Unresolved</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#admin_ad_detail_reported">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">Self Defense Boxing Gloves</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">kennyg</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content">07/24/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content"> Acceptable</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#admin_ad_detail_reportdismisseddd">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">2018 Spring sublease Jan-July the Fields  </span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">jflorber</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content"> 07/22/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content">Policy violation</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#admin_ad_detail_addeactivateddd">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">Offering ride to Indy Dec 21 around 10:30am </span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">stgadd</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content">07/22/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content">Policy violation</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#admin_ad_detail_addeactivateddd">View</button>
                                    </span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('modals/modal-admin-ad-detail-reported.php') ?>
<?php include('modals/modal-admin-ad-detail-reportdismissed.php') ?>
<?php include('modals/modal-admin-ad-detail-addeactivated.php') ?>
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
