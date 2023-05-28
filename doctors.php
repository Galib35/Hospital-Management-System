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



    </head>

    <body>

        <!-- header section starts -->

        <header class="header">

            <a href="#" class="logo"> <i class="fas fa-heartbeat "> </i> medicare.   </a>

            <nav class="navbar">

                <a href="index.php">home</a>
                <a href="index.php#services">services</a>
                <a href="index.php#about">about </a>
                <a href="admin/doctor_login.php">Doctor Login </a>
                <a href="book.php">book</a>
                <a href="index.php#review">review </a>
                <a href="blogs.php">blog </a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

        </header>

        <!-- header section ends -->



        

        <!-- doctors section starts -->

        <section class="doctors" id="doctors">

            <h1 class="heading"> our <span>doctors</span></h1>

            <div class="box-container">

                <div class="box">
                    <img src="img/doctor1.jpg" alt="">
                    <h3>john deo</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>
            

                <div class="box">
                    <img src="img/doctor8.jpg" alt="">
                    <h3>Mr x</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>
            

                <div class="box">
                    <img src="img/doctor3.jpg" alt="">
                    <h3>Helena gyt</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>
            

                <div class="box">
                    <img src="img/doctor4.jpg" alt="">
                    <h3>Risheti</h3>
                    <span>psycriatist</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>
            

                <div class="box">
                    <img src="img/doctor.jpeg" alt="">
                    <h3>Jdf sjdb</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>
           

                <div class="box">
                    <img src="img/doctor_patient1.jpg" alt="">
                    <h3>Mr y</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>


                <!-- Extra doctor info -->

                <div class="box">
                    <img src="img/doctor6.jpg" alt="">
                    <h3>Patricia</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>


                <div class="box">
                    <img src="img/doctor7.jpg" alt="">
                    <h3>James hook</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>


                <div class="box">
                    <img src="img/doctor2.jpg" alt="">
                    <h3>Oliver</h3>
                    <span>expert doctor</span>

                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    
                    </div>
                </div>



            </div>


           

        </section>




         <!-- doctors section ends -->






         <!-- Job request for doctor start -->


         <div style="margin-top: 20px;"></div>


                <section id="book" class="book">

        <h1 class="heading"><span>Doctor's</span> Job Request</h1>

        <div class="row">

            <div class="image">
                <img src="img/online_booking.svg" alt="">
            </div>


        

            <form action="" method="POST">
    <h3>Fill Up</h3>
    <input type="text" name="name" placeholder="Your Name" class="box">
    <input type="number" name="number" placeholder="Your Number" class="box">
    <input type="email" name="email" placeholder="Your Email" class="box">
    <input type="date" name="date" class="box">

    <div class="form-group">
        
        <select name="gender" class="box">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>

    <input type="text" name="country" placeholder="Your Country" class="box">
    <input type="password" name="password" placeholder="Password" class="box">
    <input type="submit" name="submit" value="Submit Now" class="btn">
</form>




        </div>

        </section>




        <?php

        include("include/connection.php");

            if(isset($_POST['submit'])){

                $username=$_POST['name'];
                $number=$_POST['number'];
                $email=$_POST['email'];
                $date=$_POST['date'];
                $gender=$_POST['gender'];
                $country=$_POST['country'];
                $password=$_POST['password'];
                
                if(!empty($username) && !empty($number) && !empty($email) && !empty($date) && !empty($gender) && !empty($country)&& !empty($password)){

                    $query="INSERT INTO doctor (username,number,email,date,gender,country,password) VALUES('$username','$number','$email','$date','$gender','$country','$password')";

                    $result=mysqli_query($conn, $query);

                }

            }
?>



         <!-- Job request for doctor end -->




        
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