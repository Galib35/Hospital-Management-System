<?php

    include("include/connection.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title>complete responsive website design</title>

        <!-- font awesome cdn link -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

        <!-- custom css file link -->

        <link rel="stylesheet" href="style.css">

        <style>
    .form-group label {
        display: block;
        font-size: 13px;
        text-align: left;
        margin-bottom: 2px;
    }
</style>

    </head>

    <body>

        <!-- header section starts -->

        <header class="header">

            <a href="#" class="logo"> <i class="fas fa-heartbeat "> </i> medicare.   </a>

            <nav class="navbar">

                <a href="index.php">home</a>
                <a href="index.php#services">services</a>
                <a href="index.php#about">about </a>
                <a href="doctors.php">doctors </a>
                <a href="book.php">book</a>
                <a href="index.php#review">review </a>
                <a href="blogs.php">blog </a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

        </header>


        <div style="margin-bottom: 10px;"></div>

        <!-- header section ends -->









        

         <!-- Booking section starts -->


         <div style="margin-top: 20px;"></div>



         <section id="book" class="book">

            <h1 class="heading"><span>book</span> now</h1>

            <div class="row">

                <div class="image">
                    <img src="img/online_booking.svg" alt="">
                </div>




                <form action="" method="POST">
    <h3>Book Appointment</h3>
    <div class="form-group">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" placeholder="Your Name" class="box">
    </div>
    <div class="form-group">
        <label for="number">Your Number:</label>
        <input type="number" id="number" name="number" placeholder="Your Number" class="box">
    </div>
    <div class="form-group">
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" placeholder="Your Email" class="box">
    </div>
    <div class="form-group">
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" class="box">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>

    <div class="form-group">
        <label for="doctor">Dr:</label>
        <select name="doctor" id="doctor" class="box">

         <!-- show doctor's name from database -->

            <?php
                    
                    $query="SELECT *  FROM doctor";

                    $res=mysqli_query($conn, $query);

                    while($row=mysqli_fetch_array($res)){

                        $doctor_name=$row['username'];

                        echo '
                            <option value="'.$doctor_name.'">'.$doctor_name.'</option> 
                        ';

                    }

                ?>

        </select>

        <div class="form-group">
        <label for="specialist">Specialist:</label>
        <input type="text" id="specialist" name="specialist" placeholder="specialist" class="box">
    </div>

    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" class="box">
    </div>
    <input type="submit" name="submit" value="Book Now" class="btn">
</form>



         <!-- insert submit data to database  -->


         <?php

                if(isset($_POST['submit'])){

                    $username=$_POST['name'];
                    $number=$_POST['number'];
                    $email=$_POST['email'];
                    $date=$_POST['date'];
                    $gender=$_POST['gender'];
                    $doctor_name=$_POST['doctor'];
                    $specialist=$_POST['specialist'];


                    
                    
                    if(!empty($username) && !empty($number) && !empty($email) && !empty($date) && !empty($gender) && !empty($doctor_name)&& !empty($specialist)){

                        // insert into appointment table

                        

                        $query="INSERT INTO appointment (patient_name,number,email,date,gender,doctor_to,specialist) VALUES('$username','$number','$email','$date','$gender','$doctor_name','$specialist')";

                        $result=mysqli_query($conn, $query);


                         // insert into patient_record table

                         $query="INSERT INTO patient_record (patient_name,number,email,date,gender,doctor_to,specialist) VALUES('$username','$number','$email','$date','$gender','$doctor_name','$specialist')";

                         $result=mysqli_query($conn, $query);




                    }

                }
         ?>




            </div>

         </section>



         <!-- Booking section end -->






         <!-- footer section start -->


         <section class="footer" id="footer">
            <div class="box-container">

                <div class="box">
                    <h3>quick links</h3>

                    <a href="#"><i class="fas fa-chevron-right"></i>home</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>services</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>about</a>

                    <a href="#"><i class="fas fa-chevron-right"></i>doctors</a>

                    <a href="#"><i class="fas fa-chevron-right"></i>booking</a>

                    <a href="#"><i class="fas fa-chevron-right"></i>reviews</a>

                    <a href="#"><i class="fas fa-chevron-right"></i>blogs</a>



                </div>


                <div class="box">
                    <h3>out services</h3>

                    <a href="#"><i class="fas fa-chevron-right"></i>dental care</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>message therapy</a>

                    <a href="#"><i class="fas fa-chevron-right"></i>cardiology</a>

                    <a href="#"><i class="fas fa-chevron-right"></i>diagnosis </a>

                    

                </div>



                <div class="box">
                    <h3>contact info</h3>

                    <a href="#"><i class="fas fa-phone"></i> +123-456-7899</a>
                    <a href="#"><i class="fas fa-phone"></i> +456-456-7899</a>
                    <a href="#"><i class="fas fa-envelope"></i> adorasah001@gmail.com</a>
                   
                    <a href="#"><i class="fas fa-envelope"></i> galib@kuet.ac.bd</a>
                    <a href="#"><i class="fas fa-map-marker-alt"></i> mumbai, india - 400104</a>
                    

                </div>


                
                <div class="box">
                    <h3>follow us</h3>

                    <a href="#"><i class="fab fa-facebook-f"></i>Asadullah  </a>
                    <a href="#"><i class="fab fa-twitter"></i> ador355</a>
                    <a href="#"><i class="fab fa-instagram"></i> galib343</a>
                    <a href="#"><i class="fab fa-linkedin"></i>Adfd </a>
                 

                </div>




            </div>




            <div class="credit">created by <span>asadullah al galib</span> | all rights reserved</div>
         </section>




            <!-- footer section end -->