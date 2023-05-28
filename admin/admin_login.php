<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .login-container {
            width: 300px;
            margin: 0 auto;
            margin-top: 150px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="login-container">
        <h2>Admin Login</h2>
        <form action="admin_login.php" method="POST">

        

        <div class="alert alert-danger">

       

        <?php

         //  Check invalid username or password and show message

            if(isset($error['admin'])){  //  isset check if the variable is set or not

                $show=$error['admin'];

                echo $show;
            }

        ?>

        </div>


            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <br><br>
            <input type="submit" value="Login">
        </form>
    </div>

    <?php

session_start();


    //  Connect with database

include ("../include/connection.php");  // admin_login--> admin--> include--> connection.php




// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $error=array();  // declare an empty array

    if(empty($username)){

        $error['admin']="Enter Username";
    }

    else if(empty($password)){

        $error['admin']="Enter Password";
    }

    if(count($error)==0){  //  count return array size

        $query="SELECT * FROM admin WHERE username='$username' AND password='$password'";

        $result=mysqli_query($conn,$query); //  mysqli_query take 2 parameters(connection,query), return rows




        if(mysqli_num_rows($result)>=1){   //  mysqli_num_rows() function is used to determine the number of rows returned by a SELECT query

            echo "<script> alert('You have login As an Admin')</script>";
            $_SESSION['admin']=$username;   //$_SESSION is a super global variable in PHP that is used to store and retrieve session data across multiple pages or requests


            // redirect to admin_dashboard
            header("Location: admin_dashboard_design.php");  //used for redirecting the user to a different page, setting cookies, controlling caching, and specifying content types
        }

        else{
            echo "<script> alert('Invalid Username or Password')</script>";
        }
    }
}
?>


</body>
</html>
