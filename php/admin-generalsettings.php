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
        <div class="col-12 col-md-3">
            <div id="adminNav">
                <?php include('includes/admin-nav.php') ?>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="main-content">
                 <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                              <h1> <?php echo $page_title; ?></h1>
                        </div>
                        <div class="col-auto">
                            <div class="form-check rbt-checkbox" >
                                <label class="form-check-label" tabindex="0">
                                    <input class="form-check-input" type="checkbox" name="togle_help" id="togle_help" checked value="on" >
                                    <span class="rbt-radiocheck-helper"> </span>Help</label>
                            </div>
                        </div>
                    </div>
                <table class="table table-sm table-actions tablesaw tablesaw-stack">
                    <thead>
                        <tr>
                            <th><message key="admin.field.name" ng-reflect-key="admin.field.name">Name</message></th>
                            <th><message key="admin.field.value" ng-reflect-key="admin.field.value">Value</message></th>
                            <th><span class="sr-only">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Ad Limit per User
                                <div class="small helper-text">The number of ads an individual user can have posted at once.</div>
                                </td>
                            <td> <span> 60 </span> </td>
                            <td><b class="tablesaw-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span> </b> 
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                </td>
                        </tr>
                        <tr>
                            <td> Application Name
                                <div class="small helper-text">The name of the application. This is displayed in the header.</div>
                                </td>
                            <td> 
                                <div> IU Classifieds </div>
                                </td>
                            <td><b class="tablesaw-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span> </b> 
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                </td>
                        </tr>
                        <tr>
                            <td> Enable Application Name Display
                                <div class="small helper-text">Display the Application Name in the header. Default is yes.</div>
                                </td>
                            <td> 
                                <div> Yes </div>
                                </td>
                            <td><b class="tablesaw-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span> </b> 
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                </td>
                        </tr>
                        <tr>
                            <td> Enable Email
                                <div class="small helper-text">Turn on email functionality. Default is no.</div>
                                </td>
                            <td> 
                                <div> No </div>
                                </td>
                            <td><b class="tablesaw-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span> </b> 
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                </td>
                        </tr>
                        <tr>
                            <td> Error Message
                                <div class="small helper-text">Enter the message you want users to see when an access denied error happens.</div>
                                </td>
                            <td> <span> Access is currently denied, please contact support. </span> </td>
                            <td><b class="tablesaw-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span> </b> 
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                </td>
                        </tr>
                        <tr>
                            <td> Market Label
                                <div class="small helper-text">Change the "Market" label.</div>
                                </td>
                            <td> 
                                <div> Campus </div>
                                </td>
                            <td><b class="tablesaw-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span> </b> 
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                </td>
                        </tr>
                        <tr>
                            <td> Markets Label
                                <div class="small helper-text">Change the "Markets" label.</div>
                                </td>
                            <td> 
                                <div> Campuses </div>
                                </td>
                            <td><b class="tablesaw-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span> </b> 
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                </td>
                        </tr>
                        <tr>
                            <td> Policy Statement
                                <div class="small helper-text">Enter the policy users must agree to in order to post ads.</div>
                                </td>
                            <td> 
                                <div> test </div>
                                </td>
                            <td><b class="tablesaw-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span> </b> 
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                </td>
                        </tr>
                        <tr>
                            <td> Resource Page Count
                                <div class="small helper-text">The number of items displayed on a page at one time.</div>
                                </td>
                            <td> 
                                <div> 15 </div>
                                </td>
                            <td><b class="tablesaw-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span> </b> 
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                </td>
                        </tr>
                        <tr>
                            <td> Restrict User Error Message
                                <div class="small helper-text">Enter the message you want users to see when a restrict user error happens.</div>
                                </td>
                            <td> <span> You currently do not have access, please contact support. </span> </td>
                            <td><b class="tablesaw-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span> </b> 
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                </td>
                        </tr>
                        <tr>
                            <td> System Email
                                <div class="small helper-text">Email address from which email is sent.</div>
                                </td>
                            <td> <span>
                                <message key="admin.value.empty" ng-reflect-key="admin.value.empty">-</message>
                                </span> </td>
                            <td><b class="tablesaw-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span> </b> 
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                </td>
                        </tr>
                        <tr>
                            <td> Time Zone
                                <div class="small helper-text">Select the your time zone.</div>
                                </td>
                            <td> 
                                <div> US/Eastern </div>
                                </td>
                            <td><b class="tablesaw-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span> </b> 
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                </td>
                        </tr>
                        <tr>
                            <td> User Permission
                                <div class="small helper-text">Permission for users who can access Classifieds.  Leave empty to allow all authenticated users.</div>
                                </td>
                            <td> <span>
                                <message key="admin.value.empty" ng-reflect-key="admin.value.empty">-</message>
                                </span> </td>
                            <td><b class="tablesaw-cell-label"> <span class="d-md-none">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span> </b> 
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                </td>
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
