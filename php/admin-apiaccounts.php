<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'API accounts';
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
			<div class="main-content">
				<router-outlet></router-outlet><ng-component>
<div class="row mb-3 no-gutters align-items-center">
	<div class="col-12 col-sm">
		   <h1> <?php echo $page_title; ?></h1>
	</div>
	<div class="col-auto">
		<a class="btn btn-sm btn-outline-primary" routerlink="/apiAccount" href="admin-apiaccounts-edit.php">
			<i aria-hidden="true" class="fa fa-plus"></i>
			<span class="sr-only"><message key="admin.apiAccount.action.new">New API Account</message></span>
			<span aria-hidden="true"><message key="admin.apiAccount.header">API Account</message></span>
		</a>
	</div>

</div>

<table class="table rbt-table-responsive rbt-table-actions">
	<thead>
		<tr>
			<th><message key="admin.field.name">Name</message></th>
			<th><message key="admin.apiAccount.field.expireDate">Expire Date</message></th>
			<th><message key="admin.apiAccount.list.locked.header">Locked</message></th>
			<th><message key="admin.field.status">Status</message></th>
			<th><span class="sr-only"><message key="admin.header.actions">Actions</message></span></th>
		</tr>
	</thead>
	<tbody>
		<!----><tr>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.field.name">Name</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>Administrator</span>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.apiAccount.field.expireDate">Expire Date</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>Mar 20, 2019</span>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.apiAccount.list.locked.header">Locked</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>no</span>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.field.status">Status</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>Active</span>
				</span>
			</td>
			 <td><div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span> </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-apiaccounts-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a> </div></td>
		</tr><tr>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.field.name">Name</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>dhdyer account</span>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.apiAccount.field.expireDate">Expire Date</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>Oct 13, 2018</span>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.apiAccount.list.locked.header">Locked</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>no</span>
				</span>
			</td>
			<td>
			    <b class="rbt-table-responsive-cell-label"><message key="admin.field.status">Status</message></b>
			    <span class="rbt-table-responsive-cell-content">
			        <span>Active</span>
			        </span>
			    </td>
			<td><div class="dropdown">
			    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
			    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-apiaccounts-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div></td>
			</tr>
		<tr>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.field.name">Name</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>TAM Notifications</span>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.apiAccount.field.expireDate">Expire Date</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>Oct 23, 2018</span>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.apiAccount.list.locked.header">Locked</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>no</span>
				</span>
			</td>
			<td>
			    <b class="rbt-table-responsive-cell-label"><message key="admin.field.status">Status</message></b>
			    <span class="rbt-table-responsive-cell-content">
			        <span>Active</span>
			        </span>
			    </td>
			<td><div class="dropdown">
			    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Select</span></button>
			    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="admin-apiaccounts-edit.php">Edit</a> <a class="dropdown-item" href="#">Delete</a></div></td>
			</tr>
	</tbody>
</table>

<!---->

<div aria-hidden="true" aria-labelledby="deleteModalLabel" bsmodal="" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title" id="deleteModalLabel"><message key="admin.action.delete.dialog.title">Confirm Deletion</message></h2>
				<button class="close" type="button">
					<span aria-hidden="true" class="rbt-icon-close"></span> <span class="sr-only"><message key="global.buttons.close">Close</message></span>
				</button>
			</div>
			<div class="modal-body">
				<p><message key="admin.action.delete.dialog.message">Are you sure you want to delete?</message></p>
				<p><message key="admin.apiAccount.header">API Account</message>: </p>
			</div>
			<div class="modal-footer">
				
				<button class="btn btn-primary" type="button">
					<message key="admin.buttons.yes">Yes</message>
				</button>
				<button class="btn btn-outline-primary" type="button">
					<span><message key="admin.buttons.no">No</message></span>
				</button>
			</div>
		</div>
	</div>
</div>

<div aria-hidden="true" aria-labelledby="unlockModalLabel" bsmodal="" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title" id="unlockModalLabel"><message key="admin.apiAccount.action.unlock.dialog.title">Confirm API Account Unlocking</message></h2>
				<button class="close" type="button">
					<span aria-hidden="true" class="rbt-icon-close"></span> <span class="sr-only"><message key="global.buttons.close">Close</message></span>
				</button>
			</div>
			<div class="modal-body">
				<p><message key="admin.apiAccount.action.unlock.dialog.message">Are you sure you want to unlock this API Account?</message></p>
				<p><message key="admin.apiAccount.header">API Account</message>: </p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" type="button">
					<message key="admin.buttons.yes">Yes</message>
				</button>
				<button class="btn btn-outline-primary" type="button">
					<span><message key="admin.buttons.no">No</message></span>
				</button>
			</div>
		</div>
	</div>
</div>

<div aria-hidden="true" aria-labelledby="renewModalLabel" bsmodal="" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title" id="renewModalLabel"><message key="admin.apiAccount.action.renew.dialog.title">Confirm API Account renewal</message></h2>
				<button class="close" type="button">
					<span aria-hidden="true" class="rbt-icon-close"></span> <span class="sr-only"><message key="global.buttons.close">Close</message></span>
				</button>
			</div>
			<div class="modal-body">
				<p><message key="admin.apiAccount.action.renew.dialog.message">Are you sure you want to renew the API Account</message></p>
				<p><message key="admin.apiAccount.header">API Account</message>: </p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" type="button">
					<message key="admin.buttons.yes">Yes</message>
				</button>
				<button class="btn btn-outline-primary" type="button">
					<span><message key="admin.buttons.no">No</message></span>
				</button>
			</div>
		</div>
	</div>
</div>
</ng-component>
			</div>
		</div>
	</div>
</div>





<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
