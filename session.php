<?php
   include('config_db.php');
  
   session_start();
   
if(isset($_SESSION['login_user'])){
    $user_check = $_SESSION['login_user'];

    $ses_sql = mysqli_query($conn,"select email, name,is_admin from user where email = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    $login_session = $row['email'];
    $login_session_name = $row['name'];
    $check_admin = $row['is_admin'];
    if ($check_admin == 1) {
        $is_admin = true;
    }
    else{
        $is_admin = false;
    }
}


//    if(!isset($_SESSION['login_user'])){
//       echo "Please Login to view this page".
//       exit();
//    }
?>