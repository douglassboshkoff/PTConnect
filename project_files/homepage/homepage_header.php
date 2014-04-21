<html>
    <header>
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
            #guestSide h1, #ptcsSide h1 {
                font-size: 16px;
                font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, sans-serif;
                font-weight: normal;
                text-align: center;
                color: white;
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
            #footer h1 {
                font-size: 14px;
                color: white;
                font-weight: normal;
                float: right;
                padding-right: 10px;
            }
        </style>
        <div id='top'>
            <ul>
                <li><span id="white">PT</span><span id="red">Connect</span></li>
                <form id="login" action = "." method = "post">
                    <input type="text" placeholder="Email" name = "email"/>
                    <input type="password" placeholder="Password" name = "password"/>
                    <input id="loginButton" type="submit" value="Login"/>
                </form>
            </ul>
        </div>
    </header>
</html>