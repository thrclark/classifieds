<?php 
$audience = 'admin';
$section = 'moderator';
$page_title = 'Reindex ad';
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
            <div class="main-content" id="main-content">
                <div class="doc-header mb-3">
                    <div class="row">
                        <div class="col doc-title">
                            <h1> <?php echo $page_title; ?></h1>
                        </div>
                        <div class="col doc-controls"> 
                            <!-- <button type="button" class="btn btn-outline-secondary btn-sm float-md-right">Restrict User</button>--> 
                        </div>
                    </div>
                </div>
              
                <form novalidate class="ng-untouched ng-pristine ng-valid">
                    <div class="form-group">
                        <p class="" id="postingIdDirections">
                            <message key="admin.cache.ad.reindex.directions">Occasionally, an ad may be improperly indexed, causing it to appear in the main view of the application, but not for the moderator in the admin views (or vice versa). To manually reindex an ad, search for the ad by entering the ad ID as found in the ad URL. </message>
                        </p>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <label id="postingIdLabel" class="">
                                    <message key="admin.cache.ad.reindex.label">Enter ad ID</message>
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="findAd"><span class="sr-only">Search for ad</span> <span class="rbt-icon-magnifying-glass"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                          <div id="successMessage" style="display:none">
                    <div class="alert alert-success alert-dismissible fade show"  role="alert" >
                        <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                        <h4 class="alert-heading">Success!</h4>
                        <p>This ad (ID: 800943) has now been reindexed.</p>
                    </div>
                </div>
                
                
                        <div id="adInfo" style="display:none">
                            <h2 class="rbt-ts-26">Ad ID: 180089</h2>
                            <div class="card bg-white mb-3">
                                <div class="card-body"> <span class="card-text">
                                    <dl>
                                        <dt>Ad title</dt>
                                        <dd>For sale: MacBook Pro</dd>
                                        <dt>Description</dt>
                                        <dd>This is a beautiful original lacquer Mark VI tenor saxophone from 1962, serial number 99015. The lacquer finish on the horn is in exquisite condition. Its original finish displays a very dark honey tint which is perfectly complemented by the crisp American floral engraving. The lacquer condition is about as clean and pristine as you will ever see.</dd>
                                        <dt>Post date</dt>
                                        <dd>05/07/2018</dd>
                                    </dl>
                                    </span> </div>
                            </div>
                            <div class="rbt-button-group"> <a href="#" class="btn btn-primary" id="reindexAd">Reindex ad</a> <a href="#" class="btn btn-outline-primary" id="cancelIndex">Cancel</a> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
<script>
$(document).ready(function(){
    $("#findAd").click(function(){
        $("#adInfo").show();
    });
    $("#cancelIndex").click(function(){
        $("#adInfo").hide();
    });
	
	
	    $("#reindexAd").click(function(){
        $("#adInfo").hide();
		$("#successMessage").show();
    });
	
	
	
});
</script>
</body>
</html>
