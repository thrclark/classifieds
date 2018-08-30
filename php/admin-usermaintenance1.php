<?php 
$audience = 'admin';
$section = 'moderator';
$page_title = 'Moderate users';
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
                <div class="row mb-1 no-gutters align-items-center mb-3">
                    <div class="col-md-6 col-lg-8">
                        <h1> <?php echo $page_title; ?></h1>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex flex-row">
                            <div class="input-group clear-field">
                                <label class="sr-only" for="demojs_uservalue">Find/add user</label>
                                <input type="text" class="form-control" placeholder="Find/add user" aria-label="" aria-describedby="" id="demojs_uservalue" >
                                <button class="cleartext" id="cleartext2" style="display:none"> <i class="rbt-icon-circle-close"></i></button>
                                <div class="input-group-append"> <a href="" class="btn btn-primary" id="finduser"><i aria-hidden="true" class="fa fa-search"></i> <span class="sr-only">Search</span></a> </div>
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
                    <!--  <div class="col-auto"><a href="admin-usermaintenance-user0.php" class="btn btn-sm btn-outline-primary"> Moderate user</a></div>--> 
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
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">jhopf</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0003023985</span></td>
                            <td>Access reinstated </td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b> <a href="admin-usermaintenance-user2.php" class="btn btn-link btn-sm" id="demojs_btn_togglerow1">View activity</a></td>
                        </tr>
                        <tr class="demojs-accessrevoked">
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">jtwalker</span></td>
                            <td><b class="rbt-table-responsive-cell-label">Person Id</b><span class="rbt-table-responsive-cell-content">0003956434</span></td>
                            <td>Access revoked</td>
                            <td><b class="rbt-table-responsive-cell-label">Actions</b> <a href="admin-usermaintenance-user3.php" class="btn btn-link btn-sm" id="demojs_btn_togglerow1">View activity</a></td>
                        </tr>
                        <tr class="demojs-accessrevoked">
                            <td><b class="rbt-table-responsive-cell-label">Username</b><span class="rbt-table-responsive-cell-content">eecox</span></td>
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
<script>
$(document).ready(function () {
    $("#finduser").click(function () {
	
        var text = $("#demojs_uservalue").val();
        var user0 = "ewestfal";
var user1 = "thrclark";
		var user2 = "jhopf";
		var user3 = "jtwalker";
		var user4 = "eecox";
		var user5 = "";
        if (text == user0) {
            $('#finduser').attr("href", "admin-usermaintenance-user0.php");
        }
 if (text == user1) {
            $('#finduser').attr("href", "admin-usermaintenance-user1.php");
        }
		if (text == user2) {
             $('#finduser').attr("href", "admin-usermaintenance-user2.php");
        }
		if (text == user3) {
             $('#finduser').attr("href", "admin-usermaintenance-user3.php");
        }
		if (text == user4) {
             $('#finduser').attr("href", "admin-usermaintenance-user4.php");
        }
		if (text == user5) {
             $('#finduser').attr("href", "admin-usermaintenance1-usernotfound.php");
        }
    });
	 $("#demojs_uservalue").click(function () {
		 	// alert( "For the prototype, valid usernames are: ewestfal, thrclark, jhopf, jtwalker, eecox" );
	});
});
</script> 
<script>
$(document).ready(function() {
    $('#demojs_uservalue').keydown(function() {
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
        $("#demojs_uservalue").val("");
        $("#demojs_uservalue").focus();
    });
});
</script>
</body>
</html>
