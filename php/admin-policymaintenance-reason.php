<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Policy';
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
    <main class="main-content">
        <router-outlet></router-outlet>
        <ng-component>
            <div class="row mb-3 no-gutters align-items-center">
                <div class="col-12 col-sm">
                    <h1> <?php echo $page_title; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-8">
                                <div class="form-group">
                                    <label class="control-label" id="nameLabel">
                                        <message key="admin.field.name">Policy violation type</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="nameDirections">
                                        <message key="admin.category.field.name.directions">Specify a label for this policy violation type.</message>
                                    </div>
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <input aria-labelledby="nameLabel nameDirections" ccfvalidated="" class="form-control" id="isinvalid" formcontrolname="name">
                                            <span class="badge badge-success"> 85 </span> </div>
                                    </countdown>
                                    <errors controlname="violationType">
            							<div class="invalid-feedback" style="display: none;"><span class="rbt-icon-circle-close" aria-hidden="true"></span> Required </div>
        							</errors>
                                </div>
                                  <div class="form-group">
                                    <label class="control-label" for="richText1">
                                        <message key="admin.field.name">Policy violation message</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="nameDirections">
                                        <message key="admin.category.field.name.directions">Specify a message to be sent to the user for this policy violation type.</message>
                                    </div>
                                  <textarea id="richText1"></textarea>
                                    <errors controlname="policyMsg"> 
                                        <!----> 
                                    </errors>
                                </div>
                            
                                <div class="rbt-button-group">
                                    <button class="btn btn-primary">
                                    <message key="global.buttons.save">Save</message>
                                    </button>
                                    <a class="btn btn-outline-primary" routerlink="" href="admin-policymaintenance.php">
                                        <message key="global.buttons.cancel">Cancel</message>
                                    </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </ng-component>
    </main>
</div>
<?php include('includes/admin-footerscripts.php') ?>



<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script> 
<script>
var simplemde = new SimpleMDE({ status: false, element: $("#richText1")[0] });
</script>

<script>
$(document).ready(function() {
	$('button').on('click',function(){
		$(".invalid-feedback").css("display","block");
		$("#isinvalid").addClass("is-invalid");
	});
});

</script>

</body>
</html>
