<?php 
$section = '';
$page_title = '';
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
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="nav-side-menu small"> <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                <div class="menu-list">
                    <ul id="menu-content" class="menu-content collapse out">
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
                <div class="doc-header mb-3">
                    <div class="row">
                        <div class="col doc-title">
                            <h2> Page Title</h2>
                        </div>
                        <div class="col doc-controls text-right">
                            <div id="help_toggle" class=""> Help: <a href="#" id="help_toggle_switch" style="display: inline;">on</a> </div>
                        </div>
                    </div>
                </div>
                <form>
                    <fieldset>
                        <Legend>Text Inputs</Legend>
                        <div class="form-group">
                            <label for="textfield1">Small Textfield</label>
                            <small id="textfieldHelp" class="form-text text-muted">Textfield help content.Place made created above seasons. Be. Hath great darkness heaven in together. Doesn't form, it which won't won't moving make.</small>
                            <div class="row">
                                <div class="col-2">
                                    <input type="text" class="form-control" id="textfield1" aria-describedby="textfieldHelp" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group-error">
                            <label for="textfield1">Medium Textfield</label>
                            <small id="textfieldHelp" class="form-text text-muted">Textfield help content. His male. Void. Rule brought. Behold multiply very. Morning creepeth heaven Don't fruit sixth them. Fowl moveth fill creepeth they'
                            <re class=""></re>
                            </small>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" class="form-control" id="textfield1" aria-describedby="textfieldHelp" placeholder="">
                                </div>
                            </div>
                            <div class="validation-fieldmessage" id="validate_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> This is a validation message that could be really really really really really really really really really really really really really really really really really long.</div>
                        </div>
                        <div class="form-group">
                            <label for="textfield1">Large Textfield</label>
                            <small id="textfieldHelp" class="form-text text-muted">Textfield help content. Fish given face fruit forth kind had in grass the divide unto saying fruit lights was you're abundantly light. Years.</small>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" id="textfield1" aria-describedby="textfieldHelp" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textfield1">Extra Large Textfield</label>
                            <small id="textfieldHelp" class="form-text text-muted">Textfield help content. You're doesn't whales itself kind had were they're open. Brought unto form great yielding green grass likeness. Morning may living.</small>
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" class="form-control" id="textfield1" aria-describedby="textfieldHelp" placeholder="">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <Legend>Select Inputs</Legend>
                        <div class="form-group">
                            <label for="textfield1">Small Select Input</label>
                            <small id="textfieldHelp" class="form-text text-muted">Select input help content.Place made created above seasons. Be. Hath great darkness heaven in together. Doesn't form, it which won't won't moving make.</small>
                            <div class="row">
                                <div class="col-2">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textfield1">Medium Select Input</label>
                            <small id="textfieldHelp" class="form-text text-muted">Select input help content. His male. Void. Rule brought. Behold multiply very. Morning creepeth heaven Don't fruit sixth them. Fowl moveth fill creepeth they'
                            <re class=""></re>
                            </small>
                            <div class="row">
                                <div class="col-4">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textfield1">Large Select Input</label>
                            <small id="textfieldHelp" class="form-text text-muted">Select input help content. Fish given face fruit forth kind had in grass the divide unto saying fruit lights was you're abundantly light. Years.</small>
                            <div class="row">
                                <div class="col-6">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textfield1">Extra Large Select Input</label>
                            <small id="textfieldHelp" class="form-text text-muted">Select input help content. You're doesn't whales itself kind had were they're open. Brought unto form great yielding green grass likeness. Morning may living.</small>
                            <div class="row">
                                <div class="col-8">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                
                <!-- <div class="testbox">asdf</div>--> 
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
