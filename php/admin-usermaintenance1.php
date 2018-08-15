<?php 
$audience = 'admin';
$section = 'moderator';
$page_title = 'User maintenance';
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
            <main class="main-content" id="main-content">
                <div class="row no-gutters mb-3 justify-content-between align-items-center">
                    <div class="col-12 col-md-6">
                        <h1> <?php echo $page_title; ?></h1>
                    </div>
                    <div class="col-auto pr-4 border-right">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="showrevoked" checked="">
                            <label class="form-check-label" for="showrevoked">Revoked users only</label>
                        </div>
                    </div>
                    <div class="col pl-4">
                        <form novalidate ng-reflect-form="[object Object]" class=" ng-valid ng-touched">
                            <label class="sr-only" id="termsLabel">
                                <message key="admin.ads.field.searchTerms" ng-reflect-key="admin.ads.field.searchTerms">Find a user</message>
                            </label>
                            <div class="input-group">
                                <input aria-labelledby="termsLabel" class="form-control  ng-valid ng-touched" formcontrolname="terms" type="text" ng-reflect-name="terms">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"> <i aria-hidden="true" class="fa fa-search"></i> <span class="sr-only">
                                    <message key="global.button.search" ng-reflect-key="global.button.search">Search</message>
                                    </span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-link" type="button">
                        <message key="admin.buttons.clear" ng-reflect-key="admin.buttons.clear">Clear</message>
                        </button>
                    </div>
                </div>
                <table class="table rbt-table-responsive table-actions">
                    <thead>
                        <tr>
                            <th> Username</th>
                            <th><strong>Person Id</strong></th>
                            <th>Status</th>
                            <th class="text-center"><span class="sr-only">Actions</span> <a href="admin-usermaintenance-add.php" class="btn btn-sm btn-outline-primary">Add revoked user</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="demojs-accessactive">
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">thrclark</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0001328543</span></td>
                            <td>Warning issued </td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                <a href="admin-usermaintenance-user1.php" class="btn btn-link btn-sm" id="demojs_btn_togglerow1">View activity</a></td>
                        </tr>
                      
                        <tr class="demojs-accessactive">
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">tewtband</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0003023985</span></td>
                            <td>Access reinstated </td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                  <a href="admin-usermaintenance-user2.php" class="btn btn-link btn-sm" id="demojs_btn_togglerow1">View activity</a></td>
                        </tr>
                   
                        <tr class="demojs-accessrevoked">
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">zealfleo</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0003956434</span></td>
                            <td>Access revoked</td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                  <a href="admin-usermaintenance-user3.php" class="btn btn-link btn-sm" id="demojs_btn_togglerow1">View activity</a></td>
                        </tr>
                   
                        <tr class="demojs-accessrevoked">
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">languid</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0002534347</span></td>
                            <td>Access revoked </td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b>
                                  <a href="admin-usermaintenance-user4.php" class="btn btn-link btn-sm" id="demojs_btn_togglerow1">View activity</a></td>
                        </tr>
                 
                    </tbody>
                </table>
            </main>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
<script>
$(document).ready(function(){
	
	 $("#demojs_btn_togglerow1").click(function(){
        $("#demojs_detailrow1, #timeline1").slideToggle();
    });
	
	
    $("#demojs_btn_togglerow2").click(function(){
        $("#demojs_detailrow2, #timeline2").slideToggle();
    });
	
	 $("#demojs_btn_togglerow3").click(function(){
        $("#demojs_detailrow3, #timeline3").slideToggle();
    });
	
	 $("#demojs_btn_togglerow4").click(function(){
        $("#demojs_detailrow4, #timeline4").slideToggle();
    });
	
});
</script> 
<script>
$(document).ready(function(){
	
	
	$("#btn_showdet1-1").click(function(){
        $("#showdet1-1").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	 $("#btn_showdet1-2").click(function(){
        $("#showdet1-2").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
	$("#btn_showdet1-3").click(function(){
        $("#showdet1-3").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	$("#btn_showdet1-4").click(function(){
        $("#showdet1-4").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
	
    $("#btn_showdet2-1").click(function(){
        $("#showdet2-1").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	 $("#btn_showdet2-2").click(function(){
        $("#showdet2-2").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
	$("#btn_showdet2-3").click(function(){
        $("#showdet2-3").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	$("#btn_showdet2-4").click(function(){
        $("#showdet2-4").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
	
    $("#btn_showdet3-1").click(function(){
        $("#showdet3-1").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	 $("#btn_showdet3-2").click(function(){
        $("#showdet3-2").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
	$("#btn_showdet3-3").click(function(){
        $("#showdet3-3").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	$("#btn_showdet3-4").click(function(){
        $("#showdet3-4").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
    $("#btn_showdet4-1").click(function(){
        $("#showdet4-1").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	 $("#btn_showdet4-2").click(function(){
        $("#showdet4-2").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
	$("#btn_showdet4-3").click(function(){
        $("#showdet4-3").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	$("#btn_showdet4-4").click(function(){
        $("#showdet4-4").slideToggle();	
		$( this ).toggleClass( "rbt-icon-chevron-down rbt-icon-chevron-up " );
    });
	
	
});
</script> 
<script type="text/javascript">


   $(document).ready(function(){
      
$(".demojs-accessactive").hide();
$("#showrevoked").click(function() {
    if($(this).is(":checked")) {
        $(".demojs-accessactive").hide();
    } else {
        $(".demojs-accessactive").show();
    }
});

    });

</script>
</body>
</html>
