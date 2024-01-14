<?php
  include '../form/koneksi.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walkthrough Honkai :Star Rail</title>
    <!-- CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/index-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Rubik:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
    <!-- Navbar -->
    <!-- Navbar Gambar -->
  <nav class="navbar fixed-top navbar-expand-lg" >
  <div class="container-fluid">
    <a class="navbar-brand ">
        <img src="../img/index/Honkai-Star-Rail.png"alt="Honkai Star Rail" id="gambar">
    </a>
    <!-- Navbar Menu -->
    <div class="collapse navbar-collapse" >
      <ul class="nav nav-tabs navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list-karakter.html">Karakter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list-lightcone.php">Lightcone</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">
            Equipment</a>
            <ul class="dropdown-menu" style="font-size: 20px; font-weight: bold;">
              <li><a class="dropdown-item" href="list-relic.php">Relic</a></li>
              <li><a class="dropdown-item" href="list-ornament.php">Ornament</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="status.html">Istilah & Status</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="basic.html">Basic Gameplay</a>
        </li>
        
      </ul>
      <!-- Sign up and login Navbar -->
      <a href="../konstruksi/form/register.php" class="action_btn">Create Party Setup</a>
    <div class="toggle_btn">
    <i class="fa-solid fa-bars"></i>
    </div>
    </div>
  </div>
  
</nav>
</header>
<!-- Isi -->
<section class="container">
          <div id="nn_skinr"></div>
          <div id="nn_skinl"></div>
          <div class="row">
            <main class="content">
              <div class="content-header">
                <h1 class="content-title" style="color:#ffffff;">Honkai: Star Rail Planar Ornaments List</h1>
                
              </div>
              <div class="wrapper-lb1"><div id="nn_lb1"></div></div>
              <div class="wrapper-mpu1"><div id="nn_mobile_mpu1"></div></div>
              <?php
                $query = "SELECT * FROM ornament_hsr ORDER BY nama ASC";

                $result = mysqli_query($conn, $query);
                if(!$result){
                  die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
              }
              while ($row = mysqli_fetch_assoc($result))
                {
                ?>
              <div class="light-cones">
                <div class="light-cones-item">
                  <img class="light-cones-image" src="../form/dashboard/admin/Ornaments/<?php echo $row['gambar'];?>"style="padding: 10px" />
                  <div class="light-cones-body">
                    <div class="light-cones-name"><?php echo $row['nama']; ?></div>
                    <div class="light-cones-set">
                      <div class="light-cones-count">2</div>
                      <p class="light-cones-description"><?php echo $row['efek']; ?></p>
                    </div>
                  </div>
                </div>
                <?php
                }
                ?>
              </div>
              <div class="wrapper-lb1" style="margin-bottom: 0"><div id="nn_lb2"></div></div>
              <div class="wrapper-mpu1" style="margin-bottom: 0"><div id="nn_mobile_mpu2"></div></div>
            </main>
          </div>
        </section>