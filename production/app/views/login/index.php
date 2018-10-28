<?php require VIEW_PATH . '/partial/header.php';  ?>
<body>
<div class="login-page">
    <div class="login-main">
        <div class="login-head">
            <h1>Login</h1>
        </div>
        <div class="login-block">
            <form name="login" action="<?php echo SITE_URL . '?controller=login&action=login'?>" method="post">
                <input type="text" name="email" placeholder="Email" required="">
                <input type="password" name="password" class="lock" placeholder="Password">
                <div class="forgot-top-grids">
                    <div class="forgot-grid">
                        <ul>
                            <li>
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1"><span></span>Remember me</label>
                            </li>
                        </ul>
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <input type="submit" name="Sign In" value="Login">
                <h3>Not a member?<a href="signup.html"> Sign up now</a></h3>
                <h2>or login with</h2>
                <div class="login-icons">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </form>
            <h5><a href="index.html">Go Back to Home</a></h5>
        </div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
    <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
<!--COPY rights end here-->
<!-- mother grid end here-->
<?php require VIEW_PATH . '/partial/footer.php';  ?>
</body>
</html>




