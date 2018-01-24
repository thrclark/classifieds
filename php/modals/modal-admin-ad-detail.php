<div class="modal post-detail fade" id="post_detail_active" tabindex="-1" role="dialog" aria-labelledby="post_detail" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModal1Label">For Sale: Selmer VI Tenor Sax</h3>
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close" style=""> <span aria-hidden="true"> <i class="fa fa-close" aria-hidden="true"></i> </span> </button>
            </div>
            <div class="modal-body post-details-body">
                <div class="row">
                    <div class="col">
                        <div class="post-price">$11,225.00</div>
                    </div>
                    <div class="col align-self-end text-right">
                        <div class=" ad-datelocation"><span class="ad-datelocation-date">Oct 31</span> | <span class="ad-datelocation-location"> <i class="fa fa-map-marker" aria-hidden="true"></i> IUK</span></div>
                    </div>
                </div>
                <hr>
                <div class="your-class">
                    <div> <img src="../img/post-pics/1105499015MarkVITen1.jpg" class="img-fluid img-thumbnail " alt=""/></div>
                    <div> <img src="../img/post-pics/1105499015MarkVITen2.jpg" class="img-fluid img-thumbnail " alt=""/></div>
                    <div> <img src="../img/post-pics/1105499015MarkVITen3.jpg" class="img-fluid img-thumbnail " alt=""/></div>
                    <div> <img src="../img/post-pics/1105499015MarkVITen4.jpg" class="img-fluid img-thumbnail " alt=""/></div>
                    <div> <img src="../img/post-pics/1105499015MarkVITen5.jpg" class="img-fluid img-thumbnail " alt=""/></div>
                    <div> <img src="../img/post-pics/1105499015MarkVITen6.jpg" class="img-fluid img-thumbnail " alt=""/></div>
                    <div> <img src="../img/post-pics/1105499015MarkVITen7.jpg" class="img-fluid img-thumbnail " alt=""/></div>
                    <div> <img src="../img/post-pics/1105499015MarkVITen8.jpg" class="img-fluid img-thumbnail " alt=""/></div>
                </div>
                <dl class="row">
                    <dt class="col-sm-12">Description</dt>
                    <dd class="col-sm-12">This is a beautiful original lacquer Mark VI tenor saxophone from 1962, serial number 99015. The lacquer finish on the horn is in exquisite condition. Its original finish displays a very dark honey tint which is perfectly complemented by the crisp American floral engraving. The lacquer condition is about as clean and pristine as you will ever see. </dd>
                    <dt class="col-sm-12">Contact</dt>
                    <dd class="col-sm-12"> 812-555-4567 </dd>
                    <dt class="col-sm-12">Email</dt>
                    <dd class="col-sm-12"><a href="mailto:thrclark@iu.edu">thrclark@iu.edu</a></dd>
                </dl>
            </div>
            <div class="modal-footer"> 
                
                <!--buttons for admin/moderator-->
                <div <?php if ($audience == 'admin') { echo 'class="d-block"'; } ?>  class="d-none">
                    <button type="button" class="btn btn-smmm btn-primary btn-report">Remove Ad</button>
                </div>
            </div>
            <div class="modal-body report-post" style="display:none">
                <h4>Remove this ad</h4>
                <p>Please provide a reason for removing this ad. </p>
                <form>
                    <div class="form-group">
                        <label for="postedby">Posted by</label>
                        <input class="form-control" type="text" id="postedby" placeholder="thrclark" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Reason for removal</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Fraudulent activity</option>
                            <option>Contains offensive material</option>
                            <option>Promotes personal/commercial business</option>
                            <option>Promotes a political/social agenda</option>
                            <option>Selling IU parking permit</option>
                            <option>This is a fake ad</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Additional information (optional)</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    
                    
                    
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message sent to poster (thrclark)</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    
                    
                    
                    
                    <div class="text-center"><span class="btn btn-link btn-reportcancel">Cancel</span> <span class="btn btn-primary btn-reportsubmit">Submit</span></div>
                </form>
            </div>
            <div class="modal-body report-post-confirm" style="display:none">
                <h4>Ad Removed</h4>
                <p>This ad was posted by the user '<span class="font-weight-bold">thrclark</span>'. Would you like to take administrative action on this user account?</p>
                
                 <div class="text-center"><span class="btn btn-outline-secondary">No</span> <span class="btn btn-primary">Yes</span></div>
                 
                 
            </div>
        </div>
    </div>
</div>
