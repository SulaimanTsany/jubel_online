<body id="LoginForm">
    <div class="container">
    <h1 class="form-heading">Login Form</h1>
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                   <h2>Login</h2>
                   <p>Please fill to login</p>
                </div>
               <form id="Login" action="<?php echo base_url('/Index.php/auth/validate_login') ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputEmail" placeholder="username" name="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="inputPassword" placeholder="password" name="password">
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
