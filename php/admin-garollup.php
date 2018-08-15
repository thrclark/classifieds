<?php 
$audience = 'admin';
$section = 'appconfig';
$page_title = 'Google Analytics Rollup';
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
                <router-outlet></router-outlet>
                <ng-component>
                    <section>
                        <div class="row mb-3 no-gutters align-items-center">
                            <div class="col-12 col-sm">
                                <h1> <?php echo $page_title; ?></h1>
                            </div>
                        </div>
                        <form novalidate class=" ng-valid ng-dirty">
                            <div class="form-group">
                                <label class="control-label" id="rollupIdLabel">
                                    <message key="admin.systemParameter.enum.GOOGLE-ANALYTICS-ROLLUP-ID.name">Google Analytics Rollup ID</message>
                                </label>
                                <div class="ccf-instructional-text" id="rollupIdDirections">
                                    <message key="admin.systemParameter.enum.GOOGLE-ANALYTICS-ROLLUP-ID.directions"> Specify a Google Analytics ID to which tenant data will be submitted. </message>
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <input aria-labelledby="rollupIdLabel rollupIdDirections" value="UA-39645822-17" ccfvalidated="" class="form-control   ng-valid" formcontrolname="rollupId">
                                    </div>
                                </div>
                                <errors controlname="rollupId"> 
                                    <!----> 
                                </errors>
                            </div>
                            <div class="font-weight-bold"> Included Tenants</div>
                            <div class="ccf-instructional-text mb-2">Select the tenants that will submit data to the specified Google Analytics ID.</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">Classifieds.IU STG </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">Classifieds.IU STG</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                <label class="form-check-label" for="defaultCheck3">Classifieds.IU PRD</label>
                            </div>
                            
                            <!---->
                            <errors controlname="rollupTenants"> 
                                <!----> 
                            </errors>
                            <form-invalid-alert> 
                                <!----> 
                            </form-invalid-alert>
                            <div class="rbt-button-group mt-5">
                                <button class="btn btn-primary">Save</button>
                                <button class="btn btn-outline-primary">Revert</button>
                            </div>
                        </form>
                    </section>
                </ng-component>
            </main>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
