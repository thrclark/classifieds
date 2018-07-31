<?php 
$audience = 'admin';
$section = 'moderator';
$page_title = 'Reports';
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
                </div>
                <div class="ccf-table-responsive-container">
                    <table class="table rbt-table-responsive">
                        <thead>
                            <tr>
                                <th class="pl-0 pr-0"><span class="sr-only">Delete report</span></th>
                                <th>Ad title</th>
                                <th>Posted by</th>
                                <th>Ad ID</th>
                                <th>Reported by</th>
                                <th>Report date</th>
                                <th>Action taken</th>
                                <th>Report</th>
                            </tr>
                        </thead>
                        <tbody id="table_userads">
                            <tr>
                                <td class="pl-0 pr-0 text-center"><div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" disabled>
                                        <label class="form-check-label" for="inlineCheckbox1"><span class="sr-only">Option one</span></label>
                                    </div></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">Sublease for Brownstone Apartments for Spring Semester </span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">kwhalem</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad ID</b><span class="rbt-table-responsive-cell-content">613279</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Reported by</b><span class="rbt-table-responsive-cell-content">stgetz</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content">07/28/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content">Pending</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail_reported">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td class="pl-0 pr-0"><div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1" disabled>
                                        <label class="form-check-label" for="inlineCheckbox2"><span class="sr-only">Option one</span></label>
                                    </div></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">Math-M211 and M212 Textbook</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">jlancer</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad ID</b><span class="rbt-table-responsive-cell-content">883455</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Reported by</b><span class="rbt-table-responsive-cell-content">johcoltra</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content">07/27/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content">Pending</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail_reported">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td class="pl-0 pr-0"><div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1" disabled>
                                        <label class="form-check-label" for="inlineCheckbox3"><span class="sr-only">Option one</span></label>
                                    </div></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">Math-M211 and M212 Textbook</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">jlancer</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad ID</b><span class="rbt-table-responsive-cell-content">883455</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Reported by</b><span class="rbt-table-responsive-cell-content">bobberg</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content">07/27/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content">Pending</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail_reported">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td class="pl-0 pr-0"><div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1" disabled>
                                        <label class="form-check-label" for="inlineCheckbox4"><span class="sr-only">Option one</span></label>
                                    </div></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">Math-M211 and M212 Textbook</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">jlancer</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad ID</b><span class="rbt-table-responsive-cell-content">883455</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Reported by</b><span class="rbt-table-responsive-cell-content">sonstitt </span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content">07/26/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content">Pending</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail_reported">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td class="pl-0 pr-0"><div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox5"><span class="sr-only">Option one</span></label>
                                    </div></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">Self Defense Boxing Gloves</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">kennyg</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad ID</b><span class="rbt-table-responsive-cell-content">672730</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Reported by</b><span class="rbt-table-responsive-cell-content">bwebster</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content">07/24/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content"> Report deactivated</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail_reportdismissed">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td class="pl-0 pr-0"><div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox6"><span class="sr-only">Option one</span></label>
                                    </div></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">2018 Spring sublease Jan-July the Fields  </span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">jflorber</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad ID</b><span class="rbt-table-responsive-cell-content">183722</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Reported by</b><span class="rbt-table-responsive-cell-content">lesyoung</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content"> 07/22/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content">Ad deactivated</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail_addeactivated">View</button>
                                    </span></td>
                            </tr>
                            <tr>
                                <td class="pl-0 pr-0"><div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox7"><span class="sr-only">Option one</span></label>
                                    </div></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad title</b><span class="rbt-table-responsive-cell-content">Offering ride to Indy Dec 21 around 10:30am </span></td>
                                <td><b class="rbt-table-responsive-cell-label">Posted by</b><span class="rbt-table-responsive-cell-content">stgadd</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Ad ID</b><span class="rbt-table-responsive-cell-content">979422</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Reported by</b><span class="rbt-table-responsive-cell-content">sarivers</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Report date</b><span class="rbt-table-responsive-cell-content">07/22/18</span></td>
                                <td><b class="rbt-table-responsive-cell-label">Action taken</b><span class="rbt-table-responsive-cell-content">Ad deactivated</span></td>
                                <td><b class="rbt-table-responsive-cell-label d-none">View</b><span class="rbt-table-responsive-cell-content">
                                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#admin_ad_detail_addeactivated">View</button>
                                    </span></td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-sm btn-outline-primary" id="deleteSelected" style="display:none"> Delete selected</button>
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
<script>

 $(document).ready(function() {	
        $(".form-check-input").click(function () {
            if ($(this).is(":checked")) {
                $("#deleteSelected").fadeIn();
              
            } else {
                $("#deleteSelected").fadeOut();
               
            }
        });
    });
    
    </script>
</body>
</html>
