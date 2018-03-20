<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'General settings';
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
        <div class="col-lg-3 d-none d-lg-block">
            <div id="adminNav">
                <?php include('includes/admin-nav.php') ?>
            </div>
        </div>
        <div class="col-12 col-lg-9">
            <div class="main-content" id="main-content">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <h1> <?php echo $page_title; ?></h1>
                    </div>
                    <div class="col-auto">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="togle_help" value="on" checked>
                            <label class="form-check-label" for="togle_help">Help</label>
                        </div>
                    </div>
                </div>
                <table class="table rbt-table-responsive">
                    <thead>
                        <tr>
                            <th><message key="admin.field.name">Name</message></th>
                            <th><message key="admin.header.value">Value</message></th>
                            <th><span class="sr-only">
                                <message key="admin.header.actions">Actions</message>
                                </span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Ad Limit per User
                                <div class="small text-muted helper-text">The number of ads an individual user can have posted at once.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content"> <span> <span> 60 </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Ad Retention Days
                                <div class="small text-muted helper-text">Enter number of days to maintain expired ads.  Must be less than 730 days (2 years).</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content"> <span> <span> 365 </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Application Name
                                <div class="small text-muted helper-text">The name of the application. This is displayed in the header.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content">
                                <div> IU Classifieds </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Enable Application Name Display
                                <div class="small text-muted helper-text">Display the Application Name in the header. Default is yes.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content">
                                <div> Yes </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Enable Email
                                <div class="small text-muted helper-text">Turn on email functionality. Default is no.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content">
                                <div> No </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Error Message
                                <div class="small text-muted helper-text">Enter the message you want users to see when an access denied error happens.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content"> <span> <span> Access is currently denied, please contact support. </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Market Label
                                <div class="small text-muted helper-text">Change the "Market" label.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content">
                                <div> Campus </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Market User Attribute
                                <div class="small text-muted helper-text">Choose a user attribute to map to a user's default market. The value of this attribute must match the unique key of the market.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content">
                                <div> Campus : ou </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Markets Label
                                <div class="small text-muted helper-text">Change the "Markets" label.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content">
                                <div> Campuses </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Policy Statement
                                <div class="small text-muted helper-text">Enter the policy users must agree to in order to post ads.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content">
                                <div> The IU Classifieds contain items of interest to the Indiana University community. Please remember… </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Resource Page Count
                                <div class="small text-muted helper-text">The number of items displayed on a page at one time.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content">
                                <div> 10 </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Restrict User Error Message
                                <div class="small text-muted helper-text">Enter the message you want users to see when a restrict user error happens.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content"> <span> <span> You currently do not have access, please contact support. </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> System Email
                                <div class="small text-muted helper-text">Email address from which email is sent.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content"> <span> <span>
                                <message key="admin.value.empty">-</message>
                                </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Time Zone
                                <div class="small text-muted helper-text">Select the your time zone.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content">
                                <div> US/Eastern </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> Trusted Domain Origins
                                <div class="small text-muted helper-text">Enter the domains of websites/applications you intend to trust so you can use live data.  This is also known as CORS (Cross-Origin Resource Sharing)</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content"> <span> <span>
                                <message key="admin.value.empty">-</message>
                                </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="tablesaw-cell-content"> User Permission
                                <div class="small text-muted helper-text">Permission for users who can access Classifieds.  Leave empty to allow all authenticated users.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="tablesaw-cell-content"> <span> <span>
                                <message key="admin.value.empty">-</message>
                                </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="tablesaw-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
