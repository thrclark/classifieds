

<div class="app-header" id="mainHeader">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-auto brand"> <!--this used to be just 'col' ?-->
				<div class="form-row align-items-center">
                    <!----><div class="col-auto">
                        <div class="brand-image"> <img src="../img/trident-large.png" alt="Indiana University" /></div>
                    </div>
                    <div class="col-auto">
                        <!---->
                        <!----><h1 class="brand-text">Classifieds</h1>
                    </div>
                </div>
			</div>
			<div class="col search d-none d-md-block">
				<div class="search-container">
					<div class="row align-items-center">
						<div class="col">
							<label class="sr-only" for="mainsearch"><message key="global.button.search">Search</message></label>
							<input class="form-control search-input ng-pristine ng-valid ng-touched" id="mainsearch" type="text">
						</div>
						<div class="col-auto search-button text-right">
							<button class="btn" onclick="location.href = 'main-searchresults.php';">
								<i aria-hidden="true" class="fa fa-search"></i>
								<span class="search-label d-none d-lg-inline"><message key="global.button.search">Search</message></span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-auto post d-none d-md-block">
				<a class="btn toggle_mobilepost" routerlink="/posting" href="main-postad.php"><message key="global.header.button.postAd">Post Ad</message></a>
			</div>
			<div class="col-auto user-ads d-md-none text-right">
				<button class="menu-trigger" type="button">
					<i aria-hidden="true" class="fa fa-ellipsis-v"></i>
					<i class="sr-only"><message key="global.button.openNavigation">Open User Menu</message></i>
				</button>
			</div>
		</div>
	</div>
</div>

	
    
<!--

<br><br><br>

<div class="app-header mb-3" role="banner">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto brand">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <div class="brand-image"> <img src="../img/trident-large.png" alt="Indiana University" /></div>
                    </div>
                    <div class="col-auto">
                        <h1 class="brand-text text-center">Classifieds</h1>
                    </div>
                </div>
            </div>
            <div class="col search d-none d-md-block">
                <div class="search-container ">
                    <div class="row align-items-center">
                        <div class="col clear-field">
                            <label for="mainsearch" class="sr-only">Search</label>
                            <input type="text" class="form-control search-input" id="mainsearch" placeholder="" >
                            <div class="cleartext" style="display:none"> <i class="fa fa-window-close"></i></div>
                        </div>
                        <div class="col-auto search-button text-right"> <a href="main-searchresults.php" class="btn"> <i class="fa fa-search" aria-hidden="true"></i> <span class="search-label d-none d-lg-inline">Search</span></a> </div>
                    </div>
                </div>
            </div>
            <div class="col-auto post d-none d-md-block">
                <button type="button" class="btn toggle_mobilepost">Post Ad</button>
            </div>
            <div class="col-auto user-ads d-md-none text-right">
                <button class="btn btn-link menu-trigger"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>
-->