
<div class="modal fade" id="pub_fontheader" tabindex="-1" role="dialog" aria-labelledby="pub_fontheader" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Header font family </h5>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal"> <span class="rbt-icon-close"></span> </button>
            </div>
            <div class="modal-body">
                <div class="form-group ">
                    <label class="control-label " for="headerfont">Font family for headers </label>
                    <div class="ccf-instructional-text">Choose a font family to be used for all headers.</div>
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
                </div>
                <div class="form-group custom-headerfont">
                    <label class="control-label" for="font_family"> Font family name</label>
                    <div class="ccf-instructional-text">Specify the name of this custom font.</div>
                    <input class="form-control" id="font_family" name="font_family" type="text" required="required">
                </div>
                <div class="form-group custom-headerfont">
                    <label class="control-label" for="font_family"> Weight</label>
                    <div class="ccf-instructional-text">Specify the weight of this custom font.</div>
                    <select ng-model="fontFace.fontWeight" name="fontFaces[0].fontWeight" id="fontFaces[0].fontWeight" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontWeights" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
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
                <div class="form-group custom-headerfont">
                    <label class="control-label" for="font_family"> Style</label>
                    <div class="ccf-instructional-text">Specify the style of this custom font.</div>
                    <select ng-model="fontFace.fontStyle" name="fontFaces[0].fontStyle" id="fontFaces[0].fontStyle" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStyles" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                        <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                        <option label="italic" value="string:ITALIC">italic</option>
                        <option label="oblique" value="string:OBLIQUE">oblique</option>
                    </select>
                </div>
                <div class="form-group custom-headerfont">
                    <label class="control-label" for="font_family"> Stretch</label>
                    <div class="ccf-instructional-text">Specify the stretch of this custom font.</div>
                    <select ng-model="fontFace.fontStretch" name="fontFaces[0].fontStretch" id="fontFaces[0].fontStretch" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStretches" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
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
                <div class="form-group custom-headerfont"> <strong> Font URLs</strong>
                    <div class="ccf-instructional-text">Specify URLs for this custom font.</div>
                    <table class="table rbt-table-actions mb-2" id="myTable" style="margin-bottom: 0px">
                        <thead class="sr-only">
                            <tr>
                                <th >URL</th>
                                <th>Type</th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-50"><input type="text" class="form-control" placeholder="Enter URL"></td>
                                <td class="w-50"><select ng-model="source.format" name="fontFaces[0].fontSources[0].format" id="fontFaces[0].fontSources[0].format" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontFormats" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched" required aria-invalid="false">
                                        <option selected="">Select type</option>
                                        <option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option>
                                        <option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
                                        <option label="SVG" value="string:SVG">SVG</option>
                                        <option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
                                        <option label="WOFF" value="string:WOFF">WOFF</option>
                                        <option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
                                    </select></td>
                                <td><a href="#" class="btn btn-outline-primary btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> <span class="sr-only">Delete</span></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col"><a href="#myTable" class="btn btn-outline-primary btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> URL</a></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-progressable" id=""> <span class="btn-label">Save</span> </button>
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
