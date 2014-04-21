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
        width: 30%;
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
        /*
            div:nth-of-type(3){
                /*width and height customized to a 1px border
                width: 30%;
                height: 99.72%;
                margin-left: 30%;
                /*border: 1px solid black;
            }
        */
    p{
        margin-left: 10%;
        margin-bottom: -1%;
        margin-top: 3%;
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
        width: .5%;
        height: 99%;
        background-color: black;
        border: 1px solid black;
    }

    .results_container {
        float: left;
        width: 68%;
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
        width: 100%;
        height: 33%;
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
<div class="results_container" style="float: left">
    <!-- php for statement making rows of 4 profiles -->
   <!-- <div class="results_bin"> -->

        <div class="results">
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