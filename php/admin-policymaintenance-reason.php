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
                            <form novalidate class="ng-untouched ng-pristine ng-valid">
                                <div class="form-group">
                                    <label class="control-label" id="nameLabel">
                                        <message key="admin.field.name">Policy violation type</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="nameDirections">
                                        <message key="admin.category.field.name.directions">Specify a label for this policy violation type.</message>
                                    </div>
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <input aria-labelledby="nameLabel nameDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="name">
                                            <span class="badge badge-success"> 85 </span> </div>
                                    </countdown>
                                    <errors controlname="name"> 
                                        <!----> 
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
                                    <errors controlname="name"> 
                                        <!----> 
                                    </errors>
                                </div>
                            
                                <div class="rbt-button-group">
                                    <a class="btn btn-primary" routerlink="" href="admin-policymaintenance.php">
                                    <message key="global.buttons.save">Save</message>
                                    </a>
                                    <a class="btn btn-outline-primary" routerlink="" href="admin-policymaintenance.php">
                                        <message key="global.buttons.cancel">Cancel</message>
                                    </a> </div>
                            </form>
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


</body>
</html>
