<?php 
$audience = 'main';
$page_title = 'Post ad';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/main-styles.php') ?>
<style>
.bs-datepicker {
	position: absolute;
	display: none;
}
</style>
</head>
<body>
<div id="main">
    <?php include('includes/main-appheader.php') ?>
    <section class="main-content pt-3" role="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-md-8">
                    <section id="policy" class="mb-5 pb-3">
                        <h1 class="mb-2">
                            <message>Post ad</message>
                        </h1>
                        <hr>
                        <p><strong>Ad Policy</strong></p>
                        <p>The IU Classifieds contain items of interest to the Indiana University community. Please remember that the use of the University's computer network for these messages is a privilege extended to students and employees for personal, non-commercial use. University resources are not allowed to be used for the promotion of commercial or personal businesses. In addition, the use of IU Classifieds to promote or provide pornographic materials or sexual services is strictly prohibited.  The buying or selling of IU parking permits is prohibited as parking permits are the property of the university. The terms of any transactions are between the buyer and seller. Classifieds may contain office telephone numbers; however, it is the shared responsibility of supervisors and employees to assure that this privilege is not abused. Honor all copyrights when posting images or text in the Classifieds.</p>
                        <p>Any housing postings must follow Federal and State laws. Please read <a href="http://www.craigslist.org/about/FHA" target="_blank">Fair Housing laws.</a> </p>
                        <p>By using this site, you agree to abide by Indiana Universitys "Appropriate Technology Use" Policies as outlined by the <a href="http://policies.iu.edu/policies/categories/information-it/it/IT-01.shtml" target="_blank"> Information Policy Office </a> and to use the Classifieds appropriately. These pages are not intended for solicitation, political purposes and publishing opinions, nor are they to be used to make jokes or mislead others. The University reserves the right to remove any posting that it deems inappropriate.</p>
                        <p>Questions regarding the IU Classifieds may be addressed to <a href="mailto:one@iu.edu">one@iu.edu</a> </p>
                        <p><strong>Do you accept these terms?</strong></p>
                        <div class="text-left">
                            <button class="btn btn-primary" id="acceptPolicy">Accept</button>
                            <a href="main-home.php" class="btn btn-outline-primary">Decline</a> </div>
                    </section>
                    <section id="postform" style="display:none" class="mb-5 pb-3">
                        <h1 class="mb-2">
                            <message key="main.header.ad" ng-reflect-key="main.header.ad">Post ad</message>
                        </h1>
                        <hr>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="titleLabel">
                                            <message key="global.ad.field.title" ng-reflect-key="global.ad.field.title">Title</message>
                                            <small>
                                            <message key="global.ad.field.required" ng-reflect-key="global.ad.field.required">(required)</message>
                                            </small></label>
                                        <div class="rbt-charcount">
                                            <input type="text" aria-labelledby="titleLabel" formcontrolname="title" ng-reflect-name="title" class="form-control ccf-hide-validation-success" id="titleLabel" required>
                                            <div class="invalid-feedback"><span class="rbt-icon-circle-close" aria-hidden="true"></span> A <span class="font-weight-bold">Title</span> is required. </div>
                                            <span class="badge badge-success" id="titleLabel_badge"><span id="titleLabel_counter">0</span></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label" for="descriptionLabel">
                                            <message key="global.ad.field.description" ng-reflect-key="global.ad.field.description">Description</message>
                                        </label>
                                        <div class="rbt-charcount">
                                            <textarea aria-labelledby="descriptionLabel" class="form-control ccf-hide-validation-success" formcontrolname="description" rows="8" ng-reflect-name="description" id="descriptionLabel"></textarea>
                                            <span class="badge badge-success" id="descriptionLabel_badge"><span id="descriptionLabel_counter">0</span></span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="contactNameLabel">
                                            <message key="global.ad.field.title" ng-reflect-key="global.ad.field.title">Contact Info</message>
                                            <small>
                                            <message key="global.ad.field.required" ng-reflect-key="global.ad.field.required">(required)</message>
                                            </small></label>
                                        <div class="rbt-charcount">
                                            <input type="text" aria-labelledby="contactNameLabel" formcontrolname="title" ng-reflect-name="title" class="form-control ccf-hide-validation-success" id="contactNameLabel" placeholder="" required>
                                            <div class="invalid-feedback"><span class="rbt-icon-circle-close" aria-hidden="true"></span> A <span class="font-weight-bold">Contact</span> is required. </div>
                                            <span class="badge badge-success" id="contactNameLabel_badge"><span id="contactNameLabel_counter">0</span></span> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="textinput-full">
                                            <message key="global.ad.field.category" ng-reflect-key="global.ad.field.category">Category</message>
                                            <span class="subLabel small">
                                            <message key="global.ad.field.required" ng-reflect-key="global.ad.field.required">(required)</message>
                                            </span></label>
                                        <select class="form-control ccf-hide-validation-success" id="exampleFormControlSelect1" required>
                                            <option selected></option>
                                            <option value="1000" ng-reflect-value="1000">Vehicles</option>
                                            <option value="1001" ng-reflect-value="1001">Announcements</option>
                                            <option value="1002" ng-reflect-value="1002">Activity Partners</option>
                                            <option value="1003" ng-reflect-value="1003">Antiques and Collectables</option>
                                            <option value="1004" ng-reflect-value="1004">Books</option>
                                            <option value="1005" ng-reflect-value="1005">Electronics</option>
                                            <option value="1006" ng-reflect-value="1006">Furniture</option>
                                            <option value="1007" ng-reflect-value="1007">Roommates &amp; Sublets</option>
                                        </select>
                                        <div class="invalid-feedback"><span class="rbt-icon-circle-close" aria-hidden="true"></span> A <span class="font-weight-bold">Category</span> is required. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="priceLabel">
                                            <message key="global.ad.field.price" ng-reflect-key="global.ad.field.price">Price</message>
                                        </label>
                                        <div class="rbt-charcount">
                                            <input type="text" aria-labelledby="priceLabel" formcontrolname="title" ng-reflect-name="title" class="form-control ccf-hide-validation-success" id="priceLabel">
                                            <span class="badge badge-success" id="priceLabel_badge"><span id="priceLabel_counter">0</span></span> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label class="control-label" id="marketIdLabel">Campus</label>
                                        <select class="form-control ccf-hide-validation-success" id="exampleFormControlSelect1" required>
                                            <option selected></option>
                                            <option value="100" ng-reflect-value="100">Bloomington (IUB)</option>
                                            <option value="102" ng-reflect-value="102">Kokomo (IUK)</option>
                                        </select>
                                        <div class="invalid-feedback"><span class="rbt-icon-circle-close" aria-hidden="true"></span> A <span class="font-weight-bold">Campus</span> is required. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label class="control-label" id="typeLabel">
                                            <message key="global.ad.field.type" ng-reflect-key="global.ad.field.type">Ad Purpose</message>
                                        </label>
                                        <select class="form-control ccf-hide-validation-success" id="exampleFormControlSelect1">
                                            <option selected></option>
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
                                            <input type="text" class="form-control ccf-hide-validation-success" id="dateLabel" placeholder="mm/dd/yyyy" aria-label="" aria-describedby="basic-addon2" required>
                                            <div class="input-group-append"> <span class="input-group-text" id="basic-addon2"><i aria-hidden="true" class="fa fa-calendar"></i></span> </div>
                                            <div class="invalid-feedback"><span class="rbt-icon-circle-close" aria-hidden="true"></span> An <span class="font-weight-bold">Expiration Date</span> is required. </div>
                                        </div>
                                        <div class="bs-datepicker">
                                            <div class="bs-datepicker-container">
                                                <div class="bs-calendar-container">
                                                    <div>
                                                        <bs-days-calendar-view>
                                                            <bs-calendar-layout>
                                                                <div class="bs-datepicker-head">
                                                                    <bs-datepicker-navigation-view>
                                                                        <button class="previous" style="visibility: visible;"><span>‹</span> </button>
                                                                        <button class="current"><span>February</span> </button>
                                                                        <button class="current"><span>2018</span></button>
                                                                        <button class="next" style="visibility: visible;"><span>›</span> </button>
                                                                    </bs-datepicker-navigation-view>
                                                                </div>
                                                                <div class="bs-datepicker-body">
                                                                    <table class="days weeks" role="grid">
                                                                        <thead>
                                                                            <tr>
                                                                                <th></th>
                                                                                <th aria-label="weekday">Su </th>
                                                                                <th aria-label="weekday">Mo </th>
                                                                                <th aria-label="weekday">Tu </th>
                                                                                <th aria-label="weekday">We </th>
                                                                                <th aria-label="weekday">Th </th>
                                                                                <th aria-label="weekday">Fr </th>
                                                                                <th aria-label="weekday">Sa </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="week"><span>9</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="is-other-month">25</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="is-other-month">26</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="is-other-month">27</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="is-other-month">28</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="">1</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="">2</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]">3</span></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="week"><span>10</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]">4</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]">5</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]">6</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="">7</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]">8</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]">9</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]">10</span></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="week"><span>11</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]">11</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]">12</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]">13</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="">14</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]">15</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="selected">16</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">17</span></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="week"><span>12</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">18</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">19</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">20</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">21</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">22</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">23</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">24</span></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="week"><span>13</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">25</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">26</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">27</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">28</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">29</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">30</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled">31</span></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="week"><span>14</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled is-other-month">1</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled is-other-month">2</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled is-other-month">3</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled is-other-month">4</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled is-other-month">5</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled is-other-month">6</span></td>
                                                                                <td role="gridcell"><span bsdatepickerdaydecorator="" ng-reflect-day="[object Object]" class="disabled is-other-month">7</span></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </bs-calendar-layout>
                                                        </bs-days-calendar-view>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label class="control-label" id="emailLabel">
                                            <message key="global.ad.field.email" ng-reflect-key="global.ad.field.email">Email</message>
                                        </label>
                                        <input aria-labelledby="emailLabel" class="form-control" value="thrclark@iu.edu" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="font-weight-bold rbt-ts-14">Upload Images</div>
                                <div class="form-group">
                                    <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" ng-reflect-array-name="media" ng-reflect-max-images="4" ng-reflect-image-dimensions="NO_RESIZE" ng-reflect-data-is-available="true">
                                        <div ng-reflect-form="[object Object]" class="  ng-dirty">
                                            <div ng-reflect-name="media" class=" ng-valid ng-dirty">
                                                <image-upload _nghost-c0="" ng-reflect-before-upload="function (metadata) {" ng-reflect-button-caption="Upload Image" ng-reflect-drop-box-message="or drop image here" ng-reflect-file-too-large-message="Image must be no larger than 1" ng-reflect-headers="[object Object]" ng-reflect-max-file-size="10485760" ng-reflect-preview="false" ng-reflect-supported-extensions="png,jpg,jpeg" ng-reflect-url="/ccf2-unt/upload">
                                                    <div _ngcontent-c0="" filedrop="" class="img-ul" ng-reflect-ng-class="img-ul" ng-reflect-accept="image/png,image/jpg,image/jpeg">
                                                        <div _ngcontent-c0="" class="img-ul-file-upload img-ul-hr-inline-group" >
                                                            <label _ngcontent-c0="" class="btn btn-sm btn-outline-primary" tabindex="0" id="ButtonProgressDemo"> <span _ngcontent-c0="" id="uploadbtnlabel">Upload Image</span>
                                                                <input _ngcontent-c0="" class="sr-only" multiple type="file" accept="image/png,image/jpg,image/jpeg">
                                                            </label>
                                                            <label _ngcontent-c0="" class="img-ul-clear img-ul-button"> <span _ngcontent-c0="">Clear</span> </label>
                                                            <div _ngcontent-c0="" class="img-ul-drag-box-msg">or drop image here</div>
                                                        </div>
                                                    </div>
                                                </image-upload>
                                                <div class="img-preview" dnd-sortable-container="" draggable="false" ng-reflect-sortable-data="" style="cursor: pointer;">
                                                    <div dnd-sortable="" draggable="true" ng-reflect-index="0" style="cursor: pointer;" class=""> <img alt="" tabindex="0" ng-reflect-name="0" src="http://via.placeholder.com/300x200" class="  ng-valid">
                                                        <button class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> <span class="sr-only">
                                                        <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                                        </span> </button>
                                                    </div>
                                                    <div dnd-sortable="" draggable="true" ng-reflect-index="1" style="cursor: pointer;" class=""> <img alt="" tabindex="0" ng-reflect-name="1" src="http://via.placeholder.com/300x200" class="  ng-valid">
                                                        <button class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> <span class="sr-only">
                                                        <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                                        </span> </button>
                                                    </div>
                                                    <div dnd-sortable="" draggable="true" ng-reflect-index="2" style="cursor: pointer;" class=""> <img alt="" tabindex="0" ng-reflect-name="2" src="http://via.placeholder.com/300x200" class="  ng-valid">
                                                        <button class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> <span class="sr-only">
                                                        <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                                        </span> </button>
                                                    </div>
                                                </div>
                                                <div class="validation-fieldmessage"> </div>
                                            </div>
                                        </div>
                                    </ccf-image-upload>
                                </div>
                            </div>
                            <div class="alert alert-danger fade show" role="alert" style="display:none">
                                <p class="alert-heading">Errors on page</p>
                                <p class="ccf-instructional-text">Please review the fields on this form for any needed corrections.</p>
                            </div>
                            <p class="text-right">
                                <button class="btn btn-primary" id="submitForm" type="submit">Save</button>
                                <a class="btn btn-outline-primary" href="main-home.php">
                                    <message key="global.buttons.cancel" ng-reflect-key="global.buttons.cancel">Cancel</message>
                                </a> </p>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <?php include('includes/main-footer-menu.php') ?>
</div>
<?php include('includes/main-custom-footer.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
<script>
    $(document).ready(function() {
        $("#acceptPolicy").click(function() {
            $("#policy").hide();
            $("#postform").show();
        });
    });
</script> 
<script>
 $(document).ready(function() {
     $("#ButtonProgressDemo").click(function() {
		 $("#ButtonProgressDemo").removeClass("btn-outline-primary");
         $("#ButtonProgressDemo").addClass("btn-primary rbt-btn-progress");
		 $(".img-ul-drag-box-msg").hide();
         $("#uploadbtnlabel").fadeOut("fast", function() {
             $("#uploadbtnlabel").text(($(".btn-label").text() == 'Uploading...') ? 'Upload' : 'Uploading...').fadeIn(200);
         })
     });
 });

</script> 
<script>
    $(document).ready(function() {
      
        $("#titleLabel").keyup(function() {
            var length = $(this).val().length;
			length = 200 - length;
            $('#titleLabel_counter').text(length);
            if ($("#titleLabel").val().length > 200) {
                $("#titleLabel_badge").last().addClass("badge-danger");
            } else {
                $("#titleLabel_badge").last().removeClass("badge-danger");
            }
        });
       
        $("#descriptionLabel").keyup(function() {
            var length = $(this).val().length;
			length = 2000 - length;
            $('#descriptionLabel_counter').text(length);
            if ($("#descriptionLabel").val().length > 2000) {
                $("#descriptionLabel_badge").last().addClass("badge-danger");
            } else {
                $("#descriptionLabel_badge").last().removeClass("badge-danger");
            }
        });
       

        $("#contactNameLabel").keyup(function() {
            var length = $(this).val().length;
			length = 50 - length;
            $('#contactNameLabel_counter').text(length);
            if ($("#contactNameLabel").val().length > 50) {
                $("#contactNameLabel_badge").last().addClass("badge-danger");
            } else {
                $("#contactNameLabel_badge").last().removeClass("badge-danger");
            }
        });
        

        $("#priceLabel").keyup(function() {
            var length = $(this).val().length;
			length = 20 - length;
            $('#priceLabel_counter').text(length);	
            if ($("#priceLabel").val().length > 20) {
                $("#priceLabel_badge").last().addClass("badge-danger");
            } else {
                $("#priceLabel_badge").last().removeClass("badge-danger");
            }
        });
        
    });
</script> 
<script>
    $(document).ready(function() {
        $("#dateLabel").focusin(function() {
            $(".bs-datepicker").show();
        }).focusout(function() {
            $(".bs-datepicker").hide();
        });
    });
</script> 
<script>
    $(document).ready(function() {
       $("#submitForm").click(function(){
    $(".alert-danger").show();
});

    });
</script> 
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>
