<?php 
$audience = 'admin';
$section = 'appconfig';
$page_title = 'System parameters';
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
        
        <div class="col-12">
            <div class="main-content" id="main-content">
                <div class="doc-header mb-3">
                    <div class="row">
                        <div class="col-8 col-6-sm doc-title">
                            <h1> <?php echo $page_title; ?></h1>
                        </div>
                        <div class="col doc-controls text-right">
                            <div class="switch">
                                <label> Help
                                    <input id="togle_help" type="checkbox" checked>
                                    <span class="slider"></span> </label>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-sm table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                    <thead>
                        <tr>
                            <th> Name</th>
                            <th>Current Value</th>
                            <th><span class="d-md-none">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Application Email
                                <div class="small helper-text"> The address from which global emails are sent.</div></td>
                            <td>classifieds@yourschool.edu</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#exampleModal">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Google Analytics Rollup ID
                                <div class="small helper-text">Data for selected tenants will be sent to this Google Analytics ID..</div></td>
                            <td>--</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Send Exception Email
                                <div class="small helper-text">Space delimited list of email addresses to which exception reports are sent.</div></td>
                            <td>thrclark@iu.edu <br>
                                itadmin@school.edu<br>
                                itmanagement@school.edu<br>
                                sysadmin@school.edu </td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Send Exception Email Toggle
                                <div class="small helper-text">Turn on sending of email for exceptions. Valid values are 'on' and 'off'. Default is off.</div></td>
                            <td>Off</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Update Server
                                <div class="small helper-text">Enter the name of one of the servers that will be used for updating new data on releases.</div></td>
                            <td>--</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Edit</button></td>
                        </tr>
                    </tbody>
                </table>
                
                <!-- <div class="testbox">asdf</div>--> 
            </div>
        </div>
    </div>
</div>
<?php include('modals/modal-admin-sysparam-appemail.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
