
<?php include('session.php');

if(!isset($_SESSION['login_user']))
{
    header('Location: index.php');
    exit; 
}
$bookingName = $seating = $occasion = $additionalnotes = '';
$errors = array('bookingName' => '', 'seating' => '', 'occasion' => '', 'additionalnotes' => '');


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $success = '' ;
    $occasion = $_POST['occasion'];
    $additionalnotes = $_POST['additionalnotes'];
        // check name
        if(empty($_POST['bookingName'])){
            $errors['bookingName'] = 'Name is required';
        } else{
            $bookingName = $_POST['bookingName'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $bookingName)){
                $errors['bookingName'] = 'Error input type';
            }
        }
        // check email
        if(empty($_POST['seating'])){
            $errors['seating'] = 'Seating selection is required';
        } else{
            $seating = $_POST['seating'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $seating)){
                $errors['seating'] = 'Not available';
            }
        }

        if(array_filter($errors)){
            // echo 'errors in form';
            
        } else {
            $bookingName = mysqli_real_escape_string($conn, $_POST['bookingName']);
            $seating = mysqli_real_escape_string($conn, $_POST['seating']);
            $occasion = mysqli_real_escape_string($conn, $_POST['occasion']);
            $additionalnotes = mysqli_real_escape_string($conn, $_POST['additionalnotes']);
    
            // create sql
            $sql = "INSERT INTO tablebook(name,seatingcapacity,specialoccasion, additionalnotes) VALUES('$bookingName','$seating', '$occasion' ,'$additionalnotes')";
    //         // save to db and check
            if(mysqli_query($conn, $sql)){
                // success
                // echo "Message successfully sent";
                mysqli_close($conn);
                // $bookingName = $seating = $occasion = $additionalnotes = '';
                $_SESSION['success'] = "Table Booked Successfully";
                $bookingName = $seating = $occasion = $additionalnotes = '';
                // header('location:booktable.php');   
            } else {
                echo 'query error: '. mysqli_error($conn);
            }
        }
    } 
    ?>


<?php include('includes/components/header.php');?>
<section>
<div class="wrapper">
<div class="bookTableModel" id="bookTableModel">
<div class="booktable container">

<!-- <span onclick="document.getElementById('bookTableModel').style.display='none'" class="close" title="Close Modal">&times;</span> -->
    <!-- <div class="bookTableModelImg"></div> -->
    <div class="wrapper booktable">
        <?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])) { ?>
            <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success']; ?></div>
            <?php
            unset($_SESSION['success']);
        }
        ?>
        <h2 class="title">Tasty Indeed</h2>
        <p class="tag-line"> Book a table</p>

    <form action="booktable.php" method="post" accept-charset="utf-8">
        <h2>Book Table For:</h2>
            <div class="wrap-input100 validate-input">
                <!-- <span class="label-input100">Book Table For:</span> -->
                <input required type="text" name="bookingName" class="input100" id="bookingName" aria-describedby="" placeholder="Enter Name*"  value="<?php echo htmlspecialchars($bookingName) ?>">
            </div>
            <!-- document.querySelector('input[type="checkbox"]:checked').value; -->
            <div class="form-group">
                <div class="seating">
                    <h2>Seating Capacity:</h2>
                    <article class="feature">
                        <input type="checkbox" value="solo" id="feature1" name="seating" onclick="checkBox(this)" />
                        <div>
                            <!-- <img src="includes/images/bookTable/solo.svg" class="seatingCheckbox" alt="" srcset="" height="100%" width="100%" > -->
                            <span style="text-align: center; " >
                            Solo<br/>
                            - For 1 person
                        </span>
                        </div>
                    
                    </article>
                    
                    <article class="feature">
                        <input type="checkbox" value="couple" id="feature2" name="seating" onclick="checkBox(this)" />
                        <div>
                        <span style="text-align: center; " >
                        Couple<br/>
                            - For 2 person
                        </span>
                        </div>
                    </article>
                    
                    <article class="feature">
                        <input type="checkbox" value="family" id="feature3" name="seating" onclick="checkBox(this)" />
                        <div>
                        <span style="text-align: center;">
                        family<br/>
                            - upto 5 person
                        </span>
                        </div>
                    </article>
                    
                    <article class="feature">
                        <input type="checkbox" value="extra" id="feature4"  name="seating" onclick="checkBox(this)" />
                        <div>
                        <span style="text-align: center; " >
                            Party<br/>
                            - 5+ person
                        </span>
                        </div>
                    </article>
                </div>

                <div class="specialOccasion">
                    <h2>Any Special Occasion:</h2>
                    <article class="feature">
                        <input type="checkbox" value="aniversary" id="aniversary" name="occasion" onclick="bookingOccasion(this)" />
                        <div>
                            <!-- <img src="includes/images/bookTable/solo.svg" class="seatingCheckbox" alt="" srcset="" height="100%" width="100%" > -->
                            <span style="text-align: center; " >
                            Aniversary
                        </span>
                        </div>
                    
                    </article>
                    
                    <article class="feature">
                        <input type="checkbox" value="birthday" id="birthday" name="occasion" onclick="bookingOccasion(this)" />
                        <div>
                        <span style="text-align: center; " >
                        Birthday
                        </span>
                        </div>
                    </article>
                    
                    <article class="feature">
                        <input type="checkbox" value="date" id="date" name="occasion" onclick="bookingOccasion(this)" />
                        <div>
                        <span style="text-align: center;">
                            Date
                        </span>
                        </div>
                    </article>
                    
                    <article class="feature">
                        <input type="checkbox" value="meeting" id="meeting"  name="occasion" onclick="bookingOccasion(this)" />
                        <div>
                        <span style="text-align: center; " >
                           Meeting
                        </span>
                        </div>
                    </article>
                </div>
                <div class="additionalNotes">
                    <h2>Additional Note:</h2>
                    <textarea id="" cols="30" rows="10" class="styled-input wide" name="additionalnotes"  value="<?php echo htmlspecialchars($additionalnotes) ?>"></textarea>
                </div>
            </div>
                <input onclick="tableValid()" type="submit" class="login-form-btn" id="bookTablebtn"  value="Book Table" >
         
    </form>
    </div>
</div>
</div>
</div>
</section>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!-- Footer  -->
<?php include("includes/components/footer.php"); ?>