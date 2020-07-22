<?php 
$audience = 'main';
$page_title = 'Newest 6 items this week';	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/main-styles.php') ?>
<?php include('../../../GitHub-Notifications/php/includes/nc-styles.php') ?>
<style>
body .nav-section {
    border-right: none !important;
}
.rbt-app-header {
    border-bottom-color: #d9d9d9;
    border-bottom: none;
    background: #fff;
}
.emailHeader {
	background: #fff;
	padding: 10px;
	border: 1px solid #ddd;
	margin-left: -10px;
	margin-right: -10px;
}
.resultTitle {
	margin-left: -10px;
}
.postitem .postitem-container {
    display: block;
    color: #444444;
    padding: 5px;
    background: none !important;
    overflow: hidden;
    position: relative;
    margin-bottom: 10px;
    text-decoration: none;
    box-shadow: none !important;
    border-radius: 4px;
}
.postitem {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    border: 1px solid #ddd;
    margin: 5px;
}
.postitem.grid {
    flex: 0 0 33.3333333333%;
    max-width: 32% !important;
}
.postitem .postitem-container .postitem-post-title::before {
    background: none !important;
}
</style>
</head>
<body>

<div id="main">
    <section class="main-content pt-3" role="main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9 main-content-section" role="main">
                    <!-- <h1 class="rbt-ts-20 mb-5">Email - ( from: IU Classifieds ) ( email subject: "car: 4 new!" ) </h1> -->
                    <div class="emailHeader">       
                    	<header class="d-flex flex-nowrap rbt-app-header mt-2">
							<div class="ccf-brand-image-container d-none d-sm-block"><img src="../img/trident-large.png" alt="" class="rbt-brand-image"/></div>
    						<div class="rbt-brand-title-container flex-grow-1 "> <a href="#" class="rbt-brand-title font-weight-bold ml-2">IU Classifieds </a> </div>
						</header>
						<div class="mt-2 mb-2"><h2 class="rbt-ts-29 mt-3 mb-3"> New matches for "car"</h2>
							<a href="main-searchresults.php" class="btn btn-sm btn-outline-primary">See all results</a> <a href="main-savedsearch.php" class="btn btn-sm btn-outline-primary">Manage search settings</a> 
						</div>
					</div>
                    <div class="row align-items-center section-head mt-3">
                        <div class="col-12 section-head-title">
                            <h3 class="resultTitle rbt-ts-26 mb-2"> <?php echo $page_title; ?></h3>
                        </div>
                        <div class="col-12">
                            
                        </div>
                    </div>
                    
                    <?php include('includes/main-ads-email.php') ?>
                    
                </div>
            </div>
        </div>
    </section>
</div>

</body>
</html>