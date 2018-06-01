<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'LDAP configuration';
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
    <div class="row mb-3">
        <div class="col-12">
            <div class="main-content" id="main-content">
                <h1> <?php echo $page_title; ?></h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="main-content">
                <router-outlet></router-outlet>
                <ng-component>
                    <section>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span class="rbt-icon-close"></span> </button>
                            <div class="alert-heading">Changes to this LDAP configuration will affect the following tenants:</div>
                            <ul class="list-unstyled">
                                <li > Verify App
                                    <ul>
                                        <li> IU Verify Test </li>
                                        <li> IU Verify STG </li>
                                    </ul>
                                </li>
                                <li> Classifieds App
                                    <ul>
                                        <li> Classifieds.IU STG </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                       
                        <form novalidate class="ng-untouched ng-pristine ng-valid">
                            <div class="form-group">
                                <label class="control-label" id="urlLabel">
                                    <message key="admin.ldap.field.url">LDAP URL</message>
                                </label>
                                <div class="ccf-instructional-text" id="urlDirections">
                                    <message key="admin.ldap.field.url.directions">URL to the LDAP server.  Example: ldap://ads.mydomain.edu</message>
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <countdown>
                                            <div class="rbt-charcount">
                                                <input aria-labelledby="urlLabel urlDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="url">
                                                <span class="badge badge-success"> 1983 </span> </div>
                                        </countdown>
                                    </div>
                                </div>
                                <errors controlname="url"> </errors>
                            </div>
                            <div class="form-group">
                                <label class="control-label" id="baseLabel">
                                    <message key="admin.ldap.field.base">Base</message>
                                </label>
                                <div class="ccf-instructional-text" id="baseDirections">
                                    <message key="admin.ldap.field.base.directions">LDAP base information.  Example: ou=myOu,dc=ads,dc=myDomain,dc=edu</message>
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <countdown>
                                            <div class="rbt-charcount">
                                                <input aria-labelledby="baseLabel baseDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="base">
                                                <span class="badge badge-success"> 169 </span> </div>
                                        </countdown>
                                    </div>
                                </div>
                                <errors controlname="base"> </errors>
                            </div>
                            <div class="form-group">
                                <label class="control-label" id="usernameLabel">
                                    <message key="admin.ldap.field.userName">User Name</message>
                                </label>
                                <div class="ccf-instructional-text" id="usernameDirections">
                                    <message key="admin.ldap.field.userName.directions">LDAP account user name.  Example: cn=myUser,ou=myOu,dc=ads,dc=myDomain,dc=edu</message>
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <countdown>
                                            <div class="rbt-charcount">
                                                <input aria-labelledby="usernameLabel usernameDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="username">
                                                <span class="badge badge-success"> 157 </span> </div>
                                        </countdown>
                                    </div>
                                </div>
                                <errors controlname="username"> </errors>
                            </div>
                            <div class="form-group">
                                <label class="control-label" id="passwordLabel">
                                    <message key="admin.ldap.field.password">Password</message>
                                </label>
                                <div class="ccf-instructional-text" id="passwordDirections">
                                    <message key="admin.ldap.field.password.directions">LDAP user account password.</message>
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <countdown>
                                            <div class="rbt-charcount">
                                                <input aria-labelledby="passwordLabel passwordDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="password" type="password">
                                                <span class="badge badge-success"> 1000 </span> </div>
                                        </countdown>
                                    </div>
                                </div>
                                <errors controlname="password"> </errors>
                            </div>
                            <div class="form-group">
                                <label class="control-label" id="passwordConfirmLabel">
                                    <message key="admin.ldap.field.passwordConfirm">Confirm Password</message>
                                </label>
                                <div class="ccf-instructional-text" id="passwordConfirmDirections">
                                    <message key="admin.ldap.field.passwordConfirm.directions">Confirm the password. Passwords must match.</message>
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <input aria-labelledby="passwordConfirmLabel passwordConfirmDirections" ccfvalidated="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="passwordConfirm" type="password">
                                    </div>
                                </div>
                                <errors controlname="passwordConfirm"> </errors>
                            </div>
                            <errors controlname="ldapId"> </errors>
                            <form-invalid-alert> </form-invalid-alert>
                            <p class="text-right">
                                <button class="btn btn-danger" type="button" disabled="">
                                <message key="admin.buttons.revert">Revert</message>
                                </button>
                                <button class="btn btn-primary" type="submit">
                                <message key="global.buttons.save">Save</message>
                                </button>
                            </p>
                        </form>
                    </section>
                </ng-component>
            </div>
        </div>
    </div>
</div>
<?php include('includes/admin-footerscripts.php') ?>
</body>
</html>
