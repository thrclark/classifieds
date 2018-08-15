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
			<main class="main-content">
				<router-outlet></router-outlet><ng-component>
<div class="row mb-3 no-gutters align-items-center">
	<div class="col-12 col-sm">
		  <h1> <?php echo $page_title; ?></h1>
	</div>
</div>
<table class="table rbt-table-responsive rbt-table-actions">
	<thead>
		<tr>
			<th><message key="admin.field.name">Name</message></th>
			<th><message key="admin.header.value">Value</message></th>
			<th><span class="sr-only"><message key="admin.header.actions">Actions</message></span></th>
		</tr>
	</thead>
	<tbody>
		<!----><tr>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.field.name">Name</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>Application Email</span>
					<div class="ccf-instructional-text">The address from which global emails are sent.</div>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.value">Value</message></b>
				<!---->
				<!----><span class="rbt-table-responsive-cell-content"><message key="admin.value.empty">-</message></span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.actions">Actions</message></b>
				<button class="btn btn-outline-primary btn-sm" type="button"><message key="global.buttons.edit">Edit</message></button>
			</td>
		</tr><tr>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.field.name">Name</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>Retire and delete Ads interval.</span>
					<div class="ccf-instructional-text">Enter how often to expire or delete Ads.  This is in minutes.  Default is 1440 minutes (run once per day).</div>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.value">Value</message></b>
				<!----><span class="rbt-table-responsive-cell-content">720</span>
				<!---->
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.actions">Actions</message></b>
				<button class="btn btn-outline-primary btn-sm" type="button"><message key="global.buttons.edit">Edit</message></button>
			</td>
		</tr><tr>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.field.name">Name</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>Retire and delete Ads on/off</span>
					<div class="ccf-instructional-text">This expires and/or deletes ads.</div>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.value">Value</message></b>
				<!----><span class="rbt-table-responsive-cell-content">No</span>
				<!---->
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.actions">Actions</message></b>
				<button class="btn btn-outline-primary btn-sm" type="button"><message key="global.buttons.edit">Edit</message></button>
			</td>
		</tr><tr>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.field.name">Name</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>Google Analytics Rollup ID</span>
					<div class="ccf-instructional-text">Data for selected tenants will be sent to this Google Analytics ID.</div>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.value">Value</message></b>
				<!----><span class="rbt-table-responsive-cell-content">UA-39645822-17</span>
				<!---->
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.actions">Actions</message></b>
				<button class="btn btn-outline-primary btn-sm" type="button"><message key="global.buttons.edit">Edit</message></button>
			</td>
		</tr><tr>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.field.name">Name</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>MIGRATION-COMPLETE</span>
					<div class="ccf-instructional-text"></div>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.value">Value</message></b>
				<!----><span class="rbt-table-responsive-cell-content">Yes</span>
				<!---->
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.actions">Actions</message></b>
				<button class="btn btn-outline-primary btn-sm" type="button"><message key="global.buttons.edit">Edit</message></button>
			</td>
		</tr><tr>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.field.name">Name</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>Send Exception Email</span>
					<div class="ccf-instructional-text">Space delimited list of email addresses to which exception reports are sent.</div>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.value">Value</message></b>
				<!---->
				<!----><span class="rbt-table-responsive-cell-content"><message key="admin.value.empty">-</message></span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.actions">Actions</message></b>
				<button class="btn btn-outline-primary btn-sm" type="button"><message key="global.buttons.edit">Edit</message></button>
			</td>
		</tr><tr>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.field.name">Name</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>Send Exception Email Toggle</span>
					<div class="ccf-instructional-text">Turn on sending of email for exceptions. Default is no.</div>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.value">Value</message></b>
				<!----><span class="rbt-table-responsive-cell-content">No</span>
				<!---->
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.actions">Actions</message></b>
				<button class="btn btn-outline-primary btn-sm" type="button"><message key="global.buttons.edit">Edit</message></button>
			</td>
		</tr><tr>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.field.name">Name</message></b>
				<span class="rbt-table-responsive-cell-content">
					<span>Update Server</span>
					<div class="ccf-instructional-text">Enter the name of one of the servers that will be used for updating new data on releases.</div>
				</span>
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.value">Value</message></b>
				<!----><span class="rbt-table-responsive-cell-content">esappj232.uits.iupui.edu</span>
				<!---->
			</td>
			<td>
				<b class="rbt-table-responsive-cell-label"><message key="admin.header.actions">Actions</message></b>
				<button class="btn btn-outline-primary btn-sm" type="button"><message key="global.buttons.edit">Edit</message></button>
			</td>
		</tr>
	</tbody>
</table>
<div aria-hidden="true" aria-labelledby="systemParameterLabel" bsmodal="" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-default" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title" id="systemParameterLabel"><message key="admin.systemParameter.header">System Parameter</message></h2>
				<button class="close" type="button"> <span aria-hidden="true" class="rbt-icon-close"></span> <span class="sr-only"><message key="global.buttons.close">Close</message></span></button>
			</div>
			<form novalidate="" class="  ng-valid">
				<div class="modal-body">
					<div class="form-group">
						<!----><label class="control-label" id="valueLabel"></label>
						<!---->
						<div class="ccf-instructional-text" id="valueDirections"></div>
						<!----><div>
							<input aria-labelledby="valueLabel valueDirections" class="form-control   ng-valid" formcontrolname="value" type="text">	
						</div>
						<!---->
						<!---->
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" type="submit"><message key="global.buttons.save">Save</message></button>
					<button class="btn btn-outline-primary" type="button"><message key="global.buttons.cancel">Cancel</message></button>
				</div>
			</form>
		</div>
	</div>
</div></ng-component>
			</main>
		</div>
	</div>
</div>




<?php include('modals/modal-admin-sysparam-appemail.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
