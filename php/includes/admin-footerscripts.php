<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<script src="../js/jquery.dotdotdot.min.js"></script>
<script src="../js/slick/slick.min.js"></script>
<script src="../js/jscolor.js"></script>
<script src="../js/jquery.sticky.js"></script>
<script src="../js/bootstrap-maxlength.js"></script>

<!--mobile search-->
<script>
    $(document).ready(function() {
        $("#mobile_showSearch button, #setsearch").click(function() {
            $("#mainSearch_container").removeClass("d-none d-md-block");
            $("#mainSearch_container").addClass("pr-0");
            $(".rbt-brand-image-container, .rbt-brand-title-container, .rbt-drawer-button, #mobile_showSearch").hide();
            $("#mobile_hideSearch").show();
        });
        $("#mobile_hideSearch button").click(function() {
            $("#mainSearch_container").addClass("d-none d-md-block");
            $("#mainSearch_container").removeClass("pr-0");
            $(".rbt-brand-image-container, .rbt-brand-title-container, .rbt-drawer-button, #mobile_showSearch").show();
            $("#mobile_hideSearch").hide();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#mainSearch').keydown(function() {
            tmpval = $(this).val();
            if (tmpval == '') {
                $("#cleartext2").css({
                    "display": "none"
                });
            } else {
                $("#cleartext2").css({
                    "display": "block"
                });
            }
        });
        $("#cleartext2").click(function() {
            $("#cleartext2").hide();
            $("#mainSearch").val("");
            $("#mainSearch").focus();
        });
    });
</script>
<script>
    $(".rbt-drawer-button").click(function() {
        $(".rbt-drawer,.rbt-drawer-button").toggleClass("open");
    });
</script>
<script>
    $(".rbt-drawer-button").click(function() {

        $(".main-content, #customfooter").toggleClass("faded");
    });
    $(".main-content, #customfooter").click(function() {
        $(".main-content, #customfooter").removeClass("faded");
        $(".rbt-drawer,.rbt-drawer-button").removeClass("open");
    });
</script>
<script>
    $(document).ready(function() {
        $(".rbt-app-header").sticky({
            topSpacing: 0
        });
        var resizeTimer;
        $(window).on('resize', function(e) {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                $(".rbt-app-header").sticky({
                    topSpacing: 0
                });
            }, 250);
        });
    });
</script>
<script>
    $(".menu-trigger").click(function() {
        $("#UserAccess").addClass("display");
    });
    $(".closebtn").click(function() {
        $("#UserAccess").removeClass("display");
    });
</script>
<script type="text/javascript">
    $(function() {
        $("#mainsearch").focus();
    });
</script>
<script>
    $(document).ready(function() {
        $('#set_grid').click(function() {
            $('.postitem').addClass('grid');
            $('.postitem').removeClass('thumb');
            $('.postitem').removeClass('list');
            $('.postitem').removeClass('mobile');
            $('#set_grid').addClass('active');
            $('#set_thumb, #set_list').removeClass('active');

        });

        $('#set_thumb').click(function() {
            $('.postitem').addClass('thumb');
            $('.postitem').removeClass('grid');
            $('.postitem').removeClass('list');
            $('.postitem').removeClass('mobile');
            $('#set_thumb').addClass('active');
            $('#set_grid, #set_list').removeClass('active');
        });
        $('#set_list').click(function() {
            $('.postitem').addClass('list');
            $('.postitem').removeClass('grid');
            $('.postitem').removeClass('thumb');
            $('.postitem').removeClass('mobile');
            $('#set_list').addClass('active');
            $('#set_thumb, #set_grid').removeClass('active');
        });

    });
</script>
<script>
    $(document).ready(function() {
        $(function() {
            $(".postitem-container").click(function() {
                $(this).addClass("demojs-visited");
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        if ($(window).width() < 576) {
            $(".grid").removeClass("grid").addClass("mobile");
        } else {

        }

        $(window).resize(function() {
            if ($(window).width() < 576) {
                $(".grid").removeClass("grid").addClass("mobile");
                $(".thumb").removeClass("thumb").addClass("mobile");
                $(".list").removeClass("list").addClass("mobile");
            } else {}
        });

        $(window).resize(function() {
            if ($(window).width() > 577) {
                $(".mobile").removeClass("mobile").addClass("grid");

            } else {

            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".postitem, .btn").click(function() {
            setTimeout(function() {
                $('.your-class').slick({
                    slidesToShow: 1,
                });
            }, 200);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".favorite").click(function() {
            $(this).children(".fa").toggleClass("fa-star-o");
            $(this).children(".fa").toggleClass("fa-star");
            //$(this).children("span").text(function(i, v) {
            //return v === 'Add to watchlist' ? 'Remove from watchlist' : 'Add to watchlist'
            //})
        })
    });
</script>
<script>
    $(document).ready(function() {
        $('#mainsearch').keydown(function() {
            tmpval = $(this).val();
            if (tmpval == '') {
                $(".cleartext").css({
                    "display": "none"
                });
            } else {
                $(".cleartext").css({
                    "display": "block"
                });
            }
        });
        $(".cleartext").click(function() {
            $(".cleartext").hide();
            $("#mainsearch").val("");
            $("#mainsearch").focus();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#mainsearch-mobile').keydown(function() {
            tmpval = $(this).val();
            if (tmpval == '') {
                $(".cleartext").css({
                    "display": "none"
                });
            } else {
                $(".cleartext").css({
                    "display": "block"
                });
            }
        });
        $(".cleartext").click(function() {
            $(".cleartext").hide();
            $("#mainsearch-mobile").val("");
            $("#mainsearch-mobile").focus();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#post_detail .demojs-btn-reportad").click(function() {
            $("#post_detail .demojs-view-posting").hide();
            $("#post_detail .demojs-report-post").show();
        });
		
		 $("#post_detail .demojs-btn-viewpolicy").click(function() {
            $("#post_detail .demojs-report-post").hide();
			$("#post_detail .demojs-view-policy").show();
        });
		$("#post_detail .demojs-btn-closepolicy").click(function() {
            $("#post_detail .demojs-report-post").show();
			$("#post_detail .demojs-view-policy").hide();
        });
		$("#post_detail .demojs-btn-submitreport").click(function() {
            $("#post_detail .demojs-report-post").hide();
			$("#post_detail .demojs-report-confirm").show();
        });
		
		$("#post_detail .demojs-btn-cancelreport").click(function() {
            $("#post_detail .demojs-report-post").hide();
			$("#post_detail .demojs-view-posting").show();
        });
		
		
		
		
    });
</script>
<script>
    $(document).ready(function() {
        $("#admin_ad_detail .demojs-btn-deactivatead").click(function() {
            $("#admin_ad_detail .demojs-admin-defaultview").hide();
            $("#admin_ad_detail .demojs-admin-confirm-adremove").show();
        });
		
		 $("#admin_ad_detail .demojs-btn-sendmessage").click(function() {
            $("#admin_ad_detail .demojs-admin-confirm-adremove").hide();
			$("#admin_ad_detail .demojs-admin-confirm-messagesent").show();
        });
		$("#admin_ad_detail .demojs-btn-deactivate").click(function() {
            $("#admin_ad_detail .demojs-admin-confirm-adremove").hide();
			$("#admin_ad_detail .demojs-admin-confirm-messagesent").show();
        });
		$("#admin_ad_detail .demojs-btn-deactivatesend").click(function() {
            $("#admin_ad_detail .demojs-admin-confirm-adremove").hide();
			$("#admin_ad_detail .demojs-admin-confirm-addeactmessagesent").show();
        });
    });
</script>















<script>
    $(document).ready(function() {
        $("#admin_ad_detail_deactivated_user .demojs-btn-reactivatead").click(function() {
            $("#admin_ad_detail_deactivated_user .demojs-admin-defaultview").hide();
            $("#admin_ad_detail_deactivated_user .demojs-admin-confirm-adreactivization").show();
        });
		
		
    });
</script>







<script>
    $(document).ready(function() {
        $("#admin_ad_detail_deactivated_admin .demojs-btn-reactivatead").click(function() {
            $("#admin_ad_detail_deactivated_admin .demojs-admin-defaultview").hide();
            $("#admin_ad_detail_deactivated_admin .demojs-admin-confirm-adreactivization").show();
        });
		
		
    });
</script>





<script>
    $(document).ready(function() {
        $("#admin_ad_detail_reported .demojs-btn-viewreport").click(function() {
            
            $("#admin_ad_detail_reported .demojs-admin-viewreport").slideToggle();
			$(this).text(function(i, text){
          return text === "Hide report" ? "View report" : "Hide report";
      })
        });
        $("#admin_ad_detail_reported .demojs-btn-viewad").click(function() {
            $("#admin_ad_detail_reported .demojs-admin-view-policy").hide();
            $("#admin_ad_detail_reported .demojs-admin-defaultview").show();	
        });
        $("#admin_ad_detail_reported .demojs-btn-viewpolicy").click(function() {
            $("#admin_ad_detail_reported .demojs-admin-defaultview").hide();
            $("#admin_ad_detail_reported .demojs-admin-view-policy").show();
        });

        $("#admin_ad_detail_reported .demojs-btn-deactivatead").click(function() {
            $("#admin_ad_detail_reported .demojs-admin-viewreport, #admin_ad_detail_reported .demojs-admin-defaultview").hide();
            $("#admin_ad_detail_reported .demojs-admin-confirm-adremove").show();
        });

        $("#admin_ad_detail_reported .demojs-btn-deactivate").click(function() {
            $("#admin_ad_detail_reported .demojs-admin-confirm-adremove").hide();
			$("#admin_ad_detail_reported .demojs-admin-confirm-messagesent").show();
        });
		$("#admin_ad_detail_reported .demojs-btn-deactivatesend").click(function() {
            $("#admin_ad_detail_reported .demojs-admin-confirm-adremove").hide();
			$("#admin_ad_detail_reported .demojs-admin-confirm-addeactmessagesent").show();
        });
    });
</script>





<script>
    $(document).ready(function() {
        $("#admin_ad_detail_reportdismissed .demojs-btn-viewreport").click(function() {
            $("#admin_ad_detail_reportdismissed .demojs-admin-defaultview, #admin_ad_detail_reportdismissed .demojs-admin-view-policy").hide();
            $("#admin_ad_detail_reportdismissed .demojs-admin-viewreport").show();
        });
        $("#admin_ad_detail_reportdismissed .demojs-btn-viewad").click(function() {
            $("#admin_ad_detail_reportdismissed .demojs-admin-viewreport, #admin_ad_detail_reportdismissed .demojs-admin-view-policy").hide();
            $("#admin_ad_detail_reportdismissed .demojs-admin-defaultview").show();
        });
        $("#admin_ad_detail_reportdismissed .demojs-btn-viewpolicy").click(function() {
            $("#admin_ad_detail_reportdismissed .demojs-admin-viewreport").hide();
            $("#admin_ad_detail_reportdismissed .demojs-admin-view-policy").show();
        });

        $("#admin_ad_detail_reportdismissed .demojs-btn-deactivatead").click(function() {
            $("#admin_ad_detail_reportdismissed .demojs-admin-viewreport, #admin_ad_detail_reportdismissed .demojs-admin-defaultview").hide();
            $("#admin_ad_detail_reportdismissed .demojs-admin-confirm-adremove").show();
        });

        $("#admin_ad_detail_reportdismissed .demojs-btn-deactivatereport").click(function() {
            $("#admin_ad_detail_reportdismissed .demojs-admin-viewreport, #admin_ad_detail_reportdismissed .demojs-admin-defaultview").hide();
            $("#admin_ad_detail_reportdismissed .demojs-admin-confirm-reportremove").show();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#admin_ad_detail_addeactivated .demojs-btn-viewreport").click(function() {
            $("#admin_ad_detail_addeactivated .demojs-admin-defaultview, #admin_ad_detail_addeactivated .demojs-admin-view-policy").hide();
            $("#admin_ad_detail_addeactivated .demojs-admin-viewreport").show();
        });
        $("#admin_ad_detail_addeactivated .demojs-btn-viewad").click(function() {
            $("#admin_ad_detail_addeactivated .demojs-admin-viewreport, #admin_ad_detail_addeactivated .demojs-admin-view-policy").hide();
            $("#admin_ad_detail_addeactivated .demojs-admin-defaultview").show();
        });
        $("#admin_ad_detail_addeactivated .demojs-btn-viewpolicy").click(function() {
            $("#admin_ad_detail_addeactivated .demojs-admin-viewreport").hide();
            $("#admin_ad_detail_addeactivated .demojs-admin-view-policy").show();
        });

        $("#admin_ad_detail_addeactivated .demojs-btn-deactivatead").click(function() {
            $("#admin_ad_detail_addeactivated .demojs-admin-viewreport, #admin_ad_detail_addeactivated .demojs-admin-defaultview").hide();
            $("#admin_ad_detail_addeactivated .demojs-admin-confirm-adremove").show();
        });

        $("#admin_ad_detail_addeactivated .demojs-btn-deactivatereport").click(function() {
            $("#admin_ad_detail_addeactivated .demojs-admin-viewreport, #admin_ad_detail_addeactivated .demojs-admin-defaultview").hide();
            $("#admin_ad_detail_addeactivated .demojs-admin-confirm-reportremove").show();
        });
    });
</script>
<script>
    $(function() {
        $("[data-toggle=popover]").popover({
            html: true,
            content: function() {
                var content = $(this).attr("data-popover-content");
                return $(content).children(".popover-body").html();
            },
            title: function() {
                var title = $(this).attr("data-popover-content");
                return $(title).children(".popover-heading").html();
            }
        });
    });
</script>

<script type="text/javascript">
    $(function() {
        $('#selectresponse').change(function() {
            $('#reasonvalue').html($(this).val());
        }).change(); // Trigger the events

        var feedit = new Array({
            value: 'Fraudulent activity',
            areatext: 'We have received a complaint regarding your use of Classifieds for fradulent activity. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.'
        }, {
            value: 'Contains offensive material',
            areatext: 'We have received a complaint regarding your use of Classifieds for posting offensive material. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.'
        }, {
            value: 'Promotes personal/commercial business',
            areatext: 'We have received a complaint regarding your use of Classifieds for promotion of a personal/commercial business. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.'
        }, {
            value: 'Promotes a political/social agenda',
            areatext: 'We have received a complaint regarding your use of Classifieds for promoting a political/social agenda. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.'
        }, {
            value: 'Selling IU parking permit',
            areatext: 'Your IU Classifieds ad(s) for the buying or selling of IU parking permits violates IU policy.  IU Permits are property of the University. Please be aware that your ad(s) have been removed, and future violations may result in revoked access to IU Classifieds. We encourage you to continue using Classifieds for appropriate reasons.'
        }, {
            value: 'Fake ad',
            areatext: 'We have received a complaint regarding your use of Classifieds for posting a fake/spoof ad. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.'
        }, {
            value: 'Other',
            areatext: ''
        });

        $('#selectresponse').on('change', function() {
            var e = $(this).val();
            $.each(feedit, function(key, val) {
                if (e == val.value) {
                    $('#responsefield').val(val.areatext);
                }
            });
        });
    });
</script>

<script type="text/javascript">
    $(function() {
        $('#selectresponse1').change(function() {
            $('.demojs-reasonvalue1').html($(this).val());
        }).change(); // Trigger the events

        var feedit = new Array({
            value: 'Fraudulent activity',
            areatext: 'We have received a complaint regarding your use of Classifieds for fradulent activity. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.'
        }, {
            value: 'Contains offensive material',
            areatext: 'We have received a complaint regarding your use of Classifieds for posting offensive material. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.'
        }, {
            value: 'Promotes personal/commercial business',
            areatext: 'We have received a complaint regarding your use of Classifieds for promotion of a personal/commercial business. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.'
        }, {
            value: 'Promotes a political/social agenda',
            areatext: 'We have received a complaint regarding your use of Classifieds for promoting a political/social agenda. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.'
        }, {
            value: 'Selling IU parking permit',
            areatext: 'Your IU Classifieds ad(s) for the buying or selling of IU parking permits violates IU policy.  IU Permits are property of the University. Please be aware that your ad(s) have been removed, and future violations may result in revoked access to IU Classifieds. We encourage you to continue using Classifieds for appropriate reasons.'
        }, {
            value: 'Fake ad',
            areatext: 'We have received a complaint regarding your use of Classifieds for posting a fake/spoof ad. One.IU provides Classifieds for personal use to University affiliates. Ads that violate IU policy are not allowed. You can review this policy in Classifieds. Please be aware that your ads have been removed, and future violations may result in revoked access to Classifieds. We encourage you to continue using Classifieds for appropriate reasons.'
        }, {
            value: 'Other',
            areatext: ''
        });

        $('#selectresponse1').on('change', function() {
            var e = $(this).val();
            $.each(feedit, function(key, val) {
                if (e == val.value) {
                    $('#responsefield1').val(val.areatext);
                }
            });
        });
    });
</script>




<script>
$('#admin_ad_detail input[name="takeactiontoggle"]').click(function() {
    if (this.id == "takeadminaction") {
        $("#admin_ad_detail #showadminaction, #admin_ad_detail .demojs-btn-deactivatesend").show();
		 $("#admin_ad_detail .demojs-btn-deactivate").hide();
    } else {
        $("#admin_ad_detail #showadminaction, #admin_ad_detail .demojs-btn-deactivatesend").hide();
		$("#admin_ad_detail .demojs-btn-deactivate").show();
    }
});

</script>

<script>
$('#admin_ad_detail_reported input[name="takeactiontoggle1"]').click(function() {
    if (this.id == "takeadminaction1") {
        $("#admin_ad_detail_reported #showadminaction1, #admin_ad_detail_reported .demojs-btn-deactivatesend").show();
		 $("#admin_ad_detail_reported .demojs-btn-deactivate").hide();
    } else {
        $("#admin_ad_detail_reported #showadminaction1, #admin_ad_detail_reported .demojs-btn-deactivatesend").hide();
		$("#admin_ad_detail_reported .demojs-btn-deactivate").show();
    }
});

</script>

<script>
    $(document).ready(function() {
       
		
		 $(".demojs-restoreprevreports").click(function() {
            $(".ccf-adreport .demojs-admin-viewdismissedreport").slideToggle();
        });
		
		
    });
</script>



