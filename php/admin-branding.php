<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Branding';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/admin-styles.php') ?>
</head>
<body>
<?php include('includes/all-custom-header.php') ?>
<?php include('includes/admin-appheader.php') ?>
<div class="container pt-3">
    <div class="row">
        <div class="col-12">
            <div class="main-content" id="main-content">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <h1>
                            <?php echo $page_title; ?></h1>
                    </div>
                    <div class="col-auto">
                        <div class="form-check rbt-checkbox" >
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="togle_help" value="on" checked>
                                <label class="form-check-label" for="togle_help">Help</label>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-sm table-actions tablesawww tablesaw-stackkk" data-tablesaw-mode="stackkk">
                    <thead>
                        <tr>
                            <th class="w-50"> Name</th>
                            <th class="w-50"> Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Application colors
                                <div class="small helper-text">Choose the color to be used for the header background & accent colors.</div></td>
                            <td><div class="row">
                                    <div class="col-4">
                                        <div class="p-3 ccf-themeset primary">Primary</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="p-3 ccf-themeset accent">Accent</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="p-3 ccf-themeset background">Background</div>
                                    </div>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Application logo  (optional)
                                <div class="small helper-text"> Select an image to be used as an application logo in the header.</div></td>
                            <td><div class="form-group">
                                    <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" ng-reflect-array-name="media" ng-reflect-max-images="4" ng-reflect-image-dimensions="NO_RESIZE" ng-reflect-data-is-available="true">
                                        <div ng-reflect-form="[object Object]" class="ng-untouched ng-invalid ng-dirty">
                                            <div ng-reflect-name="media" class="ng-untouched ng-valid ng-dirty">
                                                <image-upload _nghost-c0="" ng-reflect-before-upload="function (metadata) {" ng-reflect-button-caption="Upload Image" ng-reflect-drop-box-message="or drop image here" ng-reflect-file-too-large-message="Image must be no larger than 1" ng-reflect-headers="[object Object]" ng-reflect-max-file-size="10485760" ng-reflect-preview="false" ng-reflect-supported-extensions="png,jpg,jpeg" ng-reflect-url="/ccf2-unt/upload">
                                                    <div _ngcontent-c0="" filedrop="" class="img-ul" ng-reflect-ng-class="img-ul" ng-reflect-accept="image/png,image/jpg,image/jpeg">
                                                        <div _ngcontent-c0="" class="img-ul-file-upload img-ul-hr-inline-group" >
                                                            <label _ngcontent-c0="" class="img-ul-upload img-ul-button" tabindex="0">
                                                                <span _ngcontent-c0="">Upload Image</span>
                                                                <input _ngcontent-c0="" multiple="" type="file" accept="image/png,image/jpg,image/jpeg">
                                                            </label>
                                                            <label _ngcontent-c0="" class="img-ul-clear img-ul-button">
                                                                <span _ngcontent-c0="">Clear</span>
                                                            </label>
                                                            <div _ngcontent-c0="" class="img-ul-drag-box-msg">or drop image here</div>
                                                        </div>
                                                    </div>
                                                </image-upload>
                                                <div class="img-preview" dnd-sortable-container="" draggable="false" ng-reflect-sortable-data="" style="cursor: pointer;">
                                                    <div dnd-sortable="" draggable="true" ng-reflect-index="0" style="cursor: pointer;" class="">
                                                        <img src="../img/ccf-logo.png" style="height:70px; width:auto" alt=""/>
                                                        <button class="btn btn-sm btn-danger">
                                                        <i class="fa fa-times"></i>
                                                        <span class="sr-only">
                                                        <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                                        </span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="validation-fieldmessage">
                                                </div>
                                            </div>
                                        </div>
                                    </ccf-image-upload>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Application logo - mobile  (optional)
                                <div class="small helper-text"> Select an image to be used as an application logo in the header for mobile devices.</div></td>
                            <td><div class="form-group">
                                    <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" ng-reflect-array-name="media" ng-reflect-max-images="4" ng-reflect-image-dimensions="NO_RESIZE" ng-reflect-data-is-available="true">
                                        <div ng-reflect-form="[object Object]" class="ng-untouched ng-invalid ng-dirty">
                                            <div ng-reflect-name="media" class="ng-untouched ng-valid ng-dirty">
                                                <image-upload _nghost-c0="" ng-reflect-before-upload="function (metadata) {" ng-reflect-button-caption="Upload Image" ng-reflect-drop-box-message="or drop image here" ng-reflect-file-too-large-message="Image must be no larger than 1" ng-reflect-headers="[object Object]" ng-reflect-max-file-size="10485760" ng-reflect-preview="false" ng-reflect-supported-extensions="png,jpg,jpeg" ng-reflect-url="/ccf2-unt/upload">
                                                    <div _ngcontent-c0="" filedrop="" class="img-ul" ng-reflect-ng-class="img-ul" ng-reflect-accept="image/png,image/jpg,image/jpeg">
                                                        <div _ngcontent-c0="" class="img-ul-file-upload img-ul-hr-inline-group" >
                                                            <label _ngcontent-c0="" class="img-ul-upload img-ul-button" tabindex="0">
                                                                <span _ngcontent-c0="">Upload Image</span>
                                                                <input _ngcontent-c0="" multiple type="file" accept="image/png,image/jpg,image/jpeg">
                                                            </label>
                                                            <label _ngcontent-c0="" class="img-ul-clear img-ul-button">
                                                                <span _ngcontent-c0="">Clear</span>
                                                            </label>
                                                            <div _ngcontent-c0="" class="img-ul-drag-box-msg">or drop image here</div>
                                                        </div>
                                                    </div>
                                                </image-upload>
                                                <div class="img-preview" dnd-sortable-container="" draggable="false" ng-reflect-sortable-data="" style="cursor: pointer;">
                                                   
                                                </div>
                                                <div class="validation-fieldmessage"></div>
                                            </div>
                                        </div>
                                    </ccf-image-upload>
                                </div></td>
                        </tr>
                        <tr>
                            <td> Favicon icon (.ico)
                                <div class="small helper-text"> Select a favicon file to be displayed by web browsers next to the URL in the address bar and in browser bookmarks.</div></td>
                            <td><div class="form-group">
                                    <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" ng-reflect-array-name="media" ng-reflect-max-images="4" ng-reflect-image-dimensions="NO_RESIZE" ng-reflect-data-is-available="true">
                                        <div ng-reflect-form="[object Object]" class="ng-untouched ng-invalid ng-dirty">
                                            <div ng-reflect-name="media" class="ng-untouched ng-valid ng-dirty">
                                                <image-upload _nghost-c0="" ng-reflect-before-upload="function (metadata) {" ng-reflect-button-caption="Upload Image" ng-reflect-drop-box-message="or drop image here" ng-reflect-file-too-large-message="Image must be no larger than 1" ng-reflect-headers="[object Object]" ng-reflect-max-file-size="10485760" ng-reflect-preview="false" ng-reflect-supported-extensions="png,jpg,jpeg" ng-reflect-url="/ccf2-unt/upload">
                                                    <div _ngcontent-c0="" filedrop="" class="img-ul" ng-reflect-ng-class="img-ul" ng-reflect-accept="image/png,image/jpg,image/jpeg">
                                                        <div _ngcontent-c0="" class="img-ul-file-upload img-ul-hr-inline-group" >
                                                            <label _ngcontent-c0="" class="img-ul-upload img-ul-button" tabindex="0">
                                                                <span _ngcontent-c0="">Upload Image</span>
                                                                <input _ngcontent-c0="" multiple type="file" accept="image/png,image/jpg,image/jpeg">
                                                            </label>
                                                            <label _ngcontent-c0="" class="img-ul-clear img-ul-button">
                                                                <span _ngcontent-c0="">Clear</span>
                                                            </label>
                                                            <div _ngcontent-c0="" class="img-ul-drag-box-msg">or drop image here</div>
                                                        </div>
                                                    </div>
                                                </image-upload>
                                                <div class="img-preview" dnd-sortable-container="" draggable="false" ng-reflect-sortable-data="" style="cursor: pointer;">
                                                    <div dnd-sortable="" draggable="true" ng-reflect-index="0" style="cursor: pointer;" class="">
                                                        <img src="../img/apple-touch-icon-ipad-retina-152x152.png" style="height:70px; width:auto" alt=""/>
                                                        <button class="btn btn-sm btn-danger">
                                                        <i class="fa fa-times"></i>
                                                        <span class="sr-only">
                                                        <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                                        </span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="validation-fieldmessage"></div>
                                            </div>
                                        </div>
                                    </ccf-image-upload>
                                </div></td>
                        </tr>
                        <tr>
                            <td> Favicon image
                                <div class="small helper-text"> Select a favicon file to be displayed by web browsers next to the URL in the address bar and in browser bookmarks.</div></td>
                            <td><div class="form-group">
                                    <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" ng-reflect-array-name="media" ng-reflect-max-images="4" ng-reflect-image-dimensions="NO_RESIZE" ng-reflect-data-is-available="true">
                                        <div ng-reflect-form="[object Object]" class="ng-untouched ng-invalid ng-dirty">
                                            <div ng-reflect-name="media" class="ng-untouched ng-valid ng-dirty">
                                                <image-upload _nghost-c0="" ng-reflect-before-upload="function (metadata) {" ng-reflect-button-caption="Upload Image" ng-reflect-drop-box-message="or drop image here" ng-reflect-file-too-large-message="Image must be no larger than 1" ng-reflect-headers="[object Object]" ng-reflect-max-file-size="10485760" ng-reflect-preview="false" ng-reflect-supported-extensions="png,jpg,jpeg" ng-reflect-url="/ccf2-unt/upload">
                                                    <div _ngcontent-c0="" filedrop="" class="img-ul" ng-reflect-ng-class="img-ul" ng-reflect-accept="image/png,image/jpg,image/jpeg">
                                                        <div _ngcontent-c0="" class="img-ul-file-upload img-ul-hr-inline-group" >
                                                            <label _ngcontent-c0="" class="img-ul-upload img-ul-button" tabindex="0">
                                                                <span _ngcontent-c0="">Upload Image</span>
                                                                <input _ngcontent-c0="" multiple type="file" accept="image/png,image/jpg,image/jpeg">
                                                            </label>
                                                            <label _ngcontent-c0="" class="img-ul-clear img-ul-button">
                                                                <span _ngcontent-c0="">Clear</span>
                                                            </label>
                                                            <div _ngcontent-c0="" class="img-ul-drag-box-msg">or drop image here</div>
                                                        </div>
                                                    </div>
                                                </image-upload>
                                                <div class="img-preview" dnd-sortable-container="" draggable="false" ng-reflect-sortable-data="" style="cursor: pointer;">
                                                    <div dnd-sortable="" draggable="true" ng-reflect-index="0" style="cursor: pointer;" class="">
                                                        <img src="../img/apple-touch-icon-ipad-retina-152x152.png" style="height:70px; width:auto" alt=""/>
                                                        <button class="btn btn-sm btn-danger">
                                                        <i class="fa fa-times"></i>
                                                        <span class="sr-only">
                                                        <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                                        </span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="validation-fieldmessage"></div>
                                            </div>
                                        </div>
                                    </ccf-image-upload>
                                </div></td>
                        </tr>
                        <tr>
                            <td> Apple Touch image
                                <div class="small helper-text"> Select an image to be displayed in iOS as a desktop bookmark.</div></td>
                            <td><div class="form-group">
                                    <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" ng-reflect-array-name="media" ng-reflect-max-images="4" ng-reflect-image-dimensions="NO_RESIZE" ng-reflect-data-is-available="true">
                                        <div ng-reflect-form="[object Object]" class="ng-untouched ng-invalid ng-dirty">
                                            <div ng-reflect-name="media" class="ng-untouched ng-valid ng-dirty">
                                                <image-upload _nghost-c0="" ng-reflect-before-upload="function (metadata) {" ng-reflect-button-caption="Upload Image" ng-reflect-drop-box-message="or drop image here" ng-reflect-file-too-large-message="Image must be no larger than 1" ng-reflect-headers="[object Object]" ng-reflect-max-file-size="10485760" ng-reflect-preview="false" ng-reflect-supported-extensions="png,jpg,jpeg" ng-reflect-url="/ccf2-unt/upload">
                                                    <div _ngcontent-c0="" filedrop="" class="img-ul" ng-reflect-ng-class="img-ul" ng-reflect-accept="image/png,image/jpg,image/jpeg">
                                                        <div _ngcontent-c0="" class="img-ul-file-upload img-ul-hr-inline-group" >
                                                            <label _ngcontent-c0="" class="img-ul-upload img-ul-button" tabindex="0">
                                                                <span _ngcontent-c0="">Upload Image</span>
                                                                <input _ngcontent-c0="" multiple type="file" accept="image/png,image/jpg,image/jpeg">
                                                            </label>
                                                            <label _ngcontent-c0="" class="img-ul-clear img-ul-button">
                                                                <span _ngcontent-c0="">Clear</span>
                                                            </label>
                                                            <div _ngcontent-c0="" class="img-ul-drag-box-msg">or drop image here</div>
                                                        </div>
                                                    </div>
                                                </image-upload>
                                                <div class="img-preview" dnd-sortable-container="" draggable="false" ng-reflect-sortable-data="" style="cursor: pointer;">
                                                    <div dnd-sortable="" draggable="true" ng-reflect-index="0" style="cursor: pointer;" class="">
                                                        <img src="../img/apple-touch-icon-ipad-retina-152x152.png" style="height:70px; width:auto" alt=""/>
                                                        <button class="btn btn-sm btn-danger">
                                                        <i class="fa fa-times"></i>
                                                        <span class="sr-only">
                                                        <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                                        </span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="validation-fieldmessage"></div>
                                            </div>
                                        </div>
                                    </ccf-image-upload>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Application title display
                                <div class="small helper-text">Choose whether or not to display the application name in the header</div></td>
                            <td> Display application name "Classifieds"</td>
                        </tr>
                        <tr>
                            <td>Font family for headers
                                <div class="small helper-text">Choose a font family to be used for all headers.</div></td>
                            <td> BentonSansBold</td>
                        </tr>
                        <tr>
                            <td>Font family for body text
                                <div class="small helper-text">Choose a font family to be used for the body text.</div></td>
                            <td> BentonSans</td>
                        </tr>
                        <tr>
                            <td>Custom header HTML (optional)
                                <div class="small helper-text">Specify optional HTML markup to be displayed at the top of the application views.</div></td>
                            <td><div class="code" style=" height:70px">
                                    <code>&lt;div id=&quot;custom_header&quot;&gt;
                                    &lt;div id=&quot;branding-bar&quot; itemscope=&quot;itemscope&quot; itemtype=&quot;http://schema.org/CollegeOrUniversity&quot; role=&quot;complementary&quot; aria-labelledby=&quot;iu-campus&quot; class=&quot;hidden-xs hidden-sm&quot;&gt;
                                    &lt;div class=&quot;container&quot;&gt;
                                    &lt;div class=&quot;row pad&quot;&gt;
                                    &lt;img src=&quot;https://sd-prd-images.s3.amazonaws.com/prd/test-uisapp2/20150702T0521167633961_trident-large.png&quot; alt=&quot;Indiana University Home Page&quot;&gt;
                                    &lt;p id=&quot;iu-campus&quot;&gt;
                                    &lt;a href=&quot;http://www.iu.edu&quot; title=&quot;Indiana University&quot;&gt;
                                    &lt;span itemprop=&quot;name&quot;&gt;Indiana University&lt;/span&gt;
                                    &lt;/a&gt;
                                    &lt;/p&gt;
                                    &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;/div&gt; &lt;/div&gt;</code></div></td>
                        </tr>
                        <tr>
                            <td>Custom footer HTML (optional)
                                <div class="small helper-text">Specify optional HTML markup to be displayed at the bottom of the application views.</div></td>
                            <td><div class="code" style=" height:70px">
                                    <code>&lt;footer role=&quot;contentinfo&quot;&gt;
                                    &lt;div class=&quot;container&quot;&gt;
                                    &lt;div class=&quot;row pad&quot;&gt;
                                    &lt;p class=&quot;tagline&quot;&gt;Fulfilling &lt;span&gt;the&lt;/span&gt; Promise&lt;/p&gt;
                                    &lt;img src=&quot;https://sd-prd-images.s3.amazonaws.com/prd/test-uisapp2/20150702T0521168403962_trident-small.png&quot; alt=&quot;Indiana University&quot;&gt;
                                    &lt;p class=&quot;copyright&quot;&gt;
                                    &lt;a href=&quot;http://www.iu.edu/copyright/index.shtml&quot; title=&quot;Copyright&quot;&gt;Copyright&lt;/a&gt; © 2017 &lt;span class=&quot;line-break&quot;&gt;The Trustees of &lt;a href=&quot;http://www.iu.edu/&quot; title=&quot;Indiana University&quot; itemprop=&quot;url&quot;&gt;&lt;span itemprop=&quot;name&quot;&gt;Indiana University&lt;/span&gt;&lt;/a&gt;&lt;/span&gt;
                                    &lt;/p&gt;
                                    &lt;p class=&quot;privacy&quot;&gt;&lt;a href=&quot;https://www.iu.edu/~espd/one/privacyStatement.html&quot; id=&quot;privacy-policy-link&quot; title=&quot;Privacy Policy&quot; target=&quot;_blank&quot;&gt;Privacy Notice&lt;/a&gt;
                                    &lt;/p&gt;&lt;/div&gt;
                                    &lt;/div&gt; &lt;/footer&gt;</code></div></td>
                        </tr>
                        <tr>
                            <td>Custom  CSS (optional)
                                <div class="small helper-text">Specify optional CSS markup that will style the HTML for the custom header and footer.</div></td>
                            <td><div class="code" style=" height:70px">
                                    <code>@font-face {
                                    font-family: 'BentonSansRegular';
                                    src: url(&quot;https://fonts.iu.edu/fonts/benton-sans-regular.eot&quot;);
                                    src: url(&quot;https://fonts.iu.edu/fonts/benton-sans-regular.eot?#iefix&quot;) format(&quot;embedded-opentype&quot;), url(&quot;https://fonts.iu.edu/fonts/benton-sans-regular.woff&quot;) format(&quot;woff&quot;), url(&quot;https://fonts.iu.edu/fonts/benton-sans-regular.ttf&quot;) format(&quot;truetype&quot;), url(&quot;https://fonts.iu.edu/fonts/benton-sans-regular.svg#BentonSansRegular&quot;) format(&quot;svg&quot;);
                                    font-style: normal;
                                    font-weight: normal; </code>
                                </div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('modals/modal-admin-branding-image.php') ?>
<?php include('modals/modal-admin-branding-favicon.php') ?>
<?php include('modals/modal-admin-branding-faviconimage.php') ?>
<?php include('modals/modal-admin-branding-appletouch.php') ?>
<?php include('modals/modal-admin-branding-titledisplay.php') ?>
<?php include('modals/modal-admin-branding-color.php') ?>
<?php include('modals/modal-admin-branding-fontheader.php') ?>
<?php include('modals/modal-admin-branding-fontbody.php') ?>
<?php include('modals/modal-admin-branding-customheader.php') ?>
<?php include('modals/modal-admin-branding-customfooter.php') ?>
<?php include('modals/modal-admin-branding-customcss.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
<script type="text/javascript">
    //<![CDATA[
    $( document ).ready(function() {
        $(function() {
            $('.custom-headerfont').hide();
            $('#headerfont').change(function() {
                if ($('#headerfont').val() == 'usecustomfont') {
                    $('.custom-headerfont').slideDown();
                } else {
                    $('.custom-headerfont').slideUp();
                }
            });



        });
    }); //]]>
</script>
<script type="text/javascript">
    //<![CDATA[
    $( document ).ready(function() {
        $(function() {
            $('.custom-bodyfont').hide();
            $('#bodyfont').change(function() {
                if ($('#bodyfont').val() == 'usecustomfont') {
                    $('.custom-bodyfont').slideDown();
                } else {
                    $('.custom-bodyfont').slideUp();
                }
            });



        });
    }); //]]>
</script>
<script>
 $(document).ready(function() {
     $(".btn-progressable").click(function() {
         $(".btn-progressable").toggleClass("rbt-btn-progress");
         $(".btn-label").fadeOut("fast", function() {
             $(".btn-label").text(($(".btn-label").text() == 'Saving...') ? 'Save' : 'Saving...').fadeIn(200);
         })
     });
 });

</script>
</body>
</html>
