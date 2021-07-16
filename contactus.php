<?php include_once("config_db.php"); 

$name = $email = $subject =  $desc =  '';
$errors = array('name' => '', 'email' => '', 'subject' => '', 'description' => '', 'done' => '');
$success = '';


if(isset($_POST['submit'])){
    
    // check name
    if(empty($_POST['name'])){
        $errors['name'] = 'Name is required';
    } else{
        $name = $_POST['name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
            $errors['name'] = 'Error input type';
        }
    }
    // check email
    if(empty($_POST['email'])){
        $errors['email'] = 'An email is required';
    } else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email must be a valid email address';
        }
    }

    // check subject
    if(empty($_POST['subject'])){
        $errors['subject'] = 'A subject is required';
    } else{
        $subject = $_POST['subject'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $subject)){
            $errors['subject'] = 'Subject must be letters and spaces only';
        }
    }

    // check description
    if(empty($_POST['description'])){
        $errors['description'] = 'description is required';
    } else{
        $description = $_POST['description'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $description)){
            $errors['description'] = 'description must be letters and spaces only';
        }
    }

    if(array_filter($errors)){
        // echo 'errors in form';
        
    } else {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
        $desc = mysqli_real_escape_string($conn, $_POST['description']);

        // create sql
        $sql = "INSERT INTO contact(name,email,subject,description) VALUES('$name','$email','$subject', '$desc')";

        // save to db and check
        if(mysqli_query($conn, $sql)){
            mysqli_close($conn);
            // success
            $_SESSION['success'] = " Message successfully sent";
            $name = $email = $subject =  $desc =  '';
        } else {
            echo 'query error: '. mysqli_error($conn);
        }
    }
} 
           
?>
<style>
.red-text{
    font-size: 10px;
    color: red;
    font-style: italic;
}

/* .title{
    background: black;
}
.backgg{
    background-image: url(http://localhost/tasty-indeed/includes/images/slide.jpg);
    width:100%;
    background-attachment: fixed;
    background-size: 100% 100%;
} */
</style>

<?php include("includes/components/header.php"); ?>

<section class="contactSection">
<div class="wrapper contactus">

<form action="contactus.php" method="post">

    <div class="backgg">
    <h1 class="title" style="margin:0;">Contact Us</h1>
</div>
    <!-- Name -->
    <div class="col col1">
        <input required oninvalid="this.setCustomValidity('Enter Your Name Here')" oninput="this.setCustomValidity('')" type="text" name="name" placeholder="Name"  class="form-control form-control-lg thick" value="<?php echo htmlspecialchars($name) ?>">
        <div class="red-text"><?php echo $errors['name']; ?></div>
    </div>

    <!-- Email -->
    <div class="col col2" >
    <input required oninvalid="this.setCustomValidity('Enter Your Email Here')" oninput="this.setCustomValidity('')" type="email" name="email" placeholder="E-mail" class="form-control form-control-lg thick" value="<?php echo htmlspecialchars($email) ?>">
    <div class="red-text"><?php echo $errors['email']; ?></div>
    </div>

    <!-- Suject -->
    <div class="col col3">
    <input required oninvalid="this.setCustomValidity('Enter Subject Related to query')" oninput="this.setCustomValidity('')" type="text" name="subject" placeholder="Subject" class="form-control form-control-lg thick" value="<?php echo htmlspecialchars($subject) ?>">
    <div class="red-text"><?php echo $errors['subject']; ?></div>
    </div>

    <!-- Description -->
    <div class="col col4">
    <textarea required oninvalid="this.setCustomValidity('Please enter your message')" oninput="this.setCustomValidity('')" name="description" placeholder="Description" class="styled-input wide" rows="10" cols="30" value="<?php echo htmlspecialchars($desc) ?>"></textarea>
    <div class="red-text"><?php echo $errors['description']; ?></div>
    </div>

    <input class="btn btn-primary" type="submit" name="submit" value="Send message" >

</form>
    <div class="successMsg"><?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])) { ?>
                        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success']; ?></div>
                        <?php
                        unset($_SESSION['success']);
                    }
                    ?></div>
</div>
</section>

<section>
    <div id="map"></div>
</section>
<!-- Footer  -->
<script src="./includes/js/map.js"></script>
<?php include("includes/components/footer.php"); ?>