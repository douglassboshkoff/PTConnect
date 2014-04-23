<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Danny
 * Date: 4/17/14
 * Time: 11:55 AM
 **/

?>
<html>

<!-- insert header here -->

<style>
    body{
        display: inline;
    }
    .fltrs{
        /* first half w/ drop-downs */
        /*width and height customized to a 1px border*/
        width: 25%;
        height: 80%;
        float: left;
    }

    .line{
        /* line under "filters"*/
        width: 80%;
        height: 0;
        border: 1px solid black;
        margin-left: 10%;
        margin-right: 10%;
        text-align: center;
        margin-top: -5%
    }

    h1{
        /* "filters" */
        margin-bottom: 5%;
    }

    p{
        margin-left: 10%;
        margin-bottom: -1%;
        margin-top: 7%;
        font-size: 24;
    }

    select{
        width: 80%;
        margin-left: 10%;
    }

    .heading{
        margin-left: 10%;
    }

    .divider{
        display: inline;
        float: left;
        width: .1%;
        height: 99.8%;
        background-color: black;
        border: 1px solid black;
    }

    .results_container {
        float: left;
        width: 73%;
        padding-top: 3%;
    }
        /*
            .results_bin{
                display: inline;
                float: left;
                width: 100%;

            }
        */
    .results{
        float: left;
        display: inline;
        width: 22%;
        margin-left: 2.5%;
        margin-bottom: 2.5%;
        height: 33%;
        /*border: 1px solid black;*/
    }

    .propic{
        border: 1px solid black;
        width: 80%;
        height: 100%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .top{
        height: 85%;
        width: 100%;
    }

    .bottom{
        height: 15%;
        width: 100%;
    }

    .info{
        text-align: right;
        border: 1px solid black;
        width: 80%;
        height: 100%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    /*
    .info{
        border: 1px solid black;
        margin-right: 10%;
        height: 100%;
        display: block;
        text-align: right;
    }
*/
    .name{
        font-weight: bold;
    }

    .class_number{

    }

</style>

<title>
    College Filter
</title>

<body> <!-- style="display: inline"> -->

<div class="fltrs"> <!-- style="margin: 0" -->

    <h1 class="heading">Filters</h1>

    <div class="line"></div>

    <p>PT Grad Year</p>
    <select>
        <!-- options -->
    </select>

    <p>College</p>
    <select>
        <!-- options -->
    </select>

    <p>Major</p>
    <select>
        <!-- options -->
    </select>

    <p>Experience Type</p>
    <select>
        <!-- options -->
    </select>

    <p>Experience Title</p>
    <select>
        <!-- options -->
    </select>
</div>
<div class="divider"></div>
<div class="results_container">
    <!-- php for statement making rows of 4 profiles -->
    <!-- <div class="results_bin"> -->

    <div class="results">
        <div class="top">
            <img class="propic" src="../resources/BlankFace.jpg">
        </div>
        <div class="bottom">
            <div class="info">
                <div class="name">
                    Danny Gimeno
                </div>
                <div class="class_number">
                    2015
                </div>

            </div>
        </div>
    </div>

    <div class="results">
    </div>

    <div class="results">
    </div>

    <div class="results">
    </div>
    <!--</div> -->
    <!-- end statement-->
</div>
</body>

<!-- insert footer here -->

</html>