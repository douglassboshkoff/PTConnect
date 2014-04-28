<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Adam
 * Date: 4/21/14
 * Time: 2:51 PM
 * To change this template use File | Settings | File Templates.
 */
$cur_pic = "../test_material/bullets_picture/Bullet_Arrow_R.png";
$arr_exp = array();

    $arr_exp[0] = "test";
    $arr_exp[1] = "test1";
    $arr_exp[2] = "test2";
    $arr_exp[3] = "test3";
    $arr_exp[4] = "test4";
?>
<html>
    <head>
        <title> Profile Page</title>
        <style>
            #main{
                border: solid black 1px;
                width: 35em;
                margin: auto;
                padding-left: 1em;
                padding-right: 1em;
                padding-top: 1em;
                padding-bottom: 1em;
            }
            .sub{
                border: solid black 1px;
                height: 10em;
                width: 35em;
                margin: auto;
                margin-bottom: 1em;
                padding-left: .5em;
            }
            #div1{
                border: none;
                padding-left: 0em;
            }
            #imgdiv{
                background-image: url("../resources/BlankFace.jpg");
                background-size: 10em;
                background-repeat: no-repeat;
                height: 10em;
                width: 10em;
                border: black solid 1px;
                display: inline-block;
            }
            #user_info{
                float: right;
                width: 15em;
                height: 10em;
                text-align: right;
                padding-top: 6em;

            }
            .expdiv{
                display: inline-block;
                margin-left: 1em;
            }
            button{
                border: none;
            }
            .expander{
                //background-image: url("../test_material/bullets_picture/Bullet_Arrow_R.png");
            }
        </style>
        <script type="text/javascript" src="../js/jQuery.js"></script>
        <script type="text/javascript" src="../js/bulletslide.js"></script>
    </head>
    <body>
    <div id = "main">
        <div id = "div1" class = "sub">
            <div id = "imgdiv">  </div>

            <div id = "user_info"> Alex Gottwald <br/> PT 2005 <br/> agottwald@parktudor.org </div>
        </div>
        <div class = "sub">
            Bio:
        </div>
        <div class = "sub">
            Colleges:
        </div>
        <div class = "sub">
            Experiences: <br/>
            <?php for($i = 0; $i < count($arr_exp); $i++):?>
                <div>
            <div class = "expdiv"> Generic Experience <?php echo $arr_exp[$i]; ?>  </div> <span class = "expander"> <img class = "exp_img" src =  "../test_material/bullets_picture/Bullet_Arrow_R.png";
 </span> <br/>
            <div class="expand" style="display: none;">HELLO WOLRD MEOOWIFHOWEIHWE:LKJFWHLIFUHWEFLJHWEFLKJWEHFLKWJEH</div>
                    </div>
            <?php endfor; ?>
        </div>
    </div>
    </body>
</html>