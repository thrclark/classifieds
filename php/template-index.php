<?php 
$section = '';
$page_title = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/head-styles.php') ?>
<style type="text/css">
.btn-outline-secondary:active, .btn-outline-secondary.active, .show > .btn-outline-secondary.dropdown-toggle {
	color: #868e96;
	background-color: white;
}
</style>
</head>
<body>
<?php include ('includes/custom-header.php') ?>
<?php include ('includes/app-header.php') ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            
<div class="nav-side-menu small"> <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out" >
            <li  data-toggle="collapse" data-target="#products" class="collapsed active"> <a href="#">Nav 1 <span class="arrow"></span></a>
                <ul class="sub-menu collapse show" id="products">
                    <li><a href="#">Page Title</a></li>
                    <li class="active"><a href="#">Page Title</a></li>
                    <li><a href="#">Page Title</a></li>
                    <li><a href="#">Page Title</a></li>
                    <li><a href="#">Page Title</a></li>
                </ul>
            </li>
            <li data-toggle="collapse" data-target="#service" class="collapsed"> <a href="#"> Nav 2 <span class="arrow"></span></a>
                <ul class="sub-menu collapse" id="service">
                    <li><a href="#">Page Title</a></li>
                    <li><a href="#">Page Title</a></li>
                    <li><a href="#">Page Title</a></li>
                </ul>
            </li>
            <li data-toggle="collapse" data-target="#new" class="collapsed"> <a href="#"> Nav 3 <span class="arrow"></span></a>
                <ul class="sub-menu collapse" id="new">
                    <li><a href="#">Page Title</a></li>
                    <li><a href="#">Page Title</a></li>
                    <li><a href="#">Page Title</a></li>
                    <li><a href="#">Page Title</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

        </div>
        <div class="col-12 col-md-9">
            <div class="main-content">
                <div class="doc-header" style="    margin-bottom: 15px;">
                    <div class="row">
                        <div class="col doc-title">
                            <h2> Page Title</h2>
                        </div>
                        <div class="col doc-controls">
                            <button type="button" class="btn btn-outline-secondary btn-sm float-md-right"> New Item</button>
                        </div>
                    </div>
                </div>
                <div class="utility-bar">
                    <div class="row">
                        <div class="utility-bar-item col-md-auto">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label small">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    Checkbox </label>
                            </div>
                        </div>
                        <div class="utility-bar-item col-4">
                            <label for="utilityitem1" class="sr-only">Search</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Filter" id="utilityitem1">
                        </div>
                    </div>
                </div>
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
                            <td><div class="dropdown show"> <a class="btn btn-outline-secondary btn-sm dropdown-toggle" href="#" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                    <div class="dropdown-menu" aria-labelledby=""> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Rob</td>
                            <td>Penguin</td>
                            <td>03/21/2017</td>
                            <td><div class="dropdown show"> <a class="btn btn-outline-secondary btn-sm dropdown-toggle" href="#" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                    <div class="dropdown-menu" aria-labelledby=""> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a></div>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Cat</td>
                            <td>03/21/2017</td>
                            <td><div class="dropdown show"> <a class="btn btn-outline-secondary btn-sm dropdown-toggle" href="#" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
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
                            <td><div class="dropdown show"> <a class="btn btn-outline-secondary btn-sm dropdown-toggle" href="#" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                    <div class="dropdown-menu" aria-labelledby=""> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a></div>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Cat</td>
                            <td>03/21/2017</td>
                            <td><div class="dropdown show"> <a class="btn btn-outline-secondary btn-sm dropdown-toggle" href="#" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                    <div class="dropdown-menu" aria-labelledby=""> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a></div>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Steve</td>
                            <td>Dog</td>
                            <td>03/21/2017</td>
                            <td><div class="dropdown show"> <a class="btn btn-outline-secondary btn-sm dropdown-toggle" href="#" role="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
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
                
                <!-- <div class="testbox">asdf</div>--> 
            </div>
        </div>
    </div>
</div>
<?php include ('includes/footer-scripts.php') ?>
</body>
</html>
