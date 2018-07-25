
<div class="modal post-detail fade" id="admin_ad_detail" tabindex="-1" role="dialog" aria-labelledby="admin_ad_detail" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header demojs-admin-defaultview">
                <h3 class="modal-title" id="exampleModalLabel">Sublease for Brownstone Apartments for Spring Semester </h3>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body demojs-admin-defaultview">
                <dl class="row">
                    <dt class="sr-only">
                        <message key="global.ad.field.price">Price</message>
                    </dt>
                    <dd class="col-12 ccf-postdetail-title">$1400.00 or best offer</dd>
                    <dt class="sr-only">
                        <message key="global.ad.field.postDate">Post Date</message>
                    </dt>
                    <dd class="col-auto"><span class="font-italic small">2/14/18</span></dd>
                    <dt class="sr-only">Campus</dt>
                    <dd class="col-auto small ccf-postdetail-market"><i class="fa fa-map-marker"></i> IU Kokomo</dd>
                    <dt class="sr-only">s
                        <message key="global.ad.field.image">Images</message>
                    </dt>
                    <dd class="col-12">
                        <ccf-image-slider>
                            <div class="overflow mb-3" hammer-options="{&quot;touchAction&quot;: &quot;pan-y&quot;}" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                <div class="inner" style="width: 200%; margin-left: 0%;"> <img alt="" src="../img/post-pics/apartment.jpg" style="width: 50%;"><img alt="" src="../img/post-pics/1105499015MarkVITen5.jpg" style="width: 50%;"> </div>
                            </div>
                            <div class="controls">
                                <button class="btn btn-sm btn-outline-primary" type="button"> <i aria-hidden="true" class="fa fa-angle-left"></i> <span class="sr-only">
                                <message key="main.imageSlider.prev">Previous image</message>
                                </span> </button>
                                <button class="btn btn-sm btn-outline-primary" type="button"> <i aria-hidden="true" class="fa fa-angle-right"></i> <span class="sr-only">
                                <message key="main.imageSlider.next">Next image</message>
                                </span> </button>
                            </div>
                        </ccf-image-slider>
                    </dd>
                    <dt class="sr-only">
                        <message key="global.ad.field.description">Description</message>
                    </dt>
                    <dd class="col-12 pre-wrap">Nice house on IU campus, located just Southwest of the football stadium. The house has two large bedrooms, a newly remodeled kitchen with a dishwasher and gas cooktop. A washer and dryer are included, it also has an open, and a screened in porch, all located right in the middle of IU's beautiful campus. We only require a $900 deposit and for you to switch the utilities over to your name, so you can live in one of the nicest rentals on campus. If this appeals to you please contact me at your convenience. Thank you.</dd>
                    <dt class="col-sm-3">
                        <message key="global.ad.field.contact">Contact</message>
                    </dt>
                    <dd class="col-sm-9">812-555-4567</dd>
                    <dt class="col-sm-3">
                        <message key="global.ad.field.email">Email</message>
                    </dt>
                    <dd class="col-sm-9"><a href="mailto:thrclark@iu.edu">thrclark@iu.edu</a></dd>
                    <dt class="col-sm-3">Status</dt>
                    <dd class="col-sm-9">Active</dd>
                    <dt class="col-sm-3">Ad Purpose</dt>
                    <dd class="col-sm-9">-</dd>
                    <dt class="col-sm-3">Posted</dt>
                    <dd class="col-sm-9">02/25/2018 3:26pm</dd>
                    <dt class="col-sm-3">Expires</dt>
                    <dd class="col-sm-9">03/25/2018 3:26pm</dd>
                </dl>
            </div>
            <div class="modal-footer demojs-admin-defaultview">
                <div class="container-fluid px-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="rbt-button-group">
                                <button class="btn btn-outline-primary demojs-btn-deactivatead">Deactivate ad...</button>
                                <button class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Confirm ad deactivation-->
            
            <div class="modal-header demojs-admin-confirm-adremove" style="display:none">
                <h2 class="modal-title" id="exampleModalLabel">Ad deactivation</h2>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body demojs-admin-confirm-adremove" style="display:none">
                <p> Would you like to take administrative action on the user who posted this ad (jlacner)? </p>
                <div class="form-check demojs-adminactiontoggle">
                    <input class="form-check-input" type="radio" name="takeactiontoggle" id="watch-me2" value="2">
                    <label class="form-check-label" for="watch-me2"> No, just deactivate this ad. </label>
                </div>
                <div class="form-check demojs-adminactiontoggle">
                    <input class="form-check-input" type="radio" name="takeactiontoggle" id="takeadminaction" value="3">
                    <label class="form-check-label" for="takeadminaction"> Yes </label>
                </div>
                <div id="showadminaction" style="display:none" class="desc">
                    <p class=""> Please provide a message for the user who posted this ad. </p>
                    <form class="">
                        <div class="form-group">
                            <label for="banneduseruser">User</label>
                            <input type="text" class="form-control" id="banneduseruser" placeholder="" value="jlancer" readonly>
                        </div>
                        <div class="form-group">
                            <label for="selectresponse">Reason for ad deactivation</label>
                            <select class="form-control" id="selectresponse">
                                <option value="Fraudulent activity">Fraudulent activity</option>
                                <option value="Contains offensive material">Contains offensive material</option>
                                <option value="Promotes personal/commercial business">Promotes personal/commercial business</option>
                                <option value="Promotes a political/social agenda">Promotes a political/social agenda</option>
                                <option value="Selling IU parking permit">Selling IU parking permit</option>
                                <option value="Fake ad">Fake ad</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="responsefield">Message to be sent</label>
                            <textarea class="form-control" id="responsefield" rows="8">We have received a complaint regarding your use of Classifieds. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.</textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="stacked1" value="option1">
                            <label class="form-check-label" for="stacked1"> Log a warning for user 'jlancer' for '<span id="reasonvalue">Parking permit violation</span>'. </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="stacked2" value="option2">
                            <label class="form-check-label" for="stacked2">Revoke system access for 'jlancer' <a href="#" class="small font-italic" data-toggle="popover" data-placement="bottom" title="Warnings for 'jlancer'" data-content="<div class='border-bottom'>General policy violation</div><ul class='small list-unstyled mb-2'><li>06/26/2017</li><li>09/06/2017</li></ul><div class='border-bottom'>Parking permit violation</div><ul class='small list-unstyled mb-2'><li>07/26/2017</li></ul>">(3 previous warnings)</a></label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer demojs-admin-confirm-adremove" style="display:none">
                <button class="btn btn-primary demojs-btn-deactivate" style="display:none;">Deactivate ad</button>
                <button class="btn btn-primary demojs-btn-deactivatesend" style="display:none">Deactivate ad + send message</button>
                <button class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            </div>
            
            <!--Confirm message sent -->
            
            <div class="modal-header demojs-admin-confirm-messagesent" style="display:none">
                <h2 class="modal-title" id="exampleModalLabel">Action completed</h2>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body demojs-admin-confirm-messagesent" style="display:none">
                <p> This ad has now been deactivated.</p>
            </div>
            <div class="modal-footer demojs-admin-confirm-messagesent" style="display:none">
                <button class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            
            <!--Confirm message sent -->
            
            <div class="modal-header demojs-admin-confirm-addeactmessagesent" style="display:none">
                <h2 class="modal-title" id="exampleModalLabel">Actions completed</h2>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body demojs-admin-confirm-addeactmessagesent" style="display:none">
                <p> This ad has now been deactivated and a message has been sent to user 'jlancer'. You may review actions taken against this user in <a href="admin-restrictedusers.php">Restricted users</a>. </p>
            </div>
            <div class="modal-footer demojs-admin-confirm-addeactmessagesent" style="display:none">
                <button class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
