
<div class="modal post-detail fade" id="admin_ad_notreported" tabindex="-1" role="dialog" aria-labelledby="admin_ad_notreported" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header demojs-admin-defaultview" >
                <h2 class="modal-title" id="exampleModalLabel">Math-M211 and M212 Textbook</h2>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body demojs-admin-defaultview" >
                <dl class="row">
                    <dt class="sr-only">
                        <message key="global.ad.field.price">Price</message>
                    </dt>
                    <dd class="col-12 ccf-postdetail-title">$20</dd>
                    <dt class="sr-only">
                        <message key="global.ad.field.postDate">Post Date</message>
                    </dt>
                    <dd class="col-auto"><span class="font-italic small">2/14/18</span></dd>
                    <dt class="sr-only">Campus</dt>
                    <dd class="col-auto small ccf-postdetail-market"><i class="fa fa-map-marker"></i> IU Kokomo</dd>
                    <dt class="sr-only">
                        <message key="global.ad.field.image">Images</message>
                    </dt>
                    <dd class="col-12">
                        <ccf-image-slider>
                            <div class="overflow mb-3" hammer-options="{&quot;touchAction&quot;: &quot;pan-y&quot;}" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                <div class="inner" style="width: 200%; margin-left: 0%;"> <img alt="" src="../img/post-pics/mathbook.jpg" style="width: 50%;"><img alt="" src="../img/post-pics/1105499015MarkVITen5.jpg" style="width: 50%;"> </div>
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
                    <dd class="col-12 pre-wrap">Used textbook for Math 112. Great condition - come and get it. Auctor Platea varius volutpat. Ac vivamus lobortis natoque tincidunt aptent aliquet phasellus felis. Cubilia natoque luctus donec proin vehicula.</dd>
                    <dt class="col-sm-3">
                        <message key="global.ad.field.contact">Contact</message>
                    </dt>
                    <dd class="col-sm-9">812-555-4567</dd>
                    <dt class="col-sm-3">
                        <message key="global.ad.field.email">Email</message>
                    </dt>
                    <dd class="col-sm-9"><a href="mailto:thrclark@iu.edu">jlancer@iu.edu</a></dd>
                    <dt class="col-sm-3">Status</dt>
                    <dd class="col-sm-9">Active</dd>
                    <dt class="col-sm-3">Ad Purpose</dt>
                    <dd class="col-sm-9">For sale</dd>
                    <dt class="col-sm-3">Posted</dt>
                    <dd class="col-sm-9">02/25/2018 3:26pm</dd>
                    <dt class="col-sm-3">Expires</dt>
                    <dd class="col-sm-9">03/25/2018 3:26pm</dd>
                </dl>
            </div>
     
            <div class="modal-footer demojs-admin-defaultview" > <a class="btn btn-primary demojs-btn-deactivatead" href="#">Deactivate ad...</a>  <button class="btn btn-outline-primary" data-dismiss="modal">Close</button></div>
            
          
            <!-- Take actions-->
            
            <div class="modal-header demojs-admin-confirm-adremove" style="display:none">
                <h2 class="modal-title" id="exampleModalLabel">Ad deactivation</h2>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body demojs-admin-confirm-adremove" style="display:none">
                <div class="font-weight-bold mb-3 mt-3"> Does this ad violate policy? </div>
                <div class="form-check demojs-adminactiontoggle">
                    <input class="form-check-input" type="radio" name="takeactiontoggle" id="takeadminaction" value="3">
                    <label class="form-check-label" for="takeadminaction"> Yes, deactivate ad and take administrative actions. </label>
                </div>
                <div class="form-check demojs-adminactiontoggle">
                    <input class="form-check-input" type="radio" name="takeactiontoggle" id="justdeactivate1" value="2">
                    <label class="form-check-label" for="justdeactivate1"> No, just deactivate this ad. </label>
                </div>
                <div id="showadminaction" style="display:none" class="desc">
                    <form class="">
                        <fieldset >
                            <legend class="pt-3">Message user</legend>
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
                        </fieldset>
                        <fieldset>
                            <legend class="pt-3">Administrative</legend>
                            <div class="font-weight-bold mb-1 mt-3">Deactivate other active ads by 'jlancer'</div>
                            <!-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="otherad00" checked disabled>
                                <label class="form-check-label" for="otherad00"> Math-M211 and M212 Textbook </label>
                            </div>-->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="otherad1">
                                <label class="form-check-label" for="otherad1"> Math-M211 and M212 Text <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="otherad2">
                                <label class="form-check-label" for="otherad2"> Math-M211 and M212 bo0k <a href="#" class="small font-italic demojs-btn-viewotherad">(view)</a> </label>
                            </div>
                            <div class="font-weight-bold mb-1 mt-3">Log an infraction for 'jlancer'? <a href="#" class="small font-italic" data-toggle="popover" data-placement="bottom" title="Infractions for 'jlancer'" data-content="<div class='border-bottom'>Fraudulent activity</div><ul class='small list-unstyled mb-2'><li>06/26/2017</li><li>09/06/2017</li></ul><div class='border-bottom'>Selling IU parking permit</div><ul class='small list-unstyled mb-2'><li>07/26/2017</li></ul>">(3 previous infractions)</a></div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios22" id="stacked4" value="option1">
                                <label class="form-check-label" for="stacked4">Do not log any infractions. </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios22" id="stacked5" value="option1">
                                <label class="form-check-label" for="stacked5">Log infraction for '<span class="demojs-reasonvalue1">Parking permit violation</span>'. </label>
                            </div>
                            <div class="font-weight-bold mb-1 mt-3">Revoke system access for 'jlancer'?</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="revokeaccess">
                                <label class="form-check-label" for="revokeaccess"> Yes, revoke access.</label>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="modal-footer demojs-admin-confirm-adremove" style="display:none">
                <button class="btn btn-primary demojs-btn-deactivate" style="display:none;">Deactivate ad</button>
                <button class="btn btn-primary demojs-btn-performactions" style="display:none">Send message &amp; perform actions</button>
                <button class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            </div>
            
            <!-- View other ads by user-->
            
            <div class="modal-header demojs-admin-otheruserad" style="display:none">
                <h2 class="modal-title" id="exampleModalLabel">Math-M211 and M212 Text</h2>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body demojs-admin-otheruserad" style="display:none">
                <dl class="row">
                    <dt class="sr-only">
                        <message key="global.ad.field.price">Price</message>
                    </dt>
                    <dd class="col-12 ccf-postdetail-title">$20</dd>
                    <dt class="sr-only">
                        <message key="global.ad.field.postDate">Post Date</message>
                    </dt>
                    <dd class="col-auto"><span class="font-italic small">2/14/18</span></dd>
                    <dt class="sr-only">Campus</dt>
                    <dd class="col-auto small ccf-postdetail-market"><i class="fa fa-map-marker"></i> IU Kokomo</dd>
                    <dt class="sr-only">
                        <message key="global.ad.field.image">Images</message>
                    </dt>
                    <dd class="col-12">
                        <ccf-image-slider>
                            <div class="overflow mb-3" hammer-options="{&quot;touchAction&quot;: &quot;pan-y&quot;}" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                <div class="inner" style="width: 200%; margin-left: 0%;"> <img alt="" src="../img/post-pics/mathbook.jpg" style="width: 50%;"><img alt="" src="../img/post-pics/1105499015MarkVITen5.jpg" style="width: 50%;"> </div>
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
                    <dd class="col-12 pre-wrap">Used textbook for Math 112. Great condition - come and get it. Auctor Platea varius volutpat. Ac vivamus lobortis natoque tincidunt aptent aliquet phasellus felis. Cubilia natoque luctus donec proin vehicula.</dd>
                    <dt class="col-sm-3">
                        <message key="global.ad.field.contact">Contact</message>
                    </dt>
                    <dd class="col-sm-9">812-555-4567</dd>
                    <dt class="col-sm-3">
                        <message key="global.ad.field.email">Email</message>
                    </dt>
                    <dd class="col-sm-9"><a href="mailto:thrclark@iu.edu">jlancer@iu.edu</a></dd>
                    <dt class="col-sm-3">Status</dt>
                    <dd class="col-sm-9">Active</dd>
                    <dt class="col-sm-3">Ad Purpose</dt>
                    <dd class="col-sm-9">For sale</dd>
                    <dt class="col-sm-3">Posted</dt>
                    <dd class="col-sm-9">02/25/2018 3:26pm</dd>
                    <dt class="col-sm-3">Expires</dt>
                    <dd class="col-sm-9">03/25/2018 3:26pm</dd>
                </dl>
            </div>
            <div class="modal-footer demojs-admin-otheruserad" style="display:none">
                <button class="btn btn-outline-primary demojs-btn-deactivatead"> <span class="rbt-icon-chevron-left ml-0"></span> Back</button>
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
                <div class="font-weight-bold mb-1 mt-3"> The following actions have been completed:</div>
                <ul>
                    <li>Message was sent to user 'jlancer'. </li>
                    <li>The following ads were deactivated:
                        <ul>
                            <li>Math-M211 and M212 Textbook</li>
                            <li>Math-M211 and M212 Text</li>
                            <li>Math-M211 and M212 bo0k</li>
                        </ul>
                    </li>
                    <li>An infraction was logged for user 'jlancer' for 'Fraudulent activity'.</li>
                    <li>System access was revoked for user 'jlancer'.</li>
                </ul>
                <p>You may review/modify actions taken against this user in <a href="admin-usermaintenance1.php">User management</a>. </p>
            </div>
            <div class="modal-footer demojs-admin-confirm-addeactmessagesent" style="display:none">
                <button class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
