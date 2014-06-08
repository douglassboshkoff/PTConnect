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
            $('#titletextbox').val("Enter New Experience");
           // $('#titletextbox').text("");
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
        $("#titletextbox").change(function()
        {


        });

        $( "#titletextbox").click(function(){
            $(this).val("");
        });
        $("#titletextbox").focusout(function(){
           // $(this).text("");
           // $(this).val($(this).text());

        });

    }
    runIt();

});