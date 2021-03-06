<?php 
$audience = 'main';
$page_title = 'Newest 6 items this week';	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/all-head-meta.php') ?>
<?php include('includes/main-styles.php') ?>
<style>
body .nav-section {
    border-right: none !important;
}
.rbt-app-header {
    border-bottom-color: #d9d9d9;
    border-bottom: none;
    background: #fff;
}
.emailHeader {
	background: #fff;
	padding: 10px;
	border: 1px solid #ddd;
	margin-left: -10px;
	margin-right: -10px;
}
.resultTitle {
	margin-left: -10px;
}
.postitem .postitem-container {
    display: block;
    color: #444444;
    padding: 5px;
    background: none !important;
    overflow: hidden;
    position: relative;
    margin-bottom: 10px;
    text-decoration: none;
    box-shadow: none !important;
    border-radius: 4px;
}
.postitem {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    border: 1px solid #ddd;
    margin: 5px;
}
.postitem.grid {
    flex: 0 0 33.3333333333%;
    max-width: 32% !important;
}
.postitem .postitem-container .postitem-post-title::before {
    background: none !important;
}
.viewonline {
	padding: 16px 18px; margin: 0px; color: #990000; font-family: Arial,Helvetica,sans-serif; font-size: 10px; line-height: 17px;
}
.viewonline a {
	color: #990000; text-decoration: none;
}
.sourcetext {
	padding: 50px 18px 0px 18px; 
	margin: 0px; 
	font-family: Arial,Helvetica,sans-serif; 
	font-size: 14px; 
	font-weight: normal; 
	font-style: normal; 
	color: #4d5457;
}
.headingtext {
	padding: 12px 18px 0px; 
	margin: 0px; 
	font-size: 32px; 
	font-weight: bold; 
	font-style: normal; 
	line-height: 36px;
}
.subjecttext {
	padding: 12px 18px 0px; 
	margin: 0px; 
	font-family: Arial,Helvetica,sans-serif; 
	font-size: 18px; 
	font-weight: normal; 
	font-style: normal; 
	color: #4d5457;
}
.emailtext {
	padding: 50px 10px 4px; 
	margin: 0px; 
	font-style: normal; 
	font-family: Arial,Helvetica,sans-serif; 
	font-size: 10px; 
	font-weight: normal; 
	line-height: 17px; 
	color: #8f8f8f;
}
.comstext {
	padding: 0px 10px 0px; 
	margin: 0px; 
	font-style: normal; 
	font-family: Arial,Helvetica,sans-serif; 
	font-size: 10px; 
	font-weight: normal; 
	line-height: 17px; 
	color: #8f8f8f;
}

</style>
</head>
<body>
<div>
<table  width="100%" bgcolor="" border="0"  cellpadding="0" cellspacing="0">
		<tr>
        	<td style="font-family:Arial; font-size:13px">
        		<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: 0px; padding: 0px; border-collapse: collapse;">
                    <tbody>
                    <tr>
						<td align="center" colspan="3"><h1>HTML default email</h1></td>
					</tr>
                    <tr>
                        <td valign="top" align="left" style="padding: 0px; margin: 0px;">&nbsp;</td>
                        <td width="464" valign="top" align="center" class="viewonline"><a target="_blank" href="#">View online.</a></td>
                        <td valign="top" align="left" style="padding: 0px; margin: 0px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td valign="top" align="left" style="padding:0; margin:0;">&#160;</td>
                        <td width="600" valign="top" align="center" style="padding:0; margin:0; background-color:#ffffff;">
                        	<table cellpadding="0" cellspacing="0" border="0"  width="100%" bgcolor="">
                    			<tr>
                        			<td style="padding: 0px 0px;">
                        				<table width="100%" cellspacing="0" cellpadding="0" border="0">
                                			<tbody>
                                			<tr>
                                    			<td valign="top" class="sourcetext rbt-ts-20"> IU Classifieds </td>
                                			<tr>
                                    			<td valign="top" class="headingtext">
                                    				<h1 class="">New matches for "car"</h1>
                                    				<h2 class="rbt-ts-20 mb-1">Newest items today</h2>
                                    			</td>
                                			</tr>
                                			<tr>
                                    			<td valign="top" class="subjecttext">
                                    				<ul class="mb-3">
                        								<li>For Sale: 1995 Honda Accord LX 4-dr Sedan, $4,995 at IUK</li>
                        								<li>For Sale: Honda Accord 2001 (150K miles), $2,950 at IUK</li>
                        								<li>For Sale: Rent my car, $9,995 at IUK</li>
                        								<li>For Sale: 1995 Invisible car, $73,995 at IUK</li>
                        								<li>For Sale: 1995 Honda Accord LX 4-dr Sedan, $4,995 at IUK</li>
                        								<li>For Sale: Honda Accord 2001 (150K miles), $2,950 at IUK</li>
                        							</ul>
                                    			</td>
                                			</tr>
                                			<tr>
                                    			<td valign="top" class="headingtext">
                                    				<h2 class="rbt-ts-20 mb-3">View these and 12 other results at IU Classifieds.</h2>
                                    			</td>
                                			</tr>
                                			<tr>
                                    			<td valign="top" style="padding: 12px 18px 30px 18px; margin: 0px;">
                                    				<div class="rbt-button-group">
                                        				<button class="btn btn-primary">Search all results</button>
                                            			<button class="btn btn-outline-primary">Manage Searches</button>
                                        			</div>
                                    			</td>
                                			</tr>
                                			</tbody>
                                		</table>
                                	</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                	</tbody>
                </table>
            </td>
            <td valign="top" align="left" style="padding:0; margin:0;">&#160;</td>
        </tr>
    </table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" class="emailtext">This e-mail was sent to Eric Cox (<a href="#">eecox@iu.edu</a>) by Indiana University. Learn why we are including this: <a href="#">go.iu.edu/emailsafety</a></td>
        </tr>
        <tr>
            <td align="center" class="comstext">To update communication preferences, visit the <a href="#">Notification Center</a>.</td>
        </tr>
    </table>
</div>

<div style=" margin-top:100px; width:600px; margin-left:auto; margin-right:auto; margin-bottom: 40px; font-size: 16px;"><h1 style="text-align: center; margin-bottom: 40px;">Plain text default email</h1>
	NEW MATCHES FOR "CAR"<br /><br />
    Priority: STANDARD<br />
    From: IU Classifieds<br />
    Delivered: Jul 23, 2020 | 1:38 PM<br />
    <br />
    <span class="nc-card-detail-text">
    Newest 6 items today
    <ul>
        <li>For Sale: 1995 Honda Accord LX 4-dr Sedan, $4,995 at IUK</li>
        <li>For Sale: Honda Accord 2001 (150K miles), $2,950 at IUK</li>
        <li>For Sale: Rent my car, $9,995 at IUK</li>
        <li>For Sale: 1995 Invisible car, $73,995 at IUK</li>
        <li>For Sale: 1995 Honda Accord LX 4-dr Sedan, $4,995 at IUK</li>
        <li>For Sale: Honda Accord 2001 (150K miles), $2,950 at IUK</li>
    </ul>
    </span>
    <br />
    View these and 12 other results at IU Classifieds.
    <br />
    <br />
    See all results: http://link1.iu.edu/primary_action<br />
    Manage searches: http://link2.iu.edu/secondary_action<br />
    <br />
    This e-mail was sent to Eric Cox (eecox@iu.edu) by Indiana University. Learn why we are including this: go.iu.edu/emailsafety.
    To update communication preferences, visit the Notification Center.
</div>

</body>
</html>