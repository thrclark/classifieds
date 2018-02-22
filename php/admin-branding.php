<?php 
$audience = 'admin';
$section = 'settings';
$page_title = 'Branding';
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
            <div id="adminNav">
                <?php include('includes/admin-nav.php') ?>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="main-content">
                <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                              <h1> <?php echo $page_title; ?></h1>
                        </div>
                        <div class="col-auto">
                            <div class="form-check rbt-checkbox" >
                                <label class="form-check-label" tabindex="0">
                                    <input class="form-check-input" type="checkbox" name="togle_help" id="togle_help" checked value="on" >
                                    <span class="rbt-radiocheck-helper"> </span>Help</label>
                            </div>
                        </div>
                    </div>
                <table class="table table-sm table-actions tablesawww tablesaw-stackkk" data-tablesaw-mode="stackkk">
                    <thead>
                        <tr>
                            <th class="w-50"> Name</th>
                            <th class="w-50"> Value</th>
                            <th><span class="d-md-none">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Application Logo  (optional)
                                <div class="small helper-text"> Select an image to be used as an application logo in the header.</div></td>
                            <td><img src="../img/app-icon-generic.png" style="height:70px; width:auto" alt=""/></td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#pub_brandingimage">Edit</button></td>
                        </tr>
                        <tr>
                            <td> Favicon Icon (.ico)
                                <div class="small helper-text"> Select a favicon file to be displayed by web browsers next to the URL in the address bar and in browser bookmarks.</div></td>
                            <td><img src="../img/app-favicon-generic.png" width="16" height="16" alt=""/></td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#pub_favicon">Edit</button></td>
                        </tr>
                        <tr>
                            <td> Favicon Image
                                <div class="small helper-text"> Select a favicon file to be displayed by web browsers next to the URL in the address bar and in browser bookmarks.</div></td>
                            <td><img src="../img/app-icon-generic.png" style="height:70px; width:auto" alt=""/></td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#pub_faviconimage">Edit</button></td>
                        </tr>
                        <tr>
                            <td> Apple Touch Image
                                <div class="small helper-text"> Select an image to be displayed in iOS as a desktop bookmark.</div></td>
                            <td><img src="../img/app-icon-generic.png" style="height:70px; width:auto" alt=""/></td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#pub_appletouch">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Application Title Display
                                <div class="small helper-text">Choose whether or not to display the application name in the header</div></td>
                            <td> Display application name</td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#pub_titledisplay">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Primary Brand Color
                                <div class="small helper-text">Choose the color to be used for the header background & accent colors.</div></td>
                            <td><div class="asdf" style="width: 24px;
    height: 24px;
    border: solid 1px #CCCCCC;
    display: inline-block;
    margin-right: 10px;
    vertical-align: middle;"></div>
                                <span class="align-middle">#ffffff</span></td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#pub_color">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Font Family for Headers
                                <div class="small helper-text">Choose a font family to be used for all headers.</div></td>
                            <td> BentonSansBold</td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#pub_fontheader">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Font Family for Body Text
                                <div class="small helper-text">Choose a font family to be used for the body text.</div></td>
                            <td> BentonSans</td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#pub_fontbody">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Custom Header HTML (optional)
                                <div class="small helper-text">Specify optional HTML markup to be displayed at the top of the application views.</div></td>
                            <td><div class="code" style=" height:70px"> <code>&lt;div id=&quot;custom_header&quot;&gt;
                                    &lt;div id=&quot;branding-bar&quot; itemscope=&quot;itemscope&quot; itemtype=&quot;http://schema.org/CollegeOrUniversity&quot; role=&quot;complementary&quot; aria-labelledby=&quot;iu-campus&quot; class=&quot;hidden-xs hidden-sm&quot;&gt;
                                    &lt;div class=&quot;container&quot;&gt;
                                    &lt;div class=&quot;row pad&quot;&gt;
                                    &lt;img src=&quot;https://sd-prd-images.s3.amazonaws.com/prd/test-uisapp2/20150702T0521167633961_trident-large.png&quot; alt=&quot;Indiana University Home Page&quot;&gt;
                                    &lt;p id=&quot;iu-campus&quot;&gt;
                                    &lt;a href=&quot;http://www.iu.edu&quot; title=&quot;Indiana University&quot;&gt;
                                    &lt;span itemprop=&quot;name&quot;&gt;Indiana University&lt;/span&gt;
                                    &lt;/a&gt;
                                    &lt;/p&gt;
                                    &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;/div&gt; &lt;/div&gt;</code></div></td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#pub_customheader">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Custom Footer HTML (optional)
                                <div class="small helper-text">Specify optional HTML markup to be displayed at the bottom of the application views.</div></td>
                            <td><div class="code" style=" height:70px"> <code>&lt;footer role=&quot;contentinfo&quot;&gt;
                                    &lt;div class=&quot;container&quot;&gt;
                                    &lt;div class=&quot;row pad&quot;&gt;
                                    &lt;p class=&quot;tagline&quot;&gt;Fulfilling &lt;span&gt;the&lt;/span&gt; Promise&lt;/p&gt;
                                    &lt;img src=&quot;https://sd-prd-images.s3.amazonaws.com/prd/test-uisapp2/20150702T0521168403962_trident-small.png&quot; alt=&quot;Indiana University&quot;&gt;
                                    &lt;p class=&quot;copyright&quot;&gt;
                                    &lt;a href=&quot;http://www.iu.edu/copyright/index.shtml&quot; title=&quot;Copyright&quot;&gt;Copyright&lt;/a&gt; © 2017 &lt;span class=&quot;line-break&quot;&gt;The Trustees of &lt;a href=&quot;http://www.iu.edu/&quot; title=&quot;Indiana University&quot; itemprop=&quot;url&quot;&gt;&lt;span itemprop=&quot;name&quot;&gt;Indiana University&lt;/span&gt;&lt;/a&gt;&lt;/span&gt;
                                    &lt;/p&gt;
                                    &lt;p class=&quot;privacy&quot;&gt;&lt;a href=&quot;https://www.iu.edu/~espd/one/privacyStatement.html&quot; id=&quot;privacy-policy-link&quot; title=&quot;Privacy Policy&quot; target=&quot;_blank&quot;&gt;Privacy Notice&lt;/a&gt;
                                    &lt;/p&gt;&lt;/div&gt;
                                    &lt;/div&gt; &lt;/footer&gt;</code></div></td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#pub_customfooter">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Custom  CSS (optional)
                                <div class="small helper-text">Specify optional CSS markup that will style the HTML for the custom header and footer.</div></td>
                            <td><div class="code" style=" height:70px"> <code>@font-face {
                                    font-family: 'BentonSansRegular';
                                    src: url(&quot;https://fonts.iu.edu/fonts/benton-sans-regular.eot&quot;);
                                    src: url(&quot;https://fonts.iu.edu/fonts/benton-sans-regular.eot?#iefix&quot;) format(&quot;embedded-opentype&quot;), url(&quot;https://fonts.iu.edu/fonts/benton-sans-regular.woff&quot;) format(&quot;woff&quot;), url(&quot;https://fonts.iu.edu/fonts/benton-sans-regular.ttf&quot;) format(&quot;truetype&quot;), url(&quot;https://fonts.iu.edu/fonts/benton-sans-regular.svg#BentonSansRegular&quot;) format(&quot;svg&quot;);
                                    font-style: normal;
                                    font-weight: normal; </code> </div></td>
                            <td><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#pub_customcss">Edit</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('modals/modal-admin-branding-image.php') ?>
<?php include('modals/modal-admin-branding-favicon.php') ?>
<?php include('modals/modal-admin-branding-faviconimage.php') ?>
<?php include('modals/modal-admin-branding-appletouch.php') ?>
<?php include('modals/modal-admin-branding-titledisplay.php') ?>
<?php include('modals/modal-admin-branding-color.php') ?>
<?php include('modals/modal-admin-branding-fontheader.php') ?>
<?php include('modals/modal-admin-branding-fontbody.php') ?>
<?php include('modals/modal-admin-branding-customheader.php') ?>
<?php include('modals/modal-admin-branding-customfooter.php') ?>
<?php include('modals/modal-admin-branding-customcss.php') ?>
<?php include('includes/admin-footerscripts.php') ?>
<script type="text/javascript">
    //<![CDATA[
    $( document ).ready(function() {
        $(function() {
            $('.custom-headerfont').hide();
            $('#headerfont').change(function() {
                if ($('#headerfont').val() == 'usecustomfont') {
                    $('.custom-headerfont').slideDown();
                } else {
                    $('.custom-headerfont').slideUp();
                }
            });



        });
    }); //]]>
</script> 
<script type="text/javascript">
    //<![CDATA[
    $( document ).ready(function() {
        $(function() {
            $('.custom-bodyfont').hide();
            $('#bodyfont').change(function() {
                if ($('#bodyfont').val() == 'usecustomfont') {
                    $('.custom-bodyfont').slideDown();
                } else {
                    $('.custom-bodyfont').slideUp();
                }
            });



        });
    }); //]]>
</script> 
<script>
 $(document).ready(function() {
     $(".btn-progressable").click(function() {
         $(".btn-progressable").toggleClass("btn-progress");
         $(".btn-label").fadeOut("fast", function() {
             $(".btn-label").text(($(".btn-label").text() == 'Saving...') ? 'Save' : 'Saving...').fadeIn(200);
         })
     });
 });

</script>
</body>
</html>
