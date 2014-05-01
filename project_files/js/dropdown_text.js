$(document).ready(function() {
    function runIt() {
        $(window).load(function()
        {
            $("#hiddendiv").hide();
            $("#majordiv1").hide();
            $("#majordiv2").hide();
            $("#minordiv1").hide();
            $("#minordiv2").hide();
        });

        $("#college").change(function()
        {
            var val = $(this).val();

            if(val == "1")
            {
                $("#hiddendiv").show();
            }else{
                $("#hiddendiv").hide();
            }
        });
        $("#othertextbox").change(function()
        {
            $("#college").val($("#othertextbox").text());
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
        $("#majorothertextbox").change(function()
        {
            $("#major1").val($("#majorothertextbox").text());
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
        $("#majorothertextbox2").change(function()
        {
            $("#major2").val($("#majorothertextbox2").text());
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
            $("#minor1").val($("#minorothertextbox").text());
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
        $("#minorothertextbox2").change(function()
        {
            $("#minor2").val($("#minorothertextbox2").text());

        });

    }

    runIt();
});