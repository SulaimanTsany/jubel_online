<body id="LoginForm">
    <div class="container">
        <br>
        <br>
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                   <h2>Register</h2>
                   <p>Please fill to register</p>
                </div>
               <form id="Login" action="<?php echo base_url('/Index.php/auth/validate_register') ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputEmail" placeholder="username" name="username">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputEmail" placeholder="full name" name="full_name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="inputPassword" placeholder="password" name="password">
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-success">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
