<?php

    session_start();

    include("../include/connection.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>

.form-group {
     
     margin-bottom: 20px;
     
   }

   .form-group label {
     display: block;
     margin-bottom: 5px;
   }

   .form-group input[type="text"],
   .form-group input[type="password"],
   .form-group input[type="file"] {
     width: 80%;
     padding: 10px;
     border: 1px solid #ccc;
     border-radius: 3px;
   }

   .btn-submit {
     padding: 10px 20px;
     font-size: 14px;
     background-color: #007bff;
     color: #fff;
     border: none;
     cursor: pointer;
     text-align: center;
   }

   .btn-submit:hover {
     background-color: #0069d9;
   }

   .centered-heading {
 text-align: center;
 margin: 20px;
}

.form-container {
 display: flex;
 /* justify-content: center;
 align-items: center; */ 
 height: 90vh;
}


    </style>


	<title>Admin Profile</title>
</head>
<body>

    <?php

        $ad=$_SESSION['admin'];
        $query="SELECT * FROM admin WHERE username='$ad'";

        $res=mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($res)){

            $username=$row['username'];
            $profiles=$row['profile'];
			$user_id=$row['id'];
        }
    ?>



	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminPanel</span>
		</a>

        <div class="brand">

        <i class="fas fa-user"></i>
            <?php

               
                $admin_name=$_SESSION['admin'];

                echo '
                     <span class="text">'.$admin_name.'</span>
                '
            ?>

        </div>

        

		<ul class="side-menu top">
			<li class="active">
				<a href="admin_dashboard_design.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="total_doctor.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Doctor</span>
				</a>
			</li>
			<li>
				<a href="patient_record.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Patient</span>
				</a>
			</li>
			<li>
				<a href="appointment_list.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Appointment</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
			<li>
				<a href="admin_profile.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Admin Profile</span>
				</a>
			</li>
			<li>
				<a href="admin_logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
           

			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/galib_fb.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>




			<!--  box information at middle  -->

           
            <div class="row">
    <div class="col-md-6">
        <h1><?php echo $username;  echo " :  " ?> Profile</h1>

        <?php
        if(isset($_POST['update'])){
            if(!empty($_FILES['profile'])) $profile = $_FILES['profile']['name'];
            if(empty($profile)){
            }
            else{
                $query = "UPDATE admin SET profile='$profile' WHERE username='$ad'";
                $result = mysqli_query($conn,$query);
                move_uploaded_file($_FILES['profile']['tmp_name'], "img/$profile");
            }
        }
        ?>

        <div style="padding: 20px;"></div>

        <div class="form-container">
            <form method="post" enctype="multipart/form-data">
                <?php
                $cacheBuster = time(); // Generate a cache-busting parameter
                echo "<img src='img/$profiles?cb=$cacheBuster' class='col-md-12' style='height: 300px;'>";
                ?>
                <br><br>
                <div class="form-group">
                    <label for="" style="font-size: 20px;">Update Profile</label>
                    <input type="file" name="profile" class="form-control" style="font-size: 18px;">
                </div>
                <br>
                <input type="submit" name="update" value="UPDATE" class="btn btn-submit" style="font-size: 20px;">
            </form>
        </div>
    </div>

    <div class="col-md-6">

		<?php

				if(isset($_POST['change'])){

					$user=$_POST['username'];
					$pass=$_POST['password'];

					

					if(!empty($user && !empty($pass))){

						$query = "UPDATE admin SET username='$user', password='$pass' WHERE id='$user_id'";

						$res=mysqli_query($conn,$query);
						$_SESSION['admin']=$user;

						

					}

				
				}
		?>
		
        <div class="row">
            <div class="col-md-12">
                <h2>Update profile</h2>
                <div class="form-container">
                    <form action="admin_profile.php" method="post" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <button type="submit" id="submit2" class="btn btn-submit" name="change">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

           
<!-- box info ends -->
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>