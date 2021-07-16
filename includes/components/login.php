
<div class="model" id="id01">
<div class="login container">
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="loginModelImg"></div>
    <div class="form-wrapper">
        <h2 class="title">Tasty Indeed</h2>
        <p class="tag-line"> Welcome back! Please login to your account.</p>
    <form action="./login.php" method="post" accept-charset="utf-8" _lpchecked="1">
        <div class="form">
            <div class="wrap-input100 validate-input">
                <span class="label-input100">Email</span>
                <input type="email" name="email" class="input100" id="email" value="" aria-describedby="" placeholder="Enter email" required="">
            </div>
            <br>
            <div class="wrap-input100 validate-input">
                <span class="label-input100">Password</span>
                <input type="password" name="password" value="" class="input100" id="password" aria-describedby="" placeholder="Enter password" required="">
            </div>

            <div class="form-group">
                <div class="remember-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember-me">
                    <label class="form-check-label" for="remember-me">Remember me</label>
                </div>

                <input type="submit" class="login-form-btn" id="loginBtn" data-id="dashboard" value="login">
            </div>
             <div class="login-footer">
                <a href="#">Forgot Password</a> | <a style="cursor:pointer;" onclick="return signupModel();">Register</a>
            </div>
        </div>
    </form>
    </div>
</div>
</div>