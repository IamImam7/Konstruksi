<?php
  include '../form/koneksi.php';
   // Fetch data from the database
   $query = "SELECT * FROM aeon_hsr ORDER BY id ASC"; 
   
   $result = mysqli_query($conn, $query);
 
   // Check if there are any rows in the result
   if (mysqli_num_rows($result) > 0) {
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
<style>
  .carousel-control-prev, .carousel-control-next {
    font-size: 2vh; /* Adjust the font size as needed */
    width: 6vh; /* Adjust the width as needed */
  }
</style>
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
          <a class="nav-link " aria-current="page" href="index.html">Home</a>
        </li>               
        <li class="nav-item">
          <a class="nav-link" href="content/list-karakter.html">Karakter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="content/list-lightcone.php">Lightcone</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"> Equipment</a>
          <ul class="dropdown-menu" style="font-size: 20px; font-weight: bold">
            <li><a class="dropdown-item" href="content/list-relic.php">Relic</a></li>
            <li><a class="dropdown-item" href="content/list-ornament.php">Ornament</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="content/status.php">Istilah & Status</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="content/basic.html">Basic Gameplay</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="content/list-tierlist.php">Tierlist</a>
        </li>
      </ul>
      <!-- Sign up and login Navbar -->
      <a href="form/register.php" class="action_btn">Create Tier List</a>
    <div class="toggle_btn">
    <i class="fa-solid fa-bars"></i>
    </div>
    </div>
  </div>
  
</nav>
</header>
<section class="container">
<div class="container" style="margin-top : 20vh;">
    <!-- Content here -->
    <div class="row" >
      <h2 class="text-center text-uppercase fs-1" style="margin-top: 3vh; color: white;">Istilah</h2>
    </div>
    <div class="row" style="margin-top: 3vh; color: white; background-color: #2c3e50; border-radius: 10px; ">
      <div class="col-4 fs-2 text-uppercase text-center" style="color: #f77f23;padding : 4vh;">
        Apa itu aeon?
        <img src="../img/status/Pom-Pom_Sticker_15.png" alt="pompom" style="width: 40%;"/>
      </div>
      <div class="col-8" style="color: white; padding: 4vh;">
      <span style="color:#0a9bf0;">Aeon</span> adalah makhluk misterius berdimensi lebih tinggi seperti dewa yang memimpin alam semesta. Kelahiran sebuah <span style="color:#0a9bf0;">Aeon</span> memunculkan sebuah <span style="color: #4464f2;">Path</span> , yang kemudian dikuasai oleh <span style="color:#0a9bf0;">Aeon</span>. <span style="color:#0a9bf0;">Aeon</span> juga memiliki kemampuan untuk memberikan kekuatan kepada manusia, menjadikan mereka sebagai Emanator .<br/>>
      <img src="../img/status/Pom-Pom_Sticker_20.png" alt="pompom" style="width: 20%;" class="text-end"/>
      </div>
    </div>
    <div class="row" >
      <h2 class="text-center text-uppercase font-weight-bold" style="margin-top: 3vh; color: white;">List Aeon</h2>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" style ="margin-top: 3vh; color: white; background-color: #2c3e50; border-radius: 10px; ">
      <div class="carousel-indicators" >
      <?php
          // Generate carousel indicators
          $active = 'class="active"';
          for ($i = 0; $i < mysqli_num_rows($result); $i++) {
            echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $i . '" ' . $active . ' aria-label="Slide ' . ($i + 1) . '"></button>';
            $active = ''; // Remove 'active' class after the first iteration
          }
        ?>
      </div>
      <div class="carousel-inner">
      <?php
          // Fetch and display carousel items (including description and image)
          $active = 'active';
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="carousel-item ' . $active . '">';
            echo '<div class="row" style="margin-top: 10vh; margin-bottom: 10vh;">';
            echo '<div class="col text-end " style="margin-top: 30vh;">';
            echo '<h3 style="color:white;">' . $row['nama'] . '</h3>';
            echo '<img src="../form/dashboard/admin/aeon/path/' . $row['gambar_path'] . '" class="d-flex" alt="..."  style="width: 60px; height: 60px; float: right">';
            echo '</br>';
            echo '<h3 style="color:#c1de97;">' . $row['path_'] . '</h3>';
            echo '<p style="color: #99e3f2;">' . $row['deskripsi_aeon'] . '</p>';
            echo '</div>';
            echo '<div class="col">';
            echo '<img src="../form/dashboard/admin/aeon/aeon/' . $row['gambar_aeon'] . '" class="d-block w-100" alt="..."  style="min-height:40vh;">';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            $active = ''; // Remove 'active' class after the first iteration
          }
        ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="row" >
      <h2 class="text-center text-uppercase fs-1" style="margin-top: 3vh; color: white;"> Path </h2>
    </div>
    <div class="row" style="margin-top: 3vh; color: white; background-color: #2c3e50; border-radius: 10px; ">
      <div class="col-4 fs-2 text-uppercase text-center" style="color: #f77f23;padding : 4vh;">
        Apa itu Path?
        <img src="../img/status/Pom-Pom_Sticker_15.png" alt="pompom" style="width: 40%;"/>
      </div>
      <div class="col-8" style="color: white; padding: 4vh;">
      <span style="color:#fff;">
          Path dalam Honkai Star Rail adalah kumpulan energi Imajiner yang lahir sebagai manifestasi konsep filosofis secara Universal. Mereka yang meyakini dan mengamalkan konsep-konsep dibalik Path akan menjadi Pathsriders, mengikuti jalan yang berubah sesuai dengan filosofi dan opini mereka sendiri. Dalam beberapa kasus khusus, entitas yang sepenuhnya menjalin diri dengan suatu Path dan mengeksplorasi konsep filosofisnya akan menjadi sebuah Aeon. Aeon, entitas berbentuk Tuhan atau Dewa, terhubung erat dengan Path, dan setelah dinobatkan sebagai Tuhan, mereka dapat menggunakan jalur sesuka hati mereka selama hidup karakter yang terhubung dengan mereka.<br/>>
      <img src="../img/status/Pom-Pom_Sticker_20.png" alt="pompom" style="width: 20%;" class="text-end"/>
      </div>
    </div>
    <div class="row" >
      <h2 class="text-center text-uppercase font-weight-bold" style="margin-top: 3vh; color: white;">List Path</h2>
    </div>
    <!-- Carousel untuk list path  -->
    <div id="pathCarousel" class="carousel slide" style="margin-top: 3vh; color: white; background-color: #2c3e50; border-radius: 10px;">
  <div class="carousel-indicators">
    <?php
    // Generate carousel indicators for paths
    $activePath = 'class="active"';
    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
      echo '<button type="button" data-bs-target="#pathCarousel" data-bs-slide-to="' . $i . '" ' . $activePath . ' aria-label="Slide ' . ($i + 1) . '"></button>';
      $activePath = ''; // Remove 'active' class after the first iteration
    }
    ?>
  </div>
  <div class="carousel-inner">
    <?php
    // Fetch and display carousel items for paths
    $activePath = 'active';
    mysqli_data_seek($result, 0); // Reset the result pointer to the beginning
    while ($rowPath = mysqli_fetch_assoc($result)) {
      echo '<div class="carousel-item ' . $activePath . '">';
      echo '<div class="row" style="margin-top: 10vh; margin-bottom: 10vh;">';
      echo '<div class="col-8 text-end ">';
      echo '<h3 style="color:white;">' . $rowPath['path_'] . '</h3>';
      echo '<h4 style="color: #21965a;"> Lore Wise</h4>';
      echo '<p style="color: #99e3f2;">' . $rowPath['deskripsi_path'] . '</p>';
      echo '<h4 style="color: #21965a;"> Gameplay </h4>';
      echo '<p style="color: #99e3f2;">' . $rowPath['gameplay_path'] . '</p>';
      echo '</div>';
      echo '<div class="col-4">';
      echo '<img src="../form/dashboard/admin/aeon/path/' . $rowPath['gambar_path'] . '" class="text-center " alt="..."  style=" width : 50vh">';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      $activePath = ''; // Remove 'active' class after the first iteration
    }
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#pathCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#pathCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
        </section>
  <?php
  } else {
    echo "No images found in the database.";
  }
?>