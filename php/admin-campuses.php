<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Campuses';
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
        <div class="col-auto"> <a class="btn btn-sm btn-outline-primary" routerlink="/market" href="admin-campuses-edit.php"> <i aria-hidden="true" class="fa fa-plus"></i> <span class="sr-only">
                <message key="admin.market.action.new">Create a new campus</message>
                </span> <span aria-hidden="true">
                <message key="admin.market.header">Campus</message>
                </span> </a> </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="main-content" id="main-content"> </div>
        </div>
    </div>
    <table class="table rbt-table-responsive rbt-table-actions">
        <thead>
            <tr>
                <th><message key="admin.field.name">Name</message></th>
                <th><message key="admin.market.field.shortName">Short Name</message></th>
                <th><message key="admin.field.uniqueKey">Unique Key</message></th>
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
                    </b> <span class="rbt-table-responsive-cell-content"> IU Bloomington </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.market.field.shortName">Short Name</message>
                    </b> <span class="rbt-table-responsive-cell-content "> iub </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.field.uniqueKey">Unique Key</message>
                    </b> <span class="rbt-table-responsive-cell-content "> BL </span></td>
                <td><div class="dropdown">
                    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
            </tr>
            <tr>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.field.name">Name</message>
                    </b> <span class="rbt-table-responsive-cell-content"> IU East </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.market.field.shortName">Short Name</message>
                    </b> <span class="rbt-table-responsive-cell-content "> iue </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.field.uniqueKey">Unique Key</message>
                    </b> <span class="rbt-table-responsive-cell-content "> EA </span></td>
                <td><div class="dropdown">
                    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div></td>
            </tr>
            <tr>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.field.name">Name</message>
                    </b> <span class="rbt-table-responsive-cell-content"> IU Kokomo </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.market.field.shortName">Short Name</message>
                    </b> <span class="rbt-table-responsive-cell-content "> iuk </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.field.uniqueKey">Unique Key</message>
                    </b> <span class="rbt-table-responsive-cell-content "> KO </span></td>
                <td><div class="dropdown">
                    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div></td>
            </tr>
            <tr>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.field.name">Name</message>
                    </b> <span class="rbt-table-responsive-cell-content"> IU Northwest </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.market.field.shortName">Short Name</message>
                    </b> <span class="rbt-table-responsive-cell-content "> iun </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.field.uniqueKey">Unique Key</message>
                    </b> <span class="rbt-table-responsive-cell-content "> NW </span></td>
                <td><div class="dropdown">
                    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div></td>
            </tr>
            <tr>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.field.name">Name</message>
                    </b> <span class="rbt-table-responsive-cell-content"> IU South Bend </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.market.field.shortName">Short Name</message>
                    </b> <span class="rbt-table-responsive-cell-content "> iusb </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.field.uniqueKey">Unique Key</message>
                    </b> <span class="rbt-table-responsive-cell-content "> SB </span></td>
                <td><div class="dropdown">
                    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div></td>
            </tr>
            <tr>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.field.name">Name</message>
                    </b> <span class="rbt-table-responsive-cell-content"> IU Southeast </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.market.field.shortName">Short Name</message>
                    </b> <span class="rbt-table-responsive-cell-content "> ius </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.field.uniqueKey">Unique Key</message>
                    </b> <span class="rbt-table-responsive-cell-content "> SE </span></td>
                <td><div class="dropdown">
                    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div></td>
            </tr>
            <tr>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.field.name">Name</message>
                    </b> <span class="rbt-table-responsive-cell-content"> IUPUI </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.market.field.shortName">Short Name</message>
                    </b> <span class="rbt-table-responsive-cell-content "> </span></td>
                <td><b class="rbt-table-responsive-cell-label">
                    <message key="admin.field.uniqueKey">Unique Key</message>
                    </b> <span class="rbt-table-responsive-cell-content "> IN </span></td>
                <td><div class="dropdown">
                    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-campuses-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div></td>
            </tr>
        </tbody>
    </table>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
