$(document).ready(function() {
    function runIt() {
        $( ".expander").click(function(){
            $(this).parent().find(".expand").slideToggle();
        });

    }

    runIt();
});

/** .show( "slow" )
.animate({
    left: "+=200"
}, 2000 )
    .slideToggle( 1000 )
    .slideToggle( "fast" )
    .animate({
        left: "-=200"
    }, 1500 )
    .hide( "slow" )
    .show( 1200 )
    .slideUp( "normal", runIt );
 **/