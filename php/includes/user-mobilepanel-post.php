<style type="text/css">
.form-group.ad-images .ad-images-container {
	display: block;
	width: 100%;
	padding: 0.5rem 0.75rem;
	font-size: 0.875rem;
	line-height: 1.25;
	color: #495057;
	background-color: #fff;
	background-image: none;
	background-clip: padding-box;
	border: 1px solid rgba(0, 0, 0, 0.15);
	border-radius: 0;
	transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.form-group.ad-images .ad-images-container img {
	height: 72px;
	width: auto;
	margin: 5px;
}
</style>

<div class="mobile-panel post" style="display:">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-md-6">
                <form>
                    <div class="mobile-panel-header">
                        <h2>Post Ad</h2>
                    </div>
                    <div class="form-group">
                        <label for="adTitle">Ad Title</label>
                        <input type="text" class="form-control" id="adTitle" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="adPrice">Price</label>
                        <input type="text" class="form-control" id="adPrice" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="adContact">Contact Info</label>
                        <input type="text" class="form-control" id="adContact" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="adCategory">Ad Category</label>
                        <select name="adCategory" id="adCategory" class="form-control " required="">
                            <option value="?" selected="selected"></option>
                            <option label="Activity Partners" value="number:14">Activity Partners</option>
                            <option label="Announcements" value="number:2">Announcements</option>
                            <option label="Antiques &amp; Collectibles" value="number:16">Antiques &amp; Collectibles</option>
                            <option label="Books" value="number:3">Books</option>
                            <option label="Electronics" value="number:4">Electronics</option>
                            <option label="Furniture" value="number:5">Furniture</option>
                            <option label="Jobs" value="number:7">Jobs</option>
                            <option label="Lost &amp; Found" value="number:8">Lost &amp; Found</option>
                            <option label="Miscellaneous" value="number:9">Miscellaneous</option>
                            <option label="Musicians &amp; Artists" value="number:15">Musicians &amp; Artists</option>
                            <option label="Rideboard &amp; Carpools" value="number:10">Rideboard &amp; Carpools</option>
                            <option label="Roommates &amp; Sublets" value="number:6">Roommates &amp; Sublets</option>
                            <option label="Tickets &amp; Events" value="number:12">Tickets &amp; Events</option>
                            <option label="Vehicles" value="number:13">Vehicles</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="adCampus">Ad Campus</label>
                        <select name="adCampus" id="adCampus" class="form-control " required="">
                            <option value="?" selected="selected"></option>
                            <option label="IPFW Fort Wayne" value="string:FW">IPFW Fort Wayne</option>
                            <option label="IU Southeast" value="string:SE">IU Southeast</option>
                            <option label="IU Kokomo" value="string:KO">IU Kokomo</option>
                            <option label="IUPUI Indianapolis" value="string:IN">IUPUI Indianapolis</option>
                            <option label="IU Northwest" value="string:NW">IU Northwest</option>
                            <option label="IU Bloomington" value="string:BL">IU Bloomington</option>
                            <option label="IUPUC Columbus" value="string:CO">IUPUC Columbus</option>
                            <option label="IU East" value="string:EA">IU East</option>
                            <option label="IU South Bend" value="string:SB">IU South Bend</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="adDescription">Ad Description</label>
                        <textarea class="form-control" id="adDescription" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="adDescription">Email</label>
                        <div class="row">
                            <div class="col-8">
                                <input class="form-control" type="text" placeholder="thrclark@indiana.edu" readonly>
                            </div>
                            <div class="col-4">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        Do not display </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adExpiration">Expiration Date</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="dd/mm/yyyy" aria-label="adExpiration" aria-describedby="sizing-addon2">
                            <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-calendar" aria-hidden="true"></i></span> </div>
                    </div>
                    <div class="form-group ad-images">
                        <label for="adExpiration">Images</label>
                        <div class="ad-images-container"><img src="../img/ad-pics/piano1.jpg" alt="" class="img-fluid"/><img src="../img/ad-pics/piano2.jpg" alt="" class="img-fluid"/><img src="../img/ad-pics/piano3.jpg" alt="" class="img-fluid"/><img src="../img/ad-pics/piano4.jpg" alt="" class="img-fluid"/></div>
                        <div class="text-right" style="padding-top:5px">
                            <button type="button" class="btn btn-outline-secondary btn-sm">Add Image</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-md-3 col-lg-3">
                <div class="mobile-panel-header">
                    <h2>Ad Preview</h2>
                </div>
                <div class="ad">
                    <div class="watchlist-set"> <i aria-hidden="true" class="fa fa-heart-o"></i> </div>
                    <div class="ad-image" style="background-image:url(../img/ad-pics/piano1.jpg)"></div>
                    <div class="form-row ad-titleprice">
                        <div class="col ad-title"> Grand Piano - gently used</div>
                        <div class="col-auto ad-price">$2450</div>
                    </div>
                    <div class="ad-location"><i class="fa fa-map-marker" aria-hidden="true"></i> IUB</div>
                </div>
            </div>
            <div class="col-xs-12 col-md-9">
                <hr>
                <button type="button" class="btn btn-primary">Post Ad</button>
                <button type="button" class="btn btn-outline-primary">Cancel</button>
            </div>
        </div>
    </div>
</div>
