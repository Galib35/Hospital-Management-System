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
                    margin-bottom: 5px;
            }


        </style>

      



    </head>

    <body>

        <!-- header section starts -->

        <header class="header">

            <a href="#" class="logo"> <i class="fas fa-heartbeat "> </i> YouHeal   </a>

            <nav class="navbar">

                <a href="index.php#home">home</a>
                <a href="index.php#services">services</a>
                <a href="index.php#about">about </a>
                <a href="doctors.php">doctors </a>
                <a href="book.php">book</a>
                <a href="index.php#review">review </a>
                <a href="blogs.php">blog </a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

        </header>

        <!-- header section ends -->





        <!-- home section starts -->


        <?php

        if(isset($_GET['id'])){

        

        $id=$_GET['id'];

        $query="SELECT * FROM service_extend WHERE service_id='$id'";

        $res=mysqli_query($conn,$query);

        while($row=mysqli_fetch_array($res)){

            $heading=$row['heading'];
            $paragraph=$row['paragraph'];
            $image=$row['image'];

 //           header("Content-type: image/svg+xml");

            // Output the image data
 //           echo $row['image'];

            echo "

            <section class=\"home\" id=\"home\">
            <div class=\"image\">
              
                 $image
            </div>

            <div class=\"content\">
                <h3>$heading</h3>
                <p>$paragraph</p>
                
            </div>

        </section>

        ";

        }

      

        }


            ?>

        <!-- home section ends -->






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



        <!-- custom js file link -->
        <script src="js/script.js"></script>
        
    </body>
</html>