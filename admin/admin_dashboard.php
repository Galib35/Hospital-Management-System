<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

  <title>Admin Panel</title>

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
      align-items: flex-start;
      margin-bottom: 30px;
    }

    .admin-info-left {
      flex-basis: 70%;
      margin-right: 20px;
    }

    .admin-info-right {
      flex-basis: 30%;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
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

    .admin-info-right form {
      background-color: #f8f9fa;
      padding: 20px;
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
      width: 100%;
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
    }

    .btn-submit:hover {
      background-color: #0069d9;
    }
  </style>
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
        session_start();
        $admin_name = $_SESSION['admin'];
        echo '<span class="text">' . $admin_name . '</span>';
      ?>
    </div>

    <ul class="side-menu top">
      <li class="active">
        <a href="#">
          <i class='bx bxs-dashboard'></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-shopping-bag-alt'></i>
          <span class="text">Doctor</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-doughnut-chart'></i>
          <span class="text">Patient</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-message-dots'></i>
          <span class="text">Appointment</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-group'></i>
          <span class="text">Team</span>
        </a>
      </li>
    </ul>
    <ul class="side-menu">
      <li>
        <a href="#">
          <i class='bx bxs-cog'></i>
          <span class="text">Admin Profile</span>
        </a>
      </li>
      <li>
        <a href="#" class="logout">
          <i class='bx bxs-log-out-circle'></i>
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
          <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden>
      <label for="switch-mode" class="switch-mode"></label>
      <a href="#" class="notification">
        <i class='bx bxs-bell'></i>
        <span class="num">8</span>
      </a>
      <a href="#" class="profile">
        <img src="img/people.png">
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
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
              <a class="active" href="#">Home</a>
            </li>
          </ul>
        </div>
        <a href="#" class="btn-download">
          <i class='bx bxs-cloud-download'></i>
          <span class="text">Download PDF</span>
        </a>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="admin-info admin-info-left">
              <h2>Admin Info</h2>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
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
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-6">
            <div class="admin-info admin-info-right">
              <h2>Add Admin</h2>
              <form>
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
                  <input type="file" id="profile-picture" name="profile-picture" class="form-control">
                </div>
                <button type="submit" class="btn btn-submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script src="script.js"></script>
</body>
</html>
