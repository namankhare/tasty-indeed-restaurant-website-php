<?php include("session.php")?>


<?php 
if(!isset($_SESSION['login_user']))
{
    header('Location: index.php');
    exit; 
}

$errors = array('name' => '', 'email' => '');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $success = '' ;
    $dbmail = $_SESSION['login_user'];
// $seating = $_GET['seating'];
// $bookingName = $_GET['bookingName'];
// echo $seating. "<br />" . $bookingName;
        // check name
        $profilepassword = $_POST['profilepassword'];
        if(empty($_POST['profilename'])){
            // $errors['profilename'] = 'Name is required';
        } else{
            $profilename = $_POST['profilename'];
        }
        // check email
        if(empty($_POST['profileemail'])){
            $profileemail = $_SESSION['login_user'];
        } else{
            $profileemail = $_POST['profileemail'];
        
        }
        if(empty($_POST['profilepassword'])){
            $sql = "UPDATE `user` SET `name`='$profilename',`email`='$profileemail' WHERE email='$dbmail'";
        }else{
            $sql = "UPDATE `user` SET `name`='$profilename',`email`='$profileemail', `password`='$profilepassword' WHERE email='$dbmail'";
        }

        if(array_filter($errors)){
            echo 'errors in form';
            
        } else {
            $profilename = mysqli_real_escape_string($conn, $_POST['profilename']);
            $profileemail = mysqli_real_escape_string($conn, $_POST['profileemail']);

    
            // create sql
           
    //         // save to db and check
            if(mysqli_query($conn, $sql)){
                // success
                // echo "Message successfully sent";
                mysqli_close($conn);
                // $bookingName = $seating = $occasion = $additionalnotes = '';
                $_SESSION['success'] = "Details changed sucessfully";
                $_SESSION['login_user'] = $login_session= $profileemail;
                $login_session_name = $profilename;
                // header('location:profile.php');   
            } else {
                echo 'query error: '. mysqli_error($conn);
            }
        }
    } 
//  $sql = "select id,name,email,subject,description, created_at from contact ORDER BY created_at DESC";
//  $result = mysqli_query($conn, $sql);
//  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
//  $count = 1; 
//  mysqli_free_result($result);
//  mysqli_close($conn);
?>

<?php include("includes/components/header.php"); ?>
<style>
        body {
            background-image: url('includes/images/profileBG.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        
        .login-box {
            margin-top: 90px;
            height: auto;
            background: #000000d0;
            text-align: center;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }
        
        .login-title {
            text-align: center;
            font-size: 4rem;
            letter-spacing: 2px;
            margin-top: 30px;
            font-weight: bold;
            color: #ffffff;
            opacity: 1;
        }
        h3{
            font-size: 2rem;
            margin-bottom: 20px;
            color:white;
        }
        
        .login-form {
            margin-top: 25px;
            text-align: center;
            width: 70%;
            margin: auto;
        }
        
       
        
        .form-group {
            margin-bottom: 40px;
            outline: 0px;
        }
   
    
        
        label {
            margin-bottom: 0px;
        }
        
        .form-control-label {
            font-size: 20px;
            opacity: 1;
            color: #fffbfb;
            font-weight: bold;
            letter-spacing: 1px;
        }
        
        .login-btm {
            float: center;
        }
        
        .login-button {
            padding-right: 0px;
            text-align: center;
            margin-bottom: 25px;
        }
        
        .login-text {
            text-align: center;
            padding-left: 0px;
            color: #A2A4A4;
        }
        
        .loginbttm {
            padding: 0px;
        }
        .container{
            width: 80%;
            margin: auto;
        }
        input, textarea {
    padding: 1em;
    border: 0;
    width: 100%;
    font-size: 1.6rem;
    background-color: #f8f8f8;
    color: rgb(0, 0, 0);
    border-radius: 4px;
    }
</style>
<div class="wrapper profile">
<div class="col-lg-12 login-title">
<b> MY PROFILE</b>
            </div>
<div class="container">
    <div class="row">
        <div class="login-box">
          
            <h3>View / Edit Profile</h3>
            <?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])) { ?>
                        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success']; ?></div>
                        <?php
                        unset($_SESSION['success']);
                    }
                    ?>
            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form action="profile.php" method="POST">
                        <div class="form-group">
                            <label class="form-control-label">Name:</label>
                            <input name="profilename" type="text" class="form-control" value="<?php echo htmlspecialchars($login_session_name) ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Email:</label>
                            <input name="profileemail" type="text" class="form-control" value="<?php echo htmlspecialchars($login_session) ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Change Password:</label>
                            <input placeholder="enter new password to change or leave it blank" type="password" name="profilepassword" class="form-control" >
                        </div>


                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">

                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>

    </div>



    <!-- Footer  -->
<?php include("includes/components/footer.php"); ?>