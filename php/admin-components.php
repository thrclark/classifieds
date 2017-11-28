<?php 
$page_title = 'cat_all';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/admin-styles.php') ?>
<style>
h2 {
	font-size: 24px;
	margin-bottom: 20px;
}
</style>
</head>
<body style="background:#FFFFFF">
<div id="main" >
    <section class="mt-5" role="main">
        <div class="container">
            <h1>Classifieds UI Components</h1>
            <hr>
            <h2 > Character Count Constraint</h2>
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
            </div>
            <hr>
            <h2 >Pagination</h2>
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
            </div>
            
            
              <hr>
            
                        <h2 >Image Uploader</h2>
            <div class="row">
                <div class="col-6">
                   
                   
                   <div class="imageuploader">
                        <div class="imageuploader-controls"> <span class="btn btn-outline-secondary btn-sm mr-2">Upload image</span> or drop image here</div>
                        <div class="imageuploader-images">
                            <div class="imageuploader-image"><img src="../img/trident-large.png" alt="">
                                <div class="deleteimage"><i class="fa fa-close" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
            </div>
            <hr>
        </div>
    </section>
</div>
<?php include('includes/admin-footerscripts.php') ?>
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
</body>
</html>
