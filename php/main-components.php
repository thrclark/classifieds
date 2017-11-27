<?php 
$page_title = 'cat_all';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/main-styles.php') ?>
<style>
h2 {
	font-size: 18px;
	margin-bottom:20px;
}
</style>
</head>
<body>
<div id="main" >
    <section class="main-content" role="main">
        <div class="container">
            <h1>Classifieds UI Components</h1>
            <hr>
            <h2 > Character Count Constraint</h2>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Text input (20 characters)</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" maxlength="20">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Textarea (30 characters)</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="30"></textarea>
                    </div>
                </div>
            </div><hr>
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
