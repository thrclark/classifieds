<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Policy maintenance';
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
    <div class="row mb-3 justify-content-between align-items-center">
        <div class="col">
            <h1> <?php echo $page_title; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="main-content" id="main-content">
                <div class="form-group">
                    <label class="control-label" id="urlLabel">
                        <message key="policy"> Policy statement </message>
                    </label>
                    <div class="ccf-instructional-text" id="urlDirections">
                        <message key="">Use the space below to specify a policy statement which users will be required to abide by when posting ads in this system.</message>
                    </div>
                    <textarea id="richText1"></textarea>
                </div>
                <div class="font-weight-bold mb-3 mt-3"> Notification of policy violations </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="notifypolicyviolation" id="notifypolicyviolation1" value="1" checked>
                    <label class="form-check-label" for="notifypolicyviolation1"> Do not send notifications for policy violations. </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="notifypolicyviolation" id="notifypolicyviolation2" value="2">
                    <label class="form-check-label" for="notifypolicyviolation2"> Use a single policy violation message for all violation types. </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="notifypolicyviolation" id="notifypolicyviolation3" value="3">
                    <label class="form-check-label" for="notifypolicyviolation3"> Specify individual violation types and messages. </label>
                </div>
              
                <div class="form-group desc" id="asdf2" style="display:none">
                    <label for="exampleFormControlTextarea1">Default policy violation message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="desc" id="asdf3" style="display:none">
                    <table class="table rbt-table-responsive rbt-table-actions">
                        <thead>
                            <tr>
                                <th><message key="admin.field.name">Policy violation type</message></th>
                                <th><message key="admin.market.field.shortName">Message sent to user</message></th>
                                <th><span class="sr-only">
                                    <message key="admin.header.actions">Actions</message>
                                    </span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!---->
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.field.name">Name</message>
                                    </b> <span class="rbt-table-responsive-cell-content"> Contains offensive material </span></td>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.market.field.shortName">Short Name</message>
                                    </b> <span class="rbt-table-responsive-cell-content "> We have received a complaint regarding your use of Classifieds for posting offensive material. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons. </span></td>
                                <td><div class="dropdown">
                                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                    </div></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.field.name">Name</message>
                                    </b> <span class="rbt-table-responsive-cell-content"> Fake ad </span></td>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.market.field.shortName">Short Name</message>
                                    </b> <span class="rbt-table-responsive-cell-content "> We have received a complaint regarding your use of Classifieds for posting a fake/spoof ad. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons. </span></td>
                                <td><div class="dropdown">
                                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                    </div></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.field.name">Name</message>
                                    </b> <span class="rbt-table-responsive-cell-content"> Fraudulent activity </span></td>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.market.field.shortName">Short Name</message>
                                    </b> <span class="rbt-table-responsive-cell-content "> We have received a complaint regarding your use of Classifieds for fraudulent activity. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons. </span></td>
                                <td><div class="dropdown">
                                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div>
                                    </div></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.field.name">Name</message>
                                    </b> <span class="rbt-table-responsive-cell-content"> Promotes personal/commercial business </span></td>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.market.field.shortName">Short Name</message>
                                    </b> <span class="rbt-table-responsive-cell-content "> We have received a complaint regarding your use of Classifieds for promotion of a personal/commercial business. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons. </span></td>
                                <td><div class="dropdown">
                                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                    </div></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.field.name">Name</message>
                                    </b> <span class="rbt-table-responsive-cell-content"> Promotes a political/social agenda </span></td>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.market.field.shortName">Short Name</message>
                                    </b> <span class="rbt-table-responsive-cell-content "> We have received a complaint regarding your use of Classifieds for promoting a political/social agenda. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons. </span></td>
                                <td><div class="dropdown">
                                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                    </div></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.field.name">Name</message>
                                    </b> <span class="rbt-table-responsive-cell-content"> Selling IU parking permit </span></td>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.market.field.shortName">Short Name</message>
                                    </b> <span class="rbt-table-responsive-cell-content "> Your IU Classifieds ad(s) for the buying or selling of IU parking permits violates IU policy.  IU Permits are property of the University. Please be aware that your ad(s) have been removed, and future violations may result in revoked access to IU Classifieds. We encourage you to continue using Classifieds for appropriate reasons. </span></td>
                                <td><div class="dropdown">
                                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                    </div></td>
                            </tr>
                            <tr>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.field.name">Name</message>
                                    </b> <span class="rbt-table-responsive-cell-content"> Other </span></td>
                                <td><b class="rbt-table-responsive-cell-label">
                                    <message key="admin.market.field.shortName">Short Name</message>
                                    </b></td>
                                <td><div class="dropdown">
                                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                    </div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script> 
<script>
var simplemde = new SimpleMDE({ element: $("#richText1")[0] });
</script> 
<script>
$(document).ready(function() {
    $("input[name$='notifypolicyviolation']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#asdf" + test).show();
    });
});

</script>
</body>
</html>
