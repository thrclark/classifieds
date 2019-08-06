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
<div class="container pt-3 mb-5">
    <div class="row">
        <div class="col-12">
            <main class="main-content" id="main-content">
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
                <table class="table rbt-table-responsive table-actions">
                    <thead>
                        <tr>
                            <th> Username</th>
                            <th><strong>Person Id</strong></th>
                            <th><span class="sr-only">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">thrclark</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0001328543</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">jhopf</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0003023985</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">jtwalker</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0003956434</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">eecox</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0002534347</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">accljones</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0004436419</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">sgdsteven</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0002635478</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">lerrome</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0002888753</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <button type="button" class="btn btn-outline-primary btn-sm">Reinstate</button></td>
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
