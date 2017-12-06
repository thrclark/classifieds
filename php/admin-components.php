<?php 
$page_title = 'cat_all';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/admin-styles.php') ?>
<link href="../css/prism.css" rel="stylesheet" type="text/css">
<style>
.card-header {
	font-size: 24px;
}
</style>
</head>
<body style="background:">
<div id="main">
    <section class="mt-5" role="main">
        <div class="container">
            <h1 class="mb-5">Classifieds UI Components</h1>
            <div class="card border-light mb-5">
                <div class="card-header">'Favoriting'</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <p> Click on the examples below.</p>
                            <!--Icon only-->
                            <button class="btn btn-link favorite"> <i aria-hidden="true" class="fa fa-star-o"></i> <span class="sr-only">Add to watchlist</span></button>
                            <!--Button with icon-->
                            <button class="btn btn-outline-secondary btn-sm favorite"> <i aria-hidden="true" class="fa fa-star-o"></i> <span class="">Add to Watchlist</span></button>
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/favoriting.html" class="language-html"></pre>
                            <small>JS</small>
                            <pre data-src="components/favoriting-js.html" class="language-js"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-5">
                <div class="card-header">Modals</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <p>Note - the modal header has been incorporated into the brand color theming framework. When a specific brand color is selected, the modal header background color will change accordingly.</p>
                        </div>
                        <div class="col-6 mb-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1"> Default </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2"> w/Text Blocks </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3"> w/Form Fields </button>
                            <!--Modals-->
                            
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModal1Label">Modal title</h3>
                                            <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close" style=""> <span aria-hidden="true"> <i class="fa fa-close" aria-hidden="true"></i> </span> </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Well, hello there.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Action</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModal2Label">Modal title</h3>
                                            <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close" style=""> <span aria-hidden="true"> <i class="fa fa-close" aria-hidden="true"></i> </span> </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>In friendship diminution instrument so. Son sure paid door with say them. Two among sir sorry men court. Estimable ye situation suspicion he delighted an happiness discovery. Fact are size cold why had part. If believing or sweetness otherwise in we forfeited. Tolerably an unwilling arranging of determine. Beyond rather sooner so if up wishes or. </p>
                                            <dl class="row">
                                                <dt class="col-12">Description</dt>
                                                <dd class="col-12">So feel been kept be at gate. Be september it extensive oh concluded of certainty. In read most gate at body held it ever no.</dd>
                                                <dt class="col-12">Short</dt>
                                                <dd class="col-12">Very short indeed.</dd>
                                                <dt class="col-12">Long Description</dt>
                                                <dd class="col-12">Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. Not him old music think his found enjoy merry. Listening acuteness dependent at or an. Apartments thoroughly unsatiable terminated  how themselves. She are ten hours wrong walls stand early. Domestic perceive on an ladyship extended received do. Why jennings our whatever his learning gay perceive. Is against no he without subject. Bed connection unreserved preference partiality not unaffected. Years merit trees so think in hoped we as.</dd>
                                            </dl>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModal3Label">Modal title</h3>
                                            <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close" style=""> <span aria-hidden="true"> <i class="fa fa-close" aria-hidden="true"></i> </span> </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Text input</label>
                                                <small id="" class="form-text text-muted">Instructional text for this form field.</small>
                                                <input type="text" class="form-control" id="" aria-describedby="" placeholder="type anything here" maxlength="20">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for=""> Text area </label>
                                                <small id="" class="form-text text-muted">Instructional text for this text area.</small>
                                                <textarea class="form-control" id="" rows="6" maxlength="40"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Action</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- End Modals--> 
                            
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/modal.html" class="language-html"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-5">
                <div class="card-header"> Button Progress Messaging</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <button type="button" class="btn btn-primary	" id="ButtonProgressDemo"><span class="btn-label">Click Me</span></button>
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/buttonprogress.html" class="language-html"></pre>
                            <small>JS</small>
                            <pre data-src="components/buttonprogress-js.html" class="language-js"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-5">
                <div class="card-header">Character Count Constraint</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Text input (20 characters)</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="type anything here" maxlength="20">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Textarea (30 characters)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="30" placeholder="type anything here"></textarea>
                            </div>
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/counter.html" class="language-html"></pre>
                            <small>JS</small>
                            <pre data-src="components/counter-js.html" class="language-js"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-5">
                <div class="card-header">Pagination</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <p>With 5 or less pages</p>
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item disabled"> <span class="page-link"  tabindex="-1"><i class="fa fa-angle-double-left" aria-hidden="true"></i><span class="sr-only">Previous</span></span> </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item disabled"> <a class="page-link" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span class="sr-only">Next</span></a> </li>
                                </ul>
                            </nav>
                            <p>With 5+ pages</p>
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item disabled"> <span class="page-link"  tabindex="-1"><i class="fa fa-angle-double-left" aria-hidden="true"></i><span class="sr-only">Previous</span></span> </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item "> <a class="page-link" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span class="sr-only">Next</span></a> </li>
                                </ul>
                            </nav>
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item "> <span class="page-link"  tabindex="-1"><i class="fa fa-angle-double-left" aria-hidden="true"></i><span class="sr-only">Previous</span></span> </li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item "><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item disabled"> <a class="page-link" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span class="sr-only">Next</span></a> </li>
                                </ul>
                            </nav>
                            <p>Middle of a large set</p>
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item"> <span class="page-link"  tabindex="-1"><i class="fa fa-angle-double-left" aria-hidden="true"></i><span class="sr-only">Previous</span></span> </li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item "><a class="page-link" href="#">11</a></li>
                                    <li class="page-item"><a class="page-link" href="#">12</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">13</a></li>
                                    <li class="page-item"><a class="page-link" href="#">14</a></li>
                                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"> <a class="page-link" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i><span class="sr-only">Next</span></a> </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/pagination.html" class="language-html"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-5">
                <div class="card-header">Image Uploader</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="imageuploader mb-3">
                                <div class="imageuploader-controls"> <span class="btn btn-outline-secondary btn-sm mr-2">Upload image</span> or drop image here</div>
                                <div class="imageuploader-images">
                                    <div class="imageuploader-image"><img src="../img/trident-large.png" alt="">
                                        <div class="deleteimage"><i class="fa fa-close" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/imageuploader.html" class="language-html"></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include('includes/admin-footerscripts.php') ?>
<script src="../js/prism.js"></script> 
<script>
    $(document).ready(function() {
        $('input.form-control, textarea.form-control').maxlength({
            threshold: 10,
			warningClass: "badge badge-success counter",
            limitReachedClass: "badge badge-danger counter",
			placement: 'bottom',
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#ButtonProgressDemo").click(function() {
            $("#ButtonProgressDemo").toggleClass("btn-progress");
            $(".btn-label").fadeOut("fast",function() {
                $(".btn-label").text(($(".btn-label").text() == 'Saving...') ? 'Click Me' : 'Saving...').fadeIn(200);
            })
        });
    });
</script>
</body>
</html>
