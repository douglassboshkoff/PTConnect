<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            min-width: 500px;
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
        #white {
            color: white;
        }
        #red {
            color: red;
        }
        #login {
            float: right;
            padding: 20px 20px 20px 0px;
        }
        #login input[type="text"], #login input[type="password"] {
            font-size: 16px;
            font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
            width: 150px;

        }
        #loginButton {
            -webkit-appearance: none;
            border-radius: 0;
            background: transparent;
            background: red;
            color: white;
            border: 0;
            width: 50px;
            font-size: 16px;
            font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;

        }
        #guestSide, #ptcsSide {
            width: 35%;
            border: 1px solid black;
            background: black;
            padding: 20px 0px 20px 0px;
        }
        #guestSide {
            float: left;
            margin: 70px 0px 0px 10%;
        }
        #ptcsSide {
            float: right;
            margin: 70px 10% 0px 0px;
        }
        #guestSide h1, #ptcsSide h1 {
            font-size: 16px;
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, sans-serif;
            font-weight: normal;
            text-align: center;
            color: white;
        }
        #guestLogin, #ptcsCreate {
            width: 35%;
            border: 1px solid black;
            background: white;
            padding: 0px 0px 20px 0px;
            height: 220px;
            margin-bottom: 70px;
        }
        #guestLogin {
            float: left;
            margin-left: 10%;
        }
        #ptcsCreate {
            float: right;
            margin-right: 10%;
        }
        #guestLogin p {
            padding: 5px 10px 5px 10px;
            font-size: 16px;
            font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
        }
        #ptcsCreate form {
            padding: 15px 15px 5px 15px;
        }
        #ptcsCreate form input {
            font-size: 16px;
            font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
        }
        #fname {
            width: 44%;
            float: left;
        }
        #lname {
            width: 44%;
            float: right;
        }
        #email, #password, #verification, #gradyear {
            width: 98%;
            margin-top: 10px;
        }
        #gradyear {
            font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
            background: transparent;
            width: 100%;
            padding: 4px;
            font-size: 16px;
            line-height: 1;
            border: 0;
            border-radius: 0;
            -webkit-appearance: none;
            background: url("http://cdn.bavotasan.com/wp-content/uploads/2011/05/down_arrow_select.jpg") no-repeat right white;
            border: 1px solid #ccc;
            box-shadow: inset 1px 1px 0px 0px #dddddd;
        }
        #gradyear option {
            font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
        }
        #createButton {
            margin-top: 10px;
            float: right;
            -webkit-appearance: none;
            border-radius: 0;
            background: transparent;
            background: red;
            color: white;
            border: 0;
        }
        #guestContinue {
            font-family: "HelveticaNeue-Thin", "Helvetica Neue Thin", "Helvetica Neue", Helvetica, sans-serif;
            font-size: 16px;
            margin: 10px auto 0px auto;
            float: center;
            display: block;
            -webkit-appearance: none;
            border-radius: 0;
            background: transparent;
            background: red;
            color: white;
            border: 0;
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
<body>

<div id="guestSide">
    <h1>Just Visiting?</h1>
</div>
<div id="ptcsSide">
    <h1>Past or Current PTCS Student?</h1>
</div>
<div id="guestLogin">
    <p>Learn more about PTCS alumni, the colleges they have attended, and their current and past employers.  </p>
    <form>
        <input type="hidden" name="action" value="continue_as_guest"/>
        <input id="guestContinue" type="submit" value="Continue as Guest" />
    </form>
</div>
<div id="ptcsCreate">

    <form action="." method="post">
        <input type="hidden" name="action" value="register"/>
        <input id="fname" type="text" placeholder="First Name" name = "fname"/>
        <input id="lname" type="text" placeholder="Last Name" name = "lname"/>
        <input id="email" type="text" placeholder="Email" name = "email"/>
        <input id="password" type="password" placeholder="Password" name = "password"/>
        <input id="password" type="password" placeholder="Verify Password" name = "verifypassword"/>
        <select id="gradyear" name = "gradyear">

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

        <input id="createButton" type="submit" value="Create" />

        </form>
</div>

<div id="footer">
    <h1>&#169;2014</h1>
</div>

</body>

</html>