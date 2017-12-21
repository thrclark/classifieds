<?php 
$section = 'settings';
$page_title = 'categories';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/admin-styles.php') ?>
<style type="text/css">
.btn-outline-secondary:active, .btn-outline-secondary.active, .show > .btn-outline-secondary.dropdown-toggle {
	color: #868e96;
	background-color: white;
}
</style>
</head>
<body>
<?php include('includes/all-custom-header.php') ?>
<?php include('includes/admin-appheader.php') ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            <div id="adminNav">
                <?php include('includes/admin-nav.php') ?>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="main-content">
                <div class="doc-header" style="    margin-bottom: 15px;">
                    <div class="row">
                        <div class="col doc-title">
                            <h2>Categories</h2>
                        </div>
                        <div class="col doc-controls">
                            <button type="button" class="btn btn-outline-secondary btn-sm float-md-right"> New Item</button>
                        </div>
                    </div>
                </div>
               <?php include('includes/admin-utilitybar.php') ?>
                <table class="table table-sm table-actions">
                    <thead>
                        <tr>
                            <th> Name</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th><span class="sr-only">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Cat</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>Steve</td>
                            <td>Dog</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>Jill</td>
                            <td>Giraffe</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>Stacey</td>
                            <td>Elephant</td>
                            <td>03/21/2017</td>
                            <td><div class="dropdown show"> <a class="btn btn-outline-secondary btn-sm dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                    <div class="dropdown-menu" aria-labelledby=""> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Rob</td>
                            <td>Penguin</td>
                            <td>03/21/2017</td>
                            <td><div class="dropdown show"> <a class="btn btn-outline-secondary btn-sm dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                    <div class="dropdown-menu" aria-labelledby=""> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a></div>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Cat</td>
                            <td>03/21/2017</td>
                            <td><div class="dropdown show"> <a class="btn btn-outline-secondary btn-sm dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                    <div class="dropdown-menu" aria-labelledby=""> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a></div>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Steve</td>
                            <td>Dog</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>Jill</td>
                            <td>Giraffe</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>Stacey</td>
                            <td>Elephant</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>Rob</td>
                            <td>Penguin</td>
                            <td>03/21/2017</td>
                            <td><div class="dropdown show"> <a class="btn btn-outline-secondary btn-sm dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                    <div class="dropdown-menu" aria-labelledby=""> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a></div>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Cat</td>
                            <td>03/21/2017</td>
                            <td><div class="dropdown show"> <a class="btn btn-outline-secondary btn-sm dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                    <div class="dropdown-menu" aria-labelledby=""> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a></div>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Steve</td>
                            <td>Dog</td>
                            <td>03/21/2017</td>
                            <td><div class="dropdown show"> <a class="btn btn-outline-secondary btn-sm dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                    <div class="dropdown-menu" aria-labelledby=""> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a></div>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Jill</td>
                            <td>Giraffe</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>Stacey</td>
                            <td>Elephant</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>Rob</td>
                            <td>Penguin</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Cat</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>Steve</td>
                            <td>Dog</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>Jill</td>
                            <td>Giraffe</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>Stacey</td>
                            <td>Elephant</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                        <tr>
                            <td>Rob</td>
                            <td>Penguin</td>
                            <td>03/21/2017</td>
                            <td><button type="button" class="btn btn-outline-secondary btn-sm">Action</button></td>
                        </tr>
                    </tbody>
                </table>
                
                    <?php include('includes/all-pagination.php') ?>
                    
                
                <!-- <div class="testbox">asdf</div>--> 
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
