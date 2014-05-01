$(document).ready(function() {
    function runIt() {
        $(window).load(function()
        {
            $("#hiddendiv").hide();
        });

        $(".dropdown").change(function()
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
            $(".dropdown").val($("#othertextbox").text());
        });
    }

    runIt();
});