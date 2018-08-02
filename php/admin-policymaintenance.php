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
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Policy</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Policy violations</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent" tabindex="0" role="tabpanel">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <h2 class="rbt-ts-23 font-weight-bold mb-3 sr-only">Policy</h2>
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
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <h3 class="rbt-ts-23 font-weight-bold mb-3">Panel 2</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>
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
