<?php $success = ''; ?>
<div class="signupModel" id="id02">
<div class="login container">
<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="loginModelImg"></div>
    <div class="form-wrapper signup">
        <h2 class="title">Tasty Indeed</h2>
        <p class="tag-line"> Create an account</p>
    <form action="./signup.php" method="post" accept-charset="utf-8" _lpchecked="1">
        <div class="form">
            <div class="wrap-input100 validate-input">
                <span class="label-input100">Name</span>
                <input type="text" name="name" class="input100" id="name" value="" aria-describedby="" placeholder="Enter name" required="">
            </div>
            <br>
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

                <input type="submit" class="login-form-btn" id="loginBtn" data-id="dashboard" value="Sign Up">
            </div>
            <?php echo $success?>
             <div class="login-footer">
                <a href="#">Forgot Password</a> | <a style="cursor:pointer;" onclick="return loginModel();">Login</a>
            </div>
        </div>
    </form>
    </div>
</div>
</div>