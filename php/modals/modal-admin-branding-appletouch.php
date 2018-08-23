

<div class="modal fade" id="pub_appletouch" tabindex="-1" role="dialog" aria-labelledby="pub_appletouch" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apple Touch Image </h5>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="mb-3">
                        <label class="" for="appemail"> Select image</label>
                        <div id="textfieldHelp" class="ccf-instructional-text">Select an image to be displayed in iOS as a desktop bookmark.</div>
                    </div>
                    <ccf-image-upload arrayname="media" dimensions="NO_RESIZE" max="4" ng-reflect-array-name="media" ng-reflect-max-images="4" ng-reflect-image-dimensions="NO_RESIZE" ng-reflect-data-is-available="true">
                        <div ng-reflect-form="[object Object]" class="  ng-dirty">
                            <div ng-reflect-name="media" class=" ng-valid ng-dirty">
                                <image-upload _nghost-c0="" ng-reflect-before-upload="function (metadata) {" ng-reflect-button-caption="Upload Image" ng-reflect-drop-box-message="or drop image here" ng-reflect-file-too-large-message="Image must be no larger than 1" ng-reflect-headers="[object Object]" ng-reflect-max-file-size="10485760" ng-reflect-preview="false" ng-reflect-supported-extensions="png,jpg,jpeg" ng-reflect-url="/ccf2-unt/upload">
                                    <div _ngcontent-c0="" filedrop="" class="img-ul" ng-reflect-ng-class="img-ul" ng-reflect-accept="image/png,image/jpg,image/jpeg">
                                        <div _ngcontent-c0="" class="img-ul-file-upload img-ul-hr-inline-group">
                                            <label _ngcontent-c0="" class="img-ul-upload img-ul-button" tabindex="0"> <span _ngcontent-c0="">Upload Image</span>
                                                <input _ngcontent-c0="" multiple="" type="file" accept="image/png,image/jpg,image/jpeg">
                                            </label>
                                            <label _ngcontent-c0="" class="img-ul-clear img-ul-button"> <span _ngcontent-c0="">Clear</span> </label>
                                            <div _ngcontent-c0="" class="img-ul-drag-box-msg">or drop image here</div>
                                        </div>
                                    </div>
                                </image-upload>
                                <div class="img-preview" dnd-sortable-container="" draggable="false" ng-reflect-sortable-data="" style="cursor: pointer;">
                                    <div dnd-sortable="" draggable="true" ng-reflect-index="0" style="cursor: pointer;" class=""> <img alt="" tabindex="0" ng-reflect-name="0" src="../img/ccf-logo.png" class="  ng-valid">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-progressable" id=""> <span class="btn-label">Save</span> </button>
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>







