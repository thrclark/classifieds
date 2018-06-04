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
    <div class="main-content">
        <router-outlet></router-outlet>
        <ng-component>
            <div class="row mb-3 no-gutters align-items-center">
                <div class="col-12 col-sm">
                    <h1> <?php echo $page_title; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-9 col-xl-10 ">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <form novalidate class="ng-untouched ng-pristine ng-valid">
                                <div class="form-group">
                                    <label class="control-label" id="nameLabel">
                                        <message key="admin.field.name">Name</message>
                                    </label>
                                    <div class="ccf-instructional-text" id="nameDirections">
                                        <message key="admin.category.field.name.directions">Provide a name for this category.</message>
                                    </div>
                                    <countdown>
                                        <div class="rbt-charcount">
                                            <input aria-labelledby="nameLabel nameDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="name">
                                            <span class="badge badge-success"> 85 </span> </div>
                                    </countdown>
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
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <div class="icon-selector">
                                                <div class="icon-current">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto icon-display"><i class=""></i></div>
                                                        <div class="col icon-name">none selected</div>
                                                        <div class="col icon-select">
                                                            <button type="button" class="btn btn-outline-primary" id="findIcon"> Choose </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icon-search" style="display:none">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="form-row align-items-center">
                                                                <div class="col">
                                                                    <input type="text" class="form-control" id="selectIcon" aria-describedby="" placeholder="Filter" onkeyup="selectIcon()">
                                                                </div>
                                                                <div class="col-auto">
                                                                    <button class="btn btn-outline-primary" id="cancelSearch">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row" id="iconSelection">
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-address-book"></i> <span class="sr-only"> address-book </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-address-book-o"></i> <span class="sr-only"> address-book-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-address-card"></i> <span class="sr-only"> address-card </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-address-card-o"></i> <span class="sr-only"> address-card-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-adjust"></i> <span class="sr-only"> adjust </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-align-center"></i> <span class="sr-only"> align-center </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-align-justify"></i> <span class="sr-only"> align-justify </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-align-left"></i> <span class="sr-only"> align-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-align-right"></i> <span class="sr-only"> align-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-ambulance"></i> <span class="sr-only"> ambulance </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-american-sign-language-interpreting"></i> <span class="sr-only"> american-sign-language-interpreting </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-anchor"></i> <span class="sr-only"> anchor </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-angle-double-down"></i> <span class="sr-only"> angle-double-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-angle-double-left"></i> <span class="sr-only"> angle-double-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-angle-double-right"></i> <span class="sr-only"> angle-double-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-angle-double-up"></i> <span class="sr-only"> angle-double-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-angle-down"></i> <span class="sr-only"> angle-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-angle-left"></i> <span class="sr-only"> angle-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-angle-right"></i> <span class="sr-only"> angle-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-angle-up"></i> <span class="sr-only"> angle-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-archive"></i> <span class="sr-only"> archive </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-area-chart"></i> <span class="sr-only"> area-chart </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrow-circle-down"></i> <span class="sr-only"> arrow-circle-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrow-circle-left"></i> <span class="sr-only"> arrow-circle-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrow-circle-o-down"></i> <span class="sr-only"> arrow-circle-o-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrow-circle-o-left"></i> <span class="sr-only"> arrow-circle-o-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrow-circle-o-right"></i> <span class="sr-only"> arrow-circle-o-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrow-circle-o-up"></i> <span class="sr-only"> arrow-circle-o-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrow-circle-right"></i> <span class="sr-only"> arrow-circle-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrow-circle-up"></i> <span class="sr-only"> arrow-circle-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrow-down"></i> <span class="sr-only"> arrow-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrow-left"></i> <span class="sr-only"> arrow-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrow-right"></i> <span class="sr-only"> arrow-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrow-up"></i> <span class="sr-only"> arrow-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrows"></i> <span class="sr-only"> arrows </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrows-alt"></i> <span class="sr-only"> arrows-alt </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrows-h"></i> <span class="sr-only"> arrows-h </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-arrows-v"></i> <span class="sr-only"> arrows-v </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-asl-interpreting"></i> <span class="sr-only"> asl-interpreting </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-assistive-listening-systems"></i> <span class="sr-only"> assistive-listening-systems </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-asterisk"></i> <span class="sr-only"> asterisk </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-at"></i> <span class="sr-only"> at </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-audio-description"></i> <span class="sr-only"> audio-description </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-automobile"></i> <span class="sr-only"> automobile </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-backward"></i> <span class="sr-only"> backward </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-balance-scale"></i> <span class="sr-only"> balance-scale </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-ban"></i> <span class="sr-only"> ban </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bank"></i> <span class="sr-only"> bank </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bar-chart"></i> <span class="sr-only"> bar-chart </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bar-chart-o"></i> <span class="sr-only"> bar-chart-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-barcode"></i> <span class="sr-only"> barcode </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bars"></i> <span class="sr-only"> bars </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bath"></i> <span class="sr-only"> bath </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bathtub"></i> <span class="sr-only"> bathtub </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-battery"></i> <span class="sr-only"> battery </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-battery-0"></i> <span class="sr-only"> battery-0 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-battery-1"></i> <span class="sr-only"> battery-1 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-battery-2"></i> <span class="sr-only"> battery-2 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-battery-3"></i> <span class="sr-only"> battery-3 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-battery-4"></i> <span class="sr-only"> battery-4 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-battery-empty"></i> <span class="sr-only"> battery-empty </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-battery-full"></i> <span class="sr-only"> battery-full </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-battery-half"></i> <span class="sr-only"> battery-half </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-battery-quarter"></i> <span class="sr-only"> battery-quarter </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-battery-three-quarters"></i> <span class="sr-only"> battery-three-quarters </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bed"></i> <span class="sr-only"> bed </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-beer"></i> <span class="sr-only"> beer </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bell"></i> <span class="sr-only"> bell </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bell-o"></i> <span class="sr-only"> bell-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bell-slash"></i> <span class="sr-only"> bell-slash </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bell-slash-o"></i> <span class="sr-only"> bell-slash-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bicycle"></i> <span class="sr-only"> bicycle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-binoculars"></i> <span class="sr-only"> binoculars </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-birthday-cake"></i> <span class="sr-only"> birthday-cake </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-blind"></i> <span class="sr-only"> blind </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bold"></i> <span class="sr-only"> bold </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bolt"></i> <span class="sr-only"> bolt </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bomb"></i> <span class="sr-only"> bomb </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-book"></i> <span class="sr-only"> book </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bookmark"></i> <span class="sr-only"> bookmark </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bookmark-o"></i> <span class="sr-only"> bookmark-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-braille"></i> <span class="sr-only"> braille </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-briefcase"></i> <span class="sr-only"> briefcase </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-btc"></i> <span class="sr-only"> btc </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bug"></i> <span class="sr-only"> bug </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-building"></i> <span class="sr-only"> building </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-building-o"></i> <span class="sr-only"> building-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bullhorn"></i> <span class="sr-only"> bullhorn </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bullseye"></i> <span class="sr-only"> bullseye </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-bus"></i> <span class="sr-only"> bus </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cab"></i> <span class="sr-only"> cab </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-calculator"></i> <span class="sr-only"> calculator </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-calendar"></i> <span class="sr-only"> calendar </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-calendar-check-o"></i> <span class="sr-only"> calendar-check-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-calendar-minus-o"></i> <span class="sr-only"> calendar-minus-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-calendar-o"></i> <span class="sr-only"> calendar-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-calendar-plus-o"></i> <span class="sr-only"> calendar-plus-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-calendar-times-o"></i> <span class="sr-only"> calendar-times-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-camera"></i> <span class="sr-only"> camera </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-camera-retro"></i> <span class="sr-only"> camera-retro </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-car"></i> <span class="sr-only"> car </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-caret-down"></i> <span class="sr-only"> caret-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-caret-left"></i> <span class="sr-only"> caret-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-caret-right"></i> <span class="sr-only"> caret-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-caret-square-o-down"></i> <span class="sr-only"> caret-square-o-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-caret-square-o-left"></i> <span class="sr-only"> caret-square-o-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-caret-square-o-right"></i> <span class="sr-only"> caret-square-o-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-caret-square-o-up"></i> <span class="sr-only"> caret-square-o-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-caret-up"></i> <span class="sr-only"> caret-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cart-arrow-down"></i> <span class="sr-only"> cart-arrow-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cart-plus"></i> <span class="sr-only"> cart-plus </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cc"></i> <span class="sr-only"> cc </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-certificate"></i> <span class="sr-only"> certificate </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-chain"></i> <span class="sr-only"> chain </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-chain-broken"></i> <span class="sr-only"> chain-broken </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-check"></i> <span class="sr-only"> check </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-check-circle"></i> <span class="sr-only"> check-circle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-check-circle-o"></i> <span class="sr-only"> check-circle-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-check-square"></i> <span class="sr-only"> check-square </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-check-square-o"></i> <span class="sr-only"> check-square-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-chevron-circle-down"></i> <span class="sr-only"> chevron-circle-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-chevron-circle-left"></i> <span class="sr-only"> chevron-circle-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-chevron-circle-right"></i> <span class="sr-only"> chevron-circle-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-chevron-circle-up"></i> <span class="sr-only"> chevron-circle-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-chevron-down"></i> <span class="sr-only"> chevron-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-chevron-left"></i> <span class="sr-only"> chevron-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-chevron-right"></i> <span class="sr-only"> chevron-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-chevron-up"></i> <span class="sr-only"> chevron-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-child"></i> <span class="sr-only"> child </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-circle"></i> <span class="sr-only"> circle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-circle-o"></i> <span class="sr-only"> circle-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-circle-o-notch"></i> <span class="sr-only"> circle-o-notch </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-circle-thin"></i> <span class="sr-only"> circle-thin </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-clipboard"></i> <span class="sr-only"> clipboard </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-clock-o"></i> <span class="sr-only"> clock-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-clone"></i> <span class="sr-only"> clone </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-close"></i> <span class="sr-only"> close </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cloud"></i> <span class="sr-only"> cloud </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cloud-download"></i> <span class="sr-only"> cloud-download </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cloud-upload"></i> <span class="sr-only"> cloud-upload </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cny"></i> <span class="sr-only"> cny </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-code"></i> <span class="sr-only"> code </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-code-fork"></i> <span class="sr-only"> code-fork </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-coffee"></i> <span class="sr-only"> coffee </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cog"></i> <span class="sr-only"> cog </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cogs"></i> <span class="sr-only"> cogs </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-columns"></i> <span class="sr-only"> columns </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-comment"></i> <span class="sr-only"> comment </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-comment-o"></i> <span class="sr-only"> comment-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-commenting"></i> <span class="sr-only"> commenting </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-commenting-o"></i> <span class="sr-only"> commenting-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-comments"></i> <span class="sr-only"> comments </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-comments-o"></i> <span class="sr-only"> comments-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-compass"></i> <span class="sr-only"> compass </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-compress"></i> <span class="sr-only"> compress </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-copy"></i> <span class="sr-only"> copy </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-copyright"></i> <span class="sr-only"> copyright </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-creative-commons"></i> <span class="sr-only"> creative-commons </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-credit-card"></i> <span class="sr-only"> credit-card </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-credit-card-alt"></i> <span class="sr-only"> credit-card-alt </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-crop"></i> <span class="sr-only"> crop </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-crosshairs"></i> <span class="sr-only"> crosshairs </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cube"></i> <span class="sr-only"> cube </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cubes"></i> <span class="sr-only"> cubes </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cut"></i> <span class="sr-only"> cut </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-cutlery"></i> <span class="sr-only"> cutlery </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-dashboard"></i> <span class="sr-only"> dashboard </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-database"></i> <span class="sr-only"> database </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-deaf"></i> <span class="sr-only"> deaf </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-deafness"></i> <span class="sr-only"> deafness </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-dedent"></i> <span class="sr-only"> dedent </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-desktop"></i> <span class="sr-only"> desktop </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-diamond"></i> <span class="sr-only"> diamond </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-dollar"></i> <span class="sr-only"> dollar </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-dot-circle-o"></i> <span class="sr-only"> dot-circle-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-download"></i> <span class="sr-only"> download </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-drivers-license"></i> <span class="sr-only"> drivers-license </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-drivers-license-o"></i> <span class="sr-only"> drivers-license-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-edit"></i> <span class="sr-only"> edit </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-eject"></i> <span class="sr-only"> eject </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-ellipsis-h"></i> <span class="sr-only"> ellipsis-h </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-ellipsis-v"></i> <span class="sr-only"> ellipsis-v </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-envelope"></i> <span class="sr-only"> envelope </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-envelope-o"></i> <span class="sr-only"> envelope-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-envelope-open"></i> <span class="sr-only"> envelope-open </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-envelope-open-o"></i> <span class="sr-only"> envelope-open-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-envelope-square"></i> <span class="sr-only"> envelope-square </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-eraser"></i> <span class="sr-only"> eraser </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-eur"></i> <span class="sr-only"> eur </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-euro"></i> <span class="sr-only"> euro </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-exchange"></i> <span class="sr-only"> exchange </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-exclamation"></i> <span class="sr-only"> exclamation </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-exclamation-circle"></i> <span class="sr-only"> exclamation-circle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-exclamation-triangle"></i> <span class="sr-only"> exclamation-triangle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-expand"></i> <span class="sr-only"> expand </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-external-link"></i> <span class="sr-only"> external-link </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-external-link-square"></i> <span class="sr-only"> external-link-square </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-eye"></i> <span class="sr-only"> eye </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-eye-slash"></i> <span class="sr-only"> eye-slash </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-eyedropper"></i> <span class="sr-only"> eyedropper </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-fast-backward"></i> <span class="sr-only"> fast-backward </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-fast-forward"></i> <span class="sr-only"> fast-forward </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-fax"></i> <span class="sr-only"> fax </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-feed"></i> <span class="sr-only"> feed </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-female"></i> <span class="sr-only"> female </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-fighter-jet"></i> <span class="sr-only"> fighter-jet </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file"></i> <span class="sr-only"> file </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-archive-o"></i> <span class="sr-only"> file-archive-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-audio-o"></i> <span class="sr-only"> file-audio-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-code-o"></i> <span class="sr-only"> file-code-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-excel-o"></i> <span class="sr-only"> file-excel-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-image-o"></i> <span class="sr-only"> file-image-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-movie-o"></i> <span class="sr-only"> file-movie-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-o"></i> <span class="sr-only"> file-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-pdf-o"></i> <span class="sr-only"> file-pdf-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-photo-o"></i> <span class="sr-only"> file-photo-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-picture-o"></i> <span class="sr-only"> file-picture-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-powerpoint-o"></i> <span class="sr-only"> file-powerpoint-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-sound-o"></i> <span class="sr-only"> file-sound-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-text"></i> <span class="sr-only"> file-text </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-text-o"></i> <span class="sr-only"> file-text-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-video-o"></i> <span class="sr-only"> file-video-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-word-o"></i> <span class="sr-only"> file-word-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-file-zip-o"></i> <span class="sr-only"> file-zip-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-files-o"></i> <span class="sr-only"> files-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-film"></i> <span class="sr-only"> film </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-filter"></i> <span class="sr-only"> filter </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-fire"></i> <span class="sr-only"> fire </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-fire-extinguisher"></i> <span class="sr-only"> fire-extinguisher </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-flag"></i> <span class="sr-only"> flag </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-flag-checkered"></i> <span class="sr-only"> flag-checkered </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-flag-o"></i> <span class="sr-only"> flag-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-flash"></i> <span class="sr-only"> flash </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-flask"></i> <span class="sr-only"> flask </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-floppy-o"></i> <span class="sr-only"> floppy-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-folder"></i> <span class="sr-only"> folder </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-folder-o"></i> <span class="sr-only"> folder-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-folder-open"></i> <span class="sr-only"> folder-open </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-folder-open-o"></i> <span class="sr-only"> folder-open-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-font"></i> <span class="sr-only"> font </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-forward"></i> <span class="sr-only"> forward </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-frown-o"></i> <span class="sr-only"> frown-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-futbol-o"></i> <span class="sr-only"> futbol-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-gamepad"></i> <span class="sr-only"> gamepad </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-gavel"></i> <span class="sr-only"> gavel </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-gbp"></i> <span class="sr-only"> gbp </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-gear"></i> <span class="sr-only"> gear </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-gears"></i> <span class="sr-only"> gears </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-genderless"></i> <span class="sr-only"> genderless </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-gift"></i> <span class="sr-only"> gift </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-glass"></i> <span class="sr-only"> glass </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-globe"></i> <span class="sr-only"> globe </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-graduation-cap"></i> <span class="sr-only"> graduation-cap </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-group"></i> <span class="sr-only"> group </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-h-square"></i> <span class="sr-only"> h-square </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hand-grab-o"></i> <span class="sr-only"> hand-grab-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hand-lizard-o"></i> <span class="sr-only"> hand-lizard-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hand-o-down"></i> <span class="sr-only"> hand-o-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hand-o-left"></i> <span class="sr-only"> hand-o-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hand-o-right"></i> <span class="sr-only"> hand-o-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hand-o-up"></i> <span class="sr-only"> hand-o-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hand-paper-o"></i> <span class="sr-only"> hand-paper-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hand-peace-o"></i> <span class="sr-only"> hand-peace-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hand-pointer-o"></i> <span class="sr-only"> hand-pointer-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hand-rock-o"></i> <span class="sr-only"> hand-rock-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hand-scissors-o"></i> <span class="sr-only"> hand-scissors-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hand-spock-o"></i> <span class="sr-only"> hand-spock-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hand-stop-o"></i> <span class="sr-only"> hand-stop-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-handshake-o"></i> <span class="sr-only"> handshake-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hard-of-hearing"></i> <span class="sr-only"> hard-of-hearing </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hashtag"></i> <span class="sr-only"> hashtag </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hdd-o"></i> <span class="sr-only"> hdd-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-header"></i> <span class="sr-only"> header </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-headphones"></i> <span class="sr-only"> headphones </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-heart"></i> <span class="sr-only"> heart </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-heart-o"></i> <span class="sr-only"> heart-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-heartbeat"></i> <span class="sr-only"> heartbeat </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-history"></i> <span class="sr-only"> history </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-home"></i> <span class="sr-only"> home </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hospital-o"></i> <span class="sr-only"> hospital-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hotel"></i> <span class="sr-only"> hotel </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hourglass"></i> <span class="sr-only"> hourglass </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hourglass-1"></i> <span class="sr-only"> hourglass-1 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hourglass-2"></i> <span class="sr-only"> hourglass-2 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hourglass-3"></i> <span class="sr-only"> hourglass-3 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hourglass-end"></i> <span class="sr-only"> hourglass-end </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hourglass-half"></i> <span class="sr-only"> hourglass-half </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hourglass-o"></i> <span class="sr-only"> hourglass-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-hourglass-start"></i> <span class="sr-only"> hourglass-start </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-i-cursor"></i> <span class="sr-only"> i-cursor </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-id-badge"></i> <span class="sr-only"> id-badge </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-id-card"></i> <span class="sr-only"> id-card </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-id-card-o"></i> <span class="sr-only"> id-card-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-ils"></i> <span class="sr-only"> ils </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-image"></i> <span class="sr-only"> image </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-inbox"></i> <span class="sr-only"> inbox </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-indent"></i> <span class="sr-only"> indent </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-industry"></i> <span class="sr-only"> industry </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-info"></i> <span class="sr-only"> info </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-info-circle"></i> <span class="sr-only"> info-circle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-inr"></i> <span class="sr-only"> inr </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-institution"></i> <span class="sr-only"> institution </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-intersex"></i> <span class="sr-only"> intersex </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-italic"></i> <span class="sr-only"> italic </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-jpy"></i> <span class="sr-only"> jpy </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-key"></i> <span class="sr-only"> key </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-keyboard-o"></i> <span class="sr-only"> keyboard-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-krw"></i> <span class="sr-only"> krw </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-language"></i> <span class="sr-only"> language </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-laptop"></i> <span class="sr-only"> laptop </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-leaf"></i> <span class="sr-only"> leaf </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-legal"></i> <span class="sr-only"> legal </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-lemon-o"></i> <span class="sr-only"> lemon-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-level-down"></i> <span class="sr-only"> level-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-level-up"></i> <span class="sr-only"> level-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-life-bouy"></i> <span class="sr-only"> life-bouy </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-life-buoy"></i> <span class="sr-only"> life-buoy </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-life-ring"></i> <span class="sr-only"> life-ring </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-life-saver"></i> <span class="sr-only"> life-saver </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-lightbulb-o"></i> <span class="sr-only"> lightbulb-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-line-chart"></i> <span class="sr-only"> line-chart </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-link"></i> <span class="sr-only"> link </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-list"></i> <span class="sr-only"> list </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-list-alt"></i> <span class="sr-only"> list-alt </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-list-ol"></i> <span class="sr-only"> list-ol </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-list-ul"></i> <span class="sr-only"> list-ul </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-location-arrow"></i> <span class="sr-only"> location-arrow </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-lock"></i> <span class="sr-only"> lock </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-long-arrow-down"></i> <span class="sr-only"> long-arrow-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-long-arrow-left"></i> <span class="sr-only"> long-arrow-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-long-arrow-right"></i> <span class="sr-only"> long-arrow-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-long-arrow-up"></i> <span class="sr-only"> long-arrow-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-low-vision"></i> <span class="sr-only"> low-vision </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-magic"></i> <span class="sr-only"> magic </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-magnet"></i> <span class="sr-only"> magnet </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-mail-forward"></i> <span class="sr-only"> mail-forward </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-mail-reply"></i> <span class="sr-only"> mail-reply </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-mail-reply-all"></i> <span class="sr-only"> mail-reply-all </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-male"></i> <span class="sr-only"> male </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-map"></i> <span class="sr-only"> map </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-map-marker"></i> <span class="sr-only"> map-marker </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-map-o"></i> <span class="sr-only"> map-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-map-pin"></i> <span class="sr-only"> map-pin </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-map-signs"></i> <span class="sr-only"> map-signs </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-mars"></i> <span class="sr-only"> mars </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-mars-double"></i> <span class="sr-only"> mars-double </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-mars-stroke"></i> <span class="sr-only"> mars-stroke </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-mars-stroke-h"></i> <span class="sr-only"> mars-stroke-h </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-mars-stroke-v"></i> <span class="sr-only"> mars-stroke-v </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-medkit"></i> <span class="sr-only"> medkit </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-meh-o"></i> <span class="sr-only"> meh-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-mercury"></i> <span class="sr-only"> mercury </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-microchip"></i> <span class="sr-only"> microchip </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-microphone"></i> <span class="sr-only"> microphone </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-microphone-slash"></i> <span class="sr-only"> microphone-slash </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-minus"></i> <span class="sr-only"> minus </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-minus-circle"></i> <span class="sr-only"> minus-circle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-minus-square"></i> <span class="sr-only"> minus-square </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-minus-square-o"></i> <span class="sr-only"> minus-square-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-mobile"></i> <span class="sr-only"> mobile </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-mobile-phone"></i> <span class="sr-only"> mobile-phone </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-money"></i> <span class="sr-only"> money </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-moon-o"></i> <span class="sr-only"> moon-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-mortar-board"></i> <span class="sr-only"> mortar-board </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-motorcycle"></i> <span class="sr-only"> motorcycle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-mouse-pointer"></i> <span class="sr-only"> mouse-pointer </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-music"></i> <span class="sr-only"> music </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-navicon"></i> <span class="sr-only"> navicon </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-neuter"></i> <span class="sr-only"> neuter </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-newspaper-o"></i> <span class="sr-only"> newspaper-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-object-group"></i> <span class="sr-only"> object-group </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-object-ungroup"></i> <span class="sr-only"> object-ungroup </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-outdent"></i> <span class="sr-only"> outdent </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-paint-brush"></i> <span class="sr-only"> paint-brush </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-paper-plane"></i> <span class="sr-only"> paper-plane </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-paper-plane-o"></i> <span class="sr-only"> paper-plane-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-paperclip"></i> <span class="sr-only"> paperclip </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-paragraph"></i> <span class="sr-only"> paragraph </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-paste"></i> <span class="sr-only"> paste </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-pause"></i> <span class="sr-only"> pause </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-pause-circle"></i> <span class="sr-only"> pause-circle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-pause-circle-o"></i> <span class="sr-only"> pause-circle-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-paw"></i> <span class="sr-only"> paw </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-pencil"></i> <span class="sr-only"> pencil </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-pencil-square"></i> <span class="sr-only"> pencil-square </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-pencil-square-o"></i> <span class="sr-only"> pencil-square-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-percent"></i> <span class="sr-only"> percent </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-phone"></i> <span class="sr-only"> phone </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-phone-square"></i> <span class="sr-only"> phone-square </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-photo"></i> <span class="sr-only"> photo </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-picture-o"></i> <span class="sr-only"> picture-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-pie-chart"></i> <span class="sr-only"> pie-chart </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-plane"></i> <span class="sr-only"> plane </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-play"></i> <span class="sr-only"> play </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-play-circle"></i> <span class="sr-only"> play-circle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-play-circle-o"></i> <span class="sr-only"> play-circle-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-plug"></i> <span class="sr-only"> plug </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-plus"></i> <span class="sr-only"> plus </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-plus-circle"></i> <span class="sr-only"> plus-circle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-plus-square"></i> <span class="sr-only"> plus-square </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-plus-square-o"></i> <span class="sr-only"> plus-square-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-podcast"></i> <span class="sr-only"> podcast </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-power-off"></i> <span class="sr-only"> power-off </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-print"></i> <span class="sr-only"> print </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-puzzle-piece"></i> <span class="sr-only"> puzzle-piece </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-qrcode"></i> <span class="sr-only"> qrcode </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-question"></i> <span class="sr-only"> question </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-question-circle"></i> <span class="sr-only"> question-circle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-question-circle-o"></i> <span class="sr-only"> question-circle-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-quote-left"></i> <span class="sr-only"> quote-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-quote-right"></i> <span class="sr-only"> quote-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-random"></i> <span class="sr-only"> random </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-recycle"></i> <span class="sr-only"> recycle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-refresh"></i> <span class="sr-only"> refresh </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-registered"></i> <span class="sr-only"> registered </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-remove"></i> <span class="sr-only"> remove </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-reorder"></i> <span class="sr-only"> reorder </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-repeat"></i> <span class="sr-only"> repeat </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-reply"></i> <span class="sr-only"> reply </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-reply-all"></i> <span class="sr-only"> reply-all </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-retweet"></i> <span class="sr-only"> retweet </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-rmb"></i> <span class="sr-only"> rmb </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-road"></i> <span class="sr-only"> road </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-rocket"></i> <span class="sr-only"> rocket </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-rotate-left"></i> <span class="sr-only"> rotate-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-rotate-right"></i> <span class="sr-only"> rotate-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-rouble"></i> <span class="sr-only"> rouble </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-rss"></i> <span class="sr-only"> rss </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-rss-square"></i> <span class="sr-only"> rss-square </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-rub"></i> <span class="sr-only"> rub </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-ruble"></i> <span class="sr-only"> ruble </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-rupee"></i> <span class="sr-only"> rupee </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-s15"></i> <span class="sr-only"> s15 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-save"></i> <span class="sr-only"> save </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-scissors"></i> <span class="sr-only"> scissors </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-search"></i> <span class="sr-only"> search </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-search-minus"></i> <span class="sr-only"> search-minus </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-search-plus"></i> <span class="sr-only"> search-plus </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-send"></i> <span class="sr-only"> send </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-send-o"></i> <span class="sr-only"> send-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-server"></i> <span class="sr-only"> server </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-share"></i> <span class="sr-only"> share </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-share-square"></i> <span class="sr-only"> share-square </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-share-square-o"></i> <span class="sr-only"> share-square-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-shekel"></i> <span class="sr-only"> shekel </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sheqel"></i> <span class="sr-only"> sheqel </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-shield"></i> <span class="sr-only"> shield </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-ship"></i> <span class="sr-only"> ship </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-shopping-bag"></i> <span class="sr-only"> shopping-bag </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-shopping-basket"></i> <span class="sr-only"> shopping-basket </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-shopping-cart"></i> <span class="sr-only"> shopping-cart </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-shower"></i> <span class="sr-only"> shower </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sign-in"></i> <span class="sr-only"> sign-in </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sign-language"></i> <span class="sr-only"> sign-language </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sign-out"></i> <span class="sr-only"> sign-out </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-signal"></i> <span class="sr-only"> signal </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-signing"></i> <span class="sr-only"> signing </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sitemap"></i> <span class="sr-only"> sitemap </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sliders"></i> <span class="sr-only"> sliders </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-smile-o"></i> <span class="sr-only"> smile-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-snowflake-o"></i> <span class="sr-only"> snowflake-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-soccer-ball-o"></i> <span class="sr-only"> soccer-ball-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sort"></i> <span class="sr-only"> sort </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sort-alpha-asc"></i> <span class="sr-only"> sort-alpha-asc </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sort-alpha-desc"></i> <span class="sr-only"> sort-alpha-desc </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sort-amount-asc"></i> <span class="sr-only"> sort-amount-asc </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sort-amount-desc"></i> <span class="sr-only"> sort-amount-desc </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sort-asc"></i> <span class="sr-only"> sort-asc </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sort-desc"></i> <span class="sr-only"> sort-desc </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sort-down"></i> <span class="sr-only"> sort-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sort-numeric-asc"></i> <span class="sr-only"> sort-numeric-asc </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sort-numeric-desc"></i> <span class="sr-only"> sort-numeric-desc </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sort-up"></i> <span class="sr-only"> sort-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-space-shuttle"></i> <span class="sr-only"> space-shuttle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-spinner"></i> <span class="sr-only"> spinner </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-spoon"></i> <span class="sr-only"> spoon </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-square"></i> <span class="sr-only"> square </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-square-o"></i> <span class="sr-only"> square-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-star"></i> <span class="sr-only"> star </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-star-half"></i> <span class="sr-only"> star-half </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-star-half-empty"></i> <span class="sr-only"> star-half-empty </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-star-half-full"></i> <span class="sr-only"> star-half-full </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-star-half-o"></i> <span class="sr-only"> star-half-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-star-o"></i> <span class="sr-only"> star-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-step-backward"></i> <span class="sr-only"> step-backward </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-step-forward"></i> <span class="sr-only"> step-forward </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-stethoscope"></i> <span class="sr-only"> stethoscope </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sticky-note"></i> <span class="sr-only"> sticky-note </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sticky-note-o"></i> <span class="sr-only"> sticky-note-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-stop"></i> <span class="sr-only"> stop </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-stop-circle"></i> <span class="sr-only"> stop-circle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-stop-circle-o"></i> <span class="sr-only"> stop-circle-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-street-view"></i> <span class="sr-only"> street-view </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-strikethrough"></i> <span class="sr-only"> strikethrough </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-subscript"></i> <span class="sr-only"> subscript </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-subway"></i> <span class="sr-only"> subway </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-suitcase"></i> <span class="sr-only"> suitcase </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-sun-o"></i> <span class="sr-only"> sun-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-superscript"></i> <span class="sr-only"> superscript </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-support"></i> <span class="sr-only"> support </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-table"></i> <span class="sr-only"> table </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-tablet"></i> <span class="sr-only"> tablet </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-tachometer"></i> <span class="sr-only"> tachometer </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-tag"></i> <span class="sr-only"> tag </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-tags"></i> <span class="sr-only"> tags </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-tasks"></i> <span class="sr-only"> tasks </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-taxi"></i> <span class="sr-only"> taxi </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-television"></i> <span class="sr-only"> television </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-terminal"></i> <span class="sr-only"> terminal </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-text-height"></i> <span class="sr-only"> text-height </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-text-width"></i> <span class="sr-only"> text-width </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-th"></i> <span class="sr-only"> th </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-th-large"></i> <span class="sr-only"> th-large </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-th-list"></i> <span class="sr-only"> th-list </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thermometer"></i> <span class="sr-only"> thermometer </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thermometer-0"></i> <span class="sr-only"> thermometer-0 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thermometer-1"></i> <span class="sr-only"> thermometer-1 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thermometer-2"></i> <span class="sr-only"> thermometer-2 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thermometer-3"></i> <span class="sr-only"> thermometer-3 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thermometer-4"></i> <span class="sr-only"> thermometer-4 </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thermometer-empty"></i> <span class="sr-only"> thermometer-empty </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thermometer-full"></i> <span class="sr-only"> thermometer-full </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thermometer-half"></i> <span class="sr-only"> thermometer-half </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thermometer-quarter"></i> <span class="sr-only"> thermometer-quarter </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thermometer-three-quarters"></i> <span class="sr-only"> thermometer-three-quarters </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thumb-tack"></i> <span class="sr-only"> thumb-tack </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thumbs-down"></i> <span class="sr-only"> thumbs-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thumbs-o-down"></i> <span class="sr-only"> thumbs-o-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thumbs-o-up"></i> <span class="sr-only"> thumbs-o-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-thumbs-up"></i> <span class="sr-only"> thumbs-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-ticket"></i> <span class="sr-only"> ticket </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-times"></i> <span class="sr-only"> times </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-times-circle"></i> <span class="sr-only"> times-circle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-times-circle-o"></i> <span class="sr-only"> times-circle-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-times-rectangle"></i> <span class="sr-only"> times-rectangle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-times-rectangle-o"></i> <span class="sr-only"> times-rectangle-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-tint"></i> <span class="sr-only"> tint </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-toggle-down"></i> <span class="sr-only"> toggle-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-toggle-left"></i> <span class="sr-only"> toggle-left </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-toggle-off"></i> <span class="sr-only"> toggle-off </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-toggle-on"></i> <span class="sr-only"> toggle-on </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-toggle-right"></i> <span class="sr-only"> toggle-right </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-toggle-up"></i> <span class="sr-only"> toggle-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-trademark"></i> <span class="sr-only"> trademark </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-train"></i> <span class="sr-only"> train </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-transgender"></i> <span class="sr-only"> transgender </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-transgender-alt"></i> <span class="sr-only"> transgender-alt </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-trash"></i> <span class="sr-only"> trash </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-trash-o"></i> <span class="sr-only"> trash-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-tree"></i> <span class="sr-only"> tree </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-trophy"></i> <span class="sr-only"> trophy </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-truck"></i> <span class="sr-only"> truck </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-try"></i> <span class="sr-only"> try </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-tty"></i> <span class="sr-only"> tty </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-turkish-lira"></i> <span class="sr-only"> turkish-lira </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-tv"></i> <span class="sr-only"> tv </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-umbrella"></i> <span class="sr-only"> umbrella </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-underline"></i> <span class="sr-only"> underline </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-undo"></i> <span class="sr-only"> undo </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-universal-access"></i> <span class="sr-only"> universal-access </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-university"></i> <span class="sr-only"> university </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-unlink"></i> <span class="sr-only"> unlink </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-unlock"></i> <span class="sr-only"> unlock </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-unlock-alt"></i> <span class="sr-only"> unlock-alt </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-unsorted"></i> <span class="sr-only"> unsorted </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-upload"></i> <span class="sr-only"> upload </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-usd"></i> <span class="sr-only"> usd </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-user"></i> <span class="sr-only"> user </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-user-circle"></i> <span class="sr-only"> user-circle </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-user-circle-o"></i> <span class="sr-only"> user-circle-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-user-md"></i> <span class="sr-only"> user-md </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-user-o"></i> <span class="sr-only"> user-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-user-plus"></i> <span class="sr-only"> user-plus </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-user-secret"></i> <span class="sr-only"> user-secret </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-user-times"></i> <span class="sr-only"> user-times </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-users"></i> <span class="sr-only"> users </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-vcard"></i> <span class="sr-only"> vcard </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-vcard-o"></i> <span class="sr-only"> vcard-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-venus"></i> <span class="sr-only"> venus </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-venus-double"></i> <span class="sr-only"> venus-double </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-venus-mars"></i> <span class="sr-only"> venus-mars </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-video-camera"></i> <span class="sr-only"> video-camera </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-volume-control-phone"></i> <span class="sr-only"> volume-control-phone </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-volume-down"></i> <span class="sr-only"> volume-down </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-volume-off"></i> <span class="sr-only"> volume-off </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-volume-up"></i> <span class="sr-only"> volume-up </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-warning"></i> <span class="sr-only"> warning </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-wheelchair"></i> <span class="sr-only"> wheelchair </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-wheelchair-alt"></i> <span class="sr-only"> wheelchair-alt </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-wifi"></i> <span class="sr-only"> wifi </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-window-close"></i> <span class="sr-only"> window-close </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-window-close-o"></i> <span class="sr-only"> window-close-o </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-window-maximize"></i> <span class="sr-only"> window-maximize </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-window-minimize"></i> <span class="sr-only"> window-minimize </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-window-restore"></i> <span class="sr-only"> window-restore </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-won"></i> <span class="sr-only"> won </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-wrench"></i> <span class="sr-only"> wrench </span></button>
                                                                <button class="btn btn-outline-primary" type="button"> <i class="fa fa-yen"></i> <span class="sr-only"> yen </span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <errors controlname="icon"> 
                                        <!----> 
                                    </errors>
                                </div>
                                <form-invalid-alert> 
                                    <!----> 
                                </form-invalid-alert>
                                <div class="rbt-button-group">
                                    <button class="btn btn-primary" type="submit">
                                    <message key="global.buttons.save">Save</message>
                                    </button>
                                    <a class="btn btn-outline-primary" routerlink="/categories" href="admin-categories.php">
                                        <message key="global.buttons.cancel">Cancel</message>
                                    </a> </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-xl-2 d-none d-lg-block border-left"><a href="admin-categories.php" class="btn btn-link btn-sm font-weight-normal"><span class="rbt-icon-chevron-left"></span> All categories </a></div>
            </div>
        </ng-component>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
<script>
    // Open/close search panel
    $("#findIcon").click(function() {
        $(".icon-search").show();
    });
    $("#cancelSearch,#iconSelection button ").click(function() {
        $(".icon-search").hide();
    });
    // Set icon name
    $("#iconSelection button").click(function() {
        $(".icon-name").replaceWith("<div class='col icon-name'>" + $(this).text() + "</div>");
    });
    // Set icon class
    $("#iconSelection button i").click(function() {
        var iconClass = $(this).attr("class");
        $(".icon-display i").removeClass();
        $(".icon-display i").addClass(iconClass);
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
</body>
</html>
