<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="styles.css">
        <script src="https://kit.fontawesome.com/dc4e42b706.js" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <div class="container">
            <div class="form-box">
                <h1 id="title">Sign Up</h1>
                <div class="underline">

                </div>
                <form>
                    <div class="input-group">

                        <div class="input-field" id="nameField">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="input-field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="text" placeholder="Password">
                        </div>
                        
                        <p><span class="text">Password Suggestion. </span><a href='#'>Click Here</a></p>
                    </div>
                    <div class="btn">
                        <button type="button" id="signupBtn">Sign Up</button>
                        <button type="button" id="signinBtn" class="disable" >Sign In</button>
                    </div>
                </form>
            </div>

        </div>
        <script src="script.js"></script>
    </body>
</html>