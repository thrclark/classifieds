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
                    
                    
                    
                    <div class="col-auto">
			<a class="btn btn-sm btn-outline-primary" routerlink="/category" href="admin-categories-edit.php">
				<i aria-hidden="true" class="fa fa-plus"></i>
				<span class="sr-only"><message key="admin.category.action.new">Create a new category</message></span>
				<span aria-hidden="true"><message key="admin.category.header">Category</message></span>
			</a>
		</div>
                    
                    
                </div>
                <table class="table rbt-table-actions ccf-table-categories">
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
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td>Announcements </td>
                            <td><i class="fa fa-bullhorn"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td>Antiques &amp; collectibles </td>
                            <td><i class="fa fa-shopping-cart"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td>Books </td>
                            <td><i class="fa fa-book"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td>Electronics </td>
                            <td><i class="fa fa-mobile"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td>Furniture </td>
                            <td><i class="fa fa-home"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td>Jobs</td>
                            <td><i class="fa fa-briefcase"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td>Lost &amp; found</td>
                            <td><i class="fa fa-question-circle"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td>Miscellaneous</td>
                            <td><i class="fa fa-th"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td>Musicians &amp; artists</td>
                            <td><i class="fa fa-music"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td>Rideboard &amp; carpools</td>
                            <td><i class="fa fa-road"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td>Roommates &amp; sublets</td>
                            <td><i class="fa fa-home"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td>Tickets &amp; events</td>
                            <td><i class="fa fa-ticket"></i></td>
                            <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-categories-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
                        </tr>
                        <tr>
                            <td>Vehicles</td>
                            <td><i class="fa fa-bicycle"></i></td>
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
