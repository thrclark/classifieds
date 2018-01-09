<?php 
$section = 'moderator';
$page_title = 'restrictedusers';
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
                <div class="doc-header mb-3">
                    <div class="row">
                        <div class="col doc-title">
                            <h2>Restricted Users</h2>
                        </div>
                        <div class="col doc-controls"> 
                            <!-- <button type="button" class="btn btn-outline-secondary btn-sm float-md-right">Restrict User</button>--> 
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Flagged Ads</a> </li>
                    <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Warned & Restricted Users</a> </li>
                 
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">                <table class="table table-sm table-actions">
                    <thead>
                        <tr>
                            <th> Username</th>
                            <th><strong>University Id</strong></th>
                            <th>Status</th>
                            <th><span class="sr-only">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>thrclark</td>
                            <td>0001328543</td>
                            <td>Flagged</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>tewtband</td>
                            <td>0003023985</td>
                            <td>Flagged</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>zealfleo</td>
                            <td>0003956434</td>
                            <td>Flagged</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>languid</td>
                            <td>0002534347</td>
                            <td>Warned</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>accljones</td>
                            <td>0004436419</td>
                            <td>Flagged</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>sgdsteven</td>
                            <td>0002635478</td>
                            <td>Restricted</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>lerrome</td>
                            <td>0002888753</td>
                            <td>Warned</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
</div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">                <table class="table table-sm table-actions">
                    <thead>
                        <tr>
                            <th> Username</th>
                            <th><strong>University Id</strong></th>
                            <th>Status</th>
                            <th><span class="sr-only">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>thrclark</td>
                            <td>0001328543</td>
                            <td>Flagged</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>tewtband</td>
                            <td>0003023985</td>
                            <td>Flagged</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>zealfleo</td>
                            <td>0003956434</td>
                            <td>Flagged</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>languid</td>
                            <td>0002534347</td>
                            <td>Warned</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>accljones</td>
                            <td>0004436419</td>
                            <td>Flagged</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>sgdsteven</td>
                            <td>0002635478</td>
                            <td>Restricted</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>lerrome</td>
                            <td>0002888753</td>
                            <td>Warned</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
</div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
