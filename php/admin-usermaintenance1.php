<?php 
$audience = 'admin';
$section = 'moderator';
$page_title = 'User moderation';
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
                <div class="row no-gutters mb-4 justify-content-between align-items-center">
                    <div class="col-9">
                        <h1> <?php echo $page_title; ?></h1>
                    </div>
                    <div class="col-3">
                        <div class="input-group clear-field">
                            <input type="text" class="form-control" id="clear_field2">
                            <button class="cleartext" id="cleartext2" style="display:none"> <i class="rbt-icon-circle-close"></i></button>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button"><i class="fa fa-search"></i> <span class="sr-only">Search</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters mb-3 justify-content-between align-items-center">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="showrevoked">
                            <label class="form-check-label" for="showrevoked">Revoked access only</label>
                        </div>
                    </div>
                    <div class="col-auto"><a href="admin-usermaintenance-add.php" class="btn btn-sm btn-outline-primary"><span class="rbt-icon-plus ml-0"></span> Add user</a></div>
                </div>
                <table class="table rbt-table-responsive table-actions">
                    <thead>
                        <tr>
                            <th> Username</th>
                            <th><strong>Person Id</strong></th>
                            <th>Status</th>
                            <th class="text-center"><span class="sr-onlyyy">Actions</span> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="demojs-accessactive">
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">thrclark</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0001328543</span></td>
                            <td>Warning issued </td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b> <a href="admin-usermaintenance-user1.php" class="btn btn-link btn-sm" id="demojs_btn_togglerow1">View activity</a></td>
                        </tr>
                        <tr class="demojs-accessactive">
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">tewtband</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0003023985</span></td>
                            <td>Access reinstated </td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b> <a href="admin-usermaintenance-user2.php" class="btn btn-link btn-sm" id="demojs_btn_togglerow1">View activity</a></td>
                        </tr>
                        <tr class="demojs-accessrevoked">
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">zealfleo</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0003956434</span></td>
                            <td>Access revoked</td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b> <a href="admin-usermaintenance-user3.php" class="btn btn-link btn-sm" id="demojs_btn_togglerow1">View activity</a></td>
                        </tr>
                        <tr class="demojs-accessrevoked">
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">languid</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0002534347</span></td>
                            <td>Access revoked </td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b> <a href="admin-usermaintenance-user4.php" class="btn btn-link btn-sm" id="demojs_btn_togglerow1">View activity</a></td>
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
      

$("#showrevoked").click(function() {
    if($(this).is(":checked")) {
        $(".demojs-accessactive").hide();
    } else {
        $(".demojs-accessactive").show();
    }
});

    });

</script> 
<script>
$(document).ready(function() {
    $('#clear_field2').keydown(function() {
        tmpval = $(this).val();
        if (tmpval == '') {
            $("#cleartext2").css({
                "display": "none"
            });
        } else {
            $("#cleartext2").css({
                "display": "block"
            });
        }
    });
    $("#cleartext2").click(function() {
        $("#cleartext2").hide();
        $("#clear_field2").val("");
        $("#clear_field2").focus();
    });
});
</script>
</body>
</html>
