<?php
   include("config_db.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id,is_admin FROM user WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['is_login'] = true;
         $_SESSION['login_user'] = $email;
         
         header('Location: '.$_SERVER['HTTP_REFERER']);  
      }else {
         header('Location: index.php');  
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<?php include("includes/components/login.php"); ?>

