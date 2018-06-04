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
    <div class="main-content">
        <router-outlet></router-outlet>
        <ng-component>
            <div class="row mb-3 no-gutters align-items-center">
                <div class="col-12 col-sm">
                    <h1> <?php echo $page_title; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-9 col-xl-10 ">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <form novalidate class="ng-untouched ng-pristine ng-valid">
                                <div class="form-group">
                                    <label class="control-label" id="nameLabel">
                                        <message key="admin.field.name">Name</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="nameDirections">
                                        <message key="admin.category.field.name.directions">Provide a name for this category.</message>
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
                                    <label class="control-label" id="iconLabel">
                                        <message key="admin.category.field.icon">Icon</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="iconDirections">
                                        <message key="admin.category.field.icon.directions">Select an icon to represent this category.</message>
                                    </div>
                                    <icon-picker label-ids="iconLabel iconDirections"><!---->
                                        
                                        <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="fa fa-battery-1"></i></span> </span>
                                            <input ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" typeaheadminlength="0" typeaheadoptionfield="className" typeaheadoptionslimit="7" aria-labelledby="iconLabel iconDirections">
                                        </div>
                                        <p class="text-right">
                                            <button class="btn btn-sm btn-link" type="button">
                                            <message key="admin.icon.action.viewIconList">Choose from list</message>
                                            </button>
                                        </p>
                                    </icon-picker>
                                    <errors controlname="icon"> 
                                        <!----> 
                                    </errors>
                                </div>
                                <form-invalid-alert> 
                                    <!----> 
                                </form-invalid-alert>
                                <div class="rbt-button-group">
                                    <button class="btn btn-primary" type="submit">
                                    <message key="global.buttons.save">Save</message>
                                    </button>
                                    <a class="btn btn-outline-primary" routerlink="/categories" href="admin-categories.php">
                                        <message key="global.buttons.cancel">Cancel</message>
                                    </a> </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-xl-2 d-none d-lg-block border-left"><a href="admin-categories.php" class="btn btn-link btn-sm font-weight-normal"><span class="rbt-icon-chevron-left"></span> All categories </a></div>
            </div>
        </ng-component>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
