$(document).ready(function() {
    function runIt() {
        $(window).load(function()
        {
            $("#hiddendiv").hide();
        });

        $(".dropdown").change(function()
        {
            var val = $(this).val();
            var val1 =  $( ".dropdown option:selected").val();
            alert(val1);

            if(val.value ==  "Other".value)
            {
                alert(1);
                $("#hiddendiv").show();
            }else{
                alert(2);
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