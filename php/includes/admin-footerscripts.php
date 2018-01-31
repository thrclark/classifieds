	<script>
    window.jQuery || document.write('<script src="../bower_components/jquery/dist/jquery.min.js"><\/script>')
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<script src="../bower_components/filament-tablesaw/dist/tablesaw.jquery.js"></script>
<script src="../bower_components/filament-tablesaw/dist/tablesaw-init.js"></script>
<script src="../js/jquery.dotdotdot.min.js"></script>
<script src="../js/slick/slick.min.js"></script>
<script src="../js/jscolor.js"></script>
<script src="../js/jquery.sticky.js"></script>
<script src="../js/bootstrap-maxlength.js"></script>
<script>
    $(document).ready(function() {
        $(".app-headerrr").sticky({
            topSpacing: 0
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
        $(".toggle_mobilesearch").click(function() {
            $(".mobile-panel.search").slideToggle();
            $(".main-content").toggle();
            $(".mobile-panel.post, .mobile-panel.categories").slideUp();
        });
        $(".toggle_mobilepost").click(function() {
            $(".mobile-panel.post").slideToggle();
            $(".main-content").toggle();
            $(".mobile-panel.search, .mobile-panel.categories").slideUp();
        });
        $(".toggle_mobilecategories").click(function() {
            $(".mobile-panel.categories").slideToggle();
            $(".main-content").toggle();
            $(".mobile-panel.post, .mobile-panel.search").slideUp();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".postitem-post-title, .postitem-description, .postitem222222 .ad-price, .code, .postitem-price, .postitem-postlocation").dotdotdot({
            /*	The text to add as ellipsis. */
            ellipsis: '...',

            /*	How to cut off the text/html: 'word'/'letter'/'children' */
            wrap: 'letter',

            /*	Wrap-option fallback to 'letter' for long words */
            fallbackToLetter: 'word',

            /*	jQuery-selector for the element to keep and put after the ellipsis. */
            after: null,

            /*	Whether to update the ellipsis: true/'window' */
            watch: true,

            /*	Optionally set a max-height, if null, the height will be measured. */
            height: null,

            /*	Deviation for the height-option. */
            tolerance: 0

        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#set_grid').click(function() {
            $('.postitem').addClass('grid');
            $('.postitem').removeClass('thumb');	
            $('.postitem').removeClass('list');
            $('.postitem').removeClass('mobile');
        });

        $('#set_thumb').click(function() {
            $('.postitem').addClass('thumb');
            $('.postitem').removeClass('grid');
            $('.postitem').removeClass('list');
            $('.postitem').removeClass('mobile');
        });
        $('#set_list').click(function() {
            $('.postitem').addClass('list');
            $('.postitem').removeClass('grid');
            $('.postitem').removeClass('thumb');
            $('.postitem').removeClass('mobile');
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
            $(this).children("span").text(function(i, v) {
                return v === 'Add to Watchlist' ? 'Remove from Watchlist' : 'Add to Watchlist'
            })
        })
    });
</script>




<script>

	
	
	
	$("#togle_help").change(function() {
    if(this.checked) {
        $(".helper-text").fadeIn();
		
    }
	else {
		 $(".helper-text").fadeOut();
            }
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



