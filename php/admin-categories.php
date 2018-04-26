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
                        <h1>
                            <?php echo $page_title; ?></h1>
                    </div>
                </div>
                <table class="table table-sm rbt-table-actions ccf-table-categories">
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
                            <td>Activity Partners</td>
                            <td><i class="fa fa-user"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
                        </tr>
                        <tr>
                            <td>Announcements </td>
                            <td><i class="fa fa-bullhorn"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
                        </tr>
                        <tr>
                            <td>Antiques &amp; collectibles </td>
                            <td><i class="fa fa-shopping-cart"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
                        </tr>
                        <tr>
                            <td>Books </td>
                            <td><i class="fa fa-book"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
                        </tr>
                        <tr>
                            <td>Electronics </td>
                            <td><i class="fa fa-mobile"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
                        </tr>
                        <tr>
                            <td>Furniture </td>
                            <td><i class="fa fa-home"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
                        </tr>
                        <tr>
                            <td>Jobs</td>
                            <td><i class="fa fa-briefcase"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
                        </tr>
                        <tr>
                            <td>Lost &amp; found</td>
                            <td><i class="fa fa-question-circle"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
                        </tr>
                        <tr>
                            <td>Miscellaneous</td>
                            <td><i class="fa fa-th"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
                        </tr>
                        <tr>
                            <td>Musicians &amp; artists</td>
                            <td><i class="fa fa-music"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
                        </tr>
                        <tr>
                            <td>Rideboard &amp; carpools</td>
                            <td><i class="fa fa-road"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
                        </tr>
                        <tr>
                            <td>Roommates &amp; sublets</td>
                            <td><i class="fa fa-home"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
                        </tr>
                        <tr>
                            <td>Tickets &amp; events</td>
                            <td><i class="fa fa-ticket"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
                        </tr>
                        <tr>
                            <td>Vehicles</td>
                            <td><i class="fa fa-bicycle"></i></td>
                            <td><button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.edit" ng-reflect-key="global.buttons.edit">Edit</message>
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button">
                                <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                </button></td>
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
