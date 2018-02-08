
<div class="section-head-utilities">
    <div class="row no-gutters align-items-center">
        <div class="col-auto"  <?php if ($page_title == 'cat_watchlist') { echo 'style=" display:none"'; } ?> <?php if ($page_title == 'cat_myads') { echo 'style=" display:none"'; } ?>>
            <div class="dropdown util-location">
                <button class="btn btn-link dropdown-toggle" type="button" id="select_geo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="long-name">IU Kokomo</span> <span class="short-name">IUK</span></button>
                <div class="dropdown-menu" aria-labelledby="select_geo"> 
                
                
                 <h3 class="dropdown-header">Set location</h3>
                   <div class="dropdown-divider"></div>
                 
                 <a class="dropdown-item" href="#">All locations</a> <a class="dropdown-item" href="#"> IU Bloomington (IUB)</a> <a class="dropdown-item" href="#"> IUPUI (IUPUI)</a> <a class="dropdown-item" href="#"> IU Kokomo (IUK)</a> <a class="dropdown-item" href="#"> IU Northwest (IUN)</a> <a class="dropdown-item" href="#"> IU South Bend (IUSB)</a> <a class="dropdown-item" href="#"> IU East (IUE)</a> <a class="dropdown-item" href="#"> IU South (IUS)</a>
                  
                    </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="dropdown util-filter">
                <button class="btn btn-link dropdown-toggle" type="button" id="select_type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="">All types</span></button>
                <div class="dropdown-menu" aria-labelledby="select_type">
                
                
                  <h3 class="dropdown-header">Filter by type</h3>
                   <div class="dropdown-divider"></div>
                   
                   
                   
                    <a class="dropdown-item" href="#"> For sale</a> <a class="dropdown-item" href="#"> Seeking</a>
                   
                    <a class="dropdown-item" href="#">All types</a> </div>
            </div>
        </div>
        <div class="col text-right">
            <div class="hidethis" <?php if ($page_title == 'Results for') { echo 'style=" display:inline-block"'; } ?>>
                <div class="dropdown util-sort">
                    <button class="btn btn-link dropdown-toggle" type="button" id="select_sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> By date </button>
                    <div class="dropdown-menu" aria-labelledby="select_sort"> 
                    
                    
                      <h3 class="dropdown-header">Sort results</h3>
                   <div class="dropdown-divider"></div>
                   
                   
                   
                   
                   <a class="dropdown-item" href="#">By relevance</a> <a class="dropdown-item" href="#">By date</a> </div>
                </div>
            </div>
            <div class="btn-group util-view-switch d-none d-sm-inline" data-toggle="buttons">
                <label class="btn btn-sm btn-outline-primary active" id="set_grid">
                    <input type="radio" name="options"   checked>
                    <span class="sr-only">Grid</span> <i class="fa fa-th-large" aria-hidden="true"></i> </label><label class="btn btn-sm btn-outline-primary" id="set_thumb">
                    <input type="radio" name="options">
                    <span class="sr-only">Thumbnail</span> <i class="fa fa-list-ul" aria-hidden="true"></i> </label><label class="btn btn-sm btn-outline-primary" id="set_list">
                    <input type="radio" name="options">
                    <span class="sr-only">List</span> <i class="fa fa-list" aria-hidden="true"></i> </label>
            </div>
        </div>
    </div>
</div>
