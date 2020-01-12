<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Login</title>
    </head>
    <body>
        <div id="register-container" class="container">
            <h1>Register</h1>
            <div class="row">
                <div class="col s8">
                    <form>
                        <div class="input-field">
                            <input type="text" name="" id="reg-name">
                            <label for="reg-name" class="active">Name</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="" id="reg-username">
                            <label for="reg-username" class="active">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="" id="reg-user-email" class="validate">
                            <label for="reg-user-email" class="active">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="" id="reg-user-pass">
                            <label for="reg-user-pass" class="active">Password</label>
                        </div>
                    </form>

                    <div class="container">
                        <button id="login-btn" class="btn waves-effect waves-light">Register</button>
                        <button id="cancel-login-btn" class="btn waves-effect waves-light red lighten-1">Cancel</button>
                    </div>  
                </div>
            </div>

            <h1>Login</h1>
            <div id="login-container" class="row">
                <div class="col s8">
                    <form>
                        <div class="input-field">
                            <input type="text" name="" id="username">
                            <label for="username" class="active">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="" id="user-pass">
                            <label for="user-pass" class="active">Password</label>
                        </div>
                    </form>

                    <div id="login-container" class="container"> 
                        <button id="login-btn" class="btn waves-effect waves-light">Login</button>
                        <button id="cancel-login-btn" class="btn waves-effect waves-light red lighten-1">Cancel</button>
                    </div> 

                    <div id="login-other-container" class="container"> 
                        <button id="fb-login-btn" class="btn waves-effect waves-light blue">Facebook Login</button>
                        <button id="gmail-login-btn" class="btn waves-effect waves-light red darken-2">Gmail Login</button>
                    </div> 
                </div>
            </div>
        </div>
                

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>