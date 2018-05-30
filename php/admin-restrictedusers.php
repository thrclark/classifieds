<?php 
$audience = 'admin';
$section = 'moderator';
$page_title = 'Restricted users';
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
                        <div class="col doc-title">
                            <h1> <?php echo $page_title; ?></h1>
                        </div>
                        <div class="col doc-controls"> 
                            <!-- <button type="button" class="btn btn-outline-secondary btn-sm float-md-right">Restrict User</button>--> 
                        </div>
                    </div>
                </div>
                <table class="table table-actions">
                    <thead>
                        <tr>
                            <th> Username</th>
                            <th><strong>Person Id</strong></th>
                            <th><span class="sr-only">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>thrclark</td>
                            <td>0001328543</td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
                        </tr>
                        <tr>
                            <td>tewtband</td>
                            <td>0003023985</td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
                        </tr>
                        <tr>
                            <td>zealfleo</td>
                            <td>0003956434</td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
                        </tr>
                        <tr>
                            <td>languid</td>
                            <td>0002534347</td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
                        </tr>
                        <tr>
                            <td>accljones</td>
                            <td>0004436419</td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
                        </tr>
                        <tr>
                            <td>sgdsteven</td>
                            <td>0002635478</td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
                        </tr>
                        <tr>
                            <td>lerrome</td>
                            <td>0002888753</td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
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
