<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Categories';
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
        <div class="col-12">
            <div class="main-content" id="main-content">
                <div class="row mb-3 justify-content-between align-items-center">
                    <div class="col">
                        <h1> <?php echo $page_title; ?></h1>
                    </div>
                </div>
                <form novalidate class="ng-untouched ng-pristine ng-valid">
                    <div class="form-group">
                        <label class="control-label" id="nameLabel">
                            <message key="admin.field.name">Name</message>
                        </label>
                        <div class="ccf-instructional-text" id="nameDirections">
                            <message key="admin.category.field.name.directions"></message>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <countdown>
                                    <div class="rbt-charcount">
                                        <input aria-labelledby="nameLabel nameDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="name">
                                        <span class="badge badge-success"> 85 </span> </div>
                                </countdown>
                            </div>
                        </div>
                        <errors controlname="name"> 
                            <!----> 
                        </errors>
                    </div>
                    <div class="form-group">
                        <label class="control-label" id="iconLabel">
                            <message key="admin.category.field.icon">Icon</message>
                        </label>
                        <div class="ccf-instructional-text" id="iconDirections">
                            <message key="admin.category.field.icon.directions">Select an icon to represent this category.</message>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <icon-picker label-ids="iconLabel iconDirections"><!---->
                                    
                                    <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="fa fa-battery-1"></i></span> </span>
                                        <input ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" typeaheadminlength="0" typeaheadoptionfield="className" typeaheadoptionslimit="7" aria-labelledby="iconLabel iconDirections">
                                    </div>
                                    <p class="text-right">
                                        <button class="btn btn-sm btn-link" type="button">
                                        <message key="admin.icon.action.viewIconList">Choose from list</message>
                                        </button>
                                    </p>
                                    <div aria-hidden="true" aria-labelledby="iconModalLabel" bsmodal="" class="modal fade" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title float-left" id="iconModalLabel">
                                                        <message key="admin.icon.dialog.title">Choose an icon</message>
                                                    </h4>
                                                    <button aria-label="Close" class="close float-right" type="button"> <span aria-hidden="true">×</span> </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row"> 
                                                        <!---->
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-address-book" style="font-size: 1.25rem;"></i><br>
                                                        address-book </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-address-book-o" style="font-size: 1.25rem;"></i><br>
                                                        address-book-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-address-card" style="font-size: 1.25rem;"></i><br>
                                                        address-card </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-address-card-o" style="font-size: 1.25rem;"></i><br>
                                                        address-card-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-adjust" style="font-size: 1.25rem;"></i><br>
                                                        adjust </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-align-center" style="font-size: 1.25rem;"></i><br>
                                                        align-center </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-align-justify" style="font-size: 1.25rem;"></i><br>
                                                        align-justify </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-align-left" style="font-size: 1.25rem;"></i><br>
                                                        align-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-align-right" style="font-size: 1.25rem;"></i><br>
                                                        align-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-ambulance" style="font-size: 1.25rem;"></i><br>
                                                        ambulance </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-american-sign-language-interpreting" style="font-size: 1.25rem;"></i><br>
                                                        american-sign-language-interpreting </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-anchor" style="font-size: 1.25rem;"></i><br>
                                                        anchor </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-angle-double-down" style="font-size: 1.25rem;"></i><br>
                                                        angle-double-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-angle-double-left" style="font-size: 1.25rem;"></i><br>
                                                        angle-double-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-angle-double-right" style="font-size: 1.25rem;"></i><br>
                                                        angle-double-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-angle-double-up" style="font-size: 1.25rem;"></i><br>
                                                        angle-double-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-angle-down" style="font-size: 1.25rem;"></i><br>
                                                        angle-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-angle-left" style="font-size: 1.25rem;"></i><br>
                                                        angle-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-angle-right" style="font-size: 1.25rem;"></i><br>
                                                        angle-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-angle-up" style="font-size: 1.25rem;"></i><br>
                                                        angle-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-archive" style="font-size: 1.25rem;"></i><br>
                                                        archive </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-area-chart" style="font-size: 1.25rem;"></i><br>
                                                        area-chart </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrow-circle-down" style="font-size: 1.25rem;"></i><br>
                                                        arrow-circle-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrow-circle-left" style="font-size: 1.25rem;"></i><br>
                                                        arrow-circle-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrow-circle-o-down" style="font-size: 1.25rem;"></i><br>
                                                        arrow-circle-o-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrow-circle-o-left" style="font-size: 1.25rem;"></i><br>
                                                        arrow-circle-o-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrow-circle-o-right" style="font-size: 1.25rem;"></i><br>
                                                        arrow-circle-o-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrow-circle-o-up" style="font-size: 1.25rem;"></i><br>
                                                        arrow-circle-o-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrow-circle-right" style="font-size: 1.25rem;"></i><br>
                                                        arrow-circle-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrow-circle-up" style="font-size: 1.25rem;"></i><br>
                                                        arrow-circle-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrow-down" style="font-size: 1.25rem;"></i><br>
                                                        arrow-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrow-left" style="font-size: 1.25rem;"></i><br>
                                                        arrow-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrow-right" style="font-size: 1.25rem;"></i><br>
                                                        arrow-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrow-up" style="font-size: 1.25rem;"></i><br>
                                                        arrow-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrows" style="font-size: 1.25rem;"></i><br>
                                                        arrows </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrows-alt" style="font-size: 1.25rem;"></i><br>
                                                        arrows-alt </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrows-h" style="font-size: 1.25rem;"></i><br>
                                                        arrows-h </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-arrows-v" style="font-size: 1.25rem;"></i><br>
                                                        arrows-v </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-asl-interpreting" style="font-size: 1.25rem;"></i><br>
                                                        asl-interpreting </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-assistive-listening-systems" style="font-size: 1.25rem;"></i><br>
                                                        assistive-listening-systems </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-asterisk" style="font-size: 1.25rem;"></i><br>
                                                        asterisk </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-at" style="font-size: 1.25rem;"></i><br>
                                                        at </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-audio-description" style="font-size: 1.25rem;"></i><br>
                                                        audio-description </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-automobile" style="font-size: 1.25rem;"></i><br>
                                                        automobile </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-backward" style="font-size: 1.25rem;"></i><br>
                                                        backward </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-balance-scale" style="font-size: 1.25rem;"></i><br>
                                                        balance-scale </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-ban" style="font-size: 1.25rem;"></i><br>
                                                        ban </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bank" style="font-size: 1.25rem;"></i><br>
                                                        bank </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bar-chart" style="font-size: 1.25rem;"></i><br>
                                                        bar-chart </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bar-chart-o" style="font-size: 1.25rem;"></i><br>
                                                        bar-chart-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-barcode" style="font-size: 1.25rem;"></i><br>
                                                        barcode </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bars" style="font-size: 1.25rem;"></i><br>
                                                        bars </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bath" style="font-size: 1.25rem;"></i><br>
                                                        bath </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bathtub" style="font-size: 1.25rem;"></i><br>
                                                        bathtub </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-battery" style="font-size: 1.25rem;"></i><br>
                                                        battery </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-battery-0" style="font-size: 1.25rem;"></i><br>
                                                        battery-0 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-battery-1" style="font-size: 1.25rem;"></i><br>
                                                        battery-1 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-battery-2" style="font-size: 1.25rem;"></i><br>
                                                        battery-2 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-battery-3" style="font-size: 1.25rem;"></i><br>
                                                        battery-3 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-battery-4" style="font-size: 1.25rem;"></i><br>
                                                        battery-4 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-battery-empty" style="font-size: 1.25rem;"></i><br>
                                                        battery-empty </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-battery-full" style="font-size: 1.25rem;"></i><br>
                                                        battery-full </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-battery-half" style="font-size: 1.25rem;"></i><br>
                                                        battery-half </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-battery-quarter" style="font-size: 1.25rem;"></i><br>
                                                        battery-quarter </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-battery-three-quarters" style="font-size: 1.25rem;"></i><br>
                                                        battery-three-quarters </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bed" style="font-size: 1.25rem;"></i><br>
                                                        bed </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-beer" style="font-size: 1.25rem;"></i><br>
                                                        beer </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bell" style="font-size: 1.25rem;"></i><br>
                                                        bell </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bell-o" style="font-size: 1.25rem;"></i><br>
                                                        bell-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bell-slash" style="font-size: 1.25rem;"></i><br>
                                                        bell-slash </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bell-slash-o" style="font-size: 1.25rem;"></i><br>
                                                        bell-slash-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bicycle" style="font-size: 1.25rem;"></i><br>
                                                        bicycle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-binoculars" style="font-size: 1.25rem;"></i><br>
                                                        binoculars </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-birthday-cake" style="font-size: 1.25rem;"></i><br>
                                                        birthday-cake </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-blind" style="font-size: 1.25rem;"></i><br>
                                                        blind </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bold" style="font-size: 1.25rem;"></i><br>
                                                        bold </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bolt" style="font-size: 1.25rem;"></i><br>
                                                        bolt </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bomb" style="font-size: 1.25rem;"></i><br>
                                                        bomb </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-book" style="font-size: 1.25rem;"></i><br>
                                                        book </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bookmark" style="font-size: 1.25rem;"></i><br>
                                                        bookmark </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bookmark-o" style="font-size: 1.25rem;"></i><br>
                                                        bookmark-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-braille" style="font-size: 1.25rem;"></i><br>
                                                        braille </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-briefcase" style="font-size: 1.25rem;"></i><br>
                                                        briefcase </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-btc" style="font-size: 1.25rem;"></i><br>
                                                        btc </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bug" style="font-size: 1.25rem;"></i><br>
                                                        bug </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-building" style="font-size: 1.25rem;"></i><br>
                                                        building </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-building-o" style="font-size: 1.25rem;"></i><br>
                                                        building-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bullhorn" style="font-size: 1.25rem;"></i><br>
                                                        bullhorn </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bullseye" style="font-size: 1.25rem;"></i><br>
                                                        bullseye </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-bus" style="font-size: 1.25rem;"></i><br>
                                                        bus </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cab" style="font-size: 1.25rem;"></i><br>
                                                        cab </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-calculator" style="font-size: 1.25rem;"></i><br>
                                                        calculator </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-calendar" style="font-size: 1.25rem;"></i><br>
                                                        calendar </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-calendar-check-o" style="font-size: 1.25rem;"></i><br>
                                                        calendar-check-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-calendar-minus-o" style="font-size: 1.25rem;"></i><br>
                                                        calendar-minus-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-calendar-o" style="font-size: 1.25rem;"></i><br>
                                                        calendar-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-calendar-plus-o" style="font-size: 1.25rem;"></i><br>
                                                        calendar-plus-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-calendar-times-o" style="font-size: 1.25rem;"></i><br>
                                                        calendar-times-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-camera" style="font-size: 1.25rem;"></i><br>
                                                        camera </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-camera-retro" style="font-size: 1.25rem;"></i><br>
                                                        camera-retro </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-car" style="font-size: 1.25rem;"></i><br>
                                                        car </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-caret-down" style="font-size: 1.25rem;"></i><br>
                                                        caret-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-caret-left" style="font-size: 1.25rem;"></i><br>
                                                        caret-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-caret-right" style="font-size: 1.25rem;"></i><br>
                                                        caret-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-caret-square-o-down" style="font-size: 1.25rem;"></i><br>
                                                        caret-square-o-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-caret-square-o-left" style="font-size: 1.25rem;"></i><br>
                                                        caret-square-o-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-caret-square-o-right" style="font-size: 1.25rem;"></i><br>
                                                        caret-square-o-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-caret-square-o-up" style="font-size: 1.25rem;"></i><br>
                                                        caret-square-o-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-caret-up" style="font-size: 1.25rem;"></i><br>
                                                        caret-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cart-arrow-down" style="font-size: 1.25rem;"></i><br>
                                                        cart-arrow-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cart-plus" style="font-size: 1.25rem;"></i><br>
                                                        cart-plus </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cc" style="font-size: 1.25rem;"></i><br>
                                                        cc </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-certificate" style="font-size: 1.25rem;"></i><br>
                                                        certificate </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-chain" style="font-size: 1.25rem;"></i><br>
                                                        chain </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-chain-broken" style="font-size: 1.25rem;"></i><br>
                                                        chain-broken </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-check" style="font-size: 1.25rem;"></i><br>
                                                        check </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-check-circle" style="font-size: 1.25rem;"></i><br>
                                                        check-circle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-check-circle-o" style="font-size: 1.25rem;"></i><br>
                                                        check-circle-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-check-square" style="font-size: 1.25rem;"></i><br>
                                                        check-square </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-check-square-o" style="font-size: 1.25rem;"></i><br>
                                                        check-square-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-chevron-circle-down" style="font-size: 1.25rem;"></i><br>
                                                        chevron-circle-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-chevron-circle-left" style="font-size: 1.25rem;"></i><br>
                                                        chevron-circle-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-chevron-circle-right" style="font-size: 1.25rem;"></i><br>
                                                        chevron-circle-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-chevron-circle-up" style="font-size: 1.25rem;"></i><br>
                                                        chevron-circle-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-chevron-down" style="font-size: 1.25rem;"></i><br>
                                                        chevron-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-chevron-left" style="font-size: 1.25rem;"></i><br>
                                                        chevron-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-chevron-right" style="font-size: 1.25rem;"></i><br>
                                                        chevron-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-chevron-up" style="font-size: 1.25rem;"></i><br>
                                                        chevron-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-child" style="font-size: 1.25rem;"></i><br>
                                                        child </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-circle" style="font-size: 1.25rem;"></i><br>
                                                        circle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-circle-o" style="font-size: 1.25rem;"></i><br>
                                                        circle-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-circle-o-notch" style="font-size: 1.25rem;"></i><br>
                                                        circle-o-notch </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-circle-thin" style="font-size: 1.25rem;"></i><br>
                                                        circle-thin </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-clipboard" style="font-size: 1.25rem;"></i><br>
                                                        clipboard </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-clock-o" style="font-size: 1.25rem;"></i><br>
                                                        clock-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-clone" style="font-size: 1.25rem;"></i><br>
                                                        clone </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-close" style="font-size: 1.25rem;"></i><br>
                                                        close </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cloud" style="font-size: 1.25rem;"></i><br>
                                                        cloud </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cloud-download" style="font-size: 1.25rem;"></i><br>
                                                        cloud-download </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cloud-upload" style="font-size: 1.25rem;"></i><br>
                                                        cloud-upload </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cny" style="font-size: 1.25rem;"></i><br>
                                                        cny </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-code" style="font-size: 1.25rem;"></i><br>
                                                        code </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-code-fork" style="font-size: 1.25rem;"></i><br>
                                                        code-fork </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-coffee" style="font-size: 1.25rem;"></i><br>
                                                        coffee </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cog" style="font-size: 1.25rem;"></i><br>
                                                        cog </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cogs" style="font-size: 1.25rem;"></i><br>
                                                        cogs </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-columns" style="font-size: 1.25rem;"></i><br>
                                                        columns </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-comment" style="font-size: 1.25rem;"></i><br>
                                                        comment </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-comment-o" style="font-size: 1.25rem;"></i><br>
                                                        comment-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-commenting" style="font-size: 1.25rem;"></i><br>
                                                        commenting </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-commenting-o" style="font-size: 1.25rem;"></i><br>
                                                        commenting-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-comments" style="font-size: 1.25rem;"></i><br>
                                                        comments </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-comments-o" style="font-size: 1.25rem;"></i><br>
                                                        comments-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-compass" style="font-size: 1.25rem;"></i><br>
                                                        compass </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-compress" style="font-size: 1.25rem;"></i><br>
                                                        compress </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-copy" style="font-size: 1.25rem;"></i><br>
                                                        copy </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-copyright" style="font-size: 1.25rem;"></i><br>
                                                        copyright </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-creative-commons" style="font-size: 1.25rem;"></i><br>
                                                        creative-commons </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-credit-card" style="font-size: 1.25rem;"></i><br>
                                                        credit-card </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-credit-card-alt" style="font-size: 1.25rem;"></i><br>
                                                        credit-card-alt </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-crop" style="font-size: 1.25rem;"></i><br>
                                                        crop </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-crosshairs" style="font-size: 1.25rem;"></i><br>
                                                        crosshairs </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cube" style="font-size: 1.25rem;"></i><br>
                                                        cube </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cubes" style="font-size: 1.25rem;"></i><br>
                                                        cubes </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cut" style="font-size: 1.25rem;"></i><br>
                                                        cut </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-cutlery" style="font-size: 1.25rem;"></i><br>
                                                        cutlery </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-dashboard" style="font-size: 1.25rem;"></i><br>
                                                        dashboard </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-database" style="font-size: 1.25rem;"></i><br>
                                                        database </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-deaf" style="font-size: 1.25rem;"></i><br>
                                                        deaf </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-deafness" style="font-size: 1.25rem;"></i><br>
                                                        deafness </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-dedent" style="font-size: 1.25rem;"></i><br>
                                                        dedent </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-desktop" style="font-size: 1.25rem;"></i><br>
                                                        desktop </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-diamond" style="font-size: 1.25rem;"></i><br>
                                                        diamond </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-dollar" style="font-size: 1.25rem;"></i><br>
                                                        dollar </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-dot-circle-o" style="font-size: 1.25rem;"></i><br>
                                                        dot-circle-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-download" style="font-size: 1.25rem;"></i><br>
                                                        download </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-drivers-license" style="font-size: 1.25rem;"></i><br>
                                                        drivers-license </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-drivers-license-o" style="font-size: 1.25rem;"></i><br>
                                                        drivers-license-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-edit" style="font-size: 1.25rem;"></i><br>
                                                        edit </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-eject" style="font-size: 1.25rem;"></i><br>
                                                        eject </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-ellipsis-h" style="font-size: 1.25rem;"></i><br>
                                                        ellipsis-h </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-ellipsis-v" style="font-size: 1.25rem;"></i><br>
                                                        ellipsis-v </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-envelope" style="font-size: 1.25rem;"></i><br>
                                                        envelope </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-envelope-o" style="font-size: 1.25rem;"></i><br>
                                                        envelope-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-envelope-open" style="font-size: 1.25rem;"></i><br>
                                                        envelope-open </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-envelope-open-o" style="font-size: 1.25rem;"></i><br>
                                                        envelope-open-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-envelope-square" style="font-size: 1.25rem;"></i><br>
                                                        envelope-square </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-eraser" style="font-size: 1.25rem;"></i><br>
                                                        eraser </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-eur" style="font-size: 1.25rem;"></i><br>
                                                        eur </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-euro" style="font-size: 1.25rem;"></i><br>
                                                        euro </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-exchange" style="font-size: 1.25rem;"></i><br>
                                                        exchange </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-exclamation" style="font-size: 1.25rem;"></i><br>
                                                        exclamation </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-exclamation-circle" style="font-size: 1.25rem;"></i><br>
                                                        exclamation-circle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-exclamation-triangle" style="font-size: 1.25rem;"></i><br>
                                                        exclamation-triangle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-expand" style="font-size: 1.25rem;"></i><br>
                                                        expand </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-external-link" style="font-size: 1.25rem;"></i><br>
                                                        external-link </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-external-link-square" style="font-size: 1.25rem;"></i><br>
                                                        external-link-square </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-eye" style="font-size: 1.25rem;"></i><br>
                                                        eye </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-eye-slash" style="font-size: 1.25rem;"></i><br>
                                                        eye-slash </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-eyedropper" style="font-size: 1.25rem;"></i><br>
                                                        eyedropper </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-fast-backward" style="font-size: 1.25rem;"></i><br>
                                                        fast-backward </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-fast-forward" style="font-size: 1.25rem;"></i><br>
                                                        fast-forward </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-fax" style="font-size: 1.25rem;"></i><br>
                                                        fax </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-feed" style="font-size: 1.25rem;"></i><br>
                                                        feed </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-female" style="font-size: 1.25rem;"></i><br>
                                                        female </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-fighter-jet" style="font-size: 1.25rem;"></i><br>
                                                        fighter-jet </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file" style="font-size: 1.25rem;"></i><br>
                                                        file </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-archive-o" style="font-size: 1.25rem;"></i><br>
                                                        file-archive-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-audio-o" style="font-size: 1.25rem;"></i><br>
                                                        file-audio-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-code-o" style="font-size: 1.25rem;"></i><br>
                                                        file-code-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-excel-o" style="font-size: 1.25rem;"></i><br>
                                                        file-excel-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-image-o" style="font-size: 1.25rem;"></i><br>
                                                        file-image-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-movie-o" style="font-size: 1.25rem;"></i><br>
                                                        file-movie-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-o" style="font-size: 1.25rem;"></i><br>
                                                        file-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-pdf-o" style="font-size: 1.25rem;"></i><br>
                                                        file-pdf-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-photo-o" style="font-size: 1.25rem;"></i><br>
                                                        file-photo-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-picture-o" style="font-size: 1.25rem;"></i><br>
                                                        file-picture-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-powerpoint-o" style="font-size: 1.25rem;"></i><br>
                                                        file-powerpoint-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-sound-o" style="font-size: 1.25rem;"></i><br>
                                                        file-sound-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-text" style="font-size: 1.25rem;"></i><br>
                                                        file-text </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-text-o" style="font-size: 1.25rem;"></i><br>
                                                        file-text-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-video-o" style="font-size: 1.25rem;"></i><br>
                                                        file-video-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-word-o" style="font-size: 1.25rem;"></i><br>
                                                        file-word-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-file-zip-o" style="font-size: 1.25rem;"></i><br>
                                                        file-zip-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-files-o" style="font-size: 1.25rem;"></i><br>
                                                        files-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-film" style="font-size: 1.25rem;"></i><br>
                                                        film </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-filter" style="font-size: 1.25rem;"></i><br>
                                                        filter </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-fire" style="font-size: 1.25rem;"></i><br>
                                                        fire </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-fire-extinguisher" style="font-size: 1.25rem;"></i><br>
                                                        fire-extinguisher </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-flag" style="font-size: 1.25rem;"></i><br>
                                                        flag </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-flag-checkered" style="font-size: 1.25rem;"></i><br>
                                                        flag-checkered </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-flag-o" style="font-size: 1.25rem;"></i><br>
                                                        flag-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-flash" style="font-size: 1.25rem;"></i><br>
                                                        flash </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-flask" style="font-size: 1.25rem;"></i><br>
                                                        flask </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-floppy-o" style="font-size: 1.25rem;"></i><br>
                                                        floppy-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-folder" style="font-size: 1.25rem;"></i><br>
                                                        folder </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-folder-o" style="font-size: 1.25rem;"></i><br>
                                                        folder-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-folder-open" style="font-size: 1.25rem;"></i><br>
                                                        folder-open </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-folder-open-o" style="font-size: 1.25rem;"></i><br>
                                                        folder-open-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-font" style="font-size: 1.25rem;"></i><br>
                                                        font </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-forward" style="font-size: 1.25rem;"></i><br>
                                                        forward </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-frown-o" style="font-size: 1.25rem;"></i><br>
                                                        frown-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-futbol-o" style="font-size: 1.25rem;"></i><br>
                                                        futbol-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-gamepad" style="font-size: 1.25rem;"></i><br>
                                                        gamepad </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-gavel" style="font-size: 1.25rem;"></i><br>
                                                        gavel </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-gbp" style="font-size: 1.25rem;"></i><br>
                                                        gbp </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-gear" style="font-size: 1.25rem;"></i><br>
                                                        gear </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-gears" style="font-size: 1.25rem;"></i><br>
                                                        gears </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-genderless" style="font-size: 1.25rem;"></i><br>
                                                        genderless </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-gift" style="font-size: 1.25rem;"></i><br>
                                                        gift </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-glass" style="font-size: 1.25rem;"></i><br>
                                                        glass </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-globe" style="font-size: 1.25rem;"></i><br>
                                                        globe </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-graduation-cap" style="font-size: 1.25rem;"></i><br>
                                                        graduation-cap </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-group" style="font-size: 1.25rem;"></i><br>
                                                        group </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-h-square" style="font-size: 1.25rem;"></i><br>
                                                        h-square </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hand-grab-o" style="font-size: 1.25rem;"></i><br>
                                                        hand-grab-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hand-lizard-o" style="font-size: 1.25rem;"></i><br>
                                                        hand-lizard-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hand-o-down" style="font-size: 1.25rem;"></i><br>
                                                        hand-o-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hand-o-left" style="font-size: 1.25rem;"></i><br>
                                                        hand-o-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hand-o-right" style="font-size: 1.25rem;"></i><br>
                                                        hand-o-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hand-o-up" style="font-size: 1.25rem;"></i><br>
                                                        hand-o-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hand-paper-o" style="font-size: 1.25rem;"></i><br>
                                                        hand-paper-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hand-peace-o" style="font-size: 1.25rem;"></i><br>
                                                        hand-peace-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hand-pointer-o" style="font-size: 1.25rem;"></i><br>
                                                        hand-pointer-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hand-rock-o" style="font-size: 1.25rem;"></i><br>
                                                        hand-rock-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hand-scissors-o" style="font-size: 1.25rem;"></i><br>
                                                        hand-scissors-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hand-spock-o" style="font-size: 1.25rem;"></i><br>
                                                        hand-spock-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hand-stop-o" style="font-size: 1.25rem;"></i><br>
                                                        hand-stop-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-handshake-o" style="font-size: 1.25rem;"></i><br>
                                                        handshake-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hard-of-hearing" style="font-size: 1.25rem;"></i><br>
                                                        hard-of-hearing </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hashtag" style="font-size: 1.25rem;"></i><br>
                                                        hashtag </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hdd-o" style="font-size: 1.25rem;"></i><br>
                                                        hdd-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-header" style="font-size: 1.25rem;"></i><br>
                                                        header </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-headphones" style="font-size: 1.25rem;"></i><br>
                                                        headphones </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-heart" style="font-size: 1.25rem;"></i><br>
                                                        heart </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-heart-o" style="font-size: 1.25rem;"></i><br>
                                                        heart-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-heartbeat" style="font-size: 1.25rem;"></i><br>
                                                        heartbeat </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-history" style="font-size: 1.25rem;"></i><br>
                                                        history </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-home" style="font-size: 1.25rem;"></i><br>
                                                        home </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hospital-o" style="font-size: 1.25rem;"></i><br>
                                                        hospital-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hotel" style="font-size: 1.25rem;"></i><br>
                                                        hotel </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hourglass" style="font-size: 1.25rem;"></i><br>
                                                        hourglass </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hourglass-1" style="font-size: 1.25rem;"></i><br>
                                                        hourglass-1 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hourglass-2" style="font-size: 1.25rem;"></i><br>
                                                        hourglass-2 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hourglass-3" style="font-size: 1.25rem;"></i><br>
                                                        hourglass-3 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hourglass-end" style="font-size: 1.25rem;"></i><br>
                                                        hourglass-end </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hourglass-half" style="font-size: 1.25rem;"></i><br>
                                                        hourglass-half </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hourglass-o" style="font-size: 1.25rem;"></i><br>
                                                        hourglass-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-hourglass-start" style="font-size: 1.25rem;"></i><br>
                                                        hourglass-start </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-i-cursor" style="font-size: 1.25rem;"></i><br>
                                                        i-cursor </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-id-badge" style="font-size: 1.25rem;"></i><br>
                                                        id-badge </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-id-card" style="font-size: 1.25rem;"></i><br>
                                                        id-card </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-id-card-o" style="font-size: 1.25rem;"></i><br>
                                                        id-card-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-ils" style="font-size: 1.25rem;"></i><br>
                                                        ils </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-image" style="font-size: 1.25rem;"></i><br>
                                                        image </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-inbox" style="font-size: 1.25rem;"></i><br>
                                                        inbox </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-indent" style="font-size: 1.25rem;"></i><br>
                                                        indent </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-industry" style="font-size: 1.25rem;"></i><br>
                                                        industry </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-info" style="font-size: 1.25rem;"></i><br>
                                                        info </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-info-circle" style="font-size: 1.25rem;"></i><br>
                                                        info-circle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-inr" style="font-size: 1.25rem;"></i><br>
                                                        inr </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-institution" style="font-size: 1.25rem;"></i><br>
                                                        institution </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-intersex" style="font-size: 1.25rem;"></i><br>
                                                        intersex </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-italic" style="font-size: 1.25rem;"></i><br>
                                                        italic </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-jpy" style="font-size: 1.25rem;"></i><br>
                                                        jpy </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-key" style="font-size: 1.25rem;"></i><br>
                                                        key </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-keyboard-o" style="font-size: 1.25rem;"></i><br>
                                                        keyboard-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-krw" style="font-size: 1.25rem;"></i><br>
                                                        krw </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-language" style="font-size: 1.25rem;"></i><br>
                                                        language </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-laptop" style="font-size: 1.25rem;"></i><br>
                                                        laptop </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-leaf" style="font-size: 1.25rem;"></i><br>
                                                        leaf </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-legal" style="font-size: 1.25rem;"></i><br>
                                                        legal </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-lemon-o" style="font-size: 1.25rem;"></i><br>
                                                        lemon-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-level-down" style="font-size: 1.25rem;"></i><br>
                                                        level-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-level-up" style="font-size: 1.25rem;"></i><br>
                                                        level-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-life-bouy" style="font-size: 1.25rem;"></i><br>
                                                        life-bouy </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-life-buoy" style="font-size: 1.25rem;"></i><br>
                                                        life-buoy </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-life-ring" style="font-size: 1.25rem;"></i><br>
                                                        life-ring </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-life-saver" style="font-size: 1.25rem;"></i><br>
                                                        life-saver </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-lightbulb-o" style="font-size: 1.25rem;"></i><br>
                                                        lightbulb-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-line-chart" style="font-size: 1.25rem;"></i><br>
                                                        line-chart </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-link" style="font-size: 1.25rem;"></i><br>
                                                        link </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-list" style="font-size: 1.25rem;"></i><br>
                                                        list </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-list-alt" style="font-size: 1.25rem;"></i><br>
                                                        list-alt </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-list-ol" style="font-size: 1.25rem;"></i><br>
                                                        list-ol </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-list-ul" style="font-size: 1.25rem;"></i><br>
                                                        list-ul </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-location-arrow" style="font-size: 1.25rem;"></i><br>
                                                        location-arrow </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-lock" style="font-size: 1.25rem;"></i><br>
                                                        lock </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-long-arrow-down" style="font-size: 1.25rem;"></i><br>
                                                        long-arrow-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-long-arrow-left" style="font-size: 1.25rem;"></i><br>
                                                        long-arrow-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-long-arrow-right" style="font-size: 1.25rem;"></i><br>
                                                        long-arrow-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-long-arrow-up" style="font-size: 1.25rem;"></i><br>
                                                        long-arrow-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-low-vision" style="font-size: 1.25rem;"></i><br>
                                                        low-vision </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-magic" style="font-size: 1.25rem;"></i><br>
                                                        magic </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-magnet" style="font-size: 1.25rem;"></i><br>
                                                        magnet </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-mail-forward" style="font-size: 1.25rem;"></i><br>
                                                        mail-forward </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-mail-reply" style="font-size: 1.25rem;"></i><br>
                                                        mail-reply </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-mail-reply-all" style="font-size: 1.25rem;"></i><br>
                                                        mail-reply-all </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-male" style="font-size: 1.25rem;"></i><br>
                                                        male </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-map" style="font-size: 1.25rem;"></i><br>
                                                        map </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-map-marker" style="font-size: 1.25rem;"></i><br>
                                                        map-marker </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-map-o" style="font-size: 1.25rem;"></i><br>
                                                        map-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-map-pin" style="font-size: 1.25rem;"></i><br>
                                                        map-pin </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-map-signs" style="font-size: 1.25rem;"></i><br>
                                                        map-signs </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-mars" style="font-size: 1.25rem;"></i><br>
                                                        mars </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-mars-double" style="font-size: 1.25rem;"></i><br>
                                                        mars-double </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-mars-stroke" style="font-size: 1.25rem;"></i><br>
                                                        mars-stroke </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-mars-stroke-h" style="font-size: 1.25rem;"></i><br>
                                                        mars-stroke-h </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-mars-stroke-v" style="font-size: 1.25rem;"></i><br>
                                                        mars-stroke-v </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-medkit" style="font-size: 1.25rem;"></i><br>
                                                        medkit </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-meh-o" style="font-size: 1.25rem;"></i><br>
                                                        meh-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-mercury" style="font-size: 1.25rem;"></i><br>
                                                        mercury </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-microchip" style="font-size: 1.25rem;"></i><br>
                                                        microchip </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-microphone" style="font-size: 1.25rem;"></i><br>
                                                        microphone </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-microphone-slash" style="font-size: 1.25rem;"></i><br>
                                                        microphone-slash </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-minus" style="font-size: 1.25rem;"></i><br>
                                                        minus </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-minus-circle" style="font-size: 1.25rem;"></i><br>
                                                        minus-circle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-minus-square" style="font-size: 1.25rem;"></i><br>
                                                        minus-square </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-minus-square-o" style="font-size: 1.25rem;"></i><br>
                                                        minus-square-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-mobile" style="font-size: 1.25rem;"></i><br>
                                                        mobile </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-mobile-phone" style="font-size: 1.25rem;"></i><br>
                                                        mobile-phone </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-money" style="font-size: 1.25rem;"></i><br>
                                                        money </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-moon-o" style="font-size: 1.25rem;"></i><br>
                                                        moon-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-mortar-board" style="font-size: 1.25rem;"></i><br>
                                                        mortar-board </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-motorcycle" style="font-size: 1.25rem;"></i><br>
                                                        motorcycle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-mouse-pointer" style="font-size: 1.25rem;"></i><br>
                                                        mouse-pointer </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-music" style="font-size: 1.25rem;"></i><br>
                                                        music </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-navicon" style="font-size: 1.25rem;"></i><br>
                                                        navicon </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-neuter" style="font-size: 1.25rem;"></i><br>
                                                        neuter </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-newspaper-o" style="font-size: 1.25rem;"></i><br>
                                                        newspaper-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-object-group" style="font-size: 1.25rem;"></i><br>
                                                        object-group </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-object-ungroup" style="font-size: 1.25rem;"></i><br>
                                                        object-ungroup </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-outdent" style="font-size: 1.25rem;"></i><br>
                                                        outdent </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-paint-brush" style="font-size: 1.25rem;"></i><br>
                                                        paint-brush </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-paper-plane" style="font-size: 1.25rem;"></i><br>
                                                        paper-plane </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-paper-plane-o" style="font-size: 1.25rem;"></i><br>
                                                        paper-plane-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-paperclip" style="font-size: 1.25rem;"></i><br>
                                                        paperclip </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-paragraph" style="font-size: 1.25rem;"></i><br>
                                                        paragraph </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-paste" style="font-size: 1.25rem;"></i><br>
                                                        paste </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-pause" style="font-size: 1.25rem;"></i><br>
                                                        pause </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-pause-circle" style="font-size: 1.25rem;"></i><br>
                                                        pause-circle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-pause-circle-o" style="font-size: 1.25rem;"></i><br>
                                                        pause-circle-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-paw" style="font-size: 1.25rem;"></i><br>
                                                        paw </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-pencil" style="font-size: 1.25rem;"></i><br>
                                                        pencil </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-pencil-square" style="font-size: 1.25rem;"></i><br>
                                                        pencil-square </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-pencil-square-o" style="font-size: 1.25rem;"></i><br>
                                                        pencil-square-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-percent" style="font-size: 1.25rem;"></i><br>
                                                        percent </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-phone" style="font-size: 1.25rem;"></i><br>
                                                        phone </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-phone-square" style="font-size: 1.25rem;"></i><br>
                                                        phone-square </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-photo" style="font-size: 1.25rem;"></i><br>
                                                        photo </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-picture-o" style="font-size: 1.25rem;"></i><br>
                                                        picture-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-pie-chart" style="font-size: 1.25rem;"></i><br>
                                                        pie-chart </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-plane" style="font-size: 1.25rem;"></i><br>
                                                        plane </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-play" style="font-size: 1.25rem;"></i><br>
                                                        play </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-play-circle" style="font-size: 1.25rem;"></i><br>
                                                        play-circle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-play-circle-o" style="font-size: 1.25rem;"></i><br>
                                                        play-circle-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-plug" style="font-size: 1.25rem;"></i><br>
                                                        plug </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-plus" style="font-size: 1.25rem;"></i><br>
                                                        plus </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-plus-circle" style="font-size: 1.25rem;"></i><br>
                                                        plus-circle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-plus-square" style="font-size: 1.25rem;"></i><br>
                                                        plus-square </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-plus-square-o" style="font-size: 1.25rem;"></i><br>
                                                        plus-square-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-podcast" style="font-size: 1.25rem;"></i><br>
                                                        podcast </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-power-off" style="font-size: 1.25rem;"></i><br>
                                                        power-off </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-print" style="font-size: 1.25rem;"></i><br>
                                                        print </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-puzzle-piece" style="font-size: 1.25rem;"></i><br>
                                                        puzzle-piece </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-qrcode" style="font-size: 1.25rem;"></i><br>
                                                        qrcode </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-question" style="font-size: 1.25rem;"></i><br>
                                                        question </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-question-circle" style="font-size: 1.25rem;"></i><br>
                                                        question-circle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-question-circle-o" style="font-size: 1.25rem;"></i><br>
                                                        question-circle-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-quote-left" style="font-size: 1.25rem;"></i><br>
                                                        quote-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-quote-right" style="font-size: 1.25rem;"></i><br>
                                                        quote-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-random" style="font-size: 1.25rem;"></i><br>
                                                        random </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-recycle" style="font-size: 1.25rem;"></i><br>
                                                        recycle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-refresh" style="font-size: 1.25rem;"></i><br>
                                                        refresh </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-registered" style="font-size: 1.25rem;"></i><br>
                                                        registered </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-remove" style="font-size: 1.25rem;"></i><br>
                                                        remove </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-reorder" style="font-size: 1.25rem;"></i><br>
                                                        reorder </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-repeat" style="font-size: 1.25rem;"></i><br>
                                                        repeat </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-reply" style="font-size: 1.25rem;"></i><br>
                                                        reply </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-reply-all" style="font-size: 1.25rem;"></i><br>
                                                        reply-all </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-retweet" style="font-size: 1.25rem;"></i><br>
                                                        retweet </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-rmb" style="font-size: 1.25rem;"></i><br>
                                                        rmb </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-road" style="font-size: 1.25rem;"></i><br>
                                                        road </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-rocket" style="font-size: 1.25rem;"></i><br>
                                                        rocket </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-rotate-left" style="font-size: 1.25rem;"></i><br>
                                                        rotate-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-rotate-right" style="font-size: 1.25rem;"></i><br>
                                                        rotate-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-rouble" style="font-size: 1.25rem;"></i><br>
                                                        rouble </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-rss" style="font-size: 1.25rem;"></i><br>
                                                        rss </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-rss-square" style="font-size: 1.25rem;"></i><br>
                                                        rss-square </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-rub" style="font-size: 1.25rem;"></i><br>
                                                        rub </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-ruble" style="font-size: 1.25rem;"></i><br>
                                                        ruble </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-rupee" style="font-size: 1.25rem;"></i><br>
                                                        rupee </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-s15" style="font-size: 1.25rem;"></i><br>
                                                        s15 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-save" style="font-size: 1.25rem;"></i><br>
                                                        save </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-scissors" style="font-size: 1.25rem;"></i><br>
                                                        scissors </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-search" style="font-size: 1.25rem;"></i><br>
                                                        search </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-search-minus" style="font-size: 1.25rem;"></i><br>
                                                        search-minus </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-search-plus" style="font-size: 1.25rem;"></i><br>
                                                        search-plus </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-send" style="font-size: 1.25rem;"></i><br>
                                                        send </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-send-o" style="font-size: 1.25rem;"></i><br>
                                                        send-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-server" style="font-size: 1.25rem;"></i><br>
                                                        server </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-share" style="font-size: 1.25rem;"></i><br>
                                                        share </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-share-square" style="font-size: 1.25rem;"></i><br>
                                                        share-square </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-share-square-o" style="font-size: 1.25rem;"></i><br>
                                                        share-square-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-shekel" style="font-size: 1.25rem;"></i><br>
                                                        shekel </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sheqel" style="font-size: 1.25rem;"></i><br>
                                                        sheqel </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-shield" style="font-size: 1.25rem;"></i><br>
                                                        shield </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-ship" style="font-size: 1.25rem;"></i><br>
                                                        ship </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-shopping-bag" style="font-size: 1.25rem;"></i><br>
                                                        shopping-bag </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-shopping-basket" style="font-size: 1.25rem;"></i><br>
                                                        shopping-basket </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-shopping-cart" style="font-size: 1.25rem;"></i><br>
                                                        shopping-cart </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-shower" style="font-size: 1.25rem;"></i><br>
                                                        shower </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sign-in" style="font-size: 1.25rem;"></i><br>
                                                        sign-in </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sign-language" style="font-size: 1.25rem;"></i><br>
                                                        sign-language </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sign-out" style="font-size: 1.25rem;"></i><br>
                                                        sign-out </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-signal" style="font-size: 1.25rem;"></i><br>
                                                        signal </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-signing" style="font-size: 1.25rem;"></i><br>
                                                        signing </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sitemap" style="font-size: 1.25rem;"></i><br>
                                                        sitemap </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sliders" style="font-size: 1.25rem;"></i><br>
                                                        sliders </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-smile-o" style="font-size: 1.25rem;"></i><br>
                                                        smile-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-snowflake-o" style="font-size: 1.25rem;"></i><br>
                                                        snowflake-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-soccer-ball-o" style="font-size: 1.25rem;"></i><br>
                                                        soccer-ball-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sort" style="font-size: 1.25rem;"></i><br>
                                                        sort </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sort-alpha-asc" style="font-size: 1.25rem;"></i><br>
                                                        sort-alpha-asc </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sort-alpha-desc" style="font-size: 1.25rem;"></i><br>
                                                        sort-alpha-desc </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sort-amount-asc" style="font-size: 1.25rem;"></i><br>
                                                        sort-amount-asc </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sort-amount-desc" style="font-size: 1.25rem;"></i><br>
                                                        sort-amount-desc </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sort-asc" style="font-size: 1.25rem;"></i><br>
                                                        sort-asc </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sort-desc" style="font-size: 1.25rem;"></i><br>
                                                        sort-desc </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sort-down" style="font-size: 1.25rem;"></i><br>
                                                        sort-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sort-numeric-asc" style="font-size: 1.25rem;"></i><br>
                                                        sort-numeric-asc </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sort-numeric-desc" style="font-size: 1.25rem;"></i><br>
                                                        sort-numeric-desc </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sort-up" style="font-size: 1.25rem;"></i><br>
                                                        sort-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-space-shuttle" style="font-size: 1.25rem;"></i><br>
                                                        space-shuttle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-spinner" style="font-size: 1.25rem;"></i><br>
                                                        spinner </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-spoon" style="font-size: 1.25rem;"></i><br>
                                                        spoon </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-square" style="font-size: 1.25rem;"></i><br>
                                                        square </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-square-o" style="font-size: 1.25rem;"></i><br>
                                                        square-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-star" style="font-size: 1.25rem;"></i><br>
                                                        star </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-star-half" style="font-size: 1.25rem;"></i><br>
                                                        star-half </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-star-half-empty" style="font-size: 1.25rem;"></i><br>
                                                        star-half-empty </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-star-half-full" style="font-size: 1.25rem;"></i><br>
                                                        star-half-full </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-star-half-o" style="font-size: 1.25rem;"></i><br>
                                                        star-half-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-star-o" style="font-size: 1.25rem;"></i><br>
                                                        star-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-step-backward" style="font-size: 1.25rem;"></i><br>
                                                        step-backward </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-step-forward" style="font-size: 1.25rem;"></i><br>
                                                        step-forward </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-stethoscope" style="font-size: 1.25rem;"></i><br>
                                                        stethoscope </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sticky-note" style="font-size: 1.25rem;"></i><br>
                                                        sticky-note </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sticky-note-o" style="font-size: 1.25rem;"></i><br>
                                                        sticky-note-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-stop" style="font-size: 1.25rem;"></i><br>
                                                        stop </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-stop-circle" style="font-size: 1.25rem;"></i><br>
                                                        stop-circle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-stop-circle-o" style="font-size: 1.25rem;"></i><br>
                                                        stop-circle-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-street-view" style="font-size: 1.25rem;"></i><br>
                                                        street-view </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-strikethrough" style="font-size: 1.25rem;"></i><br>
                                                        strikethrough </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-subscript" style="font-size: 1.25rem;"></i><br>
                                                        subscript </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-subway" style="font-size: 1.25rem;"></i><br>
                                                        subway </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-suitcase" style="font-size: 1.25rem;"></i><br>
                                                        suitcase </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-sun-o" style="font-size: 1.25rem;"></i><br>
                                                        sun-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-superscript" style="font-size: 1.25rem;"></i><br>
                                                        superscript </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-support" style="font-size: 1.25rem;"></i><br>
                                                        support </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-table" style="font-size: 1.25rem;"></i><br>
                                                        table </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-tablet" style="font-size: 1.25rem;"></i><br>
                                                        tablet </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-tachometer" style="font-size: 1.25rem;"></i><br>
                                                        tachometer </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-tag" style="font-size: 1.25rem;"></i><br>
                                                        tag </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-tags" style="font-size: 1.25rem;"></i><br>
                                                        tags </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-tasks" style="font-size: 1.25rem;"></i><br>
                                                        tasks </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-taxi" style="font-size: 1.25rem;"></i><br>
                                                        taxi </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-television" style="font-size: 1.25rem;"></i><br>
                                                        television </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-terminal" style="font-size: 1.25rem;"></i><br>
                                                        terminal </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-text-height" style="font-size: 1.25rem;"></i><br>
                                                        text-height </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-text-width" style="font-size: 1.25rem;"></i><br>
                                                        text-width </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-th" style="font-size: 1.25rem;"></i><br>
                                                        th </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-th-large" style="font-size: 1.25rem;"></i><br>
                                                        th-large </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-th-list" style="font-size: 1.25rem;"></i><br>
                                                        th-list </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thermometer" style="font-size: 1.25rem;"></i><br>
                                                        thermometer </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thermometer-0" style="font-size: 1.25rem;"></i><br>
                                                        thermometer-0 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thermometer-1" style="font-size: 1.25rem;"></i><br>
                                                        thermometer-1 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thermometer-2" style="font-size: 1.25rem;"></i><br>
                                                        thermometer-2 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thermometer-3" style="font-size: 1.25rem;"></i><br>
                                                        thermometer-3 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thermometer-4" style="font-size: 1.25rem;"></i><br>
                                                        thermometer-4 </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thermometer-empty" style="font-size: 1.25rem;"></i><br>
                                                        thermometer-empty </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thermometer-full" style="font-size: 1.25rem;"></i><br>
                                                        thermometer-full </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thermometer-half" style="font-size: 1.25rem;"></i><br>
                                                        thermometer-half </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thermometer-quarter" style="font-size: 1.25rem;"></i><br>
                                                        thermometer-quarter </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thermometer-three-quarters" style="font-size: 1.25rem;"></i><br>
                                                        thermometer-three-quarters </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thumb-tack" style="font-size: 1.25rem;"></i><br>
                                                        thumb-tack </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thumbs-down" style="font-size: 1.25rem;"></i><br>
                                                        thumbs-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thumbs-o-down" style="font-size: 1.25rem;"></i><br>
                                                        thumbs-o-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thumbs-o-up" style="font-size: 1.25rem;"></i><br>
                                                        thumbs-o-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-thumbs-up" style="font-size: 1.25rem;"></i><br>
                                                        thumbs-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-ticket" style="font-size: 1.25rem;"></i><br>
                                                        ticket </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-times" style="font-size: 1.25rem;"></i><br>
                                                        times </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-times-circle" style="font-size: 1.25rem;"></i><br>
                                                        times-circle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-times-circle-o" style="font-size: 1.25rem;"></i><br>
                                                        times-circle-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-times-rectangle" style="font-size: 1.25rem;"></i><br>
                                                        times-rectangle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-times-rectangle-o" style="font-size: 1.25rem;"></i><br>
                                                        times-rectangle-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-tint" style="font-size: 1.25rem;"></i><br>
                                                        tint </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-toggle-down" style="font-size: 1.25rem;"></i><br>
                                                        toggle-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-toggle-left" style="font-size: 1.25rem;"></i><br>
                                                        toggle-left </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-toggle-off" style="font-size: 1.25rem;"></i><br>
                                                        toggle-off </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-toggle-on" style="font-size: 1.25rem;"></i><br>
                                                        toggle-on </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-toggle-right" style="font-size: 1.25rem;"></i><br>
                                                        toggle-right </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-toggle-up" style="font-size: 1.25rem;"></i><br>
                                                        toggle-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-trademark" style="font-size: 1.25rem;"></i><br>
                                                        trademark </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-train" style="font-size: 1.25rem;"></i><br>
                                                        train </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-transgender" style="font-size: 1.25rem;"></i><br>
                                                        transgender </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-transgender-alt" style="font-size: 1.25rem;"></i><br>
                                                        transgender-alt </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-trash" style="font-size: 1.25rem;"></i><br>
                                                        trash </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-trash-o" style="font-size: 1.25rem;"></i><br>
                                                        trash-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-tree" style="font-size: 1.25rem;"></i><br>
                                                        tree </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-trophy" style="font-size: 1.25rem;"></i><br>
                                                        trophy </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-truck" style="font-size: 1.25rem;"></i><br>
                                                        truck </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-try" style="font-size: 1.25rem;"></i><br>
                                                        try </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-tty" style="font-size: 1.25rem;"></i><br>
                                                        tty </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-turkish-lira" style="font-size: 1.25rem;"></i><br>
                                                        turkish-lira </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-tv" style="font-size: 1.25rem;"></i><br>
                                                        tv </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-umbrella" style="font-size: 1.25rem;"></i><br>
                                                        umbrella </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-underline" style="font-size: 1.25rem;"></i><br>
                                                        underline </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-undo" style="font-size: 1.25rem;"></i><br>
                                                        undo </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-universal-access" style="font-size: 1.25rem;"></i><br>
                                                        universal-access </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-university" style="font-size: 1.25rem;"></i><br>
                                                        university </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-unlink" style="font-size: 1.25rem;"></i><br>
                                                        unlink </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-unlock" style="font-size: 1.25rem;"></i><br>
                                                        unlock </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-unlock-alt" style="font-size: 1.25rem;"></i><br>
                                                        unlock-alt </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-unsorted" style="font-size: 1.25rem;"></i><br>
                                                        unsorted </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-upload" style="font-size: 1.25rem;"></i><br>
                                                        upload </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-usd" style="font-size: 1.25rem;"></i><br>
                                                        usd </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-user" style="font-size: 1.25rem;"></i><br>
                                                        user </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-user-circle" style="font-size: 1.25rem;"></i><br>
                                                        user-circle </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-user-circle-o" style="font-size: 1.25rem;"></i><br>
                                                        user-circle-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-user-md" style="font-size: 1.25rem;"></i><br>
                                                        user-md </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-user-o" style="font-size: 1.25rem;"></i><br>
                                                        user-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-user-plus" style="font-size: 1.25rem;"></i><br>
                                                        user-plus </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-user-secret" style="font-size: 1.25rem;"></i><br>
                                                        user-secret </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-user-times" style="font-size: 1.25rem;"></i><br>
                                                        user-times </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-users" style="font-size: 1.25rem;"></i><br>
                                                        users </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-vcard" style="font-size: 1.25rem;"></i><br>
                                                        vcard </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-vcard-o" style="font-size: 1.25rem;"></i><br>
                                                        vcard-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-venus" style="font-size: 1.25rem;"></i><br>
                                                        venus </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-venus-double" style="font-size: 1.25rem;"></i><br>
                                                        venus-double </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-venus-mars" style="font-size: 1.25rem;"></i><br>
                                                        venus-mars </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-video-camera" style="font-size: 1.25rem;"></i><br>
                                                        video-camera </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-volume-control-phone" style="font-size: 1.25rem;"></i><br>
                                                        volume-control-phone </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-volume-down" style="font-size: 1.25rem;"></i><br>
                                                        volume-down </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-volume-off" style="font-size: 1.25rem;"></i><br>
                                                        volume-off </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-volume-up" style="font-size: 1.25rem;"></i><br>
                                                        volume-up </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-warning" style="font-size: 1.25rem;"></i><br>
                                                        warning </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-wheelchair" style="font-size: 1.25rem;"></i><br>
                                                        wheelchair </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-wheelchair-alt" style="font-size: 1.25rem;"></i><br>
                                                        wheelchair-alt </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-wifi" style="font-size: 1.25rem;"></i><br>
                                                        wifi </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-window-close" style="font-size: 1.25rem;"></i><br>
                                                        window-close </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-window-close-o" style="font-size: 1.25rem;"></i><br>
                                                        window-close-o </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-window-maximize" style="font-size: 1.25rem;"></i><br>
                                                        window-maximize </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-window-minimize" style="font-size: 1.25rem;"></i><br>
                                                        window-minimize </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-window-restore" style="font-size: 1.25rem;"></i><br>
                                                        window-restore </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-won" style="font-size: 1.25rem;"></i><br>
                                                        won </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-wrench" style="font-size: 1.25rem;"></i><br>
                                                        wrench </button>
                                                        <button class="btn btn-sm btn-outline-secondary col-2" style="white-space:normal;" type="button"> <i class="fa fa-yen" style="font-size: 1.25rem;"></i><br>
                                                        yen </button>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-outline-secondary" type="button">
                                                    <message key="global.buttons.cancel">Cancel</message>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </icon-picker>
                            </div>
                        </div>
                        <errors controlname="icon"> 
                            <!----> 
                        </errors>
                    </div>
                    <form-invalid-alert> 
                        <!----> 
                    </form-invalid-alert>
                    <p class="text-right">
                        <button class="btn btn-primary" type="submit">
                        <message key="global.buttons.save">Save</message>
                        </button>
                        <a class="btn btn-outline-primary" routerlink="/categories" href="admin-categories.php">
                            <message key="global.buttons.cancel">Cancel</message>
                        </a> </p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
