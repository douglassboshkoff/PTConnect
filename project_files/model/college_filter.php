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
        display: inline-block;
    }
    div:first-child{
        /*width and height customized to a 1px border*/
        width: 30%;
        height: 99.72%;
    }

    div:nth-child(2){
        height: 100%;
        width: 1px;
        border: 1px solid black;
    }

    div:nth-of-type(3){
        /*width and height customized to a 1px border*/
        width: 30%;
        height: 99.72%;
        margin-left: 30%;
    }

    p{
        margin-left: 10%;
        margin-bottom: -1%;
        margin-top: 3%;
    }

    select{
        width: 80%;
        margin-left: 10%;
    }
</style>
<title>
    College Filter
</title>
<body style="display: inline">
<div class="fltrs" style="margin: 0">
    <h1 style="margin-left: 10%">Filters</h1>
    <div style="height: 0; border: 1px solid black; margin-left: 10%; margin-right: 10%; text-align: center; margin-top: -5%"></div>
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
<div>

</div>
<div>
    <!-- php for statement making rows of 4 profiles -->
    <div style="display: inline">
        <div>
            bing
        </div>
        <div>
            bing
        </div>
        <div>
            bing
        </div>
        <div>
            bing
        </div>
    </div>
    <!-- end statement -->
</div>
</body>

<!-- insert footer here -->

</html>