<?php 
// Pastikan tidak ada output sebelum session_start()
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD php</title>
  <link rel="stylesheet" href="css2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <style>
    body {
      padding-top: 0px; /* Adjust based on your navbar height(pengaturan untuk tingii navbar) */
    }

    #sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    #sidebar header {
      background-color: #111;  /* Warna latar belakang bagian atas sidebar */
      padding: 20px;
  }

    #sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 16px;
      color: #818181;
      display: block;
      transition: 0.3s;
    } 
    
    #sidebar a:hover {
      color: #f1f1f1;
    }

    #sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 30px;
      margin-left: 50px;
    }

    .social-icons {
      display: flex;
      font-size: 48px;
      margin-top: 40px;
    }

    .social-icons a {
      margin: 0 10px;
      color: #333;
      text-decoration: none;
    }

    .social-icons a:hover {
      color: #007bff;
    }

  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <button class="btn btn-dark" id="sidebarToggle">☰ </button>
    <a class="navbar-brand" href="#">Selamat Datang!</a>

      <div class="dropdown">
      <button class="btn btn-dark dropdown-toggle" type="button" id="settingDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-cogs"></i> Setting
      </button>
      <ul class="dropdown-menu" aria-labelledby="settingDropdown">
        <li>
          <a class="dropdown-item" onclick="changeTheme('theme-default')">Default Theme</a>
        </li>
        <li>
          <a class="dropdown-item" onclick="changeTheme('theme-blue')">Dark Theme</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  function changeTheme(theme) {
    document.getElementById('content').className = theme;
  }
</script>

<div id="sidebar">
  <a href="javascript:void(0)" class="closebtn" id="closeSidebar">×</a>

  <!-- Add your sidebar content here -->
            <header>
              <img src="myphoto.jpg" alt="">
              <h1>Erisa Damayanti</h1>
            </header>

              <!--menu items-->
              <div class="menu">
                <div class="item"><a href="Dashboard.php"><i class="fas fa-home"></i> Home</a></div>
                <div class="item"><a href="Profile_admin.php"><i class="fas fa-user"></i> Profile</a></div>
                <div class="item">
                  <a href="index.php">
                    <i class="fas fa-graduation-cap"></i>Mahasiswa</a>
                </div>
                <div class="item"><a href="gfk.php"><i class="fa-solid fa-chart-line"></i> Grafik</a></div>
                <div class="item"><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></div>
              </div>
              <div class="container">
              <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://www.instagram.com/erisa__67/" target="_blank"><i class="fab fa-instagram"></i></a>
                <!-- Tambahkan tautan media sosial lainnya sesuai kebutuhan -->
            </div>
        </div>
    </div>

<!-- Your main content goes here -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-xmF/J3NizG5U0iG3t5gBcev6ewXW0J6yGgo1fkysngfZDD8g6b6wwNXtUGk8gqFZ" crossorigin="anonymous"></script>

<!--fungsi mengaktifkan toggle sidebar-->

<!-- Script to make content responsive -->
<script>
  document.getElementById('sidebarToggle').addEventListener('click', function () {
    var content = document.getElementById('content');
    var sidebar = document.getElementById('sidebar');
    
    if (sidebar.style.width === '250px') {
      sidebar.style.width = '0';
      content.style.marginLeft = '0';
    } else {
      sidebar.style.width = '250px';
      content.style.marginLeft = '250px';
    }
  });

  document.getElementById('closeSidebar').addEventListener('click', function () {
    document.getElementById('sidebar').style.width = '0';
    document.getElementById('content').style.marginLeft = '0';
  });

  document.getElementById('searchBtn').addEventListener('click', function () {
    // Add your search functionality here
    alert('Implement your search functionality here');
  });

</script>

</body>
</html>

</body>
</html>
