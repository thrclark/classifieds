<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Policy';
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
<main>
    <div class="container pt-3">
        <div class="row mb-3 justify-content-between align-items-center">
            <div class="col">
                <h1> <?php echo $page_title; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="main-content" id="main-content">
                    <h2 class="rbt-ts-26 ">Policy statement</h2>
                    <p class="mt-0"> Specify a policy statement which users will be required to abide by when posting ads in this system.</p>
                    <div class="card bg-light mb-5">
                        <div class="card-body"> <span class="card-text">
                            <div class="row">
                                <div class="col">
                                    <p>The IU Classifieds contain items of interest to the Indiana University community. Please remember that the use of the University's computer network for these messages is a privilege extended to students and employees for personal, non-commercial use. University resources are not allowed to be used for the promotion of commercial or personal businesses. In addition, the use of IU Classifieds to promote or provide pornographic materials or sexual services is strictly prohibited.  The buying or selling of IU parking permits is prohibited as parking permits are the property of the university. The terms of any transactions are between the buyer and seller. Classifieds may contain office telephone numbers; however, it is the shared responsibility of supervisors and employees to assure that this privilege is not abused. Honor all copyrights when posting images or text in the Classifieds.</p>
                                    <p>Any housing postings must follow Federal and State laws. Please read <a href="http://www.craigslist.org/about/FHA" target="_blank">Fair Housing laws.</a> </p>
                                    <p>By using this site, you agree to abide by Indiana Universitys "Appropriate Technology Use" Policies as outlined by the Information Policy Office at <a href="http://policies.iu.edu/policies/categories/information-it/it/IT-01.shtml" target="_blank">http://policies.iu.edu/policies/categories/information-it/it/IT-01.shtml</a> and to use the Classifieds appropriately. These pages are not intended for solicitation, political purposes and publishing opinions, nor are they to be used to make jokes or mislead others. The University reserves the right to remove any posting that it deems inappropriate.</p>
                                    <p>Questions regarding the IU Classifieds may be addressed to <a href="mailto:one@iu.edu">one@iu.edu</a> </p>
                                </div>
                                <div class="col-auto"><a href="admin-policymaintenance-policy.php" class="btn btn-sm btn-outline-primary">Edit</a></div>
                            </div>
                            </span> </div>
                    </div>
                    <h2 class="rbt-ts-26 ">Violation types and messages</h2>
                    <p class="mt-0"> You may optionally specify policy violation types and messages to be used for tracking and messaging users who violate terms of the policy.</p>
                    <div class="card bg-light mb-5">
                        <div class="card-body">
                            <table class="table rbt-table-responsive rbt-table-actions mt-3">
                                <thead>
                                    <tr>
                                        <th><message key="admin.field.name">Violation type</message></th>
                                        <th><message key="admin.market.field.shortName">Message to be sent</message></th>
                                        <th> <a href="admin-policymaintenance-reason.php" class="btn btn-sm btn-outline-primary">Add</a> <span class="sr-only">
                                            <message key="admin.header.actions">Actions</message>
                                            </span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b class="rbt-table-responsive-cell-label">
                                            <message key="admin.field.name">Name</message>
                                            </b> <span class="rbt-table-responsive-cell-content"> Contains offensive material </span></td>
                                        <td><b class="rbt-table-responsive-cell-label">
                                            <message key="admin.market.field.shortName">Short Name</message>
                                            </b> <span class="rbt-table-responsive-cell-content "> We have received a complaint regarding your use of Classifieds for posting offensive material. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this <a href="#">policy</a> in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons. </span></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-policymaintenance-reason.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><b class="rbt-table-responsive-cell-label">
                                            <message key="admin.field.name">Name</message>
                                            </b> <span class="rbt-table-responsive-cell-content"> Fake ad </span></td>
                                        <td><b class="rbt-table-responsive-cell-label">
                                            <message key="admin.market.field.shortName">Short Name</message>
                                            </b> <span class="rbt-table-responsive-cell-content "> We have received a complaint regarding your use of Classifieds for posting a fake/spoof ad. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this <a href="#">policy</a> in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons. </span></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-policymaintenance-reason.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><b class="rbt-table-responsive-cell-label">
                                            <message key="admin.field.name">Name</message>
                                            </b> <span class="rbt-table-responsive-cell-content"> Fraudulent activity </span></td>
                                        <td><b class="rbt-table-responsive-cell-label">
                                            <message key="admin.market.field.shortName">Short Name</message>
                                            </b> <span class="rbt-table-responsive-cell-content "> We have received a complaint regarding your use of Classifieds for fraudulent activity. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this <a href="#">policy</a> in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons. </span></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-policymaintenance-reason.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><b class="rbt-table-responsive-cell-label">
                                            <message key="admin.field.name">Name</message>
                                            </b> <span class="rbt-table-responsive-cell-content"> Promotes personal/commercial business </span></td>
                                        <td><b class="rbt-table-responsive-cell-label">
                                            <message key="admin.market.field.shortName">Short Name</message>
                                            </b> <span class="rbt-table-responsive-cell-content "> We have received a complaint regarding your use of Classifieds for promotion of a personal/commercial business. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this <a href="#">policy</a> in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons. </span></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-policymaintenance-reason.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><b class="rbt-table-responsive-cell-label">
                                            <message key="admin.field.name">Name</message>
                                            </b> <span class="rbt-table-responsive-cell-content"> Promotes a political/social agenda </span></td>
                                        <td><b class="rbt-table-responsive-cell-label">
                                            <message key="admin.market.field.shortName">Short Name</message>
                                            </b> <span class="rbt-table-responsive-cell-content "> We have received a complaint regarding your use of Classifieds for promoting a political/social agenda. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this <a href="#">policy</a> in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons. </span></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-policymaintenance-reason.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
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
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-policymaintenance-reason.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div>
                                            </div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h2 class="rbt-ts-26 ">General violation message</h2>
                    <p class="mt-0"> Specify a general policy violation message that will be used in the case that specific message is not provided for a violation type.</p>
                    <div class="card bg-light mb-5">
                        <div class="card-body"> <span class="card-text">
                            <div class="row">
                                <div class="col">
                                    <p>We have received a complaint regarding your use of Classifieds. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this <a href="#">policy</a> in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.</p>
                                </div>
                                <div class="col-auto"><a href="admin-policymaintenance-generalmessage.php" class="btn btn-sm btn-outline-primary">Edit</a></div>
                            </div>
                            </span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('includes/admin-footerscripts.php') ?>
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script> 
<script>
var simplemde = new SimpleMDE({ status: false, element: $("#richText1")[0] });
</script>
</body>
</html>
