<?php 
$page_title = 'cat_all';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/main-styles.php') ?>
<link href="../css/prism.css" rel="stylesheet" type="text/css">
<style>
.card-header {
	font-size: 24px;
}
.demo-container {
	padding: 30px;
	background: #ededed
}
.card-header .fa {
	margin-top: 3px;
}
.card-header[aria-expanded="true"] .fa:before {
	content: "\f107";
}
pre {
	max-height: 350px;
}
</style>
</head>
<body style="background:">
<div id="main">
    <section class="mt-5" role="main">
        <div class="container">
            <h1 class="mb-5">Classifieds UI Components <br>
                <small class="text-muted">Main Interface</small></h1>
            <div class="card border-light mb-3">
                <div class="card-header" data-toggle="collapse" href="#collapse_clearfield" aria-expanded="false" aria-controls="collapse_clearfield"> Clear Field <i class="fa fa-angle-left pull-right" aria-hidden="true"></i></div>
                <div class="card-body collapse" id="collapse_clearfield">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <?php include('components/clearfield.php') ?>
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/clearfield.php" class="language-html"></pre>
                        </div>
                        <div class="col-12"> <small>JS</small>
                            <pre data-src="components/clearfield-js.php" class="language-js"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-3">
                <div class="card-header" data-toggle="collapse" href="#collapse_radiocheck" aria-expanded="false" aria-controls="collapse_radiocheck"> Radio &amp; Checkbox <i class="fa fa-angle-left pull-right" aria-hidden="true"></i></div>
                <div class="card-body collapse" id="collapse_radiocheck">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <?php include('components/radiocheck.php') ?>
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/radiocheck.php" class="language-html"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-3">
                <div class="card-header" data-toggle="collapse" href="#collapse_buttons" aria-expanded="false" aria-controls="collapse_buttons"> Buttons <i class="fa fa-angle-left pull-right" aria-hidden="true"></i></div>
                <div class="card-body collapse" id="collapse_buttons">
                    <div class="row">
                        <div class="col-3 mb-3">
                            <p>Large</p>
                            <?php include('components/buttons-large.php') ?>
                        </div>
                        <div class="col-3 mb-3">
                            <p>Small</p>
                            <?php include('components/buttons-small.php') ?>
                        </div>
                        <div class="col-12"> <small>HTML - LARGE</small>
                            <pre data-src="components/buttons-large.php" class="language-html"></pre>
                        </div>
                        <div class="col-12"> <small>HTML - SMALL</small>
                            <pre data-src="components/buttons-small.php" class="language-html"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-3">
                <div class="card-header" data-toggle="collapse" href="#collapse_sitenav" aria-expanded="false" aria-controls="collapse_sitenav">Site Navigation <i class="fa fa-angle-left pull-right" aria-hidden="true"></i></div>
                <div class="card-body collapse" id="collapse_sitenav">
                    <div class="row">
                        <div class="col-3 mb-3">
                            <p>Default</p>
                            <div class="demo-container">
                                <?php include('components/menu-default.php') ?>
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <p>With Categories</p>
                            <div class="demo-container">
                                <?php include('components/menu-categories.php') ?>
                            </div>
                        </div>
                        <div class="col-12"> <small>HTML - DEFAULT</small>
                            <pre data-src="components/menu-default.php" class="language-html"></pre>
                            <small>HTML - CATEGORIES</small>
                            <pre data-src="components/menu-categories.php" class="language-html"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-3">
                <div class="card-header" data-toggle="collapse" href="#collapse_favoriting" aria-expanded="false" aria-controls="collapse_favoriting">Favoriting <i class="fa fa-angle-left pull-right" aria-hidden="true"></i></div>
                <div class="card-body collapse" id="collapse_favoriting">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <p> Click on the examples below.</p>
                            <?php include('components/favoriting.php') ?>
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/favoriting.php" class="language-html"></pre>
                            <small>JS</small>
                            <pre data-src="components/favoriting-js.php" class="language-js"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-3">
                <div class="card-header" data-toggle="collapse" href="#collapse_modals" aria-expanded="false" aria-controls="collapse_modals">Modals <i class="fa fa-angle-left pull-right" aria-hidden="true"></i></div>
                <div class="card-body collapse" id="collapse_modals">
                    <div class="row">
                        <div class="col-12">
                            <p>Note - the modal header has been incorporated into the brand color theming framework. When a specific brand color is selected, the modal header background color will change accordingly.</p>
                        </div>
                        <div class="col-6 mb-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1"> Default </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2"> w/Text Blocks </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3"> w/Form Fields </button>
                            <!--Modal 1-->
                            <?php include('components/modal.php') ?>
                            <!--Modal 2-->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModal2Label">Modal title</h3>
                                            <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close" > <span aria-hidden="true"> <i class="fa fa-close" aria-hidden="true"></i> </span> </button>
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
                            <!--Modal 3-->
                            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModal3Label">Modal title</h3>
                                            <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close" > <span aria-hidden="true"> <i class="fa fa-close" aria-hidden="true"></i> </span> </button>
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
                            <!-- End Demo Modals--> 
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/modal.php" class="language-html"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-3">
                <div class="card-header" data-toggle="collapse" href="#collapse_progress" aria-expanded="false" aria-controls="collapse_progress">Button Progress Messaging <i class="fa fa-angle-left pull-right" aria-hidden="true"></i></div>
                <div class="card-body collapse" id="collapse_progress">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <?php include('components/buttonprogress.php') ?>
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/buttonprogress.php" class="language-html"></pre>
                            <small>JS</small>
                            <pre data-src="components/buttonprogress-js.php" class="language-js"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-3">
                <div class="card-header" data-toggle="collapse" href="#collapse_counter" aria-expanded="false" aria-controls="collapse_counter">Character Count Constraint <i class="fa fa-angle-left pull-right" aria-hidden="true"></i></div>
                <div class="card-body collapse" id="collapse_counter">
                    <div class="row">
                        <div class="col-6">
                            <?php include('components/counter.php') ?>
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/counter.php" class="language-html"></pre>
                            <small>JS</small>
                            <pre data-src="components/counter-js.php" class="language-js"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-3">
                <div class="card-header" data-toggle="collapse" href="#collapse_pagination" aria-expanded="false" aria-controls="collapse_pagination">Pagination <i class="fa fa-angle-left pull-right" aria-hidden="true"></i></div>
                <div class="card-body collapse" id="collapse_pagination">
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
                            <?php include('components/pagination.php') ?>
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/pagination.php" class="language-html"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-light mb-3">
                <div class="card-header" data-toggle="collapse" href="#collapse_uploader" aria-expanded="false" aria-controls="collapse_uploader">Image Uploader <i class="fa fa-angle-left pull-right" aria-hidden="true"></i></div>
                <div class="card-body collapse" id="collapse_uploader">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <?php include('components/imageuploader.php') ?>
                        </div>
                        <div class="col-12"> <small>HTML</small>
                            <pre data-src="components/imageuploader.php" class="language-html"></pre>
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

</script> 
<script>
    // Open/close search panel
    $("#findIcon").click(function() {
        $(".icon-search").slideDown("slow");
    });
    $("#cancelSearch,#iconSelection button ").click(function() {
        $(".icon-search").slideUp("slow");
    });
    // Set icon name
    $("#iconSelection button").click(function() {
        $(".icon-name").replaceWith("<div class='col icon-name'>" + $(this).text() + "</div>");
    });

    // Set icon class
    $("#iconSelection button i").click(function() {
        var iconClass = $(this).attr("class");
		$( ".icon-display i" ).removeClass();
		$( ".icon-display i" ).addClass(iconClass);
    });
	
	
	

    // Filtering function
    function selectIcon() {
        var input, filter, iconSelection, button, span, i;
        input = document.getElementById("selectIcon");
        filter = input.value.toUpperCase();
        iconSelection = document.getElementById("iconSelection");
        button = iconSelection.getElementsByTagName("button");
        for (i = 0; i < button.length; i++) {
            span = button[i].getElementsByTagName("span")[0];
            if (span.innerHTML.toUpperCase().indexOf(filter) > -1) {
                button[i].style.display = "";
            } else {
                button[i].style.display = "none";

            }
        }
    }
</script> 
<script>
    $(document).ready(function() {
        $('#counterDemo1,#counterDemo2').maxlength({
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
<script>
$(document).ready(function() {
    $('#table_filter').keydown(function() {
        tmpval = $(this).val();
        if (tmpval == '') {
            $(".cleartext").css({
                "display": "none"
            });
        } else {
            $(".cleartext").css({
                "display": "block"
            });
        }
    });
    $(".cleartext").click(function() {
        $(".cleartext").hide();
        $("#table_userads tr").show();
        $("#table_filter").val("");
        $("#table_filter").focus();
    });
});
</script>
</body>
</html>
