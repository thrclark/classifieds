<?php 
$audience = 'main';
$page_title = 'Saved searches';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/main-styles.php') ?>
<style>
.ccf-clearsearch {
    padding-top: 0px !important;
    width: 50px;
    text-align: center;
}

@media (min-width: 769px) {
  	#alertSetting {
		text-align: center;
	}
}
</style>
</head>
<body>
<div id="main">
    <?php include('includes/main-appheader.php') ?>
    <section class="main-content pt-3" role="main">
        <div class="container">
            <div class="row">
                <div class="col-3 d-none d-md-block nav-section">
                    <?php include('includes/main-nav.php') ?>
                </div>
                <div class="col-xs-12 col-md-9 main-content-section" id="main-conten">
                    <div class="row align-items-center section-head">
                        <div class="col-12 section-head-title">
                            <h1 class="mb-2"> <?php echo $page_title; ?> 
                            </h1>
                            <?php if ($id === "save"){ ?>
                            <div class="alert alert-success alert-dismissible fade show mt-3 mb-4" role="alert">
    							<button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
    							<p class="small">'iPhone, Android, Smartphone' was saved.</p>
							</div>
							<?php } ?>
							<?php if ($id != "max"){ ?>
                            <div class="ccf-table-responsive-container m-3">
                    			<table class="table rbt-table-responsive mb-5">
                        			<thead>
                           				<tr>
                                		<th>Created</th>
                                		<th>Name</th>
                                		<th>Filters</th>
                                		<th>Email Alert</th>
                                		<th></th>
                            			</tr>
                        			</thead>
                        			<tbody id="table_userads" class="rbt-ts-14">
                            			<tr class="demojs-reported-no">
                                		<td><b class="rbt-table-responsive-cell-label">Created</b><span class="rbt-table-responsive-cell-content">Jun 15,2020</span></td>
                                		<td><b class="rbt-table-responsive-cell-label">Name</b>
                                			<span class="rbt-table-responsive-cell-content">
                                				<a href="main-searchresults.php">iPhone, Android, Smartphone</a>
                                			</span>
                                		</td>
                                		<td><b class="rbt-table-responsive-cell-label">Filters</b><span class="rbt-table-responsive-cell-content">Electronics, IUPUI, For sale</span></td>
                                		<td id="alertSetting"><b class="rbt-table-responsive-cell-label">Alert</b>
                                			<div class="rvb-switch rvb-switch-sm rvb-switch-success">
        										<label class="">
        											<input type="checkbox" >
        											<div class="rvb-slider">
            											<div class="rvb-slider-on">On</div>
            											<div class="rvb-slider-off">Off</div>
        											</div>
        										</label>
    										</div>
                                		</td>
                                    	<td><button class="btn btn-sm btn-outline-primary demojs-btn-returntoad" data-toggle="modal" data-target="#delete_search"> Delete</button></td>
                            			</tr>
                            			<tr class="demojs-reported-no">
                                		<td><b class="rbt-table-responsive-cell-label">Created</b><span class="rbt-table-responsive-cell-content">May 30, 2020</span></td>
                                		<td><b class="rbt-table-responsive-cell-label">Name</b>
                                			<span class="rbt-table-responsive-cell-content">
                                				<a href="main-searchresults.php">Couch</a>
                                			</span>
                                		</td>
                                		<td><b class="rbt-table-responsive-cell-label">Filters</b><span class="rbt-table-responsive-cell-content">Furniture, IUB, For sale</span></td>
                                		<td id="alertSetting"><b class="rbt-table-responsive-cell-label">Alert</b>
                                			<div class="rvb-switch rvb-switch-sm rvb-switch-success">
        										<label class="">
        											<input type="checkbox" >
        											<div class="rvb-slider">
            											<div class="rvb-slider-on">On</div>
            											<div class="rvb-slider-off">Off</div>
        											</div>
        										</label>
    										</div>
                                		</td>
                                    	<td><button class="btn btn-sm btn-outline-primary demojs-btn-returntoad" data-toggle="modal" data-target="#delete_search"> Delete</button></td>
                            			</tr>
                        			</tbody>
                    			</table>
                    		<?php } ?>
                    		<?php if ($id === "max"){ ?>
                            	<div class="alert alert-danger alert-dismissible fade show mt-3 mb-4" role="alert">
    								<button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
    								<p class="small">Unable to save 'iPhone, Android, Smartphone'. You can only save 5 searches.</p>
								</div>
								<h2 class="rbt-ts-20 mb-3">Replace a saved search ...</h2>
								<table class="table table-sm rbt-table-responsive mb-5">
                        			<thead>
                           				<tr>
                                		<th></th>
                                		<th>Created</th>
                                		<th>Name</th>
                                		<th>Filters</th>
                            			</tr>
                        			</thead>
                        			<tbody id="table_userads" class="rbt-ts-14">
                            			<tr class="demojs-reported-no">
                                		<td><b class="rbt-table-responsive-cell-label">Select</b>
                                			<span class="rbt-table-responsive-cell-content">
                                				<input class="form-check-input" type="checkbox" name="select1" id="inlineCheckbox1" value="option1">
    											<label class="form-check-label" for="inlineCheckbox1"></label>
                                			</span>
                                		</td>
                                    	<td><b class="rbt-table-responsive-cell-label">Created</b><span class="rbt-table-responsive-cell-content">June 15, 2020</span></td>
                                		<td><b class="rbt-table-responsive-cell-label">Name</b>
                                			<span class="rbt-table-responsive-cell-content">
                                				<a href="main-searchresults.php">Smartphone</a>
                                			</span>
                                		</td>
                                		<td><b class="rbt-table-responsive-cell-label">Filters</b><span class="rbt-table-responsive-cell-content">Electronics, IUPUI, For sale</span></td>
                            			</tr>
                            			<tr class="demojs-reported-no">
                                		<td><b class="rbt-table-responsive-cell-label">Select</b>
                                			<span class="rbt-table-responsive-cell-content">
                                				<input class="form-check-input" type="checkbox" name="select1" id="inlineCheckbox2" value="option2">
    											<label class="form-check-label" for="inlineCheckbox2"></label>
                                			</span>
                                		</td>
                                    	<td><b class="rbt-table-responsive-cell-label">Created</b><span class="rbt-table-responsive-cell-content">May 30, 2020</span></td>
                                		<td><b class="rbt-table-responsive-cell-label">Name</b>
                                			<span class="rbt-table-responsive-cell-content">
                                				<a href="main-searchresults.php">Couch</a>
                                			</span>
                                		</td>
                                		<td><b class="rbt-table-responsive-cell-label">Filters</b><span class="rbt-table-responsive-cell-content">Furniture, IUB, For sale</span></td>
                            			</tr>
                            			<tr class="demojs-reported-no">
                                		<td><b class="rbt-table-responsive-cell-label">Select</b>
                                			<span class="rbt-table-responsive-cell-content">
                                				<input class="form-check-input" type="checkbox" name="select1" id="inlineCheckbox3" value="option2">
    											<label class="form-check-label" for="inlineCheckbox3"></label>
                                			</span>
                                		</td>
                                    	<td><b class="rbt-table-responsive-cell-label">Created</b><span class="rbt-table-responsive-cell-content">May 20, 2020</span></td>
                                		<td><b class="rbt-table-responsive-cell-label">Name</b>
                                			<span class="rbt-table-responsive-cell-content">
                                				<a href="main-searchresults.php">Television, Flat Screen</a>
                                			</span>
                                		</td>
                                		<td><b class="rbt-table-responsive-cell-label">Filters</b><span class="rbt-table-responsive-cell-content">Electronics, IUB, For sale</span></td>
                            			</tr>
                            			<tr class="demojs-reported-no">
                                		<td><b class="rbt-table-responsive-cell-label">Select</b>
                                			<span class="rbt-table-responsive-cell-content">
                                				<input class="form-check-input" type="checkbox" name="select1" id="inlineCheckbox4" value="option2">
    											<label class="form-check-label" for="inlineCheckbox4"></label>
                                			</span>
                                		</td>
                                    	<td><b class="rbt-table-responsive-cell-label">Created</b><span class="rbt-table-responsive-cell-content">May 18, 2020</span></td>
                                		<td><b class="rbt-table-responsive-cell-label">Name</b>
                                			<span class="rbt-table-responsive-cell-content">
                                				<a href="main-searchresults.php">BMW, Audi, Mercedes</a>
                                			</span>
                                		</td>
                                		<td><b class="rbt-table-responsive-cell-label">Filters</b><span class="rbt-table-responsive-cell-content">Vehicles, IUB, For sale</span></td>
                            			</tr>
                            			<tr class="demojs-reported-no">
                                		<td><b class="rbt-table-responsive-cell-label">Select</b>
                                			<span class="rbt-table-responsive-cell-content">
                                				<input class="form-check-input" type="checkbox" name="select1" id="inlineCheckbox5" value="option2">
    											<label class="form-check-label" for="inlineCheckbox5"></label>
                                			</span>
                                		</td>
                                    	<td><b class="rbt-table-responsive-cell-label">Created</b><span class="rbt-table-responsive-cell-content">May 17, 2020</span></td>
                                		<td><b class="rbt-table-responsive-cell-label">Name</b>
                                			<span class="rbt-table-responsive-cell-content">
                                				<a href="main-searchresults.php">Nightstand</a>
                                			</span>
                                		</td>
                                		<td><b class="rbt-table-responsive-cell-label">Filters</b><span class="rbt-table-responsive-cell-content">Furniture, IUB, For sale</span></td>
                            			</tr>
                        			</tbody>
                    			</table>
								<h2 class="rbt-ts-20 mb-3">with the following ...</h2>
								<table class="table table-sm rbt-table-responsive mb-5">
                        			<thead>
                           				<tr>
                                		<th>Created</th>
                                		<th>Name</th>
                                		<th>Filters</th>
                            			</tr>
                        			</thead>
                        			<tbody id="table_userads" class="rbt-ts-14">
                            			<tr class="demojs-reported-no">
                                		<td><b class="rbt-table-responsive-cell-label">Created</b><span class="rbt-table-responsive-cell-content">Jun 15, 2020</span></td>
                                		<td><b class="rbt-table-responsive-cell-label">Name</b>
                                			<span class="rbt-table-responsive-cell-content">
                                				<a href="main-searchresults.php">iPhone, Android, Smartphone</a>
                                			</span>
                                		</td>
                                		<td><b class="rbt-table-responsive-cell-label">Filters</b><span class="rbt-table-responsive-cell-content">Electronics, IUPUI, For sale</span></td>
                                		</tr>
                        			</tbody>
                    			</table>
                    			<a href="main-savedsearch.php?id=save" class="btn btn-primary">Save</a> <a href="main-home.php" class="btn btn-outline-primary">Cancel</a>
							<?php } ?>
                			</div>
                        </div>
                    </div>
                </div>
            </div> 
		</div>

       <?php include('modals/modal-main-search-delete.php') ?>
    </section>
    <?php include('includes/main-footer-menu.php') ?>
</div>
<?php include('includes/main-custom-footer.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
<script>
    $(document).ready(function() {
        if (screen.width < 767) {
            $(".rbt-brand-image-container, .rbt-brand-title-container, #mobile_showSearch, .rbt-drawer-button").hide();
			$("#mobile_hideSearch, #cleartext2").show();
			$("#mainSearch_container").removeClass( "d-none d-md-block" );
			$("#mainSearch_container").addClass( "pr-0" );
			$(".ccf-brand-image-container").addClass( "flex-grow-1" );
			$("#mainSearch").attr("value", "iPhone");
        } else {
			$("#mainSearch").attr("value", "iPhone");
        }
    });
</script>
</body>
</html>