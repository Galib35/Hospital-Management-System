<?php
    
    include("../include/connection.php");
    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $query="DELETE FROM admin WHERE id='$id'";

        mysqli_query($conn,$query);

        session_start();

        
    }
    
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <style>
    /* Custom CSS */
    body {
      font-family: Arial, sans-serif;
    }

    #content {
      padding: 20px;
    }

    .admin-info {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .table-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
   
    table {
       width: 80%;
      border-collapse: collapse;
      

        margin: 0 auto;
     
    }

    table th,
    table td {
      padding: 10px;
      border: 1px solid #ccc;
    }

    .btn-remove {
      padding: 5px 10px;
      font-size: 14px;
      background-color: #dc3545;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    .btn-remove:hover {
      background-color: #c82333;
    }

    .admin-info-right{
      background-color: #f8f9fa;
      padding: 10px;
      border-radius: 5px;
    }

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
  justify-content: center;
  align-items: center;
  height: 40vh;
}

form {
  width: 66.67%; /* 2/3 of the container width */
}

.separator{
    margin-top: 60px;

}


  </style>

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
            

               
            <!-- //    $admin_name=$_SESSION['admin']; -->

            <!-- //     echo ' -->
            <!-- //         <span class="text">'.$admin_name.'</span> -->
                <!-- // ' -->
    

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
							<a href="admin_dashboard_design.php">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>



            <!-- Admin Info from here -->

            

            <h2 class="centered-heading" >Admin Info</h2>

            <?php   
                    $show="";

                    if($_SERVER['REQUEST_METHOD'] === 'POST'){  // here 'add' is submit button name

                        $username=$_POST['username'];
                        $password=$_POST['password'];
                        if(!empty($_FILES['profile_picture']))$image=$_FILES['profile_picture']['name'];

                        $error=array();

                        if(empty($username))$error['u']="Enter Admin Username";
                        else if(empty($password))$error['u']="Enter Admin Password";
                        else if(empty($image))$error['u']="Enter Admin Picture";


                        if(count($error)==0){

                            // check for repeat admin data

                            $ck=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");

                            if(mysqli_num_rows($ck)==0){

                                $q="INSERT INTO admin (username,password,profile) VALUES('$username', '$password','$image')";

                            $result=mysqli_query($conn,$q); // here result check values are properly inserted into database or not

                            if($result){

                                move_uploaded_file($_FILES['profile_picture']['tmp_name'],"img/$image" ); //  upload file (from, to);

                            }

                            else{
                                echo " Not properly";
                            }
                        }


                            }


                            if(isset($error['u']))
                            {
                                $show="<h5 class='text-center alert alert-danger'>$error[u]</h5>";

                            }

                            else $show="";

                            
                        unset($_POST['add']);

                    }

            ?>
  
    
      <div class="table_container">
        
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

          <?php

                $query="SELECT DISTINCT * FROM admin";

                $res=mysqli_query($conn, $query);

                $output="";

                while($rows=mysqli_fetch_array($res)){

                    $id=$rows['id'];
                    $username=$rows['username'];

                   

                    $output.="<tr>
              <td>$id</td>
              <td>$username</td>
              <td>
                    <a href='admin_info.php?id=$id'>
                    <button id='$id' class='btn btn-remove' name='remove' >Remove</button> 
                    </a>
                 
              </td>
            </tr>";

                }


                
                echo $output;


             



              

          ?>
            <!-- <tr>
              <td>1</td>
              <td>Admin1</td>
              <td>
                <button class="btn btn-remove">Remove</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Admin2</td>
              <td>
                <button class="btn btn-remove">Remove</button>
              </td>
            </tr> -->
          </tbody>
        </table>
      </div>
    
 

  <div class="separator">

  </div>

  
  
  <h2 class="centered-heading">Add Admin</h2>

    <?php

 //       echo $show;

        $show="";
    ?>

  <div class="form-container">  

        <form action="admin_info.php" method="post" enctype="multipart/form-data" autocomplete="off">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control">
          </div>
          <div class="form-group">
            <label for="profile-picture">Profile Picture:</label>
            <input type="file" id="profile-picture" name="profile_picture" class="form-control">
          </div>
          <button type="submit" id="submit" class="btn btn-submit" name="add">Submit</button>
          <!-- <input type="submit" name="add" value="Login"> -->
        </form>
</div>



	
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>