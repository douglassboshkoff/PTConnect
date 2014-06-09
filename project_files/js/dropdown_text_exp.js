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
            var populate = "<?php echo get_title_by_type(?> +  selected + <?php);?>";

        });

        $('#typeselect').change(function(){
            selected = $('#typeselect').val();
            populate = "<?php echo get_title_by_type(?> +  selected + <?php);?>";

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