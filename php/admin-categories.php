<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Categories';
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
                <div class="row mb-3 justify-content-between align-items-center">
                    <div class="col">
                        <h1> <?php echo $page_title; ?></h1>
                    </div>
                    <div class="col-auto"> <a class="btn btn-sm btn-outline-primary" routerlink="/category" href="admin-categories-edit.php"> <i aria-hidden="true" class="fa fa-plus"></i> <span class="sr-only">
                            <message key="admin.category.action.new">Create a new category</message>
                            </span> <span aria-hidden="true">
                            <message key="admin.category.header">Category</message>
                            </span> </a> </div>
                </div>
                <table class="table rbt-table-responsive rbt-table-actions ccf-table-categories">
                    <thead>
                        <tr>
                            <th><message key="admin.field.name" ng-reflect-key="admin.field.name">Name</message></th>
                            <th><message key="admin.field.value" ng-reflect-key="admin.field.value">Icon</message></th>
                            <th><span class="sr-only">
                                <message key="admin.header.actions" ng-reflect-key="admin.header.actions">Actions</message>
                                </span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Activity Partners</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-user"></i></span></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Announcements </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-bullhorn"></i></span></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Antiques &amp; collectibles </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-shopping-cart"></i></span></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Books </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-book"></i></span></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Electronics </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-mobile"></i></span></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Furniture </span></td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-home"></i></span></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Jobs</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-briefcase"></i></span></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Lost &amp; found</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-question-circle"></i></span></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Miscellaneous</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-th"></i></span></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Musicians &amp; artists</td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-music"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Rideboard &amp; carpools</td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-road"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Roommates &amp; sublets</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-home"></i></span></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Tickets &amp; events</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-ticket"></i></span></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td><b class="rbt-table-responsive-cell-label">Name</b><span class="rbt-table-responsive-cell-content">Vehicles</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Icon</b><span class="rbt-table-responsive-cell-content"><i class="fa fa-bicycle"></i></span></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
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
