$(document).ready(function() {
    function runIt() {
        $(window).load(function()
        {
            $("#hiddendiv").hide();
            $("#hiddendiv2").hide();
            $("#hiddendiv3").hide();
            $("#hiddendiv4").hide();
            $("#majordiv1").hide();
            $("#majordiv2").hide();
            $("#minordiv1").hide();
            $("#minordiv2").hide();
            $('#majorothertextbox').val("Enter New Major 1 Here");
            $('#majorothertextbox2').val("Enter New Major 2 Here");
            $('#minorothertextbox').val("Enter New Minor 1 Here");
            $('#minorothertextbox2').val("Enter New Minor 2 Here");

        });

        $("#college2").change(function()
        {
            var val = $(this).val();

            if(val == "1")
            {
                $("#hiddendiv").show();
                $("#hiddendiv2").show();
                $("#hiddendiv3").show();
                $("#hiddendiv4").show();

            }else{
                $("#hiddendiv").hide();
                $("#hiddendiv2").show();
                $("#hiddendiv3").show();
                $("#hiddendiv4").show();

            }
        });

        $("#college2").change(function()
        {
            var val = $(this).val();

            if(val == "1")
            {
                $("#hiddendiv2").show();
            }else{
                $("#hiddendiv2").hide();
            }
        });
        $("#college2").change(function()
        {
            var val = $(this).val();

            if(val == "1")
            {
                $("#hiddendiv3").show();
            }else{
                $("#hiddendiv3").hide();
            }
        });
        $("#college2").change(function()
        {
            var val = $(this).val();

            if(val == "1")
            {
                $("#hiddendiv4").show();
            }else{
                $("#hiddendiv4").hide();
            }
        });

//major1
        $("#major1").change(function()
        {
            var val = $(this).val();

            if(val == "1")
            {
                $("#majordiv1").show();
            }else{
                $("#majordiv1").hide();
            }
        });

        //
        $( "#majorothertextbox").click(function(){
            $(this).val("");
        });

        //major2
        $("#major2").change(function()
        {
            var val = $(this).val();
            if(val == "1")
            {
                $("#majordiv2").show();
            }else{
                $("#majordiv2").hide();
            }
        });

        //
        $( "#majorothertextbox2").click(function(){
            $(this).val("");
        });

        //minor1

        $("#minor1").change(function()
        {
            var val = $(this).val();
            if(val == "1")
            {
                $("#minordiv1").show();
            }else{
                $("#minordiv1").hide();
            }
        });
        $("#minorothertextbox").change(function()
        {
            var v = $(this).val();
        });
    //
        $( "#minorothertextbox").click(function(){
            $(this).val("");
        });

        //minor2
        $("#minor2").change(function()
        {
            var val = $(this).val();
            if(val == "1")
            {
                $("#minordiv2").show();
            }else{
                $("#minordiv2").hide();
            }
        });

        $( "#minorothertextbox2").click(function(){
            $(this).val("");
        });





    }

    runIt();
});