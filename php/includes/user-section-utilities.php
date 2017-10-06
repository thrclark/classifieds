
<div class="section-head-utilities">
    <div class="row no-gutters align-items-center">
        <div class="col-auto">
            <div class="dropdown util-location"><i class="fa fa-map-marker" aria-hidden="true"></i>
                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="long-name">IU Kokomo</span> <span class="short-name">IUK</span></button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#"><span class="long-name">IU Bloomington</span></a> <a class="dropdown-item" href="#"><span class="long-name">IUPUI</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU Kokomo</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU Northwest</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU South Bend</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU East</span></a> <a class="dropdown-item" href="#"><span class="long-name">IU South</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><span class="long-name">All Campuses</span></a> </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="dropdown util-filter"><i class="fa fa-filter" aria-hidden="true"></i>
                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class=" d-none d-sm-inline">All Ads</span></button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#"> Selling</a> <a class="dropdown-item" href="#"> Seeking</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">All Ads</a> </div>
            </div>
        </div>
        <div class="col text-right"> 
        
          <span class="hidethis" <?php if ($page_title == 'search_results') { echo 'style=" display:inline-block"'; } ?>>  <strong class="d-none d-sm-inline">Sort:</strong>
            <div class="dropdown util-sort" >
                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sort d-sm-none" aria-hidden="true"></i> <span class="d-none d-sm-inline">By</span> Date </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">By Relevance</a> <a class="dropdown-item" href="#">By Date</a> </div>
            </div></span>
            <div class="btn-group util-view-switch d-none d-sm-inline" data-toggle="buttons">
                <label class="btn btn-sm btn-outline-dark active" id="set_grid">
                    <input type="radio" name="options" id="" autocomplete="off" checked>
                    <i class="fa fa-th-large" aria-hidden="true"></i> </label>
                <label class="btn btn-sm btn-outline-dark" id="set_thumb">
                    <input type="radio" name="options" id="" autocomplete="off">
                    <i class="fa fa-list-ul" aria-hidden="true"></i> </label>
                <label class="btn btn-sm btn-outline-dark" id="set_list">
                    <input type="radio" name="options" id="" autocomplete="off">
                    <i class="fa fa-list" aria-hidden="true"></i> </label>
            </div>
        </div>
    </div>
</div>
