$(document).ready(function() {
    function runIt() {
        $( ".expander").click(function(){
            $(this).parent().find(".expand").slideToggle();
            var img= $(this).find(".exp_img").attr('src');
            var imgD= "../test_material/bullets_picture/Bullet_Arrow_D.png";
            var imgR= "../test_material/bullets_picture/Bullet_Arrow_R.png";

            $(this).find('.exp_img').fadeOut('fast',function(){
                if(img == imgR){
                    console.log($(this).attr('src'));
                    $(this).attr('src', imgD).fadeIn('fast');

                }else{
                    $(this).attr('src', imgR).fadeIn('fast');

                }
            });

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