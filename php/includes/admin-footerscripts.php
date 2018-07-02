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
                $(this).addClass("faded");
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
            //$('#post_detail2-1').modal('show')
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
$(document).ready(function(){
    $(".btn-report").click(function(){
        $(".post-details-body, .modal-footer").hide();
		$(".report-post").show();
    });
	
	$(".btn-reportcancel").click(function(){
        $(".post-details-body, .modal-footer").show();
		$(".report-post").hide();
    });
	
	$(".btn-reportsubmit").click(function(){
        $(".report-post-confirm").show();
		$(".report-post").hide();
    });
	
	
	
	
    
});
</script>
<script>
$(function(){
    $("[data-toggle=popover]").popover({
        html : true,
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
<script> //page reset for prototype only
    $(document).ready(function() {
        $(window).resize(function() {
            //if ($(window).width() > 767) {
            //    window.location = "main-home.php";
            //} else {
                
            //}
        });
    });
</script>