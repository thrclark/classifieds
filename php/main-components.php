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
</style>
</head>
<body style="background:">
<div id="main" >
    <section class="mt-5" role="main">
        <div class="container">
            <h1 class="mb-5">Classifieds UI Components</h1>
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
