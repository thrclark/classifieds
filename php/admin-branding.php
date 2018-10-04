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
            <main class="main-content" id="main-content">
                <section>
                    <h1> <?php echo $page_title; ?></h1>
                    <form>
                        <hr>
                        <fieldset>
                            <legend class="my-3">Application title &amp; colors</legend>
                            <div class="form-group">
                                <label class="control-label" id="urlLabel">
                                    <message key="admin.ldap.field.url"> Title</message>
                                </label>
                                <div class="ccf-instructional-text" id="urlDirections">
                                    <message key="">Choose a title for the application.</message>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <countdown>
                                            <div class="rbt-charcount">
                                                <input aria-labelledby="urlLabel urlDirections" ccfvalidated="" class="form-control   ng-valid" formcontrolname="url">
                                                <span class="badge badge-success"> 2000 </span> </div>
                                        </countdown>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                    <label class="form-check-label font-weight-normal mt-1" for="inlineCheckbox2">Display name in the application header.</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="font-weight-bold">
                                    <message key="">Colors</message>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="font-weight-normal ccf-instructional-text mb-0" for="color_primary">Primary</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control jscolor" id="color_primary" value="243E4C" autocomplete="off">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary" type="button"><i aria-hidden="true" class="fa fa-eyedropper"></i> <span class="sr-only">Select color</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="font-weight-normal ccf-instructional-text mb-0" for="color_accent">Accent</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control jscolor" id="color_accent" value="FFC61A" autocomplete="off">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary" type="button"><i aria-hidden="true" class="fa fa-eyedropper"></i> <span class="sr-only">Select color</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="font-weight-normal ccf-instructional-text  mb-0" for="color_background">Background</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control jscolor" id="color_background" value="F4F3EE" autocomplete="off">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary" type="button"><i aria-hidden="true" class="fa fa-eyedropper"></i> <span class="sr-only">Select color</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <fieldset>
                            <legend class="my-3">Application images</legend>
                            <div class="form-group ccf-amin-image-upload">
                                <label class="control-label" id="urlLabel">
                                    <message key="admin.ldap.field.url">Application logo </message>
                                    <span class="small font-italic">(optional)</span> </label>
                                <div class="ccf-instructional-text" id="urlDirections">
                                    <message key="">Select an image to be used as an application logo in the header. Note that this image should be 70px in height.</message>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" ng-reflect-array-name="media" ng-reflect-max-images="4" ng-reflect-image-dimensions="NO_RESIZE" ng-reflect-data-is-available="true">
                                            <div ng-reflect-form="[object Object]" class="  ng-dirty">
                                                <div ng-reflect-name="media" class=" ng-valid ng-dirty">
                                                    <image-upload _nghost-c0="" ng-reflect-before-upload="function (metadata) {" ng-reflect-button-caption="Upload Image" ng-reflect-drop-box-message="or drop image here" ng-reflect-file-too-large-message="Image must be no larger than 1" ng-reflect-headers="[object Object]" ng-reflect-max-file-size="10485760" ng-reflect-preview="false" ng-reflect-supported-extensions="png,jpg,jpeg" ng-reflect-url="/ccf2-unt/upload">
                                                        <div _ngcontent-c0="" filedrop="" class="img-ul" ng-reflect-ng-class="img-ul" ng-reflect-accept="image/png,image/jpg,image/jpeg">
                                                            <div _ngcontent-c0="" class="img-ul-file-upload img-ul-hr-inline-group" >
                                                                <label _ngcontent-c0="" class="img-ul-upload img-ul-button" tabindex="0"> <span _ngcontent-c0="">Upload Image</span>
                                                                    <input _ngcontent-c0="" multiple type="file" accept="image/png,image/jpg,image/jpeg">
                                                                </label>
                                                                <label _ngcontent-c0="" class="img-ul-clear img-ul-button"> <span _ngcontent-c0="">Clear</span> </label>
                                                                <div _ngcontent-c0="" class="img-ul-drag-box-msg">or drop image here</div>
                                                            </div>
                                                        </div>
                                                    </image-upload>
                                                    <div class="img-preview" dnd-sortable-container="" draggable="false" ng-reflect-sortable-data="" style="cursor: pointer;">
                                                        <div dnd-sortable="" draggable="true" ng-reflect-index="0" style="cursor: pointer;" class=""> <img src="../img/ccf-logo.png" style="height:70px; width:auto" alt=""/>
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
                            </div>
                            <div class="form-group ccf-amin-image-upload">
                                <label class="control-label" id="urlLabel">
                                    <message key="admin.ldap.field.url">Application logo - mobile </message>
                                    <span class="small font-italic">(optional)</span> </label>
                                <div class="ccf-instructional-text" id="urlDirections">
                                    <message key="">Select an image to be used as an application logo in the header for mobile devices. Note that this image should be 48px in height, and the width should be constrained as much as possible for better display on small screens.</message>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" ng-reflect-array-name="media" ng-reflect-max-images="4" ng-reflect-image-dimensions="NO_RESIZE" ng-reflect-data-is-available="true">
                                            <div ng-reflect-form="[object Object]" class="  ng-dirty">
                                                <div ng-reflect-name="media" class=" ng-valid ng-dirty">
                                                    <image-upload _nghost-c0="" ng-reflect-before-upload="function (metadata) {" ng-reflect-button-caption="Upload Image" ng-reflect-drop-box-message="or drop image here" ng-reflect-file-too-large-message="Image must be no larger than 1" ng-reflect-headers="[object Object]" ng-reflect-max-file-size="10485760" ng-reflect-preview="false" ng-reflect-supported-extensions="png,jpg,jpeg" ng-reflect-url="/ccf2-unt/upload">
                                                        <div _ngcontent-c0="" filedrop="" class="img-ul" ng-reflect-ng-class="img-ul" ng-reflect-accept="image/png,image/jpg,image/jpeg">
                                                            <div _ngcontent-c0="" class="img-ul-file-upload img-ul-hr-inline-group" >
                                                                <label _ngcontent-c0="" class="img-ul-upload img-ul-button" tabindex="0"> <span _ngcontent-c0="">Upload Image</span>
                                                                    <input _ngcontent-c0="" multiple type="file" accept="image/png,image/jpg,image/jpeg">
                                                                </label>
                                                                <label _ngcontent-c0="" class="img-ul-clear img-ul-button"> <span _ngcontent-c0="">Clear</span></label>
                                                                <div _ngcontent-c0="" class="img-ul-drag-box-msg">or drop image here</div>
                                                            </div>
                                                        </div>
                                                    </image-upload>
                                                    <div class="img-preview" dnd-sortable-container="" draggable="false" ng-reflect-sortable-data="" style="cursor: pointer;">
                                                        <div dnd-sortable="" draggable="true" ng-reflect-index="0" style="cursor: pointer;" class=""> <img src="../img/ccf-logo-mobile.png" style="height:70px; width:auto" alt=""/>
                                                            <button class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> <span class="sr-only">
                                                            <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                                            </span></button>
                                                        </div>
                                                    </div>
                                                    <div class="validation-fieldmessage"> </div>
                                                </div>
                                            </div>
                                        </ccf-image-upload>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ccf-amin-image-upload">
                                <label class="control-label" id="urlLabel">
                                    <message key="admin.ldap.field.url"> Favicon icon </message>
                                    <span class="small font-italic">(.ico)</span> </label>
                                <div class="ccf-instructional-text" id="urlDirections">
                                    <message key="">Select a favicon file to be displayed by web browsers next to the URL in the address bar and in browser bookmarks.</message>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" ng-reflect-array-name="media" ng-reflect-max-images="4" ng-reflect-image-dimensions="NO_RESIZE" ng-reflect-data-is-available="true">
                                            <div ng-reflect-form="[object Object]" class="  ng-dirty">
                                                <div ng-reflect-name="media" class=" ng-valid ng-dirty">
                                                    <image-upload _nghost-c0="" ng-reflect-before-upload="function (metadata) {" ng-reflect-button-caption="Upload Image" ng-reflect-drop-box-message="or drop image here" ng-reflect-file-too-large-message="Image must be no larger than 1" ng-reflect-headers="[object Object]" ng-reflect-max-file-size="10485760" ng-reflect-preview="false" ng-reflect-supported-extensions="png,jpg,jpeg" ng-reflect-url="/ccf2-unt/upload">
                                                        <div _ngcontent-c0="" filedrop="" class="img-ul" ng-reflect-ng-class="img-ul" ng-reflect-accept="image/png,image/jpg,image/jpeg">
                                                            <div _ngcontent-c0="" class="img-ul-file-upload img-ul-hr-inline-group" >
                                                                <label _ngcontent-c0="" class="img-ul-upload img-ul-button" tabindex="0"> <span _ngcontent-c0="">Upload Image</span>
                                                                    <input _ngcontent-c0="" multiple type="file" accept="image/png,image/jpg,image/jpeg">
                                                                </label>
                                                                <label _ngcontent-c0="" class="img-ul-clear img-ul-button"> <span _ngcontent-c0="">Clear</span> </label>
                                                                <div _ngcontent-c0="" class="img-ul-drag-box-msg">or drop image here</div>
                                                            </div>
                                                        </div>
                                                    </image-upload>
                                                    <div class="img-preview rbt-checkered-bg" dnd-sortable-container="" draggable="false" ng-reflect-sortable-data="" style="cursor: pointer;">
                                                        <div dnd-sortable="" draggable="true" ng-reflect-index="0" style="cursor: pointer;" class=""> <img src="../img/favicon.ico" style="height:70px; width:auto" alt=""/>
                                                            <button class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> <span class="sr-only">
                                                            <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                                            </span> </button>
                                                        </div>
                                                    </div>
                                                    <div class="validation-fieldmessage"></div>
                                                </div>
                                            </div>
                                        </ccf-image-upload>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ccf-amin-image-upload">
                                <label class="control-label" id="urlLabel">
                                    <message key="admin.ldap.field.url"> Favicon image</message>
                                </label>
                                <div class="ccf-instructional-text" id="urlDirections">
                                    <message key="">Select a favicon file to be displayed by web browsers next to the URL in the address bar and in browser bookmarks. This image should be 196x196 pixels.</message>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" ng-reflect-array-name="media" ng-reflect-max-images="4" ng-reflect-image-dimensions="NO_RESIZE" ng-reflect-data-is-available="true">
                                            <div ng-reflect-form="[object Object]" class="  ng-dirty">
                                                <div ng-reflect-name="media" class=" ng-valid ng-dirty">
                                                    <image-upload _nghost-c0="" ng-reflect-before-upload="function (metadata) {" ng-reflect-button-caption="Upload Image" ng-reflect-drop-box-message="or drop image here" ng-reflect-file-too-large-message="Image must be no larger than 1" ng-reflect-headers="[object Object]" ng-reflect-max-file-size="10485760" ng-reflect-preview="false" ng-reflect-supported-extensions="png,jpg,jpeg" ng-reflect-url="/ccf2-unt/upload">
                                                        <div _ngcontent-c0="" filedrop="" class="img-ul" ng-reflect-ng-class="img-ul" ng-reflect-accept="image/png,image/jpg,image/jpeg">
                                                            <div _ngcontent-c0="" class="img-ul-file-upload img-ul-hr-inline-group" >
                                                                <label _ngcontent-c0="" class="img-ul-upload img-ul-button" tabindex="0"> <span _ngcontent-c0="">Upload Image</span>
                                                                    <input _ngcontent-c0="" multiple type="file" accept="image/png,image/jpg,image/jpeg">
                                                                </label>
                                                                <label _ngcontent-c0="" class="img-ul-clear img-ul-button"> <span _ngcontent-c0="">Clear</span> </label>
                                                                <div _ngcontent-c0="" class="img-ul-drag-box-msg">or drop image here</div>
                                                            </div>
                                                        </div>
                                                    </image-upload>
                                                    <div class="img-preview rbt-checkered-bg" dnd-sortable-container="" draggable="false" ng-reflect-sortable-data="" style="cursor: pointer;">
                                                        <div dnd-sortable="" draggable="true" ng-reflect-index="0" style="cursor: pointer;" class=""> <img src="../img/ccf-logo-196x196.png" style="height:70px; width:auto" alt=""/>
                                                            <button class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> <span class="sr-only">
                                                            <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                                            </span> </button>
                                                        </div>
                                                    </div>
                                                    <div class="validation-fieldmessage"></div>
                                                </div>
                                            </div>
                                        </ccf-image-upload>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ccf-amin-image-upload">
                                <label class="control-label" id="urlLabel">
                                    <message key="admin.ldap.field.url"> Apple Touch image</message>
                                </label>
                                <div class="ccf-instructional-text" id="urlDirections">
                                    <message key="">Select an image to be displayed in iOS as a desktop bookmark. This image should be 180x180 pixels.</message>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" ng-reflect-array-name="media" ng-reflect-max-images="4" ng-reflect-image-dimensions="NO_RESIZE" ng-reflect-data-is-available="true">
                                            <div ng-reflect-form="[object Object]" class="  ng-dirty">
                                                <div ng-reflect-name="media" class=" ng-valid ng-dirty">
                                                    <image-upload _nghost-c0="" ng-reflect-before-upload="function (metadata) {" ng-reflect-button-caption="Upload Image" ng-reflect-drop-box-message="or drop image here" ng-reflect-file-too-large-message="Image must be no larger than 1" ng-reflect-headers="[object Object]" ng-reflect-max-file-size="10485760" ng-reflect-preview="false" ng-reflect-supported-extensions="png,jpg,jpeg" ng-reflect-url="/ccf2-unt/upload">
                                                        <div _ngcontent-c0="" filedrop="" class="img-ul" ng-reflect-ng-class="img-ul" ng-reflect-accept="image/png,image/jpg,image/jpeg">
                                                            <div _ngcontent-c0="" class="img-ul-file-upload img-ul-hr-inline-group" >
                                                                <label _ngcontent-c0="" class="img-ul-upload img-ul-button" tabindex="0"> <span _ngcontent-c0="">Upload Image</span>
                                                                    <input _ngcontent-c0="" multiple type="file" accept="image/png,image/jpg,image/jpeg">
                                                                </label>
                                                                <label _ngcontent-c0="" class="img-ul-clear img-ul-button"> <span _ngcontent-c0="">Clear</span> </label>
                                                                <div _ngcontent-c0="" class="img-ul-drag-box-msg">or drop image here</div>
                                                            </div>
                                                        </div>
                                                    </image-upload>
                                                    <div class="img-preview rbt-checkered-bg" dnd-sortable-container="" draggable="false" ng-reflect-sortable-data="" style="cursor: pointer;">
                                                        <div dnd-sortable="" draggable="true" ng-reflect-index="0" style="cursor: pointer;" class=""> <img src="../img/ccf-logo-180x180.png" style="height:70px; width:auto" alt=""/>
                                                            <button class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> <span class="sr-only">
                                                            <message key="global.buttons.delete" ng-reflect-key="global.buttons.delete">Delete</message>
                                                            </span> </button>
                                                        </div>
                                                    </div>
                                                    <div class="validation-fieldmessage"></div>
                                                </div>
                                            </div>
                                        </ccf-image-upload>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <fieldset>
                            <legend class="my-3">Application fonts</legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="font-weight-bold">
                                            <message key="">Font family for headers</message>
                                        </div>
                                        <div class="ccf-instructional-text">Choose a font family to be used for all headers.</div>
                                        <label class="sr-only" for="headerfont">Font family for headers </label>
                                        <select class="select form-control" id="headerfont" name="headerfont">
                                            <option label="" value="Arial, Helvetica, sans-serif">Sans-Serif - Arial, Helvetica </option>
                                            <option label="" value="'Arial Black', Gadget, sans-serif">Sans-Serif - "Arial Black", Gadget</option>
                                            <option label="" value="Impact, Charcoal, sans-serif">Sans-Serif - Impact, Charcoal </option>
                                            <option label="" value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif">Sans-Serif - "Lucida Sans Unicode", "Lucida Grande" </option>
                                            <option label="" value="Tahoma, Geneva, sans-serif">Sans-Serif - Tahoma, Geneva </option>
                                            <option label="" value="'Trebuchet MS', Helvetica, sans-serif">Sans-Serif - "Trebuchet MS", Helvetica </option>
                                            <option label="" value="Verdana, Geneva, sans-serif">Sans-Serif - Verdana, Geneva </option>
                                            <option label="" value="Georgia, serif">Serif - Georgia</option>
                                            <option label="" value="'Palatino Linotype', 'Book Antiqua', Palatino, serif">Serif - "Palatino Linotype", "Book Antiqua", Palatino</option>
                                            <option label="" value="'Times New Roman', Times, serif">Serif - "Times New Roman", Times</option>
                                            <option label="" value="usecustomfont">Use Custom Font</option>
                                        </select>
                                        <div class="form-group mt-3 custom-headerfont" >
                                            <label class="control-label" for="font_family"> Font family name</label>
                                            <div class="ccf-instructional-text">Specify the name of this custom font.</div>
                                            <input class="form-control" id="font_family" name="font_family" type="text" required="required">
                                        </div>
                                        <div class="form-group custom-headerfont" >
                                            <label class="control-label" for="font_family"> Weight</label>
                                            <div class="ccf-instructional-text">Specify the weight of this custom font.</div>
                                            <select ng-model="fontFace.fontWeight" name="fontFaces[0].fontWeight" id="fontFaces[0].fontWeight" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontWeights" class="form-control  ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                <option label="bold" value="string:BOLD">bold</option>
                                                <option label="100" value="string:W_100">100</option>
                                                <option label="200" value="string:W_200">200</option>
                                                <option label="300" value="string:W_300">300</option>
                                                <option label="400" value="string:W_400">400</option>
                                                <option label="500" value="string:W_500">500</option>
                                                <option label="600" value="string:W_600">600</option>
                                                <option label="700" value="string:W_700">700</option>
                                                <option label="800" value="string:W_800">800</option>
                                                <option label="900" value="string:W_900">900</option>
                                            </select>
                                        </div>
                                        <div class="form-group custom-headerfont" >
                                            <label class="control-label" for="font_family"> Style</label>
                                            <div class="ccf-instructional-text">Specify the style of this custom font.</div>
                                            <select ng-model="fontFace.fontStyle" name="fontFaces[0].fontStyle" id="fontFaces[0].fontStyle" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStyles" class="form-control  ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                <option label="italic" value="string:ITALIC">italic</option>
                                                <option label="oblique" value="string:OBLIQUE">oblique</option>
                                            </select>
                                        </div>
                                        <div class="form-group custom-headerfont" >
                                            <label class="control-label" for="font_family"> Stretch</label>
                                            <div class="ccf-instructional-text">Specify the stretch of this custom font.</div>
                                            <select ng-model="fontFace.fontStretch" name="fontFaces[0].fontStretch" id="fontFaces[0].fontStretch" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStretches" class="form-control  ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                <option label="condensed" value="string:CONDENSED">condensed</option>
                                                <option label="ultra-condensed" value="string:ULTRA_CONDENSED">ultra-condensed</option>
                                                <option label="extra-condensed" value="string:EXTRA_CONDENSED">extra-condensed</option>
                                                <option label="semi-condensed" value="string:SEMI_CONDENSED">semi-condensed</option>
                                                <option label="expanded" value="string:EXPANDED">expanded</option>
                                                <option label="semi-expanded" value="string:SEMI_EXPANDED">semi-expanded</option>
                                                <option label="extra-expanded" value="string:EXTRA_EXPANDED">extra-expanded</option>
                                                <option label="ultra-expanded" value="string:ULTRA_EXPANDED">ultra-expanded</option>
                                            </select>
                                        </div>
                                        <div class="form-group custom-headerfont" > <strong> Font URLs</strong>
                                            <div class="ccf-instructional-text">Specify URLs for this custom font.</div>
                                            <table class="table rbt-table-plain  rbt-table-actions mb-2" id="headerfont" >
                                                <caption class="sr-only">
                                                Custom header font details:
                                                </caption>
                                                <thead class="sr-only">
                                                    <tr>
                                                        <th id="headerfont_url" scope="col">URL</th>
                                                        <th id="headerfont_type" scope="col">Type</th>
                                                        <th id="headerfont_actions" scope="col"> Actions </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="p-1 pl-0 w-50"><input type="text" class="form-control" placeholder="Enter URL" name="headerfont_url1" aria-labelledby="headerfont_url"></td>
                                                        <td class="p-1"><select class="form-control" name="headerfont_type1" aria-labelledby="headerfont_type">
                                                                <option selected="">Select type</option>
                                                                <option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option>
                                                                <option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
                                                                <option label="SVG" value="string:SVG">SVG</option>
                                                                <option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
                                                                <option label="WOFF" value="string:WOFF">WOFF</option>
                                                                <option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
                                                            </select></td>
                                                        <td class="p-1"><button class="btn btn-link"type="button" name="headerfont_actions1" aria-labelledby="headerfont_actions"> <i aria-hidden="true" class="fa fa-trash"></i>
                                                            <message class="sr-only" key="admin.buttons.delete">Delete</message>
                                                            </button></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-1 pl-0 w-50"><input type="text" class="form-control" placeholder="Enter URL" name="headerfont_url2" aria-labelledby="headerfont_url"></td>
                                                        <td class="p-1"><select class="form-control" name="headerfont_type2" aria-labelledby="headerfont_type">
                                                                <option selected="">Select type</option>
                                                                <option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option>
                                                                <option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
                                                                <option label="SVG" value="string:SVG">SVG</option>
                                                                <option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
                                                                <option label="WOFF" value="string:WOFF">WOFF</option>
                                                                <option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
                                                            </select></td>
                                                        <td class="p-1"><button class="btn btn-link"type="button" name="headerfont_actions2" aria-labelledby="headerfont_actions"> <i aria-hidden="true" class="fa fa-trash"></i>
                                                            <message class="sr-only" key="admin.buttons.delete">Delete</message>
                                                            </button></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-1 pl-0 w-50"><input type="text" class="form-control" placeholder="Enter URL" name="headerfont_url3" aria-labelledby="headerfont_url"></td>
                                                        <td class="p-1"><select class="form-control" name="headerfont_type3" aria-labelledby="headerfont_type">
                                                                <option selected="">Select type</option>
                                                                <option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option>
                                                                <option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
                                                                <option label="SVG" value="string:SVG">SVG</option>
                                                                <option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
                                                                <option label="WOFF" value="string:WOFF">WOFF</option>
                                                                <option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
                                                            </select></td>
                                                        <td class="p-1"><button class="btn btn-link"type="button" name="headerfont_actions3" aria-labelledby="headerfont_actions"> <i aria-hidden="true" class="fa fa-trash"></i>
                                                            <message class="sr-only" key="admin.buttons.delete">Delete</message>
                                                            </button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col"><a href="#myTable" class="btn btn-outline-primary btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> URL</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="font-weight-bold">
                                            <message key="">Font family for body text</message>
                                        </div>
                                        <div class="ccf-instructional-text">Choose a font family to be used for the body text.</div>
                                        <label class="sr-only" for="headerfont">Font family for body text </label>
                                        <select class="select form-control" id="bodyfont" name="bodyfont">
                                            <option label="" value="Arial, Helvetica, sans-serif">Sans-Serif - Arial, Helvetica </option>
                                            <option label="" value="'Arial Black', Gadget, sans-serif">Sans-Serif - "Arial Black", Gadget</option>
                                            <option label="" value="Impact, Charcoal, sans-serif">Sans-Serif - Impact, Charcoal </option>
                                            <option label="" value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif">Sans-Serif - "Lucida Sans Unicode", "Lucida Grande" </option>
                                            <option label="" value="Tahoma, Geneva, sans-serif">Sans-Serif - Tahoma, Geneva </option>
                                            <option label="" value="'Trebuchet MS', Helvetica, sans-serif">Sans-Serif - "Trebuchet MS", Helvetica </option>
                                            <option label="" value="Verdana, Geneva, sans-serif">Sans-Serif - Verdana, Geneva </option>
                                            <option label="" value="Georgia, serif">Serif - Georgia</option>
                                            <option label="" value="'Palatino Linotype', 'Book Antiqua', Palatino, serif">Serif - "Palatino Linotype", "Book Antiqua", Palatino</option>
                                            <option label="" value="'Times New Roman', Times, serif">Serif - "Times New Roman", Times</option>
                                            <option label="" value="usecustomfont">Use Custom Font</option>
                                        </select>
                                        <div class="form-group mt-3 custom-bodyfont" >
                                            <label class="control-label" for="font_family"> Font family name</label>
                                            <div class="ccf-instructional-text">Specify the name of this custom font.</div>
                                            <input class="form-control" id="font_family" name="font_family" type="text" required="required">
                                        </div>
                                        <div class="form-group custom-bodyfont" >
                                            <label class="control-label" for="font_family"> Weight</label>
                                            <div class="ccf-instructional-text">Specify the weight of this custom font.</div>
                                            <select ng-model="fontFace.fontWeight" name="fontFaces[0].fontWeight" id="fontFaces[0].fontWeight" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontWeights" class="form-control  ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                <option label="bold" value="string:BOLD">bold</option>
                                                <option label="100" value="string:W_100">100</option>
                                                <option label="200" value="string:W_200">200</option>
                                                <option label="300" value="string:W_300">300</option>
                                                <option label="400" value="string:W_400">400</option>
                                                <option label="500" value="string:W_500">500</option>
                                                <option label="600" value="string:W_600">600</option>
                                                <option label="700" value="string:W_700">700</option>
                                                <option label="800" value="string:W_800">800</option>
                                                <option label="900" value="string:W_900">900</option>
                                            </select>
                                        </div>
                                        <div class="form-group custom-bodyfont" >
                                            <label class="control-label" for="font_family"> Style</label>
                                            <div class="ccf-instructional-text">Specify the style of this custom font.</div>
                                            <select ng-model="fontFace.fontStyle" name="fontFaces[0].fontStyle" id="fontFaces[0].fontStyle" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStyles" class="form-control  ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                <option label="italic" value="string:ITALIC">italic</option>
                                                <option label="oblique" value="string:OBLIQUE">oblique</option>
                                            </select>
                                        </div>
                                        <div class="form-group custom-bodyfont" >
                                            <label class="control-label" for="font_family"> Stretch</label>
                                            <div class="ccf-instructional-text">Specify the stretch of this custom font.</div>
                                            <select ng-model="fontFace.fontStretch" name="fontFaces[0].fontStretch" id="fontFaces[0].fontStretch" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStretches" class="form-control  ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                <option label="condensed" value="string:CONDENSED">condensed</option>
                                                <option label="ultra-condensed" value="string:ULTRA_CONDENSED">ultra-condensed</option>
                                                <option label="extra-condensed" value="string:EXTRA_CONDENSED">extra-condensed</option>
                                                <option label="semi-condensed" value="string:SEMI_CONDENSED">semi-condensed</option>
                                                <option label="expanded" value="string:EXPANDED">expanded</option>
                                                <option label="semi-expanded" value="string:SEMI_EXPANDED">semi-expanded</option>
                                                <option label="extra-expanded" value="string:EXTRA_EXPANDED">extra-expanded</option>
                                                <option label="ultra-expanded" value="string:ULTRA_EXPANDED">ultra-expanded</option>
                                            </select>
                                        </div>
                                        <div class="form-group custom-bodyfont" >
                                            <div class="form-label"> <strong> Font URLs</strong></div>
                                            <div class="ccf-instructional-text">Specify URLs for this custom font.</div>
                                            <table class="table rbt-table-plain  rbt-table-actions mb-2" id="bodyfont" >
                                                <caption class="sr-only">
                                                Custom body font details:
                                                </caption>
                                                <thead class="sr-only">
                                                    <tr>
                                                        <th id="bodyfont_url" scope="col">URL</th>
                                                        <th id="bodyfont_type" scope="col">Type</th>
                                                        <th id="bodyfont_actions" scope="col"> Actions </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="p-1 pl-0 w-50"><input type="text" class="form-control" placeholder="Enter URL" name="bodyfont_url1" aria-labelledby="bodyfont_url"></td>
                                                        <td class="p-1"><select class="form-control" name="bodyfont_type1" aria-labelledby="bodyfont_type">
                                                                <option selected="">Select type</option>
                                                                <option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option>
                                                                <option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
                                                                <option label="SVG" value="string:SVG">SVG</option>
                                                                <option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
                                                                <option label="WOFF" value="string:WOFF">WOFF</option>
                                                                <option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
                                                            </select></td>
                                                        <td class="p-1"><button class="btn btn-link"type="button" name="bodyfont_actions1" aria-labelledby="bodyfont_actions"> <i aria-hidden="true" class="fa fa-trash"></i>
                                                            <message class="sr-only" key="admin.buttons.delete">Delete</message>
                                                            </button></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-1 pl-0 w-50"><input type="text" class="form-control" placeholder="Enter URL" name="bodyfont_url2" aria-labelledby="bodyfont_url"></td>
                                                        <td class="p-1"><select class="form-control" name="bodyfont_type2" aria-labelledby="bodyfont_type">
                                                                <option selected="">Select type</option>
                                                                <option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option>
                                                                <option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
                                                                <option label="SVG" value="string:SVG">SVG</option>
                                                                <option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
                                                                <option label="WOFF" value="string:WOFF">WOFF</option>
                                                                <option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
                                                            </select></td>
                                                        <td class="p-1"><button class="btn btn-link"type="button" name="bodyfont_actions2" aria-labelledby="bodyfont_actions"> <i aria-hidden="true" class="fa fa-trash"></i>
                                                            <message class="sr-only" key="admin.buttons.delete">Delete</message>
                                                            </button></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-1 pl-0 w-50"><input type="text" class="form-control" placeholder="Enter URL" name="bodyfont_url3" aria-labelledby="bodyfont_url"></td>
                                                        <td class="p-1"><select class="form-control" name="bodyfont_type3" aria-labelledby="bodyfont_type">
                                                                <option selected="">Select type</option>
                                                                <option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option>
                                                                <option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
                                                                <option label="SVG" value="string:SVG">SVG</option>
                                                                <option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
                                                                <option label="WOFF" value="string:WOFF">WOFF</option>
                                                                <option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
                                                            </select></td>
                                                        <td class="p-1"><button class="btn btn-link"type="button" name="bodyfont_actions3" aria-labelledby="bodyfont_actions"> <i aria-hidden="true" class="fa fa-trash"></i>
                                                            <message class="sr-only" key="admin.buttons.delete">Delete</message>
                                                            </button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col"><a href="#myTable" class="btn btn-outline-primary btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> URL</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <fieldset>
                            <legend class="my-3">Custom markup</legend>
                            <div class="form-group">
                                <label for="textarea-headerhtml" class="">Custom header html <span class="small font-italic">(optional)</span></label>
                                <div class="ccf-instructional-text">Specify optional HTML markup to be displayed at the top of the application views.</div>
                                <textarea class="form-control is-invalid" id="textarea-headerhtml" rows="5"></textarea>
                                <div class="invalid-feedback"><span class="rbt-icon-circle-close" aria-hidden="true"></span> Some tags and attributes are disallowed. </div>
                                <div class="alert alert-danger fade show" role="alert">
                                    <p class="ccf-instructional-text"><!----><span style="color: inherit; text-decoration: none;"> &lt;div class="hidden-xs hidden-sm branding-bar"&gt;  
                                        &lt; </span><span style="color: red; text-decoration: line-through;"> di class="container"&gt;  
                                        &lt; </span><span style="color: inherit; text-decoration: none;"> div class="row pad"&gt; 
                                        &lt;img src="https://sd-prd-images.s3.amazonaws.com/prd/test-uisapp2/20150702T0521167633961_trident-large.png" alt="Indiana University Home Page"&gt; 
                                        &lt;p&gt; &lt;a href="http://www.iu.edu" title="Indiana University" rel="nofollow" target="_blank"&gt; &lt;span&gt;Indiana University&lt;/span&gt; &lt;/a&gt; &lt;/p&gt; 
                                        &lt;/div&gt; 
                                        &lt;/div&gt; </span><span style="color: red; text-decoration: line-through;"> &lt;/div&gt; </span></p>
                                    <button class="btn btn-sm btn-outline-primary mt-3">Remove dissalowed items</button>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label font-weight-normal mt-1" for="inlineCheckbox1">Include custom header on screens that are less than 768px wide.</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textarea-footerhtml" class="">Custom footer html <span class="small font-italic">(optional)</span></label>
                                <div class="ccf-instructional-text">Specify optional HTML markup to be displayed at the bottom of the application views.</div>
                                <textarea name="textarea-footerhtml" rows="5" class="form-control" id="textarea-footerhtml"></textarea>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                    <label class="form-check-label font-weight-normal mt-1" for="inlineCheckbox2">Include custom footer on screens that are less than 768px wide.</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textarea-customcss" class="">Custom CSS <span class="small font-italic">(optional)</span></label>
                                <div class="ccf-instructional-text">Specify optional CSS markup that will style the HTML for the custom header and footer.</div>
                                <textarea class="form-control" id="textarea-customcss" rows="5"></textarea>
                            </div>
                        </fieldset>
                        <div class="rbt-button-group mb-5">
                            <button class="btn btn-primary" type="submit">
                            <message key="global.buttons.save">Save</message>
                            </button>
                            <button class="btn btn-danger" type="button" disabled="">
                            <message key="admin.buttons.revert">Revert</message>
                            </button>
                        </div>
                    </form>
                </section>
            </main>
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
$(function () {
     $(".btn-progressable").click(function() {
        $('.btn-progressable').addClass('rbt-btn-progress');
		$(".btn-progressable").prop('disabled', true);
		$(".btn-label").text("Applying...");
        setTimeout(function(){
            $('.btn-progressable').removeClass('rbt-btn-progress');
			$(".btn-label").text("Apply branding");
			$(".btn-progressable").prop('disabled', false);
			$(".alert").fadeIn().delay(5000).fadeOut();
        }, 4000)
    });
});

 });

</script>
</body>
</html>
