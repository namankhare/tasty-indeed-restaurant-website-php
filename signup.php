<?php
   include("config_db.php");
//    session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $name = mysqli_real_escape_string($conn,$_POST['name']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      // $sql = "SELECT id,is_admin FROM user WHERE email = '$email' and password = '$password'";
      $sql = "INSERT INTO user(name,email,password) Values ('$name', '$email', '$password')";
      $result = mysqli_query($conn,$sql);
      
      $success = "Your accout created successfully! please Login";
      header('Location: index.php');  
      // if($count == 1) {
      //    $_SESSION['is_login'] = true;
      //    $_SESSION['login_user'] = $email;
         
      //    header('Location: '.$_SERVER['HTTP_REFERER']);  
      // }else {
      //    header('Location: index.php');  
      //    $error = "Your Login Name or Password is invalid";
      // }
   }
?>
<?php include("includes/components/signup.php"); ?>
