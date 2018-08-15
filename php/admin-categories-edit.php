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
                            <form novalidate class="  ng-valid">
                                <div class="form-group">
                                    <label class="control-label" id="nameLabel">
                                        <message key="admin.field.name">Name</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="nameDirections">
                                        <message key="admin.category.field.name.directions">Provide a name for this category.</message>
                                    </div>
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <input aria-labelledby="nameLabel nameDirections" ccfvalidated="" class="form-control   ng-valid" formcontrolname="name">
                                            <span class="badge badge-success"> 85 </span> </div>
                                    </countdown>
                                    <errors controlname="name"> 
                                        <!----> 
                                    </errors>
                                </div>
                                <div class="form-group mb-5">
                                    <label class="control-label" id="iconLabel">
                                        <message key="admin.category.field.icon">Icon</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="iconDirections">
                                        <message key="admin.category.field.icon.directions">Select an icon to represent this category.</message>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend icon-display"> <span class="input-group-text"><i class="fa fa-bus"></i></span> </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="Bus" id="iconName">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#selectIcon">Choose</button>
                                        </div>
                                    </div>
                                    <errors controlname="icon"> 
                                        <!----> 
                                    </errors>
                                </div>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="selectIcon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Select an icon</h5>
                                                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
                                            </div>
                                            <div class="modal-body">
                                                <?php include('includes/icon-selection.php') ?>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="rbt-button-group">
                                                    <button type="button" class="btn btn-primary">OK</button>
                                                    <button class="btn btn-outline-primary">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
            </div>
        </ng-component>
    </main>
</div>
<?php include('includes/admin-footerscripts.php') ?>
<script>
    
    
    // Set icon name
    $("#iconSelection button").click(function() {
        $("#iconName").val($(this).text());
		
		
		
    });
    // Set icon class
    $("#iconSelection button i").click(function() {
        var iconClass = $(this).attr("class");
        $(".icon-display i").removeClass();
        $(".icon-display i").addClass(iconClass);
    });
    // Filtering function
    function selectIcon() {
        var input, filter, iconSelection, button, span, i;
        input = document.getElementById("selectIcon");
        filter = input.value.toUpperCase();
        iconSelection = document.getElementById("iconSelection");
        button = iconSelection.getElementsByTagName("button");
        for (i = 0; i < button.length; i++) {
            span = button[i].getElementsByTagName("span")[0];
            if (span.innerHTML.toUpperCase().indexOf(filter) > -1) {
                button[i].style.display = "";
            } else {
                button[i].style.display = "none";
            }
        }
    }
</script>
</body>
</html>
