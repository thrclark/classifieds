<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Policy maintenance';
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
    <div class="row mb-3 justify-content-between align-items-center">
        <div class="col">
            <h1> <?php echo $page_title; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="main-content" id="main-content">
                <div class="form-group">
                    <label class="control-label" id="urlLabel">
                        <message key="policy">Policy</message>
                    </label>
                    <div class="ccf-instructional-text" id="urlDirections">
                        <message key="admin.ldap.field.url.directions">Enter a policy statement which all users will agree to before posting ads.</message>
                    </div>
                    <textarea id="richText1"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script> 
<script>
var simplemde = new SimpleMDE({ element: $("#richText1")[0] });
</script>
</body>
</html>
