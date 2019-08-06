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
<div class="container pt-3 mb-5">
    <div class="row">
        <div class="col-12">
            <main class="main-content" id="main-content">
                <div class="row mb-3 justify-content-between align-items-center">
                    <div class="col-auto">
                        <h1> <?php echo $page_title; ?></h1>
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
                                </b> <span class="rbt-table-responsive-cell-content"> Ad Limit per User
                                <div class="ccf-instructional-text">The number of ads an individual user can have posted at once.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content"> <span> <span> 60 </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Ad Retention Days
                                <div class="ccf-instructional-text">Enter number of days to maintain expired ads.  Must be less than 730 days (2 years).</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content"> <span> <span> 365 </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <!-- <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Application Name
                                <div class="ccf-instructional-text">The name of the application. This is displayed in the header.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content">
                                <div> IU Classifieds </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Enable Application Name Display
                                <div class="ccf-instructional-text">Display the Application Name in the header. Default is yes.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content">
                                <div> Yes </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>-->
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Enable Email
                                <div class="ccf-instructional-text">Turn on email functionality. Default is no.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content">
                                <div> No </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Enable Live Data API
                                <div class="ccf-instructional-text">Turn on access to the Live Data API. Default is no.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content"> 
                                <!---->
                                <div> Yes </div>
                                <!----> 
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Error Message
                                <div class="ccf-instructional-text">Enter the message you want users to see when an access denied error happens.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content"> <span> <span> Access is currently denied, please contact support. </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Google Analytics ID
                                <div class="ccf-instructional-text">The ID of the Google Analytics property to send events to.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content"> 
                                <!---->
                                <div> UA-39645822-7 </div>
                                <!----> 
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Market Label
                                <div class="ccf-instructional-text">Change the "Market" label.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content">
                                <div> Campus </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Market User Attribute
                                <div class="ccf-instructional-text">Choose a user attribute to map to a user's default market. The value of this attribute must match the unique key of the market.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content">
                                <div> Campus : ou </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Markets Label
                                <div class="ccf-instructional-text">Change the "Markets" label.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content">
                                <div> Campuses </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Policy Statement
                                <div class="ccf-instructional-text">Enter the policy users must agree to in order to Post ads.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content">
                                <div> The IU Classifieds contain items of interest to the Indiana University community. Please remember… </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Resource Page Count
                                <div class="ccf-instructional-text">The number of items displayed on a page at one time.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content">
                                <div> 10 </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Restrict User Error Message
                                <div class="ccf-instructional-text">Enter the message you want users to see when a restrict user error happens.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content"> <span> <span> You currently do not have access, please contact support. </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> System Email
                                <div class="ccf-instructional-text">Email address from which email is sent.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content"> <span> <span>
                                <message key="admin.value.empty">-</message>
                                </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Time Zone
                                <div class="ccf-instructional-text">Select the your time zone.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content">
                                <div> US/Eastern </div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> Trusted Domain Origins
                                <div class="ccf-instructional-text">Enter the domains of websites/applications you intend to trust so you can use live data.  This is also known as CORS (Cross-Origin Resource Sharing)</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content"> <span> <span>
                                <message key="admin.value.empty">-</message>
                                </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.field.name">Name</message>
                                </b> <span class="rbt-table-responsive-cell-content"> User Permission
                                <div class="ccf-instructional-text">Permission for users who can access Classifieds.  Leave empty to allow all authenticated users.</div>
                                </span></td>
                            <td><b class="rbt-table-responsive-cell-label">
                                <message key="admin.header.value">Value</message>
                                </b> <span class="rbt-table-responsive-cell-content"> <span> <span>
                                <message key="admin.value.empty">-</message>
                                </span> </span> </span></td>
                            <td><b class="rbt-table-responsive-cell-label"> <span class="d-none">
                                <message key="admin.header.actions">Actions</message>
                                </span> </b> <span class="rbt-table-responsive-cell-content">
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit">Edit</message>
                                </button>
                                </span></td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </div>
</div>
<?php include('includes/main-custom-footer.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
