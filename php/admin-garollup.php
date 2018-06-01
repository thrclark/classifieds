<?php 
$audience = 'admin';
$section = 'appconfig';
$page_title = 'Google Analytics rollup';
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
				<router-outlet></router-outlet><ng-component><section>
	<div class="row mb-3 no-gutters align-items-center">
		<div class="col-12 col-sm">
			 <h1> <?php echo $page_title; ?></h1>
		</div>
	</div>
	<form novalidate="" class="ng-untouched ng-valid ng-dirty">
		<div class="card bg-white mb-5">
			<div class="card-body">
				<div class="form-group">
					<label class="control-label" id="rollupIdLabel"><message key="admin.systemParameter.enum.GOOGLE-ANALYTICS-ROLLUP-ID.name">Google Analytics Rollup ID</message></label>
					<div class="ccf-instructional-text" id="rollupIdDirections"><message key="admin.systemParameter.enum.GOOGLE-ANALYTICS-ROLLUP-ID.directions">Data for selected tenants will be sent to this Google Analytics ID.</message></div>
					<div class="form-row">
						<div class="col-6">
							<input aria-labelledby="rollupIdLabel rollupIdDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="rollupId">
						</div>
					</div>
					<errors controlname="rollupId">
		<!---->
	</errors>
				</div>
			</div>
		</div>
		<div class="form-group float-right">
			<button class="btn btn-primary btn-sm" type="button">
				<message key="admin.analytics.action.selectNone">Select None</message>
			</button>
			<button class="btn btn-primary btn-sm" type="button">
				<message key="admin.analytics.action.selectAll">Select All</message>
			</button>
		</div>
		<table class="table" style="table-layout: fixed;">
			<thead>
				<tr>
					<th scope="col"><message key="admin.analytics.header.include">Include In Rollup</message></th>
				</tr>
			</thead>
			<tbody formarrayname="rollupTenants" class="ng-untouched ng-pristine ng-valid">
				<!----><tr class="ng-untouched ng-pristine ng-valid">
					<td>
						<div class="form-check">
							<input class="form-check-input ng-untouched ng-pristine ng-valid" formcontrolname="include" type="checkbox" id="analytics0">
							<label class="form-check-label enabled-text-color" for="analytics0">Classifieds.IU STG</label>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		
		<!---->
		<errors controlname="rollupTenants">
		<!---->
	</errors>
		
		<form-invalid-alert>
		<!---->
	</form-invalid-alert>

		<p class="text-right">
			<button class="btn btn-primary" type="submit"><message key="global.buttons.save">Save</message></button>
			<button class="btn btn-outline-primary" type="button"><message key="admin.buttons.revert">Revert</message></button>
		</p>
	</form>
</section></ng-component>
			</div>
		</div>
	</div>
</div>




<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
