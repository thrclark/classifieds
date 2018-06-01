<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Edit API account ';
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
				<router-outlet></router-outlet><ng-component><div class="row mb-3 no-gutters align-items-center">
	<div class="col-12 col-sm">
		<h1> <?php echo $page_title; ?></h1>
	</div>
</div>

<form novalidate class="ng-pristine ng-invalid ng-touched">
	<div class="form-group">
		<label id="titleLabel"><message key="admin.field.name">Name</message></label>
		<div class="ccf-instructional-text" id="titleDirections"><message key="admin.apiAccount.field.name.directions">A unique name to identify this API Account.</message></div>
		<div class="row">
			<div class="col-sm-6">
				<countdown>
		<div class="rbt-charcount">
			
				<input aria-labelledby="titleLabel titleDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="title" id="title" type="text">
				
			<span class="badge badge-success">
				100
			</span>
		</div>
		
	</countdown>
				<errors controlname="title">
		<!---->
	</errors>
			</div>
		</div>
	</div>
	
	<div class="form-group">
		<label class="control-label" id="statusLabel"><message key="admin.field.status">Status</message></label>
		<div class="ccf-instructional-text" id="statusDirections"><message key="admin.apiAccount.field.status.directions">The availability of this API Account.</message></div>
		<div class="row">
			<div class="col-sm-6">
				<select aria-labelledby="statusLabel statusDirections" ccfvalidated="" class="form-control ng-pristine ng-valid ng-touched" formcontrolname="status">
					<!----><option value="ACTIVE">Active</option><option value="INACTIVE">Inactive</option>
				</select>
				<errors controlname="status">
		<!---->
	</errors>
			</div>
		</div>
	</div>
	
	<div class="form-group">
		<div class="form-check mb-3">
			<input class="form-check-input ng-untouched ng-pristine" formcontrolname="expirationDateCheck" id="expirationDateCheck" name="expirationDateCheck" type="checkbox" disabled="">
			<label class="form-check-label enabled-text-color" for="expirationDateCheck">
				<message key="admin.apiAccount.action.renew">Renew Account</message>
				<message key="admin.apiAccount.field.expireDate">Expire Date</message>
				<div class="ccf-instructional-text"><message key="admin.apiAccount.field.expireDate.directions">This account may be renewed within 30 days of expiration (Wed May 30 2018).</message></div>
			</label>
			<errors controlname="expirationDateCheck">
		<!---->
	</errors>
		</div>
		<div class="form-check">
			<input class="form-check-input ng-untouched ng-pristine" formcontrolname="locked" id="locked" name="locked" type="checkbox" disabled="">
			<label class="form-check-label enabled-text-color" for="locked">
				<message key="admin.apiAccount.field.locked">Locked Account</message>
				<div class="ccf-instructional-text"><message key="admin.apiAccount.field.locked.directions">Unlock this API Account so it may be used again.</message></div>
			</label>
			<errors controlname="locked">
		<!---->
	</errors>
		</div>
	</div>
	
	<div class="form-group">
		<label class="control-label" id="resourceQuotaLabel"><message key="admin.apiAccount.field.resourceQuota">Maximum Number of New Resources</message></label>
		<div class="ccf-instructional-text" id="resourceQuotaDirections"><message key="admin.apiAccount.field.resourceQuota.directions">Number of resources that are allowed to be created by this API Account.  This prevents outside systems from accidentally over populating the system.</message></div>
		<div class="row">
			<div class="col-md-6">
				<input aria-labelledby="resourceQuotaLabel resourceQuotaDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="resourceQuota" id="resourceQuota" type="number">
				<errors controlname="resourceQuota">
		<!---->
	</errors>
			</div>
		</div>
	</div>
	
	<div class="form-group">
		<label class="control-label" id="emailLabel"><message key="admin.apiAccount.field.email">Email</message></label>
		<div class="ccf-instructional-text" id="emailDirections"><message key="admin.apiAccount.field.email.directions">The email is used to send a daily reminder starting 30 days from the API Account expiring.</message></div>
		<div class="row">
			<div class="col-md-6">
				<countdown>
		<div class="rbt-charcount">
			
				<input aria-labelledby="emailLabel emailDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="email" id="email" type="text">
				
			<span class="badge badge-success">
				100
			</span>
		</div>
		
	</countdown>
				<errors controlname="email">
		<!---->
	</errors>
			</div>
		</div>
	</div>

	
	<div class="form-group">
		<label class="control-label" id="authenticationTypeLabel"><message key="admin.apiAccount.field.authType">Authentication Type</message></label>
		<div class="ccf-instructional-text" id="authenticationTypeDirections"><message key="admin.apiAccount.field.authType.directions">Select the type of authentication to use for this client application.</message></div>
		<div class="row">
			<div class="col-sm-6">
				<select aria-labelledby="authenticationTypeLabel authenticationTypeDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="authenticationType">
					<option value="0: null"><message key="admin.select.blank">------</message></option>
					<!----><option value="BASIC_AUTH">Basic Authentication</option>
				</select>
				<errors controlname="authenticationType">
		<!---->
	</errors>
			</div>
		</div>
	</div>
	
	<!---->
	
	<form-invalid-alert>
		<!---->
	</form-invalid-alert>
	
	<p class="text-right">
		<button class="btn btn-primary" type="submit"><message key="global.buttons.save">Save</message></button>
		<a class="btn btn-outline-primary" routerlink="/apiAccounts" href="admin-apiaccounts.php"><message key="global.buttons.cancel">Cancel</message></a>
	</p>
</form>
</ng-component>
			</div>
		</div>
	</div>
</div>



<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
