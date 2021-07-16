<?php include_once("session.php"); 
?>
<!-- Login -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Indeed!</title>
    <link rel="stylesheet" href="includes/css/style.css">
    <link rel="icon" href="includes/images/logo.png" type="image/png" sizes="16x16">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

    <style>


    </style>
</head>
<body>

    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <!-- <img src="includes/images/logo.png" alt="logo"> -->
                <a href="./" class="nav-link select"><span class="logoText">Tasty Ind<span class="logoText blue">ee</span>d </span></a>
            </div>
            <div class="menu">
                <ul role="menu" aria-label="navbar" aria-expanded="true"  class="navUl" >
                    <li nav-item><a href="./" class="nav-link select">Home</a></li>
                    <li nav-item><a href="./aboutus.php" class="nav-link">About Us</a></li>
                    <li nav-item><a href="contactus.php" class="nav-link">Contact Us</a></li>
                    
                    <?php if(isset($_SESSION['login_user'])): ?>
                    <div class="dropdown">
                        <button class="dropbtn"><?php echo "Hi, " .$login_session_name;?> 
                        </button>
                        <div class="dropdown-content">
                        <?php if($is_admin): ?>
                            <a href="./feedback.php">View Feedback</a>
                            <a href="./viewbooking.php">View Booking</a>
                        <?php endif; ?>
                            <a href="./profile.php">Profile</a>
                            <a href="./logout.php">Logout</a>
                        </div>
                    </div> 
                    <?php else: ?>
                        <li nav-item><a style="cursor:pointer;" onclick="return loginModel();" class="nav-link">Login / Signup</a></li>
                    <?php endif; ?>
                    <?php if(isset($_SESSION['login_user'])): ?>   
                    <li nav-item><a href="./booktable.php" class="nav-link"><span id="callToAction">Book a dining</span></a></li>
                    <?php else: ?>
                        <li nav-item><a class="nav-link"><span id="callToAction" onclick="return loginModel();">Book a dining</span></a></li>
                    <?php endif; ?>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
        
    </header><?php include("includes/components/login.php"); ?>
<?php include("includes/components/signup.php"); ?>