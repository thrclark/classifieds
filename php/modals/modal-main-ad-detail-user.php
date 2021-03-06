
<div class="modal fade" id="post_detail" tabindex="-1" role="dialog" aria-labelledby="post_detail" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header demojs-view-posting">
                <h2 class="modal-title" id="exampleModalLabel">For sale: Selmer VI Tenor Sax</h2>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body demojs-view-posting">
                <dl class="row">
                    <dt class="sr-only">
                        <message key="global.ad.field.price">Price</message>
                    </dt>
                    <dd class="col-12 ccf-postdetail-title">$1400.00 or best offer</dd>
                    <dt class="sr-only">
                        <message key="global.ad.field.postDate">Post Date</message>
                    </dt>
                    <dd class="col-auto"><span class="font-italic small">Jun 14</span></dd>
                    <dt class="sr-only">Campus</dt>
                    <dd class="col-auto small ccf-postdetail-market"><i class="fa fa-map-marker"></i> iuk</dd>
                    <dt class="sr-only">
                        <message key="global.ad.field.image">Images</message>
                    </dt>
                    <dd class="col-12">
                        <ccf-image-slider>
                            <div class="overflow mb-3" hammer-options="{&quot;touchAction&quot;: &quot;pan-y&quot;}" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                <div class="inner" style="width: 200%; margin-left: 0%;"> <img alt="" src="../img/post-pics/1105499015MarkVITen5.jpg" style="width: 50%;"><img alt="" src="../img/post-pics/1105499015MarkVITen5.jpg" style="width: 50%;"> </div>
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
                    <dd class="col-12 pre-wrap">This is a beautiful original lacquer Mark VI tenor saxophone from 1962, serial number 99015. The lacquer finish on the horn is in exquisite condition. Its original finish displays a very dark honey tint which is perfectly complemented by the crisp American floral engraving. The lacquer condition is about as clean and pristine as you will ever see. </dd>
                    <dt class="col-sm-3">
                        <message key="global.ad.field.contact">Contact</message>
                    </dt>
                    <dd class="col-sm-9">812-555-4567</dd>
                    <dt class="col-sm-3">
                        <message key="global.ad.field.email">Email</message>
                    </dt>
                    <dd class="col-sm-9"><a href="mailto:thrclark@iu.edu">sampleUser@iu.edu</a></dd>
                </dl>
                <!-- <a class="btn btn-link btn-responsive font-weight-normal font-italic" href="main-home-user.php"> 
        			<span>
                        <message key="main.details.share">Ads from this user</message>
                    </span> 
                </a> -->
            </div>
            <div class="modal-footer demojs-view-posting">
        		<button class="btn btn-link btn-responsive font-weight-normal font-italic demojs-btn-reportad" style="align-items: left;">Report this ad</button>
        		<a angulartics2on="click" angularticsaction="share" angularticscategory="ad" class="btn btn-outline-primary btn-responsive pull-right" href="mailto:?subject=IU%20Classifieds%3A%20Box%20of%20Stuff&amp;body=https%3A%2F%2Fclassifieds-stg.uits.iu.edu%2Fclassifieds%2Fpostings(details%3A180102)"> 
        			<i class="fa fa-envelope-o"></i> 
        			<span>
                        <message key="main.details.share">Share</message>
                    </span> 
                </a>
        		<button class="btn btn-outline-primary btn-responsive favorite pull-right" type="button"> 
        			<i aria-hidden="true" class="fa fa-star-o"></i> 
        			<span class="sr-only">
                    	<message key="main.watchlist.add">Add to Watchlist</message>
                    </span> 
                    <span aria-hidden="true">
                    	<message key="main.watchlist">Watchlist</message>
                    </span> 
                </button>
                    
      		</div>
                
                
                
                
            
            
            
            
            <div class="modal-header demojs-report-post" style=" display:none">
                <h2 class="modal-title" id="exampleModalLabel">Report this ad</h2>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body demojs-report-post" style=" display:none">
                <p>Please provide more details regarding your decision to report this ad. Your report will be reviewed, and appropriate actions will be taken if it is determined that this ad is in violation of our policy.
                    <button class="btn btn-link font-weight-normal p-0 demojs-btn-viewpolicy"> View policy</button>
                </p>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Reason for report <span class="small font-weight-normal font-italic">(required)</span></label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Please select:</option>
                            <option>Fraudulent activity</option>
                            <option>Posting offensive material</option>
                            <option>Promoting a personal/commercial business</option>
                            <option>Promoting a political/social agenda</option>
                            <option>Selling IU parking permit</option>
                            <option>Fake ad</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Additional detail <span class="small font-weight-normal font-italic">(required)</span></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer demojs-report-post" style="display:none">
                <div class="rbt-button-group rbt-button-group-right">
                    <button class="btn btn-primary demojs-btn-submitreport">Submit report</button>
                    <button class="btn btn-outline-primary demojs-btn-cancelreport">Cancel</button>
                </div>
            </div>
            <div class="modal-header demojs-view-policy" style=" display:none">
                <h2 class="modal-title" id="exampleModalLabel">Policy</h2>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body demojs-view-policy" style="display:none">
                <div class="ccf-postdetail-title">About this service</div>
                <p>The IU Classifieds contain items of interest to the Indiana University community. Please remember that the use of the University's computer network for these messages is a privilege extended to students and employees for personal, non-commercial use. University resources are not allowed to be used for the promotion of commercial or personal businesses. In addition, the use of IU Classifieds to promote or provide pornographic materials or sexual services is strictly prohibited.  The buying or selling of IU parking permits is prohibited as parking permits are the property of the university. The terms of any transactions are between the buyer and seller. Classifieds may contain office telephone numbers; however, it is the shared responsibility of supervisors and employees to assure that this privilege is not abused. Honor all copyrights when posting images or text in the Classifieds.</p>
                <p>Any housing postings must follow Federal and State laws. Please read <a href="http://www.craigslist.org/about/FHA" target="_blank">Fair Housing laws.</a> </p>
                <p>By using this site, you agree to abide by Indiana Universitys "Appropriate Technology Use" Policies as outlined by the Information Policy Office at <a href="http://policies.iu.edu/policies/categories/information-it/it/IT-01.shtml" target="_blank">http://policies.iu.edu/policies/categories/information-it/it/IT-01.shtml</a> and to use the Classifieds appropriately. These pages are not intended for solicitation, political purposes and publishing opinions, nor are they to be used to make jokes or mislead others. The University reserves the right to remove any posting that it deems inappropriate.</p>
                <p>Questions regarding the IU Classifieds may be addressed to <a href="mailto:one@iu.edu">one@iu.edu</a> </p>
            </div>
            <div class="modal-footer demojs-view-policy" style="display:none"> <a href="#" class="btn btn-outline-primary demojs-btn-closepolicy"><span class="rbt-icon-chevron-left ml-0"></span> Back</a> </div>
            <div class="modal-header demojs-report-confirm" style=" display:none">
                <h2 class="modal-title" id="exampleModalLabel">Report submitted</h2>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body demojs-report-confirm" style=" display:none">
                <p>Your report has been submitted and will be reviewed. Thank you. </p>
            </div>
            <div class="modal-footer demojs-report-confirm" style=" display:none">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
