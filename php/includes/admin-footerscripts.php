<script>window.jQuery || document.write('<script src="../bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../bower_components/filament-tablesaw/dist/tablesaw.jquery.js"></script>
<script src="../bower_components/filament-tablesaw/dist/tablesaw-init.js"></script>
<script src="../js/jquery.dotdotdot.min.js"></script>





<script type="text/javascript">
    $(function() {
        $("#mainsearch").focus();
    });
</script>
<script>
    function openNav() {
        if (window.innerWidth < 560) {
            document.getElementById("UserAccess").style.width = "80%";
        } else {
            document.getElementById("UserAccess").style.width = "40%";
        }
    }

    function closeNav() {
        document.getElementById("UserAccess").style.width = "0";
    }
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
        $(".ad-title,.ad-description,.ad-price").dotdotdot({
            /*	The text to add as ellipsis. */
            ellipsis: '...',

            /*	How to cut off the text/html: 'word'/'letter'/'children' */
            wrap: 'word',

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
            $('.ad2').addClass('grid');
            $('.ad2').removeClass('thumb');
            $('.ad2').removeClass('list');
            $('.ad2').removeClass('mobile');
        });

        $('#set_thumb').click(function() {
            $('.ad2').addClass('thumb');
            $('.ad2').removeClass('grid');
            $('.ad2').removeClass('list');
            $('.ad2').removeClass('mobile');
        });
        $('#set_list').click(function() {
            $('.ad2').addClass('list');
            $('.ad2').removeClass('grid');
            $('.ad2').removeClass('thumb');
            $('.ad2').removeClass('mobile');
        });

    });
</script>
<script>
    $(document).ready(function() {
        $(function() {
            $(".ad2").click(function() {
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