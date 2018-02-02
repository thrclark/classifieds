<?php 
$audience = 'main';
$page_title = 'cat_all';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/main-styles.php') ?>
</head>
<body>
<?php include('includes/main-mobiledrawer.php') ?>	
<div id="main">
    <?php include('includes/main-appheader.php') ?>
    <section class="main-content pt-3" role="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-md-8">
                    <section id="policy" class="mb-5">
                        <h2 class="h3">
                            <message>Ad Policy</message>
                        </h2>
                        <hr>
                        <p>The IU Classifieds contain items of interest to the Indiana University community. Please remember that the use of the University's computer network for these messages is a privilege extended to students and employees for personal, non-commercial use. University resources are not allowed to be used for the promotion of commercial or personal businesses. In addition, the use of IU Classifieds to promote or provide pornographic materials or sexual services is strictly prohibited.  The buying or selling of IU parking permits is prohibited as parking permits are the property of the university. The terms of any transactions are between the buyer and seller. Classifieds may contain office telephone numbers; however, it is the shared responsibility of supervisors and employees to assure that this privilege is not abused. Honor all copyrights when posting images or text in the Classifieds.</p>
                        <p>Any housing postings must follow Federal and State laws. Please read <a href="http://www.craigslist.org/about/FHA" target="_blank">Fair Housing laws.</a> </p>
                        <p>By using this site, you agree to abide by Indiana Universitys "Appropriate Technology Use" Policies as outlined by the <a href="http://policies.iu.edu/policies/categories/information-it/it/IT-01.shtml" target="_blank"> Information Policy Office </a> and to use the Classifieds appropriately. These pages are not intended for solicitation, political purposes and publishing opinions, nor are they to be used to make jokes or mislead others. The University reserves the right to remove any posting that it deems inappropriate.</p>
                        <p>Questions regarding the IU Classifieds may be addressed to <a href="mailto:one@iu.edu">one@iu.edu</a> </p>
                        <p><strong>Do you accept these terms?</strong></p>
                        <div class="text-left">
                            <a href="main-home.php" class="btn btn-outline-secondary">Decline</a>
                            <button class="btn btn-primary" id="acceptPolicy">Accept</button>
                        </div>
                    </section>
                    <section id="postform" style="display:none" class="mb-5">
                        <h2 class="h3">
                            <message key="main.header.ad" ng-reflect-key="main.header.ad">Post Ad</message>
                        </h2>
                        <hr>
                        <form novalidate ng-reflect-form="[object Object]" class="ng-untouched ng-pristine ng-invalid">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group form-group-error-main">
                                        <label class="control-label" id="titleLabel">
                                            <message key="global.ad.field.title" ng-reflect-key="global.ad.field.title">Title</message>
                                            <span class="subLabel small">
                                            <message key="global.ad.field.required" ng-reflect-key="global.ad.field.required">(required)</message>
                                            </span> </label>
                                        <input aria-labelledby="titleLabel" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="title" ng-reflect-name="title">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label" id="descriptionLabel">
                                            <message key="global.ad.field.description" ng-reflect-key="global.ad.field.description">Description</message>
                                        </label>
                                        <textarea aria-labelledby="descriptionLabel" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="description" rows="8" ng-reflect-name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group form-group-error-main">
                                        <label class="control-label" id="contactNameLabel">
                                            <message key="global.ad.field.contact" ng-reflect-key="global.ad.field.contact">Contact Info</message>
                                            <span class="subLabel small">
                                            <message key="global.ad.field.required" ng-reflect-key="global.ad.field.required">(required)</message>
                                            </span> </label>
                                        <input aria-labelledby="contactNameLabel" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="contactName" ng-reflect-name="contactName">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group form-group-error-main">
                                        <label class="control-label" id="categoryIdLabel">
                                            <message key="global.ad.field.category" ng-reflect-key="global.ad.field.category">Category</message>
                                            <span class="subLabel small">
                                            <message key="global.ad.field.required" ng-reflect-key="global.ad.field.required">(required)</message>
                                            </span> </label>
                                        <select aria-labelledby="categoryIdLabel" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="categoryId" ng-reflect-name="categoryId">
                                            <option value="0: null">
                                            <message key="global.select.blank" ng-reflect-key="global.select.blank"></message>
                                            </option>
                                            <option value="1000" ng-reflect-value="1000">Vehicles</option>
                                            <option value="1001" ng-reflect-value="1001">Announcements</option>
                                            <option value="1002" ng-reflect-value="1002">Activity Partners</option>
                                            <option value="1003" ng-reflect-value="1003">Antiques and Collectables</option>
                                            <option value="1004" ng-reflect-value="1004">Books</option>
                                            <option value="1005" ng-reflect-value="1005">Electronics</option>
                                            <option value="1006" ng-reflect-value="1006">Furniture</option>
                                            <option value="1007" ng-reflect-value="1007">Roommates &amp; Sublets</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label class="control-label" id="priceLabel">
                                            <message key="global.ad.field.price" ng-reflect-key="global.ad.field.price">Price</message>
                                        </label>
                                        <input aria-labelledby="priceLabel" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="price" ng-reflect-name="price">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group form-group-error-main">
                                        <label class="control-label" id="marketIdLabel">Campus</label>
                                        <select aria-labelledby="marketIdLabel" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="marketId" ng-reflect-name="marketId">
                                            <option value="0: null">
                                            <message key="global.select.blank" ng-reflect-key="global.select.blank"></message>
                                            </option>
                                            <option value="100" ng-reflect-value="100">Bloomington (IUB)</option>
                                            <option value="102" ng-reflect-value="102">Koko,o (IUK)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label class="control-label" id="typeLabel">
                                            <message key="global.ad.field.type" ng-reflect-key="global.ad.field.type">Ad Purpose</message>
                                        </label>
                                        <select aria-labelledby="typeLabel" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="type" ng-reflect-name="type">
                                            <option value="0: null">
                                            <message key="global.select.blank" ng-reflect-key="global.select.blank"></message>
                                            </option>
                                            <option value="NEED" ng-reflect-value="NEED">Seeking</option>
                                            <option value="OFFER" ng-reflect-value="OFFER">For Sale</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label class="control-label" id="expireDateLabel">
                                            <message key="global.ad.field.expireDate" ng-reflect-key="global.ad.field.expireDate">Expiration Date</message>
                                        </label>
                                        <div class="input-group">
                                            <input aria-describedby="sizing-addon2" aria-labelledby="expireDateLabel" bsdatepicker="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="expireDate" type="text" ng-reflect-min-date="Fri Feb 02 2018 10:22:33 GMT-0" ng-reflect-max-date="Sun Mar 04 2018 10:22:33 GMT-0" ng-reflect-name="expireDate">
                                            <span class="input-group-addon" id="sizing-addon2"><i aria-hidden="true" class="fa fa-calendar"></i></span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label class="control-label" id="emailLabel">
                                            <message key="global.ad.field.email" ng-reflect-key="global.ad.field.email">Email</message>
                                        </label>
                                        <input aria-labelledby="emailLabel" class="form-control" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                           <!-- <div class="form-group">
                                <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" ng-reflect-array-name="media" ng-reflect-max-images="4" ng-reflect-image-dimensions="NO_RESIZE" ng-reflect-data-is-available="true">
                                    <div ng-reflect-form="[object Object]" class="ng-untouched ng-pristine ng-invalid">
                                        <div ng-reflect-name="media" class="ng-untouched ng-pristine ng-valid">
                                            <image-upload _nghost-c0="" ng-reflect-before-upload="function (metadata) {" ng-reflect-button-caption="Upload Image" ng-reflect-drop-box-message="or drop image here" ng-reflect-headers="[object Object]" ng-reflect-max-file-size="10485760" ng-reflect-preview="false" ng-reflect-supported-extensions="png,jpg,jpeg" ng-reflect-url="/ccf2-unt/upload">
                                                <div _ngcontent-c0="" filedrop="" class="img-ul" ng-reflect-ng-class="img-ul" ng-reflect-accept="image/png,image/jpg,image/jpeg">
                                                    <div _ngcontent-c0="" class="img-ul-file-upload img-ul-hr-inline-group">
                                                        <label _ngcontent-c0="" class="img-ul-upload img-ul-button" tabindex="0"> <span _ngcontent-c0="">Upload Image</span>
                                                            <input _ngcontent-c0="" multiple type="file" accept="image/png,image/jpg,image/jpeg">
                                                        </label>
                                                        <div _ngcontent-c0="" class="img-ul-drag-box-msg">or drop image here</div>
                                                    </div>
                                                </div>
                                            </image-upload>
                                            <div class="img-preview" dnd-sortable-container="" draggable="false" ng-reflect-sortable-data="" style="cursor: pointer;"> </div>
                                            <div class="validation-fieldmessage"> </div>
                                        </div>
                                    </div>
                                </ccf-image-upload>
                            </div>-->
                            <p class="text-right"> <a class="btn btn-outline-secondary" routerlink="/" ng-reflect-router-link="/" href="main-home.php">
                                <message key="global.buttons.cancel" ng-reflect-key="global.buttons.cancel">Cancel</message>
                                </a>
                                <button class="btn btn-primary" type="submit" disabled="">
                                <message key="main.header.button.postAd" ng-reflect-key="main.header.button.postAd">Post Ad</message>
                                </button>
                            </p>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <?php include('includes/main-footer-menu.php') ?>
</div>
<?php include('includes/admin-footerscripts.php') ?>

<script>

    $(document).ready(function() {
        $("#acceptPolicy").click(function() {
            $("#policy").hide();
            $("#postform").show();
        });


    });
</script>






</body>
</html>
