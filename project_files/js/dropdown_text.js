$(document).ready(function() {
    function runIt() {
        $(window).load(function()
        {
            $("#hiddendiv").hide();
            $("#majordiv1").hide();
            $("#majordiv2").hide();
            $("#minordiv1").hide();
            $("#minordiv2").hide();
            $('#majorothertextbox').val("Enter New Major Here");
            $('#majorothertextbox2').val("Enter New Major Here");
            $('#minorothertextbox').val("Enter New Minor Here");
            $('#minorothertextbox2').val("Enter New Minor Here");

        });

        $("#college2").change(function()
        {
            var val = $(this).val();

            if(val == "1")
            {
                $("#hiddendiv").show();
            }else{
                $("#hiddendiv").hide();
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