

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script>window.jQuery || document.write('<script src="../bower_components/jquery/dist/jquery.min.js"><\/script>')</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script> 


<script>
    $(document).ready(function() {
        $("#help_toggle").click(function() {
            $("#help_toggle_switch").fadeOut(function() {
                $("#help_toggle_switch").text(($("#help_toggle_switch").text() == 'off') ? 'on' : 'off').fadeIn();
            })
        })
    });
</script>

<script>
    $("#help_toggle").click(function() {
        $(".form-text").fadeToggle();
    });
</script>
