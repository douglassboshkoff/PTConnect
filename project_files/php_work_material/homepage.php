
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
<div id="wrapper1">
    <div id='wrapper2'>
    <div id='top'>
        <ul>
            <li><span id="white">PT</span><span id="red">Connect</span></li>
            <form id="login" method="post" action="index.php">
                <input type="hidden" name="action" value="login"/>
                <input type="text" name="email" value="<?php if($error) echo "error"  ?>"  />
                <input type="password" name="password"/>
                <input id="loginButton" type="submit" value="Login"/>
            </form>
        </ul>
    </div>
    <div id="guestSide">
        <h1>Just Visiting?</h1>
    </div>
    <div id="ptcsSide">
        <h1>Past or Current PTCS Student?</h1>
    </div>
    <div id="guestLogin">
        <p>Learn more about PTCS alumni, the colleges they have attended, and their current and past employers.  </p>
        <form>
            <input type="hidden" value="continue_as_guest" name="action"/>
            <input class="button" type="submit" value="Continue as Guest" />
        </form>
    </div>
    <div id="ptcsCreate">
        <form method="post" action="index.php">
            <input name="action" type="hidden" value="register"/>

            <input id="fname" type="text" placeholder="First Name"/>
            <input id="lname" type="text" placeholder="Last Name"/>
            <input id="email" type="text" placeholder="Email"/>
            <input id="password" type="password" placeholder="Password"/>
            <input id="password" type="password" placeholder="Verify Password"/>
            <select id="gradyear">
                <option>PT Grad Year</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                <option>2014</option>
                <option>2013</option>
                <option>2012</option>
                <option>2011</option>
                <option>2010</option>
                <option>2010</option>
                <option>2010</option>
                <option>2009</option>
                <option>2008</option>
                <option>2007</option>
                <option>2006</option>
                <option>2005</option>
                <option>2004</option>
            </select>
            <input class="button" id="create" type="submit" value="Create" />
            <form>
    </div>
</div>
</div>
</body>
</html>
