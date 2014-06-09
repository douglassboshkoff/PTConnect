/**
 * Created with JetBrains PhpStorm.
 * User: Adam
 * Date: 5/6/14
 * Time: 1:35 PM
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){
    function runIt(){
        $(window).load(function(){
            $('#titlediv').hide();
            $('#titletextbox').val("Enter New Experience")
            var selected = $('#typeselect').val();
            var populate = "<?php get_title_by_type(" + selected + "); ?>";
           // var populate = "<?php echo get_title_by_type(?> +  selected + <?php);?>";

            var titleselect = $('#titleselect');
        });

        $('#typeselect').change(function(){
            var selected = $('#typeselect').val();
            var populate = "<?php echo get_title_by_type(" + selected + "); ?>";

            // populate = "<?php echo get_title_by_type(?> +  selected + <?php);?>";
            var html = $.map(populate, function(populate){
                return '<option value = "' + populate + '">' + '</option>'}).join(' ');
            $('titleselect').html(html);
        });

        $('#titleselect').change(function(){
            var val = $(this).val();

            if(val == "1")
            {
                $("#titlediv").show();
            }else{
                $("#titlediv").hide();
            }
        });


        $( "#titletextbox").click(function(){
            $(this).val("");
        });


    }
    runIt();

});