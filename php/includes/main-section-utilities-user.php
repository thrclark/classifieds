
<div class="section-head-utilities">
    <div class="row align-items-center">
        <div class="col-auto pr-1"  <?php if ($page_title == 'cat_watchlist') { echo 'style=" display:none"'; } ?> <?php if ($page_title == 'cat_myads') { echo 'style=" display:none"'; } ?>>
            <div class="dropdown">
                <button class="btn btn-link dropdown-toggle" type="button" id="selectMarket" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="d-inline d-sm-none">Location</span>
                <span class="d-none d-sm-inline">All locations</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="selectMarket">
                    <h2 class="dropdown-header">Set location</h2>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item active" href="#">All locations</a>
                    <a class="dropdown-item" href="#"> IU Bloomington (IUB)</a>
                    <a class="dropdown-item" href="#"> IUPUI (IUPUI)</a>
                    <a class="dropdown-item" href="#"> IU Kokomo (IUK)</a>
                    <a class="dropdown-item" href="#"> IU Northwest (IUN)</a>
                    <a class="dropdown-item" href="#"> IU South Bend (IUSB)</a>
                    <a class="dropdown-item" href="#"> IU East (IUE)</a>
                    <a class="dropdown-item" href="#"> IU South (IUS)</a>
                </div>
            </div>
        </div>
        <div class="col-auto p-0">
            <div class="dropdown">
                <button class="btn btn-link dropdown-toggle" type="button" id="select_type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="d-inline d-sm-none">Ad type</span>
                <span class="d-none d-sm-inline">All types</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="select_type">
                    <h2 class="dropdown-header">Filter by type</h2>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"> For sale</a>
                    <a class="dropdown-item" href="#"> Seeking</a>
                    <a class="dropdown-item active" href="#">All types</a>
                </div>
            </div>
        </div>
        <div class="col text-right">
            <div class="hidethis" <?php if ($page_title == 'Results for') { echo 'style=" display:inline-block"'; } ?>>
                <div class="dropdown util-sort">
                    <button class="btn btn-link dropdown-toggle" type="button" id="select_sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-inline d-sm-none">Sort</span>
                    <span class="d-none d-sm-inline">By date</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="select_sort">
                        <h2 class="dropdown-header">Sort results</h2>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">By relevance</a>
                        <a class="dropdown-item active" href="#">By date</a>
                    </div>
                </div>
            </div>
            <div class="btn-group d-none d-sm-inline ml-3" role="group" style="font-size: 0;">
                <button class="btn btn-sm btn-outline-primary active" type="button" id="set_grid">
                <span class="sr-only">
                <message key="main.view.grid">Grid View</message>
                </span>
                <i aria-hidden="true" class="fa fa-th-large"></i>
                </button>
                <button class="btn btn-sm btn-outline-primary" type="button" id="set_thumb">
                <span class="sr-only">
                <message key="main.view.thumb">Thunbnail View</message>
                </span>
                <i aria-hidden="true" class="fa fa-list-ul"></i>
                </button>
                <button class="btn btn-sm btn-outline-primary" type="button" id="set_list">
                <span class="sr-only">
                <message key="main.view.list">List View</message>
                </span>
                <i aria-hidden="true" class="fa fa-list"></i>
                </button>
            </div>
        </div>
    </div>
</div>
