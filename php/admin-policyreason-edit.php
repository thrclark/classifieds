<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Policy violation reason';
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
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <form novalidate class="ng-untouched ng-pristine ng-valid">
                                <div class="form-group">
                                    <label class="control-label" id="nameLabel">
                                        <message key="admin.field.name">Policy violation reason</message>
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
                                    <label class="control-label" id="nameLabel">
                                        <message key="admin.field.name">Policy violation message</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="nameDirections">
                                        <message key="admin.category.field.name.directions">Specify a message to be sent to the user for this policy violation type.</message>
                                    </div>
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <textarea  rows="5"  aria-labelledby="nameLabel nameDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="name"></textarea>
                                            <span class="badge badge-success"> 500 </span> </div>
                                    </countdown>
                                    <errors controlname="name"> 
                                        <!----> 
                                    </errors>
                                </div>
                            
                                <div class="rbt-button-group">
                                    <button class="btn btn-primary" type="submit">
                                    <message key="global.buttons.save">Save</message>
                                    </button>
                                    <a class="btn btn-outline-primary" routerlink="" href="admin-policymaintenance.php">
                                        <message key="global.buttons.cancel">Cancel</message>
                                    </a> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </ng-component>
    </div>
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
