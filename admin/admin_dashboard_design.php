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


	<title>Admin Panel</title>
</head>
<body>



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
					<span class="text">Appoinment</span>
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
				<a href="#" class="logout">
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

            <ul class="box-info">
  <div class="row mb-4">
    <div class="col-md-4">


    <a href="admin_info.php">
    <li class="mb-4">
    <i class="fas fa-user-plus" style="color: #4579d3;font-size: 50px;"></i>

        <span class="text">


          <?php

            $query="SELECT * FROM admin";

            $ad=mysqli_query($conn,$query);

            $num=mysqli_num_rows($ad);

            echo '<h3>'.$num.'</h3> '
        ?>

          <p>Total Admin</p>
        </span>
      </li>
    </a>
      
    </div>
    <div class="col-md-4">

    <a href="total_doctor.php">

    <li class="mb-4">
      <i class="fas fa-user-md" style="font-size: 50px;color: #4579d3"></i>



        <span class="text">

        <?php

            $query="SELECT * FROM doctor WHERE status='Approve'";

            $ad=mysqli_query($conn,$query);

            $num=mysqli_num_rows($ad);

            echo '<h3>'.$num.'</h3> '
        ?>

          
          <p>Total Doctors</p>
        </span>
      </li>
    </a>
      
    </div>



    <div class="col-md-4">

    <a href="patient_record.php">
    <li class="mb-4">
      <i class="fas fa-bed" style="font-size: 50px;color: #4579d3"></i>

        <span class="text">

					<?php

			$query="SELECT * FROM patient_record WHERE status='checked'";

			$ad=mysqli_query($conn,$query);

			$num=mysqli_num_rows($ad);

			echo '<h3>'.$num.'</h3> ';
			?>
          
          <p>Total Patient</p>
        </span>
      </li>
    </a>
      
    </div>
  </div>


  <div class="row">
    <div class="col-md-4">

    <a href="#">

    <li class="mb-4">
      <i class="fas fa-flag" style="font-size: 50px;color: #4579d3"></i>
        <span class="text">

				
		<h3>2543</h3>
          <p>Total Report</p>
        </span>
      </li>

    </a>
     
    </div>



    <div class="col-md-4">

    <a href="job_request.php">

    <li class="mb-4">
      <i class="fas fa-book-open" style="font-size: 50px;color: #4579d3"></i>
      
        <span class="text">
		<?php

			$query="SELECT * FROM doctor WHERE status='pending'";

			$ad=mysqli_query($conn,$query);

			$num=mysqli_num_rows($ad);

			echo '<h3>'.$num.'</h3> '
			?>
          <p>Total Job Request</p>
        </span>
      </li>

    </a>
      
    </div>


    <div class="col-md-4">
      
    <a href="#">
    <li class="mb-4">
      
	  <!-- <i class="fas fa-money-check-dollar" style="font-size: 50px;color: #4579d3"></i> -->
	  <i class="fas  fa-bookmark" style="font-size: 50px;color: #4579d3; padding: 10px; "></i>
      
        <span class="text">
		<?php

$query="SELECT * FROM patient_record WHERE status='checked'";

$ad=mysqli_query($conn,$query);

$num=mysqli_num_rows($ad);
$income=$num*600;

echo '<h3>'.$income.'</h3> ';
?>
          <p>Total Income</p>
        </span>
      </li>
    </a>
    </div>
  </div>
</ul>

<!-- box info ends -->
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>