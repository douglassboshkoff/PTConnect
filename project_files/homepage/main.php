<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            min-width: 600px;
            margin: 0;
        }
        #top ul {
            width: 100%;
            margin: 0;
            padding: 0;
            position: relative;
            display: block;
            background: #000000;
            font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
            display: table;
            clear: both;
        }
        #top li {
            display: block;
            float: left;
            font-size: 32px;
            padding: 15px 0px 10px 15px;
        }
        #top img {
            display: block;
            float: right;
            width: 30px;
            height: 42px;
            padding: 10px 15px 5px 0px;
        }
        #top img:hover {
            opacity: .4;
        }
        #white {
            color: white;
        }
        #red {
            color: red;
        }
        #tabs ul {
            width: 100%;
            margin: 0;
            padding: 0;
            position: relative;
            display: block;
            background: #000000;
            font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
            display: table;
            clear: both;
        }
        #tabs li {
            display: block;
            float: left;
            margin: 0;
            width: calc(25% - 2px);
            border: 1px solid white;
        }
        #tabs li a {
            display: block;
            float: center;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            padding: 5px 0px 5px 0px;
        }
        #tabs li a:hover {
            color: red;
        }
        #tabs li.active a {
            color: red;
        }
        #userSearchIcon, #collegeSearchIcon {
            margin-top: 40px;
            width: 30%;
            border: 1px solid black;
            background: white;
            padding: 0px 0px 20px 0px;
            height: 180px;
        }
        #userSearchIcon {
            float: left;
            margin-left: 13%;
        }
        #collegeSearchIcon {
            float: right;
            margin-right: 13%;
        }
        #userSearchIcon img {
            width: 130px;
            display: block;
            margin: 10px auto 0 auto;
        }
        #collegeSearchIcon img {
            width: 230px;
            display: block;
            margin: 20px auto 20px auto;
        }
        #userSearchDescription, #collegeSearchDescription {
            width: 30%;
            border: 1px solid black;
            background: black;
            padding: 0px 0px 0px 0px;
            height: 200px;
            font-size: 16px;
            font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
            color: white;
        }
        #userSearchDescription {
            float: left;
            margin-left: 13%;
        }
        #collegeSearchDescription {
            float: right;
            margin-right: 13%;
        }
        #userSearchDescription h1, #collegeSearchDescription h1 {
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, sans-serif;
            font-weight: normal;
            padding: 0px 10px 0px 10px;
        }
        #userSearchDescription a, #collegeSearchDescription a {
            text-decoration: none;
            color: white;
        }
        #userSearchDescription a:hover, #collegeSearchDescription a:hover {
            text-decoration: none;
            color: red;
        }
        #userSearchDescription p, #collegeSearchDescription p {
            padding: 0px 15px 0px 15px;
        }
        #footer {
            display: table;
            position:absolute;
            bottom:0;
            width: 100%;
            margin: 70px 0px 0px 0px;
            padding: 0;
            background: #000000;
            font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
        }
        #footer h1 {
            font-size: 14px;
            color: white;
            font-weight: normal;
            float: right;
            padding-right: 10px;
        }
    </style>
</head>
<a href="http://google.com"><div id="userSearchIcon">
        <img src="profile.png" />
    </div></a>
<a href="http://google.com"><div id="collegeSearchIcon">
        <img src="collegeSearch.png" />
    </div></a>
<a href="http://google.com"><div id="userSearchDescription">
        <a href="http://google.com"><h1>Users</h1></a>
        <p>Find users by name, grad year, college, major, and employer.</p>
    </div></a>
<a href="http://google.com"><div id="collegeSearchDescription">
        <a href="http://google.com"><h1>Colleges</h1></a>
        <p>Find colleges by name, location, and number of PT alumni graduates.</p>
    </div></a>
<div id="footer">
    <h1>&#169;2014</h1>
</div>
</body>
</html>